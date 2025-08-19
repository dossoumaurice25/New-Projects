<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Réinitialiser le mot de passe - B-NOVA</title>

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://db.onlinewebfonts.com/c/88ec722aea6da3c9f67189591d5f3a6e?family=Batangas" rel="stylesheet">

  <style>
    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(to right, #000000, #464545);
    }

    .glow-card {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(10px);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 16px;
      animation: fadeIn 1s ease-out forwards;
    }

    input{
        border: 1px solid;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(40px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .btn-glow {
      transition: all 0.3s ease;
    }

    .btn-glow:hover {
      box-shadow: 0 0 10px #9233ea36, 0 0 20px #9233ea62;
    }
  </style>
</head>
<body>
  <div class="flex items-center justify-center min-h-screen px-4">
    <div class="w-full max-w-lg glow-card p-8 text-white">
      <div class="text-center mb-6">
        <img src="{{asset('assets/images/logo/logo5.png')}}" alt="logo" height="120" width="200" style="margin-left: 120px" />
        <div class="align-items-center justify-content-center gap-2 mb-0">
            <h1 style="font-family: 'Batangas', sans-serif; font-size: 2.5rem;" class="display-6 fw-bold mb-0 text-white">NovaPu<span style="font-family: 'Batangas', sans-serif; color:#9f23c2">l</span>se</h1>
        </div>
        <p class="text-sm text-gray-300 mt-4">Set your new password</p>
      </div>

      @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
          <strong class="font-bold">Error !</strong>
          @foreach($errors->all() as $error)
            <span class="block sm:inline">{{ $error }}</span>
          @endforeach
        </div>
      @endif

      <form class="space-y-4" method="POST" action="{{ route('forgot.password.reset') }}">
         @csrf
         <input type="hidden" name="token" value="{{ $token }}">
         
        <div>
          <input type="email" name="email" id="email" class="w-full px-4 py-2 rounded bg-white/10 focus:outline-none focus:ring-2 focus:ring-purple-400 text-white placeholder:text-gray-300" placeholder="Votre adresse email" required value="{{ old('email') }}" />
        </div>

        <div>
          <input type="password" name="password" id="password" class="w-full px-4 py-2 rounded bg-white/10 focus:outline-none focus:ring-2 focus:ring-purple-400 text-white placeholder:text-gray-300" placeholder="Nouveau mot de passe" required />
        </div>

        <div>
          <input type="password" name="password_confirmation" id="password_confirmation" class="w-full px-4 py-2 rounded bg-white/10 focus:outline-none focus:ring-2 focus:ring-purple-400 text-white placeholder:text-gray-300" placeholder="Confirmez le mot de passe" required />
        </div>

        <button type="submit" class="w-full py-2 px-4 hover:bg-purple-50 rounded btn-glow font-bold" style="background-color: #9f23c2">
          Reset password
        </button>
      </form>

      <p class="text-center text-sm text-gray-300 mt-4">
        <a href="{{route('login')}}" class="text-purple-300 hover:underline">Back to login</a>
      </p>
    </div>
  </div>
</body>
</html>