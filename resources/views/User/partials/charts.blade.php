<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graphiques d'Investissement</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .chart-container {
            position: relative;
            height: 300px;
            margin-bottom: 30px;
        }
        .chart-card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            transition: transform 0.3s ease;
        }
        .chart-card:hover {
            transform: translateY(-2px);
        }
        .trend-indicator {
            font-size: 1.2em;
            font-weight: bold;
        }
        .trend-increasing { color: #28a745; }
        .trend-decreasing { color: #dc3545; }
        .trend-stable { color: #ffc107; }
        .metric-box {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
        }
        .performance-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }
    </style>
</head>
<body class="bg-light">

<div class="py-4">
    
   

    <!-- Graphiques Principaux -->
    <div class="row">
        
        <!-- Graphique Mensuel des Profits -->
        <div class="col-lg-6 mb-4">
            <div class="card chart-card">
                <div style="background: linear-gradient(135deg, #9f23c2 0%, #640c7c 100%) ;" class="card-header text-white">
                    <h5><i class="fas fa-calendar-alt"></i> Monthly profits (last 6 months)</h5>
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="monthlyProfitChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tendance Hebdomadaire -->
        <div class="col-lg-6 mb-4">
            <div class="card chart-card">
                <div style="background: linear-gradient(135deg, #9f23c2 0%, #640c7c 100%) ;" class="card-header text-white">
                    <h5><i class="fas fa-chart-area"></i> Weekly trend</h5>
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="weeklyTrendChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Performance par Investissement -->
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card chart-card">
                <div class="card-header text-dark" style="background: linear-gradient(135deg, #9f23c2 0%, #640c7c 100%) ;">
                    <h5><i class="fas fa-chart-line"></i> Performance per share</h5>
                </div>
                <div class="card-body">
                    <div class="chart-container" style="height: 400px;">
                        <canvas id="investmentPerformanceChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Grille de Performance Individuelle -->
    <div class="row">
        <div class="col-12">
            <div class="card chart-card">
                <div class="card-header text-white" style="background: linear-gradient(135deg, #9f23c2 0%, #640c7c 100%) ;">
                    <h5 class="text-white"><i class="fas fa-analytics"></i> Detailed performance by investment</h5>
                </div>
                <div class="card-body">
                    <div class="performance-grid" id="performanceGrid">
                        <!-- Généré dynamiquement par JavaScript -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


</body>
</html>