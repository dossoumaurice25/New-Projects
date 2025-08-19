<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Wallet;

use Illuminate\Http\Request;

class DepositController extends Controller
{
  
    public function index()
    {
        $deposits = Deposit::with('user')->where('status', 'pending')->latest()->get();
        return view('Admin.deposits.index', compact('deposits'));
    }

    
    public function validateDeposit($id)
    {
        $deposit = Deposit::findOrFail($id);

        if ($deposit->status !== 'pending') {
            return back()->with('error', 'Ce dépôt a déjà été traité.');
        }

        // Mettre à jour le statut
        $deposit->update(['status' => 'approved']);

        // Créditer le wallet de l'utilisateur
        $wallet = $deposit->user->wallet;

        if ($wallet) {
            $wallet->increment('balance', $deposit->amount_usd); 
        } else {
            // Si le wallet n'existe pas encore
            Wallet::create([
                'user_id' => $deposit->user_id,
                'balance' => $deposit->amount_usd,
            ]);
        }

        return back()->with('success', 'Dépôt approuvé et wallet crédité.');
    }


}
