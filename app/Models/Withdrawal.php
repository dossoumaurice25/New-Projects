<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    use HasFactory;

    protected $table = 'withdrawal';

    protected $fillable = [
        'user_id',
        'type',
        'address'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
