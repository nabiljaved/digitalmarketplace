<?php $page = 'email-templates'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    Email Templates
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-12 ">
                    <div class="table-resposnive">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>Reference ID</th>
                                    <th>Email Title</th>
                                    <th>Date</th>
                                    <th>Send TO</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>E-Mail Registration Confirmation</td>
                                    <td>28 Sep <script>document.write(new Date().getFullYear())</script> 16:43:20</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-01.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>William</span>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-email-template') }}">
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
                                    <td>Email User Booked Confirmation</td>
                                    <td>27 Sep <script>document.write(new Date().getFullYear())</script> 10:43:20</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-04.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Claire</span>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-email-template') }}">
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
                                    <td>Email Provider Booked Confirmation</td>
                                    <td>23 Sep <script>document.write(new Date().getFullYear())</script> 10:43:20</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-02.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Johnny</span>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-email-template') }}">
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
                                    <td>Email Booking Status</td>
                                    <td>23 Sep <script>document.write(new Date().getFullYear())</script> 10:43:20</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-09.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>James</span>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-email-template') }}">
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
                                    <td>Email Admin Refund</td>
                                    <td>28 Sep <script>document.write(new Date().getFullYear())</script> 16:43:20</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-01.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>William</span>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-email-template') }}">
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
                                    <td>6</td>
                                    <td>Service Approval By Admin</td>
                                    <td>27 Sep <script>document.write(new Date().getFullYear())</script> 10:43:20</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-04.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Johnny</span>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-email-template') }}">
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
                                    <td>7</td>
                                    <td>Subscription Expires Mail</td>
                                    <td>23 Sep <script>document.write(new Date().getFullYear())</script> 10:43:20</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-02.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>James</span>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-email-template') }}">
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
                                    <td>8</td>
                                    <td>Email Provider Booked Confirmation</td>
                                    <td>23 Sep <script>document.write(new Date().getFullYear())</script> 10:43:20</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-09.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Claire</span>
                                        </a>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-email-template') }}">
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

    <!-- Delete Email Template -->
    @component('admin.components.deletemodel')
        @slot('title1')
            Delete Email Templates
        @endslot
    @endcomponent
    <!-- /Delete Email Template -->
@endsection
