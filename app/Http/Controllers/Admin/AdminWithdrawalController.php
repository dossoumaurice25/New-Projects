<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WithdrawalRequest;
use App\Models\Investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminWithdrawalController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->get('status', 'pending');
        
        $withdrawalRequests = WithdrawalRequest::with('user')
            ->when($status !== 'all', function ($query) use ($status) {
                return $query->where('status', $status);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        $stats = [
            'pending' => WithdrawalRequest::where('status', 'pending')->count(),
            'approved' => WithdrawalRequest::where('status', 'approved')->count(),
            'completed' => WithdrawalRequest::where('status', 'completed')->count(),
            'rejected' => WithdrawalRequest::where('status', 'rejected')->count(),
        ];

        return view('admin.withdrawals.index', compact('withdrawalRequests', 'stats', 'status'));
    }

    public function show(WithdrawalRequest $withdrawal)
    {
        $withdrawal->load('user');
        
        // Récupérer les informations supplémentaires de l'utilisateur
        $userTotalProfit = Investment::where('user_id', $withdrawal->user_id)->sum('total_profit');
        $userWithdrawals = WithdrawalRequest::where('user_id', $withdrawal->user_id)
            ->where('id', '!=', $withdrawal->id)
            ->orderBy('created_at', 'desc')
            ->limit(5)
            ->get();

        return view('admin.withdrawals.show', compact('withdrawal', 'userTotalProfit', 'userWithdrawals'));
    }

    public function approve(WithdrawalRequest $withdrawal, Request $request)
    {
        if ($withdrawal->status !== 'pending') {
            return response()->json([
                'success' => false,
                'message' => 'Cette demande a déjà été traitée.'
            ]);
        }

        try {
            DB::beginTransaction();

            $withdrawal->update([
                'status' => 'approved',
                'admin_notes' => $request->admin_notes,
                'processed_at' => now()
            ]);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Demande de retrait approuvée avec succès.'
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Erreur lors de l\'approbation: ' . $e->getMessage()
            ]);
        }
    }

    public function reject(WithdrawalRequest $withdrawal, Request $request)
    {
        if ($withdrawal->status !== 'pending') {
            return response()->json([
                'success' => false,
                'message' => 'Cette demande a déjà été traitée.'
            ]);
        }

        try {
            DB::beginTransaction();

            // Remettre les fonds dans les profits de l'utilisateur
            $this->refundToUser($withdrawal->user_id, $withdrawal->amount);

            $withdrawal->update([
                'status' => 'rejected',
                'admin_notes' => $request->admin_notes ?? 'Demande rejetée par l\'administrateur',
                'processed_at' => now()
            ]);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Demande de retrait rejetée. Les fonds ont été remboursés à l\'utilisateur.'
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Erreur lors du rejet: ' . $e->getMessage()
            ]);
        }
    }

    public function complete(WithdrawalRequest $withdrawal, Request $request)
    {
        if ($withdrawal->status !== 'approved') {
            return response()->json([
                'success' => false,
                'message' => 'Cette demande doit être approuvée avant d\'être complétée.'
            ]);
        }

        try {
            $withdrawal->update([
                'status' => 'completed',
                'admin_notes' => $request->admin_notes ?? $withdrawal->admin_notes,
                'processed_at' => now()
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Retrait marqué comme complété.'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erreur lors de la completion: ' . $e->getMessage()
            ]);
        }
    }

    private function refundToUser($userId, $amount)
    {
        // Trouver le premier investissement avec de la place pour les profits
        $investment = Investment::where('user_id', $userId)->first();
        
        if ($investment) {
            $investment->total_profit += $amount;
            $investment->save();
        } else {
            // Si aucun investissement n'existe, créer une entrée de remboursement
            // Vous pouvez ajuster cette logique selon vos besoins
            Investment::create([
                'user_id' => $userId,
                'amount' => 0,
                'total_profit' => $amount,
                'plan_name' => 'Refund',
                'roi_percentage' => 0,
                'duration_days' => 0,
                'status' => 'completed'
            ]);
        }
    }

    public function bulkAction(Request $request)
    {
        $request->validate([
            'action' => 'required|in:approve,reject,complete',
            'withdrawal_ids' => 'required|array',
            'withdrawal_ids.*' => 'exists:withdrawal_requests,id'
        ]);

        $withdrawalIds = $request->withdrawal_ids;
        $action = $request->action;
        $adminNotes = $request->admin_notes ?? '';

        $successCount = 0;
        $errorCount = 0;

        foreach ($withdrawalIds as $id) {
            $withdrawal = WithdrawalRequest::find($id);
            
            try {
                if ($action === 'approve' && $withdrawal->status === 'pending') {
                    $withdrawal->update([
                        'status' => 'approved',
                        'admin_notes' => $adminNotes,
                        'processed_at' => now()
                    ]);
                    $successCount++;
                    
                } elseif ($action === 'reject' && $withdrawal->status === 'pending') {
                    $this->refundToUser($withdrawal->user_id, $withdrawal->amount);
                    $withdrawal->update([
                        'status' => 'rejected',
                        'admin_notes' => $adminNotes ?: 'Rejet en lot par l\'administrateur',
                        'processed_at' => now()
                    ]);
                    $successCount++;
                    
                } elseif ($action === 'complete' && $withdrawal->status === 'approved') {
                    $withdrawal->update([
                        'status' => 'completed',
                        'admin_notes' => $adminNotes ?: $withdrawal->admin_notes,
                        'processed_at' => now()
                    ]);
                    $successCount++;
                }
                
            } catch (\Exception $e) {
                $errorCount++;
            }
        }

        return response()->json([
            'success' => true,
            'message' => "{$successCount} demandes traitées avec succès. {$errorCount} erreurs."
        ]);
    }
}