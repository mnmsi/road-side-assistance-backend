<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RoadSide Assistance</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('/theme/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('/theme/vendors/base/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('/theme/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('/image/icon.svg')}}"/>
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="{{asset('/image/icon.svg')}}"
                                                                           class="mr-2" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="index.html">
                <img src="{{asset('image/icon.svg')}}" alt="logo"/>
            </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="ti-view-list"></span>
            </button>

            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                        <img src="{{asset('/theme/images/faces/face28.jpg')}}" alt="profile"/>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item">
                            <i class="ti-settings text-primary"></i>
                            Settings
                        </a>
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button class="dropdown-item" type="submit">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </button>
                        </form>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                <span class="ti-view-list"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
    @include('Side bar layout.index')
    <!-- partial -->
        <div class="main-panel">
        @yield('content')
        <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a
                            href="https://www.templatewatch.com/" target="_blank">Templatewatch</a>. All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                            class="ti-heart text-danger ml-1"></i></span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<script src="{{asset('js/app.js')}}"></script>
<!-- plugins:js -->
<script src="{{asset('/theme/vendors/base/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="{{asset('/theme/vendors/chart.js/Chart.min.js')}}"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{asset('/theme/js/off-canvas.js')}}"></script>
<script src="{{asset('/theme/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('/theme/js/template.js')}}"></script>
<script src="{{asset('/theme/js/todolist.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('/theme/js/dashboard.js')}}"></script>
<!-- End custom js for this page-->
</body>

</html>

