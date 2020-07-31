<!DOCTYPE html>
<html lang="en">
<!-- BEGIN: Head -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <link href="../../assets/images/logo.png" rel="shortcut icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Online Educational System" />
    <meta name="keywords" content="All lectures and needed materials are provided via our online platform, so you’ll easily access them from the comfort of your home." />
    <meta name="author" content="Dcode Arena" />
    <title>@yield('title')</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="../../assets/css/app.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="app">
    <!-- BEGIN: Mobile Menu -->
    <div class="mobile-menu md:hidden">
        <div class="mobile-menu-bar">
            <a href="#" class="flex mr-auto">
                <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="../../assets/images/logo.jpg">  <span class="text-white text-lg ml-3"> AJAYI <span class="font-medium">POLYTECHNIC </span> </span>
            </a>
            <a href="javascript:;" id="mobile-menu-toggler"> <i  class="fa fa-bars w-8 h-8 text-white" style="font-size: 28px;"></i> </a>
        </div>
        <ul class="border-t border-theme-24 py-5 hidden">
            <li>
                <a href="{{ route('studentdashboard') }}" class="menu {{ request()->is('student/dashboard*') ? 'menu--active' : '' }}">
                    <div class="menu__icon"> <i class="fa fa-desktop"></i> </div>
                    <div class="menu__title"> Dashboard </div>
                </a>
            </li>
            <li>
                <a href="#" class="menu">
                    <div class="menu__icon"> <i class="fa fa-university"></i> </div>
                    <div class="menu__title"> College Home </div>
                </a>
            </li>
            <li>
                <a href="{{ route('studentbiodata') }}" class="menu {{ request()->is('student/biodata*') ? 'menu--active' : '' }}">
                    <div class="enu__icon"> <i class="fa fa-id-badge"></i> </div>
                    <div class="menu__title"> Biodata </div>
                </a>
            </li>
            <li>
                <a href="javascript:;.html" class="menu">
                    <div class="menu__icon"> <i class="fa fa-tasks"></i> </div>
                    <div class="menu__title"> Classroom <i data-feather="chevron-down"></i> </div>
                </a>
                <ul class="">
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Courses </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="menu__title"> Announcement </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="menu">
                    <div class="menu__icon"> <i class="fa fa-list-alt"></i> </div>
                    <div class="menu__title"> Course Registration <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
                </a>
            </li>
            <li>
                <a href="#" class="menu">
                    <div class="menu__icon"> <i class="fa fa-calendar"></i> </div>
                    <div class="menu__title"> School Events <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
                </a>
            </li>
            <li>
                <a href="#" class="menu">
                    <div class="menu__icon"> <i class="fa fa-credit-card"></i> </div>
                    <div class="menu__title"> Fees Payament <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
                </a>
            </li>
            <li>
                <a href="#" class="menu">
                    <div class="menu__icon"> <i class="fa fa-info-circle"></i> </div>
                    <div class="menu__title"> Notice Board <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
                </a>
            </li>
        </ul>
    </div>
    <!-- END: Mobile Menu -->
    <!-- BEGIN: Top Bar -->
    <div class="border-b border-theme-24 -mt-10 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 pt-3 md:pt-0 mb-10">
        <div class="top-bar-boxed flex items-center">
            <!-- BEGIN: Logo -->
            <a href="#" class="-intro-x hidden md:flex">
                <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="../../assets/images/logo.jpg" />
                <span class="text-white text-lg ml-3"> AJAYI <span class="font-medium">POLYTECHNIC </span> </span>
            </a>
            <!-- END: Logo -->
            <!-- BEGIN: Breadcrumb -->
            <div class="-intro-x breadcrumb breadcrumb--light mr-auto"> <a href="#" class="">Online Educational System </a>  </div>
            <!-- END: Breadcrumb -->
            <!-- BEGIN: Notifications -->
            <div class="intro-x dropdown relative mr-4 sm:mr-6">
            <div class="font-medium text-white">Isaac Chinonso GIft</div>
            </div>
            <!-- END: Notifications -->
            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8 relative">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110">
                    <img alt="Midone Tailwind HTML Admin Template" src="../../assets/images/1.jpg" />
                </div>
                <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
                    <div class="dropdown-box__content box bg-theme-38 text-white">
                        <div class="p-2">
                            <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Account Settings </a>
                        </div>
                        <div class="p-2 border-t border-theme-40">
                            <a href="{{ route('logout') }}" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Account Menu -->
        </div>
    </div>
    <!-- END: Top Bar -->
    <!-- BEGIN: Top Menu -->
    <nav class="top-nav">
        <ul>
            <li>
                <a href="{{ route('studentdashboard') }}" class="top-menu {{ request()->is('student/dashboard*') ? 'top-menu--active' : '' }}">
                    <div class="top-menu__icon"> <i class="fa fa-desktop"></i> </div>
                    <div class="top-menu__title"> Dashboard </div>
                </a>
            </li>
            <li>
                <a href="#" class="top-menu">
                    <div class="top-menu__icon"> <i class="fa fa-university"></i> </div>
                    <div class="top-menu__title"> College Home </div>
                </a>
            </li>
            <li>
                <a href="{{ route('studentbiodata') }}" class="top-menu {{ request()->is('student/biodata*') ? 'top-menu--active' : '' }}">
                    <div class="top-menu__icon"> <i class="fa fa-id-badge"></i> </div>
                    <div class="top-menu__title"> Biodata </div>
                </a>
            </li>
            <li>
                <a href="javascript:;.html" class="top-menu {{ request()->is('student/courses*') ? 'top-menu--active' : '' }} {{ request()->is('student/course-announcement*') ? 'top-menu--active' : '' }}">
                    <div class="top-menu__icon"> <i class="fa fa-tasks"></i> </div>
                    <div class="top-menu__title"> Classroom <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
                </a>
                <ul class="top-menu__sub-open">
                    <li>
                        <a href="{{ route('studentcourses') }}" class="top-menu {{ request()->is('student/courses*') ? 'top-menu--active' : '' }}">
                            <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="top-menu__title"> Courses <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('studentannouncement') }}" class="top-menu {{ request()->is('student/course-announcement*') ? 'top-menu--active' : '' }}">
                            <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                            <div class="top-menu__title"> Announcement <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="top-menu">
                    <div class="top-menu__icon"> <i class="fa fa-list-alt"></i> </div>
                    <div class="top-menu__title"> Course Registration <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
                </a>
            </li>
            <li>
                <a href="#" class="top-menu">
                    <div class="top-menu__icon"> <i class="fa fa-calendar"></i> </div>
                    <div class="top-menu__title"> School Events <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
                </a>
            </li>
            <li>
                <a href="#" class="top-menu">
                    <div class="top-menu__icon"> <i class="fa fa-credit-card"></i> </div>
                    <div class="top-menu__title"> Fees Payament <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
                </a>
            </li>
            <li>
                <a href="#" class="top-menu">
                    <div class="top-menu__icon"> <i class="fa fa-info-circle"></i> </div>
                    <div class="top-menu__title"> Notice Board <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
                </a>
            </li>
        </ul>
    </nav>
    <!-- END: Top Menu -->
    @yield('content')
    <!-- BEGIN: JS Assets-->
    <script src="../developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="../maps.googleapis.com/maps/api/js_1beb78b.js"></script>
    <script src="../../assets/js/app.js"></script>
    <!-- END: JS Assets-->
</body>

</html>