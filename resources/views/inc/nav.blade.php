 @section('navbar')
 <nav class="navbar navbar-expand-sm navbar-dark bg-dark" style="margin-bottom: 0;">
     <a class="navbar-brand" href="/">E-Counseling</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03"
         aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarsExample03">
         <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
                 <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="/about">About</a>
             </li>


             <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false">Counselors</a>
                 <div class="dropdown-menu" aria-labelledby="dropdown03">
                     <a class="dropdown-item" href="/register/counselor">Sign Up</a>
                     <a class="dropdown-item" href="/login/counselor">Log In</a>

                 </div>
             </li>

             <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false">Students</a>
                 <div class="dropdown-menu" aria-labelledby="dropdown03">
                     <a class="dropdown-item" href="/register/student">Sign Up</a>
                     <a class="dropdown-item" href="/login/student">Log In</a>
                 </div>
             </li>

             <li class="nav-item">
                 <a class="nav-link" href="#" data-toggle="modal" data-target="#modalLoginAvatar">Admin</a>
             </li>
         </ul>

         <li id="git" class="nav-item" style="float: right;">
             <a class="nav-link" href="/contact">GET IN TOUCH</a>
         </li>

     </div>
 </nav>

 <style>
     li {
         padding: 20px;
         font-size: large;
     }

     #git {
         -webkit-transition-duration: 0.4s;
         /* Safari */
         transition-duration: 0.4s;

     }

     #git:hover {
         background-color: white;
         /* Green */
         color: blue;
     }

     .navbar {
         margin-bottom: 0;
     }

 </style>








 {{-- admin modal --}}

 <!--Modal: Login with Avatar Form-->
 <div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
     <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
         <!--Content-->
         <div class="modal-content">

             <!--Header-->
             <div class="modal-header">
                 <img src="/files/PP.jpg" alt="avatar" class="rounded-circle img-responsive">
             </div>
             <!--Body-->
             <div class="modal-body text-center mb-1">

                 <h5 class="mt-1 mb-2">Hafizur</h5>


                 <div class="text-center mt-4">
                     <button class="btn btn-cyan mt-1" onclick="window.location.href='/login/admin'">Login <i
                             class="fas fa-sign-in ml-1"></i></button>
                 </div>
             </div>

         </div>
         <!--/.Content-->
     </div>
 </div>
