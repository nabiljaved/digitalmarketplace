<?php $page = 'provider-edit-service'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-10 mx-auto">

                        <div class="login-back">
                            <a href="{{ url('/') }}"><i class="feather-arrow-left"></i> Back</a>
                        </div>

                        <!-- Service List -->
                        <ul id="progressbar">
                            <li class="active">
                                <div class="multi-step-info">
                                    <h6>Service Information</h6>
                                    <p>Lorem ipsum dolor sit</p>
                                </div>
                                <div class="multi-step-icon">
                                    <span><i class="feather-clipboard"></i></span>
                                </div>
                            </li>
                            <li>
                                <div class="multi-step-info">
                                    <h6>Booking</h6>
                                    <p>Lorem ipsum dolor sit</p>
                                </div>
                                <div class="multi-step-icon">
                                    <span><i class="feather-smartphone"></i></span>
                                </div>
                            </li>
                            <li>
                                <div class="multi-step-info">
                                    <h6>Location</h6>
                                    <p>Lorem ipsum dolor sit</p>
                                </div>
                                <div class="multi-step-icon">
                                    <span><i class="feather-map-pin"></i></span>
                                </div>
                            </li>
                            <li>
                                <div class="multi-step-info">
                                    <h6>Gallery</h6>
                                    <p>Lorem ipsum dolor sit</p>
                                </div>
                                <div class="multi-step-icon">
                                    <span><i class="feather-image"></i></span>
                                </div>
                            </li>
                        </ul>
                        <!-- /Service List -->

                        <div class="row">
                            <div class="col-lg-12 mx-auto">

                                <!-- Service Information -->
                                <fieldset id="first-field">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="sub-title">
                                                <h6>Service Information</h6>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Service Title</label>
                                                <input type="text" class="form-control" placeholder="Enter Services Name"
                                                    value="Car Repair Services">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Service Category</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Services Category" value="Car Wash">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Sub Category</label>
                                                <input type="text" class="form-control" placeholder="Enter Sub Category"
                                                    value="other">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label d-block">Price<span
                                                        class="brief-bio float-end">Set 0 for free</span></label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Services Category" value="35">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="col-form-label d-block">Duration <span
                                                        class="brief-bio float-end">Include Tax</span></label>
                                                <div class="form-duration">
                                                    <input type="text" class="form-control" placeholder="Enter Duration">
                                                    <span class="mins">Mins</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Services Details</label>
                                                <textarea class="form-control ck-editor">Car wash is a facility used to clean the exterior and, in some cases, the interior of motor vehicles.</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="sub-title">
                                                <h6>Additional Service</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="status-toggle sml-status float-sm-end mb-3">
                                                <input type="checkbox" id="status_1" class="check" checked="">
                                                <label for="status_1" class="checktoggle">checkbox</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="addservice-info">
                                        <div class="row service-cont">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="col-form-label">Item</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter  Service Item">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="col-form-label">Price</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Services Price">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="col-form-label">Duration</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Service Duration">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript:;" class="add-text add-extra"><i class="feather-plus-circle"></i> Add
                                        Additional Service</a>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="field-btns">
                                                <button class="btn btn-primary next_btn" type="button">Next <i
                                                        class="feather-arrow-right-circle"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <!-- /Service Information -->

                                <!-- Booking -->
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="sub-title">
                                                <h6>Booking</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-form-label d-block">Choose Timing Type</label>
                                                <label class="custom_radio d-inline-block me-3">
                                                    <input type="radio" name="time" checked="" id="time-slot">
                                                    <span class="checkmark"></span> Time Slot
                                                </label>
                                                <label class="custom_radio d-inline-block me-3">
                                                    <input type="radio" name="time" id="time-picker">
                                                    <span class="checkmark"></span> Time Picker
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">

                                            <!-- Timeslot -->
                                            <div class="timeslot-sec">
                                                <!-- Schedule Nav -->
                                                <label class="col-form-label">Configure Time Slots</label>
                                                <div class="schedule-nav">
                                                    <ul class="nav">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-bs-toggle="tab"
                                                                href="#all_days">All Days</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                href="#slot_monday">Monday</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                href="#slot_tuesday">Tuesday</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                href="#slot_wednesday">Wednesday</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                href="#slot_thursday">Thursday</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                href="#slot_friday">Friday</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                href="#slot_saturday">Saturday</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                href="#slot_sunday">Sunday</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /Schedule Nav -->

                                                <div class="tab-content pt-0">
                                                    <div class="tab-pane active" id="all_days">
                                                        <div class="hours-info">
                                                            <div class="row hours-cont">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">From</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">To</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">Slots</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Enter Slot">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="javascript:;" class="add-text add-hours"><i
                                                                class="feather-plus-circle"></i> Add Hours</a>
                                                    </div>
                                                    <div class="tab-pane fade" id="slot_monday">
                                                        <div class="hours-info">
                                                            <div class="row hours-cont">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">From</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">To</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">Slots</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Enter Slot">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="javascript:;" class="add-text add-hours"><i
                                                                class="feather-plus-circle"></i> Add Hours</a>
                                                    </div>
                                                    <div class="tab-pane fade" id="slot_tuesday">
                                                        <div class="hours-info">
                                                            <div class="row hours-cont">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">From</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">To</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">Slots</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Enter Slot">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="javascript:;" class="add-text add-hours"><i
                                                                class="feather-plus-circle"></i> Add Hours</a>
                                                    </div>
                                                    <div class="tab-pane fade" id="slot_wednesday">
                                                        <div class="hours-info">
                                                            <div class="row hours-cont">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">From</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">To</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">Slots</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Enter Slot">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="javascript:;" class="add-text add-hours"><i
                                                                class="feather-plus-circle"></i> Add Hours</a>
                                                    </div>
                                                    <div class="tab-pane fade" id="slot_thursday">
                                                        <div class="hours-info">
                                                            <div class="row hours-cont">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">From</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">To</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">Slots</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Enter Slot">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="javascript:;" class="add-text add-hours"><i
                                                                class="feather-plus-circle"></i> Add Hours</a>
                                                    </div>
                                                    <div class="tab-pane fade" id="slot_friday">
                                                        <div class="hours-info">
                                                            <div class="row hours-cont">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">From</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">To</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">Slots</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Enter Slot">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="javascript:;" class="add-text add-hours"><i
                                                                class="feather-plus-circle"></i> Add Hours</a>
                                                    </div>
                                                    <div class="tab-pane fade" id="slot_saturday">
                                                        <div class="hours-info">
                                                            <div class="row hours-cont">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">From</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">To</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">Slots</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Enter Slot">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="javascript:;" class="add-text add-hours"><i
                                                                class="feather-plus-circle"></i> Add Hours</a>
                                                    </div>
                                                    <div class="tab-pane fade" id="slot_sunday">
                                                        <div class="hours-info">
                                                            <div class="row hours-cont">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">From</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">To</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">Slots</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="Enter Slot">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="javascript:;" class="add-text add-hours"><i
                                                                class="feather-plus-circle"></i> Add Hours</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Timeslot -->

                                            <!-- Timepicker -->
                                            <div class="timepicker-sec">
                                                <!-- Schedule Nav -->
                                                <div class="schedule-nav">
                                                    <ul class="nav">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-bs-toggle="tab"
                                                                href="#all_day">All Days</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                href="#slots_monday">Monday</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                href="#slots_tuesday">Tuesday</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                href="#slots_wednesday">Wednesday</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                href="#slots_thursday">Thursday</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                href="#slots_friday">Friday</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                href="#slots_saturday">Saturday</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab"
                                                                href="#slots_sunday">Sunday</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /Schedule Nav -->

                                                <div class="tab-content pt-0">
                                                    <div class="tab-pane active" id="all_day">
                                                        <div class="hrs-info">
                                                            <div class="row hrs-cont">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">From</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">To</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="javascript:;" class="add-text add-hrs"><i
                                                                class="feather-plus-circle"></i> Add Hours</a>
                                                    </div>
                                                    <div class="tab-pane fade" id="slots_monday">
                                                        <div class="hrs-info">
                                                            <div class="row hrs-cont">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">From</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">To</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="javascript:;" class="add-text add-hrs"><i
                                                                class="feather-plus-circle"></i> Add Hours</a>
                                                    </div>
                                                    <div class="tab-pane fade" id="slots_tuesday">
                                                        <div class="hrs-info">
                                                            <div class="row hrs-cont">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">From</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">To</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="javascript:;" class="add-text add-hrs"><i
                                                                class="feather-plus-circle"></i> Add Hours</a>
                                                    </div>
                                                    <div class="tab-pane fade" id="slots_wednesday">
                                                        <div class="hrs-info">
                                                            <div class="row hrs-cont">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">From</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">To</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="javascript:;" class="add-text add-hrs"><i
                                                                class="feather-plus-circle"></i> Add Hours</a>
                                                    </div>
                                                    <div class="tab-pane fade" id="slots_thursday">
                                                        <div class="hrs-info">
                                                            <div class="row hrs-cont">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">From</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">To</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="javascript:;" class="add-text add-hrs"><i
                                                                class="feather-plus-circle"></i> Add Hours</a>
                                                    </div>
                                                    <div class="tab-pane fade" id="slots_friday">
                                                        <div class="hrs-info">
                                                            <div class="row hrs-cont">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">From</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">To</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="javascript:;" class="add-text add-hrs"><i
                                                                class="feather-plus-circle"></i> Add Hours</a>
                                                    </div>
                                                    <div class="tab-pane fade" id="slots_saturday">
                                                        <div class="hrs-info">
                                                            <div class="row hrs-cont">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">From</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">To</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="javascript:;" class="add-text add-hrs"><i
                                                                class="feather-plus-circle"></i> Add Hours</a>
                                                    </div>
                                                    <div class="tab-pane fade" id="slots_sunday">
                                                        <div class="hrs-info">
                                                            <div class="row hrs-cont">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">From</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label class="col-form-label">To</label>
                                                                        <div class='form-icon'>
                                                                            <input type='text'
                                                                                class="form-control timepicker"
                                                                                placeholder="Select Time">
                                                                            <span class="cus-icon"><i
                                                                                    class="feather-clock"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="javascript:;" class="add-text add-hrs"><i
                                                                class="feather-plus-circle"></i> Add Hours</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Timepicker -->

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="field-btns">
                                                <button class="btn btn-primary next_btn" type="button">Next <i
                                                        class="feather-arrow-right-circle"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <!-- /Booking -->

                                <!-- Location -->
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="sub-title">
                                                <h6>Additional Service</h6>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label">Location</label>
                                                <div class="map-grid">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509170.989457427!2d-123.80081967108484!3d37.192957227641294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sin!4v1669181581381!5m2!1sen!2sin"
                                                        allowfullscreen="" aria-hidden="false" tabindex="0"
                                                        class="contact-map"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Address</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Your Address" value="Maryland City, MD, USA">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="col-form-label">Country</label>
                                                <input type="text" class="form-control" placeholder="Enter Country"
                                                    value="USA">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="col-form-label">State</label>
                                                <input type="text" class="form-control" placeholder="Enter Your State"
                                                    value="MD">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="col-form-label">City</label>
                                                <input type="text" class="form-control" placeholder="Enter Your City"
                                                    value="Maryland">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="col-form-label">Pincode</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Your Pincode">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Google Maps Place ID</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Maps Place ID">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Latitude</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Latitude Number">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Longitude</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Longitude Number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="field-btns">
                                                <button class="btn btn-primary next_btn" type="button">Next <i
                                                        class="feather-arrow-right-circle"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <!-- /Location -->

                                <!-- Gallery -->
                                <fieldset>
                                    <div class="sub-title">
                                        <h6>Gallery</h6>
                                    </div>
                                    <div class="file-upload">
                                        <img src="{{ URL::asset('/assets/img/icons/upload-icon.svg') }}" alt="">
                                        <h6>Drag & drop files or <span>Browse</span></h6>
                                        <p>Supported formates: JPEG, PNG, GIF, MP4</p>
                                        <input type="file" accept="video/image">
                                    </div>
                                    <div class="file-preview">
                                        <ul>
                                            <li>
                                                <h6>Select Default Image:</h6>
                                            </li>
                                            <li>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="rememberme" class="rememberme" checked>
                                                    <span class="checkmark"></span>
                                                </label>
                                                <div class="img-preview">
                                                    <img src="{{ URL::asset('/assets/img/services/service-01.jpg') }}"
                                                        alt="">
                                                    <a href="javascript:;"><i class="feather-x-circle"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="rememberme" class="rememberme">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <div class="img-preview">
                                                    <img src="{{ URL::asset('/assets/img/services/service-02.jpg') }}"
                                                        alt="">
                                                    <a href="javascript:;"><i class="feather-x-circle"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="rememberme" class="rememberme">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <div class="img-preview">
                                                    <img src="{{ URL::asset('/assets/img/services/service-03.jpg') }}"
                                                        alt="">
                                                    <a href="javascript:;"><i class="feather-x-circle"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <label class="custom_check">
                                                    <input type="checkbox" name="rememberme" class="rememberme">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <div class="img-preview">
                                                    <img src="{{ URL::asset('/assets/img/services/service-04.jpg') }}"
                                                        alt="">
                                                    <a href="javascript:;"><i class="feather-x-circle"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Embed Video URL</label>
                                        <input type="text" class="form-control" placeholder="Ex: https//youtube.com">
                                    </div>
                                    <div class="field-btns">
                                        <a href="{{ url('provider-services') }}" class="btn btn-primary next_btn">Done</a>
                                    </div>
                                </fieldset>
                                <!-- /Gallery -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
