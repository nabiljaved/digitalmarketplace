<?php $page = 'payment-settings'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Profile settings -->
            <div class="row">
                <div class="col-md-12">
                    <!-- Account Settings -->
                    <div class="widget-title">
                        <h4>Payment Settings</h4>
                    </div>
                    <div class="general-info">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Account No</label>
                                    <input type="text" class="form-control" placeholder="Enter Account No">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Bank Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Bank Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Bank Address</label>
                                    <input type="text" class="form-control" placeholder="Enter Bank Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">IFSC Code</label>
                                    <input type="text" class="form-control" placeholder="Enter IFSC Code">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Pan No</label>
                                    <input type="text" class="form-control" placeholder="Enter Pan No">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Sort Code</label>
                                    <input type="text" class="form-control" placeholder="Enter Sort Code">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Routing No</label>
                                    <input type="text" class="form-control" placeholder="Enter Routing No">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Email Id</label>
                                    <input type="text" class="form-control" placeholder="Enter Email Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Contact No</label>
                                    <input type="text" class="form-control" placeholder="Enter Contact No">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Payment Mode</label>
                                    <select class="select">
                                        <option>Select Payment Mode</option>
                                        <option>Bank Transfer</option>
                                        <option>UPI</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Payment Purpose</label>
                                    <select class="select">
                                        <option>Select Payment Purpose</option>
                                        <option>Transaction</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="acc-submit">
                        <a href="javascript:;" class="btn btn-secondary">Cancel</a>
                        <a href="javascript:;" class="btn btn-primary">Save Changes</a>
                    </div>
                </div>
                <!-- /Account Settings -->

            </div>
            <!-- /profile-settings -->

        </div>
    </div>

    @component('components.model-popup')
    @endcomponent
@endsection
