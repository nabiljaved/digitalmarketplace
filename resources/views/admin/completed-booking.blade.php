<?php $page = 'completed-booking'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    Booking List
                @endslot
            @endcomponent

            @component('admin.components.tabsets')
            @endcomponent
            
            <div class="row">
                <div class="col-12 ">
                    <div class="table-resposnive table-div">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Booking Time</th>
                                    <th>Provider</th>
                                    <th>User</th>
                                    <th>Service</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>28 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>10:00:00 - 11:00:00</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-01.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>John Smith</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-03.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Sharon</span>

                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('/admin_assets/img/services/service-03.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Computer Repair</span>
                                        </a>
                                    </td>
                                    <td>$80</td>
                                    <td>
                                        <h6 class="badge-active">Completed</h6>
                                    </td>
                                    <td>07 Oct <script>document.write(new Date().getFullYear())</script> 11:22:51</td>
                                    <td>
                                        <div class="table-select">
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
                                    <td>10 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>18:00:00 - 19:00:00 </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-04.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Johnny</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-05.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Pricilla</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('/admin_assets/img/services/service-02.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Car Repair Services</span>
                                        </a>
                                    </td>
                                    <td>$50</td>
                                    <td>
                                        <h6 class="badge-active">Completed</h6>
                                    </td>
                                    <td>07 Oct <script>document.write(new Date().getFullYear())</script> 11:22:51</td>
                                    <td>
                                        <div class="table-select">
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
                                    <td>3</td>
                                    <td>25 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>12:00:00 - 13:00:00</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-06.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Robert</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-02.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Amanda</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('/admin_assets/img/services/service-04.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Steam Car Wash</span>
                                        </a>
                                    </td>
                                    <td>$50</td>
                                    <td>
                                        <h6 class="badge-active">Completed</h6>
                                    </td>
                                    <td>07 Oct <script>document.write(new Date().getFullYear())</script> 11:22:51</td>
                                    <td>
                                        <div class="table-select">
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
                                    <td>08 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>07 Oct <script>document.write(new Date().getFullYear())</script> 11:22:51</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-09.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Sharonda</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-01.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>James</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('/admin_assets/img/services/service-09.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>House Cleaning </span>
                                        </a>
                                    </td>
                                    <td>$50</td>
                                    <td>
                                        <h6 class="badge-active">Completed</h6>
                                    </td>
                                    <td>07 Oct <script>document.write(new Date().getFullYear())</script> 11:22:51</td>
                                    <td>
                                        <div class="table-select">
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
