<?php $page = 'appearance'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">

        @component('layout.partials.settingssidemenu')
        @endcomponent

        <div class="content w-100">

            @component('admin.components.settingspageheader')
                @slot('titleset')
                    Appearance Settings
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-groupheads">
                                <h2>Theme</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="theme-image active">
                                <div class="theme-image-set">
                                    <img src="{{ URL::asset('/admin_assets/img/img1.jpg') }}" alt="img">
                                    <h2>Theme 1</h2>
                                </div>
                                <div class="theme-image-content">
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="theme-image ">
                                <div class="theme-image-set">
                                    <img src="{{ URL::asset('/admin_assets/img/img2.jpg') }}" alt="img">
                                    <h2>Theme 2</h2>
                                </div>
                                <div class="theme-image-content">
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="theme-image ">
                                <div class="theme-image-set">
                                    <img src="{{ URL::asset('/admin_assets/img/img3.jpg') }}" alt="img">
                                    <h2>Theme 3</h2>
                                </div>
                                <div class="theme-image-content">
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group-set">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <h4>Font Family</h4>
                                        <h5>Choose your font style</h5>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <select class="form-control select">
                                            <option>Roboto</option>
                                            <option>Poppins</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group-set">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <h4>Accent color</h4>
                                        <h5>Choose your theme color</h5>
                                    </div>
                                    <div class="col-lg-9 col-sm-12">
                                        <div class="themecolor">
                                            <ul>
                                                <li>
                                                    <span class="themecolorset defaultcolor active"></span>
                                                </li>
                                                <li>
                                                    <span class="themecolorset theme-greens"></span>
                                                </li>
                                                <li>
                                                    <span class="themecolorset theme-viloets"></span>
                                                </li>
                                                <li>
                                                    <span class="themecolorset theme-orange"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-grouphead">
                                <h2>Navbar</h2>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group-set">
                                <div class="row align-items-center">
                                    <div class="col-lg-3 col-sm-6">
                                        <h4 class="mb-0">Navbar 1</h4>
                                    </div>
                                    <div class="col-lg-9 col-sm-12">
                                        <div class="nav-bar-image">
                                            <img src="{{ URL::asset('/admin_assets/img/nav1.jpg') }}" alt="img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group-set">
                                <div class="row align-items-center">
                                    <div class="col-lg-3 col-sm-6">
                                        <h4 class="mb-0">Navbar 2</h4>
                                    </div>
                                    <div class="col-lg-9 col-sm-12">
                                        <div class="nav-bar-image">
                                            <img src="{{ URL::asset('/admin_assets/img/nav2.jpg') }}" alt="img">
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
