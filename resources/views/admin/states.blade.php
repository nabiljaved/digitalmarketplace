<?php $page = 'state'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    State
                @endslot
            @endcomponent
            
            <div class="row">
                <div class="col-12 ">
                    <div class="table-resposnive">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Country Code</th>
                                    <th>Country Name</th>
                                    <th>State Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>AS</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname flag-image">
                                            <img src="{{ URL::asset('/admin_assets/img/flags/us.png') }}" class="me-2"
                                                alt="img">
                                            <span>American Samoa(+684)</span>
                                        </a>
                                    </td>
                                    <td>Swains Island</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-state') }}">
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
                                    <td>2</td>
                                    <td>AD</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname flag-image">
                                            <img src="{{ URL::asset('/admin_assets/img/flags/ad.png') }}" class="me-2"
                                                alt="img">
                                            <span>Andorra (+376)</span>
                                        </a>
                                    </td>
                                    <td>Swains Island</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-state') }}">
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
                                    <td>3</td>
                                    <td>AO</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname flag-image">
                                            <img src="{{ URL::asset('/admin_assets/img/flags/ao.png') }}" class="me-2"
                                                alt="img">
                                            <span>Angola (+244)</span>
                                        </a>
                                    </td>
                                    <td>Benguela</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-state') }}">
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
                                    <td>4</td>
                                    <td>AI</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname flag-image">
                                            <img src="{{ URL::asset('/admin_assets/img/flags/ai.png') }}" class="me-2"
                                                alt="img">
                                            <span>Anguilla (+1264)</span>
                                        </a>
                                    </td>
                                    <td>The Valley</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-state') }}">
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
                                    <td>5</td>
                                    <td>AQ</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname flag-image">
                                            <img src="{{ URL::asset('/admin_assets/img/flags/qa.png') }}" class="me-2"
                                                alt="img">
                                            <span>Antarctica(+672)</span>
                                        </a>
                                    </td>
                                    <td>Victoria Land</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-state') }}">
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
                                    <td>6</td>
                                    <td>AG</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname flag-image">
                                            <img src="{{ URL::asset('/admin_assets/img/flags/ag.png') }}" class="me-2"
                                                alt="img">
                                            <span>Antigua & Barbuda (+1268)</span>
                                        </a>
                                    </td>
                                    <td>Saint Paul</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-state') }}">
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
                                    <td>7</td>
                                    <td>AR</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname flag-image">
                                            <img src="{{ URL::asset('/admin_assets/img/flags/ar.png') }}" class="me-2"
                                                alt="img">
                                            <span>Argentina (+54)</span>
                                        </a>
                                    </td>
                                    <td>Santa Fe</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-state') }}">
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
                                    <td>8</td>
                                    <td>AU</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname flag-image">
                                            <img src="{{ URL::asset('/admin_assets/img/flags/au.png') }}" class="me-2"
                                                alt="img">
                                            <span>Australia (+61)</span>
                                        </a>
                                    </td>
                                    <td>Queensland</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-state') }}">
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
            Delete States
        @endslot
    @endcomponent
@endsection
