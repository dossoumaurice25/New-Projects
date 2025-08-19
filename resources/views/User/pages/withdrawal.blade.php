@extends('layouts.users.app')

@section('title', 'Withdrawal')

@section('style')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .bg-pattern {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.1;
        }

        .bg-pattern::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 100%;
            height: 200%;
            border: 1px solid #9f23c2;
            border-radius: 50%;
            transform: rotate(25deg);
        }

        .bg-pattern::after {
            content: '';
            position: absolute;
            bottom: -50%;
            left: -20%;
            width: 80%;
            height: 150%;
            border: 1px solid #9f23c2;
            border-radius: 50%;
            transform: rotate(-15deg);
        }

        

        .main-title {
            color: #9f23c2;
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 2rem;
        }

        
        

           .nav-tabs {
            border: none;
            margin-bottom: 2rem;
        }

        .nav-tabs .nav-link {
            background: transparent;
            border: none;
            color: #000000;
            font-size: 1.1rem;
            font-weight: 500;
            padding: 1rem 2rem;
            margin-right: 0.5rem;
            border-radius: 0;
            border-bottom: 2px solid transparent;
            transition: all 0.3s ease;
        }

        .nav-tabs .nav-link:hover {
            color: #9f23c2;
            border-bottom-color: #9f23c2;
        }

        .nav-tabs .nav-link.active {
            color: #9f23c2;
            background: transparent;
            border-bottom-color: #9f23c2;
            font-weight: 600;
        }

        .total-value-card {
            background: linear-gradient(135deg, #9f23c2 0%, #4f1460 100%);
            border-radius: 1rem;
            padding: 2rem;
            margin-bottom: 2rem;
            position: relative;
            overflow: hidden;
        }

        .total-value-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.151);
            border-radius: 50%;
           
        }

        .total-value-title {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1rem;
            margin-bottom: 0.5rem;
        }

        .total-value-amount {
            color: #ffffff;
            font-size: 3rem;
            font-weight: bold;
            margin: 0;
        }

        .crypto-icon {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            width: 60px;
            height: 60px;
            background: rgb(255, 255, 255);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: #9f23c2;
        }

        .form-label {
            color: #000000;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .form-control {
            background: #ffffff84;
            border: 2px solid #9f23c2;
            border-radius: 0.5rem;
            color: #000000;
            font-size: 1.1rem;
            padding: 0.75rem 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            background: rgb(255, 255, 255);
            border-color: #9f23c2;
            box-shadow: 0 0 0 0.2rem #a023c229;
            color: #000000;
            font-weight: bold;
        }

        .input-group-text {
            background: #9f23c2;
            border: 1px solid rgba(75, 85, 99, 0.5);
            color: #ffffff;
            font-weight: bold;
        }

        .fees-info {
            color: #9f23c2;
            font-size: 0.9rem;
            margin-top: 0.5rem;
        }

        .available-balance {
            color: #000000;
            font-size: 0.9rem;
            margin-top: 1rem;
        }

        .available-amount {
            color: #9f23c2;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .btn-confirm {
            background: linear-gradient(135deg, #4f2e54 0%, #9f23c2 100%);
            border: none;
            border-radius: 2rem;
            color: #ffffff;
            font-size: 1.1rem;
            font-weight: 600;
            padding: 0.75rem 3rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(192, 34, 197, 0.3);
        }

        .btn-confirm:hover {
            background: linear-gradient(135deg, #9f23c2 0%, #4f2e54 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(7, 57, 25, 0.4);
            color: white;
        }

        .table-dark {
          border: 0px solid black;
            background: transparent;
            border-radius: 10px;
        }

        .table-dark th {
            background: #9f23c2;
            border-color: rgba(34, 197, 94, 0.3);
            color: #ffffff;
            font-weight: 900;
            padding: 1rem;
        }

        .table-dark td {
            border-color: #ffffff00;
            color: #000000;
            padding: 1rem;
            background-color: #d0b1d84a;
        }

        .no-data {
            text-align: center;
            color: #9ca3af;
            font-style: italic;
            padding: 3rem;
        }

        .pagination {
            justify-content: center;
            margin-top: 2rem;
        }

        .page-link {
            background: rgba(30, 41, 59, 0.8);
            border: 1px solid rgba(75, 85, 99, 0.5);
            color: #e5e7eb;
            margin: 0 0.25rem;
            border-radius: 0.5rem;
        }

        .page-link:hover {
            background: rgba(34, 197, 94, 0.2);
            border-color: #9f23c2;
            color: #9f23c2;
        }

        .page-item.active .page-link {
            background: #9f23c2;
            border-color: #9f23c2;
            color: #ffffff;
        }

        .wallet-address-input {
            background:linear-gradient(135deg, #a023c287 0%, #4f2e548f 100%);
            border: 2px solid rgba(96, 75, 99, 0.5);
            border-radius: 1rem;
            color: #ffffff;
            padding: 1rem;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
        }

        .wallet-address-input:focus {
            background:linear-gradient(135deg, #4f2e5452 0%, #a023c256 100%);
            border-color: #ab4cc6;
            box-shadow: 0 0 0 0.2rem rgba(197, 34, 181, 0.25);
        }

       

        .disclaimer {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.3);
            border-radius: 0.5rem;
            padding: 1rem;
            margin: 1.5rem 0;
        }

        .disclaimer h6 {
            color: #ef4444;
            margin-bottom: 0.5rem;
        }

        .processing-info {
            background: #000000;
            border: 1px solid rgba(59, 130, 246, 0.3);
            border-radius: 0.5rem;
            padding: 1rem;
            margin: 1rem 0;
        }

        .processing-info h6 {
            color: #3b82f6;
            margin-bottom: 0.5rem;
        }

        .btn-save {
            background: linear-gradient(135deg, #4f2e54 0%, #9f23c2 100%);
            border: none;
            border-radius: 2rem;
            color: #ffffff;
            font-size: 1.1rem;
            font-weight: 600;
            padding: 0.75rem 2rem;
            transition: all 0.3s ease;
        }

        .btn-save:hover {
             background: linear-gradient(135deg, #9f23c2 0%, #4f2e54 100%);
            transform: translateY(-2px);
            color: white;
        }

        @media (max-width: 768px) {
            

            .main-title {
                font-size: 2rem;
            }

            .nav-tabs .nav-link {
                padding: 0.75rem 1rem;
                font-size: 1rem;
            }

            .main-card {
                padding: 1.5rem;
            }

            .total-value-amount {
                font-size: 2.5rem;
            }

            .crypto-icon {
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
            }

            .btn-confirm, .btn-save {
                width: 100%;
                margin-top: 1rem;
            }

            .table-responsive {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 576px) {
            .total-value-amount {
                font-size: 2rem;
            }

            .nav-tabs .nav-link {
                padding: 0.5rem 0.75rem;
                font-size: 0.9rem;
            }
        }

        .no-data {
            text-align: center;
            padding: 4rem 2rem; 
            color: #6b7280;
        }

        .no-data i {
            font-size: 4rem;
            color: #d1d5db;
            margin-bottom: 1rem;
        }

        .no-data h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: #374151;
        }

        .no-data p {
            font-size: 1rem;
            line-height: 1.6;
        }
  
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>

        /* Dans votre CSS pour personnaliser les couleurs */
        .swal2-confirm {
            background-color: #9aa7dd !important;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .card-shadow {
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .info-item {
            transition: all 0.3s ease;
        }
        .info-item:hover {
            transform: translateY(8px);
            background: linear-gradient(90deg, #f8fafc 0%, #e2e8f0 100%);
        }
        .success-badge {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        }
        .pulse-dot {
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
        .slide-in {
            animation: slideIn 0.6s ease-out;
        }
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
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
                        <h2>Withdrawal</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="breadcrumb-wrapper">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('User.dashboard')}}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                 Withdrawal
                            </li>
                            </ol>
                        </nav>
                        </div>
                    </div><!-- end col -->
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

                
                <div class="card-style">
                    
                      <div class="bg-pattern"></div>

                              <ul class="nav nav-tabs" id="withdrawalTabs">
                                  <li class="nav-item">
                                      <button class="nav-link active" id="withdrawal-tab" data-bs-toggle="tab" data-bs-target="#withdrawal">
                                          Withdrawal
                                      </button>
                                  </li>
                                  <li class="nav-item">
                                      <button class="nav-link" id="history-tab" data-bs-toggle="tab" data-bs-target="#history">
                                          History

                                      </button>
                                  </li>
                                  <li class="nav-item">
                                      <button class="nav-link" id="address-tab" data-bs-toggle="tab" data-bs-target="#address">
                                          Withdrawal Address
                                      </button>
                                  </li>
                              </ul>

                              <div class="tab-content" id="withdrawalTabContent">
                                  <!-- Onglet Retrait -->
                                  <div class="tab-pane fade show active" id="withdrawal">
                                      <div class="main-card">
                                          <div class="total-value-card">
                                              <div class="total-value-title">Total Profit</div>
                                              <div class="total-value-amount">${{ number_format($totalProfit, 2) }}</div>
                                              <div class="crypto-icon">
                                                  <i class="fas fa-coins"></i>
                                              </div>
                                          </div>
                                        @if(!$withdrawalInfo)
                                            <!-- Message si aucune adresse de retrait n'est configurée -->
                                            <div class="alert alert-warning">
                                                <i class="fas fa-exclamation-triangle me-2"></i>
                                                Please set up your withdrawal address before making a withdrawal request.
                                            </div>
                                        @endif

                                        <!-- Formulaire de demande de retrait -->
                                        <form id="withdrawalForm">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="mb-3">
                                                        <label class="form-label">Enter the withdrawal amount</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text">$</span>
                                                            <input type="number" 
                                                                class="form-control" 
                                                                id="withdrawalAmount" 
                                                                name="amount"
                                                                placeholder="0.00" 
                                                                min="10" 
                                                                step="0.01"
                                                                {{ !$withdrawalInfo ? 'disabled' : '' }}>
                                                        </div>
                                                        <div class="fees-info">5% management fee applied (Minimum: $10.00)</div>
                                                        <div id="error-message" class="text-danger mt-2" style="display: none;"></div>
                                                    </div>

                                                    <div class="available-balance">
                                                        <div>Amount you will receive after fees</div>
                                                        <div class="available-amount" id="netAmount">$0.00</div>
                                                        <small class="text-muted">Fee: $<span id="feeAmount">0.00</span></small>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-4 d-flex align-items-end justify-content-end">
                                                    <button type="button" 
                                                            class="btn btn-confirm" 
                                                            id="confirmWithdrawBtn"
                                                            onclick="processWithdrawal()"
                                                            {{ !$withdrawalInfo ? 'disabled' : '' }}>
                                                        Confirm Withdrawal
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

                                        <hr class="mt-3">

                                        <!-- Informations sur le traitement -->
                                        <div class="processing-info">
                                            <h6><i class="fas fa-clock me-2"></i>Disclaimer:</h6>
                                            <p class="mb-1 text-white">Withdrawals are available every day. Submitted requests will be processed on the weekend and you will receive your payments the following Monday, for a clear and reliable service.</p>
                                            <p class="mb-0"></p>
                                        </div>
                            

                                      </div>
                                  </div>

                                  <!-- Onglet Histoire -->
                                  <div class="tab-pane fade" id="history">
                                      <div class="main-card">
                                          <div class="table-responsive">
                                              <table class="table table-dark">
                                                  <thead  >
                                                      <tr>
                                                        <th style="border-top-left-radius: 9px;">Date</th>
                                                        <th>Amount Requested</th>
                                                        <th>Fee</th>
                                                        <th>Net Amount</th>
                                                        <th>Status</th>
                                                        <th>Address type</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody id="historyTableBody">
                                                        @if($withdrawalRequests->count() > 0)
                                                            @foreach($withdrawalRequests as $request)
                                                            <tr>
                                                                <td>{{ $request->created_at->format('M d, Y H:i') }}</td>
                                                                <td>${{ number_format($request->amount, 2) }}</td>
                                                                <td>${{ number_format($request->fee, 2) }}</td>
                                                                <td>${{ number_format($request->net_amount, 2) }}</td>
                                                                <td>
                                                                    <span class="badge 
                                                                        @if($request->status === 'pending') bg-warning
                                                                        @elseif($request->status === 'approved') bg-info
                                                                        @elseif($request->status === 'completed') bg-success
                                                                        @else bg-danger
                                                                        @endif">
                                                                        {{ ucfirst($request->status) }}
                                                                    </span>
                                                                </td>
                                                                <td>{{ $request->withdrawal_type }}</td>
                                                            </tr>
                                                            @endforeach
                                                        @else
                                                            <tr>
                                                                <td colspan="7" class="no-data">
                                                                    <i class="fas fa-credit-card"></i>
                                                                    <h3>No data Available</h3>
                                                                    <p></p>
                                                                </td>
                                                            </tr>
                                                        @endif
                                                  </tbody>
                                              </table>
                                          </div>
                                          
                                      </div>
                                  </div>

                                  <!-- Onglet Adresse -->
                                  <div class="tab-pane fade" id="address">
                                      <div class="main-card ">


                                         @if(!$withdrawalInfo)
                                            <!-- Formulaire -->
                                            
                                            <p class="mb-4">Please provide at least one preferred wallet address to proceed with your withdrawal.</p>

                                            <form method="POST" action="{{ route('User.withdrawal.store') }}">
                                                @csrf

                                                <div class="mb-3">
                                                    <label class="form-label fw-bold mb-3">Select Address Type:</label>
                                                    <div>
                                                        <input type="radio" name="type" value="BTC Address" id="btc" class="me-2" required>
                                                        <label class="form-label mb-0" for="btc">BTC Address</label>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="type" value="USDT (BEP-20) Address" id="usdtBep" class="me-2" required>
                                                        <label class="form-label mb-0" for="usdtBep">USDT (BEP-20) Address</label>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="type" value="USDT (TRC-20) Address" id="usdtTrc" class="me-2" required>
                                                        <label class="form-label mb-0" for="usdtTrc">USDT (TRC-20) Address</label>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="address" class="form-label fw-bold mb-3">Withdrawal Address:</label>
                                                    <input type="text" id="address" name="address" class="wallet-address-input form-control" placeholder="Enter your withdrawal address" required>
                                                </div>

                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-save">Save Changes</button>
                                                </div>
                                            </form>
                                            <div class="disclaimer">
                                                <h6><i class="fas fa-exclamation-triangle me-2"></i>Disclaimer:</h6>
                                                <p class="mb-0">For security reasons, if you change your existing withdrawal address, you must wait 48 hours before submitting a new request.</p>
                                            </div>

                                            
                                        @else
                                  
                                                    <div class=" px-0 py-3">
                                                        <div class="flex items-center justify-between">
                                                            <h2 class="text-lg font-semibold text-black flex items-center">
                                                                <span class="w-3 h-3 bg-green-400 rounded-full pulse-dot mr-3"></span>
                                                                Withdrawal information
                                                            </h2>
                                                        </div>
                                                    </div>

                                                    <!-- Contenu de la carte -->
                                                    <div class="p-0">
                                                        <!-- Informations utilisateur -->
                                                        <div class=" row  g-4 mb-3 ">
                                                            <div class="col-12 col-md-6 col-xl-6 info-item bg-gray-50 rounded-xl p-3 border-l-4 border-purple-500" data-aos="fade-right">
                                                                <div class="flex items-center justify-between">
                                                                    <div class="flex items-center">
                                                                        <div>
                                                                            <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">Username</p>
                                                                            <p class="text-lg font-semibold text-gray-800" id="username">{{ auth()->user()->username }}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-md-6 col-xl-6 info-item bg-gray-50 rounded-xl p-3 border-l-4 border-purple-500" data-aos="fade-right" data-aos-delay="100">
                                                                <div class="flex items-center justify-between">
                                                                    <div class="flex items-center">
                                                                        <div>
                                                                            <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">First Name</p>
                                                                            <p class="text-lg font-semibold text-gray-800" id="firstName"> {{ auth()->user()->first_name }}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-md-6 col-xl-6 info-item bg-gray-50 rounded-xl p-3 border-l-4 border-purple-500" data-aos="fade-right" data-aos-delay="200">
                                                                <div class="flex items-center justify-between">
                                                                    <div class="flex items-center">
                                                                        <div>
                                                                            <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">Last Name</p>
                                                                            <p class="text-lg font-semibold text-gray-800" id="lastName">{{ auth()->user()->last_name }}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-md-6 col-xl-6 info-item bg-gray-50 rounded-xl p-3 border-l-4 border-purple-500" data-aos="fade-right" data-aos-delay="300">
                                                                <div class="flex items-center justify-between">
                                                                    <div class="flex items-center">
                                                                        <div>
                                                                            <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">Address Type</p>
                                                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-orange-100 text-orange-800">
                                                                                <span class="w-2 h-2 bg-orange-400 rounded-full mr-2"></span>
                                                                                <span id="addressType">{{ $withdrawalInfo->type }}</span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class=" col-12 col-md-6 col-xl-6 info-item bg-gray-50 rounded-xl p-3 border-l-4 border-purple-500"  data-aos="fade-right" data-aos-delay="400" >
                                                                <div class="flex items-center justify-between">
                                                                    <div class="flex items-center">
                                                                        <div class="flex-1">
                                                                            <p class="text-sm font-medium text-gray-500 uppercase tracking-wide">Withdrawal address</p>
                                                                            <p class="text-lg font-semibold text-gray-800 break-all font-mono bg-gray-100 px-3 py-2 rounded-lg mt-1" id="withdrawalAddress">{{ $withdrawalInfo->address }}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="disclaimer">
                                                        <h6><i class="fas fa-exclamation-triangle me-2"></i>Disclaimer:</h6>
                                                        <p class="mb-0">For security reasons, if you change your existing withdrawal address, you must wait 48 hours before submitting a new request.</p>
                                                    </div>
                                               
                                           
                                        @endif

                                        

                                        <!--  <p class="mb-4">Please provide at least one preferred wallet address to proceed with your withdrawal.</p>
                                          
                                            
                                          <div class="mb-3">
                                              <div class="d-flex align-items-center mb-2">
                                                  <div class="  me-3">
                                                      <img src="{{asset('assets/images/Bitcoin.png')}} " style="width: 20px; margin-bottom: 3px; height: 20px; border-radius: 50%;" alt="">
                                                  </div>
                                                  <label class="form-label mb-0">BTC Address</label>
                                              </div>
                                              <input type="text" class="wallet-address-input form-control" placeholder="Enter your Bitcoin address">
                                          </div>

                                          <div class="mb-3">
                                              <div class="d-flex align-items-center mb-2">
                                                  <div class="me-3">
                                                      <img src="{{asset('assets/images/bep.png')}} " style="width: 20px; margin-bottom: 3px; height: 20px; border-radius: 50%;" alt="">
                                                  </div>
                                                  <label class="form-label mb-0">USDT (BEP-20) Address</label>
                                              </div>
                                              <input type="text" class="wallet-address-input form-control" placeholder="Enter your USDT BEP-20 address">
                                          </div>

                                          <div class="mb-4">
                                              <div class="d-flex align-items-center mb-2">
                                                  <div class=" me-3">
                                                      <img src="{{asset('assets/images/trc20.png')}}" style="width: 20px; margin-bottom: 3px; height: 20px; border-radius: 50%;" alt="">
                                                  </div>
                                                  <label class="form-label mb-0">USDT (TRC-20) Address</label>
                                              </div>
                                              <input type="text" class="wallet-address-input form-control" placeholder="Enter your USDT TRC-20 address">
                                          </div>

                                          <div class="disclaimer">
                                              <h6><i class="fas fa-exclamation-triangle me-2"></i>Disclaimer:</h6>
                                              <p class="mb-0">For security reasons, if you change your existing withdrawal address, you must wait 48 hours before submitting a new request.</p>
                                          </div>

                                          <div class="processing-info">
                                              <h6><i class="fas fa-clock me-2"></i>Withdrawal Processing Time:</h6>
                                              <p class="mb-1">Requests submitted before Wednesday midnight (server time) will be processed by Sunday.</p>
                                              <p class="mb-0">Requests submitted after Wednesday midnight (server time) will be processed the following Sunday.</p>
                                          </div>

                                          <div class="text-end">
                                              <button class="btn btn-save">Save Changes</button>
                                          </div> -->


                                      </div>
                                  </div>
                              </div>
                          
                                            
                </div>
            </div>
            <!-- end container -->
      </div>
@endsection

@section('script')
    <!-- Bootstrap JS + Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Toast Trigger -->
    <script>
      const toastTrigger = document.getElementById('liveToastBtn');
      const toastLive = document.getElementById('liveToast');

      if (toastTrigger) {
        toastTrigger.addEventListener('click', () => {
          const toast = new bootstrap.Toast(toastLive);
          toast.show();
        });
      }
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





 

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const amountInput = document.getElementById('withdrawalAmount');
            const netAmountDisplay = document.getElementById('netAmount');
            const feeAmountDisplay = document.getElementById('feeAmount');
            const errorMessage = document.getElementById('error-message');
            const totalProfit = {{ $totalProfit }};

            amountInput.addEventListener('input', function() {
                const amount = parseFloat(this.value) || 0;
                
                if (amount === 0) {
                    netAmountDisplay.textContent = '$0.00';
                    feeAmountDisplay.textContent = '0.00';
                    errorMessage.style.display = 'none';
                    return;
                }

                // Vérifier si le montant dépasse les fonds disponibles
                if (amount > totalProfit) {
                    errorMessage.textContent = 'Insufficient funds. Available balance: $' + totalProfit.toFixed(2);
                    errorMessage.style.display = 'block';
                    netAmountDisplay.textContent = '$0.00';
                    feeAmountDisplay.textContent = '0.00';
                    return;
                }

                // Vérifier le montant minimum
                if (amount < 10) {
                    errorMessage.textContent = 'Minimum withdrawal amount is $10.00';
                    errorMessage.style.display = 'block';
                    netAmountDisplay.textContent = '$0.00';
                    feeAmountDisplay.textContent = '0.00';
                    return;
                }

                errorMessage.style.display = 'none';

                // Calculer les frais et le montant net
                fetch('{{ route("User.withdrawal.calculate") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ amount: amount })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        netAmountDisplay.textContent = '$' + data.net_amount;
                        feeAmountDisplay.textContent = data.fee;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Calculation error',
                        text: 'An error occurred when calculating the charges.',
                        confirmButtonColor: '#d33'
                    });
                });
            });
        });

        function processWithdrawal() {
            const amount = parseFloat(document.getElementById('withdrawalAmount').value);
            const totalProfit = {{ $totalProfit }};

            if (!amount || amount < 10) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Invalid amount',
                    text: 'Please enter a valid amount (minimum $10.00)',
                    confirmButtonColor: '#f0ad4e'
                });
                return;
            }

            if (amount > totalProfit) {
                Swal.fire({
                    icon: 'error',
                    title: 'Insufficient funds',
                    text: `Solde available: $${totalProfit.toFixed(2)}`,
                    confirmButtonColor: '#d33'
                });
                return;
            }

            // Calculer le montant net pour l'affichage
            const fee = amount * 0.05;
            const netAmount = amount - fee;

            Swal.fire({
                title: 'Confirmer le retrait',
                html: `
                    <div class="text-start">
                        <p><strong>Amount requested:</strong> $${amount.toFixed(2)}</p>
                        <p><strong>Management fees (5%):</strong> $${fee.toFixed(2)}</p>
                        <p><strong>Amount you will receive:</strong> <span class="text-success">$${netAmount.toFixed(2)}</span></p>
                        <hr>
                        <small class="text-muted">Are you sure you want to submit this withdrawal request?</small>
                    </div>
                `,
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#28a745',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes, confirm',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Afficher un loader pendant la requête
                    Swal.fire({
                        title: 'Treatment in progress...',
                        text: 'Please wait',
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        showConfirmButton: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });

                    fetch('{{ route("User.withdrawal.request") }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({ amount: amount })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Application successfully submitted!',
                                html: `
                                    <div class="text-start">
                                        <p>${data.message}</p>
                                        <small class="text-muted">The page will reload to show the changes.</small>
                                    </div>
                                `,
                                confirmButtonColor: '#28a745',
                                timer: 3000,
                                timerProgressBar: true
                            }).then(() => {
                                location.reload();
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Erreur',
                                text: data.message,
                                confirmButtonColor: '#d33'
                            });
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        Swal.fire({
                            icon: 'error',
                            title: 'Connection error',
                            text: 'An error has occurred while processing your request. Please try again.',
                            confirmButtonColor: '#d33'
                        });
                    });
                }
            });
        }

        // Fonction utilitaire pour afficher des notifications toast (optionnel)
        function showToast(icon, title, text = '') {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });

            Toast.fire({
                icon: icon,
                title: title,
                text: text
            });
        }
    </script>

@endsection

