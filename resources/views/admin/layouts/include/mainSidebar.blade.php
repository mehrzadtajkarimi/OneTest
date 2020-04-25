<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
        <div style="direction: rtl">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="https://s.gravatar.com/avatar/10c81071acd325b893097509735f6828?s=200&d=mm&r=g"
                        class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">مهرزاد تاج کریمی</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">

                    <li class="nav-item">
                        <a href="{{ route('admin.') }}" class="nav-link {{ is_active('admin.')}}">
                            <i class="fa fa-dashboard"></i>
                            <p> پنل مدیریت</p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview {{ is_active(['admin.users.index','admin.users.create','admin.users.edit'],'menu-open')}}">
                        <a href="#" class="nav-link {{ is_active(['admin.users.index','admin.users.create','admin.users.edit'])}}">
                            <i class="nav-icon fa fa-users"></i>
                            <p>
                                کاربران
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.users.index') }}" class="nav-link  {{ is_active(['admin.users.index','admin.users.create','admin.users.edit'])}}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست کاربران</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>سطح دسترسی</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview {{ is_active(['admin.tests.index','admin.tests.create','admin.tests.edit'],'menu-open')}}">
                        <a href="#" class="nav-link {{ is_active(['admin.tests.index','admin.tests.create','admin.tests.edit'])}}">
                            <i class="nav-icon fa fa-book"></i>
                            <p>
                                آزمونها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.tests.index') }}" class="nav-link  {{ is_active(['admin.tests.index','admin.tests.create','admin.tests.edit'])}}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست آزمونها</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview {{ is_active(['admin.question.index','admin.question.create','admin.question.edit'],'menu-open')}}">
                        <a href="#" class="nav-link {{ is_active(['admin.question.index','admin.question.create','admin.question.edit'])}}">
                            <i class="nav-icon fa fa-question"></i>
                            <p>
                                سوالات
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.question.index') }}" class="nav-link  {{ is_active(['admin.question.index','admin.question.create','admin.question.edit'])}}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست سوالات</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{-- <li class="nav-item has-treeview {{ is_active(['admin.reply.index','admin.reply.create','admin.reply.edit'],'menu-open')}}">
                        <a href="#" class="nav-link {{ is_active(['admin.reply.index','admin.reply.create','admin.reply.edit'])}}">
                            <i class="nav-icon fa fa-list-ol"></i>
                            <p>
                                پاسخ ها
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.reply.index') }}" class="nav-link  {{ is_active(['admin.reply.index','admin.reply.create','admin.reply.edit'])}}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست پاسخ ها</p>
                                </a>
                            </li>
                        </ul>
                    </li> --}}

                    <li class="nav-item has-treeview {{ is_active(['admin.entities.index','admin.entities.create','admin.entities.edit'],'menu-open')}}">
                        <a href="#" class="nav-link {{ is_active(['admin.entities.index','admin.entities.create','admin.entities.edit'])}}">
                            <i class="nav-icon fa fa-address-card"></i>
                            <p>
                                معرفی کلاس
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.entities.index') }}" class="nav-link  {{ is_active(['admin.entities.index','admin.entities.create','admin.entities.edit'])}}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>لیست کلاسها</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
