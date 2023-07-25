<?php $page = 'inactive-blog'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    All Blog
                @endslot
            @endcomponent

            @component('admin.components.blogtabsets')
            @endcomponent
            
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="blog grid-blog">
                        <div class="blog-image">
                            <a href="{{ url('admin/view-service') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/admin_assets/img/services/service-01.jpg') }}">
                            </a>
                            <div class="fav-item">
                                <div class="item-info">
                                    <a href="{{ url('admin/categories') }}"><span>Construction</span></a>
                                </div>
                                <span class="serv-rating"><i class="fa-solid fa-star"></i> 4.5</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-widget-image">
                                <a href="javascript:void(0);" class="table-profileimage">
                                    <img src="{{ URL::asset('/admin_assets/img/customer/user-01.jpg') }}" class="me-2"
                                        alt="img">
                                    <span>John</span>
                                </a>
                                <h6><img src="{{ URL::asset('/admin_assets/img/icons/calendar.svg') }}" alt="img">28
                                    Sep <script>document.write(new Date().getFullYear())</script></h6>
                            </div>
                            <h3 class="title">
                                <a href="{{ url('admin/view-service') }}">How To Find The Right Painting Service For
                                    Your Home?</a>
                            </h3>
                            <p>Sed perspiciatis unde omnis natus error laudantium, totam rem aperiam...</p>
                            <div class="blog-info">
                                <div class="action-search">
                                    <a href="{{ url('admin/edit-blog') }}" class="serv-edit"><i class="fe fe-edit"></i>
                                        Edit</a>
                                    <a href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#delete-item"><i class="fe fe-trash-2"></i> Delete</a>
                                </div>
                                <span><i class="fe fe-alert-circle"></i> Active</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="blog grid-blog">
                        <div class="blog-image">
                            <a href="{{ url('admin/view-service') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/admin_assets/img/services/service-04.jpg') }}">
                            </a>
                            <div class="fav-item">
                                <div class="item-info">
                                    <a href="{{ url('admin/categories') }}"><span>Car Wash</span></a>
                                </div>
                                <span class="serv-rating"><i class="fa-solid fa-star"></i> 4.9</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-widget-image">
                                <a href="javascript:void(0);" class="table-profileimage">
                                    <img src="{{ URL::asset('/admin_assets/img/customer/user-06.jpg') }}" class="me-2"
                                        alt="img">
                                    <span>Robert</span>
                                </a>
                                <h6><img src="{{ URL::asset('/admin_assets/img/icons/calendar.svg') }}" alt="img">28
                                    Sep <script>document.write(new Date().getFullYear())</script></h6>
                            </div>
                            <h3 class="title">
                                <a href="{{ url('admin/view-service') }}">How To Find The Right Painting Service For
                                    Your Home?</a>
                            </h3>
                            <p>Sed perspiciatis unde omnis natus error laudantium, totam rem aperiam...</p>
                            <div class="blog-info">
                                <div class="action-search">
                                    <a href="{{ url('admin/edit-blog') }}" class="serv-edit"><i class="fe fe-edit"></i>
                                        Edit</a>
                                    <a href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#delete-item"><i class="fe fe-trash-2"></i> Delete</a>
                                </div>
                                <span><i class="fe fe-alert-circle"></i> Active</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="blog grid-blog">
                        <div class="blog-image">
                            <a href="{{ url('admin/view-service') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/admin_assets/img/services/service-03.jpg') }}">
                            </a>
                            <div class="fav-item">
                                <div class="item-info">
                                    <a href="{{ url('admin/categories') }}"><span>Electrical</span></a>
                                </div>
                                <span class="serv-rating"><i class="fa-solid fa-star"></i> 4.0</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-widget-image">
                                <a href="javascript:void(0);" class="table-profileimage">
                                    <img src="{{ URL::asset('/admin_assets/img/customer/user-07.jpg') }}" class="me-2"
                                        alt="img">
                                    <span>James</span>
                                </a>
                                <h6><img src="{{ URL::asset('/admin_assets/img/icons/calendar.svg') }}" alt="img">28
                                    Sep <script>document.write(new Date().getFullYear())</script></h6>
                            </div>
                            <h3 class="title">
                                <a href="{{ url('admin/view-service') }}">How To Find The Right Painting Service For
                                    Your Home?</a>
                            </h3>
                            <p>Sed perspiciatis unde omnis natus error laudantium, totam rem aperiam...</p>
                            <div class="blog-info">
                                <div class="action-search">
                                    <a href="{{ url('admin/edit-blog') }}" class="serv-edit"><i class="fe fe-edit"></i>
                                        Edit</a>
                                    <a href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#delete-item"><i class="fe fe-trash-2"></i> Delete</a>
                                </div>
                                <span><i class="fe fe-alert-circle"></i> Active</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="blog grid-blog">
                        <div class="blog-image">
                            <a href="{{ url('admin/view-service') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/admin_assets/img/services/service-05.jpg') }}">
                            </a>
                            <div class="fav-item">
                                <div class="item-info">
                                    <a href="{{ url('admin/categories') }}"><span>Cleaning</span></a>
                                </div>
                                <span class="serv-rating"><i class="fa-solid fa-star"></i> 4.0</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-widget-image">
                                <a href="javascript:void(0);" class="table-profileimage">
                                    <img src="{{ URL::asset('/admin_assets/img/customer/user-01.jpg') }}" class="me-2"
                                        alt="img">
                                    <span>Phill</span>
                                </a>
                                <h6><img src="{{ URL::asset('/admin_assets/img/icons/calendar.svg') }}" alt="img">12
                                    Sep <script>document.write(new Date().getFullYear())</script></h6>
                            </div>
                            <h3 class="title">
                                <a href="{{ url('admin/view-service') }}">How To Find The Right Painting Service For
                                    Your Home?</a>
                            </h3>
                            <p>Sed perspiciatis unde omnis natus error laudantium, totam rem aperiam...</p>
                            <div class="blog-info">
                                <div class="action-search">
                                    <a href="{{ url('admin/edit-blog') }}" class="serv-edit"><i class="fe fe-edit"></i>
                                        Edit</a>
                                    <a href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#delete-item"><i class="fe fe-trash-2"></i> Delete</a>
                                </div>
                                <span><i class="fe fe-alert-circle"></i> Active</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="blog grid-blog">
                        <div class="blog-image">
                            <a href="{{ url('admin/view-service') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/admin_assets/img/services/service-07.jpg') }}">
                            </a>
                            <div class="fav-item">
                                <div class="item-info">
                                    <a href="{{ url('admin/categories') }}"><span>Interior</span></a>
                                </div>
                                <span class="serv-rating"><i class="fa-solid fa-star"></i> 4.0</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-widget-image">
                                <a href="javascript:void(0);" class="table-profileimage">
                                    <img src="{{ URL::asset('/admin_assets/img/customer/user-05.jpg') }}" class="me-2"
                                        alt="img">
                                    <span>Pricilla</span>
                                </a>
                                <h6><img src="{{ URL::asset('/admin_assets/img/icons/calendar.svg') }}" alt="img">23
                                    Sep <script>document.write(new Date().getFullYear())</script></h6>
                            </div>
                            <h3 class="title">
                                <a href="{{ url('admin/view-service') }}">How To Find The Right Painting Service For
                                    Your Home?</a>
                            </h3>
                            <p>Sed perspiciatis unde omnis natus error laudantium, totam rem aperiam...</p>
                            <div class="blog-info">
                                <div class="action-search">
                                    <a href="{{ url('admin/edit-blog') }}" class="serv-edit"><i class="fe fe-edit"></i>
                                        Edit</a>
                                    <a href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#delete-item"><i class="fe fe-trash-2"></i> Delete</a>
                                </div>
                                <span><i class="fe fe-alert-circle"></i> Active</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="blog grid-blog">
                        <div class="blog-image">
                            <a href="{{ url('admin/view-service') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/admin_assets/img/services/service-11.jpg') }}">
                            </a>
                            <div class="fav-item">
                                <div class="item-info">
                                    <a href="{{ url('admin/categories') }}"><span>Carpentry</span></a>
                                </div>
                                <span class="serv-rating"><i class="fa-solid fa-star"></i> 5.0</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-widget-image">
                                <a href="javascript:void(0);" class="table-profileimage">
                                    <img src="{{ URL::asset('/admin_assets/img/customer/user-03.jpg') }}" class="me-2"
                                        alt="img">
                                    <span>Sharon</span>
                                </a>
                                <h6><img src="{{ URL::asset('/admin_assets/img/icons/calendar.svg') }}" alt="img">14
                                    Sep <script>document.write(new Date().getFullYear())</script></h6>
                            </div>
                            <h3 class="title">
                                <a href="{{ url('admin/view-service') }}">How To Find The Right Painting Service For
                                    Your Home?</a>
                            </h3>
                            <p>Sed perspiciatis unde omnis natus error laudantium, totam rem aperiam...</p>
                            <div class="blog-info">
                                <div class="action-search">
                                    <a href="{{ url('admin/edit-blog') }}" class="serv-edit"><i class="fe fe-edit"></i>
                                        Edit</a>
                                    <a href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#delete-item"><i class="fe fe-trash-2"></i> Delete</a>
                                </div>
                                <span><i class="fe fe-alert-circle"></i> Active</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="blog grid-blog">
                        <div class="blog-image">
                            <a href="{{ url('admin/view-service') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/admin_assets/img/services/service-06.jpg') }}">
                            </a>
                            <div class="fav-item">
                                <div class="item-info">
                                    <a href="{{ url('admin/categories') }}"><span>Computer</span></a>
                                </div>
                                <span class="serv-rating"><i class="fa-solid fa-star"></i> 4.5</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-widget-image">
                                <a href="javascript:void(0);" class="table-profileimage">
                                    <img src="{{ URL::asset('/admin_assets/img/customer/user-05.jpg') }}" class="me-2"
                                        alt="img">
                                    <span>John Doe</span>
                                </a>
                                <h6><img src="{{ URL::asset('/admin_assets/img/icons/calendar.svg') }}" alt="img">04
                                    Sep <script>document.write(new Date().getFullYear())</script></h6>
                            </div>
                            <h3 class="title">
                                <a href="{{ url('admin/view-service') }}">How To Find The Right Painting Service For
                                    Your Home?</a>
                            </h3>
                            <p>Sed perspiciatis unde omnis natus error laudantium, totam rem aperiam...</p>
                            <div class="blog-info">
                                <div class="action-search">
                                    <a href="{{ url('admin/edit-blog') }}" class="serv-edit"><i class="fe fe-edit"></i>
                                        Edit</a>
                                    <a href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#delete-item"><i class="fe fe-trash-2"></i> Delete</a>
                                </div>
                                <span><i class="fe fe-alert-circle"></i> Active</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="blog grid-blog">
                        <div class="blog-image">
                            <a href="{{ url('admin/view-service') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/admin_assets/img/services/service-04.jpg') }}">
                            </a>
                            <div class="fav-item">
                                <div class="item-info">
                                    <a href="{{ url('admin/categories') }}"><span>Car Wash</span></a>
                                </div>
                                <span class="serv-rating"><i class="fa-solid fa-star"></i> 4.9</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-widget-image">
                                <a href="javascript:void(0);" class="table-profileimage">
                                    <img src="{{ URL::asset('/admin_assets/img/customer/user-06.jpg') }}" class="me-2"
                                        alt="img">
                                    <span>Robert</span>
                                </a>
                                <h6><img src="{{ URL::asset('/admin_assets/img/icons/calendar.svg') }}" alt="img">28
                                    Sep <script>document.write(new Date().getFullYear())</script></h6>
                            </div>
                            <h3 class="title">
                                <a href="{{ url('admin/view-service') }}">How To Find The Right Painting Service For
                                    Your Home?</a>
                            </h3>
                            <p>Sed perspiciatis unde omnis natus error laudantium, totam rem aperiam...</p>
                            <div class="blog-info">
                                <div class="action-search">
                                    <a href="{{ url('admin/edit-blog') }}" class="serv-edit"><i class="fe fe-edit"></i>
                                        Edit</a>
                                    <a href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#delete-item"><i class="fe fe-trash-2"></i> Delete</a>
                                </div>
                                <span><i class="fe fe-alert-circle"></i> Active</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="blog grid-blog">
                        <div class="blog-image">
                            <a href="{{ url('admin/view-service') }}">
                                <img class="img-fluid serv-img" alt="Service Image"
                                    src="{{ URL::asset('/admin_assets/img/services/service-01.jpg') }}">
                            </a>
                            <div class="fav-item">
                                <div class="item-info">
                                    <a href="{{ url('admin/categories') }}"><span>Construction</span></a>
                                </div>
                                <span class="serv-rating"><i class="fa-solid fa-star"></i> 4.5</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-widget-image">
                                <a href="javascript:void(0);" class="table-profileimage">
                                    <img src="{{ URL::asset('/admin_assets/img/customer/user-01.jpg') }}" class="me-2"
                                        alt="img">
                                    <span>John</span>
                                </a>
                                <h6><img src="{{ URL::asset('/admin_assets/img/icons/calendar.svg') }}" alt="img">28
                                    Sep <script>document.write(new Date().getFullYear())</script></h6>
                            </div>
                            <h3 class="title">
                                <a href="{{ url('admin/view-service') }}">How To Find The Right Painting Service For
                                    Your Home?</a>
                            </h3>
                            <p>Sed perspiciatis unde omnis natus error laudantium, totam rem aperiam...</p>
                            <div class="blog-info">
                                <div class="action-search">
                                    <a href="{{ url('admin/edit-blog') }}" class="serv-edit"><i class="fe fe-edit"></i>
                                        Edit</a>
                                    <a href="javascript:void(0);" data-bs-toggle="modal"
                                    data-bs-target="#delete-item"><i class="fe fe-trash-2"></i> Delete</a>
                                </div>
                                <span><i class="fe fe-alert-circle"></i> Active</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @component('admin.components.deletemodel')
        @slot('title1')
            Delete Blog
        @endslot
    @endcomponent

@endsection
