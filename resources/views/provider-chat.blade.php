<?php $page = 'provider-chat'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="row chat-window">

                @component('components.chatuserlist')
                @endcomponent

                @component('components.chatcontent')
                @endcomponent

                @component('components.chatprofile')
                @endcomponent

            </div>

        </div>
    </div>

    @component('components.model-popup')
    @endcomponent
@endsection
