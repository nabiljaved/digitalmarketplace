<?php error_reporting(0);?>
@if(Route::is(['index-2']))
<div class="top-bar">
    <h6>50% OFF on Christmas</h6>
    <ul>
        <li>2</li>
        <li>15</li>
        <li>33</li>
        <li>32</li>
    </ul>
    <a href="javascript:;" class="top-close"><i class="feather-x"></i></a>
</div>
@endif
@if(Route::is(['index-9']))
<div class="top-bar-nine">
    <div class="container">
        <div class="top-bar-nine-all">
            <div class="top-bar-main">
                <a href="{{url('index-9')}}" class="">
                    <img src="{{ URL::asset('/assets/img/logo-02.png')}}" alt="">
                </a>
            </div>
            <div class="top-bar-ryt">
                <div class="top-address">
                    <span><i class="feather-phone-call"></i></span>
                    <div>
                        <h6>Get Support</h6>
                        <p>310-437-2766</p>
                    </div>
                </div>
                <div class="top-address">
                    <span><img src="{{ URL::asset('/assets/img/icons/global-nine.svg')}}" alt=""></span>
                    <div class="top-addres-nine">
                        <h6>Language</h6>
                        <p>
                            <img src="{{ URL::asset('/assets/img/icons/dropdown-nine.svg')}}" class="footer-dropdown" alt="img">
                            <select class="top-select">
                                <option>English</option>
                                <option>Mexico</option>
                                <option>American</option>
                            </select>
                        </p>
                    </div>
                </div>
                <div class="top-btn">
                    <a href="javascript:;" class="btn btn-primary"><i class="feather-user"></i> Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if(!Route::is(['provider-dashboard','provider-services','provider-booking','provider-payout','provider-availability','provider-holiday','provider-coupons',
'provider-subscription','provider-addons','provider-offers','provider-reviews','provider-earnings','provider-chat','provider-appointment-settings',
'provider-profile-settings','provider-social-profile','provider-security-settings','provider-plan','payment-settings','provider-notifcations',
'provider-connected-apps','add-coupon','add-subscription','provider-book-details','provider-services-list']))
<!-- Header -->
@if(!Route::is(['index-2','index-3','index-4','index-5','index-6','index-7','index-8','index-9']))
<header class="header">
@endif
@if(Route::is(['index-2']))
<header class="header header-two">
@endif
@if(Route::is(['index-3']))
<header class="header header-three">
@endif
@if(Route::is(['index-4']))
<header class="header header-four">
@endif
@if(Route::is(['index-5']))
<section class="hero-section-five">
    <header class="header header-five">
@endif
@if(Route::is(['index-6']))
<section class="hero-section-six">
    <header class="header header-six">
