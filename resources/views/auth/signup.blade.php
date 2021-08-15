@extends('layouts.main')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">

            <div class="card card-authentication1 mx-auto my-4">
                <div class="card-body">
                 <div class="card-content p-2">
                     <div class="text-center">
                         <img src="assets/images/logo-icon.png" alt="logo icon">
                     </div>
                  <div class="card-title text-uppercase text-center py-3">Sign Up</div>
                    <form action="{{ route('auth_signup_proceed') }}" method="post">
                        @csrf
                      <div class="form-group">
                      <label for="exampleInputName" class="sr-only">Name</label>
                       <div class="position-relative has-icon-right">
                          <input type="text" id="exampleInputName" class="form-control input-shadow" placeholder="Enter Your Name" name="name" required>
                          <div class="form-control-position">
                              <i class="icon-user"></i>
                          </div>
                       </div>
                      </div>
                      <div class="form-group">
                      <label for="exampleInputEmailId" class="sr-only">Email ID</label>
                       <div class="position-relative has-icon-right">
                          <input type="text" id="exampleInputEmailId" class="form-control input-shadow" placeholder="Enter Your Email ID" name="email" required>
                          <div class="form-control-position">
                              <i class="icon-envelope-open"></i>
                          </div>
                       </div>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword" class="sr-only">Mobile</label>
                        <div class="position-relative has-icon-right">
                           <input type="text" id="exampleInputPassword" class="form-control input-shadow" placeholder="Choose Password" name="mobile">
                           <div class="form-control-position">
                               <i class="icon-lock"></i>
                           </div>
                        </div>
                       </div>


                      <div class="form-group">
                       <label for="exampleInputPassword" class="sr-only">Password</label>
                       <div class="position-relative has-icon-right">
                          <input type="text" id="exampleInputPassword" class="form-control input-shadow" placeholder="Choose Password" name="password">
                          <div class="form-control-position">
                              <i class="icon-lock"></i>
                          </div>
                       </div>
                      </div>

                     <input type="submit" class="btn btn-primary btn-block waves-effect waves-light">Sign Up</button>
                      <div class="text-center mt-3">Sign Up With</div>

                     </form>
                   </div>
                  </div>
                  <div class="card-footer text-center py-3">
                    <p class="text-dark mb-0">Already have an account? <a href="authentication-signin.html"> Sign In here</a></p>
                  </div>
                 </div>



        </div>
    </div>

@endsection
