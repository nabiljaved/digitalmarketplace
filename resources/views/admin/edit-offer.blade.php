<?php $page = 'edit-offer'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <form action="{{ url('admin/marketing-service') }}">
                <div class="row">
                    <div class="col-lg-7 col-sm-12 m-auto">

                        @component('admin.components.addpageheader')
                            @slot('addtitle')
                                Edit Offers
                            @endslot
                        @endcomponent

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Service</label>
                                    <select class="form-control select">
                                        <option>Computer Repair</option>
                                        <option>House Cleaning</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>User Name</label>
                                    <select class="form-control select">
                                        <option>John Smith</option>
                                        <option>Johnny</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <label>Amount</label>
                                    <input type="text" class="form-control" value="$80">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label>Offer</label>
                                    <input type="text" class="form-control" value="25%  ">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Offer Price</label>
                                    <input type="number" value="20%" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Valid Date</label>
                                    <input type="date" value="02 Sep 2023 - 10 Sep 2023" class="form-control">
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
