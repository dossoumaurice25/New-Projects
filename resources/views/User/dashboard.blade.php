@extends('layouts.users.app')

@section('title', 'Dashboard')

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
            font-size: 1.9rem;
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



        #card{
        font-size: 2rem;
            font-weight: 700;
            color: #0c0c0c;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.27);
        }
        .card-custom {
        border-radius: 15px;
        border: 1px solid #222;
        padding: 30px;
        }

        .btn-toggle {
        border-radius: 15px;
        padding: 10px 25px;
        margin-right: 0px;
        background: #fffefe;
        color: rgb(0, 0, 0);
        border: none;
        }

        .btn-toggle.active {
        background-color: #9f23c2;
        color: #000;
        font-weight: bold;
        }

        .btn-amount {
        background-color: #9f23c2;
        border-radius: 15px;
        color: white;
        border: none;
        padding: 10px 10px;
        margin: 5px;
        width: 100px;
        }

        .btn-amount:hover, .btn-amount.active {
        background-color: #a023c2cb;
        color: rgb(255, 255, 255);
        font-weight: bold;
        }

        .payment-option input {
        margin-right: 8px;
        }

        .crypto-btn {
        border-radius: 15px;
        margin: 5px;
        padding: 10px 20px;
        border: none;
        color: rgb(0, 0, 0);
        background-color: #a023c246;
        font-weight: bold;
        }

        .crypto-btn.active {
        background-color: #9f23c2;
        color: rgb(255, 255, 255);
        font-weight: bold;
        }

        .total-box {
        background-color: #a023c233;
        border-radius: 15px;
        padding: 20px;
        margin-top: 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #000000;
        font-size: 18px;
        backdrop-filter: blur(50px);         /* effet de flou */
        -webkit-backdrop-filter: blur(50px); /* pour Safari */
        padding: 20px;
        border-radius: 10px;
        }

        .total-box .text-success {
        font-size: 20px;
        font-weight: bold;
        }

        .btn-verify {
        background-color: #9f23c2;
        color: white;
        font-weight: bold;
        border-radius: 15px;
        padding: 10px 30px;
        border: none;
        }

        .floating-btn {
        position: absolute;
        top: 20px;
        right: 5px;
        background-color: #9f23c2;
        color: black;
        font-weight: bold;
        padding: 10px 20px;
        border-radius: 15px;
        border: none;
        }

        .note {
        font-size: 12px;
        color: #aaa;
        margin-top: 10px;
        }
    </style>

    {{-- CSS Custom --}}
    <style>
        .stat-card {
            background: linear-gradient(135deg, var(--bs-primary), var(--bs-primary-dark));
            color: white;
            padding: 1.5rem;
            border-radius: 15px;
            text-align: center;
            margin-bottom: 1rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-card.bg-success { background: linear-gradient(135deg, #6f42c1, #9f23c2); }
        .stat-card.bg-info { background: linear-gradient(135deg, #6f42c1, #9f23c2); }
        .stat-card.bg-warning { background: linear-gradient(135deg, #6f42c1, #9f23c2); }

        .stat-icon {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        .stat-value {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 0.25rem;
        }

        .stat-label {
            font-size: 0.875rem;
            opacity: 0.9;
        }

        .projection-card {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            padding: 1.5rem;
            border-radius: 15px;
            border: 1px solid #dee2e6;
        }

        .projection-timeline {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 1rem;
            margin: 1rem 0;
        }

        .projection-month {
            text-align: center;
            padding: 1rem;
            border-radius: 10px;
            background: white;
            border: 2px solid #dee2e6;
            transition: all 0.3s ease;
        }

        .projection-month.completed {
            background: linear-gradient(135deg, #d4edda, #c3e6cb);
            border-color: #28a745;
        }

        .projection-month.pending {
            background: linear-gradient(135deg, #fff3cd, #ffffff);
            border-color: #9f23c2;
        }

        .month-label {
            font-size: 0.8rem;
            color: #6c757d;
            margin-bottom: 0.5rem;
        }

        .month-amount {
            font-weight: bold;
            color: #9f23c2;
            margin-bottom: 0.5rem;
        }

        .month-progress {
            height: 4px;
            background: #c3c1c1;
            border-radius: 2px;
            overflow: hidden;
        }

        .progress-bar {
            height: 100%;
            background: linear-gradient(90deg, #9f23c2, #9f23c2);
            transition: width 0.5s ease;
        }

        .investment-table {
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }

        .investment-table th {
            background: linear-gradient(135deg, #6c757d, #495057);
            color: white;
            font-weight: 600;
            border: none;
            padding: 1rem 0.75rem;
        }

        .investment-table td {
            padding: 1rem 0.75rem;
            vertical-align: middle;
            border-bottom: 1px solid #f8f9fa;
        }

        .investment-row:hover {
            background-color: #f8f9fa;
        }

        .investment-id {
            font-family: monospace;
            background: #e9ecef;
            padding: 0.25rem 0.5rem;
            border-radius: 5px;
            font-size: 0.875rem;
        }

        .badge {
            font-size: 0.75rem;
            padding: 0.375rem 0.75rem;
            border-radius: 20px;
        }

        .source-wallet { background: #17a2b8; color: white; }
        .source-crypto { background: #fd7e14; color: white; }

        .status-active { background: #28a745; color: white; }
        .status-pending { background: #ffc107; color: #212529; }
        .status-closed { background: #6c757d; color: white; }

        .profit-amount {
            font-weight: 600;
            font-family: monospace;
        }

        .duration-info {
            text-align: center;
        }

        .duration-text {
            font-size: 0.875rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .progress-container {
            width: 60px;
            height: 6px;
            background: #e9ecef;
            border-radius: 3px;
            margin: 0 auto 0.25rem;
            overflow: hidden;
        }

        .progress-bar-mini {
            height: 100%;
            background: linear-gradient(90deg, #28a745, #20c997);
            border-radius: 3px;
            transition: width 0.5s ease;
        }

        .empty-state {
            padding: 2rem;
        }

        .empty-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .action-buttons .btn {
            border-radius: 20px;
            font-size: 0.75rem;
            padding: 0.25rem 0.75rem;
        }

        @media (max-width: 768px) {
            .projection-timeline {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .investment-table {
                font-size: 0.875rem;
            }
            
            .stat-card {
                margin-bottom: 0.5rem;
            }
        }
    </style>

@endsection

@section('content') 
      <!-- ========== section start ========== -->
      <section class="section" style="background-image: url('{{asset('assets/images/b (3).png')}}'); background-size: cover; background-repeat: no-repeat;">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2> Dashboard</h2>
                </div>
              </div>           
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->



            @if (session('success') || session('error'))
                <div id="alert-message"
                    class="card shadow-lg border-0 {{ session('success') ? 'border-start border-success border-4' : 'border-start border-danger border-4' }}"
                    style="display: none; position: fixed; top: 20px; right: 20px; z-index: 9999; border-radius: 12px; min-width: 350px; background: rgba(255,255,255,0.95); backdrop-filter: blur(10px);">
                    
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start">
                            <div class="me-3 mt-1">
                                @if (session('success'))
                                    <i class="fas fa-check-circle text-success fa-2x"></i>
                                @else
                                    <i class="fas fa-exclamation-circle text-danger fa-2x"></i>
                                @endif
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="card-title {{ session('success') ? 'text-success' : 'text-danger' }} fw-bold mb-2">
                                    {{ session('success') ? 'A successful operation' : 'An error has occurred' }}
                                </h6>
                                <p class="card-text text-dark mb-0">
                                    {{ session('success') ?? session('error') }}
                                </p>
                            </div>
                            <button type="button" class="btn-close ms-2" aria-label="Close"
                                    onclick="this.closest('.card').style.display='none'"></button>
                        </div>
                    </div>
                </div>
            @endif




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
                                            <div class="card-value">${{ number_format($totalProfit + $totalInvested, 2) }}</div>
                                        </div>
                                        <div class="card-icon">
                                            <i class="fas fa-dollar"></i>
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
                                            <i class="fas fa-calendar-check"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
          <!-- End Dashboard Cards -->

          <!-- Dashboard Cards -->
                        <div class="row g-4 mb-5">
                            <div class="col-12 col-md-6 col-xl-6">
                                <div style="background: linear-gradient(-120deg, #9f23c2, #dd98f0);" class="dashboard-card p-4 h-100 fade-in-up">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="card-title">Wallet</div>
                                            <div class="card-value">${{ number_format(optional($wallet)->balance ?? 0, 2) }}</div>
                                        </div>
                                        <div class="card-icon">
                                            <i style="color: white;" class="fas fa-wallet"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12 col-md-6 col-xl-6">
                                <div style="background: linear-gradient(120deg, #9f23c2, #dd98f0);" class="dashboard-card p-4 h-100 fade-in-up" style="animation-delay: 0.1s">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div style="color: white;  text-shadow: 0 2px 8px rgba(0, 0, 0, 0.27);"  class="card-title">WEEKLY PROFIT</div>
                                            <div style="color: white;  text-shadow: 0 2px 8px rgba(0, 0, 0, 0.579);" class="card-value">3.7%</div>
                                        </div>
                                        <div class="card-icon">
                                          <i style="color: white;" class="fas fa-profit"></i>
                                          </div>
                                    </div>
                                </div>
                            </div>
                      </div>
          <!-- End Dashboard Cards -->  









          <!--<div class="row">
            <div class="col-xl-6 col-lg-6 col-sm-6">
              <div  class="icon-card mb-30">
                <div class="content">
                  <h6 class="mb-10"><strong>CURRENT WEEK</strong></h6>
                  <p>Jul 14, 2025 - Jul 19, 2025</p>
                  <h3 class="text-bold mb-10" id="card">0.0000$</h3>
                  <p>Sunday, Jul 20, 2025</p>
                  <h3 class="text-bold mb-10" id="card">0.0000$</h3>
                </div>
              </div>
              
            </div>
            
            <div class="col-xl-6 col-lg-6 col-sm-6">
              <div  class="icon-card mb-30">
                <div class="content">
                  <h6 class="mb-10"><strong>PAST WEEK</strong></h6>
                  <p>Jul 07, 2025 - Jul 12, 2025</p>
                  <h3 class="text-bold mb-10" id="card">0.0000$</h3>
                  <p>Sunday, Jul 13, 2025</p>
                  <h3 class="text-bold mb-10" id="card">0.0000$</h3>
                </div>
              </div>
              
            </div>
          </div> End Col -->


          <div class="row">
            <form method="POST" action="{{ route('User.invest.checkout') }}">
              @csrf
              <input type="hidden" name="amount" id="hidden-amount">
              <input type="hidden" name="payment_method" id="hidden-method">

              <div class="card-style mb-4 p-4">
                <a href="{{route('User.deposit')}}" class="floating-btn text-white mb-3">Deposit</a>
                <h3 class="fw-bold mb-3">Shop</h3>

                <!-- Select Amount -->
                <div class="mb-4">
                  <p class="mb-3">Select Amount</p>
                  <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn-amount">50 $</button>
                    <button type="button" class="btn-amount">100 $</button>
                    <button type="button" class="btn-amount">500 $</button>
                    <button type="button" class="btn-amount">1000 $</button>
                    <button type="button" class="btn-amount">5000 $</button>
                    <button type="button" class="btn-amount">10000 $</button>
                    <button type="button" class="btn-amount">20000 $</button>
                    <input id="customAmountInput" type="text" placeholder="$ Enter Custom Amount" class="form-control" style="border-radius: 25px; background-color: #a023c26b; color: #000; border: none; max-width: 250px;">
                  </div>
                </div>

                <!-- Select Payment Method -->
                <div class="mb-4">
                  <p class="mb-3">Select Payment Method</p>
                  <label><input type="radio" name="payment" value="crypto" checked> Crypto</label>
                  <label><input type="radio" name="payment" value="wallet"> Wallet</label>
                </div>

                <!-- Crypto options -->
                <div id="crypto-options" class="d-flex flex-wrap gap-2 mb-4">
                  <button type="button" class="crypto-btn active"><img src="{{asset('assets/images/Bitcoin.png')}}" style="width: 20px; margin-right: 3px;  margin-bottom: 3px; height: 20px; border-radius: 50%;" alt="">BTC</button>
                  <button type="button" class="crypto-btn"><img src="{{asset('assets/images/Ethereum.png')}}" style="width: 20px; margin-bottom: 3px;  margin-right: 3px; height: 20px; border-radius: 50%;" alt="">ETH</button>
                  <button type="button" class="crypto-btn"><img src="{{asset('assets/images/trc20.png')}}" style="width: 20px; margin-bottom: 3px;  margin-right: 3px; height: 20px; border-radius: 50%;" alt="">USDT-TRC20</button>
                  <button type="button" class="crypto-btn"><img src="{{asset('assets/images/bep.png')}}" style="width: 20px; margin-bottom: 3px; margin-right: 3px; height: 20px; border-radius: 50%;" alt="">USDT-BEP20</button>
                </div>

                <!-- Wallet option -->
                <div id="wallet-options" class="mb-4 d-none">
                  <button type="button" class="crypto-btn active">B-NOVA-Wallet</button>
                </div>

                <!-- Total -->
                <div class="blur-background d-flex justify-content-between align-items-center border-top pt-3 mt-3">
                  <div>
                    <span class="fw-bold">SUB TOTAL:</span>
                    <span id="subtotal" style="color: #9f23c2;">00,00 $</span>
                  </div>
                  <button type="button" class="btn-verify">Checkout</button>
                </div>
                <div class="note mt-2">Note : No admin fee</div>
              </div>
            </form>
          </div>



         



          
          {{-- Section Statistiques d'investissement --}}
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card-style">
                        
                        {{-- Statistiques générales 
                        <div class="row mb-4">
                            
                            
                            <div class="col-md-4 col-6">
                                <div class="stat-card bg-success">
                                    <div class="stat-icon">📈</div>
                                    <div class="stat-value">${{ number_format($totalProfit, 2) }}</div>
                                    <div class="stat-label">Total Profits</div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-6">
                                <div class="stat-card bg-info">
                                    <div class="stat-icon">🔥</div>
                                    <div class="stat-value">${{ number_format($todayProfit, 2) }}</div>
                                    <div class="stat-label">Profit Today</div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-6">
                                <div class="stat-card bg-warning">
                                    <div class="stat-icon">📅</div>
                                    <div class="stat-value">${{ number_format($weeklyProfit, 2) }}</div>
                                    <div class="stat-label">7 Day Profit</div>
                                </div>
                            </div>
                        </div>--}}
                        
                        {{-- Projection mensuelle --}}
                        @if($activeInvestments->count() > 0)
                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="projection-card">
                                    <h4 class="mb-3">12-month projection</h4>
                                    <div class="projection-timeline">
                                        @foreach($monthlyProjection as $month => $data)
                                        <div class="projection-month {{ $month <= $currentMonth ? 'completed' : 'pending' }}">
                                            <div class="month-label">Month {{ $month }}</div>
                                            <div class="month-amount">${{ number_format($data['cumulative_profit'], 2) }}</div>
                                            <div class="month-progress">
                                                <div class="progress-bar" style="width: {{ ($data['cumulative_profit'] / $projectedTotalProfit) * 100 }}%"></div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    
                                    <div class="projection-summary mt-3">
                                        <div class="row">
                                            <div class="col-6">
                                                <strong>Expected profit with compound interest (12 months):</strong>
                                                <span class="text-success">${{ number_format($projectedTotalProfit, 2) }}</span>
                                            </div>
                                            <div class="col-6">
                                                <strong>Total ROI:</strong>
                                                <span class="text-primary">{{ number_format(($projectedTotalProfit / $totalInvested) * 100, 1) }}%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif



                        {{-- Section Timeline des Investissements --}}
                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5><i class="fas fa-clock"></i> My shares</h5>
                                        <small class="text-muted">
                                            Page {{ $investments->currentPage() }} of {{ $investments->lastPage() }} 
                                            ({{ $investments->total() }}  in total)
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        @if($investmentTimelines && $investmentTimelines->count() > 0)
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Amount</th>
                                                            <th>Advancement</th>
                                                            <th>Remaining days</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($investmentTimelines as $timeline)
                                                            <tr class="{{ $timeline['time_status'] === 'expired' ? 'table-danger' : ($timeline['time_status'] === 'ending_soon' ? 'table-warning' : '') }}">
                                                                <td>{{ $timeline['id'] }}</td>
                                                                <td><strong>${{ number_format($timeline['amount'], 2) }}</strong></td>
                                                                <td>
                                                                    <div class="progress" style="height: 20px;">
                                                                        <div class="progress-bar 
                                                                            @if($timeline['progress_percentage'] >= 80) bg-warning
                                                                            @elseif($timeline['progress_percentage'] >= 100) bg-danger
                                                                            @else bg-success @endif" 
                                                                            style="width: {{ min(100, $timeline['progress_percentage']) }}%">
                                                                            {{ $timeline['progress_percentage'] }}%
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    @if($timeline['is_expired'])
                                                                        <span class="badge badge-danger text-black">Expiré</span>
                                                                    @else
                                                                        <span class="badge 
                                                                            @if($timeline['days_remaining'] <= 30) badge-warning text-black
                                                                            @else badge-success text-black @endif">
                                                                            {{ floor($timeline['days_remaining']) }} days
                                                                        </span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @switch($timeline['time_status'])
                                                                        @case('expired')
                                                                            <span class="badge badge-danger bg-danger">Expired</span>
                                                                            @break
                                                                        @case('ending_soon')
                                                                            <span class="badge badge-warning bg-warning">The end is nigh</span>
                                                                            @break
                                                                        @default
                                                                            <span class="badge badge-success" style="background-color: #d07be7">Active</span>
                                                                    @endswitch
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            {{-- Pagination pour le Dashboard (5 par page) --}}
                                            <div class="d-flex justify-content-center mt-4">
                                                {{ $investments->appends(request()->query())->links('pagination::bootstrap-4') }}
                                            </div>
                                        @else
                                            <p class="text-muted">No investment found.</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>









          <div class="row">
            
            <div class="col-lg-6">
              <div class="card-style  mb-4 p-4">
                
                  <div class="">
                      <h3 class="fw-bold  mb-4">Affiliate Link</h3>
                      <div class="link-container">
                        <input type="text" class="link-input"  readonly value="{{ url('/register?ref=' . auth()->user()->referral_code) }}" style="width: 100%" id="affiliateLink">
                        <button class="copy-btn" onclick="copyLink()">
                            
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" class="bi bi-copy copy-icon" stroke="currentColor" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z"/>
                            </svg>
                        </button>
                      </div>
                  </div> 

                 
                
                  <div class="toast" id="toast">
                      Lien copié dans le presse-papiers !
                  </div>
                
              </div>
            </div>

            <div class="col-lg-6">
              <div class="card-style calendar-card mb-4 p-4">
                <div id="calendar-mini"></div>
              </div>
            </div>
            
            <!-- End Col -->           
          </div>
          <!-- End Row -->



        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->

@endsection     
    

   
@section('script')
    <script>
   
        
      // ====== calendar activation
      document.addEventListener("DOMContentLoaded", function () {
        var calendarMiniEl = document.getElementById("calendar-mini");
        var calendarMini = new FullCalendar.Calendar(calendarMiniEl, {
          initialView: "dayGridMonth",
          headerToolbar: {
            end: "today prev,next",
          },
        });
        calendarMini.render();
      });

     
      
    </script>

    <script>
      document.addEventListener("DOMContentLoaded", () => {
        const radios = document.querySelectorAll('input[name="payment"]');
        const cryptoOptions = document.getElementById("crypto-options");
        const walletOptions = document.getElementById("wallet-options");
        const subtotal = document.getElementById("subtotal");
        const amountButtons = document.querySelectorAll(".btn-amount");
        const customInput = document.getElementById("customAmountInput");

        radios.forEach(radio => {
          radio.addEventListener("change", () => {
            cryptoOptions.classList.add("d-none");
            walletOptions.classList.add("d-none");
            if (radio.value === "crypto") cryptoOptions.classList.remove("d-none");
            if (radio.value === "wallet") walletOptions.classList.remove("d-none");
          });
        });

        function handleSelection(containerId) {
          const container = document.getElementById(containerId);
          if (!container) return;
          container.querySelectorAll(".crypto-btn").forEach(btn => {
            btn.addEventListener("click", () => {
              container.querySelectorAll(".crypto-btn").forEach(b => b.classList.remove("active"));
              btn.classList.add("active");
            });
          });
        }

        handleSelection("crypto-options");
        handleSelection("wallet-options");

        amountButtons.forEach(btn => {
          btn.addEventListener("click", () => {
            amountButtons.forEach(b => b.classList.remove("active"));
            btn.classList.add("active");
            const val = parseFloat(btn.textContent.replace('$', '').trim());
            if (!isNaN(val)) updateSubtotal(val);
          });
        });

        customInput.addEventListener("input", () => {
          amountButtons.forEach(b => b.classList.remove("active"));
          const val = customInput.value.replace(/[^\d.,]/g, '').replace(',', '.');
          const num = parseFloat(val);
          if (!isNaN(num)) updateSubtotal(num);
          else subtotal.textContent = "00,00 $";
        });

        customInput.addEventListener("blur", () => {
          let val = customInput.value.replace(/[^\d.,]/g, '');
          val = val.replace(',', '.');
          const num = parseFloat(val);
          if (!isNaN(num)) customInput.value = num.toFixed(2).replace('.', ',') + ' $';
          else customInput.value = '';
        });

        function updateSubtotal(amount) {
          subtotal.textContent = amount.toFixed(2).replace('.', ',') + ' $';
        }

        // Handle Checkout
        const checkoutBtn = document.querySelector('.btn-verify');
        const hiddenAmount = document.getElementById('hidden-amount');
        const hiddenMethod = document.getElementById('hidden-method');

        checkoutBtn.addEventListener("click", () => {
          const totalText = subtotal.textContent.replace(/[^\d.,]/g, '').replace(',', '.');
          const amount = parseFloat(totalText);

          const selectedMethod = document.querySelector('input[name="payment"]:checked').value;
          let finalMethod = '';

          if (selectedMethod === 'crypto') {
            const activeCrypto = document.querySelector('#crypto-options .crypto-btn.active');
            if (activeCrypto) finalMethod = activeCrypto.textContent.trim().toLowerCase().replace('-', '_');
          } else if (selectedMethod === 'wallet') {
            finalMethod = 'wallet';
          }

          if (amount > 0 && finalMethod) {
            hiddenAmount.value = amount;
            hiddenMethod.value = finalMethod;
            checkoutBtn.closest('form').submit();
          } else {
            alert('Veuillez remplir tous les champs avant de continuer.');
          }
        });
      });
    </script>

    <script>
        function copyLink() {
            const linkInput = document.getElementById('affiliateLink');
            const toast = document.getElementById('toast');
            
            // Sélectionner le texte
            linkInput.select();
            linkInput.setSelectionRange(0, 99999);
            
            // Copier le texte
            navigator.clipboard.writeText(linkInput.value).then(() => {
                // Afficher le toast
                toast.classList.add('show');
                
                // Masquer le toast après 3 secondes
                setTimeout(() => {
                    toast.classList.remove('show');
                }, 3000);
            }).catch(err => {
                console.error('Erreur lors de la copie: ', err);
            });
        }

        // Fonction pour générer un QR code plus réaliste
        function generateQRPattern() {
            const pattern = document.querySelector('.qr-pattern');
            let svg = '<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 25 25">';
            svg += '<rect width="25" height="25" fill="white"/>';
            
            // Coins de positionnement
            const corners = [
                {x: 0, y: 0}, {x: 18, y: 0}, {x: 0, y: 18}
            ];
            
            corners.forEach(corner => {
                svg += `<rect x="${corner.x}" y="${corner.y}" width="7" height="7" fill="black"/>`;
                svg += `<rect x="${corner.x + 1}" y="${corner.y + 1}" width="5" height="5" fill="white"/>`;
                svg += `<rect x="${corner.x + 2}" y="${corner.y + 2}" width="3" height="3" fill="black"/>`;
            });
            
            // Motif de données simulé
            const dataPattern = [
                [8,0],[9,0],[10,0],[11,0],[12,0],[13,0],[14,0],[15,0],[16,0],[17,0],
                [8,1],[16,1],
                [8,2],[10,2],[12,2],[14,2],[16,2],
                [8,3],[16,3],
                [8,4],[10,4],[12,4],[14,4],[16,4],
                [8,5],[16,5],
                [8,6],[9,6],[10,6],[11,6],[12,6],[13,6],[14,6],[15,6],[16,6],
                [0,8],[1,8],[2,8],[3,8],[4,8],[5,8],[6,8],
                [8,8],[9,8],[11,8],[13,8],[15,8],[17,8],
                [8,9],[11,9],[13,9],[15,9],
                [8,10],[10,10],[12,10],[14,10],[16,10],
                [8,11],[9,11],[11,11],[13,11],[15,11],[17,11],
                [8,12],[10,12],[12,12],[14,12],[16,12],
                [8,13],[11,13],[13,13],[15,13],
                [8,14],[9,14],[10,14],[12,14],[14,14],[15,14],[16,14],[17,14],
                [8,15],[11,15],[13,15],[15,15],
                [8,16],[10,16],[12,16],[14,16],[16,16],
                [8,17],[9,17],[11,17],[13,17],[15,17],[17,17],
                [0,18],[2,18],[4,18],[6,18],[8,18],[10,18],[12,18],[14,18],[16,18],
                [2,19],[4,19],[6,19],[9,19],[11,19],[13,19],[15,19],[17,19],
                [0,20],[2,20],[4,20],[6,20],[8,20],[10,20],[12,20],[14,20],[16,20],
                [2,21],[4,21],[6,21],[9,21],[11,21],[13,21],[15,21],[17,21],
                [0,22],[2,22],[4,22],[6,22],[8,22],[10,22],[12,22],[14,22],[16,22],
                [2,23],[4,23],[6,23],[9,23],[11,23],[13,23],[15,23],[17,23],
                [0,24],[1,24],[2,24],[3,24],[4,24],[5,24],[6,24],[8,24],[9,24],[10,24],[11,24],[12,24],[13,24],[14,24],[15,24],[16,24],[17,24]
            ];
            
            dataPattern.forEach(([x, y]) => {
                svg += `<rect x="${x}" y="${y}" width="1" height="1" fill="black"/>`;
            });
            
            svg += '</svg>';
            
            pattern.style.backgroundImage = `url("data:image/svg+xml,${encodeURIComponent(svg)}")`;
        }
        
        // Générer le motif QR au chargement
        document.addEventListener('DOMContentLoaded', generateQRPattern);
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const alertBox = document.getElementById("alert-message");
            if (alertBox) {
                alertBox.style.display = "block";

                // Disparait après 8 secondes
                setTimeout(() => {
                    alertBox.style.opacity = 1;
                    let fadeOut = setInterval(() => {
                        if (alertBox.style.opacity > 0) {
                            alertBox.style.opacity -= 0.05;
                        } else {
                            clearInterval(fadeOut);
                            alertBox.style.display = "none";
                        }
                    }, 50);
                }, 8000);
            }
        });
    </script>


    {{-- JavaScript pour les interactions --}}
    <script>
        // Filtrage par statut
        document.getElementById('statusFilter').addEventListener('change', function() {
            const selectedStatus = this.value;
            const rows = document.querySelectorAll('.investment-row');
            
            rows.forEach(row => {
                if (selectedStatus === 'all' || row.dataset.status === selectedStatus) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // Fonction pour afficher les détails d'un investissement
        function showInvestmentDetails(investmentId) {
            // Ici vous pouvez ouvrir une modal ou rediriger vers une page de détails
            alert('Détails de l\'investissement #' + investmentId + '\n\n(À implémenter selon vos besoins)');
        }

        // Animation des compteurs au chargement
        document.addEventListener('DOMContentLoaded', function() {
            const statValues = document.querySelectorAll('.stat-value');
            
            statValues.forEach(element => {
                const finalValue = element.textContent;
                const numericValue = parseFloat(finalValue.replace(/[$,]/g, ''));
                
                if (!isNaN(numericValue)) {
                    animateCounter(element, 0, numericValue, 1000);
                }
            });
        });

        function animateCounter(element, start, end, duration) {
            const startTime = performance.now();
            const originalText = element.textContent;
            const prefix = originalText.includes('$') ? '$' : '';
            
            function updateCounter(currentTime) {
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);
                
                const current = start + (end - start) * progress;
                element.textContent = prefix + current.toLocaleString('en-US', {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                });
                
                if (progress < 1) {
                    requestAnimationFrame(updateCounter);
                }
            }
            
            requestAnimationFrame(updateCounter);
        }
    </script>

@endsection


