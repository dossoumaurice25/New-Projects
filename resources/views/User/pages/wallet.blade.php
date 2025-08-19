@extends('layouts.users.app')

@section('title', 'Wallet')
    
@section('style')
    <style>
      

        .value-card {
            background: linear-gradient(135deg, #522f5c 0%, #b97acb 100%);
            border-radius: 20px;
            padding: 25px;
            margin-bottom: 40px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
        }

        .value-card::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100px;
            height: 100px;
            background: linear-gradient(45deg, #9f23c2, #c602fd);
            border-radius: 50%;
            transform: translate(30px, -30px);
            opacity: 0.1;
        }

        .value-label {
            font-size: 16px;
            color: #9ca3af;
            margin-bottom: 10px;
            font-weight: 500;
        }

        .value-amount {
            font-size: 48px;
            font-weight: 700;
            color: white;
            margin: 0;
            line-height: 1;
        }
        .exchange-arrows {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
            position: relative;
        }

        .arrow-container {
            background: linear-gradient(135deg, #9f23c2, #c602fd);
            border-radius: 12px;
            padding: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 16px rgba(74, 222, 128, 0.3);
        }

        .arrow-container:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 24px rgba(74, 222, 128, 0.5);
        }

        .arrow-container i {
            font-size: 20px;
            color: white;
            display: block;
        }

         :root {
            --primary-gradient: linear-gradient(135deg, #9f23c2 0%, #640c7c 100%);
            --success-gradient: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            --card-shadow: 0 10px 30px rgba(0,0,0,0.1);
            --border-radius: 15px;
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
                        <h2>B-NOVA Wallet</h2>
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
                                B-NOVA Wallet 
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
                      
                  <div class="row g-4 mb-1">

                   <!-- <div class="col-12 col-md-6 col-xl-6">
                      <div class="value-card">
                          <div class="value-label">Total Value</div>
                          <div class="value-amount" >0$</div>
                      </div> 
                    </div>  -->
                    
                    <div class="col-12 col-md-6 col-xl-6">
                      <!-- Valeur totale -->
                      <div class="value-card">
                          <div class="value-label">Wallet</div>
                          <div class="value-amount" >${{ number_format(optional($wallet)->balance ?? 0, 2) }}</div> 
                      </div> 
                    </div>
                  </div>

                  <!-- Flèches d'échange 
                  <div class="exchange-arrows">
                     <div class="arrow-container" id="exchangeArrows">
                          <i class="fas fa-exchange-alt"></i>
                      </div>
                  </div>-->

                  <h2>Wallet Statement</h2> 

                   <div class="tables-wrapper mt-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="">
                                    
                                    <div class="table-wrapper tab table-responsive">
                                        <table class="table">
                                        <thead>
                                            <tr>                                            
                                            <th style=" background: linear-gradient(135deg, #522f5c 0%, #b97acb 100%);" class="lead-email">
                                                <h6>Date</h6>
                                            </th>
                                            <th style=" background: linear-gradient(135deg, #b97acb 0%, #b97acb 100%);" class="lead-phone">
                                                <h6>Description</h6>
                                            </th>
                                            <th style=" background: linear-gradient(240deg, #522f5c 0%, #b97acb 100%);" class="lead-company">
                                                <h6>Amount</h6>
                                            </th>
                                            <th style=" background: linear-gradient(135deg, #522f5c 0%, #b97acb 100%);" class="lead-phone">
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
                                                        <p>Deposit</p>
                                                    </td>
                                                    <td class="min-width">
                                                        <p>${{ number_format($deposit->amount_usd, 2) }}</p>
                                                    </td>
                                                    <td class="min-width">
                                                        @if($deposit->status == 'pending')
                                                            <span class="badge bg-warning text-dark">Pending</span>
                                                        @else
                                                            <span class="badge bg-success">Approved</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else 
                                            <tr>
                                                <td  colspan="3" > <h3>No data Available</h3> </td>
                                            </tr>
                                        @endif                                                                                    
                                        </tbody>
                                        </table>
                                        <!-- end table -->
                                    </div>
                                    </div>
                                    <!-- end card -->
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                                            
                    
                </div>
            </div>
            <!-- end container -->
    </div>
@endsection

@section('script')
     <script>
        const exchangeArrows = document.getElementById('exchangeArrows');
       // Fonction pour animer les flèches d'échange
        function animateExchangeArrows() {
            exchangeArrows.style.transform = 'rotate(180deg) scale(1.2)';
            setTimeout(() => {
                exchangeArrows.style.transform = 'rotate(0deg) scale(1)';
            }, 300);
        }
       exchangeArrows.addEventListener('click', () => {
            animateExchangeArrows();
        });
    </script>
@endsection

