<?php $page = 'edit-management'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-12">

                    @component('admin.components.pageheader')
                        @slot('title')
                            Edit Menu
                        @endslot
                    @endcomponent

                    <div class="row">
                        <div class="col-lg-4 col-sm-12">
                            <div class="menu-set">
                                <div class="menu-setheader">
                                    <a data-bs-toggle="collapse" href="#pages" role="button" aria-expanded="false"
                                        aria-controls="pages">Pages<i class="fa fa-angle-down float-end"
                                            aria-hidden="true"></i></a>
                                </div>
                                <div class="menu-setcontent collapse show" id="pages">
                                    <div class="filter-checkbox m-0">
                                        <ul>
                                            <li>
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span><i></i></span>
                                                    <b class="check-content">Home</b>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span><i></i></span>
                                                    <b class="check-content">About Us</b>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span><i></i></span>
                                                    <b class="check-content">Blog</b>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span><i></i></span>
                                                    <b class="check-content">Contact</b>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="menu-set-btn text-end">
                                        <a class="btn btn-primary" href="javascript:void(0);">
                                            <i class="fa fa-plus me-2"></i>Add Menu
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-set">
                                <div class="menu-setheader">
                                    <a data-bs-toggle="collapse" href="#service " role="button" aria-expanded="false"
                                        aria-controls="pages">Service Categories<i class="fa fa-angle-down float-end"
                                            aria-hidden="true"></i></a>
                                </div>
                                <div class="menu-setcontent collapse show" id="service">
                                    <div class="filter-checkbox m-0">
                                        <ul>
                                            <li>
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span><i></i></span>
                                                    <b class="check-content">Appliance</b>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span><i></i></span>
                                                    <b class="check-content">Carpentry</b>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span><i></i></span>
                                                    <b class="check-content">Construction</b>
                                                </label>
                                            </li>
                                            <li>
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span><i></i></span>
                                                    <b class="check-content">Contact</b>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="menu-set-btn text-end">
                                        <a class="btn btn-primary" href="javascript:void(0);">
                                            <i class="fa fa-plus me-2"></i>Add Menu
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-set mb-0">
                                <div class="menu-setheader">
                                    <a data-bs-toggle="collapse" href="#custom" role="button" aria-expanded="false"
                                        aria-controls="custom">Custom Link<i class="fa fa-angle-down float-end"
                                            aria-hidden="true"></i></a>
                                </div>
                                <div class="menu-setcontent collapse show" id="custom">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" placeholder="Enter Title">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>URL</label>
                                            <input type="text" class="form-control" placeholder="Enter URL">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Target</label>
                                            <select class="form-control select">
                                                <option>Self</option>
                                                <option>other</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="menu-set-btn text-end">
                                        <a class="btn btn-primary" href="javascript:void(0);">
                                            <i class="fa fa-plus me-2"></i>Add Menu
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-12">
                            <div class="menu-set">
                                <div class="menu-setheader">
                                    <h5>Custom Link</h5>
                                </div>
                                <div class="menu-setcontent">
                                    <div class="menu-setcontent-inner">
                                        <div class="menu-innerhead">
                                            <a data-bs-toggle="collapse" href="#home" role="button" aria-expanded="false"
                                                aria-controls="home">Home<span class="float-end">Pages<i
                                                        class="fa fa-angle-down ms-2" aria-hidden="true"></i></span></a>
                                        </div>
                                        <div class="menu-setcontent collapse" id="home">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Label</label>
                                                        <input type="text" class="form-control" placeholder="Home">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Class</label>
                                                        <input type="text" class="form-control" placeholder="Class">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Target</label>
                                                        <select class="select">
                                                            <option>Self</option>
                                                            <option>Your</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-setcontent pt-0">
                                    <div class="menu-setcontent-inner">
                                        <div class="menu-innerhead">
                                            <a data-bs-toggle="collapse" href="#faq" role="button"
                                                aria-expanded="false" aria-controls="home">FAQ<span
                                                    class="float-end">Custom<i class="fa fa-angle-down ms-2"
                                                        aria-hidden="true"></i></span></a>
                                        </div>
                                        <div class="menu-setcontent collapse show" id="faq">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Label</label>
                                                        <input type="text" class="form-control" placeholder="Home">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Class</label>
                                                        <input type="text" class="form-control" placeholder="Class">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Target</label>
                                                        <select class="select">
                                                            <option>Self</option>
                                                            <option>Your</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-set-btn text-end">
                                        <a class="btn btn-primary" href="javascript:void(0);">
                                            <i class="fa fa-plus me-2"></i>Add Menu
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-set">
                                <div class="menu-setheader">
                                    <h5>Menu Setting</h5>
                                </div>
                                <div class="menu-setcontent">
                                    <div class="filter-checkbox m-0">
                                        <ul class="d-flex justify-content-between">
                                            <li class="location-setcontent mb-0">
                                                <h5 class="mb-0">Display Location</h5>
                                            </li>
                                            <li>
                                                <label class="checkboxs">
                                                    <input type="checkbox">
                                                    <span><i></i></span>
                                                    <b class="check-content">Main Navigation</b>
                                                </label>
                                            </li>
                                        </ul>
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
