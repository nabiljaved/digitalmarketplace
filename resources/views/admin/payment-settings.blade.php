<?php $page = 'payment-settings'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">

        @component('layout.partials.settingssidemenu')
        @endcomponent

        <div class="content w-100">

            @component('admin.components.settingspageheader')
                @slot('titleset')
                    Bank Transfer Account
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-md-6">
                    <div class="bank-box active">
                        <div class="bank-header">
                            <div class="bank-name">
                                <h6>Karur vysya bank</h6>
                                <p>**** **** 1832</p>
                            </div>
                            <div class="bank-info">
                                <p>Holder Name</p>
                                <h6>John Smith</h6>
                            </div>
                        </div>
                        <div class="bank-action">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit-acc"><i
                                    class="fe fe-edit"></i>Edit</a>
                            <a href="javascript:void(0);" data-bs-toggle="modal"
                            data-bs-target="#delete-item"><i class="fe fe-trash-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bank-box">
                        <div class="bank-header">
                            <div class="bank-name">
                                <h6>Karur vysya bank</h6>
                                <p>**** **** 1832</p>
                            </div>
                            <div class="bank-info">
                                <p>Holder Name</p>
                                <h6>John Smith</h6>
                            </div>
                        </div>
                        <div class="bank-action">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit-acc"><i
                                    class="fe fe-edit"></i>Edit</a>
                            <a href="javascript:void(0);" data-bs-toggle="modal"
                            data-bs-target="#delete-item"><i class="fe fe-trash-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @component('admin.components.model')
    @endcomponent

    @component('admin.components.deletemodel')
        @slot('title1')
            Delete Payment Settings
        @endslot
    @endcomponent

@endsection
