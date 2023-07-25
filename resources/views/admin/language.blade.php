<?php $page = 'language'; ?>
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
                            Languages
                        @endslot
                    @endcomponent

                    <div class="col-12">
                        <div class="table-resposnive table-bottom">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Language</th>
                                        <th>Code</th>
                                        <th>RTL</th>
                                        <th>Default Language</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        <th>Import</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="language-set">
                                                <img src="{{ URL::asset('/admin_assets/img/flags/us1.png') }}" alt="img">
                                                <span>English</span>
                                            </div>
                                        </td>
                                        <td>en</td>
                                        <td>
                                            <div class="active-switch">
                                                <label class="switch">
                                                    <input type="checkbox" checked="">
                                                    <span class="sliders round"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="active-switch">
                                                <label class="switch">
                                                    <input type="checkbox" checked="">
                                                    <span class="sliders round"></span>
                                                </label>
                                            </div>
                                        </td>
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
                                                        <a class="btn btn-grey" href="javascript:void(0);"><img
                                                                src="{{ URL::asset('/admin_assets/img/icons/lanuage.svg') }}"
                                                                class="me-2" alt="img">Web</a>
                                                    </li>
                                                    <li>
                                                        <a class="btn btn-grey" href="javascript:void(0);"><img
                                                                src="{{ URL::asset('/admin_assets/img/icons/lanuage.svg') }}"
                                                                class="me-2" alt="img">App</a>
                                                    </li>
                                                    <li>
                                                        <a class="btn btn-grey" href="javascript:void(0);"><img
                                                                src="{{ URL::asset('/admin_assets/img/icons/lanuage.svg') }}"
                                                                class="me-2" alt="img">Admin</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="delete-table"><i
                                                                class="far fa-edit "></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="delete-table"
                                                            data-bs-toggle="modal" data-bs-target="#delete-item"><i
                                                                class="far fa-trash-alt "></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="action-language">
                                                <ul>
                                                    <li>
                                                        <a class="btn btn-primary" href="javascript:void(0);"><img
                                                                src="{{ URL::asset('/admin_assets/img/icons/lanuage1.svg') }}"
                                                                class="me-2" alt="img">Web</a>
                                                    </li>
                                                    <li>
                                                        <a class="btn btn-primary" href="javascript:void(0);"><img
                                                                src="{{ URL::asset('/admin_assets/img/icons/lanuage1.svg') }}"
                                                                class="me-2" alt="img">App</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div class="language-set">
                                                <img src="{{ URL::asset('/admin_assets/img/flags/ae1.png') }}"
                                                    alt="img">
                                                <span>Arabic</span>
                                            </div>
                                        </td>
                                        <td>ar</td>
                                        <td>
                                            <div class="active-switch">
                                                <label class="switch">
                                                    <input type="checkbox" checked="">
                                                    <span class="sliders round"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="active-switch">
                                                <label class="switch">
                                                    <input type="checkbox" checked="">
                                                    <span class="sliders round"></span>
                                                </label>
                                            </div>
                                        </td>
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
                                                        <a class="btn btn-grey" href="javascript:void(0);"><img
                                                                src="{{ URL::asset('/admin_assets/img/icons/lanuage.svg') }}"
                                                                class="me-2" alt="img">Web</a>
                                                    </li>
                                                    <li>
                                                        <a class="btn btn-grey" href="javascript:void(0);"><img
                                                                src="{{ URL::asset('/admin_assets/img/icons/lanuage.svg') }}"
                                                                class="me-2" alt="img">App</a>
                                                    </li>
                                                    <li>
                                                        <a class="btn btn-grey" href="javascript:void(0);"><img
                                                                src="{{ URL::asset('/admin_assets/img/icons/lanuage.svg') }}"
                                                                class="me-2" alt="img">Admin</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="delete-table"><i
                                                                class="far fa-edit "></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="delete-table"
                                                            data-bs-toggle="modal" data-bs-target="#delete-item"><i
                                                                class="far fa-trash-alt "></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="action-language">
                                                <ul>
                                                    <li>
                                                        <a class="btn btn-primary" href="javascript:void(0);"><img
                                                                src="{{ URL::asset('/admin_assets/img/icons/lanuage1.svg') }}"
                                                                class="me-2" alt="img">Web</a>
                                                    </li>
                                                    <li>
                                                        <a class="btn btn-primary" href="javascript:void(0);"><img
                                                                src="{{ URL::asset('/admin_assets/img/icons/lanuage1.svg') }}"
                                                                class="me-2" alt="img">App</a>
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

    @component('admin.components.deletemodel')
        @slot('title1')
            Delete Languages
        @endslot
    @endcomponent
@endsection
