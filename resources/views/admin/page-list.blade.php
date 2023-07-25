<?php $page = 'page-list'; ?>
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
                                    <th>Title</th>
                                    <th>Language</th>
                                    <th>Location</th>
                                    <th>Featured</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Categories</td>
                                    <td>English</td>
                                    <td>Top Menu</td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>28 Sep <script>document.write(new Date().getFullYear())</script></td>
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
                                    <td>Contact</td>
                                    <td>English</td>
                                    <td>Quick Links</td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>15 Sep <script>document.write(new Date().getFullYear())</script></td>
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
                                    <td>Blog</td>
                                    <td>English</td>
                                    <td>Top Menu</td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>10 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ 'admin/edit-page' }}">
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
                                    <td>Shops</td>
                                    <td>English</td>
                                    <td>Quick Links</td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>30 Aug <script>document.write(new Date().getFullYear())</script></td>
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
                                    <td>Services</td>
                                    <td>English</td>
                                    <td>Top Menu</td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>23 Aug <script>document.write(new Date().getFullYear())</script></td>
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
                                    <td>About Us</td>
                                    <td>English</td>
                                    <td>Quick Links</td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>04 Aug <script>document.write(new Date().getFullYear())</script></td>
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
