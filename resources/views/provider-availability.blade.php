<?php $page = 'provider-availability'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            @component('components.pageheader')
                @slot('title')
                    Availability
                @endslot
            @endcomponent

            <!-- Availability Days -->
            <div class="availability-sec">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="row">

                            <div class="col-sm-6">
                                <h6>All Days</h6>
                            </div>
                            <div class="col-sm-6">
                                <div class="status-toggle sml-status d-flex justify-content-sm-end align-items-center">
                                    <input type="checkbox" id="status_2" class="check" checked>
                                    <label for="status_2" class="checktoggle">checkbox</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="day-info">
                                    <div class="row day-cont">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">From</label>
                                                <div class='form-icon'>
                                                    <input type='text' class="form-control timepicker"
                                                        placeholder="Select Time">
                                                    <span class="cus-icon"><i class="feather-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">To</label>
                                                <div class='form-icon'>
                                                    <input type='text' class="form-control timepicker"
                                                        placeholder="Select Time">
                                                    <span class="cus-icon"><i class="feather-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a href="javascript:;" class="add-text add-day"><i class="feather-plus-circle"></i> Add
                                        Hours</a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h6>Monday</h6>
                            </div>
                            <div class="col-sm-6">
                                <div class="status-toggle sml-status d-flex justify-content-sm-end align-items-center">
                                    <input type="checkbox" id="status_3" class="check" checked>
                                    <label for="status_3" class="checktoggle">checkbox</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="day-info">
                                    <div class="row day-cont">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">From</label>
                                                <div class='form-icon'>
                                                    <input type='text' class="form-control timepicker"
                                                        placeholder="Select Time">
                                                    <span class="cus-icon"><i class="feather-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">To</label>
                                                <div class='form-icon'>
                                                    <input type='text' class="form-control timepicker"
                                                        placeholder="Select Time">
                                                    <span class="cus-icon"><i class="feather-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a href="javascript:;" class="add-text add-day"><i class="feather-plus-circle"></i> Add
                                        Hours</a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h6>Tuesday</h6>
                            </div>
                            <div class="col-sm-6">
                                <div class="status-toggle sml-status d-flex justify-content-sm-end align-items-center">
                                    <input type="checkbox" id="status_21" class="check" checked>
                                    <label for="status_21" class="checktoggle">checkbox</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="day-info">
                                    <div class="row day-cont">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">From</label>
                                                <div class='form-icon'>
                                                    <input type='text' class="form-control timepicker"
                                                        placeholder="Select Time">
                                                    <span class="cus-icon"><i class="feather-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">To</label>
                                                <div class='form-icon'>
                                                    <input type='text' class="form-control timepicker"
                                                        placeholder="Select Time">
                                                    <span class="cus-icon"><i class="feather-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a href="javascript:;" class="add-text add-day"><i class="feather-plus-circle"></i> Add
                                        Hours</a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h6>Wednesday</h6>
                            </div>
                            <div class="col-sm-6">
                                <div class="status-toggle sml-status d-flex justify-content-sm-end align-items-center">
                                    <input type="checkbox" id="status_4" class="check" checked>
                                    <label for="status_4" class="checktoggle">checkbox</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="day-info">
                                    <div class="row day-cont">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">From</label>
                                                <div class='form-icon'>
                                                    <input type='text' class="form-control timepicker"
                                                        placeholder="Select Time">
                                                    <span class="cus-icon"><i class="feather-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">To</label>
                                                <div class='form-icon'>
                                                    <input type='text' class="form-control timepicker"
                                                        placeholder="Select Time">
                                                    <span class="cus-icon"><i class="feather-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a href="javascript:;" class="add-text add-day"><i class="feather-plus-circle"></i> Add
                                        Hours</a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h6>Thursday</h6>
                            </div>
                            <div class="col-sm-6">
                                <div class="status-toggle sml-status d-flex justify-content-sm-end align-items-center">
                                    <input type="checkbox" id="status_5" class="check" checked>
                                    <label for="status_5" class="checktoggle">checkbox</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="day-info">
                                    <div class="row day-cont">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">From</label>
                                                <div class='form-icon'>
                                                    <input type='text' class="form-control timepicker"
                                                        placeholder="Select Time">
                                                    <span class="cus-icon"><i class="feather-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">To</label>
                                                <div class='form-icon'>
                                                    <input type='text' class="form-control timepicker"
                                                        placeholder="Select Time">
                                                    <span class="cus-icon"><i class="feather-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a href="javascript:;" class="add-text add-day"><i class="feather-plus-circle"></i> Add
                                        Hours</a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h6>Friday</h6>
                            </div>
                            <div class="col-sm-6">
                                <div class="status-toggle sml-status d-flex justify-content-sm-end align-items-center">
                                    <input type="checkbox" id="status_6" class="check" checked>
                                    <label for="status_6" class="checktoggle">checkbox</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="day-info">
                                    <div class="row day-cont">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">From</label>
                                                <div class='form-icon'>
                                                    <input type='text' class="form-control timepicker"
                                                        placeholder="Select Time">
                                                    <span class="cus-icon"><i class="feather-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">To</label>
                                                <div class='form-icon'>
                                                    <input type='text' class="form-control timepicker"
                                                        placeholder="Select Time">
                                                    <span class="cus-icon"><i class="feather-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a href="javascript:;" class="add-text add-day"><i class="feather-plus-circle"></i> Add
                                        Hours</a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h6>Saturday</h6>
                            </div>
                            <div class="col-sm-6">
                                <div class="status-toggle sml-status d-flex justify-content-sm-end align-items-center">
                                    <input type="checkbox" id="status_7" class="check" checked>
                                    <label for="status_7" class="checktoggle">checkbox</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="day-info">
                                    <div class="row day-cont">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">From</label>
                                                <div class='form-icon'>
                                                    <input type='text' class="form-control timepicker"
                                                        placeholder="Select Time">
                                                    <span class="cus-icon"><i class="feather-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">To</label>
                                                <div class='form-icon'>
                                                    <input type='text' class="form-control timepicker"
                                                        placeholder="Select Time">
                                                    <span class="cus-icon"><i class="feather-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a href="javascript:;" class="add-text add-day"><i class="feather-plus-circle"></i> Add
                                        Hours</a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h6>Sunday</h6>
                                <h6 class="mb-sm-0">Today Closed</h6>
                            </div>
                            <div class="col-sm-6">
                                <div class="status-toggle sml-status d-flex justify-content-sm-end align-items-center">
                                    <input type="checkbox" id="status_8" class="check">
                                    <label for="status_8" class="checktoggle">checkbox</label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /Availability Days -->

        </div>
    </div>

    @component('components.model-popup')
    @endcomponent
@endsection
