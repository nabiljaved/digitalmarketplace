<?php $page = 'edit-state'; ?>
@extends('layout.mainlayout_admin')
@section('content')

    <div class="page-wrapper">
        <div class="content">
            <form action="{{ url('admin/states') }}">
                <div class="row">
                    <div class="col-lg-7 col-sm-12 m-auto">

                        @component('admin.components.addpageheader')
                            @slot('addtitle')
                                Edit State
                            @endslot
                        @endcomponent
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Country</label>
                                    <select class="select">
                                        <option>United State</option>
                                        <option>India</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>State Name</label>
                                    <input type="text" class="form-control" value="Swains Island">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="btn-path">
                                    <a href="javascript:void(0);" class="btn btn-cancel me-3">Cancel</a>
                                    <button type="submit" class="btn btn-primary "> Save State </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection