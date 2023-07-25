<?php $page = 'provider-addons'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            @component('components.widgettitle')
            @endcomponent

            <!-- Subscription -->
            <div class="row provider-price">
                <div class="col-md-12">
                    <div class="choose-title">
                        <h6 class="me-0">Addons</h6>
                    </div>
                </div>

                <div class="col-md-12">
                    <!-- Addon List -->
                    <div class="addon-box">
                        <div class="addon-name">
                            <label class="custom_check">
                                <input type="checkbox" name="rememberme" class="rememberme">
                                <span class="checkmark"></span>
                            </label>
                            <div>
                                <h6>Services</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                            </div>
                        </div>
                        <div class="addon-info">
                            <ul>
                                <li>
                                    <select class="select">
                                        <option>10 Services</option>
                                        <option>8 Services</option>
                                        <option>6 Services</option>
                                    </select>
                                </li>
                                <li>
                                    <h6>$20.00</h6>
                                </li>
                                <li>
                                    <a href="{{ url('add-subscription') }}" class="btn btn-primary">Buy</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="addon-box">
                        <div class="addon-name">
                            <label class="custom_check">
                                <input type="checkbox" name="rememberme" class="rememberme">
                                <span class="checkmark"></span>
                            </label>
                            <div>
                                <h6>Appointments</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                            </div>
                        </div>
                        <div class="addon-info">
                            <ul>
                                <li>
                                    <select class="select">
                                        <option>10 Appointments</option>
                                        <option>8 Appointments</option>
                                        <option>6 Appointments</option>
                                    </select>
                                </li>
                                <li>
                                    <h6>$20.00</h6>
                                </li>
                                <li>
                                    <a href="{{ url('add-subscription') }}" class="btn btn-primary">Buy</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="addon-box">
                        <div class="addon-name">
                            <label class="custom_check">
                                <input type="checkbox" name="rememberme" class="rememberme">
                                <span class="checkmark"></span>
                            </label>
                            <div>
                                <h6>Staffs</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                            </div>
                        </div>
                        <div class="addon-info">
                            <ul>
                                <li>
                                    <select class="select">
                                        <option>10 Users</option>
                                        <option>8 Users</option>
                                        <option>6 Users</option>
                                    </select>
                                </li>
                                <li>
                                    <h6>$20.00</h6>
                                </li>
                                <li>
                                    <a href="{{ url('add-subscription') }}" class="btn btn-primary">Buy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Addon List -->

                </div>
            </div>
            <!-- /Subscription -->

        </div>
    </div>

    @component('components.model-popup')
    @endcomponent
@endsection
