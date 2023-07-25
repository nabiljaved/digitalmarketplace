<?php $page = 'payout-request'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    Payout Requests
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
                                    <th>Payout Method</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('admin_assets/img/customer/user-01.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>John Smith</span>
                                        </a>
                                    </td>
                                    <td>stripe</td>
                                    <td>$80</td>
                                    <td>
                                        <h6 class="badge-pending">Pending</h6>
                                    </td>
                                    <td>07 Oct <script>document.write(new Date().getFullYear())</script> 11:22:51 </td>
                                    <td>
                                        <div class="table-select table-selectpayouts">
                                            <div class="form-group mb-0">
                                                <select class="select">
                                                    <option>Select Status</option>
                                                    <option> Pending</option>
                                                    <option> Inprogress</option>
                                                    <option>Completed</option>
                                                    <option>cancelled</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('admin_assets/img/customer/user-04.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Johnny</span>
                                        </a>
                                    </td>
                                    <td>paypal</td>
                                    <td>$50</td>
                                    <td>
                                        <h6 class="badge-pending">Pending</h6>
                                    </td>
                                    <td>15 Oct <script>document.write(new Date().getFullYear())</script> 11:22:51</td>
                                    <td>
                                        <div class="table-select table-selectpayouts">
                                            <div class="form-group mb-0">
                                                <select class="select">
                                                    <option>Select Status</option>
                                                    <option>Pending</option>
                                                    <option>Inprogress</option>
                                                    <option>Completed</option>
                                                    <option>cancelled</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('admin_assets/img/customer/user-06.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Robert</span>
                                        </a>
                                    </td>
                                    <td>stripe</td>
                                    <td>$50</td>
                                    <td>
                                        <h6 class="badge-pending">Pending</h6>
                                    </td>
                                    <td>21 Oct <script>document.write(new Date().getFullYear())</script> 11:22:51</td>
                                    <td>
                                        <div class="table-select table-selectpayouts">
                                            <div class="form-group mb-0">
                                                <select class="select">
                                                    <option>Select Status</option>
                                                    <option> Pending</option>
                                                    <option> Inprogress</option>
                                                    <option>Completed</option>
                                                    <option>cancelled</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('admin_assets/img/customer/user-09.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Sharonda</span>
                                        </a>
                                    </td>
                                    <td>paypal</td>
                                    <td>$50</td>
                                    <td>
                                        <h6 class="badge-pending">Pending</h6>
                                    </td>
                                    <td>07 Oct <script>document.write(new Date().getFullYear())</script> 11:22:51</td>
                                    <td>
                                        <div class="table-select table-selectpayouts">
                                            <div class="form-group mb-0">
                                                <select class="select">
                                                    <option>Select Status</option>
                                                    <option> Pending</option>
                                                    <option> Inprogress</option>
                                                    <option>Completed</option>
                                                    <option>cancelled</option>
                                                </select>
                                            </div>
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
@endsection
