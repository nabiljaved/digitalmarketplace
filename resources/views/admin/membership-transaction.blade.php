<?php $page = 'membership-transaction'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    Transaction Details
                @endslot
            @endcomponent
            
            <div class="row">
                <div class="col-12 ">
                    <div class="table-resposnive table-div">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Provider Name</th>
                                    <th>Subscription</th>
                                    <th>Amount</th>
                                    <th>Subscription Durations</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-01.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>John Smith</span>
                                        </a>
                                    </td>
                                    <td>Enterprice</td>
                                    <td>$650</td>
                                    <td>One Year</td>
                                    <td>05 May <script>document.write(new Date().getFullYear())</script> 12:47 PM</td>
                                    <td>05 May 2023 12:47 PM</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-04.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Johnny</span>
                                        </a>
                                    </td>
                                    <td>Standard</td>
                                    <td>$350</td>
                                    <td>6 Month</td>
                                    <td>10 May <script>document.write(new Date().getFullYear())</script> 12:47 PM</td>
                                    <td>15 May 2023 12:47 PM</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-02.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Amanda</span>
                                        </a>
                                    </td>
                                    <td>Basic</td>
                                    <td>$100</td>
                                    <td>1 Month</td>
                                    <td>05 May <script>document.write(new Date().getFullYear())</script> 12:47 PM</td>
                                    <td>15 May 2023 12:47 PM</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-01.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>James</span>
                                        </a>
                                    </td>
                                    <td>Enterprice</td>
                                    <td>$150</td>
                                    <td>1 Month</td>
                                    <td>05 May <script>document.write(new Date().getFullYear())</script> 12:47 PM</td>
                                    <td>15 May 2023 12:47 PM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
