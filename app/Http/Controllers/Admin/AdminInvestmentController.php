<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Investment;
use Illuminate\Http\Request;

class AdminInvestmentController extends Controller
{
    // Affiche les investissements à valider
    public function pending()
    {
        $investments = Investment::where('status', 'pending')->with('user')->latest()->get();
        return view('admin.investments.pending', compact('investments'));
    }

    // Valide un investissement
    public function validateInvestment($id)
    {
        $investment = Investment::findOrFail($id);
        $investment->status = 'active';
        $investment->last_profit_date = now();
        $investment->save();

        return redirect()->back()->with('success', 'Investissement validé avec succès.');
    }
}
