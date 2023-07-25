<?php $page = 'tax-rates'; ?>
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
                            Tax Rates
                        @endslot
                    @endcomponent

                    <div class="col-12">
                        <div class="table-resposnive table-bottom">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Tax Rate %</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>VAT</td>
                                        <td>10 </td>
                                        <td>
                                            <div class="active-switch">
                                                <label class="switch">
                                                    <input type="checkbox" checked="">
                                                    <span class="sliders round"></span>
                                                </label>
                                            </div>
                                        </td>
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
                                                            data-bs-toggle="modal" data-bs-target="#delete-item"><i
                                                                class="far fa-trash-alt "></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>VAT</td>
                                        <td>10 </td>
                                        <td>
                                            <div class="active-switch">
                                                <label class="switch">
                                                    <input type="checkbox" checked="">
                                                    <span class="sliders round"></span>
                                                </label>
                                            </div>
                                        </td>
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
                                                            data-bs-toggle="modal" data-bs-target="#delete-item"><i
                                                                class="far fa-trash-alt "></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>VAT</td>
                                        <td>15 </td>
                                        <td>
                                            <div class="active-switch">
                                                <label class="switch">
                                                    <input type="checkbox" checked="">
                                                    <span class="sliders round"></span>
                                                </label>
                                            </div>
                                        </td>
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
                                                            data-bs-toggle="modal" data-bs-target="#delete-item"><i
                                                                class="far fa-trash-alt "></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>VAT</td>
                                        <td>17 </td>
                                        <td>
                                            <div class="active-switch">
                                                <label class="switch">
                                                    <input type="checkbox" checked="">
                                                    <span class="sliders round"></span>
                                                </label>
                                            </div>
                                        </td>
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
                                                            data-bs-toggle="modal" data-bs-target="#delete-item"><i
                                                                class="far fa-trash-alt "></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>VAT</td>
                                        <td>17 </td>
                                        <td>
                                            <div class="active-switch">
                                                <label class="switch">
                                                    <input type="checkbox" checked="">
                                                    <span class="sliders round"></span>
                                                </label>
                                            </div>
                                        </td>
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

    <!-- Add & Edit Tax Rates -->
    @component('admin.components.model')
    @endcomponent
    <!-- /Add & Edit Tax Rates -->


    @component('admin.components.deletemodel')
        @slot('title1')
            Delete Tax Rates
        @endslot
    @endcomponent
@endsection
