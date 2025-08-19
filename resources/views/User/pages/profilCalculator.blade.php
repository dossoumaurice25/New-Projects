@extends('layouts.users.app')

@section('title', 'Profil Calculator')

@section('style')
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #9f23c2 0%, #640c7c 100%);
            --success-gradient: linear-gradient(135deg, #640c7c 0%, #9f23c2 100%);
            --card-shadow: 0 10px 30px rgba(0,0,0,0.1);
            --border-radius: 15px;
        }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            padding: 20px 0;
        }

        .main-container {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--card-shadow);
            overflow: hidden;
            margin: 20px auto;
            max-width: 1200px;
        }

        .headerr {
            background: var(--primary-gradient);
            color: white;
            padding: 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .headerr::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: repeating-linear-gradient(
                45deg,
                transparent,
                transparent 10px,
                rgba(255,255,255,0.03) 10px,
                rgba(255,255,255,0.03) 20px
            );
            animation: shimmer 20s linear infinite;
        }

        @keyframes shimmer {
            0% { transform: translateX(-50%) translateY(-50%) rotate(0deg); }
            100% { transform: translateX(-50%) translateY(-50%) rotate(360deg); }
        }

        .headerr h2 {
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0;
            position: relative;
            z-index: 2;
        }

        .headerr p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin: 10px 0 0 0;
            position: relative;
            z-index: 2;
            color: white;
        }

        .form-section {
            padding: 40px;
            background: linear-gradient(135deg, #ffeef8 0%, #f0f8ff 100%);
        }

        .form-card {
            background: white;
            border-radius: var(--border-radius);
            padding: 30px;
            box-shadow: var(--card-shadow);
            border: 1px solid rgba(102, 126, 234, 0.1);
        }

        .form-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
            font-size: 1.1rem;
        }

        .form-control {
            border-radius: 10px;
            border: 2px solid #e1e5e9;
            padding: 12px 16px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #9f23c2;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
            transform: translateY(-2px);
        }

        .calculate-btn {
            background: var(--success-gradient);
            border: none;
            border-radius: 12px;
            padding: 15px 40px;
            font-size: 1.2rem;
            font-weight: 700;
            color: white;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 5px 15px rgba(87, 20, 101, 0.4);
        }

        .calculate-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(124, 17, 153, 0.6);
            background: linear-gradient(135deg, #9f23c2 0%, #5d3868 100%);
            color: white;
        }

        .results-section {
            padding: 40px;
            background: white;
        }

        .results-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .results-header h2 {
            color: #333;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .summary-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .summary-card {
            background: var(--primary-gradient);
            color: white;
            padding: 25px;
            border-radius: var(--border-radius);
            text-align: center;
            box-shadow: var(--card-shadow);
            position: relative;
            overflow: hidden;
        }

        .summary-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .summary-card:hover::before {
            left: 100%;
        }

        .summary-card h3 {
            font-size: 1.1rem;
            margin: 0 0 10px 0;
            opacity: 0.9;
        }

        .summary-card .value {
            font-size: 2rem;
            font-weight: 700;
            margin: 0;
        }

        .table-container {
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--card-shadow);
            border: 1px solid rgba(0,0,0,0.1);
        }

        .table {
            margin: 0;
            border-collapse: separate;
            border-spacing: 0;
        }

        .table thead th {
            background: var(--primary-gradient);
            color: white;
            font-weight: 700;
            border: none;
            padding: 20px 15px;
            font-size: 1.1rem;
            text-align: center;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f8f9ff;
        }

        .table tbody tr:hover {
            background-color: #e8f0fe;
            transform: scale(1.02);
            transition: all 0.2s ease;
        }

        .table tbody td {
            padding: 15px;
            border-color: #e9ecef;
            text-align: center;
            font-weight: 500;
        }

        .profit-positive {
            color: #28a745;
            font-weight: 700;
        }

        .loading {
            display: none;
            text-align: center;
            padding: 20px;
        }

        .spinner {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #9f23c2;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
            margin: 0 auto 20px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 768px) {
            .header h1 { font-size: 2rem; }
            .form-section, .results-section { padding: 20px; }
            .summary-cards { grid-template-columns: 1fr; }
            .table-responsive { font-size: 0.9rem; }
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
                        <h2>Profit Calculator</h2>
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
                                Profit Calculator
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
                    
                        <!-- Header -->
                        <div class="headerr" style="border-top-left-radius: 16px; border-top-right-radius: 16px;">
                            <h2 style="color: white;"><i class="fas fa-chart-line me-3"></i>Estimated profits for the next 3 years</h2>
                        </div>

                        <!-- Form Section -->
                        <div style="border-bottom-left-radius: 16px; border-bottom-right-radius: 16px;" class="form-section">
                            <div class="form-card" >
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="investmentAmount" class="form-label">
                                            <i class="fas fa-dollar-sign me-2"></i>Investment Amount ($)
                                        </label>
                                        <input type="number" class="form-control" id="investmentAmount" 
                                            placeholder="1000" min="1" step="0.01" required>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="startDate" class="form-label">
                                            <i class="fas fa-calendar-alt me-2"></i>Start Date
                                        </label>
                                        <input type="date" class="form-control" id="startDate" required>
                                    </div>
                                    <div class="col-md-4 mb-3 d-flex align-items-end">
                                        <button type="button" class="btn calculate-btn w-100" onclick="calculateProfits()">
                                            <i class="fas fa-calculator me-2"></i>Calculate
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Loading -->
                        <div class="loading" id="loading">
                            <div class="spinner"></div>
                            <p>Calculating...</p>
                        </div>

                        <!-- Results Section -->
                        <div class="results-section" id="results" style="display: none;">
                            <div class="results-header">
                                <h2><i class="fas fa-analytics me-2"></i>Investment Results</h2>
                                <p class="text-muted">Detailed projection over 12 months with Weekly profit of 3.7%</p>
                                <p class="text-info"><i class="fas fa-info-circle me-1"></i>These estimated profits are based on the weekly profit rate</p>
                            </div>

                            <!-- Summary Cards -->
                            <div class="summary-cards" id="summaryCards">
                                <!-- Cards will be generated dynamically -->
                            </div>

                            <!-- Results Table -->
                            <div class="table-container">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Month</th>
                                                <!--<th>Jours</th>
                                                <th>Semaines</th> 
                                                -- pour le js ---
                                                <td><span class="badge bg-info">${result.daysInMonth} jours</span></td>
                                                <td><span class="badge bg-secondary">${result.weeksInMonth} sem.</span></td>-->
                                                <th>Profit ($)</th>
                                                <th>Total Profit ($)</th>
                                                <th>Total Value ($)</th>
                                            </tr>
                                        </thead>
                                        <tbody id="resultsTable">
                                            <!-- Results will be populated here -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
            <!-- end container -->
      </div>
@endsection

@section('script')
    <script>
        // Set today's date as default
        document.getElementById('startDate').value = new Date().toISOString().split('T')[0];

        function calculateProfits() {
            const amount = parseFloat(document.getElementById('investmentAmount').value);
            const startDate = new Date(document.getElementById('startDate').value);

            if (!amount || amount <= 0) {
                alert('Please enter a valid investment amount.');
                return;
            }

            if (!startDate || isNaN(startDate)) {
                alert('Please select a valid start date.');
                return;
            }

            // Show loading
            document.getElementById('loading').style.display = 'block';
            document.getElementById('results').style.display = 'none';

            // Simulate calculation delay for better UX
            setTimeout(() => {
                const monthlyRate = 0.1532857142857143; // 15.32857142857143%
                const weeksInMonth = 4.345;
                const weeklyRate = Math.pow(1 + monthlyRate, 1 / weeksInMonth) - 1; // recalculé à partir du taux mensuel
                const dailyRate = weeklyRate / 7;

                let currentValue = amount;
                let totalProfits = 0;
                let currentDate = new Date(startDate);
                const results = [];

                for (let month = 1; month <= 12; month++) {
                    const monthStartDate = new Date(currentDate);
                    const monthEndDate = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);

                    //let daysInMonth = monthEndDate.getDate() - monthStartDate.getDate() + 1;
                    //if (month === 1) {
                    //    daysInMonth = monthEndDate.getDate() - startDate.getDate() + 1;
                    //}
                    let daysInMonth = 29.98982; // 30.4166667 jours fixes pour chaque mois

                    const startMonthValue = currentValue;
                    currentValue = startMonthValue * Math.pow(1 + dailyRate, daysInMonth);
                    const monthProfit = currentValue - startMonthValue;
                    totalProfits += monthProfit;

                    results.push({
                        month: month,
                        monthName: monthStartDate.toLocaleDateString('en-EN', { month: 'long', year: 'numeric' }),
                        daysInMonth: Math.round(daysInMonth),
                        weeksInMonth: (daysInMonth / 7).toFixed(2),
                        monthProfit: monthProfit,
                        totalProfits: totalProfits,
                        totalValue: currentValue
                    });

                    currentDate.setMonth(currentDate.getMonth() + 1);
                    currentDate.setDate(1);
                }

                displayResults(results, amount);
            }, 1000);
        }

        function displayResults(results, initialAmount) {
            const finalResult = results[results.length - 1];

            const summaryCards = document.getElementById('summaryCards');
            summaryCards.innerHTML = `
                <div class="summary-card">
                    <h3 style='color:white'>Initial investment</h3>
                    <p class="value">${formatCurrency(initialAmount)}</p>
                </div>
                <div class="summary-card">
                    <h3 style='color:white'>Total profits (12 months)</h3>
                    <p class="value profit-positive">${formatCurrency(finalResult.totalProfits)}</p>
                </div>
                <div class="summary-card">
                    <h3 style='color:white'>Final Value</h3>
                    <p class="value">${formatCurrency(finalResult.totalValue)}</p>
                </div>
                
            `;

            const tbody = document.getElementById('resultsTable');
            tbody.innerHTML = results.map(result => `
                <tr>
                    <td><strong>${result.monthName}</strong></td>
                    <td class=""><em><strong>+${formatCurrency(result.monthProfit)}</strong></em></td>
                    <td class=""><em><strong>+${formatCurrency(result.totalProfits)}</strong></em></td>
                    <td><strong>${formatCurrency(result.totalValue)}</strong></td>
                </tr>
            `).join('');

            document.getElementById('loading').style.display = 'none';
            document.getElementById('results').style.display = 'block';
            document.getElementById('results').classList.add('fade-in');

            document.getElementById('results').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }

        function formatCurrency(amount) {
            return new Intl.NumberFormat('en-US', {
                style: 'currency',
                currency: 'USD',
                minimumFractionDigits: 2
            }).format(amount);
        }

        document.getElementById('investmentAmount').addEventListener('input', function (e) {
            if (e.target.value < 0) e.target.value = 0;
        });

        function testCalculation() {
            const monthlyRate = 0.1532857142857143;
            const weeksInMonth = 4.345;
            const weeklyRate = Math.pow(1 + monthlyRate, 1 / weeksInMonth) - 1;
            const dailyRate = weeklyRate / 7;

            let value = 100;
            let totalDays = 0;

            console.log(`Profit journalier: ${dailyRate.toFixed(8)} (${(dailyRate * 100).toFixed(6)}%)`);

            const startDate = new Date('2025-01-01');
            let currentDate = new Date(startDate);

            for (let month = 0; month < 12; month++) {
                const monthStart = new Date(currentDate);
                const monthEnd = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);
                const daysThisMonth = monthEnd.getDate() - monthStart.getDate() + 1;

                value = value * Math.pow(1 + dailyRate, daysThisMonth);
                totalDays += daysThisMonth;

                currentDate.setMonth(currentDate.getMonth() + 1);
                currentDate.setDate(1);
            }

            console.log(`Total jours: ${totalDays}`);
            console.log(`Total semaines équivalentes: ${(totalDays / 7).toFixed(2)}`);
            console.log(`Final value: ${value.toFixed(2)}$`);
            console.log(`Total profit: ${(value - 100).toFixed(2)}$`);

            return value;
        }

        testCalculation();

        document.addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                calculateProfits();
            }
        });

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>

@endsection

