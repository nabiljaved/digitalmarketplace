<?php $page = 'how-it-works'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            How It Works
        @endslot
        @slot('li_1')
            Home
        @endslot
        @slot('li_2')
            How It Works
        @endslot
    @endcomponent

    <div class="content">
        <div class="container">

            <!-- How it works-->
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="work-wrap work-wrap-acc">
                        <span>01</span>
                        <h1>Create An Account</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco ut
                            aliquip ex ea commodo consequat. </p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium illo inventore
                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-img">
                        <img src="{{ URL::asset('/assets/img/work-01.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-4  order-last order-md-first">
                    <div class="work-img">
                        <img src="{{ URL::asset('/assets/img/work-02.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="work-wrap work-wrap-post">
                        <span>02</span>
                        <h1>Post An Ad</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco ut
                            aliquip ex ea commodo consequat. </p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium illo inventore
                            veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="work-wrap work-wrap-earning mb-0">
                        <span>03</span>
                        <h1>Start Earning</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco ut
                            aliquip ex ea commodo consequat. </p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium illo inventore
                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-img mb-0">
                        <img src="{{ URL::asset('/assets/img/work-03.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <!-- /How it works -->

        </div>
    </div>
@endsection
