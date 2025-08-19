<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\User;
use App\Mail\PasswordResetCodeMail;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'email' => 'required|email',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirection selon le rôle
            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.dashboard');
            }

            return redirect()->route('User.dashboard');
        }

        return back()->withErrors([
            'username' => 'Identifiants incorrects.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'You are disconnected.');
    }

    public function forgot_pass(){
        return view('auth.forgot_password');
    }



     // Traitement de l'envoi du lien de réinitialisation
    public function forgotPasswordFromPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ], [
            'email.exists' => 'Aucun compte n\'est associé à cette adresse email.'
        ]);

        // Supprimer les anciens tokens pour cet email
        DB::table('password_reset_tokenss')
            ->where('email', $request->email)
            ->delete();

        // Générer un nouveau token
        $token = Str::random(64);

        // Stocker le token dans la base de données
        DB::table('password_reset_tokenss')->insert([
            'email' => $request->email,
            'token' => Hash::make($token),
            'created_at' => Carbon::now()
        ]);

        // Envoyer l'email
            Mail::send('emails.recovery_code', [
                'token' => $token,
                'email' => $request->email
            ], function($message) use ($request) {
                $message->to($request->email);
                $message->subject('Reset your password - NovaPulse');
                $message->from(config('mail.from.address'), config('mail.from.name'));
            });

            

            return redirect()->route('login')->with('success', 'We have sent email for reset password.');
        
    }









    // Afficher la page de réinitialisation avec le token
    public function showResetForm($token)
    {
        return view('auth.reset-password', ['token' => $token]);
    }

    // Traitement de la réinitialisation du mot de passe
    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ], [
            'password.confirmed' => 'Les mots de passe ne correspondent pas.',
            'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.'
        ]);

        // Vérifier le token
        $passwordReset = DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->first();

        if (!$passwordReset || !Hash::check($request->token, $passwordReset->token)) {
            return back()->withErrors(['email' => 'Ce lien de réinitialisation est invalide.']);
        }

        // Vérifier si le token n'a pas expiré (30 minutes)
        if (Carbon::parse($passwordReset->created_at)->addMinutes(30)->isPast()) {
            return back()->withErrors(['email' => 'Ce lien de réinitialisation a expiré.']);
        }

        // Mettre à jour le mot de passe
        $user = User::where('email', $request->email)->first();
        $user->password = Hash::make($request->password);
        $user->save();

        // Supprimer le token utilisé
        DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->delete();

        return redirect()->route('login')->with('success', 'Votre mot de passe a été réinitialisé avec succès !');
    }

    
}
