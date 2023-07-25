<?php $page = 'customer-dashboard'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">

                @component('components.customermenu')
                @endcomponent

                <div class="col-md-8 col-lg-9">
                    <div class="widget-title">
                        <h4>Dashboard</h4>
                    </div>

                    <!-- Dashboard Widget -->
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="dash-widget">
                                <div class="dash-img">
                                    <span class="dash-icon bg-yellow">
                                        <img src="{{ URL::asset('/assets/img/icons/dash-icon-01.svg') }}" alt="">
                                    </span>
                                    <div class="dash-value"><img src="{{ URL::asset('/assets/img/icons/up-icon.svg') }}"
                                            alt=""> +16.24%</div>
                                </div>
                                <div class="dash-info">
                                    <div class="dash-order">
                                        <h6>Total Orders</h6>
                                        <h5>27</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="dash-widget">
                                <div class="dash-img">
                                    <span class="dash-icon bg-blue">
                                        <img src="{{ URL::asset('/assets/img/icons/wallet-icon-01.svg') }}" alt="">
                                    </span>
                                    <div class="dash-value text-danger"><img
                                            src="{{ URL::asset('/assets/img/icons/down-icon.svg') }}" alt="">
                                        +18.52%</div>
                                </div>
                                <div class="dash-info">
                                    <div class="dash-order">
                                        <h6>Total Spend</h6>
                                        <h5>$2500</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="dash-widget">
                                <div class="dash-img">
                                    <span class="dash-icon bg-blue">
                                        <img src="{{ URL::asset('/assets/img/icons/wallet-add.svg') }}" alt="">
                                    </span>
                                    <div class="dash-value"><img src="{{ URL::asset('/assets/img/icons/up-icon.svg') }}"
                                            alt=""> +12.10%</div>
                                </div>
                                <div class="dash-info">
                                    <div class="dash-order">
                                        <h6>Wallet</h6>
                                        <h5>$200</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="dash-widget">
                                <div class="dash-img">
                                    <span class="dash-icon bg-light-danger">
                                        <img src="{{ URL::asset('/assets/img/icons/wallet-amt.svg') }}" alt="">
                                    </span>
                                    <div class="dash-value"><img src="{{ URL::asset('/assets/img/icons/up-icon.svg') }}"
                                            alt=""> +08.15%</div>
                                </div>
                                <div class="dash-info">
                                    <div class="dash-order">
                                        <h6>Total Savings</h6>
                                        <h5>$354</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Dashboard Widget -->

                    <div class="row">
                        <!-- Recent Booking -->
                        <div class="col-lg-8 d-flex flex-column">
                            <h6 class="user-title">Recent Booking</h6>
                            <div class="table-responsive recent-booking flex-fill">
                                <table class="table mb-0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="javascript:;" class="avatar avatar-m me-2"><img
                                                            class="avatar-img rounded"
                                                            src="{{ URL::asset('/assets/img/services/service-06.jpg') }}"
                                                            alt="User Image"></a>
                                                    <a href="javascript:;">Computer Repair<span><i class="feather-calendar"></i>
                                                            22 Apr 2023</span></a>
                                                </h2>
                                            </td>
                                            <td>
                                                <h2 class="table-avatar table-user">
                                                    <a href="javascript:;" class="avatar avatar-m me-2"><img class="avatar-img"
                                                            src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}"
                                                            alt="User Image"></a>
                                                    <a href="javascript:;">
                                                        John Smith
                                                        <span>john@gmail.com</span>
                                                    </a>
                                                </h2>
                                            </td>
                                            <td class="text-end">
                                                <a href="javascript:;" class="btn btn-light-danger">Cancel</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="javascript:;" class="avatar avatar-m me-2"><img
                                                            class="avatar-img rounded"
                                                            src="{{ URL::asset('/assets/img/services/service-04.jpg') }}"
                                                            alt="User Image"></a>
                                                    <a href="javascript:;">Car Repair Services<span><i
                                                                class="feather-calendar"></i> 20 Apr 2023</span></a>
                                                </h2>
                                            </td>
                                            <td>
                                                <h2 class="table-avatar table-user">
                                                    <a href="javascript:;" class="avatar avatar-m me-2"><img class="avatar-img"
                                                            src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg') }}"
                                                            alt="User Image"></a>
                                                    <a href="javascript:;">
                                                        Timothy
                                                        <span>timothy@gmail.com</span>
                                                    </a>
                                                </h2>
                                            </td>
                                            <td class="text-end">
                                                <a href="javascript:;" class="btn btn-light-danger">Cancel</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="javascript:;" class="avatar avatar-m me-2"><img
                                                            class="avatar-img rounded"
                                                            src="{{ URL::asset('/assets/img/services/service-07.jpg') }}"
                                                            alt="User Image"></a>
                                                    <a href="javascript:;">Interior Designing<span><i
                                                                class="feather-calendar"></i> 19 Apr 2023</span></a>
                                                </h2>
                                            </td>
                                            <td>
                                                <h2 class="table-avatar table-user">
                                                    <a href="javascript:;" class="avatar avatar-m me-2"><img
                                                            class="avatar-img"
                                                            src="{{ URL::asset('/assets/img/profiles/avatar-06.jpg') }}"
                                                            alt="User Image"></a>
                                                    <a href="javascript:;">
                                                        Jordan
                                                        <span>jordan@gmail.com</span>
                                                    </a>
                                                </h2>
                                            </td>
                                            <td class="text-end">
                                                <a href="javascript:;" class="btn btn-light-danger">Cancel</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="javascript:;" class="avatar avatar-m me-2"><img
                                                            class="avatar-img rounded"
                                                            src="{{ URL::asset('/assets/img/services/service-08.jpg') }}"
                                                            alt="User Image"></a>
                                                    <a href="javascript:;">Steam Car Wash<span><i class="feather-calendar"></i>
                                                            18 Apr 2023</span></a>
                                                </h2>
                                            </td>
                                            <td>
                                                <h2 class="table-avatar table-user">
                                                    <a href="javascript:;" class="avatar avatar-m me-2"><img
                                                            class="avatar-img"
                                                            src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg') }}"
                                                            alt="User Image"></a>
                                                    <a href="javascript:;">
                                                        Armand
                                                        <span>armand@gmail.com</span>
                                                    </a>
                                                </h2>
                                            </td>
                                            <td class="text-end">
                                                <a href="javascript:;" class="btn btn-light-danger">Cancel</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">
                                                    <a href="javascript:;" class="avatar avatar-m me-2"><img
                                                            class="avatar-img rounded"
                                                            src="{{ URL::asset('/assets/img/services/service-09.jpg') }}"
                                                            alt="User Image"></a>
                                                    <a href="javascript:;">House Cleaning Services<span><i
                                                                class="feather-calendar"></i> 17 Apr 2023</span></a>
                                                </h2>
                                            </td>
                                            <td>
                                                <h2 class="table-avatar table-user">
                                                    <a href="javascript:;" class="avatar avatar-m me-2"><img
                                                            class="avatar-img"
                                                            src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg') }}"
                                                            alt="User Image"></a>
                                                    <a href="javascript:;">
                                                        Joseph
                                                        <span>joseph@gmail.com</span>
                                                    </a>
                                                </h2>
                                            </td>
                                            <td class="text-end">
                                                <a href="javascript:;" class="btn btn-light-danger">Cancel</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /Recent Booking -->

                        <!-- Recent Transaction -->
                        <div class="col-lg-4 d-flex flex-column">
                            <h6 class="user-title">Recent Transaction</h6>
                            <div class="table-responsive transaction-table flex-fill">
                                <table class="table mb-0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="table-book d-flex align-items-center">
                                                    <span class="book-img">
                                                        <img src="{{ URL::asset('/assets/img/icons/trans-icon-01.svg') }}"
                                                            alt="">
                                                    </span>
                                                    <div>
                                                        <h6>Service Booking</h6>
                                                        <p><i class="feather-calendar"></i>22 Apr 2023 <span><i
                                                                    class="feather-clock"></i> 10:12 AM</span></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <h5 class="trans-amt">$280.00</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="table-book d-flex align-items-center">
                                                    <span class="book-img">
                                                        <img src="{{ URL::asset('/assets/img/icons/trans-icon-02.svg') }}"
                                                            alt="">
                                                    </span>
                                                    <div>
                                                        <h6>Service Refund</h6>
                                                        <p><i class="feather-calendar"></i>22 Apr 2023 <span><i
                                                                    class="feather-clock"></i> 10:12 AM</span></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <h5 class="trans-amt">$100.00</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="table-book d-flex align-items-center">
                                                    <span class="book-img">
                                                        <img src="{{ URL::asset('/assets/img/icons/trans-icon-03.svg') }}"
                                                            alt="">
                                                    </span>
                                                    <div>
                                                        <h6>Wallet Topup</h6>
                                                        <p><i class="feather-calendar"></i>22 Apr 2023 <span><i
                                                                    class="feather-clock"></i> 10:12 AM</span></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <h5 class="trans-amt">$1000.00</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="table-book d-flex align-items-center">
                                                    <span class="book-img">
                                                        <img src="{{ URL::asset('/assets/img/icons/trans-icon-01.svg') }}"
                                                            alt="">
                                                    </span>
                                                    <div>
                                                        <h6>Service Booking</h6>
                                                        <p><i class="feather-calendar"></i>22 Apr 2023 <span><i
                                                                    class="feather-clock"></i> 10:12 AM</span></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <h5 class="trans-amt">$280.00</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="table-book d-flex align-items-center">
                                                    <span class="book-img">
                                                        <img src="{{ URL::asset('/assets/img/icons/trans-icon-01.svg') }}"
                                                            alt="">
                                                    </span>
                                                    <div>
                                                        <h6>Service Booking</h6>
                                                        <p><i class="feather-calendar"></i>22 Apr 2023 <span><i
                                                                    class="feather-clock"></i> 10:12 AM</span></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <h5 class="trans-amt">$280.00</h5>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /Recent Transaction -->

                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
