@extends('home.user.layouts.app')

@section('content')



<!-- Start Login Area -->
<section class="login-area ptb-100">
	<div class="container">
		<div class="row h-100 justify-content-center align-items-center">
			<div class="col-lg-6 col-md-12">
				<div class="login-image ">
					<img class="img-fluid" src="home/img/marketing.png" alt="image">
				</div>
			</div>

			<div class="col-lg-6 col-md-12">
				<div class="login-form text-right">
					<h3>خوش آمدید!</h3>
					<p>لطفا وارد حساب کاربری خود شوید.</p>
					<form method="POST" action="{{ route('login') }}">
						@csrf
						<div class="row">
							<div class="col-lg-12">
								<div class="form-group">
									<input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
										value="{{ old('name') }}" placeholder="نام" required autocomplete="name" autofocus>
									@error('name')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>

							<div class="col-lg-12">
								<div class="form-group">
									<input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
										placeholder="رمز عبور" required autocomplete="current-password">
									@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-check">
									<label class="form-check-label pl-2" for="checkme">مرا به خاطر بسپار!</label>
									<input type="checkbox" name="remember" class="form-check-input" id="checkme"
										{{ old('remember') ? 'checked' : '' }}>
								</div>
							</div>

							<div class="col-lg-6 text-right">
								@if (Route::has('password.request'))
								<a class="btn btn-link" href="{{ route('password.request') }}">
									{{ __('رمز عبور خود را فرا موش کرده اید؟ ') }}
								</a>
								@endif
							</div>

							<div class="col-lg-12 m-2">
								<button type="submit" class="btn btn-primary mb-2">هم اکنون وارد شوید!</button>
								<br>
								<span>کاربر جدید هستید؟ <a href="{{ route('register') }}">ثبت نام کن!</a></span>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Login Area -->



@endsection
