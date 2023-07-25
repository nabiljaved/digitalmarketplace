<?php $page = 'cronjob'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper ">
        <div class="content w-100 ps-0 pt-0">

            @component('layout.partials.settingssidemenu')
            @endcomponent

            <div class="row">
                <div class="content-table">

                    @component('admin.components.settingspageheader')
                        @slot('titleset')
                            Cronjob
                        @endslot
                    @endcomponent

                    <div class="location-set">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-12">
                                <div class="location-setcontent">
                                    <h5>Cronjob Link</h5>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group mb-0">
                                    <input type="text" class="form-control" placeholder="https://dreamguystech.com">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="location-set">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-12">
                                <div class="location-setcontent">
                                    <h5>Execution Intervel</h5>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="form-group mb-0">
                                    <input type="text" class="form-control" placeholder="Every 10 Minutes">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="btn-path">
                        <a href="javascript:void(0);" class="btn btn-cancel me-3">Cancel</a>
                        <a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
