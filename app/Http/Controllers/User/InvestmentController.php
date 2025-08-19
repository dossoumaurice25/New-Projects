<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Investment;
use App\Models\Wallet;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class InvestmentController extends Controller
{
    public function checkout(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
            'payment_method' => 'required|in:wallet,btc,eth,usdt_trc20,usdt_bep20',
        ]);

        $amount = $request->amount;
        $method = $request->payment_method;
        $user = Auth::user();

        if ($method === 'wallet') {
            $wallet = $user->wallet;

            if (!$wallet || $wallet->balance < $amount) {
                return redirect()->route('User.dashboard')->with('error', 'Insufficient balance.');
            }

            // Déduire du wallet
            $wallet->balance -= $amount;
            $wallet->save();

            // Créer l'investissement
            Investment::create([
                'user_id' => $user->id,
                'amount' => $amount,
                'source' => 'wallet',
                'status' => 'active',
            ]);

            return redirect()->route('User.dashboard')->with('success', 'Investment successfully launched.');
        }

        // Sinon, c’est un paiement crypto → redirection vers QR code
        return redirect()->route('User.invest.qr.preview', [
            'amount' => $amount,
            'method' => $method,
        ]);
    }

    public function preview(Request $request)
    {
        $amount = $request->amount;
        $method = $request->method;

        // Ici, tu pourras appeler l’API Coingecko pour la conversion si tu veux
        return view('User.pages.invests.preview', compact('amount', 'method'));
    }

    public function confirmPayment(Request $request)
    {
        $user = Auth::user();
        $amount = $request->input('amount');
        
        // Crée un enregistrement d'investissement en attente
        Investment::create([
            'user_id' => $user->id,
            'amount' => $amount,
            'source' => 'crypto',
            'status' => 'pending',
            'last_profit_date' => null,
        ]);

        return redirect()->route('User.dashboard')->with('success', 'Your purchase has been registered. Waiting for validation.');
    }

    
}
