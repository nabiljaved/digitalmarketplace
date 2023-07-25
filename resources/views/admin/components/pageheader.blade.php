<!-- Page Header -->
@if (!Route::is(['categories', 'sub-categories', 'review-type', 'review', 'blogs-categories',
'blogs-comments','admin-earnings', 'provider-earnings', 'membership-transaction']))
<div class="content-page-header content-page-headersplit">
    @endif
    @if (Route::is(['categories', 'sub-categories', 'review-type', 'review', 'blogs-categories',
    'blogs-comments','admin-earnings', 'provider-earnings', 'membership-transaction']))
    <div class="content-page-header content-page-headersplit mb-0">
    @endif
    <h5>{{ $title }}</h5>
    <div class="list-btn">
        @if (!Route::is(['menu-management', 'edit-managemenet']))
            <ul>
                @if (
                    !Route::is([
                        'categories', 'sub-categories','review-type','review', 'booking','pending-booking', 'inprogress-booking',
                        'completed-booking','cancelled-booking','banktransferlist', 'approved-transferlist','pending-transferlist',
                        'successful-transferlist',  'rejected-transferlist', 'wallet','refund-request','cash-on-delivery',
                        'payout-request','sales-transactions', 'pages-list','page-list', 'all-blog', 'pending-blog', 'inactive-blog',
                        'blog-categories', 'blogs-comments','countries','states', 'cities','testimonials','faq','membership',
                        'admin-earnings','provider-earnings','membership-transaction','user-list', 'user-customers','user-providers',
                        'roles-permissions','delete-account-requests','marketing-coupons','marketing-service','marketing-featured',
                        'marketing-newsletter', 'email-templates','sms-templates','plugins-manager', 'available-plugins','website-settings',
                        'contact-messages', 'contact-messages-view','abuse-reports','announcements',
                    ]))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/services') }}"><i class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['categories']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/categories') }}"><i class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['sub-categories']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/sub-categories') }}"><i class="fe fe-list"></i>
                        </a>
                    </li>
                @endif
                @if (Route::is(['review-type']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/review-type') }}"><i class="fe fe-list"></i>
                        </a>
                    </li>
                @endif
                @if (Route::is(['review']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/review') }}"><i class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['booking']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/booking') }}"><i class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['pending-booking']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/pending-booking') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['inprogress-booking']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/inprogress-booking') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['completed-booking']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/completed-booking') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['cancelled-booking']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/cancelled-booking') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['banktransferlist']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/banktransferlist') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['approved-transferlist']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/approved-transferlist') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['pending-transferlist']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/pending-transferlist') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['successful-transferlist']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/successful-transferlist') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['rejected-transferlist']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/rejected-transferlist') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['wallet']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/wallet') }}"><i class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['refund-request']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/refund-request') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['cash-on-delivery']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/cash-on-delivery') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['payout-request']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/payout-request') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['sales-transactions']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/sales-transactions') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['pages-list']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/pages-list') }}"><i class="fe fe-list"></i>
                        </a>
                    </li>
                @endif
                @if (Route::is(['page-list']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/page-list') }}"><i class="fe fe-list"></i>
                        </a>
                    </li>
                @endif
                @if (Route::is(['all-blog']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/all-blog') }}"><i class="fe fe-list"></i>
                        </a>
                    </li>
                @endif
                @if (Route::is(['pending-blog']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/pending-blog') }}"><i class="fe fe-list"></i>
                        </a>
                    </li>
                @endif
                @if (Route::is(['inactive-blog']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/inactive-blog') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['blog-categories']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/blogs-categories') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['blogs-comments']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/blogs-comments') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['countries']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/countries') }}"><i class="fe fe-list"></i>
                        </a>
                    </li>
                @endif
                @if (Route::is(['states']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/states') }}"><i class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['cities']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/cities') }}"><i class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['testimonials']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/testimonials') }}"><i class="fe fe-list"></i>
                        </a>
                    </li>
                @endif
                @if (Route::is(['faq']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/faq') }}"><i class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['admin-earnings']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/admin-earnings') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['provider-earnings']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/provider-earnings') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['membership-transaction']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/membership-transaction') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['user-customers']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/user-customers') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['user-providers']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/user-providers') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['roles-permissions']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/roles-permissions') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['delete-account-requests']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/delete-account-requests') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['marketing-coupons']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/marketing-coupons') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['marketing-service']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/marketing-service') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['marketing-featured']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/marketing-featured') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['marketing-newsletter']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/marketing-newsletter') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['email-templates']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/email-templates') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['sms-templates']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/sms-templates') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['contact-messages']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/contact-messages') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['abuse-reports']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/abuse-reports') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (Route::is(['announcements']))
                    <li>
                        <a class="btn-filters active" href="{{ url('admin/announcements') }}"><i
                                class="fe fe-list"></i> </a>
                    </li>
                @endif
                @if (
                    !Route::is([
                        'membership',
                        'user-list',
                        'plugins-manager',
                        'available-plugins',
                        'website-settings',
                        'contact-messages-view',
                    ]))
                    @if (!Route::is(['pages-list', 'page-list', 'roles-permissions']))
                        <li>
                            <a class="btn-filters" href="{{ url('admin/localization') }}"><i
                                    class="fe fe-settings"></i> </a>
                        </li>
                    @endif
                    <li>
                        <div class="filter-sorting">
                            <ul>
                                <li>
                                    <a href="javascript:void(0);" class="filter-sets"><img
                                            src="{{ URL::asset('/admin_assets/img/icons/filter1.svg') }}"
                                            class="me-2" alt="img">Filter</a>
                                </li>
                                <li>
                                    <span><img src="{{ URL::asset('/admin_assets/img/icons/sort.svg') }}"
                                            class="me-2" alt="img"></span>
                                    <div class="review-sort">
                                        <select class="select">
                                            <option>A -> Z</option>
                                            <option>Z -> A</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endif
                @if (
                    !Route::is([
                        'categories','sub-categories', 'review-type', 'review','booking','pending-booking', 'inprogress-booking',
                        'completed-booking', 'cancelled-booking','banktransferlist', 'approved-transferlist','pending-transferlist',
                        'successful-transferlist','rejected-transferlist','wallet','refund-request','cash-on-delivery','payout-request',
                        'sales-transactions', 'pages-list','page-list','all-blog','pending-blog','inactive-blog','blogs-categories',
                        'blogs-comments','countries', 'states','cities','testimonials', 'faq','membership', 'admin-earnings',
                        'provider-earnings', 'membership-transaction','user-list','user-customers', 'user-providers', 'roles-permissions',
                        'delete-account-requests', 'marketing-coupons', 'marketing-service', 'marketing-featured','marketing-newsletter',
                        'email-templates','sms-templates', 'plugins-manager','available-plugins','website-settings', 'contact-messages',
                        'contact-messages-view', 'abuse-reports','announcements',
                    ]))
                    <li>
                        <a class="btn btn-primary" href="{{ url('admin/add-service') }}"><i
                                class="fa fa-plus me-2"></i>Add Services </a>
                    </li>
                @endif
                @if (Route::is(['categories']))
                    <li>
                        <a class="btn btn-primary" href="{{ url('admin/add-categories') }}"><i
                                class="fa fa-plus me-2"></i>Add Categories </a>
                    </li>
                @endif
                @if (Route::is(['sub-categories']))
                    <li>
                        <a class="btn btn-primary" href="{{ url('admin/add-subcategories') }}"><i
                                class="fa fa-plus me-2"></i>Add Sub Categories </a>
                    </li>
                @endif
                @if (Route::is(['review-type']))
                    <li>
                        <a class="btn btn-primary" href="{{ url('admin/add-reviewtype') }}"><i
                                class="fa fa-plus me-2"></i>Add Reviews Type</a>
                    </li>
                @endif
                @if (Route::is(['payout-request']))
                    <li>
                        <a class="btn btn-primary" href="{{ url('admin/add-payout') }}"><i
                                class="fa fa-plus me-2"></i>Add Payout</a>
                    </li>
                @endif
                @if (Route::is(['page-list']))
                    <li>
                        <a class="btn btn-primary" href="{{ url('admin/add-page') }}"><i
                                class="fa fa-plus me-2"></i>Add Pages</a>
                    </li>
                @endif
                @if (Route::is(['all-blog', 'pending-blog', 'inactive-blog']))
                    <li>
                        <a class="btn btn-primary" href="{{ url('admin/add-blog') }}"><i
                                class="fa fa-plus me-2"></i>Add Blog</a>
                    </li>
                @endif
                @if (Route::is(['blogs-categories']))
                    <li>
                        <a class="btn btn-primary" href="{{ url('admin/add-blog-categories') }}"><i
                                class="fa fa-plus me-2"></i>Add Categories</a>
                    </li>
                @endif
                @if (Route::is(['countries']))
                    <li>
                        <a class="btn btn-primary" href="{{ url('admin/add-countries') }}"><i
                                class="fa fa-plus me-2"></i>Add Countries</a>
                    </li>
                @endif
                @if (Route::is(['states']))
                    <li>
                        <a class="btn btn-primary" href="{{ url('admin/add-state') }}"><i
                                class="fa fa-plus me-2"></i>Add State</a>
                    </li>
                @endif
                @if (Route::is(['cities']))
                    <li>
                        <a class="btn btn-primary" href="{{ url('admin/add-city') }}"><i
                                class="fa fa-plus me-2"></i>Add City</a>
                    </li>
                @endif
                @if (Route::is(['testimonials']))
                    <li>
                        <a class="btn btn-primary" href="{{ url('admin/add-testimonials') }}"><i
                                class="fa fa-plus me-2"></i>Add Testimonials</a>
                    </li>
                @endif
                @if (Route::is(['faq']))
                    <li>
                        <a class="btn btn-primary" href="javascript:void(0);" data-bs-toggle="modal"
                            data-bs-target="#add-faq"><i class="fa fa-plus me-2"></i>Add FAQ </a>
                    </li>
                @endif
                @if (Route::is(['membership']))
                    <li>
                        <a class="btn btn-primary" href="{{ url('admin/add-membership') }}"><i
                                class="fa fa-plus me-2"></i>Add Membership</a>
                    </li>
                @endif
                @if (Route::is(['user-list']))
                    <li>
                        <a class="btn btn-primary" href="{{ url('admin/add-user') }}"><i
                                class="fa fa-plus me-2"></i>Add User</a>
                    </li>
                @endif
                @if (Route::is(['user-customers']))
                    <li>
                        <a class="btn btn-primary" href="{{ url('admin/add-customer') }}"><i
                                class="fa fa-plus me-2"></i>Add Customer</a>
                    </li>
                @endif
                @if (Route::is(['user-providers']))
                    <li>
                        <a class="btn btn-primary" href="{{ url('admin/add-provider') }}"><i
                                class="fa fa-plus me-2"></i>Add Provider</a>
                    </li>
                @endif
                @if (Route::is(['plugins-manager', 'available-plugins']))
                    <li>
                        <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-plus me-2"></i>Add
                            Plugins</a>
                    </li>
                @endif
                @if (Route::is(['announcements']))
                    <li>
                        <a class="btn btn-primary" href="{{ url('admin/add-announcement') }}"><i
                                class="fa fa-plus me-2"></i>Add Announcement</a>
                    </li>
                @endif
                @if (Route::is(['roles-permissions']))
                    <li>
                        <a class="btn btn-primary" href="javascript:;" data-bs-toggle="modal"
                            data-bs-target="#add-role"><i class="fa fa-plus me-2"></i>Add Role</a>
                    </li>
                @endif
                @if (Route::is(['marketing-featured']))
                    <li>
                        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-features"><i
                                class="fa fa-plus me-2"></i>Add Feature Service</a>
                    </li>
                @endif
                @if (Route::is(['marketing-newsletter']))
                    <li>
                        <a class="btn btn-primaryline" data-bs-toggle="modal" data-bs-target="#send-email"><i
                                class="fa fa-envelope me-2" aria-hidden="true"></i>Send Email</a>
                    </li>
                    <li>
                        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-subscriber"><i
                                class="fa fa-plus me-2"></i>Add Subscriber</a>
                    </li>
                @endif
                @if (Route::is(['website-settings']))
                    <li>
                        <a href="javascript:void(0);" class="btn btn-primary">Manage with Live Preview</a>
                    </li>
                @endif
            </ul>
        @endif
        @if (Route::is(['menu-management', 'edit-managemenet']))
            <ul>
                <li>
                    <div class="filter-selects">
                        <div class="form-group mb-0">
                            <div class="group-image">
                                <img src="{{ URL::asset('/admin_assets/img/flags/us1.png') }}" alt="img">
                                <select class="select">
                                    <option>Language</option>
                                    <option>English</option>
                                    <option>Spanish</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </li>
                @if (!Route::is(['edit-managemenet']))
                    <li>
                        <a class="btn btn-primary" href="{{ url('admin/create-menu') }}"><i
                                class="fa fa-plus me-2"></i>Create Menu</a>
                    </li>
                @endif
            </ul>
        @endif
    </div>
