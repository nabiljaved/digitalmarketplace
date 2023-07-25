<?php $page = 'roles-permissions'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    Roles & Permission
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-12 ">
                    <div class="table-resposnive">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Adminstrator</td>
                                    <td>30 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="table-action d-flex">
                                            <a class="me-2" href="javascript:;" data-bs-toggle="modal"
                                                data-bs-target="#edit-role">
                                                <i class="fe fe-edit-3"></i> Edit Role
                                            </a>
                                            <a href="{{ url('admin/role-permission') }}">
                                                <i class="fe fe-shield"></i> Permissions
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Manager</td>
                                    <td>16 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="table-action d-flex">
                                            <a class="me-2" href="javascript:;" data-bs-toggle="modal"
                                                data-bs-target="#edit-role">
                                                <i class="fe fe-edit-3"></i> Edit Role
                                            </a>
                                            <a href="{{ url('admin/role-permission') }}">
                                                <i class="fe fe-shield"></i> Permissions
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Accountant</td>
                                    <td>23 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="table-action d-flex">
                                            <a class="me-2" href="javascript:;" data-bs-toggle="modal"
                                                data-bs-target="#edit-role">
                                                <i class="fe fe-edit-3"></i> Edit Role
                                            </a>
                                            <a href="{{ url('admin/role-permission') }}">
                                                <i class="fe fe-shield"></i> Permissions
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

    <!-- Add & Edit Role -->
    @component('admin.components.model')
    @endcomponent
    <!-- /Add & Edit Role -->
@endsection
