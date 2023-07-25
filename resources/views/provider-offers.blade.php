<?php $page = 'provider-offers'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            @component('components.pageheader')
                @slot('title')
                    Offer History
                @endslot
            @endcomponent

            <!-- Coupons -->
            <div class="row">
                <div class="col-md-12">
                    <div class="provide-table manage-table">
                        <div class="table-responsive">
                            <table class="table custom-table datatable mb-0" id="data-table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Service</th>
                                        <th>Amount</th>
                                        <th>Offer</th>
                                        <th>Offer Price</th>
                                        <th>Date</th>
                                        <th>End Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <h2 class="table-avatar table-sml">
                                                <a href="javascript:;" class="avatar avatar-m me-2"><img
                                                        class="avatar-img rounded"
                                                        src="{{ URL::asset('/assets/img/services/service-06.jpg') }}"
                                                        alt="User Image"></a>
                                                <a href="javascript:;">Computer Repair</a>
                                            </h2>
                                        </td>
                                        <td>$80</td>
                                        <td>25%</td>
                                        <td>$20</td>
                                        <td>28 Apr 2023</td>
                                        <td>28 Apr 2023</td>
                                        <td>
                                            <div class="table-actions">
                                                <a class="action-set" href="javascript:;" data-bs-toggle="modal"
                                                    data-bs-target="#edit-coupon">
                                                    <i class="feather-edit"></i>
                                                </a>
                                                <a class="action-set confirm-text" href="javascript:;">
                                                    <i class="feather-trash-2"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <h2 class="table-avatar table-sml">
                                                <a href="javascript:;" class="avatar avatar-m me-2"><img
                                                        class="avatar-img rounded"
                                                        src="{{ URL::asset('/assets/img/services/service-04.jpg') }}"
                                                        alt="User Image"></a>
                                                <a href="javascript:;">Car Repair Services</a>
                                            </h2>
                                        </td>
                                        <td>$50</td>
                                        <td>10%</td>
                                        <td>$5</td>
                                        <td>17 Apr 2023</td>
                                        <td>17 Apr 2023</td>
                                        <td>
                                            <div class="table-actions">
                                                <a class="action-set" href="javascript:;" data-bs-toggle="modal"
                                                    data-bs-target="#edit-coupon">
                                                    <i class="feather-edit"></i>
                                                </a>
                                                <a class="action-set confirm-text" href="javascript:;">
                                                    <i class="feather-trash-2"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <h2 class="table-avatar table-sml">
                                                <a href="javascript:;" class="avatar avatar-m me-2"><img
                                                        class="avatar-img rounded"
                                                        src="{{ URL::asset('/assets/img/services/service-08.jpg') }}"
                                                        alt="User Image"></a>
                                                <a href="javascript:;">Steam Car Wash</a>
                                            </h2>
                                        </td>
                                        <td>$14</td>
                                        <td>10%</td>
                                        <td>$2</td>
                                        <td>13 Apr 2023</td>
                                        <td>13 Apr 2023</td>
                                        <td>
                                            <div class="table-actions">
                                                <a class="action-set" href="javascript:;" data-bs-toggle="modal"
                                                    data-bs-target="#edit-coupon">
                                                    <i class="feather-edit"></i>
                                                </a>
                                                <a class="action-set confirm-text" href="javascript:;">
                                                    <i class="feather-trash-2"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <h2 class="table-avatar table-sml">
                                                <a href="javascript:;" class="avatar avatar-m me-2"><img
                                                        class="avatar-img rounded"
                                                        src="{{ URL::asset('/assets/img/services/service-09.jpg') }}"
                                                        alt="User Image"></a>
                                                <a href="javascript:;">House Cleaning </a>
                                            </h2>
                                        </td>
                                        <td>$100</td>
                                        <td>35%</td>
                                        <td>$25</td>
                                        <td>7 Apr 2023</td>
                                        <td>7 Apr 2023</td>
                                        <td>
                                            <div class="table-actions">
                                                <a class="action-set" href="javascript:;" data-bs-toggle="modal"
                                                    data-bs-target="#edit-coupon">
                                                    <i class="feather-edit"></i>
                                                </a>
                                                <a class="action-set confirm-text" href="javascript:;">
                                                    <i class="feather-trash-2"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <h2 class="table-avatar table-sml">
                                                <a href="javascript:;" class="avatar avatar-m me-2"><img
                                                        class="avatar-img rounded"
                                                        src="{{ URL::asset('/assets/img/services/service-02.jpg') }}"
                                                        alt="User Image"></a>
                                                <a href="javascript:;">Building Construction</a>
                                            </h2>
                                        </td>
                                        <td>$75</td>
                                        <td>20%</td>
                                        <td>$10</td>
                                        <td>1 Apr 2023</td>
                                        <td>1 Apr 2023</td>
                                        <td>
                                            <div class="table-actions">
                                                <a class="action-set" href="javascript:;" data-bs-toggle="modal"
                                                    data-bs-target="#edit-coupon">
                                                    <i class="feather-edit"></i>
                                                </a>
                                                <a class="action-set confirm-text" href="javascript:;">
                                                    <i class="feather-trash-2"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>
                                            <h2 class="table-avatar table-sml">
                                                <a href="javascript:;" class="avatar avatar-m me-2"><img
                                                        class="avatar-img rounded"
                                                        src="{{ URL::asset('/assets/img/services/service-07.jpg') }}"
                                                        alt="User Image"></a>
                                                <a href="javascript:;">Interior Designing</a>
                                            </h2>
                                        </td>
                                        <td>$50</td>
                                        <td>5%</td>
                                        <td>$6</td>
                                        <td>30 Aug 2023</td>
                                        <td>30 Aug 2023</td>
                                        <td>
                                            <div class="table-actions">
                                                <a class="action-set" href="javascript:;" data-bs-toggle="modal"
                                                    data-bs-target="#edit-coupon">
                                                    <i class="feather-edit"></i>
                                                </a>
                                                <a class="action-set confirm-text" href="javascript:;">
                                                    <i class="feather-trash-2"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>
                                            <h2 class="table-avatar table-sml">
                                                <a href="javascript:;" class="avatar avatar-m me-2"><img
                                                        class="avatar-img rounded"
                                                        src="{{ URL::asset('/assets/img/services/service-05.jpg') }}"
                                                        alt="User Image"></a>
                                                <a href="javascript:;">Commercial Painting </a>
                                            </h2>
                                        </td>
                                        <td>$500</td>
                                        <td>35%</td>
                                        <td>$60</td>
                                        <td>22 Aug 2023</td>
                                        <td>22 Aug 2023</td>
                                        <td>
                                            <div class="table-actions">
                                                <a class="action-set" href="javascript:;" data-bs-toggle="modal"
                                                    data-bs-target="#edit-coupon">
                                                    <i class="feather-edit"></i>
                                                </a>
                                                <a class="action-set confirm-text" href="javascript:;">
                                                    <i class="feather-trash-2"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>
                                            <h2 class="table-avatar table-sml">
                                                <a href="javascript:;" class="avatar avatar-m me-2"><img
                                                        class="avatar-img rounded"
                                                        src="{{ URL::asset('/assets/img/services/service-11.jpg') }}"
                                                        alt="User Image"></a>
                                                <a href="javascript:;">Plumbing Services</a>
                                            </h2>
                                        </td>
                                        <td>$150</td>
                                        <td>25%</td>
                                        <td>$40</td>
                                        <td>15 Aug 2023</td>
                                        <td>15 Aug 2023</td>
                                        <td>
                                            <div class="table-actions">
                                                <a class="action-set" href="javascript:;" data-bs-toggle="modal"
                                                    data-bs-target="#edit-coupon">
                                                    <i class="feather-edit"></i>
                                                </a>
                                                <a class="action-set confirm-text" href="javascript:;">
                                                    <i class="feather-trash-2"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div id="tablelength"></div>
                        </div>
                        <div class="col-md-9">
                            <div class="table-ingopage">
                                <div id="tableinfo"></div>
                                <div id="tablepagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Coupons -->

        </div>
    </div>

    @component('components.model-popup')
    @endcomponent
@endsection
