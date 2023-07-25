<?php $page = 'provider-payout'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            @component('components.pageheader')
                @slot('title')
                    Payout
                @endslot
            @endcomponent

            <div class="row">

                <!-- Payout card -->
                <div class="col-md-4 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="balance-crad">
                                <div class="balance-head">
                                    <span class="balance-icon">
                                        <img src="{{ URL::asset('/assets/img/icons/bal-icon.svg') }}" alt="">
                                    </span>
                                    <div class="balance-info">
                                        <h6>Available Payout</h6>
                                        <h3>$<span class="counters" data-count="180">0</span></h3>
                                    </div>
                                </div>
                                <div class="balance-amt">
                                    <a href="javascript:;" class="btn btn-primary view-transaction">View Transactions</a>
                                    <a href="javascript:;" class="btn btn-secondary  btn-withdraw">Withdraw</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="balance-crad">
                                <div class="balance-head">
                                    <span class="balance-icon">
                                        <img src="{{ URL::asset('/assets/img/icons/bal-icon.svg') }}" alt="">
                                    </span>
                                    <div class="balance-info">
                                        <h6>Last Payout</h6>
                                        <h3>$<span class="counters" data-count="200">0</span></h3>
                                    </div>
                                </div>
                                <div class="balance-amt">
                                    <a href="javascript:;" class="btn btn-secondary view-transaction">View Transactions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="balance-crad">
                                <div class="balance-head">
                                    <span class="balance-icon">
                                        <img src="{{ URL::asset('/assets/img/icons/bal-icon.svg') }}" alt="">
                                    </span>
                                    <div class="balance-info">
                                        <h6>Next Payout</h6>
                                        <h3>$<span class="counters" data-count="200">0</span></h3>
                                    </div>
                                </div>
                                <div class="balance-amt">
                                    <a href="javascript:;" class="btn btn-secondary view-transaction">View Transactions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Payout card -->

            </div>

            <!-- Payout History -->
            <div class="row">
                <div class="col-md-12">
                    <h6 class="subhead-title">Payout History</h6>
                    <div class="provide-table manage-table">
                        <div class="table-responsive">
                            <table class="table custom-table datatable" id="data-table">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Payout Date</th>
                                        <th>Amount</th>
                                        <th>Refunds</th>
                                        <th>Fees</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Payment Processed</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sep 26, 2023</td>
                                        <td>$100.00</td>
                                        <td class="text-light-danger">-$10.00</td>
                                        <td class="text-light-danger">-$10.00</td>
                                        <td>$90.00</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Sep 21, 2023</td>
                                        <td>$100.00</td>
                                        <td>-$0.00</td>
                                        <td class="text-light-danger">-$10.00</td>
                                        <td>$90.00</td>
                                        <td><span class="badge-success">Paid</span></td>
                                        <td>Sep 11, 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Sep 21, 2023</td>
                                        <td>$100.00</td>
                                        <td class="text-light-danger">-$0.00</td>
                                        <td>-$10.00</td>
                                        <td>$90.00</td>
                                        <td><span class="badge-success">Paid</span></td>
                                        <td>Sep 11, 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Sep 21, 2023</td>
                                        <td>$100.00</td>
                                        <td>-$0.00</td>
                                        <td>-$10.00</td>
                                        <td>$90.00</td>
                                        <td><span class="badge-success">Paid</span></td>
                                        <td>Sep 11, 2023</td>
                                    </tr>
                                    <tr>
                                        <td>Sep 21, 2023</td>
                                        <td>$100.00</td>
                                        <td>-$0.00</td>
                                        <td>-$10.00</td>
                                        <td>$90.00</td>
                                        <td><span class="badge-success">Paid</span></td>
                                        <td>Sep 11, 2023</td>
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
            <!-- /Payout History -->

        </div>
    </div>

    @component('components.model-popup')
    @endcomponent
@endsection
