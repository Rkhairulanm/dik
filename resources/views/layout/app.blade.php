<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SEKOLAH PG-<sup>TK NUR ISLAM</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ Route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ Route('murid') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Data Murid</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ Route('ppdb') }}">
                    <i class="fas fa-fw fa-user-plus"></i>
                    <span>PPDB</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ Route('contact') }}">
                    <i class="fas fa-fw fa-address-book"></i>
                    <span>Contact Info</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ Route('about') }}">
                    <i class="fas fa-fw fa-address-card"></i>
                    <span>About Content</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ Route('management') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Management</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ Route('kegiatan') }}">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>Kegiatan</span></a>
            </li>
            @if (Auth::user()->role == 'operator')
                <li class="nav-item">
                    <a class="nav-link" href="{{ Route('users.index') }}">
                        <i class="fas fa-fw fa-user-plus"></i>
                        <span>Register guru</span></a>
                </li>
            @endif


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column ">


            <!-- Main Content -->

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <form class="form-inline">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - User Profile -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="{{ route('profile.edit') }}" id="userDropdown"
                            role="button">
                            <i class="fas fa-user text-dark"></i>
                            <!-- Counter - Alerts -->
                        </a>
                    </li>

                    <!-- Nav Item - Logout -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            id="logoutDropdown" role="button">
                            <i class="fas fa-sign-out-alt text-dark"></i>
                            <!-- Counter - Messages -->
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
            <!-- End of Topbar -->
            <div class="p-3">
                @yield('content')
            </div>

            </ul>


        </div>
        <!-- End of Main Content -->



    </div>
    <!-- End of Content Wrapper -->


    </div>
    <!-- End of Page Wrapper -->


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript (Bootstrap 5 Bundle includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript (Jika tidak lagi diperlukan, Anda dapat menghapusnya) -->
    <!-- <script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script> -->

    <!-- Custom scripts for all pages -->
    <script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('template/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/vendor/datatables/dataTables.bootstrap5.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('template/js/datatables-custom.js') }}"></script>



</body>

</html>
