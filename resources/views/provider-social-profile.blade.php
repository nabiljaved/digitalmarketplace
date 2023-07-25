<?php $page = 'provider-social-profile'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="row">
                <!-- Social Profiles -->
                <div class="col-md-12">

                    <div class="widget-title">
                        <h4>Social Profiles</h4>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="row align-items-center">
                                <div class="col-xl-5 col-lg-5 col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Name</label>
                                        <select class="select">
                                            <option>Facebook</option>
                                            <option>Instagram</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-5 col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">URL</label>
                                        <input type="text" class="form-control" placeholder="Ex. www.socialmedia.com">
                                    </div>
                                </div>
                                <div class="col-xl-1 col-lg-2 col-sm-12">
                                    <label>&nbsp;</label>
                                    <div class="form-group">
                                        <div class="status-toggle sml-status d-flex align-items-center">
                                            <input type="checkbox" id="status_1" class="check">
                                            <label for="status_1" class="checktoggle">checkbox</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-xl-5 col-lg-5 col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Name</label>
                                        <select class="select">
                                            <option>Instagram</option>
                                            <option>facebook</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-5 col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">URL</label>
                                        <input type="text" class="form-control" placeholder="Ex. www.socialmedia.com">
                                    </div>
                                </div>
                                <div class="col-xl-1 col-lg-2 col-sm-12">
                                    <label>&nbsp;</label>
                                    <div class="form-group">
                                        <div class="status-toggle sml-status d-flex align-items-center">
                                            <input type="checkbox" id="status_2" class="check">
                                            <label for="status_2" class="checktoggle">checkbox</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-xl-5 col-lg-5 col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Name</label>
                                        <select class="select">
                                            <option>Youtube</option>
                                            <option>facebook</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-5 col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">URL</label>
                                        <input type="text" class="form-control" placeholder="Ex. www.socialmedia.com">
                                    </div>
                                </div>
                                <div class="col-xl-1 col-lg-2 col-sm-12">
                                    <label>&nbsp;</label>
                                    <div class="form-group">
                                        <div class="status-toggle sml-status d-flex align-items-center">
                                            <input type="checkbox" id="status_3" class="check">
                                            <label for="status_3" class="checktoggle">checkbox</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-xl-5 col-lg-5 col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Name</label>
                                        <select class="select">
                                            <option>Twitter</option>
                                            <option>facebook</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-5 col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">URL</label>
                                        <input type="text" class="form-control" placeholder="Ex. www.socialmedia.com">
                                    </div>
                                </div>
                                <div class="col-xl-1 col-lg-2 col-sm-12">
                                    <label>&nbsp;</label>
                                    <div class="form-group">
                                        <div class="status-toggle sml-status d-flex align-items-center">
                                            <input type="checkbox" id="status_4" class="check">
                                            <label for="status_4" class="checktoggle">checkbox</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-xl-5 col-lg-5 col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">Name</label>
                                        <select class="select">
                                            <option>Linkedin</option>
                                            <option>facebook</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-5 col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label">URL</label>
                                        <input type="text" class="form-control" placeholder="Ex. www.socialmedia.com">
                                    </div>
                                </div>
                                <div class="col-xl-1 col-lg-2 col-sm-12">
                                    <label>&nbsp;</label>
                                    <div class="form-group">
                                        <div class="status-toggle sml-status d-flex align-items-center">
                                            <input type="checkbox" id="status_6" class="check" checked>
                                            <label for="status_6" class="checktoggle">checkbox</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="acc-submit">
                                <a href="javascript:;" class="btn btn-secondary">Cancel</a>
                                <a href="javascript:;" class="btn btn-primary">Save Changes</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Social Profiles -->

            </div>

        </div>
    </div>

    @component('components.model-popup')
    @endcomponent
@endsection
