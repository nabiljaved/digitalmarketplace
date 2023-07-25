<?php $page = 'admin-earnings'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    Admin Earnings
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-12 ">
                    <div class="table-resposnive table-div">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Service</th>
                                    <th>Provider</th>
                                    <th>Payment Type</th>
                                    <th>Amount</th>
                                    <th>Commission Rate</th>
                                    <th>Status</th>
                                    <th>Earned Amount</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('/admin_assets/img/services/service-03.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Computer Repair</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-01.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>John Smith</span>
                                        </a>
                                    </td>
                                    <td>Wallet</td>
                                    <td>$80</td>
                                    <td>$7.5</td>
                                    <td>
                                        <h6 class="badge-active">Completed</h6>
                                    </td>
                                    <td>$38.25</td>
                                    <td>07 Oct <script>document.write(new Date().getFullYear())</script> 11:22:51 </td>
                                    <td class="text-center">
                                        <div class="table-actions">
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
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('/admin_assets/img/services/service-02.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Car Repair Services</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-04.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Johnny</span>
                                        </a>
                                    </td>
                                    <td>COD</td>
                                    <td>$50</td>
                                    <td>$0</td>
                                    <td>
                                        <h6 class="badge-active">Completed</h6>
                                    </td>
                                    <td>$20</td>
                                    <td>07 Oct <script>document.write(new Date().getFullYear())</script> 11:22:51 </td>
                                    <td class="text-center">
                                        <div class="table-actions">
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
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('/admin_assets/img/services/service-04.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Steam Car Wash</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-02.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Amanda</span>
                                        </a>
                                    </td>
                                    <td>Wallet</td>
                                    <td>$14</td>
                                    <td>$6.5</td>
                                    <td>
                                        <h6 class="badge-active">Completed</h6>
                                    </td>
                                    <td>$10</td>
                                    <td>17 Oct <script>document.write(new Date().getFullYear())</script> 11:22:51 </td>
                                    <td class="text-center">
                                        <div class="table-actions">
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
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('/admin_assets/img/services/service-09.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>House Cleaning </span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-01.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>James</span>
                                        </a>
                                    </td>
                                    <td>COD</td>
                                    <td>$100</td>
                                    <td>$0.00</td>
                                    <td>
                                        <h6 class="badge-active">Completed</h6>
                                    </td>
                                    <td>$90</td>
                                    <td>17 Oct <script>document.write(new Date().getFullYear())</script> 11:22:51 </td>
                                    <td class="text-center">
                                        <div class="table-actions">
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
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('/admin_assets/img/services/service-03.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Computer Repair</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-05.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>John Smith</span>
                                        </a>
                                    </td>
                                    <td>Wallet</td>
                                    <td>$80</td>
                                    <td>$7.5</td>
                                    <td>
                                        <h6 class="badge-active">Completed</h6>
                                    </td>
                                    <td>$38.25</td>
                                    <td>07 Oct <script>document.write(new Date().getFullYear())</script> 11:22:51 </td>
                                    <td class="text-center">
                                        <div class="table-actions">
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
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('/admin_assets/img/services/service-02.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Car Repair Services</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-04.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Johnny</span>
                                        </a>
                                    </td>
                                    <td>COD</td>
                                    <td>$50</td>
                                    <td>$0</td>
                                    <td>
                                        <h6 class="badge-active">Completed</h6>
                                    </td>
                                    <td>$20</td>
                                    <td>07 Oct <script>document.write(new Date().getFullYear())</script> 11:22:51 </td>
                                    <td class="text-center">
                                        <div class="table-actions">
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
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('/admin_assets/img/services/service-04.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Steam Car Wash</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-02.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Amanda</span>
                                        </a>
                                    </td>
                                    <td>Wallet</td>
                                    <td>$14</td>
                                    <td>$6.5</td>
                                    <td>
                                        <h6 class="badge-active">Completed</h6>
                                    </td>
                                    <td>$10</td>
                                    <td>17 Oct <script>document.write(new Date().getFullYear())</script> 11:22:51 </td>
                                    <td class="text-center">
                                        <div class="table-actions">
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
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('/admin_assets/img/services/service-09.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>House Cleaning </span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-01.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>James</span>
                                        </a>
                                    </td>
                                    <td>COD</td>
                                    <td>$100</td>
                                    <td>$0.00</td>
                                    <td>
                                        <h6 class="badge-active">Completed</h6>
                                    </td>
                                    <td>$90</td>
                                    <td>17 Oct <script>document.write(new Date().getFullYear())</script> 11:22:51 </td>
                                    <td class="text-center">
                                        <div class="table-actions">
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

    @component('admin.components.deletemodel')
        @slot('title1')
            Delete Admin Earnings
        @endslot
    @endcomponent
@endsection
