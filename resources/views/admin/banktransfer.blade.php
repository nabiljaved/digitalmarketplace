<?php $page = 'banktransfer'; ?>
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
                <div class="col-lg-6 col-sm-12">
                    <div class="transfer-lists">
                        <div class="theme-image-content">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                        </div>
                        <div class="transfer-liststop">
                            <div class="transfer-listbank">
                                <h3>Karur vysya bank</h3>
                                <h4>**** **** 1832</h4>
                            </div>
                            <div class="transfer-listsname">
                                <h5>Holder Name</h5>
                                <h6>John Smith</h6>
                            </div>
                        </div>
                        <div class="transfer-listsbottom">
                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-account"><i
                                    class="fe fe-edit me-2"></i>Edit</a>
                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-item"><i
                                    class="fe fe-trash-2 me-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="transfer-lists active">
                        <div class="theme-image-content">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                        </div>
                        <div class="transfer-liststop">
                            <div class="transfer-listbank">
                                <h3>Karur vysya bank</h3>
                                <h4>**** **** 1832</h4>
                            </div>
                            <div class="transfer-listsname">
                                <h5>Holder Name</h5>
                                <h6>John Smith</h6>
                            </div>
                        </div>
                        <div class="transfer-listsbottom">
                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-account"><i
                                    class="fe fe-edit me-2"></i>Edit</a>
                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-item"><i
                                    class="fe fe-trash-2 me-2"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @component('admin.components.deletemodel')
        @slot('title1')
            Delete Payment Settings
        @endslot
    @endcomponent
@endsection
