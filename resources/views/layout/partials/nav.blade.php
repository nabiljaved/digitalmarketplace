<?php error_reporting(0);?>
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="{{ Request::is('provider-dashboard') ? 'active' : '' }}">
                    <a href="{{url('provider-dashboard')}}"><i class="feather-grid"></i> <span>Dashboard</span></a>
                </li>
                <li class="{{ Request::is('provider-services','provider-services-list') ? 'active' : '' }}">
                    <a href="{{url('provider-services')}}"><i class="feather-briefcase"></i> <span>My Services</span></a>
                </li>
                <li class="{{ Request::is('provider-booking','provider-book-details') ? 'active' : '' }}">
                    <a href="{{url('provider-booking')}}"><i class="feather-calendar"></i> <span>Bookings </span></a>
                </li>
                <li class="{{ Request::is('provider-payout') ? 'active' : '' }}">
                    <a href="{{url('provider-payout')}}"><i class="feather-credit-card"></i> <span>Payout</span></a>
                </li>
                <li class="{{ Request::is('provider-availability') ? 'active' : '' }}">
                    <a href="{{url('provider-availability')}}"><i class="feather-clock"></i> <span>Availability</span></a>
                </li>
                <li class="{{ Request::is('provider-holiday') ? 'active' : '' }}">
                    <a href="{{url('provider-holiday')}}"><i class="feather-calendar"></i> <span>Holidays & Leave</span></a>
                </li>
                <li class="{{ Request::is('provider-coupons','add-coupon') ? 'active' : '' }}">
                    <a href="{{url('provider-coupons')}}"><i class="feather-bookmark"></i> <span>Coupons</span></a>
                </li>
                <li class="{{ Request::is('provider-subscription','provider-addons','add-subscription') ? 'active' : '' }}">
                    <a href="{{url('provider-subscription')}}"><i class="feather-dollar-sign"></i> <span>Subscription</span></a>
                </li>
                <li class="{{ Request::is('provider-offers') ? 'active' : '' }}">
                    <a href="{{url('provider-offers')}}"><i class="feather-percent"></i> <span>Offers</span></a>
                </li>
                <li class="{{ Request::is('provider-reviews') ? 'active' : '' }}">
                    <a href="{{url('provider-reviews')}}"><i class="feather-star"></i> <span>Reviews</span></a>
                </li>
                <li class="{{ Request::is('provider-earnings') ? 'active' : '' }}">
                    <a href="{{url('provider-earnings')}}"><i class="feather-dollar-sign"></i> <span>Earnings</span></a>
                </li>
                <li class="{{ Request::is('provider-chat') ? 'active' : '' }}">
                    <a href="{{url('provider-chat')}}"><i class="feather-message-circle"></i> <span>Chat</span></a>
                </li>						
                <li class="submenu {{ Request::is('providerment-settings','provider-appointment-settings','provider-profile-settings','provider-social-profile','provider-security-settings','provider-plan','payment-settings','provider-notifcations','provider-connected-apps') ? 'active' : '' }}">
                    <a href="{{url('provider-settings')}}"><i class="feather-settings"></i> <span>Settings</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li>
                            <a href="{{url('provider-appointment-settings')}}" class="{{ Request::is('provider-appointment-settings') ? 'active' : '' }}">Appointment Settings</a>
                        </li>
                        <li>
                            <a href="{{url('provider-profile-settings')}}" class="{{ Request::is('provider-profile-settings') ? 'active' : '' }}">Account Settings</a>
                        </li>
                        <li>
                            <a href="{{url('provider-social-profile')}}" class="{{ Request::is('provider-social-profile') ? 'active' : '' }}">Social Profiles</a>
                        </li>
                        <li>
                            <a href="{{url('provider-security-settings')}}" class="{{ Request::is('provider-security-settings') ? 'active' : '' }}">Security Setting</a>
                        </li>
                        <li>
                            <a href="{{url('provider-plan')}}" class="{{ Request::is('provider-plan') ? 'active' : '' }}">Plan & Billings</a>
                        </li>
                        <li>
                            <a href="{{url('payment-settings')}}" class="{{ Request::is('payment-settings') ? 'active' : '' }}">Payment Settings</a>
                        </li>
                        <li>
                            <a href="{{url('provider-notifcations')}}" class="{{ Request::is('provider-notifcations') ? 'active' : '' }}">Notifications</a>
                        </li>
                        <li>
                            <a href="{{url('provider-connected-apps')}}" class="{{ Request::is('provider-connected-apps') ? 'active' : '' }}">Connected Apps</a>
                        </li>
                        <li>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#del-account">Delete Account</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ Request::is('index') ? 'active' : '' }}">
                    <a href="{{url('/')}}"><i class="feather-log-out"></i> <span>Logout</span></a>
                </li>
            </ul>
            <div class="menu-bottom">
                <div class="menu-user">
                    <div class="menu-user-img avatar-online">
                        <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="user">
                    </div>
                    <div class="menu-user-info">
                        <h6>John Smith</h6>
                        <p>johnsmith@gmail.com</p>
                    </div>
                </div>						
                <a href="javascript:;" class="select-set"><i class="feather-settings"></i></a>
                <div class="dropdown-menu user-drop" id="dropboxes">
                    <div class="menu-user">
                        <div class="menu-user-img avatar-online">
                            <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="user">
                        </div>
                        <div class="menu-user-info">
                            <h6>John Smith</h6>
                            <p>Active</p>
                        </div>
                    </div>
                    <div class="set-user">
                        <p>Set as Away</p>
                        <div class="status-toggle">
                            <input type="checkbox" id="active-user" class="check">
                            <label for="active-user" class="checktoggle">checkbox</label>
                        </div>
                    </div>
                    <ul class="set-menu">
                        <li>
                            <a href="{{url('provider-security-settings')}}">
                                <i class="feather-settings me-2"></i> Settings
                            </a>
                        </li>
                        <li>
                            <a href="{{url('provider-profile-settings')}}">
                                <i class="feather-user me-2"></i> Your Account
                            </a>
                        </li>
                        <li>								
                            <a href="javascript:void(0)">
                                <i class="feather-check-circle me-2"></i> Identity Verification
                            </a>
                        </li>
                    </ul>
                    <ul class="help-menu">
                        <li>								
                            <a href="javascript:;">
                                Help Center
                            </a>
                        </li>
                        <li>																
                            <a href="{{url('terms-condition')}}">
                                Terms of Condition
                            </a>
                        </li>
                        <li>																
                            <a href="{{url('privacy-policy')}}">
                                Privacy Policy
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Sidebar -->