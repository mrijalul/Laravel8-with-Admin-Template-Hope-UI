@extends('layouts.guest')

@section('content')
<div class="col-md-6">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card">
			<div class="card-body">
				<a href="#" class="navbar-brand d-flex align-items-center mb-3">
					<!--Logo start-->
					<div class="logo-main">
						<div class="logo-normal">
							<svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
								<rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
								<rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
								<rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
							</svg>
						</div>
						<div class="logo-mini">
							<svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
								<rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
								<rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
								<rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
							</svg>
						</div>
					</div>
					<!--logo End-->
					<h4 class="logo-title ms-3">Hope UI</h4>
				</a>
				<p class="text-center">{{ __('Login') }} to stay connected.</p>
				{{ Form::open(['route'=>'login']) }}
					<div class="row">
						<div class="col-lg-12">
							<div class="form-group">
								{{ Form::label('email','Email',['class'=>'form-label']) }}
								{{ Form::email('email',old('email'),['class'=>'form-control'. ($errors->has('email') ? ' is-invalid' : null),'id'=>'email','class'=>'form-control','aria-describedby'=>'email','placeholder'=>'Email','required','autocomplete'=>'email','autofocus']) }}
								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								{{ Form::label('password','Password',['class'=>'form-label']) }}
									{{ Form::password('password',['class'=>'form-control'. ($errors->has('password') ? ' is-invalid' : null),'id'=>'password','class'=>'form-control','aria-describedby'=>'password','placeholder'=>'Password', 'required','autocomplete'=>'current-password']) }}
							</div>
							@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="col-lg-12 d-flex justify-content-between">
							<div class="form-check mb-3">
								<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
								<label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
							</div>
						</div>
					</div>
					<div class="d-flex justify-content-center">
						<button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
					</div>
				{{ Form::close() }}
				</div>
			</div> 
		</div>
	</div>
</div>
<div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
	<img src="{{ asset('assets/images/auth/01.png') }}" class="img-fluid gradient-main animated-scaleX" alt="images">
</div>
@endsection
