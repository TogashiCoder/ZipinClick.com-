<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> Digital Market Place HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/frontend/images/logo/favicon-two.png') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/fontawesome-all.min.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}">
    <!-- line awesome -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/line-awesome.min.css') }}">
    <!-- Tabler Icons CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tabler-icons/3.21.0/tabler-icons.min.css"
        integrity="sha512-XrgoTBs7P5YtpkeKqKOKkruURsawIaRrhe8QrcWeMnFeyRZiOcRNjBAX+AQeXOvx9/9fSY32dVct1PccRoCICQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}">

</head>

<body>

    <!--==================== Preloader Start ====================-->
    <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--==================== Preloader End ====================-->

    <!--==================== Overlay Start ====================-->
    <div class="overlay"></div>
    <!--==================== Overlay End ====================-->

    <!--==================== Sidebar Overlay End ====================-->
    <div class="side-overlay"></div>
    <!--==================== Sidebar Overlay End ====================-->

    <!-- ==================== Scroll to Top End Here ==================== -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- ==================== Scroll to Top End Here ==================== -->

    <!-- ==================== Mobile Menu Start Here ==================== -->
    <div class="mobile-menu d-lg-none d-block">
        <button type="button" class="close-button"> <i class="las la-times"></i> </button>
        <div class="mobile-menu__inner">
            <a href="index.html" class="mobile-menu__logo">
                <img src="{{ asset('assets/frontend/images/logo/logo-two.png') }}" alt="Logo" class="white-version">
            </a>
            <div class="mobile-menu__menu">
                <div class="header-right__inner d-lg-none my-3 gap-1 d-flex flx-align">
                    <a href="cart.html" class="header-right__button cart-btn position-relative">
                        <i class="ti ti-basket"></i>
                        <span class="qty-badge font-12">0</span>
                    </a>

                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="assets/images/icons/user.svg" alt="">
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Sign Up</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                        </ul>
                    </div>
                </div>

                <ul class="nav-menu flx-align nav-menu--mobile">
                    <li class="nav-menu__item has-submenu">
                        <a href="javascript:void(0)" class="nav-menu__link">Home</a>
                        <ul class="nav-submenu">
                            <li class="nav-submenu__item">
                                <a href="index.html" class="nav-submenu__link"> Home One</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="index-two.html" class="nav-submenu__link"> Home Two</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="index-three.html" class="nav-submenu__link"> Home Three</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item has-submenu">
                        <a href="javascript:void(0)" class="nav-menu__link">Products</a>
                        <ul class="nav-submenu">
                            <li class="nav-submenu__item">
                                <a href="all-product.html" class="nav-submenu__link"> All Products</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="product-details.html" class="nav-submenu__link"> Product Details</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item has-submenu">
                        <a href="javascript:void(0)" class="nav-menu__link">Pages</a>
                        <ul class="nav-submenu">
                            <li class="nav-submenu__item">
                                <a href="profile.html" class="nav-submenu__link"> Profile</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="cart.html" class="nav-submenu__link"> Shopping Cart</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="cart-personal.html" class="nav-submenu__link"> Mailing Address</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="cart-payment.html" class="nav-submenu__link"> Payment Method</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="cart-thank-you.html" class="nav-submenu__link"> Preview Order</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="dashboard.html" class="nav-submenu__link"> Dashboard</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item has-submenu">
                        <a href="javascript:void(0)" class="nav-menu__link">Blog</a>
                        <ul class="nav-submenu">
                            <li class="nav-submenu__item">
                                <a href="blog.html" class="nav-submenu__link"> Blog</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="blog-details.html" class="nav-submenu__link"> Blog Details</a>
                            </li>
                            <li class="nav-submenu__item">
                                <a href="blog-details-sidebar.html" class="nav-submenu__link"> Blog Details Sidebar</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu__item">
                        <a href="contact.html" class="nav-menu__link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ==================== Mobile Menu End Here ==================== -->

    <!-- ================================== Dashboard Start =========================== -->
    <section class="dashboard">
        <div class="dashboard__inner d-flex">

            <!-- ===================== Dashboard Sidebar Start ======================= -->
           @include('frontend.dashboard.layouts.sidebar')
            <!-- ===================== Dashboard Sidebar End ======================= -->

            <div class="dashboard-body">

                <!-- Dashboard Nav Start -->
                <div class="dashboard-nav bg-white flx-between gap-md-3 gap-2">
                    <div class="dashboard-nav__left flx-align gap-md-3 gap-2">
                        <button type="button" class="icon-btn bar-icon text-heading bg-gray-seven flx-center">
                            <i class="las la-bars"></i>
                        </button>
                        <button type="button" class="icon-btn arrow-icon text-heading bg-gray-seven flx-center">
                            <img src="assets/images/icons/angle-right.svg" alt="">
                        </button>
                        <form action="#" class="search-input d-sm-block d-none">
                            <span class="icon">
                                <img src="assets/images/icons/search-dark.svg" alt="" class="white-version">
                                <img src="assets/images/icons/search-dark-white.svg" alt="" class="dark-version">
                            </span>
                            <input type="text" class="common-input common-input--md common-input--bg pill w-100"
                                placeholder="Search here...">
                        </form>
                    </div>
                    <div class="dashboard-nav__right">
                        <div class="header-right flx-align">
                            <div class="header-right__inner gap-sm-3 gap-2 flx-align d-flex">

                                <div class="user-profile">
                                    <button class="user-profile__button flex-align">
                                        <span class="user-profile__thumb">
                                            <img src="assets/frontend/images/thumbs/user-profile.png" class="cover-img" alt="">
                                        </span>
                                    </button>
                                    <ul class="user-profile-dropdown">
                                        <li class="sidebar-list__item">
                                            <a href="dashboard-profile.html" class="sidebar-list__link">
                                                <span class="sidebar-list__icon">
                                                    <img src="assets/images/icons/sidebar-icon2.svg" alt=""
                                                        class="icon">
                                                    <img src="assets/images/icons/sidebar-icon-active2.svg" alt=""
                                                        class="icon icon-active">
                                                </span>
                                                <span class="text">Profile</span>
                                            </a>
                                        </li>

                                        <li class="sidebar-list__item">
                                            <a href="setting.html" class="sidebar-list__link">
                                                <span class="sidebar-list__icon">
                                                    <img src="assets/images/icons/sidebar-icon10.svg" alt=""
                                                        class="icon">
                                                    <img src="assets/images/icons/sidebar-icon-active10.svg" alt=""
                                                        class="icon icon-active">
                                                </span>
                                                <span class="text">Settings</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-list__item">
                                            <a href="login.html" class="sidebar-list__link">
                                                <span class="sidebar-list__icon">
                                                    <img src="assets/images/icons/sidebar-icon13.svg" alt=""
                                                        class="icon">
                                                    <img src="assets/images/icons/sidebar-icon-active13.svg" alt=""
                                                        class="icon icon-active">
                                                </span>
                                                <span class="text">Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="language-select flx-align select-has-icon">
                                    <img src="assets/images/icons/globe.svg" alt="" class="globe-icon white-version">
                                    <img src="assets/images/icons/globe-white.svg" alt=""
                                        class="globe-icon dark-version">
                                    <select class="select py-0 ps-2 border-0 fw-500">
                                        <option value="1">Eng</option>
                                        <option value="2">Bn</option>
                                        <option value="3">Eur</option>
                                        <option value="4">Urd</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Dashboard Nav End -->


                <div class="dashboard-body__content">
                    {{--Dynamic content   --}}
                   @yield('content')
                </div>

                <!-- ====================== Dashboard Footer Start ======================== -->
                <div class="dashboard-footer bottom-footer-two mt-32 border-0 bg-white">
                    <div class="bottom-footer__inner flx-between gap-3">
                        <p class="bottom-footer__text font-14"> Copyright © 2024 DigiMart, All rights reserved.</p>
                    </div>
                </div>
                <!-- ====================== Dashboard Footer End ======================== -->


            </div>
        </div>
    </section>
    <!-- ================================== Dashboard End =========================== -->

    <!-- Jquery js -->
    <script src="{{ asset('assets/frontend/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="{{ asset('assets/frontend/js/boostrap.bundle.min.js') }}"></script>
    <!-- CountDown -->
    <script src="{{ asset('assets/frontend/js/countdown.js') }}"></script>
    <!-- counter up -->
    <script src="{{ asset('assets/frontend/js/counterup.min.js') }}"></script>
    <!-- Slick js -->
    <script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
    <!-- magnific popup -->
    <script src="{{ asset('assets/frontend/js/jquery.magnific-popup.js') }}"></script>
    <!-- apex chart -->
    <script src="{{ asset('assets/frontend/js/apexchart.js') }}"></script>
    <!-- marquee -->
    <script src="{{ asset('assets/frontend/js/marquee.min.js') }}"></script>
    <!-- infinite slide  -->
    <script src="{{ asset('assets/frontend/js/infiniteslidev2.js') }}"></script>
    <!-- select 2  -->
    <script src="{{ asset('assets/frontend/js/select2.min.js') }}"></script>

    <!-- main js -->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>


</body>

</html>