</div>

@if (Route::is(['contact-messages-view']))
    <ul class="con-list">
        <li>
            <span class="con-img">
                <img src="{{ URL::asset('/admin_assets/img/customer/user-04.jpg') }}" alt="">
            </span>
            <div class="con-info">
                <h6>Name</h6>
                <p>John Smith</p>
            </div>
        </li>
        <li>
            <span class="con-icon">
                <i class="fe fe-message-square"></i>
            </span>
            <div class="con-info">
                <h6>Email</h6>
                <p>john@example.com</p>
            </div>
        </li>
        <li>
            <span class="con-icon">
                <i class="fe fe-phone-call"></i>
            </span>
            <div class="con-info">
                <h6>Phone</h6>
                <p>+1 347-679-8275</p>
            </div>
        </li>
        <li>
            <span class="con-icon">
                <i class="fe fe-message-circle"></i>
            </span>
            <div class="con-info">
                <h6>Message</h6>
                <p>Need this script</p>
            </div>
        </li>
        <li>
            <span class="con-icon">
                <i class="fe fe-calendar"></i>
            </span>
            <div class="con-info">
                <h6>Date</h6>
                <p>28 Sep 2022</p>
            </div>
        </li>
        <li>
            <a href="javascript:;" class="btn btn-primary btn-reply" data-bs-toggle="modal"
                data-bs-target="#add-reply">Reply</a>
        </li>
    </ul>
@endif
<!-- /Page Header -->
