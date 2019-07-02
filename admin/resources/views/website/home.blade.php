@extends('layouts.website')
@section('content')
<section>
		<div class="container h-100">
			<div class="row align-items-center h-100">
				<div class="col-sm-8 col-md-6 col-lg-4 mx-auto">
          <div class="card">
					<div class="card-header text-center">LOGIN</div>
						<div class="card-body">
						<form method="POST" action="/login">
						@csrf
								<div class="form-group">
									<div class="form-label-group">
										
										<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email address" value="{{ old('email') }}" required autocomplete="email" autofocus>

                         @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                         @enderror
									</div>
								</div>
								<div class="form-group">
									<div class="form-label-group">
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
										@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
									</div>
								</div>
								<div class="form-group">
									<div class="checkbox">
										<label>
										
										<input type="checkbox" value="remember-me">
                                        {{ __('Remember Password') }}
                    </label>
									</div>
								</div>
								<button class="btn btn-primary btn-block" type="submit">{{ __('Login') }}</button>
							</form>
							<div class="text-center">
								<a class="d-block small mt-3" href="{{url('signup')}}">Register an Account</a>
								@if (Route::has('forgot_password'))
								<a class="d-block small" href="{{url('forgot_password')}}">Forgot Password?</a>
								@endif
              </div>
              </div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>          
	@endsection