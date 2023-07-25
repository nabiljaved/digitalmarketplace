<?php $page = 'wallet'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    Wallet
                @endslot
            @endcomponent
            
            <div class="row">
                <div class="col-12 ">
                    <div class="table-resposnive">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>User Name</th>
                                    <th>Phone</th>
                                    <th>Balance</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="table-profileimage">
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('admin_assets/img/customer/user-01.jpg') }}"
                                                class="me-2" alt="img">
                                        </a>
                                        <a href="javascript:void(0);" class="table-name">
                                            <span>John Smith</span>
                                            <p>johnsmith@gmail.com</p>
                                        </a>
                                    </td>
                                    <td>+1 843-443-3282 </td>
                                    <td>$1000 </td>
                                    <td>
                                        <a href="{{ url('admin/wallet-history') }}" class="btn btn-history">History</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="table-profileimage">
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('admin_assets/img/customer/user-07.jpg') }}"
                                                class="me-2" alt="img">
                                        </a>
                                        <a href="javascript:void(0);" class="table-name">
                                            <span>Johnny</span>
                                            <p>johnny@gmail.com</p>
                                        </a>
                                    </td>
                                    <td>+1 917-409-0861</td>
                                    <td>$800</td>
                                    <td>
                                        <a href="{{ url('admin/wallet-history') }}" class="btn btn-history">History</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="table-profileimage">
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('admin_assets/img/customer/user-09.jpg') }}"
                                                class="me-2" alt="img">
                                        </a>
                                        <a href="javascript:void(0);" class="table-name">
                                            <span>Robert</span>
                                            <p>robert@gmail.com</p>
                                        </a>
                                    </td>
                                    <td>+1 956-623-2880</td>
                                    <td>$700</td>
                                    <td>
                                        <a href="{{ url('admin/wallet-history') }}" class="btn btn-history">History</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="table-profileimage">
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('admin_assets/img/customer/user-06.jpg') }}"
                                                class="me-2" alt="img">
                                        </a>
                                        <a href="javascript:void(0);" class="table-name">
                                            <span>Sharonda</span>
                                            <p>sharonda@gmail.com</p>
                                        </a>
                                    </td>
                                    <td>+1 559-741-9672</td>
                                    <td>$600</td>
                                    <td>
                                        <a href="{{ url('admin/wallet-history') }}" class="btn btn-history">History</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="table-profileimage">
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('admin_assets/img/customer/user-04.jpg') }}"
                                                class="me-2" alt="img">
                                        </a>
                                        <a href="javascript:void(0);" class="table-name">
                                            <span>Nicholas</span>
                                            <p>nicholas@gmail.com</p>
                                        </a>
                                    </td>
                                    <td>+1 559-741-9672</td>
                                    <td>$500</td>
                                    <td>
                                        <a href="{{ url('admin/wallet-history') }}" class="btn btn-history">History</a>
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
