<?php $page = 'blogs-comments'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    Comments List
                @endslot
            @endcomponent
            
            <div class="row">
                <div class="col-12 ">
                    <div class="table-resposnive table-div">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>User Name</th>
                                    <th>Phone</th>
                                    <th>Content</th>
                                    <th>Create at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="table-namesplit">
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-01.jpg') }}"
                                                class="me-2" alt="img">
                                        </a>
                                        <a href="javascript:void(0);" class="table-name">
                                            <span>John Smith</span>
                                            <p>johnsmith@gmail.com</p>
                                        </a>
                                    </td>
                                    <td>+1 843-443-3282 </td>
                                    <td>Lorem ipsum dolor sit amet, consectetur elit, </td>
                                    <td>28 Sep <script>document.write(new Date().getFullYear())</script> 16:43PM</td>
                                    <td>
                                        <div class="table-actions d-flex">
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
                                    <td class="table-profileimage">
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-07.jpg') }}"
                                                class="me-2" alt="img">
                                        </a>
                                        <a href="javascript:void(0);" class="table-name">
                                            <span>Johnny</span>
                                            <p>johnny@gmail.com</p>
                                        </a>
                                    </td>
                                    <td>+1 917-409-0861</td>
                                    <td>Lorem ipsum dolor </td>
                                    <td>23 Sep <script>document.write(new Date().getFullYear())</script> 16:43PM</td>
                                    <td>
                                        <div class="table-actions d-flex">
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
                                    <td class="table-profileimage">
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-09.jpg') }}"
                                                class="me-2" alt="img">
                                        </a>
                                        <a href="javascript:void(0);" class="table-name">
                                            <span>Robert</span>
                                            <p>robert@gmail.com</p>
                                        </a>
                                    </td>
                                    <td>+1 956-623-2880</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur elit, </td>
                                    <td>08 Sep <script>document.write(new Date().getFullYear())</script> 16:43PM</td>
                                    <td>
                                        <div class="table-actions d-flex">
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
                                    <td class="table-namesplit">
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-06.jpg') }}"
                                                class="me-2" alt="img">
                                        </a>
                                        <a href="javascript:void(0);" class="table-name">
                                            <span>Sharonda</span>
                                            <p>sharonda@gmail.com</p>
                                    <td>02 Sep <script>document.write(new Date().getFullYear())</script> 16:43PM</td>
                                    </a>
                                    </td>
                                    <td>Lorem ipsum amet, elit, </td>
                                    <td>+1 559-741-9672</td>
                                    <td>
                                        <div class="table-actions d-flex">
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
                                    <td class="table-profileimage">
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-04.jpg') }}"
                                                class="me-2" alt="img">
                                        </a>
                                        <a href="javascript:void(0);" class="table-name">
                                            <span>Nicholas</span>
                                            <p>nicholas@gmail.com</p>
                                        </a>
                                    </td>
                                    <td>+1 559-741-9672</td>
                                    <td>Lorem ipsum dolor </td>
                                    <td>23 Sep <script>document.write(new Date().getFullYear())</script> 16:43PM</td>
                                    <td>
                                        <div class="table-actions d-flex">
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
                                    <td class="table-namesplit">
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-01.jpg') }}"
                                                class="me-2" alt="img">
                                        </a>
                                        <a href="javascript:void(0);" class="table-name">
                                            <span>John Smith</span>
                                            <p>johnsmith@gmail.com</p>
                                        </a>
                                    </td>
                                    <td>+1 843-443-3282 </td>
                                    <td>Lorem ipsum dolor sit amet, consectetur elit, </td>
                                    <td>28 Sep <script>document.write(new Date().getFullYear())</script> 16:43PM</td>
                                    <td>
                                        <div class="table-actions d-flex">
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
                                    <td class="table-profileimage">
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-07.jpg') }}"
                                                class="me-2" alt="img">
                                        </a>
                                        <a href="javascript:void(0);" class="table-name">
                                            <span>Johnny</span>
                                            <p>johnny@gmail.com</p>
                                        </a>
                                    </td>
                                    <td>+1 917-409-0861</td>
                                    <td>Lorem ipsum dolor </td>
                                    <td>23 Sep <script>document.write(new Date().getFullYear())</script> 16:43PM</td>
                                    <td>
                                        <div class="table-actions d-flex">
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
                                    <td class="table-profileimage">
                                        <a href="javascript:void(0);" class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-09.jpg') }}"
                                                class="me-2" alt="img">
                                        </a>
                                        <a href="javascript:void(0);" class="table-name">
                                            <span>Robert</span>
                                            <p>robert@gmail.com</p>
                                        </a>
                                    </td>
                                    <td>+1 956-623-2880</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur elit, </td>
                                    <td>08 Sep <script>document.write(new Date().getFullYear())</script> 16:43PM</td>
                                    <td>
                                        <div class="table-actions d-flex">
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
            Delete Comments List
        @endslot
    @endcomponent
@endsection
