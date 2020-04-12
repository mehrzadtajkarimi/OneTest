@extends('home.user.layouts.app')

@section('content')
<div class="container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent">
            <li class="breadcrumb-item"><a href="{{ route('user.index') }}">خانه</a></li>
            <li class="breadcrumb-item active" aria-current="page"> پروفایل</li>
        </ol>
    </nav>


    <div class="row justify-content-center">
        <div class="col-md-12">

            <!-- Start Login Area -->
            <section class="login-area ptb-100">
                <div class="container">
                    <div class="row h-100 justify-content-center align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="login-image ">
                                <img class="img-fluid" src="/assets/img/marketing.png" alt="image">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="login-form text-right">
                                <h3>خوش آمدید!</h3>
                                <p>حساب کاربری خود را تکمیل کنید</p>

                                <form method="POST" action="{{ route('user.update',$user->id) }}">
                                    @method('PUT')
                                    @csrf
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control "disabled value="{{ $user->user_name }}">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control "disabled value="{{ $user->email }}">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text"
                                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                                    value="{{ old('name')?? $user->name }}" placeholder="نام" required
                                                    autocomplete="name">
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text"
                                                    class="form-control @error('family') is-invalid @enderror"
                                                    name="family" value="{{ old('family') ?? $user->family}}"
                                                    placeholder="نام خانوادگی" required autocomplete="family">
                                                @error('family')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text"
                                                    class="form-control @error('father_name') is-invalid @enderror"
                                                    name="father_name" value="{{ old('father_name')?? $user->father_name }}"
                                                    placeholder="نام پدر" required autocomplete="father_name">
                                                @error('father_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="number"
                                                    class="form-control @error('nationalCode') is-invalid @enderror"
                                                    name="nationalCode" value="{{ old('nationalCode')?? $user->nationalCode }}"
                                                    placeholder="کد ملی" required autocomplete="nationalCode">
                                                @error('nationalCode')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="number"
                                                    class="form-control @error('mobile') is-invalid @enderror"
                                                    name="mobile" value="{{ old('mobile')?? $user->mobile  }}"
                                                    placeholder="شماره همراه ولی" required autocomplete="mobile">
                                                @error('mobile')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea name="about" cols="30" rows="5" class="form-control "value="{{ old('about')?? $user->about}}"
                                                    placeholder="درباره خودتون چیزی بنویسید"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 m-2">
                                            <button type="submit" class="btn btn-primary mb-2">هم اکنون ثبت نام
                                                کنید!</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>e
            <!-- End Login Area -->



        </div>
    </div>
</div>

@endsection
