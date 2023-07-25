<?php $page = 'add-blog'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <form action="{{ url('admin/all-blog') }}">
                <div class="row">
                    <div class="col-lg-7 col-sm-12 m-auto">

                        @component('admin.components.addpageheader')
                            @slot('addtitle')
                                Add Post
                            @endslot
                        @endcomponent

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Titles</label>
                                    <input type="text" class="form-control" placeholder="Enter Titles">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Language</label>
                                    <select class="form-control select">
                                        <option>Select Language</option>
                                        <option>English</option>
                                        <option>German</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control select">
                                        <option>Select Blog Category</option>
                                        <option>Category 1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Slug <span>(If you leave it empty, it will be generated
                                            automatically.)</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Service Title">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Description<span>(Meta Tag)</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Description">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Keywords<span>(Meta Tag)</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Keywords">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Tags<span>(Meta Tag)</span></label>
                                    <input class="input-tags form-control" type="text" data-role="tagsinput"
                                        name="specialist" value="Car Wash,Construction" id="specialist">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-1">
                                    <label>Blog Image</label>
                                </div>
                                <div class="form-uploads mb-4">
                                    <div class="form-uploads-path">
                                        <img src="{{ URL::asset('admin_assets/img/icons/upload.svg') }}" alt="img">
                                        <div class="file-browse">
                                            <h6>Drag & drop image or </h6>
                                            <div class="file-browse-path">
                                                <input type="file">
                                                <a href="javascript:void(0);"> Browse</a>
                                            </div>
                                        </div>
                                        <h5>Supported formates: JPEG, PNG</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label> Descriptions</label>
                                    <div id="editor"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="btn-path">
                                    <a href="javascript:void(0);" class="btn btn-cancel me-3">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Add Post</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
