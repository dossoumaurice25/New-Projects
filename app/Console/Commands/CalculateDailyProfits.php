<?php

namespace App\Console\Commands;

use App\Models\Investment;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CalculateDailyProfits extends Command
{
    protected $signature = 'investments:calculate-profits';
    protected $description = 'Calculer les profits journaliers pour tous les investissements actifs';

    public function handle()
    {
        $today = Carbon::today();
        
        // Récupérer tous les investissements actifs
        $activeInvestments = Investment::where('status', 'active')->get();
        
        $this->info("Calcul des profits pour {$activeInvestments->count()} investissements actifs...");
        
        foreach ($activeInvestments as $investment) {
            $this->calculateDailyProfit($investment, $today);
        }
        
        $this->info('Calcul des profits terminé avec succès !');
    }
    
    private function calculateDailyProfit(Investment $investment, Carbon $today)
    {
        // Vérifier si on a déjà calculé pour aujourd'hui
        if ($investment->last_profit_date && $investment->last_profit_date->isSameDay($today)) {
            return; // Déjà calculé aujourd'hui
        }
        
        // Vérifier si l'investissement a plus de 12 mois
        $createdDate = $investment->created_at;
        $endDate = $createdDate->copy()->addMonths(12);
        
        if ($today->greaterThan($endDate)) {
            // Clôturer l'investissement après 12 mois
            $investment->update(['status' => 'closed']);
            $this->info("Investissement #{$investment->id} clôturé après 12 mois");
            return;
        }
        
        // Calculer le profit journalier (3.7% hebdomadaire = 0.528571% par jour)
        $dailyRate = 0.0051112582298165; 
        
        // Base de calcul : montant initial + profits accumulés (intérêts composés)
        $baseAmount = $investment->amount + $investment->total_profit;
        
        // Calculer le profit du jour
        $dailyProfit = $baseAmount * $dailyRate;
        
        // Sauvegarder le profit du jour précédent
        $previousDayProfit = $investment->daily_profit;
        
        // Calculer le profit hebdomadaire (7 derniers jours)
        $weeklyProfit = $this->calculateWeeklyProfit($investment, $dailyProfit);
        
        // Mettre à jour l'investissement
        $investment->update([
            'daily_profit' => $dailyProfit,
            'previous_day_profit' => $previousDayProfit,
            'weekly_profit' => $weeklyProfit,
            'total_profit' => $investment->total_profit + $dailyProfit,
            'last_profit_date' => $today,
        ]);
        
        $this->info("Profit calculé pour investissement #{$investment->id}: {$dailyProfit} $");
    }
    
    private function calculateWeeklyProfit(Investment $investment, float $todayProfit)
    {
        // Pour simplifier, on calcule une estimation du profit hebdomadaire
        // En production, vous pourriez vouloir stocker un historique détaillé
        
        // Si c'est le premier jour, retourner juste le profit d'aujourd'hui
        if (!$investment->last_profit_date) {
            return $todayProfit;
        }
        
        // Calculer les jours depuis le dernier calcul
        $daysSinceLastCalculation = $investment->last_profit_date->diffInDays(Carbon::today());
        
        if ($daysSinceLastCalculation >= 7) {
            // Reset hebdomadaire
            return $todayProfit;
        } else {
            // Ajouter au profit hebdomadaire existant
            return $investment->weekly_profit + $todayProfit;
        }
    }
}

