<?php $page = 'cash-on-delivery'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    Cash On Delivery
                @endslot
            @endcomponent
            
            <div class="row">
                <div class="col-12 ">
                    <div class="table-resposnive">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Service</th>
                                    <th>Provider Name</th>
                                    <th>User Name</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Service Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('admin_assets/img/services/service-03.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Computer Repair</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('admin_assets/img/customer/user-01.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>John Smith</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('admin_assets/img/customer/user-03.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Sharon</span>
                                        </a>
                                    </td>
                                    <td>$80</td>
                                    <td>
                                        <h6 class="badge-delete">Unpaid</h6>
                                    </td>
                                    <td>28 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>Inprogress</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('admin_assets/img/services/service-02.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Car Repair Services</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('admin_assets/img/customer/user-04.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Johnny</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('admin_assets/img/customer/user-05.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Pricilla</span>
                                        </a>
                                    </td>
                                    <td>$50</td>
                                    <td>
                                        <h6 class="badge-active">Paid</h6>
                                    </td>
                                    <td>22 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>Payment Completed</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('admin_assets/img/services/service-04.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Steam Car Wash</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('admin_assets/img/customer/user-06.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Robert</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('admin_assets/img/customer/user-02.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Amanda</span>
                                        </a>
                                    </td>
                                    <td>$100</td>
                                    <td>
                                        <h6 class="badge-active">Paid</h6>
                                    </td>
                                    <td>20 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>Payment Completed</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('admin_assets/img/services/service-09.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>House Cleaning </span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('admin_assets/img/customer/user-09.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Sharonda</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('admin_assets/img/customer/user-01.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>James</span>
                                        </a>
                                    </td>
                                    <td>$34</td>
                                    <td>
                                        <h6 class="badge-active">Paid</h6>
                                    </td>
                                    <td>15 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>Payment Completed</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('admin_assets/img/services/service-03.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Computer Repair</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('admin_assets/img/customer/user-01.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>John Smith</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('admin_assets/img/customer/user-03.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Sharon</span>

                                        </a>
                                    </td>
                                    <td>$46</td>
                                    <td>
                                        <h6 class="badge-active">Paid</h6>
                                    </td>
                                    <td>23 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>Payment Completed</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('admin_assets/img/services/service-02.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Car Repair Services</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('admin_assets/img/customer/user-04.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Johnny</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('admin_assets/img/customer/user-05.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Pricilla</span>
                                        </a>
                                    </td>
                                    <td>$20</td>
                                    <td>
                                        <h6 class="badge-delete">Unpaid</h6>
                                    </td>
                                    <td>30 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>Pending</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('admin_assets/img/services/service-04.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Steam Car Wash</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('admin_assets/img/customer/user-06.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Robert</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('admin_assets/img/customer/user-02.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Amanda</span>
                                        </a>
                                    </td>
                                    <td>$100</td>
                                    <td>
                                        <h6 class="badge-active">Paid</h6>
                                    </td>
                                    <td>20 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>Payment Completed</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('admin_assets/img/services/service-09.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>House Cleaning </span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('admin_assets/img/customer/user-09.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Sharonda</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('admin_assets/img/customer/user-01.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>James</span>
                                        </a>
                                    </td>
                                    <td>$34</td>
                                    <td>
                                        <h6 class="badge-active">Paid</h6>
                                    </td>
                                    <td>15 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>Payment Completed</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
