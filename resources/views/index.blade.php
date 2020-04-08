<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--  -->

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap Min CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- IcoFont Min CSS -->
	<link rel="stylesheet" href="assets/css/icofont.min.css">
	<!-- Meanmenu Min CSS -->
	<link rel="stylesheet" href="assets/css/meanmenu.css">
	<!-- Magnific Popup Min CSS -->
	<link rel="stylesheet" href="assets/css/magnific-popup.min.css">
	<!-- Owl Carousel Min CSS -->
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<!-- NiceSelect Min CSS -->
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="assets/css/responsive.css">

	<title>کراک - SaaS صفحه لندینگ</title>

	<link rel="icon" type="image/png" href="assets/img/favicon.png">
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
			@if (Route::has('login'))
			<div class="top-right links">
				@auth
				<a href="{{ url('/home') }}">پروفایل</a>
				@else
				<a href="{{ route('login') }}">ورود</a>
                        {{--
				@if (Route::has('register'))
				<a href="{{ route('register') }}">ثبت نام</a>
				@endif --}}
				@endauth
			</div>
			@endif
		</div>

		<div class="crake-nav">
			<div class="container">
				<nav class="navbar navbar-expand-md navbar-light">
					@if (Route::has('login'))
					<div class="top-right links">
						@auth
						<a href="{{ url('/home') }}">پروفایل</a>
						@else
						<a href="{{ route('login') }}">ورود</a>

						{{-- @if (Route::has('register'))
						<a href="{{ route('register') }}">ثبت نام</a>
						@endif --}}
						@endauth
					</div>
					@endif
					<div class="collapse navbar-collapse mean-menu" id="navbarپشتیبانیedContent">
						<ul class="navbar-nav nav ml-auto">
							<li class="nav-item"><a href="#" class="nav-link">خانه</a>
								<ul class="dropdown_menu">
									<li><a href="index.html">صفحه لندینگ SaaS </a></li>
									<li><a href="index-2.html">صفحه لندینگ اپ</a></li>
									<li><a href="index-3.html">بازاریابی دیجیتال</a></li>
									<li><a href="index-4.html">صفحه لندینگ محصول</a></li>
									<li><a href="index-5.html">صفحه لندینگ نرم افزار</a></li>
									<li><a href="index-6.html">صفحه لندینگ کتاب</a></li>
									<li><a href="index-7.html">استارت آپ آژانسی</a></li>
									<li><a href="index-8.html">فرایند پرداخت</a></li>
								</ul>
							</li>

							<li class="nav-item"><a href="#" class="nav-link active">صفحات</a>
								<ul class="dropdown_menu">
									<li class="nav-item"><a href="#" class="nav-link active">درباره</a>
										<ul class="dropdown_menu">
											<li><a href="about-1.html" class="active">درباره ما 1</a></li>
											<li><a href="about-2.html">درباره ما 2</a></li>
										</ul>
									</li>

									<li><a href="features.html">ویژگی ها</a></li>

									<li><a href="services.html">خدمات</a></li>

									<li><a href="gallery.html">گالری</a></li>

									<li class="nav-item"><a href="#" class="nav-link">تیم</a>
										<ul class="dropdown_menu">
											<li><a href="team-1.html">تیم 1</a></li>
											<li><a href="team-2.html">تیم 2</a></li>
										</ul>
									</li>

									<li class="nav-item"><a href="#" class="nav-link">قیمت</a>
										<ul class="dropdown_menu">
											<li><a href="pricing-1.html">قیمت 1</a></li>
											<li><a href="pricing-2.html">قیمت 2</a></li>
											<li><a href="pricing-3.html">قیمت 3</a></li>
										</ul>
									</li>

									<li class="nav-item"><a href="#" class="nav-link">نمونه کار</a>
										<ul class="dropdown_menu">
											<li><a href="project-1.html">نمونه کارها 2 ستون</a></li>
											<li><a href="project-2.html">نمونه کارها 3 ستون</a></li>
											<li><a href="project-3.html">نمونه کارها 4 ستون گسترده</a></li>
											<li><a href="single-project.html">جزئیات نمونه کار</a></li>
										</ul>
									</li>

									<li class="nav-item"><a href="#" class="nav-link">فروشگاه</a>
										<ul class="dropdown_menu">
											<li><a href="shop-1.html">فروشگاه 1</a></li>
											<li><a href="shop-2.html">فروشگاه 2</a></li>
											<li><a href="shop-details.html">جزئیات فروشگاه</a></li>
											<li><a href="cart.html">سبد خرید</a></li>
											<li><a href="checkout.html">بررسی</a></li>
										</ul>
									</li>

									<li class="nav-item"><a href="#" class="nav-link">بلاگ</a>
										<ul class="dropdown_menu">
											<li><a href="blog-1.html">بلاگ 1</a></li>
											<li><a href="blog-2.html">بلاگ 2</a></li>
											<li><a href="single-blog.html">جزئیات بلاگ</a></li>
										</ul>
									</li>

									<li><a href="login.html">ورود</a></li>
									<li><a href="signup.html">ثبت نام</a></li>
									<li><a href="coming-soon.html">به زودی</a></li>
									<li><a href="error.html">404 خطای</a></li>
									<li><a href="faq.html">گفت و گو</a></li>
								</ul>
							</li>

							<li class="nav-item"><a href="#" class="nav-link">نمونه کار</a>
								<ul class="dropdown_menu">
									<li><a href="project-1.html">نمونه کارها 2 ستون</a></li>
									<li><a href="project-2.html">نمونه کارها 3 ستون</a></li>
									<li><a href="project-3.html">نمونه کارها 4 ستون گسترده</a></li>
									<li><a href="single-project.html">جزئیات نمونه کار</a></li>
								</ul>
							</li>

							<li class="nav-item"><a href="#" class="nav-link">بلاگ</a>
								<ul class="dropdown_menu">
									<li><a href="blog-1.html">بلاگ 1</a></li>
									<li><a href="blog-2.html">بلاگ 2</a></li>
									<li><a href="single-blog.html">جزئیات بلاگ</a></li>
								</ul>
							</li>

							<li class="nav-item"><a href="#" class="nav-link">فروشگاه</a>
								<ul class="dropdown_menu">
									<li><a href="shop-1.html">فروشگاه 1</a></li>
									<li><a href="shop-2.html">فروشگاه 2</a></li>
									<li><a href="shop-details.html">جزئیات فروشگاه</a></li>
									<li><a href="cart.html">سبد خرید</a></li>
									<li><a href="checkout.html">بررسی</a></li>
								</ul>
							</li>

							<li class="nav-item"><a href="contact-us.html" class="nav-link">تماس</a></li>
						</ul>
					</div>
					<div class="mr-auto others-option">
						<ul class="navbar-nav">
							<li class="nav-item cart-wrapper">
								<a href="#">
									<i class="icofont-shopping-cart cart-icon"></i>

									<span>0</span>
								</a>
							</li>
							<li class="header-search-box">
								<a href="#header-search" title="Search">
									<i class="icofont-search-2"></i>
								</a>
							</li>
							<li data-toggle="modal" data-target="#myModal2">
								<div class="side-menu">
									<span class="bar-1"></span>
									<span class="bar-2"></span>
									<span class="bar-3"></span>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</header>
	<!-- End Navbar Area -->

	<!-- Start Sidebar Modal -->
	<div class="sidebar-modal">
		<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i
									class="icofont-close"></i></span></button>

						<h2 class="modal-title" id="myModalLabel2"><a href="index.html"><img src="assets/img/logo.png"
									alt="logo"></a></h2>
					</div>

					<div class="modal-body">
						<div class="sidebar-modal-widget">
							<h3 class="title">لینک های اضافی</h3>

							<ul>
								<li><a href="#">ورود</a></li>
								<li><a href="#">ثبت نام</a></li>
								<li><a href="#">گفت و گو</a></li>
								<li><a href="#">خروج</a></li>
							</ul>
						</div>

						<div class="sidebar-modal-widget">
							<h3 class="title">اطلاعات تماس</h3>

							<ul class="contact-info">
								<li>
									<i class="icofont-google-map"></i>
									آدرس
									<span>کالیفرنیا/ ساختمان علارور</span>
								</li>
								<li>
									<i class="icofont-email"></i>
									ایمیل
									<span>admin@crake.com</span>
								</li>
								<li>
									<i class="icofont-phone"></i>
									تلفن
									<span>+123 456 7890</span>
								</li>
							</ul>
						</div>

						<div class="sidebar-modal-widget">
							<h3 class="title">ارتباط با ما</h3>

							<ul class="social-list">
								<li><a href="#"><i class="icofont-facebook"></i></a></li>
								<li><a href="#"><i class="icofont-twitter"></i></a></li>
								<li><a href="#"><i class="icofont-instagram"></i></a></li>
								<li><a href="#"><i class="icofont-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div><!-- modal-content -->
			</div><!-- modal-dialog -->
		</div><!-- modal -->
	</div>
	<!-- End Sidebar Modal -->

	<!-- Start Search Box -->
	<div id="header-search" class="header-search">
		<button type="button" class="close">×</button>
		<form class="header-search-form">
			<input type="search" value="" placeholder="همینجا تایپ کنید........" />
			<button type="submit" class="btn btn-primary">جستجو</button>
		</form>
	</div>
	<!-- End Search Box -->

	<!-- Start SaaS Main Banner -->
	<div class="main-banner saas-home">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="row h-100 justify-content-center align-items-center">
						<div class="col-lg-6 col-md-12">
							<div class="saas-image">
								<img src="assets/img/saas-shape/arrow.png" class="wow fadeInDown" data-wow-delay="0.6s" alt="arrow">
								<img src="assets/img/saas-shape/box1.png" class="wow fadeInUp" data-wow-delay="0.6s" alt="box1">
								<img src="assets/img/saas-shape/boy1.png" class="wow fadeInLeft" data-wow-delay="0.6s" alt="boy1">
								<img src="assets/img/saas-shape/boy2.png" class="wow zoomIn" data-wow-delay="0.6s" alt="boy2">
								<img src="assets/img/saas-shape/boy3.png" class="wow bounceIn" data-wow-delay="0.6s" alt="boy3">
								<img src="assets/img/saas-shape/digital-screen.png" class="wow fadeInDown" data-wow-delay="0.6s"
									alt="digital-screen">
								<img src="assets/img/saas-shape/filter1.png" class="wow zoomIn" data-wow-delay="0.6s" alt="filter1">
								<img src="assets/img/saas-shape/filter2.png" class="wow fadeInUp" data-wow-delay="0.6s" alt="filter2">
								<img src="assets/img/saas-shape/filter3.png" class="wow rotateIn" data-wow-delay="0.6s" alt="filter3">
								<img src="assets/img/saas-shape/girl1.png" class="wow fadeInUp" data-wow-delay="0.6s" alt="girl1">
								<img src="assets/img/saas-shape/girl2.png" class="wow zoomIn" data-wow-delay="0.6s" alt="girl2">
								<img src="assets/img/saas-shape/monitor.png" class="wow zoomIn" data-wow-delay="0.6s" alt="monitor">

								<img src="assets/img/saas-shape/main-image.png" class="wow zoomIn" data-wow-delay="0.6s"
									alt="main-image.png">
							</div>
						</div>

						<div class="col-lg-6 col-md-12">
							<div class="hero-content pl-4">
								<h1>استراتژی کسب و کار خود را در یک مکان حرفه ای مدیریت کنید</h1>
								<p>شور و شوق ما به کار سخت و ارائه نتایج عالی است. این می تواند نیازهای مشتریان خود را حل کند و نوآوری
									را توسعه دهد.</p>
								<a href="#" class="btn btn-primary">شروع کنید</a>
								<a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="video-btn popup-youtube"> تماشای ویدیو <i
										class="icofont-play-alt-3"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="bg-gray shape-1"></div>
		<div class="shape1"><img src="assets/img/shape1.png" alt="img"></div>
		<div class="shape2"><img src="assets/img/shape2.png" alt="img"></div>
		<div class="shape3"><img src="assets/img/shape3.png" alt="img"></div>
		<div class="shape4 rotateme"><img src="assets/img/shape4.png" alt="img"></div>
	</div>
	<!-- End SaaS Main Banner -->

	<!-- Start Join Area -->
	<section class="join-area ptb-100">
		<div class="container">
			<div class="row h-100 justify-content-center align-items-center">
				<div class="col-lg-6 col-md-6">
					<div class="join-img">
						<img src="assets/img/3.png" alt="img">
					</div>
				</div>

				<div class="col-lg-6 col-md-6">
					<div class="join-content">
						<span>شروع آزمایشی رایگان 30 روزه</span>
						<h3>به طور کلی 400K + مشتریان ما! لطفا شروع کنید</h3>
						<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. لورم ایپسوم
							متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
						<a href="#" class="btn btn-primary">هم اکنون وارد شوید</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Join Area -->

	{{-- <!-- Start Work Process Area -->
	<section class="saas-work-process ptb-100">
		<div class="container">
			<div class="section-title">
				<h2>فرآیند کار</h2>
				<div class="bar"></div>
				<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
			</div>

			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="single-work-process">
						<div class="icon">
							<i class="icofont-calendar"></i>
						</div>
						<h3>پلن</h3>
						<p>بهترین قیمت ها را از ما بخواهید</p>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="single-work-process">
						<div class="icon">
							<i class="icofont-code-alt"></i>
						</div>
						<h3>توسعه</h3>
						<p>بهترین قیمت ها را از ما بخواهید</p>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="single-work-process">
						<div class="icon">
							<i class="icofont-server"></i>
						</div>
						<h3>اجرا</h3>
						<p>بهترین قیمت ها را از ما بخواهید</p>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="single-work-process">
						<div class="icon">
							<i class="icofont-check"></i>
						</div>
						<h3>گزارش</h3>
						<p>بهترین قیمت ها را از ما بخواهید</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Work Process Area --> --}}

	<!-- Start شروع به کار Area -->
	<section class="get-started ptb-100">
		<div class="container">
			<div class="section-title">
				<h2>شروع به کار رایگان</h2>
				<div class="bar"></div>
				<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
			</div>

			<div class="get-started-form">
				<form>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="نام">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" placeholder="ایمیل">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="رمز عبور">
					</div>
					<button type="submit" class="btn btn-primary">ثبت نام کردن</button>
					<p>و یا استفاده شما <a href="#">از حساب فیس بوک</a></p>
				</form>
			</div>
		</div>

		<canvas id="canvas"></canvas>
	</section>
	<!-- End شروع به کار Area -->

	<!-- Start Footer Area -->
	<footer class="footer-area ptb-100 pb-0 bg-image">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="single-footer-widget">
						<a href="#" class="logo"><img src="assets/img/logo2.png" alt="logo2"></a>
						<p>برنامه روزانه، هفته یا ماه را پیش ببرید و وضعیت پروژه را در یک نگاه ببینید. جستجو و فیلتر برای تمرکز بر
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
						<p>کپی رایت @ 2019 کراک. تمام حقوق محفوظ است.</p>
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

	<!-- Jquery Min JS -->
	<script src="assets/js/jquery.min.js"></script>
	<!-- Popper Min JS -->
	<script src="assets/js/popper.min.js"></script>
	<!-- Bootstrap Min JS -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Canvas Min JS -->
	<script src="assets/js/canvas.min.js"></script>
	<!-- Meanmenu Min JS -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- WOW Min JS -->
	<script src="assets/js/wow.min.js"></script>
	<!-- Tilt Min JS -->
	<script src="assets/js/tilt.jquery.min.js"></script>
	<!-- Magnific Popup Min JS -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- Owl Carousel Min JS -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- Waypoints Min Js -->
	<script src="assets/js/waypoints.min.js"></script>
	<!-- Jquery CounterUp Min JS -->
	<script src="assets/js/jquery.counterup.min.js"></script>
	<!-- NiceSelect Min Js -->
	<script src="assets/js/jquery.nice-select.min.js"></script>
	<!-- ajaxChimp Min JS -->
	<script src="assets/js/jquery.ajaxchimp.min.js"></script>
	<!-- Form Validator Min JS -->
	<script src="assets/js/form-validator.min.js"></script>
	<!-- Contact Form Min JS -->
	<script src="assets/js/contact-form-script.js"></script>
	<!-- Main JS -->
	<script src="assets/js/main.js"></script>
</body>

</html>

