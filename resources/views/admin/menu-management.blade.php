<?php $page = 'menu-management'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    Menu Management
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-12 ">
                    <div class="table-resposnive">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Created At</th>
                                    <th>Status</th>
                                    <th>Language Edit</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Primary Menu</td>
                                    <td>30 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <h6 class="badge-active">Published</h6>
                                    </td>
                                    <td>
                                        <div class="filter-select-set">
                                            <div class="form-group mb-0">
                                                <div class="group-image">
                                                    <img src="{{ URL::asset('/admin_assets/img/flags/us1.png') }}"
                                                        alt="img">
                                                    <select class="select ">
                                                        <option>Language</option>
                                                        <option>English</option>
                                                        <option>Spanish</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-managemenet') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Footer<h6 class="badge-default ms-2">Default</h6>
                                    </td>
                                    <td>30 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <h6 class="badge-active">Published</h6>
                                    </td>
                                    <td>
                                        <div class="filter-select-set">
                                            <div class="form-group mb-0">
                                                <div class="group-image">
                                                    <img src="{{ URL::asset('/admin_assets/img/flags/us1.png') }}"
                                                        alt="img">
                                                    <select class="select ">
                                                        <option>Language</option>
                                                        <option>English</option>
                                                        <option>Spanish</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-managemenet') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Main Menu</td>
                                    <td>14 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <h6 class="badge-active">Published</h6>
                                    </td>
                                    <td>
                                        <div class="filter-select-set">
                                            <div class="form-group mb-0">
                                                <div class="group-image">
                                                    <img src="{{ URL::asset('/admin_assets/img/flags/us1.png') }}"
                                                        alt="img">
                                                    <select class="select ">
                                                        <option>Language</option>
                                                        <option>English</option>
                                                        <option>Spanish</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-managemenet') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>About<h6 class="badge-default ms-2">Default</h6>
                                    </td>
                                    <td>10 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <h6 class="badge-active">Published</h6>
                                    </td>
                                    <td>
                                        <div class="filter-select-set">
                                            <div class="form-group mb-0">
                                                <div class="group-image">
                                                    <img src="{{ URL::asset('/admin_assets/img/flags/us1.png') }}"
                                                        alt="img">
                                                    <select class="select ">
                                                        <option>Language</option>
                                                        <option>English</option>
                                                        <option>Spanish</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-managemenet') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>More Information</td>
                                    <td>23 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <h6 class="badge-active">Published</h6>
                                    </td>
                                    <td>
                                        <div class="filter-select-set">
                                            <div class="form-group mb-0">
                                                <div class="group-image">
                                                    <img src="{{ URL::asset('/admin_assets/img/flags/us1.png') }}"
                                                        alt="img">
                                                    <select class="select ">
                                                        <option>Language</option>
                                                        <option>English</option>
                                                        <option>Spanish</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-managemenet') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}"
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

    <!-- Delete Menu Management -->
    @component('admin.components.deletemodel')
        @slot('title1')
            Delete Menu Management
        @endslot
    @endcomponent
    <!-- /Delete Menu Management -->
@endsection
