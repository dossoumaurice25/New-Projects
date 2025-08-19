<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DepositController extends Controller
{
    public function preview(Request $request)
    {

        // Validation des données du formulaire
       $validated = $request->validate([
            'amount' => 'required|numeric|min:1',
            'method' => 'required|in:btc,eth,usdt_trc20,usdt_bep20',
        ]);

        $usdAmount = $validated['amount'];
        $method = $validated['method'];

        // Symboles compatibles avec CoinGecko
        $symbol = match ($method) {
            'btc' => 'bitcoin',
            'eth' => 'ethereum',
            'usdt_trc20', 'usdt_bep20' => 'tether',
        };

        // Appel API CoinGecko pour obtenir le prix
        /*$response = Http::get('https://api.coingecko.com/api/v3/simple/price', [
            'ids' => $symbol,
            'vs_currencies' => 'usd',
        ]);*/
        $response = Http::withOptions(['verify' => false])->get('https://api.coingecko.com/api/v3/simple/price', [
            'ids' => $symbol,
            'vs_currencies' => 'usd',
        ]);

        if (!$response->ok() || !$response->json()[$symbol]['usd']) {
            return back()->with('error', 'Conversion momentanément indisponible.');
        }

        $price = $response->json()[$symbol]['usd'];
        $cryptoAmount = round($usdAmount / $price, 8);

        $address = config('crypto.addresses')[$method];

        return view('User.pages.depositpreview', [
            'amount' => $usdAmount,
            'cryptoAmount' => $cryptoAmount,
            'method' => $method,
            'address' => $address,
        ]);

    }

    public function store(Request $request){
         $request->validate([
            'amount_usd' => 'required|numeric|min:0.01',
            'crypto_amount' => 'required|numeric|min:0.00000001',
            'method' => 'required|in:btc,eth,usdt_trc20,usdt_bep20',
        ]);

        Deposit::create([
            'user_id' => Auth::id(),
            'amount_usd' => $request->amount_usd,
            'crypto_amount' => $request->crypto_amount,
            'method' => $request->method,
            'status' => 'pending',
        ]);

        return redirect()->route('User.deposit')->with('success', 'Dépôt en attente de validation.');
    }
}
