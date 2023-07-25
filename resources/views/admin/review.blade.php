<?php $page = 'review'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    Reviews
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-12 ">
                    <div class="table-resposnive table-div">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Provider </th>
                                    <th>User</th>
                                    <th>Service</th>
                                    <th>Type</th>
                                    <th>Ratings</th>
                                    <th>Comments</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>28 Sep <script>document.write(new Date().getFullYear())</script></td>
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
                    </div>
                    </td>
                    <td>
                        <a href="javascript:void(0);" class="table-imgname">
                            <img src="{{ URL::asset('/admin_assets/img/services/service-03.jpg') }}" class="me-2"
                                alt="img">
                            <span>Computer Repair</span>
                        </a>
                    </td>
                    <td>Normal</td>
                    <td>5.0</td>
                    <td>New test</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>10 Sep <script>document.write(new Date().getFullYear())</script></td>
                        <td>
                            <a href="javascript:void(0);" class="table-profileimage">
                                <img src="{{ URL::asset('/admin_assets/img/customer/user-04.jpg') }}" class="me-2"
                                    alt="img">
                                <span>Johnny</span>
                            </a>
                        </td>
                        <td>
                            <a href="javascript:void(0);" class="table-profileimage">
                                <img src="{{ URL::asset('/admin_assets/img/customer/user-05.jpg') }}" class="me-2"
                                    alt="img">
                                <span>Pricilla</span>
                            </a>
                        </td>
                        <td>
                            <a href="javascript:void(0);" class="table-imgname">
                                <img src="{{ URL::asset('/admin_assets/img/services/service-02.jpg') }}" class="me-2"
                                    alt="img">
                                <span>Car Repair Services</span>
                            </a>
                        </td>
                        <td>Normal</td>
                        <td>4.5</td>
                        <td>Review testing</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>25 Sep <script>document.write(new Date().getFullYear())</script></td>
                        <td>
                            <a href="javascript:void(0);" class="table-profileimage">
                                <img src="{{ URL::asset('/admin_assets/img/customer/user-06.jpg') }}" class="me-2"
                                    alt="img">
                                <span>Robert</span>
                            </a>
                        </td>
                        <td>
                            <a href="javascript:void(0);" class="table-profileimage">
                                <img src="{{ URL::asset('/admin_assets/img/customer/user-02.jpg') }}" class="me-2"
                                    alt="img">
                                <span>Amanda</span>
                            </a>
                        </td>
                        <td>
                            <a href="javascript:void(0);" class="table-imgname">
                                <img src="{{ URL::asset('/admin_assets/img/services/service-04.jpg') }}" class="me-2"
                                    alt="img">
                                <span>Steam Car Wash</span>
                            </a>
                        </td>
                        <td>High</td>
                        <td>4.9</td>
                        <td>New test</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>08 Sep <script>document.write(new Date().getFullYear())</script></td>
                        <td>
                            <a href="javascript:void(0);" class="table-profileimage">
                                <img src="{{ URL::asset('/admin_assets/img/customer/user-09.jpg') }}" class="me-2"
                                    alt="img">
                                <span>Sharonda</span>
                            </a>
                        </td>
                        <td>
                            <a href="javascript:void(0);" class="table-profileimage">
                                <img src="{{ URL::asset('/admin_assets/img/customer/user-09.jpg') }}" class="me-2"
                                    alt="img">
                                <span>James</span>
                            </a>
                        </td>
                        <td>
                            <a href="javascript:void(0);" class="table-imgname">
                                <img src="{{ URL::asset('/admin_assets/img/services/service-09.jpg') }}" class="me-2"
                                    alt="img">
                                <span>House Cleaning </span>
                            </a>
                        </td>
                        <td>Excellent</td>
                        <td>5.0</td>
                        <td>Review testing</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>28 Sep <script>document.write(new Date().getFullYear())</script></td>
                        <td>
                            <a href="javascript:void(0);" class="table-profileimage">
                                <img src="{{ URL::asset('/admin_assets/img/customer/user-01.jpg') }}" class="me-2"
                                    alt="img">
                                <span>John Smith</span>
                            </a>
                        </td>
                        <td>
                            <a href="javascript:void(0);" class="table-profileimage">
                                <img src="{{ URL::asset('/admin_assets/img/customer/user-03.jpg') }}" class="me-2"
                                    alt="img">
                                <span>Sharon</span>
                </div>
                </td>
                <td>
                    <a href="javascript:void(0);" class="table-imgname">
                        <img src="{{ URL::asset('/admin_assets/img/services/service-03.jpg') }}" class="me-2"
                            alt="img">
                        <span>Computer Repair</span>
                    </a>
                </td>
                <td>Normal</td>
                <td>5.0</td>
                <td>New test</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>10 Sep <script>document.write(new Date().getFullYear())</script></td>
                    <td>
                        <a href="javascript:void(0);" class="table-profileimage">
                            <img src="{{ URL::asset('/admin_assets/img/customer/user-04.jpg') }}" class="me-2"
                                alt="img">
                            <span>Johnny</span>
                        </a>
                    </td>
                    <td>
                        <a href="javascript:void(0);" class="table-profileimage">
                            <img src="{{ URL::asset('/admin_assets/img/customer/user-05.jpg') }}" class="me-2"
                                alt="img">
                            <span>Pricilla</span>
                        </a>
                    </td>
                    <td>
                        <a href="javascript:void(0);" class="table-imgname">
                            <img src="{{ URL::asset('/admin_assets/img/services/service-02.jpg') }}" class="me-2"
                                alt="img">
                            <span>Car Repair Services</span>
                        </a>
                    </td>
                    <td>Normal</td>
                    <td>4.5</td>
                    <td>Review testing</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>25 Sep <script>document.write(new Date().getFullYear())</script></td>
                    <td>
                        <a href="javascript:void(0);" class="table-profileimage">
                            <img src="{{ URL::asset('/admin_assets/img/customer/user-06.jpg') }}" class="me-2"
                                alt="img">
                            <span>Robert</span>
                        </a>
                    </td>
                    <td>
                        <a href="javascript:void(0);" class="table-profileimage">
                            <img src="{{ URL::asset('/admin_assets/img/customer/user-02.jpg') }}" class="me-2"
                                alt="img">
                            <span>Amanda</span>
                        </a>
                    </td>
                    <td>
                        <a href="javascript:void(0);" class="table-imgname">
                            <img src="{{ URL::asset('/admin_assets/img/services/service-04.jpg') }}" class="me-2"
                                alt="img">
                            <span>Steam Car Wash</span>
                        </a>
                    </td>
                    <td>High</td>
                    <td>4.9</td>
                    <td>New test</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>08 Sep <script>document.write(new Date().getFullYear())</script></td>
                    <td>
                        <a href="javascript:void(0);" class="table-profileimage">
                            <img src="{{ URL::asset('/admin_assets/img/customer/user-09.jpg') }}" class="me-2"
                                alt="img">
                            <span>Sharonda</span>
                        </a>
                    </td>
                    <td>
                        <a href="javascript:void(0);" class="table-profileimage">
                            <img src="{{ URL::asset('/admin_assets/img/customer/user-09.jpg') }}" class="me-2"
                                alt="img">
                            <span>James</span>
                        </a>
                    </td>
                    <td>
                        <a href="javascript:void(0);" class="table-imgname">
                            <img src="{{ URL::asset('/admin_assets/img/services/service-09.jpg') }}" class="me-2"
                                alt="img">
                            <span>House Cleaning </span>
                        </a>
                    </td>
                    <td>Excellent</td>
                    <td>5.0</td>
                    <td>Review testing</td>
                </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
