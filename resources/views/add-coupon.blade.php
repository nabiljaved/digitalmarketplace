<?php $page = 'add-coupon'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Add Coupoun -->
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="login-back">
                        <a href="{{ url('provider-coupons') }}"><i class="feather-arrow-left"></i> Back</a>
                    </div>
                    <div class="coupon-title">
                        <h3>Add Coupon</h3>
                    </div>
                    <form action="provider-coupons">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-form-label">Services</label>
                                    <select class="select">
                                        <option>Selecct Services</option>
                                        <option>Car Repair</option>
                                        <option>House Cleaning</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Coupon Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Coupon Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Code</label>
                                    <input type="text" class="form-control" placeholder="Enter Code">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Coupon Type</label>
                                    <select class="select">
                                        <option>Fixed</option>
                                        <option>Percentage</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Discount</label>
                                    <input type="text" class="form-control" placeholder="10">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Start Date</label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">End Date</label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Company Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Company Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label"></label>
                                    <div class="status-toggle blue-tog d-flex align-items-center text-dark fw-500">
                                        <input type="checkbox" id="status" class="check" checked="">
                                        <label for="status" class="checktoggle me-2">checkbox</label>
                                        Once per customer
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Status</label>
                                    <div class="form-group coupon-radio">
                                        <label class="custom_radio d-inline-block me-3">
                                            <input type="radio" name="status" checked="">
                                            <span class="checkmark"></span> Active
                                        </label>
                                        <label class="custom_radio d-inline-block">
                                            <input type="radio" name="status">
                                            <span class="checkmark"></span> Inactive
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row float-end">
                            <div class="col-md-5 coupon-submit">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Add Coupoun -->

        </div>
    </div>
@endsection
