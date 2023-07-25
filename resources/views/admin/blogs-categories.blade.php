<?php $page = 'blogs-categories'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    Categories
                @endslot
            @endcomponent
            
            <div class="row">
                <div class="col-12 ">
                    <div class="table-resposnive table-div">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>Language</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="table-imgname">
                                            <img src="{{ URL::asset('admin_assets/img/services/service-03.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Computer Repair</span>
                                        </div>
                                    </td>
                                    <td>English</td>
                                    <td>28 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-blog-categories') }}">
                                                <img src="{{ URL::asset('admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <div class="table-imgname">
                                            <img src="{{ URL::asset('admin_assets/img/services/service-02.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Car Repair Services</span>
                                        </div>
                                    </td>
                                    <td>English</td>
                                    <td>17 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-blog-categories') }}">
                                                <img src="{{ URL::asset('admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <div class="table-imgname">
                                            <img src="{{ URL::asset('admin_assets/img/services/service-04.jpg') }}"
                                                class="me-2" alt="img">
                                            <span> Car Wash</span>
                                        </div>
                                    </td>
                                    <td>English</td>
                                    <td>23 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-blog-categories') }}">
                                                <img src="{{ URL::asset('admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <div class="table-imgname">
                                            <img src="{{ URL::asset('admin_assets/img/services/service-09.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>House Cleaning </span>
                                        </div>
                                    </td>
                                    <td>English</td>
                                    <td>07 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-blog-categories') }}">
                                                <img src="{{ URL::asset('admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <div class="table-imgname">
                                            <img src="{{ URL::asset('admin_assets/img/services/service-08.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Building Construction</span>
                                        </div>
                                    </td>
                                    <td>English</td>
                                    <td>07 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-blog-categories') }}">
                                                <img src="{{ URL::asset('admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>
                                        <div class="table-imgname">
                                            <img src="{{ URL::asset('admin_assets/img/services/service-07.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Interior Designing</span>
                                        </div>
                                    </td>
                                    <td>English</td>
                                    <td>07 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-blog-categories') }}">
                                                <img src="{{ URL::asset('admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>
                                        <div class="table-imgname">
                                            <img src="{{ URL::asset('admin_assets/img/services/service-09.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Commercial Painting </span>
                                        </div>
                                    </td>
                                    <td>English</td>
                                    <td>22 Aug <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-blog-categories') }}">
                                                <img src="{{ URL::asset('admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>
                                        <div class="table-imgname">
                                            <img src="{{ URL::asset('admin_assets/img/services/service-12.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Plumbing Services</span>
                                        </div>
                                    </td>
                                    <td>English</td>
                                    <td>15 Aug <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-blog-categories') }}">
                                                <img src="{{ URL::asset('admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('admin_assets/img/icons/delete.svg') }}"
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
            Delete Categories
        @endslot
    @endcomponent
@endsection
