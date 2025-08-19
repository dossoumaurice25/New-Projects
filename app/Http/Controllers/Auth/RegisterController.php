<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function showRegistrationForm(Request $request)
    {
        $referralCode = $request->query('ref');
        $referrer = User::where('referral_code', $referralCode)->first();

        if (!$referrer) {
            abort(403, "Lien de parrainage invalide.");
        }

        return view('auth.custom-register', [
            'referrer' => $referrer
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => ['required', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'email_confirmation' => ['required', 'same:email'],
            'password' => ['required', 'min:8', 'confirmed'],
            'first_name' => ['required'],
            'last_name' => ['required'],
            'address' => ['required'],
            'city' => ['required'],
            'country' => ['required'],
            'phone_number' => ['required'],
            'referred_by' => ['required', 'exists:users,id']
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'phone_number' => $request->phone_number,
            'referred_by' => $request->referred_by,
            'referral_code' => strtoupper(Str::random(10)),
        ]);

        return redirect()->route('login')->with('success', 'Inscription réussie. Veuillez vous connecter.');
    }
}
