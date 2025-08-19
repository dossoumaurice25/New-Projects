class DashboardCharts {
    constructor() {
        this.charts = {};
        this.init();
    }

    init() {
        this.initMonthlyChart();
        this.initWeeklyChart();
        this.initPerformanceChart();
        this.setupRealTimeUpdates();
    }

    initMonthlyChart() {
        const ctx = document.getElementById('monthlyProfitChart');
        if (!ctx) return;

        this.charts.monthly = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [],
                datasets: [{
                    label: 'Profits Mensuels (€)',
                    data: [],
                    borderColor: '#28a745',
                    backgroundColor: 'rgba(40, 167, 69, 0.1)',
                    fill: true,
                    tension: 0.4,
                    pointBackgroundColor: '#28a745',
                    pointBorderColor: '#fff',
                    pointBorderWidth: 2,
                    pointRadius: 6
                }]
            },
            options: this.getDefaultOptions()
        });
    }

    initWeeklyChart() {
        const ctx = document.getElementById('weeklyTrendChart');
        if (!ctx) return;

        this.charts.weekly = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [],
                datasets: [{
                    label: 'Profits Hebdomadaires (€)',
                    data: [],
                    backgroundColor: 'rgba(23, 162, 184, 0.8)',
                    borderColor: '#17a2b8',
                    borderWidth: 1
                }]
            },
            options: this.getDefaultOptions()
        });
    }

    initPerformanceChart() {
        const ctx = document.getElementById('investmentPerformanceChart');
        if (!ctx) return;

        this.charts.performance = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [],
                datasets: [{
                    label: 'ROI (%)',
                    data: [],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.8)',
                        'rgba(54, 162, 235, 0.8)',
                        'rgba(255, 205, 86, 0.8)',
                        'rgba(75, 192, 192, 0.8)',
                        'rgba(153, 102, 255, 0.8)',
                        'rgba(255, 159, 64, 0.8)'
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'right',
                    }
                }
            }
        });
    }

    getDefaultOptions() {
        return {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0,0,0,0.1)'
                    }
                },
                x: {
                    grid: {
                        color: 'rgba(0,0,0,0.1)'
                    }
                }
            }
        };
    }

    // Mettre à jour avec les vraies données PHP
    updateWithRealData(chartData) {
        console.log('Mise à jour avec les données réelles:', chartData);

        // Graphique mensuel
        if (chartData.monthlyChart && this.charts.monthly) {
            this.charts.monthly.data.labels = chartData.monthlyChart.map(item => item.month_short || item.month);
            this.charts.monthly.data.datasets[0].data = chartData.monthlyChart.map(item => item.profit);
            this.charts.monthly.update();

            // Mettre à jour les statistiques
            this.updateMonthlyStats(chartData.monthlyChart);
        }

        // Graphique de performance
        if (chartData.performanceChart && this.charts.performance) {
            this.charts.performance.data.labels = chartData.performanceChart.map(item => `Inv #${item.investment_id}`);
            this.charts.performance.data.datasets[0].data = chartData.performanceChart.map(item => item.current_roi);
            this.charts.performance.update();
        }

        // Graphique de tendance
        if (chartData.trendChart && this.charts.weekly) {
            this.charts.weekly.data.labels = chartData.trendChart.map(item => item.week);
            this.charts.weekly.data.datasets[0].data = chartData.trendChart.map(item => item.profit);
            this.charts.weekly.update();
        }

        // Mettre à jour les indicateurs de tendance
        if (chartData.overallTrend) {
            this.updateTrendIndicators(chartData.overallTrend);
        }

        // Générer les cartes de performance
        if (chartData.performanceChart) {
            this.generatePerformanceCards(chartData.performanceChart);
        }
    }

    updateMonthlyStats(monthlyData) {
        if (monthlyData.length === 0) return;

        // Trouver le meilleur mois
        const bestMonth = monthlyData.reduce((max, current) => 
            current.profit > max.profit ? current : max
        );

        // Calculer la moyenne
        const avgProfit = monthlyData.reduce((sum, item) => sum + item.profit, 0) / monthlyData.length;

        document.getElementById('best-month').textContent = bestMonth.month;
        document.getElementById('avg-monthly').textContent = `€${Math.round(avgProfit).toLocaleString()}`;
    }

    updateTrendIndicators(trendData) {
        const elements = {
            'increasing-count': trendData.details.increasing || 0,
            'stable-count': trendData.details.stable || 0,
            'decreasing-count': trendData.details.decreasing || 0
        };

        Object.entries(elements).forEach(([id, value]) => {
            const element = document.getElementById(id);
            if (element) {
                this.animateCounter(element, parseInt(element.textContent) || 0, value);
            }
        });

        const dominantElement = document.getElementById('dominant-trend');
        if (dominantElement) {
            dominantElement.textContent = trendData.overall_trend.toUpperCase();
            dominantElement.className = `trend-${trendData.overall_trend}`;
        }
    }

    generatePerformanceCards(performanceData) {
        const grid = document.getElementById('performanceGrid');
        if (!grid) return;

        grid.innerHTML = '';

        performanceData.forEach(inv => {
            const trendIcon = inv.growth_trend === 'increasing' ? 'fa-arrow-trend-up' : 
                             inv.growth_trend === 'decreasing' ? 'fa-arrow-trend-down' : 'fa-minus';
            const trendClass = `trend-${inv.growth_trend}`;
            const trendText = inv.growth_trend === 'increasing' ? 'Croissant' : 
                             inv.growth_trend === 'decreasing' ? 'Décroissant' : 'Stable';

            const card = `
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h6 class="card-title">Investissement #${inv.investment_id}</h6>
                        <div class="mb-3">
                            <div class="h4 text-primary">€${inv.amount.toLocaleString()}</div>
                            <small class="text-muted">Montant investi</small>
                        </div>
                        <div class="mb-3">
                            <div class="h5 text-success">€${inv.total_profit.toLocaleString()}</div>
                            <small class="text-muted">Profit généré</small>
                        </div>
                        <div class="mb-3">
                            <div class="h5">${inv.current_roi}%</div>
                            <small class="text-muted">ROI actuel</small>
                        </div>
                        <div class="trend-indicator ${trendClass}">
                            <i class="fas ${trendIcon}"></i>
                            ${trendText}
                        </div>
                    </div>
                </div>
            `;
            grid.innerHTML += card;
        });
    }

    animateCounter(element, from, to) {
        const duration = 1000;
        const steps = 30;
        const increment = (to - from) / steps;
        let current = from;
        
        const timer = setInterval(() => {
            current += increment;
            if ((increment > 0 && current >= to) || (increment < 0 && current <= to)) {
                current = to;
                clearInterval(timer);
            }
            element.textContent = Math.round(current);
        }, duration / steps);
    }

    setupRealTimeUpdates() {
        // Mise à jour automatique toutes les 5 minutes
        setInterval(() => {
            this.fetchLatestData();
        }, 300000);
    }

    async fetchLatestData() {
        try {
            const response = await fetch('/api/dashboard-charts');
            const data = await response.json();
            
            if (data.success) {
                this.updateWithRealData(data.chartData);
            }
        } catch (error) {
            console.log('Erreur lors de la récupération des données:', error);
        }
    }
}

// Initialiser les graphiques
let dashboardCharts;
document.addEventListener('DOMContentLoaded', function() {
    dashboardCharts = new DashboardCharts();
    
    // Utiliser les données PHP si disponibles
    if (typeof chartData !== 'undefined') {
        setTimeout(() => {
            dashboardCharts.updateWithRealData(chartData);
        }, 500);
    }
});