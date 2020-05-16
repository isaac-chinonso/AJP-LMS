<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../app/images/favicon.png">
    <title>@yield('title')</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="../../app/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="../../app/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../app/css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="../../app/css/pages/dashboard1.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../app/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../../app/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">
</head>

<body class="horizontal-nav boxed skin-megna fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Ajayi Polytechnic Online Education System</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index-2.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../../app/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../../app/images/logo.jpg" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span class="hidden-sm-down">
                            <!-- dark Logo text -->
                            <img src="../../app/images/logo-text.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="../../app/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>

                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- User Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../app/images/users/1.jpg" alt="user" class=""> <span class="text-white"> Admin&nbsp;<i class="fa fa-angle-down"></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <!-- text-->
                                <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="{{ route('logout') }}" class="dropdown-item"><i class="icon-logout"></i> Logout</a>
                                <!-- text-->
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End User Profile -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="../app/images/users/1.jpg" alt="user-img" class="img-circle"><span class="hide-menu">Mark Jeckson</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                                <li><a href="{{ route('logout') }}"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">--- ADMIN</li>
                        <li>
                            <a class="waves-effect waves-dark" href="{{ route('admindashboard') }}"><i class="icon-home"></i>Dashboard</a>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-user-follow"></i><span class="hide-menu">Admission <i class="fa fa-angle-down"></i></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <a class="waves-effect waves-dark" href="#"> Admitted</a>
                                <li><a class="waves-effect waves-dark" href="#"> No-Admitted</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-book-open"></i><span class="hide-menu">Course Management <i class="fa fa-angle-down"></i></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a class="waves-effect waves-dark" href="{{ route('admindepartment') }}"> Departments</a></li>
                                <li><a class="waves-effect waves-dark" href="{{ route('admincourse') }}"> Courses</a></li>
                                <li><a class="waves-effect waves-dark" href="{{ route('admincoursetopic') }}">Course Topics</a></li>
                                <li><a class="waves-effect waves-dark" href="{{ route('admincourseassignment') }}">Course Assignment</a></li>
                                <li><a class="waves-effect waves-dark" href="#">Anouncement</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="{{ route('adminstudent') }}"><i class="icon-user-following"></i>Students</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="{{ route('adminlecturer') }}"><i class="icon-user-following"></i>Staffs</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="#"><i class="icon-credit-card"></i>Payments</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="#"><i class="icon-calender"></i>Events</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="#"><i class="icon-info"></i>Notice Board</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="#"><i class="icon-speech"></i>Forum</a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @yield('content')
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2020 Ajayi Polytechnic Crafted with <i class="fa fa-heart"></i> by <a href="#">Dcode Arena</a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="../../app/node_modules/jquery/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap popper Core JavaScript -->
        <script src="../../app/node_modules/popper/popper.min.js"></script>
        <script src="../../app/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="../ssets/js/perfect-scrollbar.jquery.min.js"></script>
        <!--Wave Effects -->
        <script src="../../app/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="../../app/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="../../app/js/custom.min.js"></script>
        <!-- ============================================================== -->
        <!-- This page plugins -->
        <!-- ============================================================== -->
        <!--morris JavaScript -->
        <script src="../../app/node_modules/raphael/raphael-min.js"></script>
        <script src="../../app/node_modules/morrisjs/morris.min.js"></script>
        <script src="../../app/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
        <!-- Popup message jquery -->
        <script src="../../app/node_modules/toast-master/js/jquery.toast.js"></script>
        <!-- Chart JS -->
        <script src="../../app/js/dashboard1.js"></script>
        <script src="../../app/node_modules/toast-master/js/jquery.toast.js"></script>
        <script>
            $(function() {
                $('#chat, #msg, #comment, #todo').perfectScrollbar();
            });
        </script>
        <!-- This is data table -->
        <script src="../../app/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="../../app/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
        <script>
            $(function() {
                $('#myTable').DataTable();
                var table = $('#example').DataTable({
                    "columnDefs": [{
                        "visible": false,
                        "targets": 2
                    }],
                    "order": [
                        [2, 'asc']
                    ],
                    "displayLength": 25,
                    "drawCallback": function(settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function(group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // responsive table
                $('#config-table').DataTable({
                    responsive: true
                });
            });
        </script>
</body>

</html>