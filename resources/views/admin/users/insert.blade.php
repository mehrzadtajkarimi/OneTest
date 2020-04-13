@component('admin.layouts.include.content' , ['title' => 'ایجاد کاربر'])

@slot('breadcrumb')
<li class="breadcrumb-item "><a href="{{ url('admin.panel') }}">پنل مدیریت</a></li>
<li class="breadcrumb-item "><a href="{{ route('admin.users.index') }}">لیست کاربران</a></li>
<li class="breadcrumb-item active">ایجاد کاربر</li>
@endslot

<div class="col-12">
    <div class="card">

        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{ route('admin.users.store') }}" method="POST">
            @csrf
            <div class="card-body">

                <div class="col-lg-12">
                    <div class="form-group">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            placeholder="ایمیل" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <input type="text" class="form-control @error('user_name') is-invalid @enderror"
                            name="user_name" placeholder="نام کاربری" required autocomplete="user_name">
                        @error('user_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            placeholder="نام" required autocomplete="name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <input type="text" class="form-control @error('family') is-invalid @enderror" name="family"
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
                        <input type="text" class="form-control @error('father_name') is-invalid @enderror"
                            name="father_name" placeholder="نام پدر" required autocomplete="father_name">
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
                            name="nationalCode" placeholder="کد ملی" required autocomplete="nationalCode">
                        @error('nationalCode')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <input type="number" class="form-control @error('mobile') is-invalid @enderror" name="mobile"
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
                        <input type="text" class="form-control @error('password') is-invalid @enderror" name="password"
                            placeholder="پسورد" required autocomplete="password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck2">
                            <label class="form-check-label" for="exampleCheck2">مرا به خاطر بسپار</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">ورود</button>
                <a href="{{ route('admin.users.index') }}" class="btn btn-default float-left">لغو</a>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>
</div>




@endcomponent
