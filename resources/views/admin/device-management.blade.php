<?php $page = 'device-management'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="main-wrapper">
        <div class="change-activity">
            <div class="change-passwordback">
                <a href="{{ url('admin/security') }}"><i class="fe fe-arrow-left me-2"></i>Back to Dashboard </a>
            </div>
            <div class="change-activity-head">
                <h6>Device Management</h6>
                <div class="sort-div">
                    <div class="review-sort me-2">
                        <p>Sort</p>
                        <select class="select">
                            <option>A -> Z</option>
                            <option>Most helful</option>
                        </select>
                    </div>
                    <div class="drop-collapse">
                        <a href="javascript:void(0);" class="btn-filters">
                            <img src="{{ URL::asset('/admin_assets/img/icons/filter.svg') }}" alt="img">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-resposnive table-bottom">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Device</th>
                                    <th>Location</th>
                                    <th>IP Address</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>22 Sep <script>document.write(new Date().getFullYear())</script>, 11:40:30</td>
                                    <td>Chrome - Windows</td>
                                    <td>232.222.12.72 </td>
                                    <td>Chennai / India</td>
                                    <td>
                                        <h6 class="delete-labels">Delete</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>21 Sep <script>document.write(new Date().getFullYear())</script>, 13:10:50</td>
                                    <td>Safari Macos</td>
                                    <td>224.111.12.75</td>
                                    <td>Newyork / USA</td>
                                    <td>
                                        <h6 class="delete-labels">Delete</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>20 Sep <script>document.write(new Date().getFullYear())</script>, 14:16:10</td>
                                    <td>Firefox Windows</td>
                                    <td>111.222.13.28</td>
                                    <td>Newyork / USA</td>
                                    <td>
                                        <h6 class="delete-labels">Delete</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>19 Sep <script>document.write(new Date().getFullYear())</script>, 10:20:20</td>
                                    <td>Safari Macos</td>
                                    <td>333.555.10.54</td>
                                    <td>Newyork / USA</td>
                                    <td>
                                        <h6 class="delete-labels">Delete</h6>
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
