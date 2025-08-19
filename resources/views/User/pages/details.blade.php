@extends('layouts.users.app')

@section('title', 'Details')

@section('style')
    <style>
       
        .dashboard-card {
            background: rgba(247, 248, 249, 0.8);
            border: 1px solid #00000028;
            border-radius: 16px;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px #a023c21f;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .dashboard-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, transparent, rgba(0, 0, 0, 0.6), transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .dashboard-card:hover::before {
            opacity: 1;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            border-color: rgba(14, 15, 14, 0.4);
            box-shadow: 0 12px 48px rgba(0, 0, 0, 0.15);
        }

        .card-value {
            font-size: 2.2rem;
            font-weight: 700;
            color: #0c0c0c;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.27);
        }

        .card-title {
            color: #000000;
            font-size: 1rem;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .card-icon {
            color: #9f23c2;
            font-size: 2rem;
            opacity: 0.8;
        }

        .nav-pills {
            background:white;
            border-radius: 12px;
            padding: 6px;
        }

        .nav-pills .nav-link {
            background: transparent;
            color: #9f23c2;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.3s ease;
            border: none;
            position: relative;
            overflow: hidden;
        }

        .nav-pills .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .nav-pills .nav-link:hover::before {
            left: 100%;
        }

        .nav-pills .nav-link.active {
            background: #9f23c2;
            color: #ffffff;
            box-shadow: 0 4px 12px rgba(34, 197, 94, 0.3);
        }

        .nav-pills .nav-link:hover {
            color: #9f23c2;
            transform: translateY(-2px);
        }

        .nav-pills .nav-link.active:hover {
            color: #ffffff;
            transform: translateY(-2px);
        }

        .data-table {
            border-radius: 16px;
            border: 1px solid rgba(34, 197, 94, 0.2);
            backdrop-filter: blur(10px);
            overflow: hidden;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        .table-header {
            background: linear-gradient(180deg, #9f23c2 0%, #d482f0 100%);
            color: white;
            border: none;
        }

        .table-header th {
            padding: 20px 16px;
            font-weight: 700;
            font-size: 1rem;
            text-align: center;
            border: none;
            position: relative;
        }

        .table-header th::after {
            content: '';
            position: absolute;
            right: 0;
            top: 25%;
            height: 50%;
            width: 1px;
            background: rgba(255, 255, 255, 0.377);
        }

        .table-header th:last-child::after {
            display: none;
        }

        .table tbody tr {
            background: rgb(240, 236, 236);
            border-bottom: 1px solid rgba(34, 197, 94, 0.1);
            transition: all 0.3s ease;
        }

        .table tbody tr:hover {
            background: #a023c22e;
            transform: scale(1.02);
        }

        .table tbody td {
            padding: 16px;
            color: #000000;
            text-align: center;
            border: none;
            font-weight: 500;
        }

        .profit-positive {
            color: #3db468;
            font-weight: 600;
        }

        

        .no-data {
            text-align: center;
            color: #64748b;
            padding: 60px 20px;
            font-size: 1.1rem;
            font-weight: 500;
        }

        .pagination {
            justify-content: center;
            margin-top: 30px;
        }

        .pagination .page-link {
            background: rgba(215, 222, 233, 0.8);
            border: 1px solid #9f23c2;
            color: #000000;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .pagination .page-link:hover {
            background: rgba(255, 255, 255, 0.2);
            color: #9f23c2;
            border-color: #9f23c2;
            transform: translateY(-2px);
        }

        .pagination .page-item.active .page-link {
            background: #9f23c2;
            border-color: #9f23c2;
            color: white;
            box-shadow: 0 4px 12px rgba(34, 197, 94, 0.3);
        }

        .help-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
            color: white;
            border: none;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            font-size: 1.2rem;
            box-shadow: 0 8px 24px rgba(34, 197, 94, 0.4);
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .help-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 12px 32px rgba(34, 197, 94, 0.6);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }

        @media (max-width: 768px) {
            .card-value {
                font-size: 1.7rem;
            }
            
            .dashboard-card {
                margin-bottom: 20px;
            }
            
            .table-responsive {
                border-radius: 16px;
            }
            
            .help-btn {
                bottom: 20px;
                right: 20px;
                width: 50px;
                height: 50px;
                font-size: 1rem;
            }
        }

        @media (max-width: 576px) {
            .card-value {
                font-size: 1.5rem;
            }
            
            .nav-pills {
                flex-direction: column;
                gap: 5px;
            }
            
            .nav-pills .nav-link {
                text-align: center;
            }
        }
    </style> 
@endsection

@section('content')
      <div class="notification-wrapper">
            <div class="container-fluid">
               <!-- ========== title-wrapper start ========== -->
                <div class="title-wrapper pt-30">
                    <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                        <h2>Details</h2>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-md-6">
                        <div class="breadcrumb-wrapper">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('User.dashboard')}}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Details
                            </li>
                            </ol>
                        </nav>
                        </div>
                    </div>
                    <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- ========== title-wrapper end ========== -->

                
                <div class="card-style">
                    
                        <!-- Dashboard Cards -->
                        <div class="row g-4 mb-5">
                            <div class="col-12 col-md-6 col-xl-3">
                                <div class="dashboard-card p-4 h-100 fade-in-up">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="card-title">My Shares</div>
                                            <div class="card-value">${{ number_format($totalInvested, 2) }}</div>
                                        </div>
                                        <div class="card-icon">
                                            <i class="fas fa-chart-pie"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12 col-md-6 col-xl-3">
                                <div class="dashboard-card p-4 h-100 fade-in-up" style="animation-delay: 0.1s">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="card-title">Total Profit</div>
                                            <div class="card-value">${{ number_format($totalProfit, 2) }}</div>
                                        </div>
                                        <div class="card-icon">
                                            <i class="fas fa-money-bill-wave"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12 col-md-6 col-xl-3">
                                <div class="dashboard-card p-4 h-100 fade-in-up" style="animation-delay: 0.2s">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="card-title">Total Value</div>
                                            <div class="card-value"> ${{ number_format($totalProfit + $totalInvested, 2) }}</div>
                                        </div>
                                        <div class="card-icon">
                                            <i class="fas fa-wallet"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12 col-md-6 col-xl-3">
                                <div class="dashboard-card p-4 h-100 fade-in-up" style="animation-delay: 0.3s">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="card-title">Daily Profit</div>
                                            <div class="card-value">${{ number_format($todayProfit, 2) }}</div>
                                        </div>
                                        <div class="card-icon">
                                            <i class="fas fa-calendar-day"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Section Graphiques --}}
                        <div class="row mb-4">
                            <div class="col-12">
                                @include('User.partials.charts')
                            </div>
                        </div>
                    
                </div>
            </div>
            <!-- end container -->
      </div>
