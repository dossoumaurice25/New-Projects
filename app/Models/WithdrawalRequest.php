<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithdrawalRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'fee',
        'net_amount',
        'status',
        'withdrawal_type',
        'withdrawal_address',
        'admin_notes',
        'processed_at'
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'fee' => 'decimal:2',
        'net_amount' => 'decimal:2',
        'processed_at' => 'datetime'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Calculer les frais (5%)
    public static function calculateFee($amount)
    {
        return $amount * 0.05;
    }

    // Calculer le montant net après frais
    public static function calculateNetAmount($amount)
    {
        $fee = self::calculateFee($amount);
        return $amount - $fee;
    }

    // Vérifier si c'est une période de retrait valide (Vendredi 00h - Samedi 12h)
    public static function isWithdrawalPeriod()
    {
        $now = now();
        $dayOfWeek = $now->dayOfWeek; // 0 = Dimanche, 5 = Vendredi, 6 = Samedi
        
        // Vendredi (toute la journée) ou Samedi jusqu'à 12h
        return ($dayOfWeek === 5) || ($dayOfWeek === 6 && $now->hour < 12);
    }
}