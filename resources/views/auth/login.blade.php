<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Connexion - B-NOVA</title>

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Bootstrap Icons (facultatif mais pro) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- Font (facultatif) -->
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
        border: 1px solid ;
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
<body class="">
   <div class="col-12 text-white mt-3 px-4">
      <a href="{{route('home')}}">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16" style="color: #9333ea;">
          <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
        </svg>
      </a>
    </div>

  <div class="flex items-center justify-center min-h-screen px-4">
    <div class="w-full max-w-lg glow-card p-8 text-white">
      <div class="text-center mb-6">
        <img src="{{asset('assets/images/logo/logo5.png')}}" alt="logo" height="120" width="200" style="margin-left: 120px" />
        <div class="align-items-center justify-content-center gap-2 mb-0">
            <h1 style="font-family: 'Batangas', sans-serif; font-size: 2.5rem;" class="display-6 fw-bold mb-0 text-white">NovaPu<span style="font-family: 'Batangas', sans-serif; color:#9f23c2">l</span>se</h1>
        </div>
        <p class="text-sm text-gray-300">Please enter your credentials</p>
      </div>

      @if(session('success'))
        <div 
          id="success-alert" 
          class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" 
          role="alert"
        >
          <strong class="font-bold">Success !</strong>
          <span class="block sm:inline">{{ session('success') }}</span>
          <button 
            type="button" 
            onclick="document.getElementById('success-alert').remove()" 
            class="absolute top-0 bottom-0 right-0 px-4 py-3"
            aria-label="Fermer"
          >
            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <title>Fermer</title>
              <path d="M14.348 5.652a1 1 0 00-1.414 0L10 8.586 7.066 5.652a1 1 0 10-1.414 1.414L8.586 10l-2.934 2.934a1 1 0 101.414 1.414L10 11.414l2.934 2.934a1 1 0 001.414-1.414L11.414 10l2.934-2.934a1 1 0 000-1.414z"/>
            </svg>
          </button>
        </div>

        <script>
          // Faire disparaître automatiquement après 12 secondes
          setTimeout(() => {
            const alert = document.getElementById('success-alert');
            if(alert) {
              alert.style.transition = 'opacity 0.5s ease';
              alert.style.opacity = '0';
              setTimeout(() => alert.remove(), 500);
            }
          }, 12000);
        </script>
      @endif

      
        @error('username')
              <div class="text-red-700 bg-red-100 border border-red-400 px-4 py-3 rounded relative">{{ $message }}</div>
        @enderror

      <form id="loginForm" class="space-y-4" method="POST" action="{{ route('login.submit') }}">
         @csrf
        <div>
          <input type="text" name="username" id="text" class="w-full px-4 py-2 rounded bg-white/10 focus:outline-none focus:ring-2 focus:ring-purple-400 text-white placeholder:text-gray-300" placeholder="User name" required />
        </div>

        <div>
          <input type="email" name="email" id="email" class="w-full px-4 py-2 rounded bg-white/10 focus:outline-none focus:ring-2 focus:ring-purple-400 text-white placeholder:text-gray-300" placeholder="email" required />
        </div>

        <div>
          <input type="password" name="password" id="password" class="w-full px-4 py-2 rounded bg-white/10 focus:outline-none focus:ring-2 focus:ring-purple-400 text-white placeholder:text-gray-300" placeholder="Password" required />
        </div>

        <p class="text-center text-sm text-gray-300 mt-4">
        <a href="{{route('forgot.password')}}" class="text-purple-300 hover:underline">Forgot your password?</a>
        </p>

        <button type="submit" class="w-full py-2 px-4  hover:bg-purple-50 rounded btn-glow font-bold" style="background-color: #9f23c2">
          Log in
        </button>
      </form>

      
    </div>
  </div>

 

</body>
</html>
