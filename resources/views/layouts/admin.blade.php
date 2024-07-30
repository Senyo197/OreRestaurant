<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tusome - Admin</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('admin-assets/images/logos/favicon.png') }}"/>
    <link rel="stylesheet" href="{{ asset('admin-assets/css/styles.min.css') }}"/>
</head>

<body>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <span class="text-nowrap logo-img" style="font-weight: bold; font-size: large">
                    Tusome - Admin
                </span>
                <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                    <i class="ti ti-x fs-8"></i>
                </div>
            </div>
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                <ul id="sidebarnav">

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('admin.home') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-home"></i>
                </span>
                            <span class="hide-menu">Home</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('admin.categories.index') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-category"></i>
                </span>
                            <span class="hide-menu">Categories</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('admin.questions.index') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-question-mark"></i>
                </span>
                            <span class="hide-menu">Questions</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('admin.users') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-users"></i>
                </span>
                            <span class="hide-menu">Users</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('logout') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-logout"></i>
                </span>
                            <span class="hide-menu">Logout</span>
                        </a>
                    </li>
                </ul>

            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
        <!--  Header Start -->
        <header class="app-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item d-block d-xl-none">
                        <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                </ul>
                <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                       {{auth()->user()->name}}
                    </ul>
                </div>
            </nav>
        </header>
        <!--  Header End -->
        <div class="container-fluid">
           @yield('main-content')
        </div>
    </div>
</div>
<script src="{{ asset('admin-assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('admin-assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/sidebarmenu.js') }}"></script>
<script src="{{ asset('admin-assets/js/app.min.js') }}"></script>
<script src="{{ asset('admin-assets/libs/simplebar/dist/simplebar.js') }}"></script>

@yield('scripts')
</body>

</html>
