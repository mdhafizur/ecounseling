 @section('navbar')
 <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
     <a class="navbar-brand" href="/">E-Counseling</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03"
         aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>


     @if( auth()->check() )
     <li class="nav-item">
         <a class="nav-link font-weight-bold" href="#">Hi {{ auth()->user()->name }}</a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="/logout">Log Out</a>
     </li>
     @else


     <div class="collapse navbar-collapse" id="navbarsExample03">
         <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
                 <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="/about">About</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="/contact">Contact</a>
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
                     <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalSRegisterForm">Sign Up</a>


                 </div>
             </li>

             <li class="nav-item">
                 <a class="nav-link" href="#" data-toggle="modal" data-target="#modalLoginAvatar">Admin</a>
             </li>


         </ul>

     </div>
 </nav>
 @endif








 {{-- login modal --}}

 <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header text-center">
                 <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body mx-3">
                 <div class="md-form mb-5">
                     <i class="fas fa-envelope prefix grey-text"></i>
                     <input type="email" id="defaultForm-email" class="form-control validate">
                     <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
                 </div>

                 <div class="md-form mb-4">
                     <i class="fas fa-lock prefix grey-text"></i>
                     <input type="password" id="defaultForm-pass" class="form-control validate">
                     <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
                 </div>

             </div>
             <div class="modal-footer d-flex justify-content-center">
                 <button class="btn btn-default">Login</button>
             </div>
         </div>
     </div>
 </div>

 <!-- <div class="text-center">
     <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Launch
         Modal Login Form</a>
 </div> -->


 {{-- sign up modal counselor --}}

 <div class="modal fade" id="modalCRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header text-center">
                 <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body mx-3">
                 <div class="md-form mb-5">
                     <i class="fas fa-user prefix grey-text"></i>
                     <input type="text" id="orangeForm-name" class="form-control validate">
                     <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
                 </div>
                 <div class="md-form mb-5">
                     <i class="fas fa-envelope prefix grey-text"></i>
                     <input type="email" id="orangeForm-email" class="form-control validate">
                     <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
                 </div>

                 <div class="md-form mb-4">
                     <i class="fas fa-lock prefix grey-text"></i>
                     <input type="password" id="orangeForm-pass" class="form-control validate">
                     <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
                 </div>

                 <select class="browser-default custom-select custom-select-lg mb-3">
                     <option selected>Counseling Type</option>
                     <option value="1">Session Counseling</option>
                     <option value="2">Career Counseling</option>
                     <option value="3">Online Counseling</option>
                     <option value="3">Psychotherapy</option>
                 </select>


                 <div class="input-group">
                     <div class="input-group-prepend">
                         <span class="input-group-text" id="inputGroupFileAddon01">Upload Your Resume</span>
                     </div>
                     <div class="custom-file">
                         <input type="file" class="custom-file-input" id="inputGroupFile01"
                             aria-describedby="inputGroupFileAddon01">
                         <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                     </div>
                 </div>



             </div>
             <div class="modal-footer d-flex justify-content-center">
                 <button class="btn btn-deep-orange">Sign up</button>
             </div>
         </div>
     </div>
 </div>

 <!-- <div class="text-center">
     <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Launch
         Modal Register Form</a>
 </div> -->
 {{-- sign up modal student --}}

 <div class="modal fade" id="modalSRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header text-center">
                 <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body mx-3">
                 <div class="md-form mb-5">
                     <i class="fas fa-user prefix grey-text"></i>
                     <input type="text" id="orangeForm-name" class="form-control validate">
                     <label data-error="wrong" data-success="right" for="orangeForm-name">Your Full name</label>
                 </div>
                 <div class="md-form mb-5">
                     <i class="fas fa-envelope prefix grey-text"></i>
                     <input type="email" id="orangeForm-email" class="form-control validate">
                     <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
                 </div>

                 <div class="md-form mb-4">
                     <i class="fas fa-lock prefix grey-text"></i>
                     <input type="password" id="orangeForm-pass" class="form-control validate">
                     <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
                 </div>


                 <!-- need changes -->


                 <div class="md-form mb-5">
                     <i class="fas fa-envelope prefix grey-text"></i>
                     <input type="text" id="orangeForm-name" class="form-control validate">
                     <label data-error="wrong" data-success="right" for="orangeForm-email">Matric No</label>
                 </div>
                 <div class="md-form mb-5">
                     <i class="fas fa-envelope prefix grey-text"></i>
                     <input type="text" id="orangeForm-name" class="form-control validate">
                     <label data-error="wrong" data-success="right" for="orangeForm-email">Faculty</label>
                 </div>
                 <div class="md-form mb-5">
                     <i class="fas fa-envelope prefix grey-text"></i>
                     <input type="text" id="orangeForm-name" class="form-control validate">
                     <label data-error="wrong" data-success="right" for="orangeForm-email">Department</label>
                 </div>

                 <select class="browser-default custom-select custom-select-lg mb-3">
                     <option selected>Year</option>
                     <option value="1">First</option>
                     <option value="2">Second</option>
                     <option value="3">Third</option>
                     <option value="3">Fourth</option>
                 </select>

                 <div class="md-form mb-5">
                     <i class="fas fa-envelope prefix grey-text"></i>
                     <input type="text" id="orangeForm-name" class="form-control validate">
                     <label data-error="wrong" data-success="right" for="orangeForm-email">Nationality</label>
                 </div>
                 <div class="md-form mb-5">
                     <i class="fas fa-envelope prefix grey-text"></i>
                     <input type="number" id="orangeForm-name" class="form-control validate">
                     <label data-error="wrong" data-success="right" for="orangeForm-email">Contact No : </label>
                 </div>


             </div>
             <div class="modal-footer d-flex justify-content-center">
                 <button class="btn btn-deep-orange">Sign up</button>
             </div>
         </div>
     </div>
 </div>

 <!-- <div class="text-center">
     <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Launch
         Modal Register Form</a>
 </div> -->
 {{-- sign up modal student --}}

 <div class="modal fade" id="modalSRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header text-center">
                 <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body mx-3">
                 <div class="md-form mb-5">
                     <i class="fas fa-user prefix grey-text"></i>
                     <input type="text" id="orangeForm-name" class="form-control validate">
                     <label data-error="wrong" data-success="right" for="orangeForm-name">Your Full name</label>
                 </div>
                 <div class="md-form mb-5">
                     <i class="fas fa-envelope prefix grey-text"></i>
                     <input type="email" id="orangeForm-email" class="form-control validate">
                     <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
                 </div>

                 <div class="md-form mb-4">
                     <i class="fas fa-lock prefix grey-text"></i>
                     <input type="password" id="orangeForm-pass" class="form-control validate">
                     <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
                 </div>


                 <!-- need changes -->


                 <div class="md-form mb-5">
                     <i class="fas fa-envelope prefix grey-text"></i>
                     <input type="text" id="orangeForm-name" class="form-control validate">
                     <label data-error="wrong" data-success="right" for="orangeForm-email">Matric No</label>
                 </div>
                 <div class="md-form mb-5">
                     <i class="fas fa-envelope prefix grey-text"></i>
                     <input type="text" id="orangeForm-name" class="form-control validate">
                     <label data-error="wrong" data-success="right" for="orangeForm-email">Faculty</label>
                 </div>
                 <div class="md-form mb-5">
                     <i class="fas fa-envelope prefix grey-text"></i>
                     <input type="text" id="orangeForm-name" class="form-control validate">
                     <label data-error="wrong" data-success="right" for="orangeForm-email">Department</label>
                 </div>

                 <select class="browser-default custom-select custom-select-lg mb-3">
                     <option selected>Year</option>
                     <option value="1">First</option>
                     <option value="2">Second</option>
                     <option value="3">Third</option>
                     <option value="3">Fourth</option>
                 </select>

                 <div class="md-form mb-5">
                     <i class="fas fa-envelope prefix grey-text"></i>
                     <input type="text" id="orangeForm-name" class="form-control validate">
                     <label data-error="wrong" data-success="right" for="orangeForm-email">Nationality</label>
                 </div>
                 <div class="md-form mb-5">
                     <i class="fas fa-envelope prefix grey-text"></i>
                     <input type="number" id="orangeForm-name" class="form-control validate">
                     <label data-error="wrong" data-success="right" for="orangeForm-email">Contact No : </label>
                 </div>


             </div>
             <div class="modal-footer d-flex justify-content-center">
                 <button class="btn btn-deep-orange">Sign up</button>
             </div>
         </div>
     </div>
 </div>

 <!-- <div class="text-center">
     <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Launch
         Modal Register Form</a>
 </div> -->

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
 <!--Modal: Login with Avatar Form-->

 <!-- <div class="text-center">
     <a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#modalLoginAvatar">Launch
         Modal Login with Avatar</a>
 </div> -->
