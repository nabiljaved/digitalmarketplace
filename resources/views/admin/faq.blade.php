<?php $page = 'faq'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    FAQ’s
                @endslot
            @endcomponent
            
            <div class="row">
                <div class="col-12 ">
                    <div class="table-resposnive">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Details</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>How Can I Book Service?</td>
                                    <td>Services</td>
                                    <td>Lorem ipsum dolor amet, adipiscing elit</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#edit-faq">
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
                                    <td>Sed perspiciatis omnis iste natus error?</td>
                                    <td>Services</td>
                                    <td>At vero eos et accusamus et iusto dignissimos</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#edit-faq">
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
                                    <td>How Can I Book Service?</td>
                                    <td>Services</td>
                                    <td>Lorem ipsum dolor amet, adipiscing elit</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#edit-faq">
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
                                    <td>Sed perspiciatis omnis iste natus error?</td>
                                    <td>Services</td>
                                    <td>At vero eos et accusamus et iusto dignissimos</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#edit-faq">
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

    <!-- Create & Edit Email Model -->
    @component('admin.components.model')
    @endcomponent
    <!-- /Create & Edit Email Model -->

    @component('admin.components.deletemodel')
        @slot('title1')
            Delete Faq's
        @endslot
    @endcomponent
@endsection
