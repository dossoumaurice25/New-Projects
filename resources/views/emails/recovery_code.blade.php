<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Link - NovaPulse</title>
    <link href="https://db.onlinewebfonts.com/c/88ec722aea6da3c9f67189591d5f3a6e?family=Batangas" rel="stylesheet">
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px;">
    <div style="max-width: 600px; margin: auto; background-color: #1a1a1a; padding: 20px; border-radius: 12px; color: white;">
        <div class="align-items-center justify-content-center gap-2 mb-0" style="text-align: center;">
            <h1 style="font-family: 'Batangas', sans-serif; font-size: 2.5rem; margin-bottom: 0; color: white;">
                NovaPu<span style="font-family: 'Batangas', sans-serif; color:#9f23c2">l</span>se
            </h1>
        </div>
        
        <p style="margin-top: 20px;">Bonjour,</p>
        
        <p>Vous avez demandé la réinitialisation de votre mot de passe. Cliquez sur le lien ci-dessous pour procéder :</p>
        
        <div style="text-align: center; margin: 30px 0;">
            <a href="{{ route('forgot.password.link', ['token' => $token]) }}" 
               style="background-color: #9f23c2; color: white; padding: 12px 24px; text-decoration: none; border-radius: 8px; font-weight: bold; display: inline-block;">
                Réinitialiser mon mot de passe
            </a>
        </div>
        
        <p>Ce lien est valide pendant <strong>30 minutes</strong>.</p>
        
        <p style="margin-top: 20px; color: #888;">
            Si vous n'avez pas demandé cette réinitialisation, ignorez simplement cet email.
        </p>
        
        <p style="margin-top: 20px;">
            Merci,<br>
            <strong>L'équipe NovaPulse</strong>
        </p>
    </div>
</body>
</html>