<?php $page = 'sales-transactions'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    Sales Transactions
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-12 ">
                    <div class="table-resposnive">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Customer</th>
                                    <th>Provider</th>
                                    <th>Service</th>
                                    <th>Amount</th>
                                    <th>Discount</th>
                                    <th>Tax</th>
                                    <th>Date</th>
                                    <th>Payment Type</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="table-namesplit">
                                            <a href="javascript:void(0);" class="table-profileimage">
                                                <img src="{{ URL::asset('admin_assets/img/customer/user-01.jpg') }}"
                                                    class="me-2" alt="img">
                                            </a>
                                            <a href="javascript:void(0);" class="table-name">
                                                <span>John Smith</span>
                                                <p>johnsmith@gmail.com</p>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-namesplit">
                                            <a href="javascript:void(0);" class="table-profileimage">
                                                <img src="{{ URL::asset('admin_assets/img/customer/user-04.jpg') }}"
                                                    class="me-2" alt="img">
                                            </a>
                                            <a href="javascript:void(0);" class="table-name">
                                                <span>Robert</span>
                                                <p>robert@gmail.com</p>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('admin_assets/img/services/service-03.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Computer Repair</span>
                                        </a>
                                    </td>
                                    <td>$80</td>
                                    <td>$4</td>
                                    <td>$2</td>
                                    <td>28 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>Paypal</td>
                                    <td>
                                        <h6 class="badge-active">successful</h6>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="javascript:void(0);">
                                                <img src="{{ URL::asset('admin_assets/img/icons/pdf.svg') }}"
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
                                        <div class="table-namesplit">
                                            <a href="javascript:void(0);" class="table-profileimage">
                                                <img src="{{ URL::asset('admin_assets/img/customer/user-04.jpg') }}"
                                                    class="me-2" alt="img">
                                            </a>
                                            <a href="javascript:void(0);" class="table-name">
                                                <span>Johnny</span>
                                                <p>johnny@gmail.com</p>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-namesplit">
                                            <a href="javascript:void(0);" class="table-profileimage">
                                                <img src="{{ URL::asset('admin_assets/img/customer/user-05.jpg') }}"
                                                    class="me-2" alt="img">
                                            </a>
                                            <a href="javascript:void(0);" class="table-name">
                                                <span>Pricilla</span>
                                                <p>pricilla@gmail.com</p>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('admin_assets/img/services/service-02.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Car Repair Services</span>
                                        </a>
                                    </td>
                                    <td>$100</td>
                                    <td>$10</td>
                                    <td>$3</td>
                                    <td>27 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>Paypal</td>
                                    <td>
                                        <h6 class="badge-delete">Refund</h6>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="javascript:void(0);">
                                                <img src="{{ URL::asset('admin_assets/img/icons/pdf.svg') }}"
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
                                        <div class="table-namesplit">
                                            <a href="javascript:void(0);" class="table-profileimage">
                                                <img src="{{ URL::asset('admin_assets/img/customer/user-06.jpg') }}"
                                                    class="me-2" alt="img">
                                            </a>
                                            <a href="javascript:void(0);" class="table-name">
                                                <span>Robert</span>
                                                <p>robert@gmail.com</p>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-namesplit">
                                            <a href="javascript:void(0);" class="table-profileimage">
                                                <img src="{{ URL::asset('admin_assets/img/customer/user-02.jp') }}g"
                                                    class="me-2" alt="img">
                                            </a>
                                            <a href="javascript:void(0);" class="table-name">
                                                <span>Amanda</span>
                                                <p>amanda@gmail.com</p>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('admin_assets/img/services/service-04.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Steam Car Wash</span>
                                        </a>
                                    </td>
                                    <td>$70</td>
                                    <td>$30</td>
                                    <td>$20</td>
                                    <td>27 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>Paypal</td>
                                    <td>
                                        <h6 class="badge-active">successful</h6>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="javascript:void(0);">
                                                <img src="{{ URL::asset('admin_assets/img/icons/pdf.svg') }}"
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
                                        <div class="table-namesplit">
                                            <a href="javascript:void(0);" class="table-profileimage">
                                                <img src="{{ URL::asset('admin_assets/img/customer/user-09.jpg') }}"
                                                    class="me-2" alt="img">
                                            </a>
                                            <a href="javascript:void(0);" class="table-name">
                                                <span>Sharonda</span>
                                                <p>sharonda@gmail.com</p>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-namesplit">
                                            <a href="javascript:void(0);" class="table-profileimage">
                                                <img src="{{ URL::asset('admin_assets/img/customer/user-01.jpg') }}"
                                                    class="me-2" alt="img">
                                            </a>
                                            <a href="javascript:void(0);" class="table-name">
                                                <span>James</span>
                                                <p>james@gmail.com</p>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('admin_assets/img/services/service-09.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>House Cleaning </span>
                                        </a>
                                    </td>
                                    <td>$150</td>
                                    <td>$12</td>
                                    <td>$4</td>
                                    <td>22 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>Paypal</td>
                                    <td>
                                        <h6 class="badge-delete">Refund</h6>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="javascript:void(0);">
                                                <img src="{{ URL::asset('admin_assets/img/icons/pdf.svg') }}"
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
                                        <div class="table-namesplit">
                                            <a href="javascript:void(0);" class="table-profileimage">
                                                <img src="{{ URL::asset('admin_assets/img/customer/user-01.jpg') }}"
                                                    class="me-2" alt="img">
                                            </a>
                                            <a href="javascript:void(0);" class="table-name">
                                                <span>John Smith</span>
                                                <p>johnsmith@gmail.com</p>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-namesplit">
                                            <a href="javascript:void(0);" class="table-profileimage">
                                                <img src="{{ URL::asset('admin_assets/img/customer/user-03.jpg') }}"
                                                    class="me-2" alt="img">
                                            </a>
                                            <a href="javascript:void(0);" class="table-name">
                                                <span>Sharon</span>
                                                <p>sharon@gmail.com</p>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="table-imgname">
                                            <img src="{{ URL::asset('admin_assets/img/services/service-03.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Computer Repair</span>
                                        </a>
                                    </td>
                                    <td>$100</td>
                                    <td>$10</td>
                                    <td>$3</td>
                                    <td>27 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>Paypal</td>
                                    <td>
                                        <h6 class="badge-delete">Refund</h6>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="javascript:void(0);">
                                                <img src="{{ URL::asset('admin_assets/img/icons/pdf.svg') }}"
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
            Delete Sales Transactions
        @endslot
    @endcomponent
@endsection