@endsection

@section('script')
     <script>
        // Data for different periods
        const data = {
            daily: {
                headers: ['Date', 'Daily Profit', 'Total Profit', 'Total Value'],
                rows: [
                    ['2025-07-23', '+150.50$', '+1,250.75$', '15,850.25$'],
                    ['2025-07-22', '-75.25$', '+1,100.25$', '15,699.75$'],
                    ['2025-07-21', '+200.00$', '+1,175.50$', '15,775.00$'],
                    ['2025-07-20', '+85.30$', '+975.50$', '15,575.00$']
                ]
            },
            weekly: {
                headers: ['Date', 'Weekly Profit', 'Total Profit', 'Total Value'],
                rows: [
                    ['Week 30, 2025', '+425.80$', '+1,250.75$', '15,850.25$'],
                    ['Week 29, 2025', '+310.25$', '+824.95$', '15,424.45$'],
                    ['Week 28, 2025', '+180.90$', '+514.70$', '15,114.20$'],
                    ['Week 27, 2025', '+125.50$', '+333.80$', '14,933.30$']
                ]
            },
            monthly: {
                headers: ['Date', 'Monthly Profit', 'Total Profit', 'Total Value'],
                rows: [
                    ['July 2025', '+1,250.75$', '+1,250.75$', '15,850.25$'],
                    ['June 2025', '+890.45$', '+890.45$', '14,599.50$'],
                    ['May 2025', '+765.20$', '+765.20$', '13,709.05$'],
                    ['April 2025', '+532.15$', '+532.15$', '12,943.85$']
                ]
            }
        };

        // Function to update table
        function updateTable(period) {
            const tableHeader = document.getElementById('table-header');
            const tableBody = document.getElementById('table-body');
            const currentData = data[period];

            // Update header
            tableHeader.innerHTML = currentData.headers.map(header => 
                `<th>${header}</th>`
            ).join('');

            // Update body
            tableBody.innerHTML = currentData.rows.map(row => {
                const profitClass = row[1].includes('+') ? 'profit-positive' : 
                                   row[1].includes('-') ? 'profit-negative' : 'profit-neutral';
                
                return `<tr>
                    <td>${row[0]}</td>
                    <td class="${profitClass}">${row[1]}</td>
                    <td class="profit-positive">${row[2]}</td>
                    <td>${row[3]}</td>
                </tr>`;
            }).join('');

            // Add animation to new rows
            const rows = tableBody.querySelectorAll('tr');
            rows.forEach((row, index) => {
                row.style.opacity = '0';
                row.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    row.style.transition = 'all 0.3s ease';
                    row.style.opacity = '1';
                    row.style.transform = 'translateY(0)';
                }, index * 100);
            });
        }

        // Event listeners for navigation
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active class from all links
                document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
                
                // Add active class to clicked link
                this.classList.add('active');
                
                // Update table
                const period = this.getAttribute('data-period');
                updateTable(period);
            });
        });

        // Initialize tooltips
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });

        // Add smooth scroll effect
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add loading animation on page load
        window.addEventListener('load', function() {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.5s ease';
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });

        // Add hover effects to cards
        document.querySelectorAll('.dashboard-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
    </script>

    {{-- Script pour passer les données PHP au JavaScript --}}

    <!-- Tes autres scripts Chart.js ou SweetAlert ici -->




    {{-- Script principal pour les graphiques --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
            // Récupérer les données PHP
            const chartData = @json($chartData ?? []);
            
            const monthlyChart = @json($monthlyChart ?? []);
            
            console.log('Graph data:', chartData);
            
            // 1. Initialiser les graphiques avec des données vides
            initializeCharts();
            
            // 2. Mettre à jour avec les vraies données PHP
            setTimeout(() => {
                if (chartData && chartData.monthlyChart) {
                    updateMonthlyChart(chartData.monthlyChart);
                }
                
                if (chartData && chartData.overallTrend) {
                    updateTrendIndicators(chartData.overallTrend);
                }
                
                if (chartData && chartData.performanceChart) {
                    updatePerformanceChart(chartData.performanceChart);
                }
                
                if (chartData && chartData.trendChart) {
                    updateWeeklyChart(chartData.trendChart);
                }
            }, 500);
        });

        // Variables globales pour les graphiques
        let monthlyChartInstance = null;
        let weeklyChartInstance = null;
        let performanceChartInstance = null;

        function initializeCharts() {
            // Graphique mensuel
            const monthlyCtx = document.getElementById('monthlyProfitChart');
            if (monthlyCtx) {
                monthlyChartInstance = new Chart(monthlyCtx, {
                    type: 'line',
                    data: {
                        labels: [],
                        datasets: [{
                            label: 'Monthly profits ($)',
                            data: [],
                            borderColor: '#9f23c2',
                            backgroundColor: 'rgba(40, 167, 69, 0.1)',
                            fill: true,
                            tension: 0.4,
                            pointBackgroundColor: '#28a745',
                            pointBorderColor: '#fff',
                            pointBorderWidth: 2,
                            pointRadius: 6
                        }]
                    },
                    options: getDefaultChartOptions()
                });
            }

            // Graphique hebdomadaire
            const weeklyCtx = document.getElementById('weeklyTrendChart');
            if (weeklyCtx) {
                weeklyChartInstance = new Chart(weeklyCtx, {
                    type: 'bar',
                    data: {
                        labels: [],
                        datasets: [{
                            label: 'Weekly profits ($)',
                            data: [],
                            backgroundColor: 'rgba(23, 162, 184, 0.8)',
                            borderColor: '#17a2b2',
                            borderWidth: 1
                        }]
                    },
                    options: getDefaultChartOptions()
                });
            }

            // Graphique de performance
            const performanceCtx = document.getElementById('investmentPerformanceChart');
            if (performanceCtx) {
                performanceChartInstance = new Chart(performanceCtx, {
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
        }

        function getDefaultChartOptions() {
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

        function updateMonthlyChart(data) {
            if (!monthlyChartInstance || !data || data.length === 0) return;
            
            monthlyChartInstance.data.labels = data.map(item => item.month_short || item.month);
            monthlyChartInstance.data.datasets[0].data = data.map(item => item.profit);
            monthlyChartInstance.update('active');
            
            // Mettre à jour les statistiques sous le graphique
            updateMonthlyStats(data);
        }

        function updateWeeklyChart(data) {
            if (!weeklyChartInstance || !data || data.length === 0) return;
            
            weeklyChartInstance.data.labels = data.map(item => item.week);
            weeklyChartInstance.data.datasets[0].data = data.map(item => item.profit);
            weeklyChartInstance.update('active');
        }

        function updatePerformanceChart(performanceData) {
            if (!performanceChartInstance || !performanceData || performanceData.length === 0) return;
            
            performanceChartInstance.data.labels = performanceData.map(item => `Inv $${item.amount}`);
            performanceChartInstance.data.datasets[0].data = performanceData.map(item => item.current_roi || 0);
            performanceChartInstance.update('active');
            
            // Générer les cartes de performance
            generatePerformanceCards(performanceData);
        }

        function updateTrendIndicators(trendData) {
            if (!trendData || !trendData.details) return;
            
            // Animer les compteurs
            animateCounter('increasing-count', trendData.details.increasing || 0);
            animateCounter('stable-count', trendData.details.stable || 0);
            animateCounter('decreasing-count', trendData.details.decreasing || 0);
            
            const dominant = document.getElementById('dominant-trend');
            if (dominant) {
                dominant.textContent = (trendData.overall_trend || 'stable').toUpperCase();
                dominant.className = `trend-${trendData.overall_trend || 'stable'}`;
            }
        }

        function updateMonthlyStats(monthlyData) {
            if (!monthlyData || monthlyData.length === 0) return;

            // Trouver le meilleur mois
            const bestMonth = monthlyData.reduce((max, current) => 
                current.profit > max.profit ? current : max
            );

            // Calculer la moyenne
            const avgProfit = monthlyData.reduce((sum, item) => sum + item.profit, 0) / monthlyData.length;

            const bestMonthEl = document.getElementById('best-month');
            const avgMonthlyEl = document.getElementById('avg-monthly');
            
            if (bestMonthEl) bestMonthEl.textContent = bestMonth.month || 'N/A';
            if (avgMonthlyEl) avgMonthlyEl.textContent = `$${Math.round(avgProfit).toLocaleString()}`;
        }

        function generatePerformanceCards(performanceData) {
            const grid = document.getElementById('performanceGrid');
            if (!grid) return;

            grid.innerHTML = '';

            performanceData.forEach(inv => {
                const trendIcon = inv.growth_trend === 'increasing' ? 'fa-arrow-trend-up' : 
                                inv.growth_trend === 'decreasing' ? 'fa-arrow-trend-down' : 'fa-minus';
                const trendClass = `trend-${inv.growth_trend || 'stable'}`;
                const trendText = inv.growth_trend === 'increasing' ? 'Croissant' : 
                                inv.growth_trend === 'decreasing' ? 'Décroissant' : 'Stable';

                const card = `
                    <div class="card h-100 shadow-sm border-0 rounded-3">
                        <div class="card-body  p-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h6 class="card-title mb-0 text-muted">Shares $${(inv.amount || 0).toLocaleString()}</h6>
                            </div>
                            <div class="text-center mb-4">
                                <div class="display-6 fw-bold text-dark mb-1">$${(inv.amount || 0).toLocaleString()}</div>
                                <p class="text-muted mb-0 small">Shares Purchased</p>
                            </div>
                            <div class="row g-3 mb-4 text-center">
                                <div class="col-6">
                                    <div class="border-start border-success border-4 ps-3">
                                        <div class="h5 text-success mb-1 fw-bold">$${(inv.total_profit || 0).toLocaleString()}</div>
                                        <small class="text-muted">Profit generated</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="border-start border-info border-4 ps-3">
                                        <div class="h5 text-info mb-1 fw-bold">${inv.current_roi || 0}%</div>
                                        <small class="text-muted">Current ROI</small>
                                    </div>
                                </div>
                            </div>


                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">Performance</small>
                                <div class="trend-indicator ${trendClass}">
                                    <i class="fas ${trendIcon} me-1"></i>
                                    <small class="fw-semibold"> ${trendText}</small>
                                </div>
                            </div>

                        </div>
                    </div>
                `;
                grid.innerHTML += card;
            });
        }

        function animateCounter(elementId, targetValue) {
            const element = document.getElementById(elementId);
            if (!element) return;
            
            const startValue = parseInt(element.textContent) || 0;
            const duration = 1000;
            const steps = 30;
            const increment = (targetValue - startValue) / steps;
            let current = startValue;
            
            const timer = setInterval(() => {
                current += increment;
                if ((increment > 0 && current >= targetValue) || (increment < 0 && current <= targetValue)) {
                    current = targetValue;
                    clearInterval(timer);
                }
                element.textContent = Math.round(current);
            }, duration / steps);
        }
    </script>
    

    
@endsection

