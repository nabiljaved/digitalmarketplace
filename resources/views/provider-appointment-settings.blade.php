<?php $page = 'provider-appointment-settings'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="row">

                <!-- Appointment Settings -->
                <div class="col-md-8 mx-auto">
                    <div class="appointment-sec">
                        <div class="login-back manage-log">
                            <a href="{{ url('provider-dashboard') }}"><i class="feather-arrow-left"></i> Back</a>
                        </div>
                        <div class="coupon-title">
                            <h4>Appointment Settings</h4>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Refresh Cache Files When Database Changes</label>
                            <div class="form-checkbox">
                                <label class="custom_check">
                                    <input type="checkbox" name="rememberme" class="rememberme">
                                    <span class="checkmark"></span> Hourly
                                </label>
                                <label class="custom_check">
                                    <input type="checkbox" name="rememberme" class="rememberme">
                                    <span class="checkmark"></span> Fixed
                                </label>
                                <label class="custom_check">
                                    <input type="checkbox" name="rememberme" class="rememberme">
                                    <span class="checkmark"></span> Slot
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label d-block">Booking Open Before <span class="label-text float-end">(in
                                    Days)</span></label>
                            <select class="select">
                                <option>Enter Booking Open</option>
                                <option>2</option>
                                <option>5</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Appointment Reminder</label>
                            <div class="remaind-select">
                                <div class="bank-selection">
                                    <input type="radio" value="sms" id="email" name="attachment" checked="">
                                    <label for="email">
                                        <i class="feather-mail"></i> Email
                                    </label>
                                </div>
                                <div class="bank-selection">
                                    <input type="radio" value="sms" id="sms" name="attachment" checked="">
                                    <label for="sms">
                                        <img src="{{ URL::asset('/assets/img/icons/msg-icon.svg') }}" alt=""> SMS
                                    </label>
                                </div>
                            </div>
                        </div>
                        <h6 class="user-title">Slot Setting</h6>
                        <div class="form-group">
                            <label class="col-form-label">Appointment Intervel</label>
                            <div class="form-duration">
                                <input type="text" class="form-control" placeholder="Enter Duration">
                                <span class="mins">Mins</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label d-block">Time for Each Slot <span
                                    class="label-text float-end">Mins</span></label>
                            <div class="d-flex slot-flex">
                                <input type="text" class="form-control w-100 me-2"
                                    placeholder="Enter Appointment Interval">
                                <select class="select">
                                    <option>Mins</option>
                                    <option>Hours</option>
                                </select>
                            </div>
                        </div>
                        <div class="acc-submit">
                            <a href="javascript:;" class="btn btn-secondary">Cancel</a>
                            <a href="javascript:;" class="btn btn-primary">Save</a>
                        </div>
                    </div>
                </div>
                <!-- /Appointment Settings -->

            </div>

        </div>
    </div>

    @component('components.model-popup')
    @endcomponent
@endsection
