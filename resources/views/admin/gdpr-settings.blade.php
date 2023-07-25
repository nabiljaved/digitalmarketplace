<?php $page = 'gdpr-settings'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">

        @component('layout.partials.settingssidemenu')
        @endcomponent

        <div class="content w-100">
            <div class="col-lg-8">

                @component('admin.components.settingspageheader')
                    @slot('titleset')
                        Cookies Agreement
                    @endslot
                @endcomponent

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="fs-14 fw-500">Cookies Constent Text</label>
                            <textarea class="form-control" placeholder="Enter Constent Text"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="fs-14 fw-500">Cookies Position</label>
                            <ul class="custom-radiosbtn">
                                <li>
                                    <label class="radiossets">Right
                                        <input type="radio" checked="checked" name="radio">
                                        <span class="checkmark-radio"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="radiossets">Left
                                        <input type="radio" name="radio">
                                        <span class="checkmark-radio"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="radiossets">Center
                                        <input type="radio" name="radio">
                                        <span class="checkmark-radio"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="radiossets">Full Width
                                        <input type="radio" name="radio">
                                        <span class="checkmark-radio"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label class="fs-14 fw-500">Button Text</label>
                            <input type="text" class="form-control" placeholder="Agree Button">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group">
                            <label class="fs-14 fw-500">&nbsp;</label>
                            <input type="text" class="form-control" placeholder="Decline Button">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-0">
                            <label class="fs-14 fw-500">Show Decline Button</label>
                        </div>
                        <div class="active-switch toogle-primary d-flex align-items-center mb-3 ">
                            <h6>Show</h6>
                            <label class="switch ">
                                <input type="checkbox" checked="">
                                <span class="sliders round"></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="fs-14 fw-500">Link</label>
                            <input type="text" class="form-control" placeholder="Enter Your Link">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
