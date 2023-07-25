<?php $page = 'payout-settings'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <form action="{{ url('admin/payout-request') }}">
                <div class="row">
                    <div class="col-lg-7 col-sm-12 m-auto">
                        <div class="content-page-header d-flex justify-content-between">
                            <h5>Payout Settings</h5>
                            <div class="active-switch d-flex align-items-center">
                                <h6 class="fs-14">Enable</h6>
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="sliders round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-grouphead pay-req d-flex justify-content-between">
                                <h2>Payout Details</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Payout No of days to process</label>
                                    <input type="text" class="form-control" placeholder="Number of days">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Payout No of days to process</label>
                                    <input type="text" class="form-control" placeholder="Number of days">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>No of Payouts <span>(Per Month)</span></label>
                                    <input type="text" placeholder="Enter No of Payouts" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Minimum Payout Amount</label>
                                    <input type="text" placeholder="Enter Minimum Payout Amount" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Payout Commission</label>
                                    <input type="text" placeholder="Enter Payout Commission" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="btn-path">
                                    <a href="javascript:void(0);" class="btn btn-cancel me-3">Cancel</a>
                                    <button type="submit" class="btn btn-primary "> Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
