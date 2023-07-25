 <!-- Customer Menu -->
 <div class="col-md-4 col-lg-3 theiaStickySidebar">
    <div class="settings-widget">
        <div class="settings-header">
            <div class="settings-img">
                <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="user">
            </div>
            <h6>John Smith</h6>
            <p>Member Since Apr 2023</p>
        </div>
        <div class="settings-menu">
            <ul>
                <li>
                    <a href="{{url('customer-dashboard')}}" class="{{ Request::is('customer-dashboard') ? 'active' : '' }}">
                        <i class="feather-grid"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('customer-booking')}}" class="{{ Request::is('customer-booking','customer-booking-calendar') ? 'active' : '' }}">
                        <i class="feather-smartphone"></i> <span>Bookings</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('customer-favourite')}}" class="{{ Request::is('customer-favourite') ? 'active' : '' }}">
                        <i class="feather-heart"></i> <span>Favorites</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('customer-wallet')}}" class="{{ Request::is('customer-wallet') ? 'active' : '' }}">
                        <i class="feather-credit-card"></i>  <span>Wallet</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('customer-reviews')}}" class="{{ Request::is('customer-reviews') ? 'active' : '' }}">
                        <i class="feather-star"></i> <span>Reviews</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('customer-chat')}}" class="{{ Request::is('customer-chat') ? 'active' : '' }}">
                        <i class="feather-message-circle"></i> <span>Chat</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('customer-profile')}}" class="{{ Request::is('customer-profile','connected-apps','security-settings','customer-notifications') ? 'active' : '' }}">
                        <i class="feather-settings"></i> <span>Settings</span>
                    </a>
                    <ul class="setting-submenu">
                        <li>
                            <a href="{{url('customer-profile')}}" class="{{ Request::is('customer-profile') ? 'active' : '' }}">Account</a>
                        </li>
                        <li>
                            <a href="{{url('security-settings')}}" class="{{ Request::is('security-settings') ? 'active' : '' }}">Security</a>
                        </li>
                        <li>
                            <a href="{{url('customer-notifications')}}" class="{{ Request::is('customer-notifications') ? 'active' : '' }}">Notifications</a>
                        </li>
                        <li>
                            <a href="{{url('connected-apps')}}" class="{{ Request::is('connected-apps') ? 'active' : '' }}">Connected Apps</a>
                        </li>
                        <li>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#del-account">Delete Account</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('/')}}" class="{{ Request::is('index') ? 'active' : '' }}">
                        <i class="feather-log-out"></i> <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Customer Menu -->