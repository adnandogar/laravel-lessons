@extends('layouts.main')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">

            <div class="card card-authentication1 mx-auto my-5">
                <div class="card-body">
                 <div class="card-content p-2">
                     <div class="text-center">
                         <img src="assets/images/logo-icon.png" alt="logo icon">
                     </div>
                  <div class="card-title text-uppercase text-center py-3">Sign In</div>
                    <form method="post" action="{{ route('auth_login_proceed') }}">
                        @csrf
                      <div class="form-group">
                      <label for="exampleInputUsername" class="sr-only">Username</label>
                       <div class="position-relative has-icon-right">
                          <input type="email" id="exampleInputUsername" class="form-control input-shadow" placeholder="Enter Username" name="email" required>
                          <div class="form-control-position">
                              <i class="icon-user"></i>
                          </div>
                       </div>
                      </div>
                      <div class="form-group">
                      <label for="exampleInputPassword" class="sr-only">Password</label>
                       <div class="position-relative has-icon-right">
                          <input type="password" id="exampleInputPassword" class="form-control input-shadow" placeholder="Enter Password" name="password" required>
                          <div class="form-control-position">
                              <i class="icon-lock"></i>
                          </div>
                       </div>
                      </div>
                    <div class="form-row">
                     <div class="form-group col-6">
                       <div class="icheck-material-primary">
                        <input type="checkbox" id="user-checkbox" checked="" />
                        <label for="user-checkbox">Remember me</label>
                      </div>
                     </div>
                     <div class="form-group col-6 text-right">
                      <a href="authentication-reset-password.html">Reset Password</a>
                     </div>
                    </div>
                     <input type="submit" class="btn btn-primary btn-block">Sign In</button>
                      <div class="text-center mt-3">Sign In With</div>

                     </form>
                   </div>
                  </div>
                  <div class="card-footer text-center py-3">
                    <p class="text-dark mb-0">Do not have an account? <a href="{{ route('auth_signup') }}"> Sign Up here</a></p>
                  </div>
                 </div>


        </div>
    </div>

@endsection

