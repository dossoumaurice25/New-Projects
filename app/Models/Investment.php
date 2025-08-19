<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;

class Investment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'weekly_profit',
        'total_profit',
        'daily_profit',
        'previous_day_profit',
        'last_profit_date',
        'expected_total_profit',
        'days_active',
        'average_daily_profit',
        'status',
        'source',
        'investment_metadata',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'weekly_profit' => 'decimal:2',
        'total_profit' => 'decimal:2',
        'daily_profit' => 'decimal:2',
        'previous_day_profit' => 'decimal:2',
        'expected_total_profit' => 'decimal:2',
        'average_daily_profit' => 'decimal:2',
        'last_profit_date' => 'date',
        'investment_metadata' => 'array',
    ];

    /**
     * Relation avec l'utilisateur
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relation avec l'historique des profits
     */
    public function profits()
    {
        return $this->hasMany(InvestmentProfit::class);
    }

    /**
     * Scope pour les investissements actifs
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    /**
     * Scope pour les investissements en attente
     */
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    /**
     * Scope pour les investissements clôturés
     */
    public function scopeClosed($query)
    {
        return $query->where('status', 'closed');
    }

    /**
     * Calculer les jours actifs
     */
    public function getDaysActiveAttribute()
    {
        if ($this->status !== 'active') {
            return $this->attributes['days_active'] ?? 0;
        }

        return $this->created_at->diffInDays(now());
    }

    /**
     * Calculer les jours restants
     */
    public function getDaysRemainingAttribute()
    {
        if ($this->status !== 'active') {
            return 0;
        }

        $totalDays = 365; // 12 mois
        $elapsed = $this->days_active;
        return max(0, $totalDays - $elapsed);
    }

    /**
     * Calculer le pourcentage de progression
     */
    public function getProgressPercentAttribute()
    {
        if ($this->status !== 'active') {
            return $this->status === 'closed' ? 100 : 0;
        }

        return min(100, ($this->days_active / 365) * 100);
    }

    /**
     * Calculer le ROI actuel
     */
    public function getCurrentRoiAttribute()
    {
        if ($this->amount <= 0) {
            return 0;
        }

        return ($this->total_profit / $this->amount) * 100;
    }

    /**
     * Calculer le profit quotidien attendu
     */
    public function getExpectedDailyProfitAttribute()
    {
        $dailyRate = 0.37 / 7 / 100; // 3.7% hebdomadaire = 0.528571% par jour
        $baseAmount = $this->amount + $this->total_profit;
        
        return $baseAmount * $dailyRate;
    }

    /**
     * Calculer le profit total projeté à la fin
     */
    public function getProjectedTotalProfitAttribute()
    {
        $monthlyRate = 0.037; // 3.7% par mois
        $currentAmount = $this->amount + $this->total_profit;
        $monthsRemaining = 12 - $this->created_at->diffInMonths(now());
        
        $projectedAmount = $currentAmount;
        for ($i = 0; $i < max(0, $monthsRemaining); $i++) {
            $projectedAmount += $projectedAmount * $monthlyRate;
        }
        
        return $projectedAmount - $this->amount; // Retourner seulement le profit
    }

    /**
     * Vérifier si l'investissement doit être clôturé
     */
    public function shouldBeClosed()
    {
        return $this->status === 'active' && 
               $this->created_at->diffInMonths(now()) >= 12;
    }

    /**
     * Calculer la performance par rapport aux attentes
     */
    public function getPerformanceRatioAttribute()
    {
        if ($this->days_active <= 0) {
            return 1;
        }

        $expectedProfit = $this->amount * (0.37 / 7 / 100) * $this->days_active;
        
        if ($expectedProfit <= 0) {
            return 1;
        }

        return $this->total_profit / $expectedProfit;
    }

    /**
     * Obtenir le statut formaté
     */
    public function getFormattedStatusAttribute()
    {
        $statuses = [
            'active' => '🟢 Actif',
            'pending' => '🟡 En attente',
            'closed' => '🔴 Clôturé',
        ];

        return $statuses[$this->status] ?? $this->status;
    }

    /**
     * Obtenir la source formatée
     */
    public function getFormattedSourceAttribute()
    {
        $sources = [
            'wallet' => '💳 Wallet',
            'crypto' => '₿ Crypto',
        ];

        return $sources[$this->source] ?? $this->source;
    }

    /**
     * Calculer la moyenne des profits quotidiens
     */
    public function updateAverageDailyProfit()
    {
        $totalDays = $this->days_active;
        
        if ($totalDays > 0) {
            $this->average_daily_profit = $this->total_profit / $totalDays;
        } else {
            $this->average_daily_profit = 0;
        }
        
        $this->save();
    }

    /**
     * Enregistrer un profit dans l'historique
     */
    public function recordProfit($dailyProfit, $baseAmount, $profitRate)
    {
        $this->profits()->create([
            'profit_date' => today(),
            'daily_profit' => $dailyProfit,
            'base_amount' => $baseAmount,
            'profit_rate' => $profitRate,
            'cumulative_profit' => $this->total_profit + $dailyProfit,
            'metadata' => [
                'days_active' => $this->days_active,
                'previous_total' => $this->total_profit,
                'calculation_method' => 'compound_interest',
            ],
        ]);
    }

    /**
     * Obtenir l'historique des profits pour une période
     */
    public function getProfitsForPeriod($days = 30)
    {
        return $this->profits()
            ->where('profit_date', '>=', now()->subDays($days))
            ->orderBy('profit_date', 'desc')
            ->get();
    }

    /**
     * Calculer les statistiques de performance
     */
    public function getPerformanceStats()
    {
        $profits = $this->profits()->get();
        
        return [
            'total_days' => $profits->count(),
            'best_day' => $profits->max('daily_profit'),
            'worst_day' => $profits->min('daily_profit'),
            'average_daily' => $profits->avg('daily_profit'),
            'most_recent' => $profits->sortByDesc('profit_date')->first(),
            'growth_trend' => $this->calculateGrowthTrend($profits),
        ];
    }

    /**
     * Calculer la tendance de croissance
     */
    private function calculateGrowthTrend($profits)
    {
        if ($profits->count() < 2) {
            return 'stable';
        }

        $recent = $profits->sortByDesc('profit_date')->take(7)->avg('daily_profit');
        $older = $profits->sortByDesc('profit_date')->skip(7)->take(7)->avg('daily_profit');
        
        if ($recent > $older * 1.05) {
            return 'growing';
        } elseif ($recent < $older * 0.95) {
            return 'declining';
        }
        
        return 'stable';
    }







    // Date de fin exacte basée sur votre logique
    public function getEndDateAttribute()
    {
        return $this->created_at->addDays(365); // 365 jours après création
    }

    // Date de fin formatée pour affichage
    public function getEndDateFormattedAttribute()
    {
        return $this->created_at->addDays(365)->format('d/m/Y');
    }

    // Vérifier si l'investissement est expiré (basé sur days_active)
    public function getIsExpiredAttribute()
    {
        return $this->days_active >= 365 || $this->status === 'closed';
    }

    // Pourcentage d'avancement basé sur days_active
    public function getProgressPercentageAttribute()
    {
        $totalDays = 365;
        $daysPassed = min($this->days_active, $totalDays);
        return round(($daysPassed / $totalDays) * 100, 1);
    }

    // Statut basé sur days_active et votre logique existante
    public function getTimeStatusAttribute()
    {
        if ($this->status === 'closed' || $this->days_active >= 365) {
            return 'expired';
        }
        
        if ($this->status !== 'active') {
            return 'inactive';
        }
        
        if ($this->days_remaining <= 30) {
            return 'ending_soon';
        }
        
        return 'active';
    }

    // Date de début formatée
    public function getStartDateFormattedAttribute()
    {
        return $this->created_at->format('d/m/Y');
    }

    // Nombre de jours écoulés (alias pour days_active pour clarté)
    public function getDaysPassedAttribute()
    {
        return $this->days_active;
    }
}