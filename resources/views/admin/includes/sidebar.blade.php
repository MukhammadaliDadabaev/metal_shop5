<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
                <a class="nav-link" href="/"> <img class="animation__shake" src="{{ asset('dist/img/AdminLogo.png') }}"
                                  alt="AdminLogo" width="35" height="35">
                    <p>&nbsp;ADMIN</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin') }}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>Barchasi | Все</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.product.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-th-list"></i>
                    <p>Mahsulotlar | Продукты</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-shopping-bag"></i>
                   <p>Mijozlar | Заказы</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.category.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-envelope"></i>
                    <p>Toifalar | Категории</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.tag.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-tags"></i>
                    <p>Tag | Теги</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.color.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-truck-pickup"></i>
                    <p>Ranglar | Цевты</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.user.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Foydalanuvchilar</p>
                </a>
            </li>
{{--            <li class="nav-item menu-is-opening menu-open">--}}
{{--                <a href="#" class="nav-link">--}}
{{--                    <i class="nav-icon fas fa-copy"></i>--}}
{{--                    <p>--}}
{{--                        Rasmlar--}}
{{--                        <i class="fas fa-angle-left right"></i>--}}
{{--                        <span class="badge badge-info right">6</span>--}}
{{--                    </p>--}}
{{--                </a>--}}
{{--                <ul class="nav nav-treeview" style="display: block;">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="pages/layout/top-nav.html" class="nav-link">--}}
{{--                            <i class="far fa-circle nav-icon"></i>--}}
{{--                            <p>Top Navigation</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="pages/layout/top-nav-sidebar.html" class="nav-link">--}}
{{--                            <i class="far fa-circle nav-icon"></i>--}}
{{--                            <p>Top Navigation + Sidebar</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="pages/layout/boxed.html" class="nav-link">--}}
{{--                            <i class="far fa-circle nav-icon"></i>--}}
{{--                            <p>Boxed</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="pages/layout/fixed-sidebar.html" class="nav-link">--}}
{{--                            <i class="far fa-circle nav-icon"></i>--}}
{{--                            <p>Fixed Sidebar</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">--}}
{{--                            <i class="far fa-circle nav-icon"></i>--}}
{{--                            <p>Fixed Sidebar <small>+ Custom Area</small></p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="pages/layout/fixed-topnav.html" class="nav-link">--}}
{{--                            <i class="far fa-circle nav-icon"></i>--}}
{{--                            <p>Fixed Navbar</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="pages/layout/fixed-footer.html" class="nav-link">--}}
{{--                            <i class="far fa-circle nav-icon"></i>--}}
{{--                            <p>Fixed Footer</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="pages/layout/collapsed-sidebar.html" class="nav-link">--}}
{{--                            <i class="far fa-circle nav-icon"></i>--}}
{{--                            <p>Collapsed Sidebar</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