@endif
@if(Route::is(['index-7']))
<header class="header header-seven">
@endif
@if(Route::is(['index-8']))
<header class="header header-eight">
@endif
@if(Route::is(['index-9']))
<header class="header header-nine">
@endif
    @if(!Route::is(['index-3']))
    <div class="container">
    @endif
    @if(Route::is(['index-3']))
    <div class="container-fluid">
    @endif
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                @if(!Route::is(['choose-signup','user-signup','provider-signup','login','reset-password','password-recovery','phone-otp','email-otp','free-trial']))
                <a id="mobile_btn" href="javascript:void(0);">
                    @if(!Route::is(['index-3']))
                    <span class="bar-icon">
                    @endif
                    @if(Route::is(['index-3']))
                    <span class="bar-icon bar-icon-three">
                    @endif
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                @endif
                @if(!Route::is(['index-9']))
                <a href="{{url('/')}}" class="navbar-brand logo">
                    @if(!Route::is(['index-2','index-3','index-5','index-6','index-7','index-8']))
                    <img src="{{ URL::asset('/assets/img/logo.png')}}" class="img-fluid" alt="Logo">
                    @endif
                    @if(Route::is(['index-2','index-3','index-5','index-6','index-7','index-8']))
                    <img src="{{ URL::asset('/assets/img/logo-02.svg')}}" class="img-fluid" alt="Logo">
                    @endif
                </a>
                @endif
                @if(Route::is(['index-9']))
                <a href="{{url('/')}}" class="navbar-brand logo">
                    @if(!Route::is(['index-2','index-3','index-5','index-6','index-7','index-8']))
                    <img src="{{ URL::asset('/assets/img/logo.svg')}}" class="img-fluid" alt="Logo">
                    @endif
                    @if(Route::is(['index-2','index-3','index-5','index-6','index-7','index-8']))
                    <img src="{{ URL::asset('/assets/img/logo-02.svg')}}" class="img-fluid" alt="Logo">
                    @endif
                </a>
                @endif
                <a href="{{url('/')}}" class="navbar-brand logo-small">
                    @if(!Route::is(['index-3','index-8','index-9']))
                    <img src="{{ URL::asset('/assets/img/logo.png')}}" class="img-fluid" alt="Logo">
                    @endif
                    @if(Route::is(['index-3','index-8','index-9']))
                    <img src="{{ URL::asset('/assets/img/logo-icon.png')}}" class="img-fluid" alt="Logo">
                    @endif
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="{{url('/')}}" class="menu-logo">
                    @if(!Route::is(['index-2','index-5','index-6','index-8','index-9']))
                    <img src="{{ URL::asset('/assets/img/logo.png')}}" class="img-fluid" alt="Logo">
                    @endif
                    @if(Route::is(['index-2','index-5','index-6','index-8','index-9']))
                    <img src="{{ URL::asset('/assets/img/logo-02.svg')}}" class="img-fluid" alt="Logo">
                    @endif
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
                </div>
                <ul class="main-nav">
                    <!-- <li class="has-submenu megamenu {{ Request::is('/','index-2','index-3','index-4','index-5','index-6','index-7','index-8','index-9') ? 'active' : '' }}">
                        <a href="javascript:void(0);">Home <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu mega-submenu">
                            <li>
                                <div class="megamenu-wrapper">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="single-demo {{ Request::is('/') ? 'active' : '' }}">
                                                <div class="demo-img">
                                                    <a href="{{url('/')}}"><img src="{{ URL::asset('/assets/img/home-01.jpg')}}" class="img-fluid" alt="img"></a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('/')}}">Electrical Home</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single-demo {{ Request::is('index-2') ? 'active' : '' }}">
                                                <div class="demo-img">
                                                    <a href="{{url('index-2')}}"><img src="{{ URL::asset('/assets/img/home-02.jpg')}}" class="img-fluid" alt="img"></a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('index-2')}}">Cleaning Home</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single-demo {{ Request::is('index-3') ? 'active' : '' }}">
                                                <div class="demo-img">
                                                    <a href="{{url('index-3')}}"><img src="{{ URL::asset('/assets/img/home-03.jpg')}}" class="img-fluid" alt="img"></a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('index-3')}}">Saloon Home</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single-demo {{ Request::is('index-4') ? 'active' : '' }}">
                                                <div class="demo-img">
                                                    <a href="{{url('index-4')}}"><img src="{{ URL::asset('/assets/img/home-04.jpg')}}" class="img-fluid" alt="img"></a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('index-4')}}">Catering Home</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single-demo {{ Request::is('index-5') ? 'active' : '' }}">
                                                <div class="demo-img">
                                                    <a href="{{url('index-5')}}"><img src="{{ URL::asset('/assets/img/home-05.jpg')}}"
                                                            class="img-fluid" alt="img"></a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('index-5')}}">Car Wash Home</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single-demo {{ Request::is('index-6') ? 'active' : '' }}">
                                                <div class="demo-img">
                                                    <a href="{{url('index-6')}}"><img src="{{ URL::asset('/assets/img/home-06.jpg')}}"
                                                            class="img-fluid" alt="img"></a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('index-6')}}">Cleaning Home</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single-demo {{ Request::is('index-7') ? 'active' : '' }}">
                                                <div class="demo-img">
                                                    <a href="{{url('index-7')}}"><img src="{{ URL::asset('/assets/img/home-07.jpg')}}"
                                                            class="img-fluid" alt="img"></a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('index-7')}}">House Problem Home</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single-demo {{ Request::is('index-8') ? 'active' : '' }}">
                                                <div class="demo-img">
                                                    <a href="{{url('index-8')}}"><img src="{{ URL::asset('/assets/img/home-08.jpg')}}"
                                                            class="img-fluid" alt="img"></a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('index-8')}}">Pet Grooming Home</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="single-demo {{ Request::is('index-9') ? 'active' : '' }}">
                                                <div class="demo-img">
                                                    <a href="{{url('index-9')}}"><img src="{{ URL::asset('/assets/img/home-09.jpg')}}"
                                                            class="img-fluid" alt="img"></a>
                                                </div>
                                                <div class="demo-info">
                                                    <a href="{{url('index-9')}}">Mechanic Home</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li> -->

                    <li class="has-submenu <?php if($page=="service-grid" || $page=="service-details" || $page=="service-list" || $page=="search-list" || $page=="search" || $page=="providers" || $page=="provider-details") { echo 'active'; } ?>">
                        <a href="/">Services <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="<?php if($page=="service-grid" || $page=="service-details") { echo 'active'; } ?>"><a href="{{url('service-grid')}}">Service Grid</a></li>
                            <li class="<?php if($page=="service-list" || $page=="search-list") { echo 'active'; } ?>"><a href="{{url('service-list')}}">Service List</a></li>
                            <li class="<?php if($page=="search") { echo 'active'; } ?>"><a href="{{url('search')}}">Search</a></li>
                            <!-- <li class="has-submenu <?php if($page=="providers" || $page=="provider-details") { echo 'active'; } ?>">
                                <a href="javascript:void(0);">Providers</a>
                                <ul class="submenu">
                                    <li class="<?php if($page=="providers") { echo 'active'; } ?>"><a href="{{url('providers')}}">Providers List</a></li>
                                    <li class="<?php if($page=="provider-details") { echo 'active'; } ?>"><a href="{{url('provider-details')}}">Providers Details</a></li>
                                </ul>
                            </li> -->
                            <!-- <li class="<?php if($page=="service-information") { echo 'active'; } ?>"><a href="{{url('service-information')}}">Create Service</a></li> -->
                        </ul>
                    </li>
                  
                  
                    <li class="has-submenu <?php if($page=="about-us" || $page=="contact-us" || $page=="how-it-works" || $page=="choose-signup" || $page=="user-signup" || $page=="provider-signup" || $page=="login" || $page=="reset-password" || $page=="password-recovery" || $page=="phone-otp" 
                    || $page=="email-otp" || $page=="free-trial" || $page=="booking" || $page=="booking-payment" || $page=="booking-done"|| $page=="categories" || $page=="pricing" || $page=="faq" || 
                    $page=="maintenance" || $page=="coming-soon" || $page=="privacy-policy" || $page=="terms-condition" || $page=="session-expired") { echo 'active'; } ?>">
                        <a href="">Pages <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="<?php if($page=="about-us") { echo 'active'; } ?>"><a href="{{url('about-us')}}">About</a></li>
                            <li class="<?php if($page=="contact-us") { echo 'active'; } ?>"><a href="{{url('contact-us')}}">Contact Us</a></li>
                            <li class="<?php if($page=="how-it-works") { echo 'active'; } ?>"><a href="{{url('how-it-works')}}">How It Works</a></li>
                            <!-- <li class="has-submenu">
                                <a href="javascript:void(0);">Error Page</a>
                                <ul class="submenu">
                                    <li><a href="{{url('error-404')}}">404 Error</a></li>
                                    <li><a href="{{url('error-500')}}">500 Error</a></li>
                                </ul>
                            </li> -->
                            <!-- <li class="has-submenu <?php if($page=="choose-signup" || $page=="user-signup" || $page=="provider-signup" || $page=="login" || $page=="reset-password" || $page=="password-recovery" || $page=="phone-otp" || $page=="email-otp" || $page=="free-trial") { echo 'active'; } ?>">
                                <a href="javascript:void(0);">Authentication</a>
                                <ul class="submenu">
                                    <li class="<?php if($page=="choose-signup") { echo 'active'; } ?>"><a href="{{url('choose-signup')}}">Signup Choose </a></li>
                                    <li class="<?php if($page=="user-signup") { echo 'active'; } ?>"><a href="{{url('user-signup')}}">Customer Signup</a></li>
                                    <li class="<?php if($page=="provider-signup") { echo 'active'; } ?>"><a href="{{url('provider-signup')}}">Provider Signup</a></li>
                                    <li class="<?php if($page=="login") { echo 'active'; } ?>"><a href="{{url('login')}}">Login</a></li>
                                    <li class="<?php if($page=="reset-password") { echo 'active'; } ?>"><a href="{{url('reset-password')}}">Reset Password</a></li>
                                    <li class="<?php if($page=="password-recovery") { echo 'active'; } ?>"><a href="{{url('password-recovery')}}">Password Update</a></li>
                                    <li class="<?php if($page=="phone-otp") { echo 'active'; } ?>"><a href="{{url('phone-otp')}}">Phone OTP</a></li>
                                    <li class="<?php if($page=="email-otp") { echo 'active'; } ?>"><a href="{{url('email-otp')}}">Email OTP</a></li>
                                    <li class="<?php if($page=="free-trial") { echo 'active'; } ?>"><a href="{{url('free-trial')}}">Free Trial</a></li>
                                </ul>
                            </li> -->
                            <li class="has-submenu <?php if($page=="booking" || $page=="booking-payment" || $page=="booking-done") { echo 'active'; } ?>">
                                <!-- <a href="javascript:void(0);">Booking</a>
                                <ul class="submenu">
                                    <li class="<?php if($page=="booking") { echo 'active'; } ?>"><a href="{{url('booking')}}">Booking</a></li>
                                    <li class="<?php if($page=="booking-payment") { echo 'active'; } ?>"><a href="{{url('booking-payment')}}">Booking Checkout</a></li>
                                    <li class="<?php if($page=="booking-done") { echo 'active'; } ?>"><a href="{{url('booking-done')}}">Booking Success</a></li>
                                </ul> -->
                            </li>
                            <!-- <li class="<?php if($page=="categories") { echo 'active'; } ?>"><a href="{{url('categories')}}">Categories</a></li> -->
                            <!-- <li class="<?php if($page=="pricing") { echo 'active'; } ?>"><a href="{{url('pricing')}}">Pricing Plan</a></li> -->
                            <!-- <li class="<?php if($page=="faq") { echo 'active'; } ?>"><a href="{{url('faq')}}">FAQ</a></li> -->
                            <!-- <li class="<?php if($page=="maintenance") { echo 'active'; } ?>"><a href="{{url('maintenance')}}">Maintenance</a></li>
                            <li class="<?php if($page=="coming-soon") { echo 'active'; } ?>"><a href="{{url('coming-soon')}}">Coming Soon</a></li> -->
                            <li class="<?php if($page=="privacy-policy") { echo 'active'; } ?>"><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
                            <li class="<?php if($page=="terms-condition") { echo 'active'; } ?>"><a href="{{url('terms-condition')}}">Terms & Conditions</a></li>
                            <!-- <li class="<?php if($page=="session-expired") { echo 'active'; } ?>"><a href="{{url('session-expired')}}">Session Expired</a></li> -->
                        </ul>
                    </li>
                    <li class="has-submenu <?php if($page=="blog-grid" || $page=="blog-list" || $page=="blog-details") { echo 'active'; } ?>">
                        <a href="{{url('blog-grid')}}">Blog <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="<?php if($page=="blog-grid") { echo 'active'; } ?>"><a href="{{url('blog-grid')}}">Blog Grid</a></li>
                            <li class="<?php if($page=="blog-list") { echo 'active'; } ?>"><a href="{{url('blog-list')}}">Blog List</a></li>
                            <li class="<?php if($page=="blog-details") { echo 'active'; } ?>"><a href="{{url('blog-details')}}">Blog Details</a></li>
                        </ul>
                    </li>
                    <!-- @if(!Route::is(['customer-dashboard','customer-booking','customer-favourite','customer-wallet','customer-reviews','customer-chat','customer-profile','security-settings','customer-notifications','connected-apps','invoice',
                    'notification','orders','success','customer-booking-calendar']))
                    <li class="has-submenu"><a href="admin/signin">Admin</a></li>
                    @endif -->

                    @auth

                    @if (Auth::user()->type === 'provider')
                    <li class="has-submenu <?php if($page=="provider-dashboard" || $page=="provider-services" || $page=="provider-booking" || $page=="provider-payout" || $page=="provider-availability" || $page=="provider-holiday" || $page=="provider-coupons" || $page=="provider-offers" || $page=="provider-reviews" || $page=="provider-earnings" || $page=="provider-chat") { echo 'active'; } ?>">
                        <a href="">Providers <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="<?php if($page=="provider-dashboard") { echo 'active'; } ?>"><a href="{{url('provider-dashboard')}}">Dashboard</a></li>
                            <li class="<?php if($page=="provider-services") { echo 'active'; } ?>"><a href="{{url('provider-services')}}">My Services</a></li>
                            <!-- <li class="<?php if($page=="provider-booking") { echo 'active'; } ?>"><a href="{{url('provider-booking')}}">Booking</a></li>
                            <li class="<?php if($page=="provider-payout") { echo 'active'; } ?>"><a href="{{url('provider-payout')}}">Payout</a></li> -->
                            <!-- <li class="has-submenu <?php if($page=="provider-appointment-settings" || $page=="provider-profile-settings" || $page=="provider-social-profile" || $page=="provider-security-settings" || $page=="provider-plan" || $page=="provider-notifcations" || $page=="provider-connected-apps") { echo 'active'; } ?>">
                                <a href="javascript:void(0);">Settings</a>
                                <ul class="submenu">
                                    <li class="<?php if($page=="provider-appointment-settings") { echo 'active'; } ?>"><a href="{{url('provider-appointment-settings')}}">Appointment Settings</a></li>
                                    <li class="<?php if($page=="provider-profile-settings") { echo 'active'; } ?>"><a href="{{url('provider-profile-settings')}}">Account Settings</a></li>
                                    <li class="<?php if($page=="provider-social-profile") { echo 'active'; } ?>"><a href="{{url('provider-social-profile')}}">Social Profiles</a></li>
                                    <li class="<?php if($page=="provider-security-settings") { echo 'active'; } ?>"><a href="{{url('provider-security-settings')}}">Security</a></li>
                                    <li class="<?php if($page=="provider-plan") { echo 'active'; } ?>"><a href="{{url('provider-plan')}}">Plan & Billings</a></li>
                                    <li class="<?php if($page=="provider-notifcations") { echo 'active'; } ?>"><a href="{{url('provider-notifcations')}}">Notifications</a></li>
                                    <li class="<?php if($page=="provider-connected-apps") { echo 'active'; } ?>"><a href="{{url('provider-connected-apps')}}">Connected Apps</a></li>
                                    <li><a href="javascript:;" data-bs-toggle="modal" data-bs-target="#del-account">Delete Account</a></li>
                                </ul>
                            </li> -->
                            <!-- <li class="<?php if($page=="provider-availability") { echo 'active'; } ?>"><a href="{{url('provider-availability')}}">Availability</a></li>
                            <li class="<?php if($page=="provider-holiday") { echo 'active'; } ?>"><a href="{{url('provider-holiday')}}">Holidays & Leave</a></li>
                            <li class="<?php if($page=="provider-coupons") { echo 'active'; } ?>"><a href="{{url('provider-coupons')}}">Coupons</a></li>
                            <li class="<?php if($page=="provider-offers") { echo 'active'; } ?>"><a href="{{url('provider-offers')}}">Offers</a></li>
                            <li class="<?php if($page=="provider-reviews") { echo 'active'; } ?>"><a href="{{url('provider-reviews')}}">Reviews</a></li>
                            <li class="<?php if($page=="provider-earnings") { echo 'active'; } ?>"><a href="{{url('provider-earnings')}}">Earnings</a></li>
                            <li class="<?php if($page=="provider-chat") { echo 'active'; } ?>"><a href="{{url('provider-chat')}}">Chat</a></li> -->
                        </ul>
                    </li>
                    @endif

                    @if (Auth::user()->type === 'user')
                    <li class="has-submenu <?php if($page=="customer-dashboard" || $page=="customer-booking-calendar" || $page=="customer-booking" || $page=="customer-favourite" || $page=="customer-wallet" || $page=="customer-reviews" || $page=="customer-chat" || $page=="customer-profile" || $page=="security-settings" || $page=="customer-notifications" || $page=="connected-apps") { echo 'active'; } ?>">
                        <a href="">Customers <i class="fas fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li class="<?php if($page=="customer-dashboard") { echo 'active'; } ?>"><a href="{{url('customer-dashboard')}}">Dashboard</a></li>
                            <li class="<?php if($page=="customer-booking" || $page=="customer-booking-calendar") { echo 'active'; } ?>"><a href="{{url('customer-booking')}}">Booking</a></li>
                            <!-- <li class="<?php if($page=="customer-favourite") { echo 'active'; } ?>"><a href="{{url('customer-favourite')}}">Favorites</a></li>
                            <li class="<?php if($page=="customer-wallet") { echo 'active'; } ?>"><a href="{{url('customer-wallet')}}">Wallet</a></li>
                            <li class="<?php if($page=="customer-reviews") { echo 'active'; } ?>"><a href="{{url('customer-reviews')}}">Reviews</a></li>
                            <li class="<?php if($page=="customer-chat") { echo 'active'; } ?>"><a href="{{url('customer-chat')}}">Chat</a></li>
                            <li class="<?php if($page=="customer-profile" || $page=="security-settings" || $page=="customer-notifications" || $page=="connected-apps") { echo 'active'; } ?>"><a href="{{url('customer-profile')}}">Settings</a></li> -->
                        </ul>
                    </li>
                    @endif

                    @if (Auth::user()->type === 'admin')

                    <li >
                        <a href="{{url('admin/index_admin')}}">Admin Dashboard</i></a>
                      
                    </li>


                    @endif

                    @endauth

                 

                    @guest
                    <li class="login-link">
                        <a href="{{url('choose-signup')}}">Register</a>
                    </li>
                    <li class="login-link">
                        <a href="{{url('login')}}">Login</a>
                    </li>
                    @endguest
                </ul>
            </div>
            @if(!Route::is(['choose-signup','user-signup','provider-signup','login','reset-password','password-recovery','phone-otp','email-otp','free-trial',
            'customer-dashboard','customer-booking','customer-favourite','customer-wallet','customer-reviews','customer-chat','customer-profile','security-settings','customer-notifications','connected-apps','invoice',
            'login-email','login-phone','login-phone1','notification','orders','success','customer-booking-calendar','provider-signup-payment','provider-signup-subscription','index-2','index-3','index-4','index-5',
            'index-6','index-7','index-8','index-9']))
            <ul class="nav header-navbar-rht">
            @guest
                <li class="nav-item">
                    <a class="nav-link header-reg" href="{{url('choose-signup')}}">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link header-login" href="{{url('login')}}"><i class="fa-regular fa-circle-user me-2"></i>Login</a>
                </li>
            @endguest
                @auth
                 <li class="nav-item">
                 <a class="nav-link header-login" href="{{ route('log-out') }}"><i class="fa-regular fa-circle-user me-2"></i>Log out</a>
                </li>                   
                @endauth
            </ul>
            @endif
            @if(Route::is(['choose-signup','user-signup','provider-signup','login','reset-password','password-recovery','phone-otp','email-otp','free-trial','login-email','login-phone','login-phone1','success','provider-signup-payment','provider-signup-subscription']))
            <ul class="nav header-navbar-rht log-rht">
                <!-- <li class="nav-item">
                    <a class="nav-link" href="{{url('faq')}}">FAQ</a>
                </li> -->
                @if(!Route::is(['user-signup','provider-signup','login','reset-password','password-recovery','phone-otp','email-otp','free-trial','login-email','login-phone','login-phone1','provider-signup-payment','provider-signup-subscription']))
                <li class="nav-item">
                    <a class="nav-link" href="{{url('login')}}">Login</a>
                </li>
                @endif
                <li class="nav-item dropdown flag-nav">
                    <!-- <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:;" role="button" aria-expanded="false">
                        <img src="{{ URL::asset('/assets/img/flag.png')}}" alt=""> En
                    </a> -->
                    <div class="dropdown-menu dropdown-menu-right" style="">
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="{{ URL::asset('/assets/img/flags/us.png')}}" alt="" height="16"> En
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="{{ URL::asset('/assets/img/flags/fr.png')}}" alt="" height="16"> French
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="{{ URL::asset('/assets/img/flags/de.png')}}" alt="" height="16"> German
                        </a>
                    </div>
                </li>
            </ul>
            @endif
            @if(Route::is(['customer-dashboard','customer-booking','customer-favourite','customer-wallet','customer-reviews','customer-chat','customer-profile','security-settings','customer-notifications','connected-apps','invoice','notification',
            'orders','customer-booking-calendar']))
            <ul class="nav header-navbar-rht">					
						
                <!-- Language -->
                <li class="nav-item dropdown lang-nav">
                    <div class="flag-dropdown">
                        <a class="dropdown-toggle nav-link" data-bs-toggle="dropdown" href="javascript:;" role="button">
                            <i class="feather-globe me-1"></i> <span>EN</span>
                        </a>
                        <div class="dropdown-menu">
                            <a href="javascript:void(0);" class="dropdown-item">
                                English
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                French
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                Spanish
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                German
                            </a>
                        </div>
                    </div>
                </li>
                <!-- /Language -->
                
                <!-- Language -->
                <li class="nav-item flag-nav dropdown">
                    <div class="flag-dropdown">
                        <a class="dropdown-toggle nav-link" data-bs-toggle="dropdown" href="javascript:;" role="button">
                            <img src="{{ URL::asset('/assets/img/flags/us.png')}}" class="rounded-circle me-1" height="16" alt="">  <span>USD</span>
                        </a>
                        <div class="dropdown-menu">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{ URL::asset('/assets/img/flags/us.png')}}" alt="" height="16"> USD
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{ URL::asset('/assets/img/flags/fr.png')}}" alt="" height="16"> Euro
                            </a>
                        </div>
                    </div>
                </li>
                <!-- /Language -->

                <!-- Chat -->
                <li class="nav-item logged-item msg-nav">
                    <a href="{{url('customer-chat')}}" class="nav-link">
                        <img src="{{ URL::asset('/assets/img/icons/message-icon.svg')}}" alt="">
                    </a>
                </li>
                <!-- /Chat -->

                <!-- Notifications -->
                <li class="nav-item dropdown logged-item noti-nav">
                    <a href="javascript:;" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <img src="{{ URL::asset('/assets/img/icons/bell-icon.svg')}}" alt="">
                    </a>
                    <div class="dropdown-menu notify-blk notifications">
                        <div class="topnav-dropdown-header">
                            <div>
                                <span class="notification-title">Notifications</span>
                                <select>
                                    <option>All</option>
                                    <option>Read</option>
                                </select>
                            </div>
                            <a href="javascript:void(0)" class="clear-noti">Mark all as read <i class="fa-regular fa-circle-check"></i> </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <div class="media d-flex">
                                        <a href="{{url('notification')}}">
                                            <span class="avatar avatar-sm avatar-online flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
                                            </span>
                                        </a>
                                        <div class="media-body flex-grow-1">
                                            <a href="{{url('notification')}}"><p class="noti-details">Lex Murph <span class="noti-title"> requested access to</span> Computer & Server AMC Service </p></a>
                                            <div class="notify-btns">
                                                <button class="btn btn-primary">Accept</button>
                                                <button class="btn btn-secondary">Cancel</button>
                                            </div>
                                            <p class="noti-time"><span class="notification-time">Today 10:04 PM</span></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification-message">
                                    <a href="{{url('notification')}}">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm avatar-online flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg')}}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details">Ray Arnold <span class="noti-title">left 6 comments on</span> Commercial Painting Services</p>
                                                <p class="noti-time"><span class="notification-time">Today 9:45 PM</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="{{url('notification')}}">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm avatar-online flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg')}}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details">Dennis Nedry <span class="noti-title">commented on</span> Electric Panel Repairing Service </p>
                                                <h6>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et  commodo consequat..”</h6>
                                                <p class="noti-time"><span class="notification-time">Yesterday 8:17 AM</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="{{url('notification')}}">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm avatar-online flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-04.jpg')}}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details">John Hammond <span class="noti-title">has booked your</span> House Cleaning Services </p>
                                                <p class="noti-time"><span class="notification-time">Last Wednesday at 11:15 AM</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="{{url('notification')}}">View More <img src="{{ URL::asset('/assets/img/icons/circle-icon.svg')}}" alt=""></a>
                        </div>
                    </div>
                </li>
                <!-- /Notifications -->

                <!-- User Menu -->
                <li class="nav-item dropdown has-arrow account-item">
                    <a href="javascript:;" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <div class="user-infos">
                            <span class="user-img">
                                <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" class="rounded-circle" alt="">
                            </span>
                            <div class="user-info">
                                <h6>John Smith</h6>
                                <p>Demo User</p>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end emp">
                        <a class="dropdown-item" href="{{url('customer-profile')}}">
                            <i class="feather-user me-2"></i> Profile
                        </a>
                        <a class="dropdown-item" href="{{url('/')}}">
                            <i class="feather-log-out me-2"></i> Logout
                        </a>
                    </div>
                </li>
                <!-- /User Menu -->
            </ul>
            @endif
            @if(Route::is(['index-2']))
            <ul class="nav header-navbar-rht">
                <li class="nav-item">
                    <a class="nav-link header-login" href="{{url('login')}}"><i class="feather-user"></i> Register / Login</a>
                </li>
            </ul>
            @endif
            @if(Route::is(['index-3']))
            <ul class="nav header-navbar-rht">
                <li class="nav-item">
                    <a class="nav-link header-login" href="{{url('choose-signup')}}"><i class="feather-calendar me-2"></i>APPOINTMENT</a>
                </li>
                <li class="nav-item">
                    <div class="cta-btn">
                    <a class="btn" href="{{url('provider-signup')}}"><i class="feather-users me-2"></i>REGISTER /</a>
                    <a class="btn ms-1" href="{{url('login')}}">LOGIN</a>
                    </div>
                </li>
            </ul>
            @endif
            @if(Route::is(['index-4']))
            <ul class="nav header-navbar-rht">
                <li class="nav-item">
                    <a class="nav-link header-login" href="{{url('login')}}"><i
                            class="feather-users me-2"></i>Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link header-login" href="{{url('choose-signup')}}"><i
                            class="feather-users me-2"></i>Register</a>
                </li>
            </ul>
            @endif
            @if(Route::is(['index-5']))
            <ul class="nav header-navbar-rht">
                <li class="nav-item">
                    <a class="nav-link header-button" href="{{url('choose-signup')}}">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link header-button header-button-five" href="{{url('login')}}"><i
                            class="feather-user me-2"></i>Login</a>
                </li>
            </ul>
            @endif
            @if(Route::is(['index-6']))
            <ul class="nav header-navbar-rht">
                <li class="nav-item">
                    <a class="nav-link header-button-six" href="{{url('choose-signup')}}"><i
                            class="feather-user-plus me-2"></i>Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link header-button-six" href="{{url('login')}}"><i
                            class="feather-log-in me-2"></i>Login</a>
                </li>
            </ul>
            @endif
            @if(Route::is(['index-7']))
            <ul class="nav header-navbar-rht">
                <li class="nav-item">
                    <a class="nav-link header-login" href="{{url('choose-signup')}}"><i
                            class="feather-user me-2"></i>Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link header-login" href="{{url('login')}}"><i
                            class="feather-user me-2"></i>Login</a>
                </li>
            </ul>
            @endif
            @if(Route::is(['index-8']))
            <ul class="nav header-navbar-rht">
                <li class="nav-item">
                    <a class="nav-link header-login" href="{{url('login')}}"><i class="feather-log-in me-2"></i>Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link header-login" href="{{url('choose-signup')}}"><i class="feather-user-plus me-2"></i>Register</a>
                </li>
            </ul>
            @endif
            @if(Route::is(['index-9']))
            <ul class="nav header-navbar-rht header-navbar-rht-nine ">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('login')}}">Become A Professional</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('login')}}">Become A User</a>
                </li>
            </ul>
            @endif
        </nav>
    </div>
