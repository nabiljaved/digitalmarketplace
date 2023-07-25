<?php $page = 'user-list'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    Users
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
                                    <th>Mobile</th>
                                    <th>Role</th>
                                    <th>Last Activity</th>
                                    <th>Created</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="table-namesplit">
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-01.jpg') }}"
                                                class="me-2" alt="img">
                                        </a>
                                        <a href="javascript:void(0);" class="table-name">
                                            <span>Admin</span>
                                            <p>admin@gmail.com</p>
                                        </a>
                                    </td>
                                    <td>+1 888 888 8888</td>
                                    <td>Administrator</td>
                                    <td>2 mins ago</td>
                                    <td>30 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <h6 class="badge-active">Active</h6>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="dropdown"
                                                aria-expanded="true">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="{{ url('admin/edit-user') }}" class="dropdown-item">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#delete-item">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="table-namesplit">
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-03.jpg') }}"
                                                class="me-2" alt="img">
                                        </a>
                                        <a href="javascript:void(0);" class="table-name">
                                            <span>John Smith</span>
                                            <p>johnsmith@gmail.com</p>
                                        </a>
                                    </td>
                                    <td>518-837-9258</td>
                                    <td>Manager</td>
                                    <td>10 mins ago</td>
                                    <td>27 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <h6 class="badge-active">Active</h6>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="dropdown"
                                                aria-expanded="true">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="{{ url('admin/edit-user') }}" class="dropdown-item">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#delete-item">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="table-namesplit">
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-09.jpg') }}"
                                                class="me-2" alt="img">
                                        </a>
                                        <a href="javascript:void(0);" class="table-name">
                                            <span>Robert</span>
                                            <p>robert@gmail.com</p>
                                        </a>
                                    </td>
                                    <td>302-372-7812</td>
                                    <td>Accountant</td>
                                    <td>
                                        <div class="online-set">
                                            <span class="online-path"></span>
                                            <h6>Online</h6>
                                        </div>
                                    </td>
                                    <td>25 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <h6 class="badge-active">Active</h6>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="dropdown"
                                                aria-expanded="true">
                                                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="{{ url('admin/edit-user') }}" class="dropdown-item">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item"
                                                        data-bs-toggle="modal" data-bs-target="#delete-item">Delete</a>
                                                </li>
                                            </ul>
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
            Delete Users
        @endslot
    @endcomponent
@endsection
