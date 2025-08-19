<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    /**
     * Les attributs qu'on peut remplir (fillable).
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'first_name',
        'last_name',
        'address',
        'city',
        'country',
        'phone_number',
        'referral_code',
        'referred_by',
         'role', 
         'wallet_balance',
    ];

    /**
     * Les attributs cachés pour les tableaux.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Les attributs castés.
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Relation vers le parrain.
     */
    public function parrain()
    {
        return $this->belongsTo(User::class, 'referred_by');
    }

    /**
     * Relation vers les filleuls.
     */
    public function filleuls()
    {
        return $this->hasMany(User::class, 'referred_by');
    }


    public function investments()
    {
        return $this->hasMany(Investment::class);
    }

    public function deposits()
    {
        return $this->hasMany(Deposit::class);
    }

    public function wallet()
    {
        return $this->hasOne(Wallet::class);
    }

    //------------------------------------------------//
    public function withdrawalInfo()
    {
        return $this->hasOne(Withdrawal::class);
    }

    public function withdrawalRequests()
    {
        return $this->hasMany(WithdrawalRequest::class);
    }

    // Méthode pour calculer le total des profits
    public function getTotalProfitsAttribute()
    {
        return $this->investments()->sum('total_profit');
    }

    // Méthode pour vérifier si l'utilisateur peut faire un retrait
    public function canWithdraw($amount)
    {
        return $this->total_profits >= $amount && $amount >= 10;
    }
    
}
