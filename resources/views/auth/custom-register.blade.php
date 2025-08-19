<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    
    <!-- Bootstrap 5.3 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- AOS Animation -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #9f23c2 0%, #ffffff 50%, #9f23c2 100%);
            --glass-bg: rgba(255, 255, 255, 0.08);
            --glass-border: rgba(255, 255, 255, 0.12);
            --dark-bg: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 25%, #0f0f0f 50%, #1a1a1a 75%, #0a0a0a 100%);
        }
        
        * {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }
        
        body {
            background: var(--dark-bg);
            background-attachment: fixed;
            min-height: 100vh;
            overflow-x: hidden;
        }
        
        /* Advanced Glass Morphism */
        .glass-container {
            background: var(--glass-bg);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            border: 1px solid var(--glass-border);
            box-shadow: 
                0 25px 50px -12px rgba(0, 0, 0, 0.8),
                0 0 0 1px rgba(255, 255, 255, 0.05),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
        }
        
        /* Professional Form Controls */
        .form-floating > .form-control:focus ~ label,
        .form-floating > .form-control:not(:placeholder-shown) ~ label {
            color: #9f23c2 !important;
            transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
        }
        
        .form-control-modern {
            background: rgba(255, 255, 255, 0.372);
            border: 1px solid rgba(255, 255, 255, 0.15);
            color: #ffffff;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            backdrop-filter: blur(10px);
        }
        
        .form-control-modern:focus {
            background: rgba(255, 255, 255, 0.1);
            border-color: #9f23c2;
            box-shadow: 
                0 0 0 0.2rem rgba(245, 158, 11, 0.15),
                0 4px 12px rgba(245, 158, 11, 0.1);
            color: #ffffff;
        }
        
        .form-control-modern::placeholder {
            color: rgba(194, 194, 194, 0.741);
        }
        
        /* Advanced Button Styles */
        .btn-gradient-primary {
            background: var(--primary-gradient);
            border: none;
            color: #000;
            font-weight: 600;
            letter-spacing: 0.5px;
            position: relative;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .btn-gradient-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }
        
        .btn-gradient-primary:hover::before {
            left: 100%;
        }
        
        .btn-gradient-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(245, 158, 11, 0.4);
            color: #000;
        }
        
        .btn-glass-secondary {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #ffffff;
            backdrop-filter: blur(10px);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .btn-glass-secondary:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.4);
            color: #ffffff;
            transform: translateY(-1px);
        }
        
        /* Custom Checkbox */
        .form-check-custom {
            position: relative;
        }
        
        .form-check-custom .form-check-input {
            width: 1.25em;
            height: 1.25em;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 0.25rem;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .form-check-custom .form-check-input:checked {
            background: var(--primary-gradient);
            border-color: #9f23c2;
            transform: scale(1.1);
        }
        
        /* Professional Select */
        .form-select-modern {
            background: rgba(255, 255, 255, 0.05) url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23ffffff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m1 6 7 7 7-7'/%3e%3c/svg%3e") no-repeat right 0.75rem center/16px 12px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            color: #ffffff;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .form-select-modern:focus {
            background: rgba(255, 255, 255, 0.1);
            border-color: #9f23c2;
            box-shadow: 0 0 0 0.2rem rgba(245, 158, 11, 0.15);
            color: #6c6565;
        }
        
        /* Floating Particles */
        .particles-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }
        
        .particle {
            position: absolute;
            background: radial-gradient(circle, #9f23c2 0%, rgba(247, 246, 246, 0.355) 50%, transparent 100%);
            border-radius: 50%;
            animation: float-particle 8s ease-in-out infinite;
        }
        
        @keyframes float-particle {
            0%, 100% { 
                transform: translateY(0px) translateX(0px) rotate(0deg);
                opacity: 0.3;
            }
            33% { 
                transform: translateY(-30px) translateX(10px) rotate(120deg);
                opacity: 0.6;
            }
            66% { 
                transform: translateY(-15px) translateX(-10px) rotate(240deg);
                opacity: 0.4;
            }
        }
        
        /* Validation States */
        .is-valid-custom {
            border-color: #10b981 !important;
            background: rgba(16, 185, 129, 0.1) !important;
        }
        
        .is-invalid-custom {
            border-color: #ef4444 !important;
            background: rgba(239, 68, 68, 0.1) !important;
        }
        
        /* Loading States */
        .btn-loading {
            position: relative;
            color: transparent !important;
        }
        
        .btn-loading::after {
            content: '';
            position: absolute;
            width: 16px;
            height: 16px;
            top: 50%;
            left: 50%;
            margin-left: -8px;
            margin-top: -8px;
            border: 2px solid #000;
            border-right-color: transparent;
            border-radius: 50%;
            animation: button-loading-spinner 0.6s linear infinite;
        }
        
        @keyframes button-loading-spinner {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .glass-container {
                margin: 1rem;
                backdrop-filter: blur(15px);
            }
        }
        
        /* Advanced Hover Effects */
        .hover-lift {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .hover-lift:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }
       
    </style>
    <link href="https://db.onlinewebfonts.com/c/88ec722aea6da3c9f67189591d5f3a6e?family=Batangas" rel="stylesheet">
</head>
<body>
    <!-- Particles Background -->
    <div class="particles-container" id="particlesContainer"></div>
    
    <!-- Contact Button -->
    <div class="position-fixed bottom-0 end-0 p-4 z-3">
        <button class="btn btn-gradient-primary rounded-pill px-4 py-2 hover-lift" id="contactBtn" data-bs-toggle="tooltip" data-bs-placement="left" title="Besoin d'aide ?">
            <i class="fas fa-comment-dots me-2"></i>
            <span class="d-none d-md-inline">Contact Us</span>
        </button>
    </div>
    
    <!-- Main Container -->
    <div class="container-fluid min-vh-100 d-flex align-items-center justify-content-center py-5">
        <div class="row w-100 justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-6">
                <!-- Registration Card -->
                <div class="glass-container rounded-4 p-4 p-md-5" data-aos="fade-up" data-aos-duration="800">
                    <!-- Header -->
                    <div class="text-center mb-5" data-aos="fade-down" data-aos-delay="200">
                        <div class="align-items-center justify-content-center gap-2 mb-0">
                            <h1 style="font-family: 'Batangas', sans-serif; font-size: 5rem;" class="display-6 fw-bold mb-0 text-white">NovaPu<span style="font-family: 'Batangas', sans-serif; color:#9f23c2">l</span>se</h1>
                        </div>
                        <p style="color: #ffffff;" class="section-subtitle ">Join our professional platform and unlock your potential</p>
                    </div>
                    
                    <!-- Registration Form -->
                    <form id="registrationForm" method="POST" action="{{ route('register.submit') }}" >
                        @csrf
                        <input type="hidden" name="referred_by" value="{{ $referrer->id }}">


                        <!-- Username Row -->
                        <div class="row g-3 mb-4" data-aos="fade-right" data-aos-delay="300">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control form-control-modern" id="currentUsername" value="{{ $referrer->username }}" readonly>
                                    <label for="currentUsername" class="text-muted">Current Username</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="username" class="form-control form-control-modern" id="preferredUsername" placeholder="Preferred Username">
                                    <label for="preferredUsername" class="text-muted">Preferred Username</label>
                                    <div class="invalid-feedback">Please choose a username.</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Email Row -->
                        <div class="row g-3 mb-4" data-aos="fade-left" data-aos-delay="400">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control form-control-modern" id="email" placeholder="Email" required>
                                    <label for="email" class="text-muted">Email</label>
                                    <div class="invalid-feedback">Please provide a valid email.</div>
                                    <div class="valid-feedback">Looks good!</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" name="email_confirmation" class="form-control form-control-modern" id="confirmEmail" placeholder="Confirm Email" required>
                                    <label for="confirmEmail" class="text-muted">Confirm Email</label>
                                    <div class="invalid-feedback">Emails must match.</div>
                                    <div class="valid-feedback">Emails match!</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Password Row -->
                        <div class="row g-3 mb-4" data-aos="fade-right" data-aos-delay="500">
                            <div class="col-md-6">
                                <div class="form-floating position-relative">
                                    <input type="password" name="password" class="form-control form-control-modern pe-5" id="password" placeholder="Password" required minlength="8">
                                    <label for="password" class="text-muted">Password</label>
                                    <button type="button" class="btn btn-link position-absolute top-50 end-0 translate-middle-y text-white-50 pe-3" onclick="FormValidator.togglePassword('password')">
                                        <i class="fas fa-eye" id="password-toggle"></i>
                                    </button>
                                    <div class="invalid-feedback">Password must be at least 8 characters.</div>
                                    <div class="valid-feedback">Strong password!</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating position-relative">
                                    <input type="password" name="password_confirmation" class="form-control form-control-modern pe-5" id="confirmPassword" placeholder="Confirm Password" required>
                                    <label for="confirmPassword" class="text-muted">Confirm Password</label>
                                    <button type="button" class="btn btn-link position-absolute top-50 end-0 translate-middle-y text-white-50 pe-3" onclick="FormValidator.togglePassword('confirmPassword')">
                                        <i class="fas fa-eye" id="confirmPassword-toggle"></i>
                                    </button>
                                    <div class="invalid-feedback">Passwords must match.</div>
                                    <div class="valid-feedback">Passwords match!</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Name Row -->
                        <div class="row g-3 mb-4" data-aos="fade-left" data-aos-delay="600">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="first_name" class="form-control form-control-modern" id="firstName" placeholder="First Name" required>
                                    <label for="firstName" class="text-muted">First Name</label>
                                    <div class="invalid-feedback">Please provide your first name.</div>
                                    <div class="valid-feedback">Perfect!</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="last_name" class="form-control form-control-modern" id="lastName" placeholder="Last Name" required>
                                    <label for="lastName" class="text-muted">Last Name</label>
                                    <div class="invalid-feedback">Please provide your last name.</div>
                                    <div class="valid-feedback">Great!</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Address Row -->
                        <div class="row g-3 mb-4" data-aos="fade-right" data-aos-delay="700">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="address" class="form-control form-control-modern" id="address" placeholder="Address">
                                    <label for="address" class="text-muted">Address</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="city" class="form-control form-control-modern" id="city" placeholder="City">
                                    <label for="city" class="text-muted">City</label>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Country & Phone Row -->
                        <div class="row g-3 mb-4" data-aos="fade-left" data-aos-delay="800">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select name="country" class="form-select form-select-modern" id="country" onchange="updatePhoneCode()">
                                            <option value="">Sélectionnez votre pays</option>
                                            <option value="AD" data-code="+376">🇦🇩 Andorre</option>
                                            <option value="AE" data-code="+971">🇦🇪 Émirats arabes unis</option>
                                            <option value="AF" data-code="+93">🇦🇫 Afghanistan</option>
                                            <option value="AG" data-code="+1268">🇦🇬 Antigua-et-Barbuda</option>
                                            <option value="AI" data-code="+1264">🇦🇮 Anguilla</option>
                                            <option value="AL" data-code="+355">🇦🇱 Albanie</option>
                                            <option value="AM" data-code="+374">🇦🇲 Arménie</option>
                                            <option value="AO" data-code="+244">🇦🇴 Angola</option>
                                            <option value="AQ" data-code="+672">🇦🇶 Antarctique</option>
                                            <option value="AR" data-code="+54">🇦🇷 Argentine</option>
                                            <option value="AS" data-code="+1684">🇦🇸 Samoa américaines</option>
                                            <option value="AT" data-code="+43">🇦🇹 Autriche</option>
                                            <option value="AU" data-code="+61">🇦🇺 Australie</option>
                                            <option value="AW" data-code="+297">🇦🇼 Aruba</option>
                                            <option value="AX" data-code="+358">🇦🇽 Îles Åland</option>
                                            <option value="AZ" data-code="+994">🇦🇿 Azerbaïdjan</option>
                                            <option value="BA" data-code="+387">🇧🇦 Bosnie-Herzégovine</option>
                                            <option value="BB" data-code="+1246">🇧🇧 Barbade</option>
                                            <option value="BD" data-code="+880">🇧🇩 Bangladesh</option>
                                            <option value="BE" data-code="+32">🇧🇪 Belgique</option>
                                            <option value="BF" data-code="+226">🇧🇫 Burkina Faso</option>
                                            <option value="BG" data-code="+359">🇧🇬 Bulgarie</option>
                                            <option value="BH" data-code="+973">🇧🇭 Bahreïn</option>
                                            <option value="BI" data-code="+257">🇧🇮 Burundi</option>
                                            <option value="BJ" data-code="+229">🇧🇯 Bénin</option>
                                            <option value="BL" data-code="+590">🇧🇱 Saint-Barthélemy</option>
                                            <option value="BM" data-code="+1441">🇧🇲 Bermudes</option>
                                            <option value="BN" data-code="+673">🇧🇳 Brunei</option>
                                            <option value="BO" data-code="+591">🇧🇴 Bolivie</option>
                                            <option value="BQ" data-code="+599">🇧🇶 Pays-Bas caribéens</option>
                                            <option value="BR" data-code="+55">🇧🇷 Brésil</option>
                                            <option value="BS" data-code="+1242">🇧🇸 Bahamas</option>
                                            <option value="BT" data-code="+975">🇧🇹 Bhoutan</option>
                                            <option value="BV" data-code="+47">🇧🇻 Île Bouvet</option>
                                            <option value="BW" data-code="+267">🇧🇼 Botswana</option>
                                            <option value="BY" data-code="+375">🇧🇾 Biélorussie</option>
                                            <option value="BZ" data-code="+501">🇧🇿 Belize</option>
                                            <option value="CA" data-code="+1">🇨🇦 Canada</option>
                                            <option value="CC" data-code="+61">🇨🇨 Îles Cocos</option>
                                            <option value="CD" data-code="+243">🇨🇩 République démocratique du Congo</option>
                                            <option value="CF" data-code="+236">🇨🇫 République centrafricaine</option>
                                            <option value="CG" data-code="+242">🇨🇬 République du Congo</option>
                                            <option value="CH" data-code="+41">🇨🇭 Suisse</option>
                                            <option value="CI" data-code="+225">🇨🇮 Côte d'Ivoire</option>
                                            <option value="CK" data-code="+682">🇨🇰 Îles Cook</option>
                                            <option value="CL" data-code="+56">🇨🇱 Chili</option>
                                            <option value="CM" data-code="+237">🇨🇲 Cameroun</option>
                                            <option value="CN" data-code="+86">🇨🇳 Chine</option>
                                            <option value="CO" data-code="+57">🇨🇴 Colombie</option>
                                            <option value="CR" data-code="+506">🇨🇷 Costa Rica</option>
                                            <option value="CU" data-code="+53">🇨🇺 Cuba</option>
                                            <option value="CV" data-code="+238">🇨🇻 Cap-Vert</option>
                                            <option value="CW" data-code="+599">🇨🇼 Curaçao</option>
                                            <option value="CX" data-code="+61">🇨🇽 Île Christmas</option>
                                            <option value="CY" data-code="+357">🇨🇾 Chypre</option>
                                            <option value="CZ" data-code="+420">🇨🇿 République tchèque</option>
                                            <option value="DE" data-code="+49">🇩🇪 Allemagne</option>
                                            <option value="DJ" data-code="+253">🇩🇯 Djibouti</option>
                                            <option value="DK" data-code="+45">🇩🇰 Danemark</option>
                                            <option value="DM" data-code="+1767">🇩🇲 Dominique</option>
                                            <option value="DO" data-code="+1809">🇩🇴 République dominicaine</option>
                                            <option value="DZ" data-code="+213">🇩🇿 Algérie</option>
                                            <option value="EC" data-code="+593">🇪🇨 Équateur</option>
                                            <option value="EE" data-code="+372">🇪🇪 Estonie</option>
                                            <option value="EG" data-code="+20">🇪🇬 Égypte</option>
                                            <option value="EH" data-code="+212">🇪🇭 Sahara occidental</option>
                                            <option value="ER" data-code="+291">🇪🇷 Érythrée</option>
                                            <option value="ES" data-code="+34">🇪🇸 Espagne</option>
                                            <option value="ET" data-code="+251">🇪🇹 Éthiopie</option>
                                            <option value="FI" data-code="+358">🇫🇮 Finlande</option>
                                            <option value="FJ" data-code="+679">🇫🇯 Fidji</option>
                                            <option value="FK" data-code="+500">🇫🇰 Îles Malouines</option>
                                            <option value="FM" data-code="+691">🇫🇲 Micronésie</option>
                                            <option value="FO" data-code="+298">🇫🇴 Îles Féroé</option>
                                            <option value="FR" data-code="+33">🇫🇷 France</option>
                                            <option value="GA" data-code="+241">🇬🇦 Gabon</option>
                                            <option value="GB" data-code="+44">🇬🇧 Royaume-Uni</option>
                                            <option value="GD" data-code="+1473">🇬🇩 Grenade</option>
                                            <option value="GE" data-code="+995">🇬🇪 Géorgie</option>
                                            <option value="GF" data-code="+594">🇬🇫 Guyane française</option>
                                            <option value="GG" data-code="+44">🇬🇬 Guernesey</option>
                                            <option value="GH" data-code="+233">🇬🇭 Ghana</option>
                                            <option value="GI" data-code="+350">🇬🇮 Gibraltar</option>
                                            <option value="GL" data-code="+299">🇬🇱 Groenland</option>
                                            <option value="GM" data-code="+220">🇬🇲 Gambie</option>
                                            <option value="GN" data-code="+224">🇬🇳 Guinée</option>
                                            <option value="GP" data-code="+590">🇬🇵 Guadeloupe</option>
                                            <option value="GQ" data-code="+240">🇬🇶 Guinée équatoriale</option>
                                            <option value="GR" data-code="+30">🇬🇷 Grèce</option>
                                            <option value="GS" data-code="+500">🇬🇸 Géorgie du Sud</option>
                                            <option value="GT" data-code="+502">🇬🇹 Guatemala</option>
                                            <option value="GU" data-code="+1671">🇬🇺 Guam</option>
                                            <option value="GW" data-code="+245">🇬🇼 Guinée-Bissau</option>
                                            <option value="GY" data-code="+592">🇬🇾 Guyana</option>
                                            <option value="HK" data-code="+852">🇭🇰 Hong Kong</option>
                                            <option value="HM" data-code="+672">🇭🇲 Îles Heard-et-MacDonald</option>
                                            <option value="HN" data-code="+504">🇭🇳 Honduras</option>
                                            <option value="HR" data-code="+385">🇭🇷 Croatie</option>
                                            <option value="HT" data-code="+509">🇭🇹 Haïti</option>
                                            <option value="HU" data-code="+36">🇭🇺 Hongrie</option>
                                            <option value="ID" data-code="+62">🇮🇩 Indonésie</option>
                                            <option value="IE" data-code="+353">🇮🇪 Irlande</option>
                                            <option value="IL" data-code="+972">🇮🇱 Israël</option>
                                            <option value="IM" data-code="+44">🇮🇲 Île de Man</option>
                                            <option value="IN" data-code="+91">🇮🇳 Inde</option>
                                            <option value="IO" data-code="+246">🇮🇴 Territoire britannique de l'océan Indien</option>
                                            <option value="IQ" data-code="+964">🇮🇶 Irak</option>
                                            <option value="IR" data-code="+98">🇮🇷 Iran</option>
                                            <option value="IS" data-code="+354">🇮🇸 Islande</option>
                                            <option value="IT" data-code="+39">🇮🇹 Italie</option>
                                            <option value="JE" data-code="+44">🇯🇪 Jersey</option>
                                            <option value="JM" data-code="+1876">🇯🇲 Jamaïque</option>
                                            <option value="JO" data-code="+962">🇯🇴 Jordanie</option>
                                            <option value="JP" data-code="+81">🇯🇵 Japon</option>
                                            <option value="KE" data-code="+254">🇰🇪 Kenya</option>
                                            <option value="KG" data-code="+996">🇰🇬 Kirghizistan</option>
                                            <option value="KH" data-code="+855">🇰🇭 Cambodge</option>
                                            <option value="KI" data-code="+686">🇰🇮 Kiribati</option>
                                            <option value="KM" data-code="+269">🇰🇲 Comores</option>
                                            <option value="KN" data-code="+1869">🇰🇳 Saint-Kitts-et-Nevis</option>
                                            <option value="KP" data-code="+850">🇰🇵 Corée du Nord</option>
                                            <option value="KR" data-code="+82">🇰🇷 Corée du Sud</option>
                                            <option value="KW" data-code="+965">🇰🇼 Koweït</option>
                                            <option value="KY" data-code="+1345">🇰🇾 Îles Caïmans</option>
                                            <option value="KZ" data-code="+7">🇰🇿 Kazakhstan</option>
                                            <option value="LA" data-code="+856">🇱🇦 Laos</option>
                                            <option value="LB" data-code="+961">🇱🇧 Liban</option>
                                            <option value="LC" data-code="+1758">🇱🇨 Sainte-Lucie</option>
                                            <option value="LI" data-code="+423">🇱🇮 Liechtenstein</option>
                                            <option value="LK" data-code="+94">🇱🇰 Sri Lanka</option>
                                            <option value="LR" data-code="+231">🇱🇷 Liberia</option>
                                            <option value="LS" data-code="+266">🇱🇸 Lesotho</option>
                                            <option value="LT" data-code="+370">🇱🇹 Lituanie</option>
                                            <option value="LU" data-code="+352">🇱🇺 Luxembourg</option>
                                            <option value="LV" data-code="+371">🇱🇻 Lettonie</option>
                                            <option value="LY" data-code="+218">🇱🇾 Libye</option>
                                            <option value="MA" data-code="+212">🇲🇦 Maroc</option>
                                            <option value="MC" data-code="+377">🇲🇨 Monaco</option>
                                            <option value="MD" data-code="+373">🇲🇩 Moldavie</option>
                                            <option value="ME" data-code="+382">🇲🇪 Monténégro</option>
                                            <option value="MF" data-code="+590">🇲🇫 Saint-Martin</option>
                                            <option value="MG" data-code="+261">🇲🇬 Madagascar</option>
                                            <option value="MH" data-code="+692">🇲🇭 Îles Marshall</option>
                                            <option value="MK" data-code="+389">🇲🇰 Macédoine du Nord</option>
                                            <option value="ML" data-code="+223">🇲🇱 Mali</option>
                                            <option value="MM" data-code="+95">🇲🇲 Myanmar</option>
                                            <option value="MN" data-code="+976">🇲🇳 Mongolie</option>
                                            <option value="MO" data-code="+853">🇲🇴 Macao</option>
                                            <option value="MP" data-code="+1670">🇲🇵 Îles Mariannes du Nord</option>
                                            <option value="MQ" data-code="+596">🇲🇶 Martinique</option>
                                            <option value="MR" data-code="+222">🇲🇷 Mauritanie</option>
                                            <option value="MS" data-code="+1664">🇲🇸 Montserrat</option>
                                            <option value="MT" data-code="+356">🇲🇹 Malte</option>
                                            <option value="MU" data-code="+230">🇲🇺 Maurice</option>
                                            <option value="MV" data-code="+960">🇲🇻 Maldives</option>
                                            <option value="MW" data-code="+265">🇲🇼 Malawi</option>
                                            <option value="MX" data-code="+52">🇲🇽 Mexique</option>
                                            <option value="MY" data-code="+60">🇲🇾 Malaisie</option>
                                            <option value="MZ" data-code="+258">🇲🇿 Mozambique</option>
                                            <option value="NA" data-code="+264">🇳🇦 Namibie</option>
                                            <option value="NC" data-code="+687">🇳🇨 Nouvelle-Calédonie</option>
                                            <option value="NE" data-code="+227">🇳🇪 Niger</option>
                                            <option value="NF" data-code="+672">🇳🇫 Île Norfolk</option>
                                            <option value="NG" data-code="+234">🇳🇬 Nigeria</option>
                                            <option value="NI" data-code="+505">🇳🇮 Nicaragua</option>
                                            <option value="NL" data-code="+31">🇳🇱 Pays-Bas</option>
                                            <option value="NO" data-code="+47">🇳🇴 Norvège</option>
                                            <option value="NP" data-code="+977">🇳🇵 Népal</option>
                                            <option value="NR" data-code="+674">🇳🇷 Nauru</option>
                                            <option value="NU" data-code="+683">🇳🇺 Niue</option>
                                            <option value="NZ" data-code="+64">🇳🇿 Nouvelle-Zélande</option>
                                            <option value="OM" data-code="+968">🇴🇲 Oman</option>
                                            <option value="PA" data-code="+507">🇵🇦 Panama</option>
                                            <option value="PE" data-code="+51">🇵🇪 Pérou</option>
                                            <option value="PF" data-code="+689">🇵🇫 Polynésie française</option>
                                            <option value="PG" data-code="+675">🇵🇬 Papouasie-Nouvelle-Guinée</option>
                                            <option value="PH" data-code="+63">🇵🇭 Philippines</option>
                                            <option value="PK" data-code="+92">🇵🇰 Pakistan</option>
                                            <option value="PL" data-code="+48">🇵🇱 Pologne</option>
                                            <option value="PM" data-code="+508">🇵🇲 Saint-Pierre-et-Miquelon</option>
                                            <option value="PN" data-code="+64">🇵🇳 Îles Pitcairn</option>
                                            <option value="PR" data-code="+1787">🇵🇷 Porto Rico</option>
                                            <option value="PS" data-code="+970">🇵🇸 Palestine</option>
                                            <option value="PT" data-code="+351">🇵🇹 Portugal</option>
                                            <option value="PW" data-code="+680">🇵🇼 Palaos</option>
                                            <option value="PY" data-code="+595">🇵🇾 Paraguay</option>
                                            <option value="QA" data-code="+974">🇶🇦 Qatar</option>
                                            <option value="RE" data-code="+262">🇷🇪 La Réunion</option>
                                            <option value="RO" data-code="+40">🇷🇴 Roumanie</option>
                                            <option value="RS" data-code="+381">🇷🇸 Serbie</option>
                                            <option value="RU" data-code="+7">🇷🇺 Russie</option>
                                            <option value="RW" data-code="+250">🇷🇼 Rwanda</option>
                                            <option value="SA" data-code="+966">🇸🇦 Arabie saoudite</option>
                                            <option value="SB" data-code="+677">🇸🇧 Îles Salomon</option>
                                            <option value="SC" data-code="+248">🇸🇨 Seychelles</option>
                                            <option value="SD" data-code="+249">🇸🇩 Soudan</option>
                                            <option value="SE" data-code="+46">🇸🇪 Suède</option>
                                            <option value="SG" data-code="+65">🇸🇬 Singapour</option>
                                            <option value="SH" data-code="+290">🇸🇭 Sainte-Hélène</option>
                                            <option value="SI" data-code="+386">🇸🇮 Slovénie</option>
                                            <option value="SJ" data-code="+47">🇸🇯 Svalbard et Jan Mayen</option>
                                            <option value="SK" data-code="+421">🇸🇰 Slovaquie</option>
                                            <option value="SL" data-code="+232">🇸🇱 Sierra Leone</option>
                                            <option value="SM" data-code="+378">🇸🇲 Saint-Marin</option>
                                            <option value="SN" data-code="+221">🇸🇳 Sénégal</option>
                                            <option value="SO" data-code="+252">🇸🇴 Somalie</option>
                                            <option value="SR" data-code="+597">🇸🇷 Suriname</option>
                                            <option value="SS" data-code="+211">🇸🇸 Soudan du Sud</option>
                                            <option value="ST" data-code="+239">🇸🇹 Sao Tomé-et-Principe</option>
                                            <option value="SV" data-code="+503">🇸🇻 Salvador</option>
                                            <option value="SX" data-code="+1721">🇸🇽 Saint-Martin</option>
                                            <option value="SY" data-code="+963">🇸🇾 Syrie</option>
                                            <option value="SZ" data-code="+268">🇸🇿 Eswatini</option>
                                            <option value="TC" data-code="+1649">🇹🇨 Îles Turks-et-Caïcos</option>
                                            <option value="TD" data-code="+235">🇹🇩 Tchad</option>
                                            <option value="TF" data-code="+262">🇹🇫 Terres australes françaises</option>
                                            <option value="TG" data-code="+228">🇹🇬 Togo</option>
                                            <option value="TH" data-code="+66">🇹🇭 Thaïlande</option>
                                            <option value="TJ" data-code="+992">🇹🇯 Tadjikistan</option>
                                            <option value="TK" data-code="+690">🇹🇰 Tokelau</option>
                                            <option value="TL" data-code="+670">🇹🇱 Timor oriental</option>
                                            <option value="TM" data-code="+993">🇹🇲 Turkménistan</option>
                                            <option value="TN" data-code="+216">🇹🇳 Tunisie</option>
                                            <option value="TO" data-code="+676">🇹🇴 Tonga</option>
                                            <option value="TR" data-code="+90">🇹🇷 Turquie</option>
                                            <option value="TT" data-code="+1868">🇹🇹 Trinité-et-Tobago</option>
                                            <option value="TV" data-code="+688">🇹🇻 Tuvalu</option>
                                            <option value="TW" data-code="+886">🇹🇼 Taïwan</option>
                                            <option value="TZ" data-code="+255">🇹🇿 Tanzanie</option>
                                            <option value="UA" data-code="+380">🇺🇦 Ukraine</option>
                                            <option value="UG" data-code="+256">🇺🇬 Ouganda</option>
                                            <option value="UM" data-code="+1">🇺🇲 Îles mineures éloignées des États-Unis</option>
                                            <option value="US" data-code="+1">🇺🇸 États-Unis</option>
                                            <option value="UY" data-code="+598">🇺🇾 Uruguay</option>
                                            <option value="UZ" data-code="+998">🇺🇿 Ouzbékistan</option>
                                            <option value="VA" data-code="+39">🇻🇦 Vatican</option>
                                            <option value="VC" data-code="+1784">🇻🇨 Saint-Vincent-et-les-Grenadines</option>
                                            <option value="VE" data-code="+58">🇻🇪 Venezuela</option>
                                            <option value="VG" data-code="+1284">🇻🇬 Îles Vierges britanniques</option>
                                            <option value="VI" data-code="+1340">🇻🇮 Îles Vierges américaines</option>
                                            <option value="VN" data-code="+84">🇻🇳 Vietnam</option>
                                            <option value="VU" data-code="+678">🇻🇺 Vanuatu</option>
                                            <option value="WF" data-code="+681">🇼🇫 Wallis-et-Futuna</option>
                                            <option value="WS" data-code="+685">🇼🇸 Samoa</option>
                                            <option value="YE" data-code="+967">🇾🇪 Yémen</option>
                                            <option value="YT" data-code="+262">🇾🇹 Mayotte</option>
                                            <option value="ZA" data-code="+27">🇿🇦 Afrique du Sud</option>
                                            <option value="ZM" data-code="+260">🇿🇲 Zambie</option>
                                            <option value="ZW" data-code="+263">🇿🇼 Zimbabwe</option>
                                        </select>
                                    <label for="country" class="text-muted">Country</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-text bg-dark border-secondary text-white" id="phoneCode">
                                        <span class="country-flag">🌍</span> +000
                                    </span>
                                    <div class="form-floating flex-grow-1">
                                        <input type="text" name="phone_number" class="form-control form-control-modern border-start-0" id="phone" placeholder="Phone">
                                        <label for="phone" class="text-muted"><i class="fas fa-phone me-1"></i>Phone Number</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Terms & Privacy -->
                        <div class="row g-3 mb-5" data-aos="fade-up" data-aos-delay="900">
                            <div class="col-md-6">
                                <div class="form-check form-check-custom">
                                    <input class="form-check-input" type="checkbox" id="terms" required>
                                    <label class="form-check-label text-white-50" for="terms">
                                        I agree to <a href="#" class="text-success text-decoration-none fw-medium">Terms and Conditions</a>
                                    </label>
                                    <div class="invalid-feedback">You must agree before submitting.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check form-check-custom">
                                    <input class="form-check-input" type="checkbox" id="privacy" required>
                                    <label class="form-check-label text-white-50" for="privacy">
                                        I agree to <a href="#" class="text-success text-decoration-none fw-bold">Privacy Policy</a>
                                    </label>
                                    <div class="invalid-feedback">You must agree before submitting.</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Action Buttons -->
                        <div class="row g-3" data-aos="fade-up" data-aos-delay="1000">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-glass-secondary w-100 py-3 fw-semibold" id="backBtn">
                                    <i class="fas fa-arrow-left me-2"></i>BACK
                                </button>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-gradient-primary w-100 py-3 fw-semibold" id="registerBtn">
                                    <i class="fas fa-user-plus me-2"></i>REGISTER
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    
    <script>
        
        // Professional JavaScript Architecture
        class ParticleSystem {
            constructor() {
                this.container = document.getElementById('particlesContainer');
                this.particles = [];
                this.init();
            }
            
            init() {
                this.createParticles(15);
                this.animate();
            }
            
            createParticles(count) {
                for (let i = 0; i < count; i++) {
                    const particle = document.createElement('div');
                    particle.className = 'particle';
                    
                    const size = Math.random() * 100 + 20;
                    const x = Math.random() * window.innerWidth;
                    const y = Math.random() * window.innerHeight;
                    const delay = Math.random() * 8;
                    
                    particle.style.cssText = `
                        width: ${size}px;
                        height: ${size}px;
                        left: ${x}px;
                        top: ${y}px;
                        animation-delay: ${delay}s;
                    `;
                    
                    this.container.appendChild(particle);
                    this.particles.push(particle);
                }
            }
            
            animate() {
                this.particles.forEach((particle, index) => {
                    const speed = 0.5 + Math.random() * 0.5;
                    const angle = (Date.now() * 0.001 + index) * speed;
                    const radius = 50 + Math.sin(angle) * 30;
                    
                    const x = parseFloat(particle.style.left) + Math.cos(angle) * 0.5;
                    const y = parseFloat(particle.style.top) + Math.sin(angle) * 0.3;
                    
                    particle.style.left = (x % window.innerWidth) + 'px';
                    particle.style.top = (y % window.innerHeight) + 'px';
                });
                
                requestAnimationFrame(() => this.animate());
            }
        }
        
        class FormValidator {
            constructor() {
                this.form = document.getElementById('registrationForm');
                this.validators = {
                    email: (value) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value),
                    password: (value) => value.length >= 8, //.test(value),
                    required: (value) => value.trim().length > 0,
                    match: (value1, value2) => value1 === value2
                };
                this.init();
            }
            
            init() {
                this.setupEventListeners();
                this.setupRealTimeValidation();
            }
            
            setupEventListeners() {
                // Email validation
                const email = document.getElementById('email');
                const confirmEmail = document.getElementById('confirmEmail');
                
                email.addEventListener('input', () => this.validateEmail());
                confirmEmail.addEventListener('input', () => this.validateEmailMatch());
                
                // Password validation
                const password = document.getElementById('password');
                const confirmPassword = document.getElementById('confirmPassword');
                
                password.addEventListener('input', () => this.validatePassword());
                confirmPassword.addEventListener('input', () => this.validatePasswordMatch());
                
                // Required fields
                ['firstName', 'lastName', 'preferredUsername'].forEach(fieldId => {
                    document.getElementById(fieldId).addEventListener('input', () => {
                        this.validateRequired(fieldId);
                    });
                });
                
                // Form submission
                this.form.addEventListener('submit', (e) => this.handleSubmit(e));
            }
            
            setupRealTimeValidation() {
                // Debounced validation for better performance
                const debounce = (func, wait) => {
                    let timeout;
                    return function executedFunction(...args) {
                        const later = () => {
                            clearTimeout(timeout);
                            func(...args);
                        };
                        clearTimeout(timeout);
                        timeout = setTimeout(later, wait);
                    };
                };
                
                // Apply debounced validation to all inputs
                this.form.querySelectorAll('.form-control').forEach(input => {
                    input.addEventListener('input', debounce(() => {
                        this.validateField(input);
                    }, 300));
                });
            }
            
            validateField(field) {
                const value = field.value.trim();
                let isValid = true;
                let message = '';
                
                switch (field.id) {
                    case 'email':
                        isValid = this.validators.email(value);
                        break;
                    case 'confirmEmail':
                        isValid = value === document.getElementById('email').value;
                        break;
                    case 'password':
                        isValid = this.validators.password(value);
                        break;
                    case 'confirmPassword':
                        isValid = value === document.getElementById('password').value;
                        break;
                    default:
                        if (field.required) {
                            isValid = this.validators.required(value);
                        }
                }
                
                this.updateFieldState(field, isValid);
                return isValid;
            }
            
            updateFieldState(field, isValid) {
                field.classList.remove('is-valid', 'is-invalid', 'is-valid-custom', 'is-invalid-custom');
                
                if (field.value.length > 0) {
                    if (isValid) {
                        field.classList.add('is-valid', 'is-valid-custom');
                    } else {
                        field.classList.add('is-invalid', 'is-invalid-custom');
                    }
                }
            }
            
            validateEmail() {
                const email = document.getElementById('email');
                return this.validateField(email);
            }
            
            validateEmailMatch() {
                const confirmEmail = document.getElementById('confirmEmail');
                return this.validateField(confirmEmail);
            }
            
            validatePassword() {
                const password = document.getElementById('password');
                const value = password.value;
                
                // Validation progressive avec messages détaillés
                let isValid = true;
                let message = '';
                
                if (value.length < 8) {
                    isValid = false;
                    message = 'Password must be at least 8 characters';
                } else if (!/(?=.*[a-z])/.test(value)) {
                    isValid = false;
                    message = 'Password must contain at least one lowercase letter';
                } else if (!/(?=.*[A-Z])/.test(value)) {
                    isValid = false;
                    message = 'Password must contain at least one uppercase letter';
                } else if (!/(?=.*\d)/.test(value)) {
                    isValid = false;
                    message = 'Password must contain at least one number';
                } else {
                    message = 'Strong password!';
                }
                
                // Mettre à jour le message d'erreur dynamiquement
                const feedback = password.parentNode.querySelector('.invalid-feedback');
                if (feedback) {
                    feedback.textContent = message;
                }
                
                this.updateFieldState(password, isValid);
                return isValid;
            }
            
            validatePasswordMatch() {
                const confirmPassword = document.getElementById('confirmPassword');
                return this.validateField(confirmPassword);
            }
            
            validateRequired(fieldId) {
                const field = document.getElementById(fieldId);
                return this.validateField(field);
            }
            
            validateForm() {
                let isValid = true;
                const requiredFields = ['email', 'confirmEmail', 'password', 'confirmPassword', 'firstName', 'lastName'];
                
                requiredFields.forEach(fieldId => {
                    const field = document.getElementById(fieldId);
                    if (!this.validateField(field)) {
                        isValid = false;
                    }
                });
                
                // Check checkboxes
                const terms = document.getElementById('terms');
                const privacy = document.getElementById('privacy');
                
                if (!terms.checked) {
                    terms.classList.add('is-invalid');
                    isValid = false;
                } else {
                    terms.classList.remove('is-invalid');
                }
                
                if (!privacy.checked) {
                    privacy.classList.add('is-invalid');
                    isValid = false;
                } else {
                    privacy.classList.remove('is-invalid');
                }
                
                return isValid;
            }
            
           async handleSubmit(e) {
                // Laisse ces lignes pour empêcher l'action par défaut JS
                e.preventDefault();
                e.stopPropagation();

                // Active les effets visuels de validation
                this.validateForm(); 

                // Soumet le formulaire normalement vers Laravel
                this.form.submit(); // 🔥 Envoi vers route POST Laravel
            }

           
            
            showSuccessAnimation() {
                const form = this.form.closest('.glass-container');
                form.style.animation = 'pulse 0.6s ease-in-out';
                
                // Add confetti effect
                this.createConfetti();
            }
            
            createConfetti() {
                const colors = ['#9f23c2', '#d97706', '#b45309', '#ffffff'];
                
                for (let i = 0; i < 50; i++) {
                    const confetti = document.createElement('div');
                    confetti.style.cssText = `
                        position: fixed;
                        width: 10px;
                        height: 10px;
                        background: ${colors[Math.floor(Math.random() * colors.length)]};
                        left: ${Math.random() * 100}vw;
                        top: -10px;
                        z-index: 9999;
                        pointer-events: none;
                        animation: confetti-fall 3s linear forwards;
                    `;
                    
                    document.body.appendChild(confetti);
                    
                    setTimeout(() => confetti.remove(), 3000);
                }
            }
            
            showNotification(message, type = 'info') {
                // Create toast notification
                const toast = document.createElement('div');
                const bgClass = type === 'success' ? 'bg-success' : type === 'error' ? 'bg-danger' : 'bg-info';
                
                toast.className = `toast align-items-center text-white ${bgClass} border-0 position-fixed top-0 end-0 m-3`;
                toast.style.zIndex = '9999';
                toast.setAttribute('role', 'alert');
                
                toast.innerHTML = `
                    <div class="d-flex">
                        <div class="toast-body">
                            <i class="fas ${type === 'success' ? 'fa-check-circle' : type === 'error' ? 'fa-exclamation-circle' : 'fa-info-circle'} me-2"></i>
                            ${message}
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                    </div>
                `;
                
                document.body.appendChild(toast);
                
                const bsToast = new bootstrap.Toast(toast, { delay: 5000 });
                bsToast.show();
                
                toast.addEventListener('hidden.bs.toast', () => toast.remove());
            }
            
            resetForm() {
                this.form.reset();
                this.form.classList.remove('was-validated');
                this.form.querySelectorAll('.form-control').forEach(field => {
                    field.classList.remove('is-valid', 'is-invalid', 'is-valid-custom', 'is-invalid-custom');
                });
            }
            
            static togglePassword(fieldId) {
                const field = document.getElementById(fieldId);
                const toggle = document.getElementById(fieldId + '-toggle');
                
                if (field.type === 'password') {
                    field.type = 'text';
                    toggle.classList.remove('fa-eye');
                    toggle.classList.add('fa-eye-slash');
                } else {
                    field.type = 'password';
                    toggle.classList.remove('fa-eye-slash');
                    toggle.classList.add('fa-eye');
                }
            }
        }
        
        class UIManager {
            constructor() {
                this.init();
            }
            
            init() {
                this.setupAnimations();
                this.setupTooltips();
                this.setupThemeToggle();
                this.setupResponsiveHandling();
                this.setupAccessibility();
            }
            
            setupAnimations() {
                // Initialize AOS
                AOS.init({
                    duration: 800,
                    easing: 'ease-out-cubic',
                    once: true,
                    offset: 50
                });
                
                // Add entrance animation
                const container = document.querySelector('.glass-container');
                container.style.opacity = '0';
                container.style.transform = 'translateY(50px)';
                
                setTimeout(() => {
                    container.style.transition = 'all 0.8s cubic-bezier(0.4, 0, 0.2, 1)';
                    container.style.opacity = '1';
                    container.style.transform = 'translateY(0)';
                }, 100);
            }
            
            setupTooltips() {
                // Initialize Bootstrap tooltips
                const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
                tooltipTriggerList.map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
            }
            
            setupThemeToggle() {
                // Add subtle theme variations
                document.addEventListener('keydown', (e) => {
                    if (e.ctrlKey && e.key === 'd') {
                        e.preventDefault();
                        this.toggleDebugMode();
                    }
                });
            }
            
            setupResponsiveHandling() {
                // Handle responsive changes
                const resizeObserver = new ResizeObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.target === document.body) {
                            this.updateParticles();
                        }
                    });
                });
                
                resizeObserver.observe(document.body);
            }
            
            setupAccessibility() {
                // Enhance accessibility
                document.querySelectorAll('.form-control').forEach(input => {
                    input.addEventListener('focus', () => {
                        input.closest('.form-floating, .input-group').style.outline = '0px solid #9f23c2';
                        input.closest('.form-floating, .input-group').style.outlineOffset = '2px';
                    });
                    
                    input.addEventListener('blur', () => {
                        input.closest('.form-floating, .input-group').style.outline = 'none';
                    });
                });
                
                // Keyboard navigation
                document.addEventListener('keydown', (e) => {
                    if (e.key === 'Enter' && e.target.type !== 'submit') {
                        const form = e.target.closest('form');
                        const formElements = Array.from(form.querySelectorAll('input, select, textarea, button'));
                        const currentIndex = formElements.indexOf(e.target);
                        const nextElement = formElements[currentIndex + 1];
                        
                        if (nextElement) {
                            nextElement.focus();
                            e.preventDefault();
                        }
                    }
                });
            }
            
            updateParticles() {
                // Update particle system on resize
                if (window.particleSystem) {
                    window.particleSystem.particles.forEach(particle => {
                        const x = Math.random() * window.innerWidth;
                        const y = Math.random() * window.innerHeight;
                        particle.style.left = x + 'px';
                        particle.style.top = y + 'px';
                    });
                }
            }
            
            toggleDebugMode() {
                document.body.classList.toggle('debug-mode');
                console.log('Debug mode toggled');
            }
        }
        
        class ContactManager {
            constructor() {
                this.setupContactButton();
            }
            
            setupContactButton() {
                const contactBtn = document.getElementById('contactBtn');
                contactBtn.addEventListener('click', () => this.showContactModal());
            }
            
            showContactModal() {
                // Create dynamic modal
                const modal = document.createElement('div');
                modal.className = 'modal fade';
                modal.innerHTML = `
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content bg-dark text-white border-0">
                            <div class="modal-header border-secondary">
                                <h5 class="modal-title text-warning">
                                    <i class="fas fa-headset me-2"></i>Contact Support
                                </h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="card bg-secondary border-0 h-100">
                                            <div class="card-body text-center">
                                                <i class="fas fa-envelope fa-2x text-warning mb-3"></i>
                                                <h6>Email Support</h6>
                                                <p class="small text-muted">support@code.com</p>
                                                <button class="btn btn-outline-warning btn-sm">Send Email</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card bg-secondary border-0 h-100">
                                            <div class="card-body text-center">
                                                <i class="fas fa-comments fa-2x text-warning mb-3"></i>
                                                <h6>Live Chat</h6>
                                                <p class="small text-muted">Available 24/7</p>
                                                <button class="btn btn-warning btn-sm">Start Chat</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                
                document.body.appendChild(modal);
                const bsModal = new bootstrap.Modal(modal);
                bsModal.show();
                
                modal.addEventListener('hidden.bs.modal', () => modal.remove());
            }
        }
        
        // Add CSS animations
        const additionalStyles = document.createElement('style');
        additionalStyles.textContent = `
            @keyframes confetti-fall {
                to {
                    transform: translateY(100vh) rotate(360deg);
                    opacity: 0;
                }
            }
            
            .debug-mode .glass-container {
                border: 2px dashed #9f23c2 !important;
            }
            
            .debug-mode .form-control {
                border: 1px dashed #10b981 !important;
            }
            
            @keyframes pulse {
                0% { transform: scale(1); }
                50% { transform: scale(1.02); }
                100% { transform: scale(1); }
            }
            
            /* Advanced responsive breakpoints */
            @media (max-width: 575.98px) {
                .glass-container {
                    margin: 0.5rem;
                    padding: 1.5rem !important;
                }
                
                .display-6 {
                    font-size: 1.5rem !important;
                }
            }
            
            @media (max-width: 383.98px) {
                .btn {
                    font-size: 0.875rem;
                    padding: 0.5rem 1rem !important;
                }
            }
        `;
        document.head.appendChild(additionalStyles);
        
        // Initialize Application
        document.addEventListener('DOMContentLoaded', () => {
            // Initialize all managers
            window.particleSystem = new ParticleSystem();
            window.formValidator = new FormValidator();
            window.uiManager = new UIManager();
            window.contactManager = new ContactManager();
            
            // Setup back button
            document.getElementById('backBtn').addEventListener('click', () => {
                if (confirm('Êtes-vous sûr de vouloir revenir en arrière ? Vos données seront perdues.')) {
                    window.history.back();
                }
            });
            
            // Performance monitoring
            if ('performance' in window) {
                window.addEventListener('load', () => {
                    const loadTime = performance.now();
                    console.log(`Application loaded in ${loadTime.toFixed(2)}ms`);
                });
            }
            
            // Service Worker registration for PWA capabilities
            if ('serviceWorker' in navigator) {
                navigator.serviceWorker.register('/sw.js').catch(console.error);
            }
        });
        
        // Global error handling
        window.addEventListener('error', (e) => {
            console.error('Application error:', e.error);
            // Could send to error tracking service
        });
        
        // Prevent form resubmission on page refresh
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

    <script>
        function updatePhoneCode() {
            const countrySelect = document.getElementById('country');
            const phoneCode = document.getElementById('phoneCode');
            const selectedOption = countrySelect.options[countrySelect.selectedIndex];
            
            if (selectedOption && selectedOption.dataset.code) {
                const flag = selectedOption.text.split(' ')[0];
                const code = selectedOption.dataset.code;
                phoneCode.innerHTML = `<span class="country-flag">${flag}</span> ${code}`;
            }
        }
    </script>

    
</body>
</html>