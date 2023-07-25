<?php $page = 'device-management'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="container">

                <div class="row">

                    <div class="col-md-10 mx-auto">
                        <div class="login-back">
                            <a href="{{ url('security-settings') }}"><i class="feather-arrow-left"></i> Back</a>
                        </div>

                        <!-- Login Activity -->
                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <div class="provider-subtitle">
                                        <h6>Device Management</h6>
                                    </div>
                                </div>
                                <div class="col-md-8 d-flex align-items-center justify-content-md-end flex-wrap">
                                    <div class="review-sort me-2">
                                        <p>Sort</p>
                                        <select class="select">
                                            <option>A -> Z</option>
                                            <option>Most helful</option>
                                        </select>
                                    </div>
                                    <div class="grid-listview">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/filter-icon.svg') }}"
                                                        alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="provide-table manage-table">
                            <div class="table-responsive">
                                <table class="table custom-table datatable mb-0" id="data-table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Device</th>
                                            <th>Date</th>
                                            <th>IP Address</th>
                                            <th>Location</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Chrome - Windows</td>
                                            <td>22 Apr 2023, 11:40:30</td>
                                            <td>232.222.12.72</td>
                                            <td>Chennai / India</td>
                                            <td><a href="javascript:;"><span class="badge-danger">Delete</span></a></td>
                                        </tr>
                                        <tr>
                                            <td>Safari Macos</td>
                                            <td>21 Apr 2023, 13:10:50</td>
                                            <td>224.111.12.75</td>
                                            <td>Newyork / USA</td>
                                            <td><a href="javascript:;"><span class="badge-danger">Delete</span></a></td>
                                        </tr>
                                        <tr>
                                            <td>Firefox Windows</td>
                                            <td>20 Apr 2023, 14:16:10</td>
                                            <td>232.222.12.72</td>
                                            <td>Newyork / USA</td>
                                            <td><a href="javascript:;"><span class="badge-danger">Delete</span></a></td>
                                        </tr>
                                        <tr>
                                            <td>Safari Macos</td>
                                            <td>19 Apr 2023, 10:20:20</td>
                                            <td>333.555.10.54</td>
                                            <td>Newyork / USA</td>
                                            <td><a href="javascript:;"><span class="badge-danger">Delete</span></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div id="tablelength"></div>
                            </div>
                            <div class="col-md-7">
                                <div class="table-ingopage">
                                    <div id="tableinfo"></div>
                                    <div id="tablepagination"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /Login Activity -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
