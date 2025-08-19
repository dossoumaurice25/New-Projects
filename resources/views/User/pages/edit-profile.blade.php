@extends('layouts.users.app')

@section('title', 'Edit profile')

@section('style') 
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #9f23c2 0%, #764ba2 100%);
            --primary-color: #9f23c2;
            --secondary-color: #764ba2;
            --glass-bg: rgba(255, 255, 255, 0.1);
            --glass-border: rgba(255, 255, 255, 0.2);
            --dark-text: #2d3748;
            --light-text: #718096;
            --success-color: #48bb78;
            --warning-color: #ed8936;
            --danger-color: #f56565;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            --shadow-xl: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            --border-radius: 12px;
            --border-radius-lg: 20px;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            box-sizing: border-box;
        }

        

        .edit-profile-container {
            min-height: 100vh;
            background: transparent;
        }

        /* Header Styles */
        .edit-header {
            
            padding: 1rem 0 2rem 0;
            position: relative;
            overflow: hidden;
        }

        .edit-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='4'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
            z-index: 1;
        }

        .edit-header .container-fluid {
            position: relative;
            z-index: 2;
        }

        .breadcrumb-premium {
            background: transparent;
            margin: 0;
            padding: 0;
            font-size: 0.9rem;
        }

        .breadcrumb-premium .breadcrumb-item {
            color: rgba(255, 255, 255, 0.8);
        }

        .breadcrumb-premium .breadcrumb-item a {
            color: white;
            text-decoration: none;
            transition: var(--transition);
            padding: 0.25rem 0.5rem;
            border-radius: 6px;
        }

        .breadcrumb-premium .breadcrumb-item a:hover {
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .breadcrumb-premium .breadcrumb-item.active {
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
        }

        .edit-title {
            color: rgb(0, 0, 0);
            font-size: clamp(2rem, 5vw, 2.5rem);
            font-weight: 700;
            margin: 0.5rem 0 0 0;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            letter-spacing: -0.02em;
        }

        .edit-subtitle {
            color: rgba(0, 0, 0, 0.85);
            margin: 0.5rem 0 0 0;
            font-size: 1.1rem;
            font-weight: 300;
        }

        /* Content Area */
        .edit-content {
            padding: 2rem 0;
            background: transparent;
            margin-top: -2rem;
            position: relative;
            z-index: 3;
        }

        .edit-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: var(--border-radius-lg);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: var(--shadow-lg);
            overflow: hidden;
            transition: var(--transition);
            margin-bottom: 2rem;
        }

        .edit-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
        }

        .card-header-edit {
            padding: 2rem 2rem 1rem 2rem;
            background: var(--primary-gradient);
            color: white;
            border-bottom: none;
        }

        .card-header-edit h5 {
            margin: 0;
            font-weight: 600;
            font-size: 1.25rem;
            display: flex;
            align-items: center;
        }

        .card-header-edit small {
            opacity: 0.8;
            font-size: 0.9rem;
            margin-top: 0.5rem;
            display: block;
        }

        .card-body-edit {
            padding: 2rem;
        }

        /* Form Styles */
        .form-label-premium {
            font-weight: 600;
            color: var(--dark-text);
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            font-size: 0.95rem;
        }

        .form-label-premium i {
            color: var(--primary-color);
            width: 16px;
            text-align: center;
        }

        .form-control-premium {
            background: rgba(255, 255, 255, 0.9);
            border: 2px solid rgba(159, 35, 194, 0.1);
            border-radius: var(--border-radius);
            padding: 0.75rem 1rem;
            font-size: 1rem;
            transition: var(--transition);
            width: 100%;
            backdrop-filter: blur(10px);
        }

        .form-control-premium:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(159, 35, 194, 0.1);
            background: white;
            transform: translateY(-1px);
        }

        .form-control-premium:hover {
            border-color: rgba(159, 35, 194, 0.2);
        }

        .form-control-premium.is-invalid {
            border-color: var(--danger-color);
        }

        .form-text-premium {
            font-size: 0.875rem;
            color: var(--light-text);
            margin-top: 0.25rem;
        }

        .form-text-premium.text-success {
            color: var(--success-color) !important;
        }

        .form-text-premium.text-warning {
            color: var(--warning-color) !important;
        }

        .invalid-feedback {
            color: var(--danger-color);
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        /* Form Actions */
        .form-actions {
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(159, 35, 194, 0.1);
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .btn-premium-save {
            background: var(--primary-gradient);
            color: white;
            border: none;
            padding: 0.75rem 2rem;
            border-radius: var(--border-radius);
            font-weight: 600;
            transition: var(--transition);
            display: flex;
            align-items: center;
            text-decoration: none;
            cursor: pointer;
        }

        .btn-premium-save:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
            color: white;
        }

        .btn-premium-cancel {
            background: rgba(108, 117, 125, 0.1);
            color: var(--light-text);
            border: 2px solid rgba(108, 117, 125, 0.2);
            padding: 0.75rem 2rem;
            border-radius: var(--border-radius);
            font-weight: 500;
            transition: var(--transition);
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .btn-premium-cancel:hover {
            background: rgba(108, 117, 125, 0.15);
            border-color: rgba(108, 117, 125, 0.3);
            color: var(--dark-text);
            transform: translateY(-1px);
        }

        /* Profile Preview */
        .profile-preview {
            text-align: center;
            padding: 1rem 0;
        }

        .preview-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: var(--primary-gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem auto;
            box-shadow: var(--shadow-md);
            border: 4px solid white;
        }

        .avatar-text {
            font-size: 1.75rem;
            font-weight: 700;
            color: white;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .preview-name {
            margin: 0.5rem 0 0.25rem 0;
            color: var(--dark-text);
            font-weight: 600;
            font-size: 1.1rem;
        }

        .preview-username {
            color: var(--primary-color);
            margin: 0.25rem 0;
            font-weight: 500;
        }

        .preview-email {
            color: var(--light-text);
            font-size: 0.9rem;
        }

        /* Button Styles */
        .btn-outline-premium {
            background: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
            padding: 0.5rem 1.5rem;
            border-radius: var(--border-radius);
            font-weight: 500;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            text-decoration: none;
        }

        .btn-outline-premium:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-1px);
            box-shadow: var(--shadow-md);
        }

        .btn-outline-light {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.3);
            padding: 0.5rem 1.5rem;
            border-radius: var(--border-radius);
            font-weight: 500;
            transition: var(--transition);
            backdrop-filter: blur(10px);
        }

        .btn-outline-light:hover {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-1px);
        }

        /* Referral Code Styles */
        .referral-display .form-label-premium {
            margin-bottom: 0.75rem;
        }

        .code-container-small {
            position: relative;
        }

        .code-container-small input {
            font-family: 'JetBrains Mono', 'Fira Code', monospace;
            font-size: 0.85rem;
            background: var(--primary-gradient);
            color: white;
            border: none;
            text-align: center;
        }

        .code-container-small input:focus {
            background: var(--primary-gradient);
            color: white;
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.3);
        }

        /* Alert Styles */
        .alert-success-premium {
            background: linear-gradient(135deg, rgba(72, 187, 120, 0.1) 0%, rgba(72, 187, 120, 0.05) 100%);
            border: 1px solid rgba(72, 187, 120, 0.2);
            border-radius: var(--border-radius);
            color: var(--success-color);
            padding: 1rem 1.5rem;
            margin-bottom: 1.5rem;
        }

        .alert-danger-premium {
            background: linear-gradient(135deg, rgba(245, 101, 101, 0.1) 0%, rgba(245, 101, 101, 0.05) 100%);
            border: 1px solid rgba(245, 101, 101, 0.2);
            border-radius: var(--border-radius);
            color: var(--danger-color);
            padding: 1rem 1.5rem;
            margin-bottom: 1.5rem;
        }

        /* Modal Styles */
        .premium-modal {
            border-radius: var(--border-radius-lg);
            border: none;
            overflow: hidden;
            box-shadow: var(--shadow-xl);
            backdrop-filter: blur(20px);
        }

        .premium-modal-header {
            background: var(--primary-gradient);
            color: white;
            border-bottom: none;
            padding: 1.5rem 2rem;
        }

        .premium-modal-header .modal-title {
            font-weight: 600;
            display: flex;
            align-items: center;
        }

        .premium-modal-body {
            padding: 2rem;
            background: rgba(255, 255, 255, 0.95);
        }

        .premium-modal-footer {
            background: rgba(255, 255, 255, 0.95);
            border-top: 1px solid rgba(159, 35, 194, 0.1);
            padding: 1.5rem 2rem;
        }

        .btn-premium {
            background: var(--primary-gradient);
            color: white;
            border: none;
            padding: 0.5rem 1.5rem;
            border-radius: var(--border-radius);
            font-weight: 500;
            transition: var(--transition);
        }

        .btn-premium:hover {
            transform: translateY(-1px);
            box-shadow: var(--shadow-md);
            color: white;
        }

        .btn-secondary-premium {
            background: rgba(108, 117, 125, 0.1);
            color: var(--light-text);
            border: 2px solid rgba(108, 117, 125, 0.2);
            padding: 0.5rem 1.5rem;
            border-radius: var(--border-radius);
            font-weight: 500;
            transition: var(--transition);
        }

        .btn-secondary-premium:hover {
            background: rgba(108, 117, 125, 0.15);
            color: var(--dark-text);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .edit-header {
                padding: 2rem 0 3rem 0;
            }

            .edit-title {
                font-size: 2rem;
            }

            .edit-content {
                padding: 1rem 0;
                margin-top: -1rem;
            }

            .card-header-edit,
            .card-body-edit {
                padding: 1.5rem 1rem;
            }

            .premium-modal-body,
            .premium-modal-header,
            .premium-modal-footer {
                padding: 1.5rem 1rem;
            }

            .form-actions {
                flex-direction: column;
            }

            .btn-premium-save,
            .btn-premium-cancel {
                justify-content: center;
                width: 100%;
            }
        }

        @media (max-width: 576px) {
            .container-fluid {
                padding-left: 1rem;
                padding-right: 1rem;
            }

            .edit-title {
                font-size: 1.75rem;
            }

            .card-header-edit,
            .card-body-edit {
                padding: 1rem;
            }
        }

        /* Loading Animation */
        .btn-premium-save:disabled,
        .btn-premium:disabled {
            opacity: 0.7;
            cursor: not-allowed;
            position: relative;
        }

        .btn-premium-save:disabled::after,
        .btn-premium:disabled::after {
            content: '';
            position: absolute;
            width: 16px;
            height: 16px;
            margin: auto;
            border: 2px solid transparent;
            border-top-color: #ffffff;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Focus States for Accessibility */
        .btn-premium-save:focus,
        .btn-premium:focus,
        .btn-outline-premium:focus,
        .btn-outline-light:focus {
            outline: 2px solid rgba(159, 35, 194, 0.5);
            outline-offset: 2px;
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-gradient);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--secondary-color);
        }
    </style>
