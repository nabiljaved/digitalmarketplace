<?php $page = 'database-backup'; ?>
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
                            Database Backup
                        @endslot
                    @endcomponent

                    <div class="col-12">
                        <div class="table-resposnive table-bottom">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>File Name</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sed ut perspiciatis omni_db.sql</td>
                                        <td>27 Sep <script>document.write(new Date().getFullYear())</script> 10:11AM </td>
                                        <td>
                                            <div class="action-language">
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="delete-table"><i
                                                                class="fa fa-download "></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="delete-table" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#delete-item"><i
                                                                class="far fa-trash-alt "></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sed ut perspiciatis omni_db.sql</td>
                                        <td>27 Sep <script>document.write(new Date().getFullYear())</script> 10:11AM </td>
                                        <td>
                                            <div class="action-language">
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="delete-table"><i
                                                                class="fa fa-download "></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="delete-table" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#delete-item"><i
                                                                class="far fa-trash-alt "></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sed ut perspiciatis omni_db.sql</td>
                                        <td>27 Sep <script>document.write(new Date().getFullYear())</script> 10:11AM </td>
                                        <td>
                                            <div class="action-language">
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="delete-table"><i
                                                                class="fa fa-download "></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="delete-table" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#delete-item"><i
                                                                class="far fa-trash-alt "></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sed ut perspiciatis omni_db.sql</td>
                                        <td>27 Sep <script>document.write(new Date().getFullYear())</script> 10:11AM </td>
                                        <td>
                                            <div class="action-language">
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="delete-table"><i
                                                                class="fa fa-download "></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="delete-table" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#delete-item"><i
                                                                class="far fa-trash-alt "></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sed ut perspiciatis omni_db.sql </td>
                                        <td>27 Sep <script>document.write(new Date().getFullYear())</script> 10:11AM </td>
                                        <td>
                                            <div class="action-language">
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="delete-table"><i
                                                                class="fa fa-download "></i></a>
                                                    </li>
                                                    <li>
                                                        <a class="delete-table" href="javascript:void(0);"
                                                            data-bs-toggle="modal" data-bs-target="#delete-item"><i
                                                                class="far fa-trash-alt "></i></a>
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
            Delete Database Backup
        @endslot
    @endcomponent
@endsection
