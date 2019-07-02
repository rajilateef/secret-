@extends('layouts.website')
@section('content')
<section>
      <div class="container h-100">
        <div class="row align-items-center h-100">
          <div class="col-sm-8 col-md-6 col-lg-4 mx-auto">
            <div class="card">
                <div class="card-header text-center">REGISTER</div>
                <div class="card-body">
                
            <form method="POST" action="/signup">
            @csrf
                <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6 col-sm-12">
                    <div class="form-label-group">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="First Name" required autocomplete="name" autofocus>
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="form-label-group">
                      <input type="text" id="lastName" class="form-control" placeholder="Last name">
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                  <input type="email" id="inputEmail" class="form-control" placeholder="Email address"  name="email" required="required">
                  
                </div>
              </div>
              <div class="form-group">
                <div class="form-label-group">
                  <input type="number" id="Phone" class="form-control" placeholder="Phone Number" name="number" required="required">
                  
                </div>
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6 col-sm-12">
                    <div class="form-label-group">
                      
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
               </span>
                @enderror   
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-label-group">
                      
                      <input id="password-confirm" type="password" class="form-control" placeholder="Confirm password" name="password_confirmation" required autocomplete="new-password">
                    </div>
                  </div>
                </div>
              </div>
              <!-- <button type="submit" class="btn btn-primary">
                                    
                                </button> -->
              <button type="submit" class="btn btn-primary btn-block" style="cursor:pointer">{{ __('Register') }}</button>
            </form>
            <div class="text-center">
              <a class="d-block small mt-3" href="{{url('/')}}">Login Page</a>
              <a class="d-block small" href="{{url('forgot_password')}}">Forgot Password?</a>
           </div>
            </div>
          </div>
        </div>
      </div>
    @endsection