@endsection

@section('content')
    <div class="edit-profile-container">
        <!-- Header avec breadcrumb -->
        <div class="edit-header">
            <div class="container-fluid px-4">
                <div class="row align-items-center">
                    <div class="col">
                        <h1 class="edit-title">
                            <i class="fas fa-user-edit me-2"></i>Edit Profile
                        </h1>
                    </div>
                    <div class="col-auto">
                        <a href="{{ route('User.profile') }}" class="btn btn-outline-dark">
                            <i class="fas fa-arrow-left me-2"></i>Back to profile
                        </a>
                    </div>
                </div>
                <p class="edit-subtitle">Update your personal information</p>
            </div>
        </div>

        <!-- Contenu principal -->
        <div class="edit-content">
            <div class="container-fluid px-4">
                <!-- Messages de succès/erreur -->
                @if(session('success'))
                    <div class="alert alert-success-premium alert-dismissible fade show" role="alert">
                        <i class="fas fa-check-circle me-2"></i>
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger-premium alert-dismissible fade show" role="alert">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <div class="row g-4">
                    <!-- Formulaire principal -->
                    <div class="col-lg-8">
                        <div class="edit-card">
                            <div class="card-header-edit">
                                <h5><i class="fas fa-id-card me-2"></i>Personal Information</h5>
                                <small class="text-muted">Modify your basic information</small>
                            </div>
                            <div class="card-body-edit">
                                <form action="{{ route('User.profile.update') }}" method="POST" id="profileUpdateForm">
                                    @csrf
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <label for="first_name" class="form-label-premium">
                                                <i class="fas fa-user me-2"></i>First name
                                            </label>
                                            <input type="text" 
                                                class="form-control-premium @error('first_name') is-invalid @enderror" 
                                                id="first_name" 
                                                name="first_name" 
                                                value="{{ old('first_name', $user->first_name) }}" 
                                                required>
                                            @error('first_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="last_name" class="form-label-premium">
                                                <i class="fas fa-user me-2"></i>Last name
                                            </label>
                                            <input type="text" 
                                                class="form-control-premium @error('last_name') is-invalid @enderror" 
                                                id="last_name" 
                                                name="last_name" 
                                                value="{{ old('last_name', $user->last_name) }}" 
                                                required>
                                            @error('last_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="username" class="form-label-premium">
                                                <i class="fas fa-at me-2"></i>User name
                                            </label>
                                            <input type="text" 
                                                class="form-control-premium @error('username') is-invalid @enderror" 
                                                id="username" 
                                                name="username" 
                                                value="{{ old('username', $user->username) }}" 
                                                required>
                                            @error('username')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <small class="form-text-premium">Used to identify you on the platform</small>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="email" class="form-label-premium">
                                                <i class="fas fa-envelope me-2"></i>Email Address
                                            </label>
                                            <input type="email" 
                                                class="form-control-premium @error('email') is-invalid @enderror" 
                                                id="email" 
                                                name="email" 
                                                value="{{ old('email', $user->email) }}" 
                                                required>
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            @if($user->email_verified_at)
                                                <small class="form-text-premium text-success">
                                                    <i class="fas fa-check-circle me-1"></i>Verified email
                                                </small>
                                            @else
                                                <small class="form-text-premium text-warning">
                                                    <i class="fas fa-exclamation-triangle me-1"></i>Email not verified
                                                </small>
                                            @endif
                                        </div>

                                        <div class="col-12">
                                            <label for="address" class="form-label-premium">
                                                <i class="fas fa-map-marker-alt me-2"></i>Address
                                            </label>
                                            <input type="text" 
                                                class="form-control-premium @error('address') is-invalid @enderror" 
                                                id="address" 
                                                name="address" 
                                                value="{{ old('address', $user->address) }}" 
                                                required>
                                            @error('address')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="city" class="form-label-premium">
                                                <i class="fas fa-city me-2"></i>City
                                            </label>
                                            <input type="text" 
                                                class="form-control-premium @error('city') is-invalid @enderror" 
                                                id="city" 
                                                name="city" 
                                                value="{{ old('city', $user->city) }}" 
                                                required>
                                            @error('city')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="country" class="form-label-premium">
                                                <i class="fas fa-globe me-2"></i>Country
                                            </label>
                                            <input type="text" 
                                                class="form-control-premium @error('country') is-invalid @enderror" 
                                                id="country" 
                                                name="country" 
                                                value="{{ old('country', $user->country) }}" 
                                                required>
                                            @error('country')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <label for="phone_number" class="form-label-premium">
                                                <i class="fas fa-phone me-2"></i>Phone number
                                            </label>
                                            <input type="tel" 
                                                class="form-control-premium @error('phone_number') is-invalid @enderror" 
                                                id="phone_number" 
                                                name="phone_number" 
                                                value="{{ old('phone_number', $user->phone_number) }}" 
                                                required>
                                            @error('phone_number')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-premium-save">
                                            <i class="fas fa-save me-2"></i>Save changes
                                        </button>
                                        <a href="{{ route('User.profile') }}" class="btn btn-premium-cancel">
                                            <i class="fas fa-times me-2"></i>Cancel
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar avec actions rapides -->
                    <div class="col-lg-4">
                        <!-- Aperçu du profil -->
                        <div class="edit-card mb-4">
                            <div class="card-header-edit">
                                <h5><i class="fas fa-eye me-2"></i>Overview</h5>
                            </div>
                            <div class="card-body-edit text-center">
                                <div class="profile-preview">
                                    <div class="preview-avatar">
                                        <span class="avatar-text" id="previewAvatar">
                                            {{ strtoupper(substr($user->first_name, 0, 1)) }}{{ strtoupper(substr($user->last_name, 0, 1)) }}
                                        </span>
                                    </div>
                                    <h6 class="preview-name" id="previewName">{{ $user->first_name }} {{ $user->last_name }}</h6>
                                    <p class="preview-username" id="previewUsername">{{ $user->username }}</p>
                                    <small class="preview-email" id="previewEmail">{{ $user->email }}</small>
                                </div>
                            </div>
                        </div>

                        <!-- Changement de mot de passe -->
                        <div class="edit-card mb-4">
                            <div class="card-header-edit">
                                <h5><i class="fas fa-lock me-2"></i>Security</h5>
                            </div>
                            <div class="card-body-edit">
                                <p class="text-muted">Change your password to secure your account.</p>
                                <button type="button" class="btn btn-outline-premium w-100" data-bs-toggle="modal" data-bs-target="#changePasswordModal">
                                    <i class="fas fa-key me-2"></i>Change password
                                </button>
                            </div>
                        </div>

                        <!-- Code de parrainage -->
                        <div class="edit-card">
                            <div class="card-header-edit">
                                <h5><i class="fas fa-users me-2"></i>Sponsorship</h5>
                            </div>
                            <div class="card-body-edit">
                                @if($user->referral_code)
                                    <div class="referral-display">
                                        <label class="form-label-premium">Your code :</label>
                                        <div class="code-container-small">
                                            <input type="text" class="form-control-premium text-center" value="{{ url('/register?ref=' . auth()->user()->referral_code) }}" readonly>
                                            <button class="btn btn-outline-premium btn-sm mt-2 w-100" onclick="copyCode('{{ $user->referral_code }}')">
                                                <i class="fas fa-copy me-2"></i>Copy
                                            </button>
                                        </div>
                                    </div>
                                @else
                                    <p class="text-muted">Generate your referral code to invite your friends.</p>
                                    <form  method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-premium w-100">
                                            <i class="fas fa-plus-circle me-2"></i>Generate a code
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de changement de mot de passe -->
    <div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content premium-modal">
                <div class="modal-header premium-modal-header">
                    <h5 class="modal-title" id="changePasswordModalLabel">
                        <i class="fas fa-lock me-2"></i>Change password
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <form action="{{ route('User.profile.update-password') }}" method="POST">
                    @csrf
                    <div class="modal-body premium-modal-body">
                        <div class="mb-3">
                            <label for="current_password" class="form-label-premium">
                                <i class="fas fa-lock me-2"></i>Current password
                            </label>
                            <input type="password" class="form-control-premium" id="current_password" name="current_password" required>
                        </div>
                        <div class="mb-3">
                            <label for="new_password" class="form-label-premium">
                                <i class="fas fa-key me-2"></i>New password
                            </label>
                            <input type="password" class="form-control-premium" id="new_password" name="new_password" required minlength="8">
                            <small class="form-text-premium">Minimum 8 characters</small>
                        </div>
                        <div class="mb-3">
                            <label for="new_password_confirmation" class="form-label-premium">
                                <i class="fas fa-key me-2"></i>Confirm new password
                            </label>
                            <input type="password" class="form-control-premium" id="new_password_confirmation" name="new_password_confirmation" required>
                        </div>
                    </div>
                    <div class="modal-footer premium-modal-footer">
                        <button type="button" class="btn btn-secondary-premium" data-bs-dismiss="modal">
                            <i class="fas fa-times me-2"></i>Cancel
                        </button>
                        <button type="submit" class="btn btn-premium">
                            <i class="fas fa-save me-2"></i>Change password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')
   
@endsection

