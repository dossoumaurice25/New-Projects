@extends('layouts.users.app')

@section('title', 'Direct Referral')

@section('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        
        
        .welcome-h {
            background: linear-gradient(135deg, #000000 0%, #650968 100%);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.227);
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            animation: slideInFromTop 0.8s ease-out;
        }

        .welcome-t {
            font-size: 2.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, #9f23c2 0%, #dd98f0 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .welcome-subtitle {
            color: #ffffff;
            font-size: 1.1rem;
            font-weight: 600;
        }

        .main-card {
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 24px;
            padding: 2.5rem;
            box-shadow: 0 25px 80px rgba(0, 0, 0, 0.15);
            animation: slideInFromBottom 0.8s ease-out 0.2s both;
        }

        .section-title {
            font-size: 1.75rem;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .section-title i {
            color: #9f23c2;
            font-size: 1.5rem;
        }

        .stats-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: linear-gradient(135deg, #a023c270 0%, #e2e8f0 100%);
            border: 1px solid rgba(148, 163, 184, 0.2);
            border-radius: 16px;
            padding: 1.5rem;
            text-align: center;
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .stat-value {
            font-size: 2rem;
            font-weight: 700;
            color: #9f23c2;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: #64748b;
            font-weight: 500;
            font-size: 0.9rem;
        }

        .table-container {
            background: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(226, 232, 240, 0.8);
        }

        .custom-table {
            width: 100%;
            border-collapse: collapse;
        }

        .custom-table thead {
            background: linear-gradient(135deg, #8707ab 0%, #bb65d2 100%);
        }

        .custom-table thead th {
            color: #ffffff;
            font-weight: 600;
            padding: 1.25rem 1rem;
            text-align: left;
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            position: relative;
        }

        .custom-table thead th::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: rgba(255, 255, 255, 0.2);
        }

        .custom-table tbody tr {
            transition: all 0.3s ease;
            border-bottom: 1px solid #f1f5f9;
        }

        .custom-table tbody tr:hover {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 50%, #f8fafc 100%);
            transform: scale(1.01);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        }

        .custom-table tbody td {
            padding: 1.25rem 1rem;
            color: #374151;
            font-weight: 500;
            vertical-align: middle;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, #9f23c2 0%, #dd98f0 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .user-details h4 {
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 0.25rem;
        }

        .user-details p {
            color: #6b7280;
            font-size: 0.875rem;
        }

        .status-badge {
            padding: 0.375rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .status-active {
            background: #dcfce7;
            color: #166534;
            border: 1px solid #bbf7d0;
        }

        .status-pending {
            background: #fef3c7;
            color: #92400e;
            border: 1px solid #fde68a;
        }

        .actions-badge {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            font-weight: 600;
            font-size: 0.875rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.3);
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

        .floating-action {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background: linear-gradient(135deg, #9f23c2 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .floating-action:hover {
            transform: translateY(-3px) scale(1.1);
            box-shadow: 0 15px 40px rgba(102, 126, 234, 0.5);
        }

        /* Animations */
        @keyframes slideInFromTop {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInFromBottom {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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

        .table-row {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 1.5rem 1rem;
            }

            .welcome-t {
                font-size: 2rem;
                flex-direction: column;
                text-align: center;
                gap: 0.5rem;
            }

            .main-card {
                padding: 1.5rem;
                border-radius: 16px;
            }

            .stats-row {
                grid-template-columns: 1fr 1fr;
                gap: 1rem;
            }

            .stat-card {
                padding: 1rem;
            }

            .stat-value {
                font-size: 1.5rem;
            }

            .table-container {
                overflow-x: auto;
            }

            .custom-table {
                min-width: 800px;
            }

            .custom-table thead th,
            .custom-table tbody td {
                padding: 1rem 0.75rem;
                font-size: 0.875rem;
            }

            .floating-action {
                bottom: 1rem;
                right: 1rem;
                width: 50px;
                height: 50px;
                font-size: 1.25rem;
            }
        }

        @media (max-width: 480px) {
            .stats-row {
                grid-template-columns: 1fr;
            }

            .welcome-t {
                font-size: 1.75rem;
            }

            .section-title {
                font-size: 1.5rem;
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
                        <h2>Direct Referral Report</h2>
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
                                Direct Referral Report
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
                    <!-- Welcome Header -->
                    <div class="welcome-h">
                        <h1 class="welcome-t">
                            <i class="fas fa-crown"></i>
                            {{ auth()->user()->username }}
                        </h1>
                        <p class="welcome-subtitle">Manage and track your direct referrals in real time</p>
                    </div>

                    <!-- Main Card -->
                    <div class="">
                        <h2 class="section-title">
                            <i class="fas fa-users"></i>
                            Direct Referral Report
                        </h2>

                        <!-- Stats Row -->
                        <div class="stats-row">
                            <div class="stat-card">
                                <div class="stat-value">{{ $nombreFilleuls }}</div>
                                <div class="stat-label">Total Referrals</div>
                            </div>
                             <!--<div class="stat-card">
                                <div class="stat-value">3</div>
                                <div class="stat-label">Assets</div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-value">350</div>
                                <div class="stat-label">Total Actions</div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-value">$2</div>
                                <div class="stat-label">Revenue Generated</div>
                            </div> -->
                        </div>

                        <!-- Table -->
                        <div class="table-container">
                        
                            <table class="custom-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>User</th>
                                        <th>Date of registration</th>
                                        <th>Activation date</th>
                                        <th>Shares purchased</th>
                                        <th>Date of purchase</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    @if($filleuls->count() > 0)
                                        @foreach($filleuls as $index => $filleul)
                                            <tr class="table-row" style="animation-delay: ${index * 0.1}s">
                                                <td><strong>{{ $index + 1 }}</strong></td>
                                                <td>
                                                    <div class="user-info">
                                                        <div class="user-avatar">
                                                            {{ strtoupper(implode('', array_map(fn($n) => $n[0], explode('.', $filleul->username)))) }}
                                                        </div>
                                                        <div class="user-details">
                                                            <h4>{{ $filleul->username }}</h4>
                                                            <p>{{ $filleul->email }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $filleul->created_at->format('d/m/Y') }}</td>
                                                <td>Date d'activation</td>
                                                <td>
                                                    Action achété
                                                    <!--${filleul.purchasedActions > 0 ? 
                                                        `<span class="actions-badge">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            ${filleul.purchasedActions}
                                                        </span>` : 
                                                        '<span style="color: #9ca3af;">Aucune</span>'
                                                    } -->
                                                </td>
                                                <td>Date d'achat</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="7" class="no-data">
                                                <i class="fas fa-users-slash"></i>
                                                <h3>No referrals yet</h3>
                                                <p>Start inviting people to see your referrals appear here.</p>
                                            </td>
                                        </tr>
                                    @endif   
                                </tbody>
                            </table>
                        </div>
                    </div>
        
                </div>
            </div>
            <!-- end container -->
    </div>




    
@endsection

@section('script')
    <script>
        

        function getInitials(username) {
            return username.split('.').map(name => name.charAt(0).toUpperCase()).join('');
        }

        function formatDate(dateString) {
            return dateString || '<span style="color: #9ca3af;">En attente</span>';
        }

       
    </script>
@endsection

