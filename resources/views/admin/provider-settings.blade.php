<?php $page = 'provider-settings'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper ">

        <div class="content w-100 ps-0 pt-0">

            @component('layout.partials.settingssidemenu')
            @endcomponent

            <div class="row">
                <div class="content-table">
                    <div class="col-12">

                        <div class="form-groupheads d-flex d-flex justify-content-between">
                            <h2>Provider Commission Activatation</h2>
                            <div class="active-switch">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="sliders round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label>Provider Commission</label>
                                <input type="text" class="form-control" value="eg 10%">
                                <p><i class="fe fe-alert-circle"></i> Note: Provider Commission will be deducted from
                                    Provider Earnings</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="btn-path">
                                <a href="javascript:void(0);" class="btn btn-cancel me-3">Cancel</a>
                                <a href="javascript:void(0);" class="btn btn-primary">Update</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
