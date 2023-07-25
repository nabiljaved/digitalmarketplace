<?php $page = 'provider-holiday'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            @component('components.pageheader')
                @slot('title')
                    Holidays & Leave
                @endslot
            @endcomponent

            <!-- calendar -->
            <div class="row">
                <div class="col-md-12">
                    <div id="calendar"></div>
                </div>
            </div>
            <!-- /calendar -->

        </div>
    </div>

    @component('components.model-popup')
    @endcomponent
@endsection
