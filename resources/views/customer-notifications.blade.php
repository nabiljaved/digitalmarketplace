<?php $page = 'customer-notifications'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">

                @component('components.customermenu')
                @endcomponent

                <!-- Notifications -->
                <div class="col-md-8 col-lg-9">
                    <div class="widget-title">
                        <h4>Notifications</h4>
                    </div>
                    <div class="notification-table">

                        <!-- General Notification -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-thead">
                                    <tr>
                                        <th>General Notifications</th>
                                        <th>Push</th>
                                        <th>Email</th>
                                        <th>SMS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="notify-item">
                                                <h6>General Notifications Newsletter</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle status-tog">
                                                <input type="checkbox" id="status_1" class="check" checked>
                                                <label for="status_1" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle status-tog">
                                                <input type="checkbox" id="status_2" class="check" checked>
                                                <label for="status_2" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle status-tog">
                                                <input type="checkbox" id="status_3" class="check" checked>
                                                <label for="status_3" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="notify-item">
                                                <h6>Daily Updates</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle status-tog">
                                                <input type="checkbox" id="status_4" class="check" checked>
                                                <label for="status_4" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle status-tog">
                                                <input type="checkbox" id="status_5" class="check" checked>
                                                <label for="status_5" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle status-tog">
                                                <input type="checkbox" id="status_6" class="check">
                                                <label for="status_6" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /General Notification -->

                        <!-- Booking Notification -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-thead">
                                    <tr>
                                        <th>Booking</th>
                                        <th>Push</th>
                                        <th>Email</th>
                                        <th>SMS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="notify-item">
                                                <h6>Booking Request</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle status-tog">
                                                <input type="checkbox" id="status_7" class="check">
                                                <label for="status_7" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle status-tog">
                                                <input type="checkbox" id="status_8" class="check" checked>
                                                <label for="status_8" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle status-tog">
                                                <input type="checkbox" id="status_9" class="check" checked>
                                                <label for="status_9" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="notify-item">
                                                <h6>Booking Status</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle status-tog">
                                                <input type="checkbox" id="status_10" class="check" checked>
                                                <label for="status_10" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle status-tog">
                                                <input type="checkbox" id="status_11" class="check" checked>
                                                <label for="status_11" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle status-tog">
                                                <input type="checkbox" id="status_12" class="check">
                                                <label for="status_12" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="notify-item">
                                                <h6>Refund Request</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle status-tog">
                                                <input type="checkbox" id="status_13" class="check">
                                                <label for="status_13" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle status-tog">
                                                <input type="checkbox" id="status_14" class="check" checked>
                                                <label for="status_14" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="status-toggle status-tog">
                                                <input type="checkbox" id="status_15" class="check">
                                                <label for="status_15" class="checktoggle">checkbox</label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /Booking Notification -->

                    </div>

                </div>
                <!-- /Notifications -->

            </div>

        </div>
    </div>
    @component('components.model-popup')
    @endcomponent
@endsection
