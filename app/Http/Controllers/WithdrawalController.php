<?php

namespace App\Http\Controllers;

use App\Models\Withdrawal;
use App\Models\WithdrawalRequest;
use App\Models\Investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WithdrawalController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        // Calculer le total des profits disponibles
        $totalProfit = Investment::where('user_id', $user->id)->sum('total_profit');
        
        // Récupérer l'adresse de retrait de l'utilisateur
        $withdrawalInfo = Withdrawal::where('user_id', $user->id)->first();
        
        // Récupérer l'historique des demandes de retrait
        $withdrawalRequests = WithdrawalRequest::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('User.pages.withdrawal', compact('totalProfit', 'withdrawalInfo', 'withdrawalRequests'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string',
            'address' => 'required|string|max:255',
        ]);

        Withdrawal::updateOrCreate(
            ['user_id' => Auth::id()],
            [
                'type' => $request->type,
                'address' => $request->address
            ]
        );

        return redirect()->route('User.withdrawal')->with('success', 'Withdrawal address saved successfully.');
    }

    public function requestWithdrawal(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:10',
        ]);

        $user = Auth::user();
        $requestedAmount = $request->amount;

        // Vérifier le solde disponible
        $totalProfit = Investment::where('user_id', $user->id)->sum('total_profit');
        
        if ($requestedAmount > $totalProfit) {
            return response()->json([
                'success' => false,
                'message' => 'Insufficient funds. Available balance: $' . number_format($totalProfit, 2)
            ]);
        }

        // Vérifier le montant minimum
        if ($requestedAmount < 10) {
            return response()->json([
                'success' => false,
                'message' => 'Minimum withdrawal amount is $10.00'
            ]);
        }

        // Vérifier si l'utilisateur a une adresse de retrait
        $withdrawalInfo = Withdrawal::where('user_id', $user->id)->first();
        if (!$withdrawalInfo) {
            return response()->json([
                'success' => false,
                'message' => 'Please set up your withdrawal address first.'
            ]);
        }

        // Calculer les frais et le montant net
        $fee = WithdrawalRequest::calculateFee($requestedAmount);
        $netAmount = WithdrawalRequest::calculateNetAmount($requestedAmount);

        try {
            DB::beginTransaction();

            // Créer la demande de retrait
            WithdrawalRequest::create([
                'user_id' => $user->id,
                'amount' => $requestedAmount,
                'fee' => $fee,
                'net_amount' => $netAmount,
                'status' => 'pending',
                'withdrawal_type' => $withdrawalInfo->type,
                'withdrawal_address' => $withdrawalInfo->address,
            ]);

            // Déduire le montant des profits
            $this->deductFromProfits($user->id, $requestedAmount);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Withdrawal request submitted successfully. You will receive $' . number_format($netAmount, 2) . ' after processing.',
                'net_amount' => number_format($netAmount, 2),
                'fee' => number_format($fee, 2)
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while processing your request. Please try again.'
            ]);
        }
    }

    private function deductFromProfits($userId, $amount)
    {
        $investments = Investment::where('user_id', $userId)
            ->where('total_profit', '>', 0)
            ->orderBy('total_profit', 'desc')
            ->get();

        $remainingAmount = $amount;

        foreach ($investments as $investment) {
            if ($remainingAmount <= 0) break;

            if ($investment->total_profit >= $remainingAmount) {
                $investment->total_profit -= $remainingAmount;
                $investment->save();
                $remainingAmount = 0;
            } else {
                $remainingAmount -= $investment->total_profit;
                $investment->total_profit = 0;
                $investment->save();
            }
        }
    }

    public function calculateWithdrawal(Request $request)
    {
        $amount = $request->amount;
        
        if ($amount < 10) {
            return response()->json([
                'success' => false,
                'message' => 'Minimum withdrawal amount is $10.00',
                'net_amount' => 0,
                'fee' => 0
            ]);
        }

        $fee = WithdrawalRequest::calculateFee($amount);
        $netAmount = WithdrawalRequest::calculateNetAmount($amount);

        return response()->json([
            'success' => true,
            'net_amount' => number_format($netAmount, 2),
            'fee' => number_format($fee, 2),
            'original_amount' => number_format($amount, 2)
        ]);
    }
}