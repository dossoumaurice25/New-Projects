<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\Investment;
use App\Models\InvestmentProfit;
use App\Models\User;
use App\Models\Withdrawal;
use App\Models\WithdrawalRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserDashPagesController extends Controller
{
    /**
     * Afficher le dashboard avec toutes les statistiques d'investissement
     */
    public function dashboard()
    {   
        $user = Auth::user();

        $wallet = $user->wallet;

        // Récupérer tous les investissements pour les stats générales
        $allInvestments = $user->investments()->with('profits')->get();
        
        // Récupérer les investissements avec pagination (5 par page)
        $investments = $user->investments()
            ->with('profits')
            ->paginate(5, ['*'], 'investments_page');
        
        
        //  Calcul sur TOUS les investissements
        $stats = $this->calculateInvestmentStats($allInvestments); // ← TOUS les investissements !

        // Timeline seulement pour les investissements de la page courante
        $investmentTimelines = $this->getInvestmentTimelines($investments->getCollection());
        
        // Obtenir les données pour le dashboard
        $dashboardData = array_merge($stats, [
            'investments' => $investments, // Maintenant paginé
            'investmentTimelines' => $investmentTimelines,
            'recentProfits' => $this->getRecentProfits($user),
            'monthlyChart' => $this->getMonthlyChartData($user),
            'performanceMetrics' => $this->getPerformanceMetrics($allInvestments),
        ]);

        return view('User.dashboard', compact('wallet'), $dashboardData);
    }

     /**
     * Calculer les statistiques d'investissement
     */
    private function calculateInvestmentStats($investments)
    {
        $activeInvestments = $investments->where('status', 'active');
        
        $stats = [
            'totalInvested' => $investments->sum('amount'),
            'totalProfit' => $investments->sum('total_profit'),
            'todayProfit' => $investments->sum('daily_profit'),
            'weeklyProfit' => $investments->sum('weekly_profit'),
            'activeInvestments' => $activeInvestments,
            'pendingInvestments' => $investments->where('status', 'pending')->count(),
            'closedInvestments' => $investments->where('status', 'closed')->count(),
        ];

        // Calculs additionnels pour les investissements actifs
        if ($activeInvestments->isNotEmpty()) {
            $stats['monthlyProjection'] = $this->calculateMonthlyProjection($activeInvestments);
            $stats['projectedTotalProfit'] = $this->calculateTotalProjectedProfit($activeInvestments);
            $stats['currentMonth'] = $this->getCurrentInvestmentMonth($activeInvestments);
            $stats['averageROI'] = $this->calculateAverageROI($activeInvestments);
            $stats['totalDaysActive'] = $activeInvestments->sum('days_active');
        } else {
            $stats['monthlyProjection'] = [];
            $stats['projectedTotalProfit'] = 0;
            $stats['currentMonth'] = 0;
            $stats['averageROI'] = 0;
            $stats['totalDaysActive'] = 0;
        }

        return $stats;
    }




    public function profilCalculator()
    {
        return view('User.pages.profilCalculator');
    }

    public function purchaseReport()
    {
        // Pagination de 10 pour le rapport d'achat
        $investments = Investment::where('user_id', auth()->id())
            ->latest()
            ->paginate(10, ['*'], 'report_page');
        
        $investmentTimelines = $this->getInvestmentTimelines($investments->getCollection());
        return view('User.pages.purchaseReport', compact('investments', 'investmentTimelines'));
    }

    public function details()
    {
        $user = Auth::user();

        // Récupérer tous les investissements pour les stats générales
        $allInvestments = $user->investments()->with('profits')->get();
        
        //  Calcul sur TOUS les investissements
        $stats = $this->calculateInvestmentStats($allInvestments); // ← TOUS les investissements !

        // Timeline seulement pour les investissements de la page courante
        $investmentTimelines = $this->getInvestmentTimelines($allInvestments);

        // Données pour les graphiques
        $chartData = [ 
            'monthlyChart' => $this->getMonthlyChartData($user),
            'performanceChart' => $this->getInvestmentPerformanceData($allInvestments),
            'trendChart' => $this->getTrendChartData($user),
            'overallTrend' => $this->calculateOverallGrowthTrend($allInvestments),
        ];
        
        // Obtenir les données pour le dashboard
        $dashboardData = array_merge($stats, [
            'investments' => $allInvestments, // Maintenant paginé
            'investmentTimelines' => $investmentTimelines,
            'recentProfits' => $this->getRecentProfits($user),
            'monthlyChart' => $this->getMonthlyChartData($user),
            'performanceMetrics' => $this->getPerformanceMetrics($allInvestments),
            'chartData' => $chartData,
        ]);

        return view('User.pages.details', $dashboardData);
    }

    public function wallet()
    {
        $deposits = Deposit::where('user_id', Auth::id())->latest()->get();
        $wallet = Auth::user()->wallet;
        return view('User.pages.wallet', compact('wallet','deposits'));
    }

    public function deposit()
    {
        $deposits = Deposit::where('user_id', Auth::id())->latest()->get();
        return view('User.pages.deposit', compact('deposits'));
    }

    //public function withdrawal()
    //{
        
      //  $user = Auth::user();
        
        // Calculer le total des profits disponibles
        //$totalProfit = Investment::where('user_id', $user->id)->sum('total_profit');

        // Récupérer l'adresse de retrait de l'utilisateur
        //$withdrawal = Withdrawal::where('user_id', Auth::id())->first();

        // Récupérer l'historique des demandes de retrait
        //$withdrawalHistory = WithdrawalRequest::where('user_id', $user->id)
          //  ->orderBy('created_at', 'desc')
            //->get();

        //return view('User.pages.withdrawal', compact('totalProfit', 'withdrawal', 'withdrawalHistory'));
    //}

    public function profile()
    {

        // Récupérer l'utilisateur connecté avec ses informations
        $user = Auth::user();
        
        // Récupérer l'utilisateur qui l'a parrainé (si applicable)
        $referrer = null;
        if ($user->referred_by) {
            $referrer = User::find($user->referred_by);
        }
        
        // Compter le nombre de personnes parrainées
        $referralsCount = User::where('referred_by', $user->id)->count();
        
        return view('User.pages.profile', compact('user', 'referrer', 'referralsCount'));
    }


     public function editProfile()
    {
        $user = Auth::user();
        
        // Récupérer l'utilisateur qui l'a parrainé (si applicable)
        $referrer = null;
        if ($user->referred_by) {
            $referrer = \App\Models\User::find($user->referred_by);
        }
        
        return view('User.pages.edit-profile', compact('user', 'referrer'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        
        // Validation des données
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => [
                'required',
                'string',
                'max:255',
                'alpha_dash',
                Rule::unique('users')->ignore($user->id),
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
            'address' => 'required|string|max:500',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Veuillez corriger les erreurs ci-dessous.');
        }

        try {
            // Mettre à jour les informations
            $user->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'username' => $request->username,
                'email' => $request->email,
                'address' => $request->address,
                'city' => $request->city,
                'country' => $request->country,
                'phone_number' => $request->phone_number,
            ]);

            return redirect()->route('User.profile')
                ->with('success', 'Profil mis à jour avec succès !');

        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Une erreur est survenue lors de la mise à jour.');
        }
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();
        
        // Validation
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->with('error', 'Veuillez corriger les erreurs ci-dessous.');
        }

        // Vérifier le mot de passe actuel
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()
                ->withErrors(['current_password' => 'The current password is incorrect.'])
                ->with('error', 'The current password is incorrect.');
        }

        try {
            // Mettre à jour le mot de passe
            $user->update([
                'password' => Hash::make($request->new_password)
            ]);

            return redirect()->route('User.profile')
                ->with('success', 'Password updated successfully!');

        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'An error occurred while updating the password.');
        }
    }




























    public function directReferral()
    {
        $user = auth()->user();

        // Récupère tous les filleuls directs
        $filleuls = User::where('referred_by', $user->id)->get();

        // Nombre total de filleuls directs
        $nombreFilleuls = \App\Models\User::where('referred_by', $user->id)->count();

        return view('User.pages.directReferral', compact('user', 'filleuls','nombreFilleuls'));
    }

    public function tutorials()
    {
        return view('User.pages.tutorials');
    }


    /**
     * Calculer la projection mensuelle avec intérêts composés
     */
    private function calculateMonthlyProjection($activeInvestments)
    {
        $projection = [];
        $monthlyRate = 0.1532857142857143; 
        
        for ($month = 1; $month <= 12; $month++) {
            $totalMonthlyProfit = 0;
            $totalCumulativeProfit = 0;
            
            foreach ($activeInvestments as $investment) {
                $baseAmount = $investment->amount;
                $cumulativeProfit = 0;
                
                // Calcul avec intérêts composés jusqu'au mois concerné
                for ($m = 1; $m <= $month; $m++) {
                    $monthlyProfit = $baseAmount * $monthlyRate;
                    $cumulativeProfit += $monthlyProfit;
                    
                    if ($m === $month) {
                        $totalMonthlyProfit += $monthlyProfit;
                    }
                    
                    // Intérêts composés: ajouter le profit à la base pour le mois suivant
                    $baseAmount += $monthlyProfit;
                }
                
                $totalCumulativeProfit += $cumulativeProfit;
            }
            
            $projection[$month] = [
                'monthly_profit' => round($totalMonthlyProfit, 2),
                'cumulative_profit' => round($totalCumulativeProfit, 2),
            ];
        }

        return $projection;
    }

    /**
     * Calculer le profit total projeté sur 12 mois
     */
    private function calculateTotalProjectedProfit($activeInvestments)
    {
        $totalProjected = 0;
        $monthlyRate = 0.1532857142857143;

        foreach ($activeInvestments as $investment) {
            $baseAmount = $investment->amount;
            $investmentProfit = 0;

            // Calcul avec intérêts composés sur 12 mois
            for ($month = 1; $month <= 12; $month++) {
                $monthlyProfit = $baseAmount * $monthlyRate;
                $investmentProfit += $monthlyProfit;
                $baseAmount += $monthlyProfit; // Intérêts composés
            }

            $totalProjected += $investmentProfit;
        }

        return round($totalProjected, 2);
    }


    

    /**
     * Déterminer le mois actuel d'investissement
     */
    private function getCurrentInvestmentMonth($activeInvestments)
    {
        if ($activeInvestments->isEmpty()) {
            return 0;
        }

        // Prendre l'investissement le plus ancien
        $oldestInvestment = $activeInvestments->sortBy('created_at')->first();
        $monthsElapsed = $oldestInvestment->created_at->diffInMonths(now());
        
        return min($monthsElapsed + 1, 12);
    }

    /**
     * Calculer le ROI moyen
     */
    private function calculateAverageROI($activeInvestments)
    {
        if ($activeInvestments->isEmpty()) {
            return 0;
        }

        $totalROI = $activeInvestments->sum(function ($investment) {
            return $investment->current_roi;
        });

        return round($totalROI / $activeInvestments->count(), 2);
    }

    /**
     * Obtenir les profits récents
     */
    private function getRecentProfits($user, $days = 7)
    {
        return InvestmentProfit::whereHas('investment', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })
        ->where('profit_date', '>=', now()->subDays($days))
        ->with('investment')
        ->orderBy('profit_date', 'desc')
        ->limit(10)
        ->get();
    }

    /**
     * Obtenir les données pour le graphique mensuel (6 derniers mois)
    */
    private function getMonthlyChartData($user, $months = 6)
    {
        $chartData = [];
        
        for ($i = $months - 1; $i >= 0; $i--) {
            $month = now()->subMonths($i);
            
            $monthlyProfit = InvestmentProfit::whereHas('investment', function ($query) use ($user) {
                $query->where('user_id', $user->id);
            })
            ->whereMonth('profit_date', $month->month)
            ->whereYear('profit_date', $month->year)
            ->sum('daily_profit');
            
            $chartData[] = [
                'month' => $month->format('M Y'),  
                'month_short' => $month->format('M'),
                'profit' => round($monthlyProfit, 2),
                'timestamp' => $month->timestamp,
                'color' => $monthlyProfit > 0 ? '#28a745' : '#dc3545', // Vert si profit, rouge si perte
            ];
        }
        
        return $chartData;
    }


    /**
     * Obtenir les métriques de performance
     */
    private function getPerformanceMetrics($investments)
    {
        $activeInvestments = $investments->where('status', 'active');
        
        if ($activeInvestments->isEmpty()) {
            return [
                'bestPerformer' => null,
                'totalDaysInvested' => 0,
                'averageDailyReturn' => 0,
                'consistencyScore' => 0,
            ];
        }

        // Trouver le meilleur investissement
        $bestPerformer = $activeInvestments->sortByDesc('current_roi')->first();
        
        // Calculer la moyenne des retours quotidiens
        $totalDailyProfits = $activeInvestments->sum('total_profit');
        $totalDaysActive = $activeInvestments->sum('days_active');
        $averageDailyReturn = $totalDaysActive > 0 ? $totalDailyProfits / $totalDaysActive : 0;
        
        // Score de consistance (basé sur la régularité des profits)
        $consistencyScore = $this->calculateConsistencyScore($activeInvestments);
        
        return [
            'bestPerformer' => $bestPerformer,
            'totalDaysInvested' => $totalDaysActive,
            'averageDailyReturn' => round($averageDailyReturn, 2),
            'consistencyScore' => $consistencyScore,
        ];
    }

    /**
     * Calculer le score de consistance
     */
    private function calculateConsistencyScore($investments)
    {
        $scores = [];
        
        foreach ($investments as $investment) {
            if ($investment->days_active > 0) {
                $expectedProfit = $investment->amount * (0.37 / 7 / 100) * $investment->days_active;
                $actualProfit = $investment->total_profit;
                
                if ($expectedProfit > 0) {
                    $scores[] = min(100, ($actualProfit / $expectedProfit) * 100);
                }
            }
        }
        
        return $scores ? round(array_sum($scores) / count($scores), 1) : 0;
    }

    /**
     * API pour obtenir les statistiques en temps réel
     */
    public function getStatsApi()
    {
        $user = Auth::user();
        $investments = $user->investments;
        $stats = $this->calculateInvestmentStats($investments);
        
        return response()->json([
            'success' => true,
            'data' => $stats,
            'timestamp' => now()->toISOString(),
        ]);
    }

    /**
     * API pour obtenir les détails d'un investissement
     */
    public function getInvestmentDetails($id)
    {
        $investment = Investment::where('id', $id)
            ->where('user_id', Auth::id())
            ->with(['profits' => function ($query) {
                $query->orderBy('profit_date', 'desc')->limit(30);
            }])
            ->firstOrFail();

        $details = [
            'investment' => $investment,
            'performance_stats' => $investment->getPerformanceStats(),
            'recent_profits' => $investment->profits,
            'projected_completion' => $investment->created_at->addMonths(12),
            'daily_average' => $investment->average_daily_profit,
            'growth_trend' => $this->calculateGrowthTrend($investment),
        ];

        return response()->json([
            'success' => true,
            'data' => $details,
        ]);
    }

    /**
     * Calculer la tendance de croissance pour un investissement
     */
    private function calculateGrowthTrend($investment)
    {
        $recentProfits = $investment->profits()
            ->orderBy('profit_date', 'desc')
            ->limit(14)
            ->pluck('daily_profit');

        if ($recentProfits->count() < 7) {
            return 'insufficient_data';
        }

        $recent7 = $recentProfits->take(7)->avg();
        $previous7 = $recentProfits->skip(7)->take(7)->avg();

        if ($recent7 > $previous7 * 1.02) {
            return 'increasing';
        } elseif ($recent7 < $previous7 * 0.98) {
            return 'decreasing';
        }

        return 'stable';
    }


    /**
     * Obtenir les détails temporels de tous les investissements
    */
    private function getInvestmentTimelines($investments)
    {
        return $investments->map(function($investment) {
            return [
                'id' => $investment->id,
                'amount' => $investment->amount,
                'status' => $investment->status,
                'start_date' => $investment->start_date_formatted,
                'start_date_full' => $investment->created_at->format('d/m/Y H:i'),
                'end_date' => $investment->end_date_formatted,
                'end_date_full' => $investment->end_date->format('d/m/Y H:i'),
                'days_remaining' => $investment->days_remaining, // Utilise VOTRE méthode
                'days_passed' => $investment->days_passed, // Alias de days_active
                'days_active' => $investment->days_active, // Votre attribut existant
                'progress_percentage' => $investment->progress_percentage,
                'time_status' => $investment->time_status,
                'is_expired' => $investment->is_expired,
            ];
        });
    }





    /**
     * Obtenir les données de performance par investissement
    */
    private function getInvestmentPerformanceData($investments)
    {
        return $investments->map(function ($investment) {
            $dailyProfits = $investment->profits()
                ->orderBy('profit_date', 'asc')
                ->limit(30) // 30 derniers jours
                ->get();

            $performanceData = [];
            $cumulativeProfit = 0;

            foreach ($dailyProfits as $profit) {
                $cumulativeProfit += $profit->daily_profit;
                $performanceData[] = [
                    'date' => $profit->profit_date->format('d/m'),
                    'daily_profit' => round($profit->daily_profit, 2),
                    'cumulative' => round($cumulativeProfit, 2),
                    'roi_percentage' => round(($cumulativeProfit / $investment->amount) * 100, 2),
                ];
            }

            return [
                'investment_id' => $investment->id,
                'amount' => $investment->amount,
                'status' => $investment->status,
                'growth_trend' => $this->calculateGrowthTrend($investment),
                'performance_data' => $performanceData,
                'total_profit' => round($investment->total_profit, 2),
                'current_roi' => round($investment->current_roi, 2),
            ];
        });
    }

    /**
     * Calculer la tendance de croissance globale
     */
    private function calculateOverallGrowthTrend($investments)
    {
        $trends = $investments->map(function($investment) {
            return $this->calculateGrowthTrend($investment);
        });

        $trendCounts = [
            'increasing' => $trends->filter(fn($t) => $t === 'increasing')->count(),
            'decreasing' => $trends->filter(fn($t) => $t === 'decreasing')->count(),
            'stable' => $trends->filter(fn($t) => $t === 'stable')->count(),
        ];

        $dominant = array_keys($trendCounts, max($trendCounts))[0];
        
        return [
            'overall_trend' => $dominant,
            'details' => $trendCounts,
            'percentage' => $investments->count() > 0 ? round((max($trendCounts) / $investments->count()) * 100, 1) : 0,
        ];
    }

    /**
     * Obtenir les données pour les graphiques de tendance
     */
    private function getTrendChartData($user)
    {
        $data = [];
        
        // Données hebdomadaires pour les 8 dernières semaines
        for ($i = 7; $i >= 0; $i--) {
            $weekStart = now()->subWeeks($i)->startOfWeek();
            $weekEnd = now()->subWeeks($i)->endOfWeek();
            
            $weeklyProfit = InvestmentProfit::whereHas('investment', function ($query) use ($user) {
                $query->where('user_id', $user->id);
            })
            ->whereBetween('profit_date', [$weekStart, $weekEnd])
            ->sum('daily_profit');
            
            $data[] = [
                'week' => $weekStart->format('d/m'),
                'profit' => round($weeklyProfit, 2),
                'week_number' => $weekStart->weekOfYear,
            ];
        }
        
        return $data;
    }

    /**
     * API pour obtenir les données des graphiques
    */
    public function getDashboardChartsApi()
    {
        $user = Auth::user();
        $allInvestments = $user->investments()->with('profits')->get();
        
        $chartData = [
            'monthlyChart' => $this->getMonthlyChartData($user),
            'performanceChart' => $this->getInvestmentPerformanceData($allInvestments),
            'trendChart' => $this->getTrendChartData($user),
            'overallTrend' => $this->calculateOverallGrowthTrend($allInvestments),
        ];
        
        return response()->json([
            'success' => true,
            'chartData' => $chartData,
            'timestamp' => now()->toISOString(),
        ]);
    }
    
    
}
