<?php $page = 'seo-settings'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper ">
        <div class="content w-100 ps-0 pt-0">

            @component('layout.partials.settingssidemenu')
            @endcomponent

            <!-- SEO Settings -->
            <div class="row">
                <div class="content-table">

                    @component('admin.components.settingspageheader')
                        @slot('titleset')
                            SEO Settings
                        @endslot
                    @endcomponent

                    <ul class="nav seo-list">
                        <li>
                            <a href="javascript:;" class="active" data-bs-toggle="tab" data-bs-target="#site">Site Meta</a>
                        </li>
                        <li>
                            <a href="javascript:;" data-bs-toggle="tab" data-bs-target="#ogmeta">Og Meta</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="site">
                            <form action="{{ url('admin/seo-settings') }}">
                                <div class="form-group">
                                    <label>Meta Title</label>
                                    <input type="text" class="form-control" placeholder="Enter Meta Title">
                                </div>
                                <div class="form-group">
                                    <label>Site Description</label>
                                    <textarea class="form-control" placeholder="Enter Site Description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input class="input-tags form-control" type="text" data-role="tagsinput"
                                        name="specialist" value="Test" id="specialist">
                                </div>
                                <div class="col-lg-12">
                                    <div class="btn-path">
                                        <a href="javascript:void(0);" class="btn btn-cancel me-3">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="ogmeta">
                            <form action="{{ url('admin/seo-settings') }}">
                                <div class="form-group">
                                    <label>Meta Titles</label>
                                    <input type="text" class="form-control" placeholder="Enter Meta Title">
                                </div>
                                <div class="form-group">
                                    <label>Site Description</label>
                                    <textarea class="form-control" placeholder="Enter Site Description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input class="input-tags form-control" type="text" data-role="tagsinput"
                                        name="specialist" value="Test" id="specialist">
                                </div>
                                <div class="col-lg-12">
                                    <div class="btn-path">
                                        <a href="javascript:;" class="btn btn-cancel me-3">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /SEO Settings -->

        </div>
    </div>
@endsection
