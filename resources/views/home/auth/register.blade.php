@extends('home.auth.layouts.app')

@section('content')

<!-- Start Login Area -->
<section class="login-area ptb-100">
    <div class="container">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="login-image ">
                    <img class="img-fluid" src="assets/img/marketing.png" alt="image">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="login-form text-right">
                    <h3>خوش آمدید!</h3>
                    <p>حساب کاربری برای خود بسازید
                    </p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('user_name') is-invalid @enderror"
                                        name="user_name" value="{{ old('user_name') }}" placeholder="نام کاربری" required
                                        autocomplete="user_name" autofocus>
                                    @error('user_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('family') is-invalid @enderror"
                                        name="family" value="{{ old('family') }}" placeholder="نام خانوادگی" required
                                        autocomplete="family" >
                                    @error('family')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('father_name') is-invalid @enderror"
                                        name="father_name" value="{{ old('father_name') }}" placeholder="نام پدر" required
                                        autocomplete="father_name" >
                                    @error('father_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="number" class="form-control @error('nationalCode') is-invalid @enderror"
                                        name="nationalCode" value="{{ old('nationalCode') }}" placeholder="کد ملی" required
                                        autocomplete="nationalCode" >
                                    @error('nationalCode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="number" class="form-control @error('mobile') is-invalid @enderror"
                                        name="mobile" value="{{ old('mobile') }}" placeholder="شماره همراه ولی" required
                                        autocomplete="mobile" >
                                    @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div> --}}
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" placeholder="ایمیل" required
                                        autocomplete="email" >
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                                        placeholder="رمز عبور" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="password" name="password_confirmation"  class="form-control"
                                        placeholder="تکرار رمز عبور " required autocomplete="current-password">

                                </div>
                            </div>


                            <div class="col-lg-12 m-2">
                                <button type="submit" class="btn btn-primary mb-2">هم اکنون ثبت نام کنید!</button>
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
