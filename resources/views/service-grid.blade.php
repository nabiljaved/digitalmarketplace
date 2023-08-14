<?php $page = 'service-grid'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.backgroundimage')
    @endcomponent
    @component('components.breadcrumb')
        @slot('title')
            Service Grid
        @endslot
        @slot('li_1')
            Home
        @endslot
        @slot('li_2')
            Service Grid
        @endslot
    @endcomponent

    <div class="content">
        <div class="container">

            <div class="row">

                @component('components.filter',['categories' => $categories])
                @endcomponent

                <!-- Service -->
                <div class="col-lg-9 col-sm-12">
                    <div class="row sorting-div">
                        <div class="col-lg-4 col-sm-12 ">
                            <div class="count-search">
                                <h6>Found 12 Services</h6>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-12 d-flex justify-content-end ">
                            <div class="sortbyset">
                                <div class="sorting-select">
                                    <select class="form-control select">
                                        <option>Price Low to High</option>
                                        <option>Price High to Low</option>
                                    </select>
                                </div>
                            </div>
                            <div class="grid-listview">
                                <ul>
                                    <li>
                                        <a href="{{ url('service-grid') }}" class="active">
                                            <i class="feather-grid"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('service-list') }}">
                                            <i class="feather-list"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                    
                    @foreach ($services as $service)

                    @php
                        $category = $categories->where('id', $service->service_category)->first();
                    @endphp

                    @php
                      $selectedImagesArray = json_decode($service->selected_images);
                    @endphp

                            <!-- Service List -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-widget servicecontent">
                                <div class="service-img">
                                    <a href="{{ route('service-details', ['slug' => $service->service_slug ]) }}">
                                        <img class="img-fluid serv-img" alt="Service Image"
                                            src="{{ asset('uploads/services/' . $selectedImagesArray[0]) }}">
                                    </a>
                                    <div class="fav-item">
                                        <a href="{{ url('categories') }}"><span class="item-cat">{{ $category->category_name }}</span></a>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                    <div class="item-info">
                                        <a href="{{ url('providers') }}"><span class="item-img"><img
                                                    src="{{ URL::asset('/assets/img/profiles/avatar-01.jpg') }}"
                                                    class="avatar" alt=""></span></a>
                                    </div>
                                </div>
                                <div class="service-content">
                                    <h3 class="title">
                                        <a href="{{ route('service-details', ['slug' => $service->service_slug ]) }}">{{ $service->service_title }}</a>
                                    </h3>
                                    <p><i class="feather-map-pin"></i>Digital Market, UAE<span class="rate"><i
                                                class="fas fa-star filled"></i>4.9</span></p>
                                    <div class="serv-info">
                                        <h6>AED {{ $service->service_price }}</h6>
                                        <a href="{{ route('service-details', ['slug' => $service->service_slug ]) }}" class="btn btn-book">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                    </div>

                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="blog-pagination rev-page">
                                @component('components.pagination')
                                @endcomponent
                            </div>
                        </div>
                    </div>
                    <!-- /Pagination -->

                </div>
                <!-- /Service -->

            </div>
        </div>
    </div>

@endsection
