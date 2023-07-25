<?php $page = 'customer-chat'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="content">
        <div class="container">

            <div class="customer-chat">
                <div class="row chat-window">

                    <div class="login-back mb-3">
                        <a href="{{ url('customer-dashboard') }}"> <i class="feather-arrow-left"></i> Back</a>
                    </div>

                    @component('components.chatuserlist')
                    @endcomponent

                    @component('components.chatcontent')
                    @endcomponent

                    @component('components.chatprofile')
                    @endcomponent

                </div>
            </div>

        </div>
    </div>
@endsection
