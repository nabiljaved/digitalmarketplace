<?php $page = 'social-profiles'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">

        @component('layout.partials.settingssidemenu')
        @endcomponent

        <div class="content w-100">

            @component('admin.components.settingspageheader')
                @slot('titleset')
                    Social Profiles
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-12">
                    <div class="social-info">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-sm-12">
                                <div class="form-group">
                                    <label>Name</label>
                                    <select class="select">
                                        <option>Facebook</option>
                                        <option>Instagram</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-12">
                                <div class="form-group">
                                    <label>URL</label>
                                    <select class="select">
                                        <option>Ex. www.facebook.com</option>
                                        <option>Ex. www.instagram.com</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-12">
                                <label>&nbsp;</label>
                                <div class="form-group">
                                    <div class="active-switch">
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="sliders round"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center social-cont">
                            <div class="col-lg-5 col-sm-12">
                                <div class="form-group">
                                    <label>Name</label>
                                    <select class="select">
                                        <option>Instagram</option>
                                        <option>facebook</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-12">
                                <div class="form-group">
                                    <label>URL</label>
                                    <select class="select">
                                        <option>Ex. www.instagram.com</option>
                                        <option>Ex. www.facebook.com</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-12">
                                <label>&nbsp;</label>
                                <div class="form-group d-flex align-items-center">
                                    <div class="active-switch">
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="sliders round"></span>
                                        </label>
                                    </div>
                                    <a href="javascript:;" class="del-action ms-2 trash"><i class="fe fe-trash-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center social-cont">
                            <div class="col-lg-5 col-sm-12">
                                <div class="form-group">
                                    <label>Name</label>
                                    <select class="select">
                                        <option>Youtube</option>
                                        <option>facebook</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-12">
                                <div class="form-group">
                                    <label>URL</label>
                                    <select class="select">
                                        <option>Ex. www.youtube.com</option>
                                        <option>Ex. www.facebook.com</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-12">
                                <label>&nbsp;</label>
                                <div class="form-group d-flex align-items-center">
                                    <div class="active-switch">
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="sliders round"></span>
                                        </label>
                                    </div>
                                    <a href="javascript:;" class="del-action ms-2 trash"><i class="fe fe-trash-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center social-cont">
                            <div class="col-lg-5 col-sm-12">
                                <div class="form-group">
                                    <label>Name</label>
                                    <select class="select">
                                        <option>Twitter</option>
                                        <option>facebook</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-12">
                                <div class="form-group">
                                    <label>URL</label>
                                    <select class="select">
                                        <option>Ex. www.twitter.com</option>
                                        <option>Ex. www.facebook.com</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-12">
                                <label>&nbsp;</label>
                                <div class="form-group d-flex align-items-center">
                                    <div class="active-switch">
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="sliders round"></span>
                                        </label>
                                    </div>
                                    <a href="javascript:;" class="del-action ms-2 trash"><i class="fe fe-trash-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center social-cont">
                            <div class="col-lg-5 col-sm-12">
                                <div class="form-group">
                                    <label>Name</label>
                                    <select class="select">
                                        <option>Linkedin</option>
                                        <option>facebook</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-12">
                                <div class="form-group">
                                    <label>URL</label>
                                    <select class="select">
                                        <option>Ex. www.linkedin.com</option>
                                        <option>Ex. www.facebook.com</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-12">
                                <label>&nbsp;</label>
                                <div class="form-group d-flex align-items-center">
                                    <div class="active-switch">
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="sliders round"></span>
                                        </label>
                                    </div>
                                    <a href="javascript:;" class="del-action ms-2 trash"><i class="fe fe-trash-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="javascript:void(0);" class="link-sets social-add"><i class="fa fa-plus-circle me-2"
                            aria-hidden="true"></i>Add More</a>
                </div>
            </div>
        </div>
    </div>
@endsection
