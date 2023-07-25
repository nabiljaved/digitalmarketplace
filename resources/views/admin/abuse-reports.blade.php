<?php $page = 'abuse-reports'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    Abuse Reports
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-12 ">
                    <div class="table-resposnive">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Provider </th>
                                    <th>Reported By User</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
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
                                        </a>
                                    </td>
                                    <td>Lorem ipsum dolor sit</td>
                                    <td>28 Sep <script>document.write(new Date().getFullYear())</script> 16:43:20</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#add-abuse">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/eye.svg') }}"
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
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-04.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Johnny</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-05.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Pricilla</span>
                                        </a>
                                    </td>
                                    <td>Lorem ipsum dolor sit</td>
                                    <td>15 Sep <script>document.write(new Date().getFullYear())</script> 16:43:20</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#add-abuse">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/eye.svg') }}"
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
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-06.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Robert</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-02.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Amanda</span>
                                        </a>
                                    </td>
                                    <td>Lorem ipsum dolor sit</td>
                                    <td>13 Sep <script>document.write(new Date().getFullYear())</script> 16:43:20</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#add-abuse">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/eye.svg') }}"
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
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-09.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Sharonda</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-09.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>James</span>
                                        </a>
                                    </td>
                                    <td>Lorem ipsum dolor sit</td>
                                    <td>03 Sep <script>document.write(new Date().getFullYear())</script> 16:43:20</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#add-abuse">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/eye.svg') }}"
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
                                        </a>
                                    </td>
                                    <td>Lorem ipsum dolor sit</td>
                                    <td>18 Sep <script>document.write(new Date().getFullYear())</script> 16:43:20</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="javascript:void(0);"
                                                data-bs-toggle="modal" data-bs-target="#add-abuse">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/eye.svg') }}"
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
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-04.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Johnny</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-05.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Pricilla</span>
                                        </a>
                                    </td>
                                    <td>Lorem ipsum dolor sit</td>
                                    <td>23 Sep <script>document.write(new Date().getFullYear())</script> 16:43:20</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="javascript:void(0);"
                                                data-bs-toggle="modal" data-bs-target="#add-abuse">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/eye.svg') }}"
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
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-06.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Robert</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-02.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Amanda</span>
                                        </a>
                                    </td>
                                    <td>Lorem ipsum dolor sit</td>
                                    <td>18 Sep <script>document.write(new Date().getFullYear())</script> 16:43:20</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="javascript:void(0);"
                                                data-bs-toggle="modal" data-bs-target="#add-abuse">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/eye.svg') }}"
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
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-09.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Sharonda</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-09.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>James</span>
                                        </a>
                                    </td>
                                    <td>Lorem ipsum dolor sit</td>
                                    <td>15 Sep <script>document.write(new Date().getFullYear())</script> 16:43:20</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="javascript:void(0);"
                                                data-bs-toggle="modal" data-bs-target="#add-abuse">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/eye.svg') }}"
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

    @component('admin.components.model')
    @endcomponent

    @component('admin.components.deletemodel')
        @slot('title1')
            Delete Abuse Reports
        @endslot
    @endcomponent
@endsection
