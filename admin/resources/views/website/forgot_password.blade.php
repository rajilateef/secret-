@extends('layouts.website')
@section('content')
    <section>
      <div class="container h-100">
        <div class="row align-items-center h-100">
          <div class="col-sm-8 col-md-6 col-lg-4 mx-auto">
            <div class="card">
                  <div class="card-header text-center">Reset Password</div>
                  <div class="card-body">
                    <div class="text-center mb-4">
                      <h4>Forgot your password?</h4>
                      <p>Enter your email address and we will send you instructions on how to reset your password.</p>
                    </div>
                    <form>
                      <div class="form-group">
                        <div class="form-label-group">
                          <input type="email" id="inputEmail" class="form-control" placeholder="Enter email address" required="required" autofocus="autofocus">
                          
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                    </form>
                    <div class="text-center">
                      <a class="d-block small mt-3" href="{{url('signup')}}">Register an Account</a>
                      <!-- <a class="d-block small" href="forgot_password.html">Forgot Password?</a> -->
                    </div> 
                  </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              </div>
    </section>          
    @endsection