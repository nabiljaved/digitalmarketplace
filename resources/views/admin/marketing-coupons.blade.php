<?php $page = 'marketing-coupons'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    Coupons
                @endslot
            @endcomponent
            
            <div class="row">
                <div class="col-12 ">
                    <div class="table-resposnive">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>Type</th>
                                    <th>Discount</th>
                                    <th>limit</th>
                                    <th>Used</th>
                                    <th>Valid Date</th>
                                    <th>Services Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>New Year</td>
                                    <td>NEW<script>document.write(new Date().getFullYear())</script></td>
                                    <td>Percentage</td>
                                    <td>5%</td>
                                    <td>100</td>
                                    <td>1</td>
                                    <td>02 Sep <script>document.write(new Date().getFullYear())</script> - 10 Sep <script>document.write(new Date().getFullYear())</script><br>Once per customer</td>
                                    <td>All Services</td>
                                    <td>
                                        <h6 class="badge-active">Action</h6>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-coupon') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Christmas</td>
                                    <td>JOLLY15</td>
                                    <td>Fixed</td>
                                    <td>2%</td>
                                    <td>100</td>
                                    <td>1</td>
                                    <td>04 Sep <script>document.write(new Date().getFullYear())</script> - 12 Sep <script>document.write(new Date().getFullYear())</script><br>Once per customer</td>
                                    <td>House Cleaning <a href="javascript:void(0);" class="more-option">+1 more</a></td>
                                    <td>
                                        <h6 class="badge-inactive">Inaction</h6>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-coupon') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Valentines</td>
                                    <td>LOVER</td>
                                    <td>Percentage</td>
                                    <td>10%</td>
                                    <td>100</td>
                                    <td>1</td>
                                    <td>23 Sep <script>document.write(new Date().getFullYear())</script> - 27 Sep <script>document.write(new Date().getFullYear())</script><br>Once per customer</td>
                                    <td>All Services</td>
                                    <td>
                                        <h6 class="badge-active">Action</h6>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-coupon') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Halloween</td>
                                    <td>SPOOKY15</td>
                                    <td>Fixed</td>
                                    <td>3%</td>
                                    <td>100</td>
                                    <td>1</td>
                                    <td>23 Sep <script>document.write(new Date().getFullYear())</script> - 27 Sep <script>document.write(new Date().getFullYear())</script><br>Once per customer</td>
                                    <td>Computer Repair <a href="javascript:void(0);" class="more-option">+1 more</a></td>
                                    <td>
                                        <h6 class="badge-inactive">Inaction</h6>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-coupon') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Black Friday</td>
                                    <td>GIFTGUIDE</td>
                                    <td>Percentage</td>
                                    <td>3%</td>
                                    <td>100</td>
                                    <td>1</td>
                                    <td>23 Sep <script>document.write(new Date().getFullYear())</script> - 27 Sep <script>document.write(new Date().getFullYear())</script><br>Once per customer</td>
                                    <td>Car Repair</td>
                                    <td>
                                        <h6 class="badge-active">Action</h6>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-coupon') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
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
            Delete Coupons
        @endslot
    @endcomponent
@endsection
