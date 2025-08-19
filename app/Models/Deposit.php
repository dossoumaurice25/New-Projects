<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount_usd',
        'crypto_amount',
        'method',
        'status',
        'txn_hash',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

