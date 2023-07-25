<?php $page = 'currencies'; ?>
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
                            Currency
                        @endslot
                    @endcomponent

                    <div class="col-12">
                        <div class="table-resposnive table-bottom">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>Currency Name</th>
                                        <th>Code</th>
                                        <th>Symbol</th>
                                        <th>Exchange Rate</th>
                                        <th>Actions</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>US Dollar</td>
                                        <td>USD </td>
                                        <td>$</td>
                                        <td>Default</td>
                                        <td>
                                            <h6 class="success-labels">Action</h6>
                                        </td>
                                        <td>
                                            <div class="action-language">
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="delete-table"
                                                            data-bs-toggle="modal" data-bs-target="#edit-currency"><i
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
                                        <td>Turkiye Lira</td>
                                        <td>TRY </td>
                                        <td>₺</td>
                                        <td>Default</td>
                                        <td>
                                            <h6 class="success-labels">Action</h6>
                                        </td>
                                        <td>
                                            <div class="action-language">
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="delete-table"
                                                            data-bs-toggle="modal" data-bs-target="#edit-currency"><i
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
                                        <td>EU Euro</td>
                                        <td>EUR </td>
                                        <td>€</td>
                                        <td>Default</td>
                                        <td>
                                            <h6 class="success-labels">Action</h6>
                                        </td>
                                        <td>
                                            <div class="action-language">
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="delete-table"
                                                            data-bs-toggle="modal" data-bs-target="#edit-currency"><i
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
                                        <td>India Rupee</td>
                                        <td>INR </td>
                                        <td>₹</td>
                                        <td>Default</td>
                                        <td>
                                            <h6 class="success-labels">Action</h6>
                                        </td>
                                        <td>
                                            <div class="action-language">
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="delete-table"
                                                            data-bs-toggle="modal" data-bs-target="#edit-currency"><i
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
                                        <td>England Pound</td>
                                        <td>GBP </td>
                                        <td>£</td>
                                        <td>Default</td>
                                        <td>
                                            <h6 class="success-labels">Action</h6>
                                        </td>
                                        <td>
                                            <div class="action-language">
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="delete-table"
                                                            data-bs-toggle="modal" data-bs-target="#edit-currency"><i
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

    @component('admin.components.model')
    @endcomponent

    @component('admin.components.deletemodel')
        @slot('title1')
            Delete Currency
        @endslot
    @endcomponent
@endsection
