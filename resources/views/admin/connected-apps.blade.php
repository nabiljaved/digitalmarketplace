<?php $page = 'connected-apps'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">

        @component('layout.partials.settingssidemenu')
        @endcomponent

        <div class="content w-100">

            @component('admin.components.settingspageheader')
                @slot('titleset')
                    Connected Apps
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-12">
                    <div class="connectetapps">
                        <div class="connectetappsimg">
                            <div class="connectet-img">
                                <img src="{{ URL::asset('/admin_assets/img/icons/google.svg') }}" alt="img">
                            </div>
                            <div class="connectet-content">
                                <h3>Google Calendar</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur </p>
                            </div>
                        </div>
                        <div class="connectetappscontent">
                            <h6 class="success-labels">Connect</h6>
                            <div class="active-switch">
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span class="sliders round"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
