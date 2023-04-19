@extends('layouts.guest')

@section('content')
<div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
	<img src="{{ asset('assets/images/auth/01.png') }}" class="img-fluid gradient-main animated-scaleX" alt="images">
</div>
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
				<h2 class="mb-2 text-center">{{ __('Register') }}</h2>
				<p class="text-center">Create your Hope UI account.</p>
				{{ Form::open([ 'route'=>'register']) }}
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								{{ Form::label('name','Name',['class'=>'form-label']) }}
								{{ Form::text('name',old('name'),['class'=>'form-control'. ($errors->has('name') ? ' is-invalid' : null),'placeholder'=>'Name','required','autocomplete'=>'name','autofocus']) }} 
								@error('name')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div class="col-lg-6">
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

						<div class="col-lg-6">
							<div class="form-group">
								{{ Form::label('password','Password',['class'=>'form-label']) }}
								{{ Form::password('password',['class'=>'form-control'. ($errors->has('password') ? ' is-invalid' : null),'id'=>'password','class'=>'form-control','aria-describedby'=>'password','placeholder'=>'Password', 'required','autocomplete'=>'new-password']) }}
								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								{{ Form::label('confirm-password','Confirm Password',['class'=>'form-label']) }}
								{{ Form::password('password_confirmation',['class'=>'form-control','id'=>'confirm-password','class'=>'form-control','aria-describedby'=>'password','placeholder'=>'Password', 'required','autocomplete'=>'new-password']) }}
							</div>
						</div>
						<div class="col-lg-12 d-flex justify-content-center">
						<div class="form-check mb-3">
							<input type="checkbox" class="form-check-input" id="customCheck1">
							<label class="form-check-label" for="customCheck1">I agree with the terms of use</label>
						</div>
						</div>
					</div>
					<div class="d-flex justify-content-center">
						<button type="submit" class="btn btn-primary">Sign Up</button>
					</div>
					<p class="text-center my-3">or sign in with other accounts?</p>
					<div class="d-flex justify-content-center">
						<ul class="list-group list-group-horizontal list-group-flush">
						<li class="list-group-item border-0 pb-0">
							<a href="#"><img src="{{ asset('assets/images/brands/fb.svg') }}" alt="fb"></a>
						</li>
						<li class="list-group-item border-0 pb-0">
							<a href="#"><img src="{{ asset('assets/images/brands/gm.svg') }}" alt="gm"></a>
						</li>
						<li class="list-group-item border-0 pb-0">
							<a href="#"><img src="{{ asset('assets/images/brands/im.svg') }}" alt="im"></a>
						</li>
						<li class="list-group-item border-0 pb-0">
							<a href="#"><img src="{{ asset('assets/images/brands/li.svg') }}" alt="li"></a>
						</li>
						</ul>
					</div>
					<p class="mt-3 text-center">
						Already have an Account <a href="sign-in.html" class="text-underline">Sign In</a>
					</p>
				{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
