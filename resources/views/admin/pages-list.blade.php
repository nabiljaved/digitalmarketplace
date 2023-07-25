<?php $page = 'pages-list'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    Pages
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-12 ">
                    <div class="table-resposnive">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Pages</th>
                                    <th>Pages Slug</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>About Us</td>
                                    <td>about-us</td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-page') }}">
                                                <img src="{{ URL::asset('admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Home</td>
                                    <td>home</td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-page') }}">
                                                <img src="{{ URL::asset('admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>FAQ</td>
                                    <td>faq</td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-page') }}">
                                                <img src="{{ URL::asset('admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Services</td>
                                    <td>faq</td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-page') }}">
                                                <img src="{{ URL::asset('admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Categories</td>
                                    <td>categories</td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-page') }}">
                                                <img src="{{ URL::asset('admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Contact Us</td>
                                    <td>contact-us</td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-page') }}">
                                                <img src="{{ URL::asset('admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Privacy Policy</td>
                                    <td>privacy-policy</td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-page') }}">
                                                <img src="{{ URL::asset('admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Terms Conditions</td>
                                    <td>terms-conditions</td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-page') }}">
                                                <img src="{{ URL::asset('admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @component('admin.components.deletemodel')
        @slot('title1')
            Delete Pages
        @endslot
    @endcomponent
@endsection
