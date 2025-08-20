
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{asset('assets/images/2.png')}} " type="image/x-icon" />
    <title>@yield('title')</title>

    <!-- ========== All CSS files linkup ========= -->
    <link href="{{ asset('css/charts.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('js/dashboard-charts.js')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <link rel="icon" href="favicon.ico" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">    <link rel="stylesheet" href="{{asset('assets/css/lineicons.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/css/fullcalendar.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/fullcalendar.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style2.css')}}">

    <style>
       /* Personnalisation du scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-gradient);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #a855f7 0%, #8b5cf6 100%);
        }

      </style>
    <link href="https://db.onlinewebfonts.com/c/88ec722aea6da3c9f67189591d5f3a6e?family=Batangas" rel="stylesheet">
    @yield('style')
    <meta name="csrf-token" content="{{ csrf_token() }}">
   
  </head>
  <body>

     <!-- ======== Preloader =========== -->
    <div id="preloader">
      <div class="spinner"></div>
    </div>
    <!-- ======== Preloader =========== -->

    @include('layouts.users.components.aside')

    
    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">

        @include('layouts.users.components.herder')



        @yield('content')


      @if (empty($hideFooter))
        @include('layouts.users.components.footer')
      @endif
      
    </main>
    <!-- ======== main-wrapper end =========== -->

     <!-- ========= All Javascript files linkup ======== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/Chart.min.js')}}"></script>
    <script src="{{asset('assets/js/dynamic-pie-chart.js')}}"></script>
    <script src="{{asset('assets/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/js/fullcalendar.js')}}"></script>
    <script src="{{asset('assets/js/jvectormap.min.js')}}"></script>
    <script src="{{asset('assets/js/world-merc.js')}}"></script>
    <script src="{{asset('assets/js/polyfill.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    
    @yield('script')

    
  </body>
</html>