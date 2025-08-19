@extends('layouts.users.app')

@section('title', 'Profile')

@section('style')
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #9f23c2 0%, #2f1945 100%);
            --primary-color: #9f23c2;
            --secondary-color: #764ba2;
            --glass-bg: rgba(255, 255, 255, 0.1);
            --glass-border: rgba(255, 255, 255, 0.2);
            --dark-text: #2d3748;
            --light-text: #718096;
            --success-color: #48bb78;
            --warning-color: #ed8936;
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --shadow-xl: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        

        .profile-container {
            min-height: 100vh;
            background: transparent;
        }

        /* Header avec gradient */
        .profile-header {
            background: var(--primary-gradient);
            padding: 2rem 0;
            position: relative;
            overflow: hidden;
        }

        .profile-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='4'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
        }

        .profile-avatar {
            position: relative;
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.2);
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(10px);
            box-shadow: var(--shadow-lg);
        }

        .avatar-text {
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
        }

        .avatar-status {
            position: absolute;
            bottom: -2px;
            right: -2px;
            width: 20px;
            height: 20px;
            background: var(--success-color);
            border: 3px solid white;
            border-radius: 50%;
        }

        .profile-name {
            color: white;
            font-size: 2rem;
            font-weight: 700;
            margin: 0;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .profile-subtitle {
            color: rgba(255, 255, 255, 0.8);
            margin: 0.5rem 0 0 0;
            font-size: 1.1rem;
        }

        .btn-premium {
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 12px;
            font-weight: 600;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .btn-premium:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
            color: white;
        }

        /* Navigation */
        .profile-nav {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            top: 0;
            z-index: 1000;
        }

        .profile-tabs {
            border: none;
        }

        .profile-tabs .nav-link {
            border: none;
            padding: 1rem 1.5rem;
            color: var(--light-text);
            font-weight: 600;
            background: transparent;
            transition: all 0.3s ease;
            position: relative;
        }

        .profile-tabs .nav-link:hover,
        .profile-tabs .nav-link.active {
            color: var(--primary-color);
            background: transparent;
        }

        .profile-tabs .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60%;
            height: 3px;
            background: var(--primary-gradient);
            border-radius: 3px;
        }

        /* Contenu */
        .profile-content {
            padding: 2rem 0;
            background: transparent;
        }

        .info-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: var(--shadow-lg);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
        }

        .card-header-custom {
            padding: 1.5rem;
            background: var(--primary-gradient);
            color: white;
            border: none;
        }

        .card-header-custom h5 {
            margin: 0;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .card-body-custom {
            padding: 2rem;
        }

        /* Grille d'informations */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .info-item.full-width {
            grid-column: 1 / -1;
        }

        .info-item label {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--light-text);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 0.5rem;
            display: block;
        }

        .info-value {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem;
            background: rgba(159, 35, 194, 0.05);
            border-radius: 12px;
            border: 1px solid rgba(159, 35, 194, 0.1);
            transition: all 0.3s ease;
        }

        .info-value:hover {
            background: rgba(159, 35, 194, 0.1);
            transform: translateX(5px);
        }

        .value-text {
            font-weight: 600;
            color: var(--dark-text);
            font-size: 1rem;
        }

        .info-icon {
            color: var(--primary-color);
            opacity: 0.6;
        }

        /* Badges de statut */
        .status-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        .status-badge.verified {
            background: rgba(72, 187, 120, 0.1);
            color: var(--success-color);
            border: 1px solid rgba(72, 187, 120, 0.2);
        }

        .status-badge.unverified {
            background: rgba(237, 137, 54, 0.1);
            color: var(--warning-color);
            border: 1px solid rgba(237, 137, 54, 0.2);
        }

        /* Cartes de statistiques */
        .stats-grid {
            display: grid;
            gap: 1rem;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            padding: 1.5rem;
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: var(--shadow-lg);
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-3px) scale(1.02);
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            background: var(--primary-gradient);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            color: white;
            font-size: 1.2rem;
        }

        .stat-content h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--dark-text);
            margin: 0;
        }

        .stat-content p {
            color: var(--light-text);
            margin: 0;
            font-size: 0.9rem;
            font-weight: 500;
        }

        /* Code de parrainage */
        .referral-code-display {
            text-align: center;
        }

        .code-container {
            position: relative;
            display: inline-block;
            margin-bottom: 1rem;
        }

        .referral-input {
            background: rgba(159, 35, 194, 0.1);
            border: 2px solid rgba(159, 35, 194, 0.2);
            border-radius: 12px;
            padding: 1rem 4rem 1rem 1.5rem;
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--primary-color);
            text-align: center;
            letter-spacing: 2px;
            width: 250px;
        }

        .copy-btn {
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
            background: var(--primary-gradient);
            border: none;
            color: white;
            width: 36px;
            height: 36px;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .copy-btn:hover {
            transform: translateY(-50%) scale(1.1);
            box-shadow: var(--shadow-lg);
        }

        .code-help {
            color: var(--light-text);
            font-size: 0.9rem;
            margin: 0;
        }

        /* Informations du parrain */
        .referrer-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .referrer-avatar {
            width: 60px;
            height: 60px;
            background: var(--primary-gradient);
            color: white;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.2rem;
        }

        .referrer-details h6 {
            margin: 0 0 0.25rem 0;
            color: var(--dark-text);
            font-weight: 600;
        }

        .referrer-details p {
            margin: 0 0 0.5rem 0;
            color: var(--light-text);
            font-size: 0.9rem;
        }

        .referrer-badge {
            background: rgba(159, 35, 194, 0.1);
            color: var(--primary-color);
            padding: 0.25rem 0.75rem;
            border-radius: 15px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        /* Statistiques de parrainage */
        .referral-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 2rem;
            text-align: center;
        }

        .stat-item {
            padding: 1rem;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: var(--light-text);
            font-size: 0.9rem;
            font-weight: 500;
        }

        /* Timeline d'activité */
        .activity-timeline {
            position: relative;
            padding-left: 2rem;
        }

        .activity-timeline::before {
            content: '';
            position: absolute;
            left: 15px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: rgba(159, 35, 194, 0.2);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 2rem;
            padding-left: 2rem;
        }

        .timeline-dot {
            position: absolute;
            left: -1.4rem;
            top: 0;
            width: 12px;
            height: 12px;
            background: var(--primary-color);
            border: 3px solid white;
            border-radius: 50%;
            box-shadow: 0 0 0 3px rgba(159, 35, 194, 0.2);
        }

        .timeline-dot.verified {
            background: var(--success-color);
            box-shadow: 0 0 0 3px rgba(72, 187, 120, 0.2);
        }

        .timeline-dot.recent {
            background: var(--warning-color);
            box-shadow: 0 0 0 3px rgba(237, 137, 54, 0.2);
        }

        .timeline-content h6 {
            color: var(--dark-text);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .timeline-content p {
            color: var(--light-text);
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        .timeline-content small {
            color: var(--light-text);
            font-size: 0.8rem;
            font-weight: 500;
        }

        /* États vides */
        .no-code, .no-referrer {
            text-align: center;
            color: var(--light-text);
            padding: 2rem 1rem;
        }

        .no-code i, .no-referrer i {
            font-size: 3rem;
            color: rgba(159, 35, 194, 0.3);
            margin-bottom: 1rem;
        }

        /* Toast personnalisé */
        .toast {
            background: var(--primary-gradient);
            color: white;
            border: none;
            border-radius: 12px;
            box-shadow: var(--shadow-lg);
        }

        /* Animations */
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

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }

        .tab-pane {
            animation: fadeInUp 0.5s ease-out;
        }

        .stat-card:hover .stat-icon {
            animation: pulse 1s infinite;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .profile-header {
                padding: 1.5rem 0;
            }
            
            .profile-name {
                font-size: 1.5rem;
            }
            
            .profile-avatar {
                width: 60px;
                height: 60px;
            }
            
            .avatar-text {
                font-size: 1.2rem;
            }
            
            .info-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
            
            .referral-stats {
                grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
                gap: 1rem;
            }
            
            .referral-input {
                width: 200px;
                font-size: 1rem;
            }
            
            .profile-tabs .nav-link {
                padding: 0.75rem 1rem;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 576px) {
            .profile-header .row {
                text-align: center;
                flex-direction: column;
                gap: 1rem;
            }
            
            .profile-header .col-auto,
            .profile-header .col {
                flex: none;
            }
            
            .referral-input {
                width: 100%;
                max-width: 280px;
            }
            
            .info-value {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.5rem;
            }
        }

        /* Effets de hover avancés */
        .info-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.6s;
        }

        .info-card:hover::before {
            left: 100%;
        }

        /* Glow effect pour les éléments actifs */
        .profile-tabs .nav-link.active {
            text-shadow: 0 0 10px rgba(159, 35, 194, 0.3);
        }

        .btn-premium:hover {
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.3), var(--shadow-lg);
        }

       
    </style>
@endsection

@section('content')
    <div class="profile-container">
        <!-- Header avec gradient -->
        <div class="profile-header">
            <div class="container-fluid px-4">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <div class="profile-avatar">
                            <span class="avatar-text">{{ strtoupper(substr($user->first_name, 0, 1)) }}{{ strtoupper(substr($user->last_name, 0, 1)) }}</span>
                            <div class="avatar-status"></div>
                        </div>
                    </div>
                    <div class="col">
                        <h1 class="profile-name">{{ $user->first_name }} {{ $user->last_name }}</h1>
                        <p class="profile-subtitle">{{ $user->username }} • Member since {{ $user->created_at->format('M Y') }}</p>
                    </div>
                    <div class="col-auto">
                        <div class="dropdown">
                            <button class="btn btn-premium dropdown-toggle" type="button" id="profileActionsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-cog me-2"></i>Actions
                            </button>
                            <ul class="dropdown-menu dropdown-menu-premium" aria-labelledby="profileActionsDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('User.profile.edit') }}">
                                        <i class="fas fa-edit me-2"></i>Edit profile
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#" onclick="openPasswordModal()">
                                        <i class="fas fa-lock me-2"></i>Changer le mot de passe
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation tabs -->
        <div class="profile-nav">
            <div class="container-fluid px-4">
                <ul class="nav nav-tabs profile-tabs" id="profileTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" type="button" role="tab">
                            <i class="fas fa-user me-2"></i>Informations
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="referral-tab" data-bs-toggle="tab" data-bs-target="#referral" type="button" role="tab">
                            <i class="fas fa-users me-2"></i>Sponsorship
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="activity-tab" data-bs-toggle="tab" data-bs-target="#activity" type="button" role="tab">
                            <i class="fas fa-chart-line me-2"></i>Activity
                        </button>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Contenu des tabs -->
        <div class="profile-content">
            <div class="container-fluid px-4">
                <div class="tab-content" id="profileTabsContent">
                    <!-- Tab Informations -->
                    <div class="tab-pane fade show active" id="info" role="tabpanel">
                        <div class="row g-4">
                            <!-- Informations personnelles -->
                            <div class="col-lg-8">
                                <div class="info-card">
                                    <div class="card-header-custom">
                                        <h5 class="text-white"><i class="fas fa-id-card me-2"></i>Personal information</h5>
                                    </div>
                                    <div class="card-body-custom">
                                        <div class="info-grid">
                                            <div class="info-item">
                                                <label>User name</label>
                                                <div class="info-value">
                                                    <span class="value-text">{{ $user->username }}</span>
                                                    <i class="fas fa-user info-icon"></i>
                                                </div>
                                            </div>

                                            <div class="info-item">
                                                <label>Email</label>
                                                <div class="info-value">
                                                    <span class="value-text">{{ $user->email }}</span>
                                                    @if($user->email_verified_at)
                                                        <span class="status-badge verified">
                                                            <i class="fas fa-shield-check me-1"></i>Verified
                                                        </span>
                                                    @else
                                                        <span class="status-badge unverified">
                                                            <i class="fas fa-exclamation-triangle me-1"></i>Unverified
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="info-item">
                                                <label>First name</label>
                                                <div class="info-value">
                                                    <span class="value-text">{{ $user->first_name }}</span>
                                                    <i class="fas fa-signature info-icon"></i>
                                                </div>
                                            </div>

                                            <div class="info-item">
                                                <label>Last Name</label>
                                                <div class="info-value">
                                                    <span class="value-text">{{ $user->last_name }}</span>
                                                    <i class="fas fa-signature info-icon"></i>
                                                </div>
                                            </div>

                                            <div class="info-item full-width">
                                                <label>Address</label>
                                                <div class="info-value">
                                                    <span class="value-text">{{ $user->address }}</span>
                                                    <i class="fas fa-map-marker-alt info-icon"></i>
                                                </div>
                                            </div>

                                            <div class="info-item">
                                                <label>City</label>
                                                <div class="info-value">
                                                    <span class="value-text">{{ $user->city }}</span>
                                                    <i class="fas fa-city info-icon"></i>
                                                </div>
                                            </div>

                                            <div class="info-item">
                                                <label>Country</label>
                                                <div class="info-value">
                                                    <span class="value-text">{{ $user->country }}</span>
                                                    <i class="fas fa-globe info-icon"></i>
                                                </div>
                                            </div>

                                            <div class="info-item">
                                                <label>Phone number</label>
                                                <div class="info-value">
                                                    <span class="value-text">{{ $user->phone_number }}</span>
                                                    <i class="fas fa-phone info-icon"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Stats rapides -->
                            <div class="col-lg-4">
                                <div class="stats-grid">
                                    <div class="stat-card">
                                        <div class="stat-icon">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                        <div class="stat-content">
                                            <h3>{{ $user->created_at}}</h3>
                                            <p>Days of seniority</p>
                                        </div>
                                    </div>

                                    <div class="stat-card">
                                        <div class="stat-icon">
                                            <i class="fas fa-users"></i>
                                        </div>
                                        <div class="stat-content">
                                            <h3>{{ $referralsCount }}</h3>
                                            <p>Sponsorships</p>
                                        </div>
                                    </div>

                                    <div class="stat-card">
                                        <div class="stat-icon">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                        <div class="stat-content">
                                            <h3>{{ $user->email_verified_at ? '100%' : '80%' }}</h3>
                                            <p>Completed profile</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab Parrainage -->
                    <div class="tab-pane fade" id="referral" role="tabpanel">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="info-card">
                                    <div class="card-header-custom">
                                        <h5 class="text-white"><i class="fas fa-qrcode me-2"></i>My Referral Code</h5>
                                    </div>
                                    <div class="card-body-custom">
                                        @if($user->referral_code)
                                            <div class="referral-code-display">
                                                <div class="code-container">
                                                    <input type="text" class="referral-input"  readonly value="{{ url('/register?ref=' . auth()->user()->referral_code) }}" style="width: 100%" id="referralCodeInput">
                                                    <button class="copy-btn" onclick="copyReferralCode()">
                                                        <i class="fas fa-copy"></i>
                                                    </button>
                                                </div>
                                                <p class="code-help">Share this code to refer your friends</p>
                                            </div>
                                        @else
                                            <div class="no-code">
                                                <i class="fas fa-plus-circle"></i>
                                                <p>Generate your referral code</p>
                                                <button class="btn btn-premium btn-sm">Generate a code</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="info-card">
                                    <div class="card-header-custom">
                                        <h5 class="text-white" ><i class="fas fa-user-friends me-2"></i>My sponsor</h5>
                                    </div>
                                    <div class="card-body-custom">
                                        @if($referrer)
                                            <div class="referrer-info">
                                                <div class="referrer-avatar">
                                                    {{ strtoupper(substr($referrer->first_name, 0, 1)) }}{{ strtoupper(substr($referrer->last_name, 0, 1)) }}
                                                </div>
                                                <div class="referrer-details">
                                                    <h6>{{ $referrer->first_name }} {{ $referrer->last_name }}</h6>
                                                    <p>{{ $referrer->username }}</p>
                                                    <span class="referrer-badge">sponsor</span>
                                                </div>
                                            </div>
                                        @else
                                            <div class="no-referrer">
                                                <i class="fas fa-user-slash"></i>
                                                <p>No sponsor</p>
                                                <small>You registered directly</small>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="info-card">
                                    <div class="card-header-custom">
                                        <h5 class="text-white"><i class="fas fa-chart-network me-2"></i>My Referral Statistics</h5>
                                    </div>
                                    <div class="card-body-custom">
                                        <div class="referral-stats">
                                            <div class="stat-item">
                                                <div class="stat-number">{{ $referralsCount }}</div>
                                                <div class="stat-label">Sponsored persons</div>
                                            </div>
                                            <div class="stat-item">
                                                <div class="stat-number">0</div>
                                                <div class="stat-label">Commissions earned</div>
                                            </div>
                                            <div class="stat-item">
                                                <div class="stat-number">{{ $user->referral_code ? '1' : '0' }}</div>
                                                <div class="stat-label">Active code</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab Activité -->
                    <div class="tab-pane fade" id="activity" role="tabpanel">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="info-card">
                                    <div class="card-header-custom">
                                        <h5 class="text-white" ><i class="fas fa-history me-2"></i>Recent activity</h5>
                                    </div>
                                    <div class="card-body-custom">
                                        <div class="activity-timeline">
                                            <div class="timeline-item">
                                                <div class="timeline-dot"></div>
                                                <div class="timeline-content">
                                                    <h6>Registration on the platform</h6>
                                                    <p>Welcome to our website! Your account has been successfully created.</p>
                                                    <small>{{ $user->created_at->format('d/m/Y à H:i') }}</small>
                                                </div>
                                            </div>
                                            @if($user->email_verified_at)
                                            <div class="timeline-item">
                                                <div class="timeline-dot verified"></div>
                                                <div class="timeline-content">
                                                    <h6>Verified email</h6>
                                                    <p>Your email address has been confirmed.</p>
                                                    <small>{{ $user->email_verified_at->format('d/m/Y à H:i') }}</small>
                                                </div>
                                            </div>
                                            @endif
                                            <div class="timeline-item">
                                                <div class="timeline-dot recent"></div>
                                                <div class="timeline-content">
                                                    <h6>Last update</h6>
                                                    <p>Profile viewed or modified.</p>
                                                    <small>{{ $user->updated_at->format('d/m/Y à H:i') }}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast pour les notifications -->
    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="copyToast" class="toast" role="alert">
            <div class="toast-body">
                <i class="fas fa-check-circle text-success me-2"></i>
                Code copied to clipboard!
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // Fonction pour copier le code de parrainage
        function copyReferralCode() {
            const input = document.getElementById('referralCodeInput');
            input.select();
            input.setSelectionRange(0, 99999); // Pour mobile
            
            try {
                document.execCommand('copy');
                
                // Animation du bouton
                const btn = event.target.closest('button');
                const originalHtml = btn.innerHTML;
                btn.innerHTML = '<i class="fas fa-check"></i>';
                btn.style.background = 'linear-gradient(135deg, #48bb78 0%, #38a169 100%)';
                
                // Afficher le toast
                showToast();
                
                // Remettre le bouton normal après 2 secondes
                setTimeout(() => {
                    btn.innerHTML = originalHtml;
                    btn.style.background = '';
                }, 2000);
                
            } catch (err) {
                console.error('Erreur lors de la copie:', err);
            }
        }

        // Fonction pour afficher le toast
        function showToast() {
            const toast = new bootstrap.Toast(document.getElementById('copyToast'));
            toast.show();
        }

        // Animation des cartes au scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observer toutes les cartes
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.info-card, .stat-card');
            cards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                card.style.transition = 'all 0.6s ease-out';
                observer.observe(card);
            });
            
            // Effet de typing pour le nom
            const nameElement = document.querySelector('.profile-name');
            if (nameElement) {
                const originalText = nameElement.textContent;
                nameElement.textContent = '';
                let i = 0;
                
                const typingEffect = setInterval(() => {
                    nameElement.textContent += originalText[i];
                    i++;
                    if (i >= originalText.length) {
                        clearInterval(typingEffect);
                    }
                }, 100);
            }
            
            // Effet de compteur pour les statistiques
            const statNumbers = document.querySelectorAll('.stat-number');
            statNumbers.forEach(stat => {
                const finalValue = parseInt(stat.textContent);
                let currentValue = 0;
                const increment = Math.ceil(finalValue / 20);
                
                const counter = setInterval(() => {
                    currentValue += increment;
                    if (currentValue >= finalValue) {
                        stat.textContent = finalValue;
                        clearInterval(counter);
                    } else {
                        stat.textContent = currentValue;
                    }
                }, 50);
            });
            
            // Smooth scroll pour les tabs
            const tabButtons = document.querySelectorAll('.profile-tabs .nav-link');
            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    setTimeout(() => {
                        document.querySelector('.profile-content').scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }, 100);
                });
            });
        });

        // Bouton d'édition du profil
        document.getElementById('editProfileBtn').addEventListener('click', function() {
            // Animation du bouton
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = '';
            }, 150);
            
            // Vous pouvez implémenter la logique d'édition ici
            // Par exemple, rediriger vers une page d'édition ou ouvrir un modal
            alert('Fonctionnalité de modification à implémenter\n\nVous pouvez :\n- Créer une route vers une page d\'édition\n- Ouvrir un modal avec un formulaire\n- Activer l\'édition inline');
        });

        // Effet parallax léger sur le header
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const header = document.querySelector('.profile-header');
            if (header) {
                header.style.transform = `translateY(${scrolled * 0.2}px)`;
            }
        });

        
        
    </script>
@endsection

