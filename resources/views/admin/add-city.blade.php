<?php $page = 'add-city'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">

            <form action="{{ url('admin/cities') }}">
                <div class="row">
                    <div class="col-lg-7 col-sm-12 m-auto">

                        @component('admin.components.addpageheader')
                            @slot('addtitle')
                                Add City
                            @endslot
                        @endcomponent
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Country</label>
                                    <select class="select">
                                        <option>Select Country</option>
                                        <option>United State</option>
                                        <option>India</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>State</label>
                                    <select class="select">
                                        <option>Select State</option>
                                        <option>Swains Island</option>
                                        <option>Andorra la Vella</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>City Name</label>
                                    <input type="text" class="form-control" placeholder="Enter City Name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="btn-path">
                                    <a href="javascript:void(0);" class="btn btn-cancel me-3">Cancel</a>
                                    <button type="submit" class="btn btn-primary "> Add City </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
