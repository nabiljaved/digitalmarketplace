<?php $page = 'provider-earnings'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            @component('components.pageheader')
                @slot('title')
                    Earnings
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
                                        <th>Earned Amount</th>
                                        <th>Date</th>
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
                                        <td>$38.25</td>
                                        <td>07 Oct 2023 11:22:51</td>
                                        <td>
                                            <div class="table-actions">
                                                <a class="action-set" href="javascript:;">
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
                                        <td>$20</td>
                                        <td>07 Oct 2023 11:22:51</td>
                                        <td>
                                            <div class="table-actions">
                                                <a class="action-set" href="javascript:;">
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
                                        <td>$10</td>
                                        <td>07 Oct 2023 11:22:51</td>
                                        <td>
                                            <div class="table-actions">
                                                <a class="action-set" href="javascript:;">
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
                                        <td>$90</td>
                                        <td>07 Oct 2023 11:22:51</td>
                                        <td>
                                            <div class="table-actions">
                                                <a class="action-set" href="javascript:;">
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
                                        <td>$55</td>
                                        <td>07 Oct 2023 11:22:51</td>
                                        <td>
                                            <div class="table-actions">
                                                <a class="action-set" href="javascript:;">
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
                                        <td>$20</td>
                                        <td>07 Oct 2023 11:22:51</td>
                                        <td>
                                            <div class="table-actions">
                                                <a class="action-set" href="javascript:;">
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
                                        <td>$400</td>
                                        <td>07 Oct 2023 11:22:51</td>
                                        <td>
                                            <div class="table-actions">
                                                <a class="action-set" href="javascript:;">
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
                                        <td>$70</td>
                                        <td>07 Oct 2023 11:22:51</td>
                                        <td>
                                            <div class="table-actions">
                                                <a class="action-set" href="javascript:;">
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
