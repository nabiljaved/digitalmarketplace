<?php $page = 'website-settings'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-12">

                    @component('admin.components.pageheader')
                        @slot('title')
                            Widgets
                        @endslot
                    @endcomponent

                    <div class="row">
                        <div class="col-lg-8 col-sm-12">
                            <div class="form-groupheads">
                                <h2>Available Widgets</h2>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg-white" value="Text">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg-white" value="Categories">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg-white" value="Custom Menu">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg-white" value="Recent Post">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg-white" value="Pages">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg-white" value="Calendar">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg-white" value="Search">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg-white" value="Image">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg-white" value="Recent Comments">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg-white" value="Archives">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg-white" value="Custom HTML">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg-white" value="Video">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg-white" value="Audio">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg-white" value="Meta">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg-white" value="Tag Cloud">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg-white" value="RSS">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div class="menu-set">
                                <div class="menu-setheader">
                                    <a data-bs-toggle="collapse" href="#customs" role="button" aria-expanded="false"
                                        aria-controls="custom">Footer Widgets<i class="fa fa-angle-down float-end"
                                            aria-hidden="true"></i></a>
                                </div>
                                <div class="menu-setcontent collapse show" id="customs">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <select class="form-control select">
                                                <option>Search</option>
                                                <option>Search view</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <select class="form-control select">
                                                <option>Recent Post</option>
                                                <option> Post</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <select class="form-control select">
                                                <option>Categories</option>
                                                <option> Categories 1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <select class="form-control select">
                                                <option>Services</option>
                                                <option>Services 1</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-set">
                                <div class="menu-setheader">
                                    <a data-bs-toggle="collapse" href="#widgets" role="button" aria-expanded="false"
                                        aria-controls="custom">Sidebar Widgets<i class="fa fa-angle-down float-end"
                                            aria-hidden="true"></i></a>
                                </div>
                                <div class="menu-setcontent collapse show" id="widgets">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <select class="form-control select">
                                                <option>Video</option>
                                                <option>Image </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <select class="form-control select">
                                                <option>Pages</option>
                                                <option> Post</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <select class="form-control select">
                                                <option>Text</option>
                                                <option> Text 1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <select class="form-control select">
                                                <option>Calendar</option>
                                                <option>Calendar 1</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
