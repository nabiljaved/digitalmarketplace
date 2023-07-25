<?php $page = 'provider-coupons'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            @component('components.pageheader')
                @slot('title')
                    Coupons
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
                                        <th>Name</th>
                                        <th>Code</th>
                                        <th>Type</th>
                                        <th>Discount</th>
                                        <th>limit</th>
                                        <th>Used</th>
                                        <th>Valid Date</th>
                                        <th>Services Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>New Year</td>
                                        <td>NEW2023</td>
                                        <td>Percentage</td>
                                        <td>5%</td>
                                        <td>100</td>
                                        <td>1</td>
                                        <td>02 Apr 2023 - 10 Apr 2023 <span class="d-block"> Once per customer</span></td>
                                        <td>Interior Designing</td>
                                        <td><span class="badge-success">Action</span></td>
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
                                        <td>Christmas</td>
                                        <td>JOLLY15</td>
                                        <td>Fixed</td>
                                        <td>$2.00</td>
                                        <td>100</td>
                                        <td>1</td>
                                        <td>04 Apr 2023 - 12 Apr 2023 <span class="d-block"> Once per customer</span></td>
                                        <td>House Cleaning</td>
                                        <td><span class="badge-danger">Inaction</span></td>
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
                                        <td>Valentines</td>
                                        <td>LOVERLOVER</td>
                                        <td>Percentage</td>
                                        <td>5%</td>
                                        <td>100</td>
                                        <td>1</td>
                                        <td>10 Apr 2023 - 20 Apr 2023 <span class="d-block"> Once per customer</span></td>
                                        <td>Car Wash</td>
                                        <td><span class="badge-success">Action</span></td>
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
                                        <td>Halloween</td>
                                        <td>SPOOKY15</td>
                                        <td>Fixed</td>
                                        <td>$3.00</td>
                                        <td>100</td>
                                        <td>1</td>
                                        <td>15 Apr 2023 - 12 Apr 2023 <span class="d-block"> Once per customer</span></td>
                                        <td>Computer Services</td>
                                        <td><span class="badge-danger">Inaction</span></td>
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
                                        <td>Black Friday</td>
                                        <td>GIFTGUIDE</td>
                                        <td>Percentage</td>
                                        <td>5%</td>
                                        <td>100</td>
                                        <td>1</td>
                                        <td>20 Apr 2023 - 22 Apr 2023 <span class="d-block"> Once per customer</span></td>
                                        <td>Car Repair</td>
                                        <td><span class="badge-success">Action</span></td>
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
