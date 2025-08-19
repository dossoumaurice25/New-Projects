<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Code de vérification - NovaPulse</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #000000 0%, #464545 100%);
            color: #ffffff;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .header {
            background: linear-gradient(135deg, #9f23c2 0%, #764ba2 100%);
            padding: 40px 30px;
            text-align: center;
            position: relative;
        }
        
        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='4'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
        }
        
        .logo {
            font-family: 'Arial Black', sans-serif;
            font-size: 28px;
            font-weight: bold;
            color: white;
            margin-bottom: 10px;
            position: relative;
            z-index: 2;
        }
        
        .logo-accent {
            color: #ffffff;
        }
        
        .header-subtitle {
            color: rgba(255, 255, 255, 0.9);
            font-size: 16px;
            position: relative;
            z-index: 2;
        }
        
        .content {
            padding: 40px 30px;
            text-align: center;
        }
        
        .greeting {
            font-size: 18px;
            margin-bottom: 20px;
            color: rgba(255, 255, 255, 0.9);
        }
        
        .message {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 30px;
            color: rgba(255, 255, 255, 0.8);
        }
        
        .code-container {
            background: rgba(159, 35, 194, 0.1);
            border: 2px solid rgba(159, 35, 194, 0.3);
            border-radius: 16px;
            padding: 30px;
            margin: 30px 0;
            backdrop-filter: blur(10px);
        }
        
        .code-label {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .verification-code {
            font-family: 'Courier New', monospace;
            font-size: 36px;
            font-weight: bold;
            color: #9f23c2;
            letter-spacing: 8px;
            margin: 15px 0;
            text-shadow: 0 0 20px rgba(159, 35, 194, 0.5);
        }
        
        .code-note {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.6);
            margin-top: 15px;
        }
        
        .warning {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.3);
            border-radius: 12px;
            padding: 20px;
            margin: 30px 0;
            backdrop-filter: blur(10px);
        }
        
        .warning-title {
            font-size: 14px;
            font-weight: bold;
            color: #ef4444;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        
        .warning-text {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.5;
        }
        
        .footer {
            background: rgba(255, 255, 255, 0.02);
            padding: 30px;
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .footer-text {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.5);
            margin-bottom: 15px;
        }
        
        .contact-info {
            font-size: 11px;
            color: rgba(255, 255, 255, 0.4);
        }
        
        .btn {
            display: inline-block;
            background: linear-gradient(135deg, #9f23c2 0%, #7c3aed 100%);
            color: white;
            padding: 12px 30px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            margin: 20px 0;
            transition: all 0.3s ease;
        }
        
        @media (max-width: 600px) {
            .container {
                margin: 20px;
                border-radius: 16px;
            }
            
            .header {
                padding: 30px 20px;
            }
            
            .content {
                padding: 30px 20px;
            }
            
            .verification-code {
                font-size: 28px;
                letter-spacing: 4px;
            }
            
            .footer {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div style="background: linear-gradient(135deg, #000000 0%, #464545 100%); min-height: 100vh; padding: 40px 20px;">
        <div class="container">
            <!-- Header -->
            <div class="header">
                <div class="logo">
                    NovaPu<span class="logo-accent">l</span>se
                </div>
                <div class="header-subtitle">Password Recovery</div>
            </div>
            
            <!-- Content -->
            <div class="content">
                <div class="greeting">
                    Hello {{ $user->first_name ?? 'User' }},
                </div>
                
                <div class="message">
                    You have requested to reset your password. Please use the verification code below to proceed with the password reset process.
                </div>
                
                <!-- Verification Code -->
                <div class="code-container">
                    <div class="code-label">Verification Code</div>
                    <div class="verification-code">{{ $code }}</div>
                    <div class="code-note">Enter this code in the verification page</div>
                </div>
                
                <!-- Warning -->
                <div class="warning">
                    <div class="warning-title">
                        ⚠️ Security Notice
                    </div>
                    <div class="warning-text">
                        • This code expires in 10 minutes<br>
                        • Never share this code with anyone<br>
                        • If you didn't request this, please ignore this email<br>
                        • Contact support if you have concerns
                    </div>
                </div>
                
                <div class="message">
                    If you didn't request a password reset, you can safely ignore this email. Your account remains secure.
                </div>
            </div>
            
            <!-- Footer -->
            <div class="footer">
                <div class="footer-text">
                    This is an automated message from NovaPulse Security System.
                </div>
                <div class="contact-info">
                    For support, contact us at support@novapulse.com<br>
                    © {{ date('Y') }} NovaPulse. All rights reserved.
                </div>
            </div>
        </div>
    </div>
</body>
</html>