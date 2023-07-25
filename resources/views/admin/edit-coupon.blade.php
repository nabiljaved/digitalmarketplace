<?php $page = 'edit-coupon'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <form action="{{ url('admin/marketing-coupons') }}">
                <div class="row">
                    <div class="col-lg-7 col-sm-12 m-auto">

                        @component('admin.components.addpageheader')
                            @slot('addtitle')
                                Edit Coupon
                            @endslot
                        @endcomponent

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Coupon</label>
                                    <input type="text" class="form-control" placeholder="Coupon">
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <label>Type</label>
                                    <select class="form-control select">
                                        <option>English</option>
                                        <option>French</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label>Discount</label>
                                    <input type="text" class="form-control" value="5%">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Limit</label>
                                    <input type="number" value="1" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Used</label>
                                    <input type="number" value="1" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Valid Date</label>
                                    <input type="date" value="02 Sep 2023 - 10 Sep 2023" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Services Name</label>
                                    <input class="input-tags form-control" type="text" data-role="tagsinput"
                                        name="specialist" value="House Cleaning,Painting" id="specialist">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-grouphead d-flex justify-content-between">
                                    <h2>Status</h2>
                                    <div class="active-switch d-flex align-items-center">
                                        <h6>Enable</h6>
                                        <label class="switch">
                                            <input type="checkbox" checked="">
                                            <span class="sliders round"></span>
                                        </label>
                                    </div>
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
