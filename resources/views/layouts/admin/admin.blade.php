<!DOCTYPE html>
<html lang="en"> 
<head>
  
    <title>@yield('titre')</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="B-nona"> 
      <link rel="shortcut icon" href="{{asset('assetsadmin/favicon.ico')}}">   
    
    <!-- FontAwesome JS-->
    <script defer src="{{asset('assetsadmin/plugins/fontawesome/js/all.min.js')}} "></script>
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="{{asset('assetsadmin/css/portal.css')}}">

</head> 
<body class=" app ">

   
   


    <header class="app-header fixed-top">	   	            
        @include('layouts.admin.components.header')
        
        @include('layouts.admin.components.aside')

    </header><!--//app-header-->


    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                @yield('content')

            </div>
        </div>

        @include('layouts.admin.components.footer')

    </div><!--//app-wrapper-->






    @yield('script')
   
    <!-- Charts JS -->
    <script src="{{asset('assetsadmin/plugins/chart.js/chart.min.js')}}"></script> 
    <script src="{{asset('assetsadmin/js/index-charts.js')}}"></script> 
    
    <!-- Page Specific JS -->
	 <!-- Bootstrap JS avec Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery (optionnel si besoin de plugins Bootstrap 4 ou JS custom) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{asset('assetsadmin/js/app.js')}}"></script> 
    <!-- jQuery (optionnel si besoin de plugins Bootstrap 4 ou JS custom) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

</body>
</html> 

