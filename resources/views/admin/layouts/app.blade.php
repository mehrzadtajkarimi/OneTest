<!DOCTYPE html>
<html>

<head>
    @include('admin.layouts.include.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">خانه</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">تماس</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="جستجو"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav mr-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fa fa-comments-o"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 ml-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        حسام موسوی
                                        <span class="float-left text-sm text-danger"><i class="fa fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">با من تماس بگیر لطفا...</p>
                                    <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 ساعت قبل</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle ml-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        پیمان احمدی
                                        <span class="float-left text-sm text-muted"><i class="fa fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">من پیامتو دریافت کردم</p>
                                    <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 ساعت قبل</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle ml-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        سارا وکیلی
                                        <span class="float-left text-sm text-warning"><i class="fa fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">پروژه اتون عالی بود مرسی واقعا</p>
                                    <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i>4 ساعت قبل</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">مشاهده همه پیام‌ها</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell-o"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
                        <span class="dropdown-item dropdown-header">15 نوتیفیکیشن</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-envelope ml-2"></i> 4 پیام جدید
                            <span class="float-left text-muted text-sm">3 دقیقه</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-users ml-2"></i> 8 درخواست دوستی
                            <span class="float-left text-muted text-sm">12 ساعت</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-file ml-2"></i> 3 گزارش جدید
                            <span class="float-left text-muted text-sm">2 روز</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">مشاهده همه نوتیفیکیشن</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                            class="fa fa-th-large"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">پنل مدیریت</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar" style="direction: ltr">
                <div style="direction: rtl">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="https://www.gravatar.com/avatar/52f0fbcbedee04a121cba8dad1174462?s=200&d=mm&r=g"
                                class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">حسام موسوی</a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fa fa-dashboard"></i>
                                    <p>
                                        داشبوردها
                                        <i class="right fa fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="./index.html" class="nav-link active">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>داشبورد اول</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./index2.html" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>داشبورد دوم</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./index3.html" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>داشبورد سوم</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="pages/widgets.html" class="nav-link">
                                    <i class="nav-icon fa fa-th"></i>
                                    <p>
                                        ویجت‌ها
                                        <span class="right badge badge-danger">جدید</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-pie-chart"></i>
                                    <p>
                                        چارت‌ها
                                        <i class="right fa fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="pages/charts/chartjs.html" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>نمودار ChartJS</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/charts/flot.html" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>نمودار Flot</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/charts/inline.html" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>نمودار Inline</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-tree"></i>
                                    <p>
                                        اشیای گرافیکی
                                        <i class="fa fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="pages/UI/general.html" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>عمومی</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/UI/icons.html" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>آیکون‌ها</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/UI/buttons.html" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>دکمه‌ها</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/UI/sliders.html" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>اسلایدر‌ها</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-edit"></i>
                                    <p>
                                        فرم‌ها
                                        <i class="fa fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="pages/forms/general.html" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>اجزا عمومی</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/forms/advanced.html" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>پیشرفته</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/forms/editors.html" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>ویشرایشگر</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-table"></i>
                                    <p>
                                        جداول
                                        <i class="fa fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="pages/tables/simple.html" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>جداول ساده</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/tables/data.html" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>جداول داده</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-header">مثال‌ها</li>
                            <li class="nav-item">
                                <a href="pages/calendar.html" class="nav-link">
                                    <i class="nav-icon fa fa-calendar"></i>
                                    <p>
                                        تقویم
                                        <span class="badge badge-info right">2</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-envelope-o"></i>
                                    <p>
                                        ایمیل‌ باکس
                                        <i class="fa fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="pages/mailbox/mailbox.html" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>اینباکس</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/mailbox/compose.html" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>ایجاد</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/mailbox/read-mail.html" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>خواندن</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-book"></i>
                                    <p>
                                        صفحات
                                        <i class="fa fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="pages/examples/invoice.html" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>سفارشات</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/examples/profile.html" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>پروفایل</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/examples/login.html" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>صفحه ورود</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/examples/register.html" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>صفحه عضویت</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/examples/lockscreen.html" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>قفل صفحه</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-plus-square-o"></i>
                                    <p>
                                        بیشتر
                                        <i class="fa fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="pages/examples/404.html" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>ارور 404</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/examples/500.html" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>ارور 500</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/examples/blank.html" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>صفحه خالی</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="starter.html" class="nav-link">
                                            <i class="fa fa-circle-o nav-icon"></i>
                                            <p>صفحه شروع</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-header">متفاوت</li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-file"></i>
                                    <p>مستندات</p>
                                </a>
                            </li>
                            <li class="nav-header">برچسب‌ها</li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-circle-o text-danger"></i>
                                    <p class="text">مهم</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-circle-o text-warning"></i>
                                    <p>هشدار</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa fa-circle-o text-info"></i>
                                    <p>اطلاعات</p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">داشبورد</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-left">
                                <li class="breadcrumb-item"><a href="#">خانه</a></li>
                                <li class="breadcrumb-item active">داشبورد ورژن 2</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>150</h3>

                                    <p>سفارشات جدید</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">اطلاعات بیشتر <i
                                        class="fa fa-arrow-circle-left"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                                    <p>افزایش امتیاز</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">اطلاعات بیشتر <i
                                        class="fa fa-arrow-circle-left"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>44</h3>

                                    <p>کاربران ثبت شده</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">اطلاعات بیشتر <i
                                        class="fa fa-arrow-circle-left"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>65</h3>

                                    <p>بازدید جدید</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">اطلاعات بیشتر <i
                                        class="fa fa-arrow-circle-left"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-7 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card">
                                <div class="card-header d-flex p-0">
                                    <h3 class="card-title p-3">
                                        <i class="fa fa-pie-chart mr-1"></i>
                                        فروش
                                    </h3>
                                    <ul class="nav nav-pills mr-auto p-2">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#revenue-chart"
                                                data-toggle="tab">نمودار</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#sales-chart" data-toggle="tab">چارت</a>
                                        </li>
                                    </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content p-0">
                                        <!-- Morris chart - Sales -->
                                        <div class="chart tab-pane active" id="revenue-chart"
                                            style="position: relative; height: 300px;"></div>
                                        <div class="chart tab-pane" id="sales-chart"
                                            style="position: relative; height: 300px;"></div>
                                    </div>
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- DIRECT CHAT -->
                            <div class="card direct-chat direct-chat-primary">
                                <div class="card-header">
                                    <h3 class="card-title">گفتگو</h3>

                                    <div class="card-tools">
                                        <span data-toggle="tooltip" title="3 پیام جدید"
                                            class="badge badge-primary">3</span>
                                        <button type="button" class="btn btn-tool" data-widget="collapse">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-toggle="tooltip" title="مخاصبین"
                                            data-widget="chat-pane-toggle">
                                            <i class="fa fa-comments"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-widget="remove"><i
                                                class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <!-- Conversations are loaded here -->
                                    <div class="direct-chat-messages">
                                        <!-- Message. Default to the left -->
                                        <div class="direct-chat-msg">
                                            <div class="direct-chat-info clearfix">
                                                <span class="direct-chat-name float-left">حسام موسوی</span>
                                                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                            </div>
                                            <!-- /.direct-chat-info -->
                                            <img class="direct-chat-img" src="dist/img/user1-128x128.jpg"
                                                alt="message user image">
                                            <!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                                واقعا این قالب رایگانه ؟ قابل باور نیست
                                            </div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->

                                        <!-- Message to the right -->
                                        <div class="direct-chat-msg right">
                                            <div class="direct-chat-info clearfix">
                                                <span class="direct-chat-name float-right">سارا</span>
                                                <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                            </div>
                                            <!-- /.direct-chat-info -->
                                            <img class="direct-chat-img" src="dist/img/user3-128x128.jpg"
                                                alt="message user image">
                                            <!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                                بهتره اینو باور کنی :)
                                            </div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->

                                        <!-- Message. Default to the left -->
                                        <div class="direct-chat-msg">
                                            <div class="direct-chat-info clearfix">
                                                <span class="direct-chat-name float-left">حسام موسوی</span>
                                                <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                                            </div>
                                            <!-- /.direct-chat-info -->
                                            <img class="direct-chat-img" src="dist/img/user1-128x128.jpg"
                                                alt="message user image">
                                            <!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                                میخوام با این قالب یه اپلیکیشن باحال بزنم ؟‌ تو هم همکاری میکنی ؟
                                            </div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->

                                        <!-- Message to the right -->
                                        <div class="direct-chat-msg right">
                                            <div class="direct-chat-info clearfix">
                                                <span class="direct-chat-name float-right">سارا</span>
                                                <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                                            </div>
                                            <!-- /.direct-chat-info -->
                                            <img class="direct-chat-img" src="dist/img/user3-128x128.jpg"
                                                alt="message user image">
                                            <!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                                اره حتما
                                            </div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->

                                    </div>
                                    <!--/.direct-chat-messages-->

                                    <!-- Contacts are loaded here -->
                                    <div class="direct-chat-contacts">
                                        <ul class="contacts-list">
                                            <li>
                                                <a href="#">
                                                    <img class="contacts-list-img" src="dist/img/user1-128x128.jpg">

                                                    <div class="contacts-list-info">
                                                        <span class="contacts-list-name">
                                                            حسام موسوی
                                                            <small
                                                                class="contacts-list-date float-left">1397/10/01</small>
                                                        </span>
                                                        <span class="contacts-list-msg">تا حالا کجا بودی ؟‌من...</span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                            <li>
                                                <a href="#">
                                                    <img class="contacts-list-img" src="dist/img/user7-128x128.jpg">

                                                    <div class="contacts-list-info">
                                                        <span class="contacts-list-name">
                                                            سارا فرهانی
                                                            <small
                                                                class="contacts-list-date float-left">2/23/2015</small>
                                                        </span>
                                                        <span class="contacts-list-msg">تا حالا منتظر تو بودم...</span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                            <li>
                                                <a href="#">
                                                    <img class="contacts-list-img" src="dist/img/user3-128x128.jpg">

                                                    <div class="contacts-list-info">
                                                        <span class="contacts-list-name">
                                                            نکیسا کیانی
                                                            <small
                                                                class="contacts-list-date float-left">2/20/2015</small>
                                                        </span>
                                                        <span class="contacts-list-msg">پس بیشتر صبر کن تا
                                                            برگردم...</span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                            <li>
                                                <a href="#">
                                                    <img class="contacts-list-img" src="dist/img/user5-128x128.jpg">

                                                    <div class="contacts-list-info">
                                                        <span class="contacts-list-name">
                                                            رحمت موسوی
                                                            <small
                                                                class="contacts-list-date float-left">2/10/2015</small>
                                                        </span>
                                                        <span class="contacts-list-msg"> حالتون چطورههههه !...</span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                            <li>
                                                <a href="#">
                                                    <img class="contacts-list-img" src="dist/img/user6-128x128.jpg">

                                                    <div class="contacts-list-info">
                                                        <span class="contacts-list-name">
                                                            جکسون عبداللهی
                                                            <small
                                                                class="contacts-list-date float-left">1/27/2015</small>
                                                        </span>
                                                        <span class="contacts-list-msg">عالیییییییییی...</span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                            <li>
                                                <a href="#">
                                                    <img class="contacts-list-img" src="dist/img/user8-128x128.jpg">

                                                    <div class="contacts-list-info">
                                                        <span class="contacts-list-name">
                                                            کتایون ریحانی
                                                            <small
                                                                class="contacts-list-date float-left">1/4/2015</small>
                                                        </span>
                                                        <span class="contacts-list-msg">بیخیالش پیداش میکنم...</span>
                                                    </div>
                                                    <!-- /.contacts-list-info -->
                                                </a>
                                            </li>
                                            <!-- End Contact Item -->
                                        </ul>
                                        <!-- /.contacts-list -->
                                    </div>
                                    <!-- /.direct-chat-pane -->
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <input type="text" name="message" placeholder="Type Message ..."
                                                class="form-control">
                                            <span class="input-group-append">
                                                <button type="button" class="btn btn-primary">Send</button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card-footer-->
                            </div>
                            <!--/.direct-chat -->

                            <!-- TO DO List -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="ion ion-clipboard mr-1"></i>
                                        لیست کارها
                                    </h3>

                                    <div class="card-tools">
                                        <ul class="pagination pagination-sm">
                                            <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                                            <li class="page-item"><a href="#" class="page-link">1</a></li>
                                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                                            <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <ul class="todo-list">
                                        <li>
                                            <!-- drag handle -->
                                            <span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>
                                            <!-- checkbox -->
                                            <input type="checkbox" value="" name="">
                                            <!-- todo text -->
                                            <span class="text">طراحی یک قالب زیبا</span>
                                            <!-- Emphasis label -->
                                            <small class="badge badge-danger"><i class="fa fa-clock-o"></i> 2
                                                دقیقه</small>
                                            <!-- General tools such as edit or delete-->
                                            <div class="tools">
                                                <i class="fa fa-edit"></i>
                                                <i class="fa fa-trash-o"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>
                                            <input type="checkbox" value="" name="">
                                            <span class="text">رسپانسیو کردن قالب مورد نظر</span>
                                            <small class="badge badge-info"><i class="fa fa-clock-o"></i> 4 ساعت</small>
                                            <div class="tools">
                                                <i class="fa fa-edit"></i>
                                                <i class="fa fa-trash-o"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>
                                            <input type="checkbox" value="" name="">
                                            <span class="text">ارائه قالب برای استفاده بقیه</span>
                                            <small class="badge badge-warning"><i class="fa fa-clock-o"></i> 1
                                                روز</small>
                                            <div class="tools">
                                                <i class="fa fa-edit"></i>
                                                <i class="fa fa-trash-o"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>
                                            <input type="checkbox" value="" name="">
                                            <span class="text">بهینه سازی بخش های بوجود اومده</span>
                                            <small class="badge badge-success"><i class="fa fa-clock-o"></i> 3
                                                روز</small>
                                            <div class="tools">
                                                <i class="fa fa-edit"></i>
                                                <i class="fa fa-trash-o"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>
                                            <input type="checkbox" value="" name="">
                                            <span class="text">چک کردن پیام ها و نوتیفیکیشن ها</span>
                                            <small class="badge badge-primary"><i class="fa fa-clock-o"></i> 1
                                                هفته</small>
                                            <div class="tools">
                                                <i class="fa fa-edit"></i>
                                                <i class="fa fa-trash-o"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="handle">
                                                <i class="fa fa-ellipsis-v"></i>
                                                <i class="fa fa-ellipsis-v"></i>
                                            </span>
                                            <input type="checkbox" value="" name="">
                                            <span class="text">طراحی صفحه ایمیل جدید</span>
                                            <small class="badge badge-secondary"><i class="fa fa-clock-o"></i> 1
                                                ماه</small>
                                            <div class="tools">
                                                <i class="fa fa-edit"></i>
                                                <i class="fa fa-trash-o"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer clearfix">
                                    <button type="button" class="btn btn-info float-right"><i class="fa fa-plus"></i>
                                        جدید</button>
                                </div>
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-5 connectedSortable">

                            <!-- Map card -->
                            <div class="card bg-primary-gradient">
                                <div class="card-header no-border">
                                    <h3 class="card-title">
                                        <i class="fa fa-map-marker mr-1"></i>
                                        بازدید‌ها
                                    </h3>
                                    <!-- card tools -->
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-primary btn-sm daterange"
                                            data-toggle="tooltip" title="Date range">
                                            <i class="fa fa-calendar"></i>
                                        </button>
                                        <button type="button" class="btn btn-primary btn-sm" data-widget="collapse"
                                            data-toggle="tooltip" title="Collapse">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <div class="card-body">
                                    <div id="world-map" style="height: 250px; width: 100%;"></div>
                                </div>
                                <!-- /.card-body-->
                                <div class="card-footer bg-transparent">
                                    <div class="row">
                                        <div class="col-4 text-center">
                                            <div id="sparkline-1"></div>
                                            <div class="text-white">بازدید‌ها</div>
                                        </div>
                                        <!-- ./col -->
                                        <div class="col-4 text-center">
                                            <div id="sparkline-2"></div>
                                            <div class="text-white">آنلاین</div>
                                        </div>
                                        <!-- ./col -->
                                        <div class="col-4 text-center">
                                            <div id="sparkline-3"></div>
                                            <div class="text-white">فروش</div>
                                        </div>
                                        <!-- ./col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                            </div>
                            <!-- /.card -->

                            <!-- solid sales graph -->
                            <div class="card bg-info-gradient">
                                <div class="card-header no-border">
                                    <h3 class="card-title">
                                        <i class="fa fa-th mr-1"></i>
                                        نمودار فروش
                                    </h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn bg-info btn-sm" data-widget="collapse">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn bg-info btn-sm" data-widget="remove">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart" id="line-chart" style="height: 250px;"></div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer bg-transparent">
                                    <div class="row">
                                        <div class="col-4 text-center">
                                            <input type="text" class="knob" data-readonly="true" value="20"
                                                data-width="60" data-height="60" data-fgColor="#39CCCC">

                                            <div class="text-white">سفارش ایمیلی</div>
                                        </div>
                                        <!-- ./col -->
                                        <div class="col-4 text-center">
                                            <input type="text" class="knob" data-readonly="true" value="50"
                                                data-width="60" data-height="60" data-fgColor="#39CCCC">

                                            <div class="text-white">سفارش آنلاین</div>
                                        </div>
                                        <!-- ./col -->
                                        <div class="col-4 text-center">
                                            <input type="text" class="knob" data-readonly="true" value="30"
                                                data-width="60" data-height="60" data-fgColor="#39CCCC">

                                            <div class="text-white">سفارش فیزیکی</div>
                                        </div>
                                        <!-- ./col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->

                            <!-- Calendar -->
                            <div class="card bg-success-gradient">
                                <div class="card-header no-border">

                                    <h3 class="card-title">
                                        <i class="fa fa-calendar"></i>
                                        تقویم
                                    </h3>
                                    <!-- tools card -->
                                    <div class="card-tools">
                                        <!-- button with a dropdown -->
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success btn-sm dropdown-toggle"
                                                data-toggle="dropdown">
                                                <i class="fa fa-bars"></i></button>
                                            <div class="dropdown-menu float-right" role="menu">
                                                <a href="#" class="dropdown-item">رویداد تازه</a>
                                                <a href="#" class="dropdown-item">حذف رویدادها</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#" class="dropdown-item">نمایش تقویم</a>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-success btn-sm" data-widget="collapse">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-success btn-sm" data-widget="remove">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                    <!-- /. tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <!--The calendar -->
                                    <div id="calendar" style="width: 100%"></div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </section>
                        <!-- right col -->
                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- /.content-wrapper -->
    <footer class="main-footer">
        @include('admin.layouts.include.footer')
    </footer>
</body>

</html>
