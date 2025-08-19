<?php

use App\Http\Controllers\Admin\AdminInvestmentController;
use App\Http\Controllers\Admin\AdminWithdrawalController;
use App\Http\Controllers\Admin\DepositController as AdminDepositController;
use App\Http\Controllers\AdminDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\User\InvestmentController;
use App\Http\Controllers\UserDashPagesController;
use App\Http\Controllers\WithdrawalController;
use App\Http\Middleware\EnsureAuthenticated;
use App\Http\Middleware\EnsureReferralIsPresent;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsUser;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Routes for registration
// Affiche le formulaire avec ?ref=
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])
    ->name('register')
    ->middleware(EnsureReferralIsPresent::class);
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

// Connexion et Deconnexion
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

// Étape 1 : afficher le formulaire pour entrer l'email
Route::get('/password/forgot', [LoginController::class, 'forgot_pass'])->name('forgot.password');

// Étape 1 : envoyer le lien 
Route::post('/password/forgot', [LoginController::class, 'forgotPasswordFromPost'])->name('password.send.code');

// Routes pour la réinitialisation
Route::get('/reset-password/{token}', [LoginController::class, 'showResetForm'])->name('forgot.password.link');
Route::post('/reset-password', [LoginController::class, 'resetPassword'])->name('forgot.password.reset');

Route::get('/test-email', function() {
    try {
        Mail::raw('Test email from Laravel', function($message) {
            $message->to('maurice54@gmail.com')
                   ->subject('Test Email')
                   ->from('dossoujesug2@gmail.com', 'NovaPulse');
        });
        
        return 'Email sent successfully!';
    } catch (Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
});








// Étape 2 : vérifier le code
Route::post('/verify-code', [LoginController::class, 'verifyCode'])->name('verify.code.post');

// Étape 3 : formulaire pour réinitialiser le mot de passe
Route::get('/reset-password/{email}', [LoginController::class, 'showResetForm'])->name('reset.password.form');

// Étape 3 : enregistrer le nouveau mot de passe
Route::post('/reset-password', [LoginController::class, 'resetPassword'])->name('reset.password');



// Dashboard User (après connexion)
//Route::get('/dashboard', function () {
//    return view('User.dashboard');
//})->middleware('auth')->name('dashboard');

//Pages Dashboard User
Route::prefix('dashboard')
    ->middleware(['auth',])//, 'is_user'
    ->name('User.') 
    ->middleware([EnsureAuthenticated::class])
    ->middleware([IsUser::class])
    ->group(function () {
        Route::get('/', [UserDashPagesController::class, 'dashboard'])->name('dashboard');
        Route::get('/profilCalculator', [UserDashPagesController::class, 'profilCalculator'])->name('profilCalculator');
        Route::get('/purchaseReport', [UserDashPagesController::class, 'purchaseReport'])->name('purchaseReport');
        Route::get('/details', [UserDashPagesController::class, 'details'])->name('details');
        Route::get('/wallet', [UserDashPagesController::class, 'wallet'])->name('wallet');
        Route::get('/deposit', [UserDashPagesController::class, 'deposit'])->name('deposit');

        Route::post('/deposits/preview', [DepositController::class, 'preview'])->name('deposits.preview');
        Route::post('/deposits/store', [DepositController::class, 'store'])->name('deposits.store');

        Route::post('/invest/confirm-payment', [InvestmentController::class, 'confirmPayment'])->name('invest.confirm');
        Route::post('/invest/checkout', [InvestmentController::class, 'checkout'])->name('invest.checkout');
        Route::get('/invest/qr', [InvestmentController::class, 'preview'])->name('invest.qr.preview');

        Route::post('/withdrawal/address', [WithdrawalController::class, 'store'])->name('withdrawal.store');
        Route::post('/withdrawal/request', [WithdrawalController::class, 'requestWithdrawal'])->name('withdrawal.request');
        Route::post('/withdrawal/calculate', [WithdrawalController::class, 'calculateWithdrawal'])->name('withdrawal.calculate');//Route pour calculer les frais de retrait (AJAX)
        Route::get('/withdrawal', [WithdrawalController::class, 'index'])->name('withdrawal');

        Route::get('/profile', [UserDashPagesController::class, 'profile'])->name('profile');

        Route::get('/profile/edit', [UserDashPagesController::class, 'editProfile'])->name('profile.edit');
        Route::post('/profile/update', [UserDashPagesController::class, 'updateProfile'])->name('profile.update');
        Route::post('/profile/update-password', [UserDashPagesController::class, 'updatePassword'])->name('profile.update-password');

        Route::get('/directReferral', [UserDashPagesController::class, 'directReferral'])->name('directReferral');
        Route::get('/tutorials', [UserDashPagesController::class, 'tutorials'])->name('tutorials');
        Route::get('/api/dashboard-charts', [UserDashPagesController::class, 'getDashboardChartsApi'])
        ->middleware('auth')
        ->name('dashboard.charts.api');        
    });

    

    // Dashboard admin
    //Route::middleware(['auth', IsAdmin::class])->group(function () {
      //  Route::get('/admin', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
   // });
    
    Route::middleware(['auth',IsAdmin::class])->prefix('/admin')->name('admin.')->group(function () {
        Route::get('', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::get('/users', [AdminDashboardController::class, 'users'])->name('users');

        Route::get('/users/depot', [AdminDashboardController::class, 'depot'])->name('depot');
        
        Route::get('/deposits', [AdminDepositController::class, 'index'])->name('deposits.index');
        Route::put('/deposits/{id}/validate', [AdminDepositController::class, 'validateDeposit'])->name('deposits.validate');

        Route::get('/investments/pending', [AdminInvestmentController::class, 'pending'])->name('investments.pending');
        Route::post('/investments/{id}/validate', [AdminInvestmentController::class, 'validateInvestment'])->name('investments.validate');

        Route::get('/users/{id}/edit', [AdminDashboardController::class, 'edit'])->name('users.edit');
        Route::put('/users/{id}', [AdminDashboardController::class, 'update'])->name('users.update');
        Route::delete('/users/{id}', [AdminDashboardController::class, 'destroy'])->name('users.destroy');



        // Routes pour la gestion des retraits
        Route::get('/withdrawals', [AdminWithdrawalController::class, 'index'])->name('withdrawals.index');
        Route::get('/withdrawals/{withdrawal}', [AdminWithdrawalController::class, 'show'])->name('withdrawals.show');
        
        // Actions individuelles
        Route::post('/withdrawals/{withdrawal}/approve', [AdminWithdrawalController::class, 'approve'])->name('withdrawals.approve');
        Route::post('/withdrawals/{withdrawal}/reject', [AdminWithdrawalController::class, 'reject'])->name('withdrawals.reject');
        Route::post('/withdrawals/{withdrawal}/complete', [AdminWithdrawalController::class, 'complete'])->name('withdrawals.complete');
        
        // Actions en lot
        Route::post('/withdrawals/bulk', [AdminWithdrawalController::class, 'bulkAction'])->name('withdrawals.bulk');
    });

   