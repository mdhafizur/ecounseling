 <!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>{{ config('app.name', 'E-Counseling') }}</title>

     <!-- Scripts -->
     <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

     <!-- Fonts -->
     <link rel="dns-prefetch" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 </head>

 <body>
     <div id="app">
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
                                     style="width: 32px; height: 32px; position:absolute; top:1x; left: 10px; border-radius:50%">
                                 {{ Auth::user()->name }} <span class="caret"></span>

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
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
         integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
     </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
         integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
     </script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
         integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
     </script>
     <!-- <img src='/files/bg.jpg' style='position:fixed;top:0px;left:0px;width:100%;height:100%;z-index:-1;'> -->




     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

     <script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>

     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

     <script
         src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js">
     </script>

     <link rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
         integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->


     <script type="text/javascript">
         $(function () {
             $('#datetimepicker1').datetimepicker({
                 daysOfWeekDisabled: [0, 6],
                 format: 'YYYY-MM-DD HH:mm:ss'



             });
         });

     </script>

 </body>

 </html>
