<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;

class InvestmentProfit extends Model
{
    use HasFactory;

    protected $fillable = [
        'investment_id',
        'profit_date',
        'daily_profit',
        'base_amount',
        'profit_rate',
        'cumulative_profit',
        'metadata',
    ];

    protected $casts = [
        'profit_date' => 'date',
        'daily_profit' => 'decimal:2',
        'base_amount' => 'decimal:2',
        'profit_rate' => 'decimal:6',
        'cumulative_profit' => 'decimal:2',
        'metadata' => 'array',
    ];

    /**
     * Relation avec l'investissement
     */
    public function investment()
    {
        return $this->belongsTo(Investment::class);
    }

    /**
     * Scope pour récupérer les profits d'une période
     */
    public function scopeForPeriod($query, Carbon $startDate, Carbon $endDate)
    {
        return $query->whereBetween('profit_date', [$startDate, $endDate]);
    }

    /**
     * Scope pour récupérer les profits du mois
     */
    public function scopeThisMonth($query)
    {
        return $query->whereMonth('profit_date', now()->month)
                    ->whereYear('profit_date', now()->year);
    }

    /**
     * Scope pour récupérer les profits de la semaine
     */
    public function scopeThisWeek($query)
    {
        return $query->whereBetween('profit_date', [
            now()->startOfWeek(),
            now()->endOfWeek()
        ]);
    }

    /**
     * Scope pour récupérer les profits d'aujourd'hui
     */
    public function scopeToday($query)
    {
        return $query->whereDate('profit_date', today());
    }

    /**
     * Calculer le taux de croissance quotidien
     */
    public function getDailyGrowthRateAttribute()
    {
        if ($this->base_amount > 0) {
            return ($this->daily_profit / $this->base_amount) * 100;
        }
        return 0;
    }

    /**
     * Formater le profit pour l'affichage
     */
    public function getFormattedProfitAttribute()
    {
        return number_format($this->daily_profit, 2);
    }

    /**
     * Vérifier si c'est un profit record
     */

    public function getIsRecordProfitAttribute()
    {
        $maxProfit = static::where('investment_id', $this->investment_id)
            ->where('profit_date', '<', $this->profit_date)
            ->max('daily_profit');
        
        return $this->daily_profit > $maxProfit;
    }
}