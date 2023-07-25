<?php $page = 'marketing-newsletter'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    Email Newsletter
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-12 ">
                    <div class="table-resposnive">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Email</th>
                                    <th>Subcribed Date</th>
                                    <th>Last Activity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
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
                                    <td>03 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>07 Nov <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#send-email">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/sms.svg') }}"
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
                                    <td>03 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>07 Nov <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#send-email">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/sms.svg') }}"
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
                                    <td>03 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>07 Nov <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#send-email">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/sms.svg') }}"
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
                                    <td>15 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>17 Nov <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#send-email">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/sms.svg') }}"
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
                                    <td>23 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>27 Nov <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#send-email">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/sms.svg') }}"
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

    <!-- Add & Send Email Newsletter -->
    @component('admin.components.model')
    @endcomponent
    <!-- Add & Send Email Newsletter -->

    <!-- Delete Email Newsletter -->
    @component('admin.components.deletemodel')
        @slot('title1')
            Delete Email Newsletter
        @endslot
    @endcomponent
    <!-- /Delete Email Newsletter -->
@endsection