</header>
<!-- /Header -->
@endif
@if(Route::is(['provider-dashboard','provider-services','provider-booking','provider-payout','provider-availability','provider-holiday','provider-coupons',
'provider-subscription','provider-addons','provider-offers','provider-reviews','provider-earnings','provider-chat','provider-appointment-settings',
'provider-profile-settings','provider-social-profile','provider-security-settings','provider-plan','payment-settings','provider-notifcations',
'provider-connected-apps','add-coupon','add-subscription','provider-book-details','provider-services-list']))
<!-- Header -->
<div class="header">
    <div class="header-left"> 
    <div class="sidebar-logo">
            <a href="{{url('/')}}">
                <img src="{{ URL::asset('/assets/img/logo.svg')}}" class="img-fluid logo" alt="">
            </a>
            <a href="{{url('/')}}">
                <img src="{{ URL::asset('/assets/img/logo-small.png')}}" class="img-fluid logo-small" alt="">
            </a>
        </div>
        <div class="siderbar-toggle">
            <label class="switch" id="toggle_btn">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>
        </div>
    </div>
    <a class="mobile_btns" id="mobile_btns" href="javascript:void(0);">
        <i class="fas fa-align-left"></i>
    </a>
    <div class="header-split">
        <div class="page-headers">
            <div class="search-bar">
                <span><i class="feather-search"></i></span>
                <input type="text" placeholder="Search" class="form-control">
            </div>
        </div>
        <ul class="nav user-menu">
            <!-- Notifications -->
            <li class="nav-item">
                <a href="{{url('/')}}" class="viewsite" ><i class="feather-globe me-2"></i>View Site</a>
            </li>
            <li class="nav-item dropdown has-arrow dropdown-heads flag-nav">
                <a class="nav-link" data-bs-toggle="dropdown" href="javascript:;" role="button">
                    <img src="{{ URL::asset('/assets/img/flags/us1.png')}}" alt="" height="20"> 
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{ URL::asset('/assets/img/flags/us.png')}}" class="me-2" alt="" height="16"> English
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{ URL::asset('/assets/img/flags/fr.png')}}" class="me-2" alt="" height="16"> French
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{ URL::asset('/assets/img/flags/es.png')}}" class="me-2" alt="" height="16"> Spanish
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <img src="{{ URL::asset('/assets/img/flags/de.png')}}" class="me-2" alt="" height="16"> German
                    </a>
                </div>
            </li>
            <li class="nav-item  has-arrow dropdown-heads ">
                <a href="javascript:;">
                    <i class="feather-moon"></i>
                </a>
            </li>
            <li class="nav-item dropdown has-arrow dropdown-heads ">
                <a href="javascript:;" data-bs-toggle="dropdown">
                    <i class="feather-bell"></i>
                </a>
                <div class="dropdown-menu notifications">
                    <div class="topnav-dropdown-header">
                        <div>
                            <span class="notification-title">Notifications</span>
                            <select>
                                <option>All</option>
                                <option>Read</option>
                            </select>
                        </div>
                        <a href="javascript:void(0)" class="clear-noti">Mark all as read <i class="fa-regular fa-circle-check"></i> </a>
                    </div>
                    <div class="noti-content">
                        <ul class="notification-list">
                            <li class="notification-message">
                                <div class="media d-flex">
                                    <a href="{{url('notification')}}">
                                        <span class="avatar avatar-sm avatar-online flex-shrink-0">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
                                        </span>
                                    </a>
                                    <div class="media-body flex-grow-1">
                                        <a href="{{url('notification')}}"><p class="noti-details">Lex Murph <span class="noti-title"> requested access to</span> Computer & Server AMC Service </p></a>
                                        <div class="notify-btns">
                                            <button class="btn btn-primary">Accept</button>
                                            <button class="btn btn-secondary">Cancel</button>
                                        </div>
                                        <p class="noti-time"><span class="notification-time">Today 10:04 PM</span></p>
                                    </div>
                                </div>
                            </li>
                            <li class="notification-message">
                                <a href="{{url('provider-notifcations')}}">
                                    <div class="media d-flex">
                                        <span class="avatar avatar-sm avatar-online flex-shrink-0">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg')}}">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details">Ray Arnold <span class="noti-title">left 6 comments on</span> Commercial Painting Services</p>
                                            <p class="noti-time"><span class="notification-time">Today 9:45 PM</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="{{url('provider-notifcations')}}">
                                    <div class="media d-flex">
                                        <span class="avatar avatar-sm avatar-online flex-shrink-0">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg')}}">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details">Dennis Nedry <span class="noti-title">commented on</span> Electric Panel Repairing Service </p>
                                            <h6>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et  commodo consequat..”</h6>
                                            <p class="noti-time"><span class="notification-time">Yesterday 8:17 AM</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="{{url('provider-notifcations')}}">
                                    <div class="media d-flex">
                                        <span class="avatar avatar-sm avatar-online flex-shrink-0">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="{{ URL::asset('/assets/img/profiles/avatar-04.jpg')}}">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details">John Hammond <span class="noti-title">has booked your</span> House Cleaning Services </p>
                                            <p class="noti-time"><span class="notification-time">Last Wednesday at 11:15 AM</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="{{url('provider-notifcations')}}">View More <img src="{{ URL::asset('/assets/img/icons/circle-icon.svg')}}" alt=""></a>
                    </div>
                </div>
            </li>
            <li class="nav-item  has-arrow dropdown-heads ">
                <a href="javascript:;" class="win-maximize">
                    <i class="feather-maximize" ></i>
                </a>
            </li>

            <!-- User Menu -->
            <li class="nav-item dropdown has-arrow account-item">
                <a href="javascript:;" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                    <div class="user-infos">
                        <span class="user-img">
                            <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" class="rounded-circle" alt="">
                        </span>
                        <div class="user-info">
                            <h6>John Smith</h6>
                            <p>Demo User</p>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end emp">
                    <a class="dropdown-item" href="{{url('provider-profile-settings')}}">
                        <i class="feather-user me-2"></i> Profile
                    </a>
                    <a class="dropdown-item" href="{{url('/')}}">
                        <i class="feather-log-out me-2"></i> Logout
                    </a>
                </div>
            </li>
            <!-- /User Menu -->
        </ul>
    </div>
    
</div>
<!-- /Header -->
@endif