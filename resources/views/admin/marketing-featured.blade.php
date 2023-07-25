<?php $page = 'marketing-featured'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    Featured Services
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-12 ">
                    <div class="table-resposnive">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Service</th>
                                    <th>Services Status</th>
                                    <th>Category</th>
                                    <th>Amount</th>
                                    <th>Provider Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('/admin_assets/img/services/service-03.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Computer Repair</span>
                                        </a>
                                    </td>
                                    <td>
                                        <h6 class="badge-active">Active</h6>
                                    </td>
                                    <td>Computer</td>
                                    <td>$80</td>
                                    <td>
                                        <div class="table-namesplit">
                                            <a href="javascript:void(0);" class="table-profileimage">
                                                <img src="{{ URL::asset('/admin_assets/img/customer/user-01.jpg') }}"
                                                    class="me-2" alt="img">
                                            </a>
                                            <a href="javascript:void(0);" class="table-name">
                                                <span>John Smith</span>
                                                <p>johnsmith@gmail.com</p>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <h6 class="badge-active">Active</h6>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/view-service') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/eye.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table me-2" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#edit-features">
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
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('/admin_assets/img/services/service-02.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Car Repair Services</span>
                                        </a>
                                    </td>
                                    <td>
                                        <h6 class="badge-active">Active</h6>
                                    </td>
                                    <td>Computer</td>
                                    <td>$80</td>
                                    <td>
                                        <div class="table-namesplit">
                                            <a href="javascript:void(0);" class="table-profileimage">
                                                <img src="{{ URL::asset('/admin_assets/img/customer/user-04.jpg') }}"
                                                    class="me-2" alt="img">
                                            </a>
                                            <a href="javascript:void(0);" class="table-name">
                                                <span>Johnny</span>
                                                <p>johnny@gmail.com</p>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <h6 class="badge-active">Active</h6>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/view-service') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/eye.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table me-2" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#edit-features">
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
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('/admin_assets/img/services/service-04.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Steam Car Wash</span>
                                        </a>
                                    </td>
                                    <td>
                                        <h6 class="badge-active">Active</h6>
                                    </td>
                                    <td>Computer</td>
                                    <td>$80</td>
                                    <td>
                                        <div class="table-namesplit">
                                            <a href="javascript:void(0);" class="table-profileimage">
                                                <img src="{{ URL::asset('/admin_assets/img/customer/user-06.jpg') }}"
                                                    class="me-2" alt="img">
                                            </a>
                                            <a href="javascript:void(0);" class="table-name">
                                                <span>Robert</span>
                                                <p>robert@gmail.com</p>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <h6 class="badge-active">Active</h6>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/view-service') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/eye.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table me-2" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#edit-features">
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
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('/admin_assets/img/services/service-09.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>House Cleaning </span>
                                        </a>
                                    </td>
                                    <td>
                                        <h6 class="badge-active">Active</h6>
                                    </td>
                                    <td>Computer</td>
                                    <td>$80</td>
                                    <td>
                                        <div class="table-namesplit">
                                            <a href="javascript:void(0);" class="table-profileimage">
                                                <img src="{{ URL::asset('/admin_assets/img/customer/user-09.jpg') }}"
                                                    class="me-2" alt="img">
                                            </a>
                                            <a href="javascript:void(0);" class="table-name">
                                                <span>Sharonda</span>
                                                <p>sharonda@gmail.com</p>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <h6 class="badge-active">Active</h6>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/view-service') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/eye.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table me-2" href="javascript:void(0);"
                                                data-bs-toggle="modal" data-bs-target="#edit-features">
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
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('/admin_assets/img/services/service-03.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Computer Repair</span>
                                        </a>
                                    </td>
                                    <td>
                                        <h6 class="badge-active">Active</h6>
                                    </td>
                                    <td>Computer</td>
                                    <td>$80</td>
                                    <td>
                                        <div class="table-namesplit">
                                            <a href="javascript:void(0);" class="table-profileimage">
                                                <img src="{{ URL::asset('/admin_assets/img/customer/user-01.jpg') }}"
                                                    class="me-2" alt="img">
                                            </a>
                                            <a href="javascript:void(0);" class="table-name">
                                                <span>John Smith</span>
                                                <p>johnsmith@gmail.com</p>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <h6 class="badge-active">Active</h6>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/view-service') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/eye.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table me-2" href="javascript:void(0);"
                                                data-bs-toggle="modal" data-bs-target="#edit-features">
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
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('/admin_assets/img/services/service-02.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Car Repair Services</span>
                                        </a>
                                    </td>
                                    <td>
                                        <h6 class="badge-active">Active</h6>
                                    </td>
                                    <td>Computer</td>
                                    <td>$80</td>
                                    <td>
                                        <div class="table-namesplit">
                                            <a href="javascript:void(0);" class="table-profileimage">
                                                <img src="{{ URL::asset('/admin_assets/img/customer/user-04.jpg') }}"
                                                    class="me-2" alt="img">
                                            </a>
                                            <a href="javascript:void(0);" class="table-name">
                                                <span>Johnny</span>
                                                <p>johnny@gmail.com</p>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <h6 class="badge-active">Active</h6>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/view-service') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/eye.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table me-2" href="javascript:void(0);"
                                                data-bs-toggle="modal" data-bs-target="#edit-features">
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
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('/admin_assets/img/services/service-04.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Steam Car Wash</span>
                                        </a>
                                    </td>
                                    <td>
                                        <h6 class="badge-active">Active</h6>
                                    </td>
                                    <td>Computer</td>
                                    <td>$80</td>
                                    <td>
                                        <div class="table-namesplit">
                                            <a href="javascript:void(0);" class="table-profileimage">
                                                <img src="{{ URL::asset('/admin_assets/img/customer/user-06.jpg') }}"
                                                    class="me-2" alt="img">
                                            </a>
                                            <a href="javascript:void(0);" class="table-name">
                                                <span>Robert</span>
                                                <p>robert@gmail.com</p>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <h6 class="badge-active">Active</h6>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="javascript:void(0);">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/eye.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table me-2" href="javascript:void(0);"
                                                data-bs-toggle="modal" data-bs-target="#edit-features">
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
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('/admin_assets/img/services/service-09.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>House Cleaning </span>
                                        </a>
                                    </td>
                                    <td>
                                        <h6 class="badge-active">Active</h6>
                                    </td>
                                    <td>Computer</td>
                                    <td>$80</td>
                                    <td>
                                        <div class="table-namesplit">
                                            <a href="javascript:void(0);" class="table-profileimage">
                                                <img src="{{ URL::asset('/admin_assets/img/customer/user-09.jpg') }}"
                                                    class="me-2" alt="img">
                                            </a>
                                            <a href="javascript:void(0);" class="table-name">
                                                <span>Sharonda</span>
                                                <p>sharonda@gmail.com</p>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <h6 class="badge-active">Active</h6>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="javascript:void(0);">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/eye.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table me-2" href="javascript:void(0);"
                                                data-bs-toggle="modal" data-bs-target="#edit-features">
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

    <!-- Add & Edit Featured Services -->
    @component('admin.components.model')
    @endcomponent
    <!-- /Add & Edit Featured Services -->

    <!-- delete Featured Services -->
    @component('admin.components.deletemodel')
        @slot('title1')
            Delete Featured Services
        @endslot
    @endcomponent
    <!-- /delete Featured Services -->
@endsection
