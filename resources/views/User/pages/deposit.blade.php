@extends('layouts.users.app')

@section('title', 'Deposit')

@section('style') 
    <style>
        

        .deposit-container {
            background: rgb(65, 65, 65);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 1rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            margin: 1rem auto;
            width: 100%;
            max-width: 1000px;
        }

        @media (min-width: 576px) {
            .deposit-container {
                padding: 1.5rem;
                margin: 1.5rem auto;
            }
        }

        @media (min-width: 768px) {
            .deposit-container {
                padding: 2rem;
                margin: 2rem auto;
            }
        }

        .amount-input {
            background: #a023c235;
            border: 2px solid #9f23c2;
            border-radius: 50px;
            color: #000000;
            font-size: 1rem;
            font-weight: 600;
            padding: 0.2rem 0.2rem;
            transition: all 0.3s ease;
            height: 50px;
        }

        .method-input{
            background: #a023c235;
            border: 2px solid #9f23c2;
            border-radius: 50px;
            color: #000000;
            font-size: 1rem;
            font-weight: 600;
            padding: 0.2rem 0.2rem;
            transition: all 0.3s ease;
            height: 50px;
        }

        @media (min-width: 576px) {
            .amount-input {
                font-size: 1.375rem;
                padding: 0.875rem 1.25rem;
            }
            .method-input {
                font-size: 1.2rem;
                padding: 0.5rem 1.25rem;
            }
        }

        @media (min-width: 768px) {
            .amount-input {
                font-size: 1.5rem;
                padding: 1rem 1.5rem;
            }
            .method-input {
                font-size: 1.2rem;
                padding: 0.5rem 1.25rem;
            }
        }

        .amount-input:focus {
            background: #a023c255;
            border-color: #9f23c2;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
            color: #000000;
        }

        .method-input:focus {
            background: #a023c255;
            border-color: #9f23c2;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
            color: #000000;
        }

        .amount-input::placeholder {
            color: rgba(0, 0, 0, 0.784);
        }

        .method-input::placeholder {
            color: rgba(0, 0, 0, 0.784);
        }

        .payment-method {
            background: #a023c230;
            border: 2px solid #a023c200;
            border-radius: 15px;
            color: #000000;
            padding: 0.6rem 0.8rem;
            margin: 0.15rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            min-width: 80px;
            flex: 1;
            text-align: center;
            font-size: 0.875rem;
            font-weight: 800;
        }

        @media (min-width: 576px) {
            .payment-method {
                padding: 0.7rem 1rem;
                margin: 0.375rem;
                gap: 0.6rem;
                min-width: 120px;
                font-size: 0.9rem;
            }
        }

        @media (min-width: 768px) {
            .payment-method {
                padding: 0.8rem 1.2rem;
                margin: 0.5rem;
                gap: 0.8rem;
                min-width: 140px;
                font-size: 1rem;
            }
        }

        .payment-method:hover {
            background: rgba(255, 255, 255, 0.25);
            border-color: #9f23c2;
            transform: translateY(-2px);
        }

        .payment-method.selected {
            background: #c861e4;
            box-shadow: 0 0 5px #0000005f;
            color: #ffffff;
            font-weight: 800;
        }

        .payment-icon {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            font-weight: bold;
        }

        .btc-icon { background: #f7931a; }
        .eth-icon { background: none; }
        .usdt-icon { background: none; }
        
        .next-btn {
            background: linear-gradient(45deg, #9f23c2, #d5afe0);
            border: none;
            border-radius: 50px;
            color: #ffffff;
            font-weight: 600;
            padding: 1rem 2rem;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .next-btn:hover:not(:disabled) {
            background: linear-gradient(45deg, #9f23c2, #d5afe0);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
        }

        .next-btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }

        .error-message {
            color: #ef4444;
            font-size: 0.9rem;
            margin-top: 0.5rem;
            padding: 0.5rem;
            border-radius: 8px;
            animation: shake 0.5s ease-in-out;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }

        .table {
            margin: 0;
            border-collapse: separate;
            border-spacing: 0;
            
        }

        .table thead th {
            
            color: white;
            font-weight: 700;
            border: none;
            padding: 20px 15px;
            font-size: 1.1rem;
            text-align: center;
        }
        .table thead th h6{
            color: white;
            font-weight: 700;
            font-size: 1.1rem;
            text-align: center;
        }
        .table tbody tr:nth-child(even) {
            background-color: #f7eafb;
        }

        .table tbody tr:hover {
            background-color: #dae7fe;
            transition: all 0.8s ease;
        }

        .table tbody tr td {
            border-color: none;
            text-align: center;
            font-weight: 700;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .tab{
          border-radius: 16px;
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
                        <h2>Deposit</h2>
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
                                 Deposit
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
                    <div class="content-container mx-auto shadow-2xl">
                        <form method="POST" action="{{ route('User.deposits.preview') }}" id="deposit-form">
                            @csrf

                            <h2 class=" mb-3 mb-sm-4 fs-4 fs-sm-3 fs-md-2">Enter Amount</h2>
                            
                            <div class="mb-3 mb-sm-4">
                                <div class="col-12 col-md-10 col-xl-10 position-relative">
                                    <span class="currency-symbol position-absolute d-flex align-items-center" style="left: 1rem; left-sm-1.25rem; left-md-1.5rem; top: 50%; transform: translateY(-50%); z-index: 10;">$</span>
                                    <input type="number" 
                                        class="form-control amount-input" 
                                        placeholder="0" 
                                        step="0.01"
                                        min="1" 
                                        name="amount" 
                                        id="amount"
                                        style="padding-left: 2.5rem;"
                                        required>
                                </div>
                            </div>

                            <h3 class="mb-2 mb-sm-3 fs-5 fs-sm-4 fs-md-3">Select Payment Method</h3>
                            
                            <div class="col-12 col-md-10 col-xl-10 mb-3">
                                <!--<label for="method" class="form-label">Méthode de paiement</label>-->
                                <select name="method" id="method" class="form-select method-input" style="padding-left: 1.5rem;" required>
                                    <option value="">Choose a payment method</option>
                                    <option value="btc"><strong>Bitcoin (BTC)</strong></option>
                                    <option value="eth">Ethereum (ETH)</option>
                                    <option value="usdt_trc20">USDT - TRC20</option>
                                    <option value="usdt_bep20">USDT - BEP20</option>
                                </select>
                            </div>

                            <div id="error-msg" class="text-danger fw-bold mb-3"></div>

                            <div class="text-end mt-3 mt-sm-4">
                                <button type="submit" class=" next-btn" id="next-btn" disabled>
                                    <span id="btnText">Next</span>
                                    <i class="fas fa-arrow-right ms-2"></i>
                                </button>
                            </div>

                        </form>
                    </div>
                    
                </div>

                <div class="card-style mt-4">
                        <h2 class="mb-4">Deposit Statement</h2>
                        <div class="table-wrapper tab table-responsive">
                            <table class="table">
                                <thead>
                                            <tr>                                            
                                            <th style=" background: linear-gradient(135deg, #522f5c 0%, #b97acb 100%);" class="lead-email">
                                                <h6>Date</h6>
                                            </th>
                                            <th style=" background: linear-gradient(135deg, #b97acb 0%, #b97acb 100%);" class="lead-phone">
                                                <h6>Amount ($)</h6>
                                            </th>
                                            <th style=" background: linear-gradient(240deg, #522f5c 0%, #b97acb 100%);" class="lead-company">
                                                <h6>Crypto amount</h6>
                                            </th>
                                            <th style=" background: linear-gradient(240deg, #522f5c 0%, #b97acb 100%);" class="lead-company">
                                                <h6>Method</h6>
                                            </th>
                                            <th style=" background: linear-gradient(240deg, #522f5c 0%, #b97acb 100%);" class="lead-company">
                                                <h6>Status</h6>
                                            </th>
                                            </tr>
                                            <!-- end table row-->
                                </thead>
                                <tbody>
                                    @if($deposits->count() > 0)
                                        @foreach($deposits as $deposit)
                                                <tr>                                           
                                                    <td class="min-width">
                                                        <p>{{ $deposit->created_at->format('d/m/Y H:i') }}</p>
                                                    </td>
                                                    <td class="min-width">
                                                        <p>${{ number_format($deposit->amount_usd, 2) }}</p>
                                                    </td>
                                                    <td class="min-width">
                                                        <p>{{ $deposit->crypto_amount }} {{ strtoupper($deposit->method) }}</p>
                                                    </td>
                                                    <td class="min-width">
                                                        <p>{{ strtoupper($deposit->method) }}</p>
                                                    </td>
                                                    <td class="min-width">
                                                        @if($deposit->status == 'pending')
                                                            <span class="badge bg-warning text-dark">Pending</span>
                                                        @else
                                                            <span class="badge bg-success">Approved</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <!-- end table row -->
                                        @endforeach
                                    @else       
                                        <tr>
                                            <td  colspan="5" > 
                                                <h3>No data Available</h3>
                                                
                                            </td>
                                        </tr>
                                        <!-- end table row -->  
                                    @endif                                                                                   
                                </tbody>
                            </table>
                                        <!-- end table -->
                        </div>                   
                </div>
            </div>
            <!-- end container -->
      </div>





       <!-- <h2 class="mb-4">Faire un dépôt</h2>

        <form method="POST" action="{{ route('User.deposits.preview') }}" id="deposit-form">
            @csrf

            <div class="mb-3">
                <label for="amount" class="form-label">Montant ($)</label>
                <input type="number" min="1" step="0.01" class="form-control" name="amount" id="amount" required>
            </div>

            <div class="mb-3">
                <label for="method" class="form-label">Méthode de paiement</label>
                <select name="method" id="method" class="form-select" required>
                    <option value="">-- Choisir une méthode --</option>
                    <option value="btc">Bitcoin (BTC)</option>
                    <option value="eth">Ethereum (ETH)</option>
                    <option value="usdt_trc20">USDT - TRC20</option>
                    <option value="usdt_bep20">USDT - BEP20</option>
                </select>
            </div>

            <div id="error-msg" class="text-danger fw-bold mb-3"></div>

            <button type="submit" class="btn btn-primary" id="next-btn" disabled>Suivant</button>
        </form> -->

@endsection

@section('script')
    <script>
        const amountInput = document.getElementById('amount');
        const methodSelect = document.getElementById('method');
        const errorMsg = document.getElementById('error-msg');
        const nextBtn = document.getElementById('next-btn');

        function validate() {
            const amount = parseFloat(amountInput.value);
            const method = methodSelect.value;

            errorMsg.innerText = "";
            nextBtn.disabled = true;

            if (!amount || !method) return;

            if ( method === 'btc'  && amount < 60) {
                errorMsg.innerText = "Minimum amount for BTC is 60$.";
            } else if ( method === 'eth' && amount < 60){
                errorMsg.innerText = "Minimum amount for ETH is 60$.";
            } else if ((method === 'usdt_trc20' || method === 'usdt_bep20') && amount < 10) {
                errorMsg.innerText = "Minimum amount for USDT is 10$.";
            } else {
                nextBtn.disabled = false;
            }
        }

        amountInput.addEventListener('input', validate);
        methodSelect.addEventListener('change', validate);
    </script>
@endsection

