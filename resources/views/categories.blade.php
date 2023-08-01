<?php $page = 'categories'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.backgroundimage')
    @endcomponent
    @component('components.breadcrumb')
        @slot('title')
            Categories
        @endslot
        @slot('li_1')
            Home
        @endslot
        @slot('li_2')
            Categories
        @endslot
    @endcomponent
    <div class="content">
        <div class="container">
            <div class="row">

               

                <!-- Category List -->
                @foreach ($services as $service)

                @php
                    $selectedImagesArray = json_decode($service->selected_images);
                @endphp

               
                    <div class="col-md-6 col-lg-4 d-flex" >
                        <div class="category-card flex-fill">
                            <div class="category-img">
                                <a href="{{ route('service-details', ['slug' => $service->service_slug ]) }}">
                                    <img src="{{ asset('uploads/services/' . $selectedImagesArray[0]) }}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="category-info">
                                <div class="category-name">
                                    <span class="category-icon">
                                        <img src="{{ URL::asset('/assets/img/logo.png') }}" alt="" style="max-height:1rem">
                                    </span>
                                    <h6><a href="{{ route('service-details', ['slug' => $service->service_slug ]) }}">{{ $service->service_title }}</a></h6>
                                </div>
                            </div>
                            <div style="display:flex; justify-content:center; margin-bottom:8px">
                            <a href="{{ route('service-details', ['slug' => $service->service_slug ]) }}" class="btn btn-primary">Book Now</a>
                            </div>

                        </div>
                    </div>
                @endforeach
                
              
                <!-- /Category List -->

            </div>
        </div>
    </div>
@endsection
