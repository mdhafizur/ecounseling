 <!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>{{ config('app.name', 'PsyCare') }}</title>

     <!-- Scripts -->
     <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

     <!-- Fonts -->
     <link rel="dns-prefetch" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
         integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <script>
         var conversations = {
             !!isset($conversations) ? json_encode($conversations) : ''!!
         };
         var participant = {
             !!isset($participant) ? json_encode($participant) : ''!!
         };

     </script>

 </head>

 <body>
     <div>
         <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
             <div class="container">
                 <a class="navbar-brand" href="{{ url('/') }}">
                     {{ config('app.name', 'E-Counseling') }}
                 </a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse"
                     data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                     aria-label="{{ __('Toggle navigation') }}">
                     <span class="navbar-toggler-icon"></span>
                 </button>

                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <!-- Left Side Of Navbar -->
                     <ul class="navbar-nav mr-auto">

                     </ul>

                     <!-- Right Side Of Navbar -->
                     <ul class="navbar-nav ml-auto">
                         <!-- Authentication Links -->
                         <li class="nav-item dropdown">
                             <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre
                                 style="position:relative; padding-left:50px">

                                 <img src="/uploads/avatars/{{Auth::user()->avatar}}"
                                     style="width: 60px; height: 60px; position:absolute; top:1x; left: 10px; border-radius:50% ; ">
                                 <span class="caret" style="font-size: xx-large; padding: 50px;">
                                     {{ Auth::user()->name }} </span>

                             </a>

                             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                 <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                 </a>



                                 <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                     style="display: none;">
                                     @csrf
                                 </form>
                             </div>
                         </li>
                     </ul>
                 </div>
             </div>
         </nav>

         <main class="py-4">
             @yield('content')
         </main>
     </div>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js">
     </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
     </script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
     </script>



     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>

     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

     <script src="https://code.jquery.com/jquery-3.4.1.slim.js"></script>
     <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script> -->






     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js">
     </script>
     <script type="text/javascript"
         src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js">
     </script>
     <link rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />






     <script type="text/javascript">
         $(function () {
             $('#datetimepicker1').datetimepicker({
                 daysOfWeekDisabled: [0, 6],
                 format: 'YYYY-MM-DD HH:mm:ss',
                 enabledHours: [9, 10, 11, 12, 14, 15, 16, 17, 18],
                 stepping: 30

             });
         });

     </script>

     <img src='/files/auth.jpg' style='position:fixed;top:0px;left:0px;width:100%;height:100%;z-index:-1;'>

 </body>

 </html>
