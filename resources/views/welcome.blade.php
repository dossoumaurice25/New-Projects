<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NovaPulse - Investment Platform</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/page.css')}}">
    <link href="https://db.onlinewebfonts.com/c/88ec722aea6da3c9f67189591d5f3a6e?family=Batangas" rel="stylesheet">
</head>
<body>


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><strong style="font-family: 'Batangas', sans-serif;">NovaPu<span style="font-family: 'Batangas', sans-serif; color:#9f23c2">l</span>se</strong></a>
            <button class="navbar-toggler text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="fas fa-bars fa-lg"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">ABOUT US</a></li>
                    <li class="nav-item"><a class="nav-link" href="#how">HOW IT WORKS</a></li>
                    <li class="nav-item"><a class="nav-link" href="#join">WHY JOIN US</a></li>
                </ul>
                <a href="{{route('login')}}" class="btn-sign-in">SIGN IN</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section" style="background-image: url('assets/images/B-NOVA.png');background-size: cover;background-repeat: no-repeat;background-position: center;">
        <div class="container">
                <div class="particles-container" id="particlesContainer"></div>
                <div class="align-items-center justify-content-center" style="margin-top: 200px; margin-bottom: 200px;">
                        <img class="hero-logo img-fluid" src="{{asset('assets/images/prelog.png')}}" alt="logo NovaPulse">
                        <!--<h1 class="hero-title" style="font-family:'Allrion' , serif;">B-NOVA</h1>-->
                        <img class="hero-logo img-fluid" src="{{asset('assets/images/logonov.png')}}" alt="logo NovaPulse">
                        <!--<p class="hero-subtitle">INVESTMENT • TECHNOLOGY • INNOVATION</p> -->
                </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container " >
            <div class="row justify-content-center " >
                <div class="col-lg-7">
                    <h3 class="" style="font-family:'Allrion' , serif;">About NovaPulse</h3>
                    <div class="mb-5" style="width: 100px; height: 3px;background-color: #9f23c2;"></div>
                    <h3 class="mb-4" style="color: var(--primary-purple);">Invest differently, Profit sustainably.</h3>
                    <p class="lead mb-4">
                        Welcome to NovaPulse, the next-generation investment platform designed to offer stable and accessible growth opportunities to all. Whether you're a beginner or an experienced investor, we help you grow your capital intelligently and securely.
                    </p>
                    <p class=" lead mb-4">
                        Our mission is to democratize investing by placing your money in carefully selected stocks and generating regular profits, while benefiting from personalized and transparent support.
                    </p>
                </div>
                <div class="col-lg-4 d-none d-lg-block">
                    <img src="assets/images/33.png" alt=""  class="img-fluid">
                </div>
            </div>
        </div>
    </section>

     <!-- How it works Section -->
    <section id="how" class="how-it-works" >
        <div class="container">
            <h3 style="font-family:'Allrion' , serif;" class="">How it works</h3>
            <div class="mb-5" style="width: 100px; height: 3px;background-color: #9f23c2;"></div>
            <div class="row justify-content-center">
                <div class="col-lg-6 mb-4">
                    <div class="step-card">
                        <div class="d-flex">
                            <div class="step-number">01</div>
                            <h4 style="color: var(--primary-purple); font-weight: 900;  margin-left: 15px; margin-top: 10px;">Join NovaPulse</h4>
                        </div>
                        <p>Subscribe today and become a key player in your financial success.
                            Take control of your future by investing wisely, starting now.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="step-card">
                        <div class="d-flex">
                            <div class="step-number">02</div>
                            <h4 style="color: var(--primary-purple); font-weight: 900;  margin-left: 15px; margin-top: 10px;">We work for you</h4>
                        </div>
                       <p>Our experts rely on market indicators, fundamental analysis and technical assessments to identify high-potential equitable opportunities.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="step-card">
                        <div class="d-flex">
                            <div class="step-number">03</div>
                            <h4 style="color: var(--primary-purple); font-weight: 900;  margin-left: 15px; margin-top: 10px;">You invest</h4>
                        </div>
                       <p>Securely invest the amount of your choice. Your money is automatically allocated to the best opportunities of the moment.</p>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="step-card">
                        <div class="d-flex">
                            <div class="step-number">04</div>
                            <h4 style="color: var(--primary-purple); font-weight: 900;   margin-left: 15px; margin-top: 10px;">You benefit from it</h4>
                        </div>
                       <p>You watch your earnings grow every day. Earned profits are paid out daily, with complete transparency.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Security & Transparency -->
    <section id="about" class="py-5">
        <div class="container " >
            <div class="row justify-content-center " >
                <div class="col-lg-6">
                    <h3 class="" style="font-family:'Allrion' , serif;">Security & Transparency</h3>
                    <div class="mb-5" style="width: 100px; height: 3px;background-color: #9f23c2;"></div>
                    <p class="lead mb-4">
                        At NovaPulse, the security of your funds and the transparency of our operations are our top priority. <br>
                        <i class="fas fa-shield-alt  me-2" style="color: #9f23c2;"></i> Secure Transaction Management <br>
                        All transactions are encrypted and processed via state-of-the-art banking or blockchain systems. <br>
                        <i class="fas fa-lock  me-2" style="color: #9f23c2;"></i> Real-Time Monitoring <br>
                        You have access to a clear and up-to-date dashboard, allowing you to track your performance at any time. <br>
                        <i class="fas fa-chart-line me-2" style="color: #9f23c2;"></i> No surprises, no hidden fees <br>
                        Everything is displayed in black and white. You know exactly what you're investing and what you're earning. <br>
                        <i class="fas fa-user-shield me-2" style="color: #9f23c2;"></i> Regular Audits & Compliance <br>
                        Our system is audited by financial professionals and complies with international asset management standards.                    
                    </p>
                   
                </div>
                <div class="col-lg-5 d-none d-lg-block" style="margin-top: 90px;">
                    <img src="assets/images/22.png" alt=""  class="img-fluid ">
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="join" class="py-5">
        <div class="container">
            <h3 class="" style="font-family:'Allrion' , serif;">Why choose us</h3>
            <div class="mb-5" style="width: 100px; height: 3px;background-color: #9f23c2;"></div>
            <div class="row text-center">

            <!-- Performance -->
            <div class=" col-md-6 col-lg-4 mb-4">
                <div class=" step-carde p-4 h-100">
                <i class="fas fa-chart-line fa-2x mb-3 " style="color: #9f23c2;"></i>
                <h5 class="mb-2" style="font-weight: 900;">Continued performance</h5>
                <p>Our portfolios are growing steadily thanks to a rigorous strategy.</p>
                </div>
            </div>

            <!-- Sécurité -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="p-4 step-carde h-100">
                <i class="fas fa-shield-alt fa-2x mb-3 "  style="color: #9f23c2;"></i>
                <h5 class="mb-2" style="font-weight: 900;">Security of funds</h5>
                <p>Your investments are protected by advanced security protocols and complete transparency.</p>
                </div>
            </div>

            <!-- Accessibilité -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="p-4 step-carde h-100">
                <i class="fas fa-mobile-alt fa-2x mb-3"  style="color: #9f23c2;"></i>
                <h5 class="mb-2" style="font-weight: 900;">Full accessibility</h5>
                <p>Manage your investments anytime from your smartphone, tablet or computer.</p>
                </div>
            </div>

            <!-- Accompagnement -->
            <div class="col-md-6 col-lg-6 mb-4">
                <div class="p-4 step-carde h-100">
                <i class="fas fa-user-check fa-2x mb-3"  style="color: #9f23c2;"></i>
                <h5 class="mb-2" style="font-weight: 900;">Personalized support</h5>
                <p>A team of experts at your service to guide you according to your investment objectives.</p>
                </div>
            </div>

            <!-- Bénéfices quotidiens -->
            <div class="col-md-6 col-lg-6 mb-4">
                <div class="p-4  step-carde h-100">
                <i class="fas fa-coins fa-2x mb-3 "  style="color: #9f23c2;"></i>
                <h5 class="mb-2" style="font-weight: 900;">Daily benefits</h5>
                <p>Receive your profits every day and track your earnings in real time from your dashboard.</p>
                </div>
            </div>

            </div>
        </div>
    </section>

    <!--FAQ -->
    <section class="py-5">
        <div class="container accordion accordion-flush" id="accordionFlushExample">
            <h3 class="" style="font-family:'Allrion' , serif;">FAQ</h3>
            <div class="mb-5" style="width: 100px; height: 3px;background-color: #9f23c2;"></div>
            <div class="accordion-item" style="background-color: #e8ceef;">
                <h2 class="accordion-header"  >
                <button class="accordion-button collapsed" type="button" style="background-color: #a023c293; font-weight: bold;" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    What is <span style="font-family: 'Batangas', sans-serif; margin-left:5px">NovaPu<span style="font-family: 'Batangas', sans-serif; color:#9f23c2">l</span>se</span> ?
                </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">NovaPulse is a secure online platform that makes it easy to invest and track your returns in real time.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    How can I subscribe to NovaPulse?
                </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">NovaPulse is an invitation-only platform</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Which deposit methods are accepted?
                </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">We accept secure methods, such as Cryptocurrencies (Bitcoin, USDT, Ethereum...)</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFor" aria-expanded="false" aria-controls="flush-collapseFor">
                    How do I track my investments?
                </button>
                </h2>
                <div id="flush-collapseFor" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">From your dashboard, you can view your deposits, winnings, withdrawals and transaction history in real time.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    Can I withdraw my winnings at any time?
                </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Yes, you can request a withdrawal at any time depending on the payment method you have chosen.</div>
                </div>
            </div>
        </div>
        
    </section>

    

    

    <!-- QR Code Section -->
    <section class="qr-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="qr-code mx-auto">
                       <img src="{{asset('assets/images/qr.png')}}" alt="Qr code" height="200" width="200" style="border-radius: 40px">
                    </div>
                    <h3 class="mt-4">To join us you must be invited because <span style="color: var(--primary-purple);">NovaPulse</span> is an invitation-only platform.</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2025 NovaPulse. Tous droits réservés.</p>
                </div>
                <div class="col-md-6 text-end">
                    <a href="#" class="text-light me-3">General terms and conditions</a>
                    <a href="#" class="text-light">Privacy policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Animated counter for stats
        function animateCounters() {
            const counters = document.querySelectorAll('.stat-value');
            counters.forEach(counter => {
                const target = parseInt(counter.textContent.replace(/[^0-9]/g, ''));
                const increment = target / 100;
                let current = 0;
                
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                    }
                    
                    const text = counter.textContent;
                    const symbol = text.replace(/[0-9]/g, '');
                    counter.textContent = Math.floor(current) + symbol.replace(/[0-9]/g, '');
                }, 20);
            });
        }

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    
                    // Trigger counter animation for dashboard section
                    if (entry.target.classList.contains('dashboard-section')) {
                        setTimeout(animateCounters, 500);
                    }
                }
            });
        }, observerOptions);

        // Apply fade-in animation to sections
        document.querySelectorAll('section').forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(30px)';
            section.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
            observer.observe(section);
        });

        // Dynamic chart bars animation
        function animateChartBars() {
            const bars = document.querySelectorAll('.bar');
            bars.forEach((bar, index) => {
                setTimeout(() => {
                    bar.style.animationDelay = `${index * 0.1}s`;
                    bar.classList.add('animate');
                }, index * 100);
            });
        }

        // Mobile responsive navigation
        window.addEventListener('resize', () => {
            if (window.innerWidth <= 768) {
                document.querySelectorAll('.stat-card').forEach(card => {
                    card.style.minHeight = '100px';
                });
            }
        });

        // Parallax effect for hero elements
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.hero-blob, .dollar-icon');
            
            parallaxElements.forEach(element => {
                const speed = element.classList.contains('hero-blob') ? 0.5 : 0.3;
                element.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });

        // Dashboard stats real-time simulation
        function simulateRealTimeData() {
            const statValues = document.querySelectorAll('.dashboard-content .stat-value');
            
            setInterval(() => {
                statValues.forEach(stat => {
                    const currentValue = parseFloat(stat.textContent.replace(/[^0-9.]/g, ''));
                    const variation = (Math.random() - 0.5) * currentValue * 0.02; // ±2% variation
                    const newValue = Math.max(0, currentValue + variation);
                    
                    const symbol = stat.textContent.replace(/[0-9.]/g, '');
                    stat.textContent = newValue.toFixed(symbol.includes('%') ? 1 : 0) + symbol.replace(/[0-9.]/g, '');
                    
                    // Add visual feedback for changes
                    stat.style.color = variation > 0 ? '#22c55e' : '#ef4444';
                    setTimeout(() => {
                        stat.style.color = 'white';
                    }, 1000);
                });
            }, 5000); // Update every 5 seconds
        }

        // Initialize animations when page loads
        window.addEventListener('load', () => {
            setTimeout(animateChartBars, 1000);
            setTimeout(simulateRealTimeData, 2000);
        });

        // Add loading animation
        document.addEventListener('DOMContentLoaded', () => {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.5s ease';
            
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });

        // Interactive hover effects for cards
        document.querySelectorAll('.stat-card, .step-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
                this.style.boxShadow = '0 20px 40px rgba(139, 92, 246, 0.3)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
                this.style.boxShadow = 'none';
            });
        });

        // Navbar background change on scroll
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(0, 0, 0, 0.95)';
                navbar.style.backdropFilter = 'blur(15px)';
            } else {
                navbar.style.background = 'rgba(0, 0, 0, 0.8)';
                navbar.style.backdropFilter = 'blur(10px)';
            }
        });
    </script>
    <script>
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

            document.addEventListener('DOMContentLoaded', () => {
                window.particleSystem = new ParticleSystem();
                });


    </script>
</body>
</html>