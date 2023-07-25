<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="sidebar-logo">
            <a href="{{ url('admin/index_admin') }}">
                <img src="{{ URL::asset('assets/img/company/logo.png') }}" class="img-fluid logo" alt="">
            </a>
            <!-- <h6 style="color:#ffffff">Digital Market Place</h6> -->
            <a href="{{ url('admin/index_admin') }}">
                <img src="{{ URL::asset('/admin_assets/img/logo-small.svg') }}" class="img-fluid logo-small"
                    alt="" >
            </a>
        </div>
        <div class="siderbar-toggle">
            <label class="switch" id="toggle_btn">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>
        </div>
    </div>

    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title m-0">
                    <h6>Home</h6>
                </li>
                <li>
                    <a class="{{ Request::is('admin/index_admin') ? 'active' : '' }}"
                        href="{{ url('admin/index_admin') }}"><i class="fe fe-grid "></i> <span>Dashboard</span></a>
                </li>
                <li class="menu-title">
                    <h6>Services</h6>
                </li>
                <li>
                    <a class="{{ Request::is('admin/services', 'admin/pending-services', 'admin/deleted-services', 'admin/inactive-services', 'admin/add-service', 'admin/edit-service') ? 'active' : '' }}"
                        href="{{ url('admin/services') }}"><i class="fe fe-briefcase"></i>
                        <span>Services</span>
                    </a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/categories', 'admin/add-categories', 'admin/edit-categories') ? 'active' : '' }}"
                        href="{{ url('admin/categories') }}"><i class="fe fe-file-text"></i>
                        <span>Categories</span>
                    </a>
                </li>
                <!-- <li>
                    <a class="{{ Request::is('admin/sub-categories', 'admin/add-subcategories', 'admin/edit-subcategories') ? 'active' : '' }}"
                        href="{{ url('admin/sub-categories') }}"><i class="fe fe-clipboard"></i> <span>Sub
                            Categories</span></a>
                </li> -->
                <!-- <li class="submenu">
                    <a href="javascript:void(0);"><i class="fe fe-star"></i>
                        <span>Review</span>
                        <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ Request::is('admin/review-type', 'admin/add-reviewtype', 'admin/edit-reviewtype') ? 'active' : '' }}"
                                href="{{ url('admin/review-type') }}">Review Type</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('admin/review') ? 'active' : '' }}"
                                href="{{ url('admin/review') }}">Review</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-title">
                    <h6>Booking</h6>
                </li>
                <li>
                    <a class="{{ Request::is('admin/booking', 'admin/pending-booking', 'admin/inprogress-booking', 'admin/completed-booking', 'admin/cancelled-booking') ? 'active' : '' }}"
                        href="{{ url('admin/booking') }}"><i class="fe fe-smartphone"></i> <span> Bookings</span></a>
                </li>
                <li class="menu-title">
                    <h6>Finance & Accounts</h6>
                </li>
                <li>
                    <a class="{{ Request::is('admin/banktransferlist', 'admin/approved-transferlist', 'admin/pending-transferlist', 'admin/successful-transferlist', 'admin/rejected-transferlist') ? 'active' : '' }}"
                        href="{{ url('admin/banktransferlist') }}"><i class="fe fe-file"></i>
                        <span>Bank Transfer</span>
                    </a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/wallet') ? 'active' : '' }}" href="{{ url('admin/wallet') }}"><i
                            class="fe fe-credit-card"></i>
                        <span>Wallet</span>
                    </a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/refund-request') ? 'active' : '' }}"
                        href="{{ url('admin/refund-request') }}"><i class="fe fe-git-pull-request"></i> <span>Refund
                            Request</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/cash-on-delivery') ? 'active' : '' }}"
                        href="{{ url('admin/cash-on-delivery') }}"><i class="fe fe-dollar-sign"></i> <span>Cash on
                            Delivery</span></a>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><i class="fe fe-credit-card"></i>
                        <span>Payouts</span>
                        <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ Request::is('admin/payout-request', 'admin/add-payout') ? 'active' : '' }}"
                                href="{{ url('admin/payout-request') }}">Payout Requests</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('admin/payout-settings') ? 'active' : '' }}"
                                href="{{ url('admin/payout-settings') }}">Payout Settings</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="{{ Request::is('admin/sales-transactions') ? 'active' : '' }}"
                        href="{{ url('admin/sales-transactions') }}"><i class="fe fe-bar-chart"></i> <span>Sales
                            Transactions</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/tax-rates') ? 'active' : '' }}"
                        href="{{ url('admin/tax-rates') }}"><i class="fe fe-file-text"></i>
                        <span>Tax Rates</span>
                    </a>
                </li>
                <li class="menu-title">
                    <h6>Others</h6>
                </li>
                <li>
                    <a class="{{ Request::is('admin/chat') ? 'active' : '' }}" href="{{ url('admin/chat') }}"><i
                            class="fe fe-message-square"></i> <span>Chat</span></a>
                </li>
                <li class="menu-title">
                    <h6>Content</h6>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><i class="fe fe-file"></i>
                        <span>Pages</span>
                        <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ Request::is('admin/add-page') ? 'active' : '' }}"
                                href="{{ url('admin/add-page') }}">Add Page</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('admin/pages-list', 'admin/edit-page') ? 'active' : '' }}"
                                href="{{ url('admin/pages-list') }}">Pages</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('admin/page-list') ? 'active' : '' }}"
                                href="{{ url('admin/page-list') }}">Pages List</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><i class="fe fe-file-text"></i>
                        <span>Blog</span>
                        <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ Request::is('admin/all-blog', 'admin/pending-blog', 'admin/inactive-blog') ? 'active' : '' }}"
                                href="{{ url('admin/all-blog') }}">All Blog</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('admin/add-blog', 'admin/edit-blog') ? 'active' : '' }}"
                                href="{{ url('admin/add-blog') }}">Add Blog</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('admin/blogs-categories', 'admin/add-blog-categories', 'admin/edit-blog-categories') ? 'active' : '' }}"
                                href="{{ url('admin/blogs-categories') }}">Categories</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('admin/blogs-comments') ? 'active' : '' }}"
                                href="{{ url('admin/blogs-comments') }}">Blog Comments</a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><i class="fe fe-map-pin"></i>
                        <span>Location</span>
                        <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ Request::is('admin/countries', 'admin/add-countries', 'admin/edit-countries') ? 'active' : '' }}"
                                href="{{ url('admin/countries') }}">Countries</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('admin/states', 'admin/add-states', 'admin/edit-state') ? 'active' : '' }}"
                                href="{{ url('admin/states') }}">States</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('admin/cities', 'admin/add-city', 'admin/edit-city') ? 'active' : '' }}"
                                href="{{ url('admin/cities') }}">Cities</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="{{ Request::is('admin/testimonials', 'admin/add-testimonials', 'admin/edit-testimonials') ? 'active' : '' }}"
                        href="{{ url('admin/testimonials') }}"><i class="fe fe-star"></i>
                        <span>Testimonials</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/faq') ? 'active' : '' }}" href="{{ url('admin/faq') }}"><i
                            class="fe fe-help-circle"></i> <span>FAQ</span></a>
                </li>
                <li class="menu-title">
                    <h6>Membership</h6>
                </li>
                <li>
                    <a class="{{ Request::is('admin/membership', 'admin/add-membership') ? 'active' : '' }}"
                        href="{{ url('admin/membership') }}"><i class="fe fe-user"></i> <span>Membership</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/membership-addons') ? 'active' : '' }}"
                        href="{{ url('admin/membership-addons') }}"><i class="fe fe-user-plus"></i> <span>Membership
                            Addons</span></a>
                </li>
                <li class="menu-title">
                    <h6>Reports</h6>
                </li>
                <li>
                    <a class="{{ Request::is('admin/admin-earnings') ? 'active' : '' }}"
                        href="{{ url('admin/admin-earnings') }}"><i class="fe fe-user"></i>
                        <span>Admin Earnings</span>
                    </a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/provider-earnings') ? 'active' : '' }}"
                        href="{{ url('admin/provider-earnings') }}"><i class="fe fe-dollar-sign"></i>
                        <span>Provider Earnings</span>
                    </a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/membership-transaction') ? 'active' : '' }}"
                        href="{{ url('admin/membership-transaction') }}"><i class="fe fe-tv"></i>
                        <span>Membership Transaction</span>
                    </a>
                </li>
                <li class="menu-title">
                    <h6>User Management</h6>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><i class="fe fe-user"></i>
                        <span> Users</span>
                        <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a class="{{ Request::is('admin/user-list', 'admin/add-user', 'admin/edit-user') ? 'active' : '' }}"
                                href="{{ url('admin/user-list') }}">New User</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('admin/user-customers', 'admin/add-customer', 'admin/edit-customer') ? 'active' : '' }}"
                                href="{{ url('admin/user-customers') }}">Customers</a>
                        </li>
                        <li>
                            <a class="{{ Request::is('admin/user-providers', 'admin/add-provider', 'admin/edit-provider') ? 'active' : '' }}"
                                href="{{ url('admin/user-providers') }}">Providers </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="{{ Request::is('admin/roles-permissions', 'admin/role-permission') ? 'active' : '' }}"
                        href="{{ url('admin/roles-permissions') }}"><i class="fe fe-file"></i> <span>Roles &
                            Permissions</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/delete-account-requests') ? 'active' : '' }}"
                        href="{{ url('admin/delete-account-requests') }}"><i class="fe fe-trash-2"></i> <span>Delete
                            Account Requests</span></a>
                </li>
                <li class="menu-title">
                    <h6>Marketing</h6>
                </li>
                <li>
                    <a class="{{ Request::is('admin/marketing-coupons', 'admin/edit-coupon') ? 'active' : '' }}"
                        href="{{ url('admin/marketing-coupons') }}"><i class="fe fe-bookmark"></i>
                        <span>Coupons</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/marketing-service', 'admin/edit-offer') ? 'active' : '' }}"
                        href="{{ url('admin/marketing-service') }}"><i class="fe fe-briefcase"></i> <span>Service
                            Offers</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/marketing-featured') ? 'active' : '' }}"
                        href="{{ url('admin/marketing-featured') }}"><i class="fe fe-briefcase"></i> <span>Featured
                            Services</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/marketing-newsletter') ? 'active' : '' }}"
                        href="{{ url('admin/marketing-newsletter') }}"><i class="fe fe-mail"></i> <span>Email
                            Newsletter</span></a>
                </li>
                <li class="menu-title">
                    <h6>Management</h6>
                </li>
                <li>
                    <a class="{{ Request::is('admin/cachesystem') ? 'active' : '' }}"
                        href="{{ url('admin/cachesystem') }}"><i class="fe fe-user"></i>
                        <span>Cache System</span>
                    </a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/email-templates', 'admin/edit-email-template') ? 'active' : '' }}"
                        href="{{ url('admin/email-templates') }}"><i class="fe fe-mail"></i> <span>Email
                            Templates</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/sms-templates', 'admin/edit-sms-template') ? 'active' : '' }}"
                        href="{{ url('admin/sms-templates') }}"><i class="fe fe-message-square"></i> <span>SMS
                            Templates</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/menu-management', 'admin/edit-managemenet') ? 'active' : '' }}"
                        href="{{ url('admin/menu-management') }}"><i class="fe fe-file-text"></i> <span>Menu
                            Management</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/website-settings') ? 'active' : '' }}"
                        href="{{ url('admin/website-settings') }}"><i class="fe fe-credit-card"></i>
                        <span>Widgets</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/create-menu') ? 'active' : '' }}"
                        href="{{ url('admin/create-menu') }}"><i class="fe fe-list"></i> <span>Create Menu</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/plugins-manager', 'admin/available-plugins') ? 'active' : '' }}"
                        href="{{ url('admin/plugins-manager') }}"><i class="fe fe-tv"></i><span>Plugin
                            Managers</span> </a>
                </li>
                <li class="menu-title">
                    <h6>Support</h6>
                </li>
                <li>
                    <a class="{{ Request::is('admin/contact-messages', 'admin/contact-messages-view') ? 'active' : '' }}"
                        href="{{ url('admin/contact-messages') }}"><i class="fe fe-message-square"></i>
                        <span>Contact
                            Messages</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/abuse-reports') ? 'active' : '' }}"
                        href="{{ url('admin/abuse-reports') }}"><i class="fe fe-file-text"></i> <span>Abuse
                            Reports</span></a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/announcements', 'admin/add-announcement', 'admin/edit-announcement') ? 'active' : '' }}"
                        href="{{ url('admin/announcements') }}"><i class="fe fe-mic"></i>
                        <span>Announcements</span></a>
                </li>
                <li class="menu-title">
                    <h6>Settings</h6>
                </li>
                <li>
                    <a class="{{ Request::is(
                        'admin/localization','admin/account-settings','admin/security','admin/social-profiles',
                        'admin/notifications', 'admin/connected-apps', 'admin/site-information','admin/seo-settings',
                        'admin/preference-settings','admin/appearance','admin/header-settings','admin/footer-settings',
                        'admin/authentication-settings','admin/social-authentication', 'admin/language','admin/email-settings',
                        'admin/sms-settings', 'admin/gdpr-settings','admin/payment-gateways', 'admin/payment-settings',
                        'admin/currencies', 'admin/service-settings','admin/provider-settings',
                        'admin/storage-settings','admin/ban-ip-address','admin/cronjob','admin/system-backup',
                        'admin/database-backup', 'admin/system-information',
                    ) ? 'active' : '' }}"
                        href="{{ url('admin/localization') }}"><i class="fe fe-settings"></i>
                        <span>Settings</span>
                    </a>
                </li>
                <li>
                    <a class="{{ Request::is('admin/signin') ? 'active' : '' }}"
                        href="{{ url('admin/signin') }}"><i class="fe fe-log-out"></i> <span>Logout</span></a>
                </li> -->
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
