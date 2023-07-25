<?php $page = 'add-state'; ?>
@extends('layout.mainlayout_admin')
@section('content')

<div class="page-wrapper">
    <div class="content">
        <form action="{{url('admin/states')}}">
            <div class="row">
                <div class="col-lg-7 col-sm-12 m-auto">
                    <div class="content-page-header">
                        <h5>Add State</h5>
                    </div>
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
                                <label>State Name</label>
                                <input type="text" class="form-control" placeholder="Enter State Name">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="btn-path">
                                <a href="javascript:void(0);" class="btn btn-cancel me-3">Cancel</a>
                                <button type="submit" class="btn btn-primary "> Add State </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div> 

@endsection