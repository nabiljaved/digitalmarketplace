<?php $page="successful-transferlist";?>
@extends('layout.mainlayout_admin')
@section('content')

<div class="page-wrapper page-settings">
    <div class="content">

        @component('admin.components.pageheader')                
            @slot('title') Bank Transfer @endslot
        @endcomponent

        @component('admin.components.banklisttabsets')  
        @endcomponent

        <div class="row">
            <div class="col-12 ">
                <div class="table-resposnive table-div">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Service</th>
                                <th>Customer</th>
                                <th>Receipt</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <a href="javascript:void(0);" class="table-imgname">
                                        <img src="{{URL::asset('admin_assets/img/services/service-03.jpg')}}" class="me-2" alt="img">
                                        <span>Computer Repair</span>
                                    </a>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="table-profileimage">
                                        <img src="{{URL::asset('admin_assets/img/customer/user-01.jpg')}}" class="me-2" alt="img">
                                        <span>John Smith</span>
                                    </a>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="table-imgname">
                                        <img src="{{URL::asset('admin_assets/img/invoice.jpg')}}" class="me-2" alt="img">
                                        <span>#123456</span>
                                    </a>
                                </td>
                                <td>Lorem ipsum dolor sit </td>
                                <td>28 Sep <script>document.write(new Date().getFullYear())</script></td>
                                <td><h6 class="badge-active">Successful</h6></td>
                                <td class="text-center">
                                    <a class="delete-table" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">Transfer View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">Transfer Edit</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <a href="javascript:void(0);" class="table-imgname">
                                        <img src="{{URL::asset('admin_assets/img/services/service-02.jpg')}}" class="me-2" alt="img">
                                        <span>Car Repair Services</span>
                                    </a>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="table-profileimage">
                                        <img src="{{URL::asset('admin_assets/img/customer/user-04.jpg')}}" class="me-2" alt="img">
                                        <span>Johnny</span>
                                    </a>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="table-imgname">
                                        <img src="{{URL::asset('admin_assets/img/invoice.jpg')}}" class="me-2" alt="img">
                                        <span>#123456</span>
                                    </a>
                                </td>
                                <td>Lorem ipsum dolor sit </td>
                                <td>23 Sep <script>document.write(new Date().getFullYear())</script></td>
                                <td><h6 class="badge-active">Successful</h6></td>
                                <td class="text-center">
                                    <a class="delete-table" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">Transfer View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">Transfer Edit</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <a href="javascript:void(0);" class="table-imgname">
                                        <img src="{{URL::asset('admin_assets/img/services/service-04.jpg')}}" class="me-2" alt="img">
                                        <span>Steam Car Wash</span>
                                    </a>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="table-profileimage">
                                        <img src="{{URL::asset('admin_assets/img/customer/user-02.jpg')}}" class="me-2" alt="img">
                                        <span>Amanda</span>
                                    </a>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="table-imgname">
                                        <img src="{{URL::asset('admin_assets/img/invoice.jpg')}}" class="me-2" alt="img">
                                        <span>#123456</span>
                                    </a>
                                </td>
                                <td>Lorem ipsum dolor sit</td>
                                <td>13 Sep <script>document.write(new Date().getFullYear())</script></td>
                                <td><h6 class="badge-active">Successful</h6></td>
                                <td class="text-center">
                                    <a class="delete-table" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">Transfer View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">Transfer Edit</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    <a href="javascript:void(0);" class="table-imgname">
                                        <img src="{{URL::asset('admin_assets/img/services/service-09.jpg')}}" class="me-2" alt="img">
                                        <span>House Cleaning </span>
                                    </a>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="table-profileimage">
                                        <img src="{{URL::asset('admin_assets/img/customer/user-01.jpg')}}" class="me-2" alt="img">
                                        <span>James</span>
                                    </a>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="table-imgname">
                                        <img src="{{URL::asset('admin_assets/img/invoice.jpg')}}" class="me-2" alt="img">
                                        <span>#123456</span>
                                    </a>
                                </td>
                                <td>Lorem ipsum dolor sit</td>
                                <td>10 Sep <script>document.write(new Date().getFullYear())</script></td>
                                <td><h6 class="badge-active">Successful</h6></td>
                                <td class="text-center">
                                    <a class="delete-table" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="true">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">Transfer View</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">Transfer Edit</a>
                                        </li>
                                    </ul>
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