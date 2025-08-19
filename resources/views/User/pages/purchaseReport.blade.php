@extends('layouts.users.app')

@section('title', 'Purchase Report')

@section('style')
    <style>
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
            background: var(--primary-gradient);
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
@endsection

@section('content')
    <div class="notification-wrapper">
            <div class="container-fluid">
               <!-- ========== title-wrapper start ========== -->
                <div class="title-wrapper pt-30">
                    <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                        <h2>Purchase Report</h2>
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
                                Purchase Report
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
                    
                        <!--<div class="tables-wrapper">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="">
                                    <h6 class="mb-4 mt-2">Purchase History</h6>
                                    
                                    <div class="table-wrapper tab table-responsive">

                                        <table class="table">
                                        <thead>
                                            <tr> 
                                                                                           
                                            <th class="lead-email">
                                                <h6>Date</h6>
                                            </th>
                                            <th class="lead-phone">
                                                <h6>Shares Purchased</h6>
                                            </th>
                                            <th class="lead-company">
                                                <h6>Paid by</h6>
                                            </th>
                                            <th class="lead-company">
                                                <h6>Status</h6>
                                            </th>
                                            </tr>
                                            
                                        </thead>
                                        <tbody>
                                            @if($investments->count() > 0)
                                                @foreach($investments as $investment)
                                                    <tr>                                           
                                                        <td class="min-width">
                                                            <p>{{ $investment->created_at->format('d/m/Y H:i') }}</p>
                                                        </td>
                                                        <td class="min-width">
                                                            <p>{{ number_format($investment->amount, 2) }} $</p>
                                                        </td>
                                                        <td class="min-width">
                                                            <p>{{ ucfirst($investment->source) }}</p>
                                                        </td>
                                                        <td class="min-width">
                                                            @if($investment->status === 'pending')
                                                                <span class="badge bg-warning text-dark">Pending</span>
                                                            @elseif($investment->status === 'active')
                                                                <span class="badge bg-success">Active</span>
                                                            @elseif($investment->status === 'closed')
                                                                <span class="badge bg-danger">Closed</span>
                                                            @else
                                                                <span class="badge bg-secondary">{{ ucfirst($investment->status) }}</span>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            @else
                                                <tr>
                                                    <td colspan="7" class="no-data">
                                                        <i class="fas fa-users-slash"></i>
                                                        <h3>No investment</h3>
                                                        <p>Start by investing</p>
                                                    </td>
                                                </tr>
                                            @endif

                                            
                                        </tbody>
                                        </table>
                                        
                                    </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                         end row -->    


                        <div class="table-wrapper tab table-responsive">
                            <div class="card-header d-flex justify-content-between align-items-center mb-4">
                                <h5><i class="fas fa-chart-line"></i> Investment Purchase Report</h5>
                                <div>
                                    <small class="text-muted">
                                        Showing {{ $investments->firstItem() }} to {{ $investments->lastItem() }} 
                                        of {{ $investments->total() }} investments
                                    </small>
                                </div>
                            </div>
                            
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Start date</th>
                                        <th>Shares Purchased</th>
                                        <th>Planned end date</th>
                                        <th>Remaining days</th>
                                        <th>Paid by</th>
                                        <th>Advancement</th>
                                        <th>Total Profit</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($investments->count() > 0)
                                        @foreach($investments as $index => $investment)
                                            @php
                                                $timeline = $investmentTimelines[$index] ?? null;
                                            @endphp
                                            <tr>
                                                <td>{{ $investment->id }}</td>
                                                <td>{{ $timeline ? $timeline['start_date'] : $investment->created_at->format('d/m/Y') }}</td>
                                                <td>${{ number_format($investment->amount, 2) }}</td>
                                                <td>{{ $timeline ? $timeline['end_date'] : $investment->created_at->addMonths(12)->format('d/m/Y') }}</td>
                                                <td>
                                                    @if($timeline && !$timeline['is_expired'])
                                                        <span class="badge badge-info bg-warning">{{ floor($timeline['days_remaining']) }} days</span>
                                                    @elseif($timeline && $timeline['is_expired'])
                                                        <span class="badge badge-danger">Expiré</span>
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="min-width">
                                                    <p>{{ ucfirst($investment->source) }}</p>
                                                </td>
                                                <td>
                                                    @if($timeline)
                                                        <small>{{ $timeline['progress_percentage'] }}%</small>
                                                    @endif
                                                </td>
                                                <td>${{ number_format($investment->total_profit ?? 0, 2) }}</td>
                                                <td>
                                                    @if($investment->status === 'pending')
                                                        <span class="badge bg-warning text-dark">Pending</span>
                                                    @elseif($investment->status === 'active')
                                                        <span class="badge bg-success">Active</span>
                                                    @elseif($investment->status === 'closed')
                                                        <span class="badge bg-danger">Closed</span>
                                                    @else
                                                        <span class="badge bg-secondary">{{ ucfirst($investment->status) }}</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="9" class="no-data">
                                                <i class="fa fa-pie-chart"></i>
                                                <h3>No data Available</h3>
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>

                            {{-- Pagination du bas --}}
                            @if($investments->hasPages())
                                <div class="d-flex justify-content-end mt-3">
                                    {{ $investments->appends(request()->query())->links('pagination::bootstrap-4') }}
                                </div>
                            @endif

                            
                        </div>
                                            
                </div>
            </div>
            <!-- end container -->
    </div>
@endsection

@section('script')
    
@endsection

