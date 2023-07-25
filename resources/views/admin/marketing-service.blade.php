<?php $page = 'marketing-service'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    Offers
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
                                    <th>User Name</th>
                                    <th>Amount</th>
                                    <th>Offer</th>
                                    <th>Offer Price</th>
                                    <th>Date</th>
                                    <th>End Date</th>
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
                                    <td>$80</td>
                                    <td>25%</td>
                                    <td>$20</td>
                                    <td>28 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>28 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-offer') }}">
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
                                    <td>$50</td>
                                    <td>10%</td>
                                    <td>$5</td>
                                    <td>17 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>17 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-offer') }}">
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
                                    <td>$50</td>
                                    <td>10%</td>
                                    <td>$5</td>
                                    <td>17 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>17 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-offer') }}">
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
                                    <td>$150</td>
                                    <td>20%</td>
                                    <td>$15</td>
                                    <td>23 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>23 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-offer') }}">
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
                                    <td>$250</td>
                                    <td>50%</td>
                                    <td>$15</td>
                                    <td>03 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>03 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-offer') }}">
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
                                    <td>$50</td>
                                    <td>10%</td>
                                    <td>$5</td>
                                    <td>17 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>17 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-offer') }}">
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
                                    <td>$50</td>
                                    <td>10%</td>
                                    <td>$5</td>
                                    <td>17 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>17 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-offer') }}">
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
                                    <td>$150</td>
                                    <td>20%</td>
                                    <td>$15</td>
                                    <td>23 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>23 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-offer') }}">
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
            Delete Offers
        @endslot
    @endcomponent
@endsection
