<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--  -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <link rel="stylesheet" href="{{ asset('/Home/css/icofont.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/home.css')}}">

    <title>Quiz</title>

    <link rel="icon" type="image/png" href="{{ asset('/Home/img/logo.png')}}">
</head>

<body>
    <!-- Start Preloader Area -->
    <div class="preloader-area">
        <div class="lds-hourglass"></div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Navbar Area -->
    <header id="header">
        <div class="crake-mobile-nav">
            <div class="logo d-flex" style="top: 0;left: 0; ">
                <img src="{{ asset('/Home/img/logo.png')}}" alt="logo" class="w-25 ">
            </div>
        </div>

        <div class="crake-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html"><img class="img-fluid w-25"
                            src="{{ asset('/Home/img/logo.png')}}" alt="logo"></a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarپشتیبانیedContent">
                        <ul class="navbar-nav nav ml-auto">
                            @if (Route::has('login'))
                            @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.index') }}">پروفایل</a>
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">ورود وثبت نام</a>
                            </li>
                            @endauth
                            @endif
                            <li class="nav-item">
                                <a href="contact-us.html" class="nav-link">تماس</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

    </header>
    <!-- End Navbar Area -->

    <!-- Start SaaS Main Banner -->
    <div class="main-banner saas-home">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row h-100 justify-content-center align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="saas-image">
                                <img src="{{ asset('/Home/img/saas-shape/arrow.png')}}" class="wow fadeInDown"
                                    data-wow-delay="0.6s" alt="arrow">
                                <img src="{{ asset('/Home/img/saas-shape/box1.png')}}" class="wow fadeInUp"
                                    data-wow-delay="0.6s" alt="box1">
                                <img src="{{ asset('/Home/img/saas-shape/boy1.png')}}" class="wow fadeInLeft"
                                    data-wow-delay="0.6s" alt="boy1">
                                <img src="{{ asset('/Home/img/saas-shape/boy2.png')}}" class="wow zoomIn"
                                    data-wow-delay="0.6s" alt="boy2">
                                <img src="{{ asset('/Home/img/saas-shape/boy3.png')}}" class="wow bounceIn"
                                    data-wow-delay="0.6s" alt="boy3">
                                <img src="{{ asset('/Home/img/saas-shape/digital-screen.png')}}" class="wow fadeInDown"
                                    data-wow-delay="0.6s" alt="digital-screen">
                                <img src="{{ asset('/Home/img/saas-shape/filter1.png')}}" class="wow zoomIn"
                                    data-wow-delay="0.6s" alt="filter1">
                                <img src="{{ asset('/Home/img/saas-shape/filter2.png')}}" class="wow fadeInUp"
                                    data-wow-delay="0.6s" alt="filter2">
                                <img src="{{ asset('/Home/img/saas-shape/filter3.png')}}" class="wow rotateIn"
                                    data-wow-delay="0.6s" alt="filter3">
                                <img src="{{ asset('/Home/img/saas-shape/girl1.png')}}" class="wow fadeInUp"
                                    data-wow-delay="0.6s" alt="girl1">
                                <img src="{{ asset('/Home/img/saas-shape/girl2.png')}}" class="wow zoomIn"
                                    data-wow-delay="0.6s" alt="girl2">
                                <img src="{{ asset('/Home/img/saas-shape/monitor.png')}}" class="wow zoomIn"
                                    data-wow-delay="0.6s" alt="monitor">

                                <img src="{{ asset('/Home/img/saas-shape/main-image.png')}}" class="wow zoomIn"
                                    data-wow-delay="0.6s" alt="main-image.png')}}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="hero-content pl-4">
                                <h1>سلام گلهای تو خونه محصل های نمونه</h1>
                                <p>شور و شوق ما به کار سخت و ارائه نتایج عالی است. این می تواند نیازهای مشتریان خود را
                                    حل کند و نوآوری
                                    را توسعه دهد.</p>
                                <a href="#" class="btn btn-primary">شروع کنید</a>
                                <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="video-btn popup-youtube">
                                    تماشای ویدیو <i class="icofont-play-alt-3"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-gray shape-1"></div>
        <div class="shape1"><img src="{{ asset('/Home/img/shape1.png')}}" alt="img"></div>
        <div class="shape2"><img src="{{ asset('/Home/img/shape2.png')}}" alt="img"></div>
        <div class="shape3"><img src="{{ asset('/Home/img/shape3.png')}}" alt="img"></div>
        <div class="shape4 rotateme"><img src="{{ asset('/Home/img/shape4.png')}}" alt="img"></div>
    </div>
    <!-- End SaaS Main Banner -->

    <!-- Start شروع به کار Area -->
    <section class="get-started ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>شروع به کار رایگان</h2>
                <div class="bar"></div>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
            </div>

            <div class="get-started-form">

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" placeholder="نام " autocomplete="name" required>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" class="form-control @error('family') is-invalid @enderror"
                                    name="family" value="{{ old('family') }}" placeholder="نام خانوادگی"
                                    autocomplete="family" required>
                                @error('family')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="رمز عبور"
                                    required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="password" name="password_confirmation" class="form-control"
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

        <canvas id="canvas"></canvas>
    </section>
    <!-- End شروع به کار Area -->

    <!-- Start Join Area -->
    <section class="join-area ptb-100">
        <div class="container">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="join-img">
                        <img src="{{ asset('/Home/img/3.png')}}" alt="img">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="join-content">
                        <span>شروع آزمایشی رایگان 30 روزه</span>
                        <h3>به طور کلی 400K + مشتریان ما! لطفا شروع کنید</h3>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            لورم ایپسوم
                            متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                        <a href="#" class="btn btn-primary">هم اکنون وارد شوید</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Join Area -->


    <!-- Start Footer Area -->
    <footer class="footer-area ptb-100 pb-0 bg-image">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <p>برنامه روزانه، هفته یا ماه را پیش ببرید و وضعیت پروژه را در یک نگاه ببینید. جستجو و فیلتر
                            برای تمرکز بر
                            روی هر چیزی یک پروژه واحد فردی.</p>

                        <ul class="social-list">
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                            <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget pl-5">
                        <h3>شرکت</h3>

                        <ul class="list">
                            <li><a href="#">درباره</a></li>
                            <li><a href="#">شغل ها</a></li>
                            <li><a href="#">جوایز</a></li>
                            <li><a href="#">برنامه کاربر</a></li>
                            <li><a href="#">مکان ها</a></li>
                            <li><a href="#">ورود</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <h3>محصولات</h3>

                        <ul class="list">
                            <li><a href="#">یکپارچگی</a></li>
                            <li><a href="#">شناسه</a></li>
                            <li><a href="#">قیمت</a></li>
                            <li><a href="#">مستندات</a></li>
                            <li><a href="#">ثبت نام</a></li>
                            <li><a href="#">یادداشتها</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <h3>پشتیبانی</h3>

                        <ul class="list">
                            <li><a href="#">درباره</a></li>
                            <li><a href="#">تماس</a></li>
                            <li><a href="#">گفت و گو</a></li>
                            <li><a href="#">مطبوعات</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright-area">
            <div class="container">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <p>کپی رایت @ 2019 webzad. تمام حقوق محفوظ است.</p>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <ul>
                            <li><a href="#">شرایط و ضوابط</a></li>
                            <li><a href="#">سیاست حفظ حریم خصوصی</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Area -->

    <!-- Back Top top -->
    <div class="back-to-top">بالا</div>
    <!-- End Back Top top -->

    <script src="{{ asset('/js/home.js')}}"></script>
</body>

</html>
