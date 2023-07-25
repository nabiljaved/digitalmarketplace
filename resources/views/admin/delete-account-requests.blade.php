<?php $page = 'delete-account-requests'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    Delete Account Request
                @endslot
            @endcomponent
            
            <div class="row">
                <div class="col-12 ">
                    <div class="table-resposnive">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>User Name</th>
                                    <th>Requisition Date</th>
                                    <th>Delete Request Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#2572</td>
                                    <td class="table-namesplit">
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-01.jpg') }}"
                                                class="me-2" alt="img">
                                        </a>
                                        <a href="javascript:void(0);" class="table-name">
                                            <span>John Smith</span>
                                            <p>johnsmith@gmail.com</p>
                                        </a>
                                    </td>
                                    <td>28 Sep <script>document.write(new Date().getFullYear())</script> 16:43PM</td>
                                    <td>28 Sep <script>document.write(new Date().getFullYear())</script> 16:43PM </td>
                                    <td>
                                        <div class="table-actions d-flex align-items-center">
                                            <a href="javascript:void(0);" class="btn badge-active" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">Confirm</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#4572</td>
                                    <td class="table-profileimage">
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-07.jpg') }}"
                                                class="me-2" alt="img">
                                        </a>
                                        <a href="javascript:void(0);" class="table-name">
                                            <span>Johnny</span>
                                            <p>johnny@gmail.com</p>
                                        </a>
                                    </td>
                                    <td>14 Sep <script>document.write(new Date().getFullYear())</script> 16:43PM</td>
                                    <td>16 Sep <script>document.write(new Date().getFullYear())</script> 16:43PM </td>
                                    <td>
                                        <div class="table-actions d-flex align-items-center">
                                            <a href="javascript:void(0);" class="btn badge-active" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">Confirm</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#5324</td>
                                    <td class="table-profileimage">
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-09.jpg') }}"
                                                class="me-2" alt="img">
                                        </a>
                                        <a href="javascript:void(0);" class="table-name">
                                            <span>Robert</span>
                                            <p>robert@gmail.com</p>
                                        </a>
                                    </td>
                                    <td>04 Sep <script>document.write(new Date().getFullYear())</script> 16:43PM</td>
                                    <td>06 Sep <script>document.write(new Date().getFullYear())</script> 16:43PM </td>
                                    <td>
                                        <div class="table-actions d-flex align-items-center">
                                            <a href="javascript:void(0);" class="btn badge-active" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">Confirm</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#7651</td>
                                    <td class="table-namesplit">
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-06.jpg') }}"
                                                class="me-2" alt="img">
                                        </a>
                                        <a href="javascript:void(0);" class="table-name">
                                            <span>Sharonda</span>
                                            <p>sharonda@gmail.com</p>
                                        </a>
                                    </td>
                                    <td>14 Sep <script>document.write(new Date().getFullYear())</script> 16:43PM</td>
                                    <td>17 Sep <script>document.write(new Date().getFullYear())</script> 16:43PM </td>
                                    <td>
                                        <div class="table-actions d-flex align-items-center">
                                            <a href="javascript:void(0);" class="btn badge-active" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">Confirm</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#54356</td>
                                    <td class="table-profileimage">
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-04.jpg') }}"
                                                class="me-2" alt="img">
                                        </a>
                                        <a href="javascript:void(0);" class="table-name">
                                            <span>Nicholas</span>
                                            <p>nicholas@gmail.com</p>
                                        </a>
                                    </td>
                                    <td>23 Sep <script>document.write(new Date().getFullYear())</script> 16:43PM</td>
                                    <td>27 Sep <script>document.write(new Date().getFullYear())</script> 16:43PM </td>
                                    <td>
                                        <div class="table-actions d-flex align-items-center">
                                            <a href="javascript:void(0);" class="btn badge-active" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">Confirm</a>
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
            Delete Account Request
        @endslot
    @endcomponent
@endsection
