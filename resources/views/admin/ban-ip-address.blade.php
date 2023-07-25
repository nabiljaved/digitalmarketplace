<?php $page = 'ban-ip-address'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper ">
        <div class="content w-100 ps-0 pt-0">

            @component('layout.partials.settingssidemenu')
            @endcomponent

            <div class="row">
                <div class="content-table">

                    @component('admin.components.settingspageheader')
                        @slot('titleset')
                            Ban IP Address
                        @endslot
                    @endcomponent

                    <div class="col-12">
                        <div class="table-resposnive table-bottom">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>IP Address</th>
                                        <th>Reason</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>211.11.222</td>
                                        <td>Lorem ipsum dolor sit amet </td>
                                        <td>27 Sep <script>document.write(new Date().getFullYear())</script> </td>
                                        <td>
                                            <div class="action-language">
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="delete-table"
                                                            data-bs-toggle="modal" data-bs-target="#edit-tax"><i
                                                                class="far fa-edit "></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="delete-table" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#delete-item">
                                                            <i class="far fa-trash-alt "></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>213.12.333</td>
                                        <td>Lorem ipsum dolor sit </td>
                                        <td>24 Sep <script>document.write(new Date().getFullYear())</script> </td>
                                        <td>
                                            <div class="action-language">
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="delete-table"
                                                            data-bs-toggle="modal" data-bs-target="#edit-tax"><i
                                                                class="far fa-edit "></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="delete-table" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#delete-item">
                                                            <i class="far fa-trash-alt "></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>210.10.444</td>
                                        <td>Lorem ipsum dolor sit amet</td>
                                        <td>24 Sep <script>document.write(new Date().getFullYear())</script> </td>
                                        <td>
                                            <div class="action-language">
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="delete-table"
                                                            data-bs-toggle="modal" data-bs-target="#edit-tax"><i
                                                                class="far fa-edit "></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="delete-table" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#delete-item">
                                                            <i class="far fa-trash-alt "></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>214.13.111</td>
                                        <td>Lorem ipsum dolor sit amet</td>
                                        <td>18 Sep <script>document.write(new Date().getFullYear())</script> </td>
                                        <td>
                                            <div class="action-language">
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="delete-table"
                                                            data-bs-toggle="modal" data-bs-target="#edit-tax"><i
                                                                class="far fa-edit "></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="delete-table" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#delete-item">
                                                            <i class="far fa-trash-alt "></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>211.11.111</td>
                                        <td>Lorem ipsum dolor sit amet</td>
                                        <td>18 Sep <script>document.write(new Date().getFullYear())</script> </td>
                                        <td>
                                            <div class="action-language">
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="delete-table"
                                                            data-bs-toggle="modal" data-bs-target="#edit-tax"><i
                                                                class="far fa-edit "></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="delete-table" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#delete-item">
                                                            <i class="far fa-trash-alt "></i>
                                                        </a>
                                                    </li>
                                                </ul>
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
    </div>

    @component('admin.components.model')
    @endcomponent

    @component('admin.components.deletemodel')
        @slot('title1')
            Delete Ban IP Address
        @endslot
    @endcomponent
@endsection
