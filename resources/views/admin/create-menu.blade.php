<?php $page = 'create-menu'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-7 col-sm-12 m-auto">

                    @component('admin.components.addpageheader')
                        @slot('addtitle')
                            Create Menu
                        @endslot
                    @endcomponent

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Languages</label>
                                <div class="form-group">
                                    <div class="group-image">
                                        <img src="{{ URL::asset('/admin_assets/img/flags/us1.png') }}" alt="img">
                                        <select class="select ">
                                            <option>Select State</option>
                                            <option>US</option>
                                            <option>London</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Status</label>
                                <div class="form-group">
                                    <select class="select ">
                                        <option>Published</option>
                                        <option>Unpublished</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="btn-path">

                                <a href="javascript:void(0);" class="btn btn-cancel me-3">Cancel</a>
                                <a href="javascript:void(0);" class="btn btn-primary">Save</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
