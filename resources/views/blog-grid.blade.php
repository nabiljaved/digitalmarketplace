<?php $page = 'blog-grid'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Our Blog
        @endslot
        @slot('li_1')
            Home
        @endslot
        @slot('li_2')
            Grid
        @endslot
        @slot('li_3')
            Blog
        @endslot
    @endcomponent

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="row">

                        <div class="col-md-4 d-flex">

                            <!-- Blog Post -->
                            <div class="blog grid-blog flex-fill">
                                <div class="blog-image">
                                    <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/assets/img/services/service-19.jpg') }}"
                                            alt="Post Image"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-category">
                                        <ul>
                                            <li><span class="cat-blog">Computer</span></li>
                                            <li><i class="feather-calendar me-2"></i>28 Apr 2023</li>
                                            <li>
                                                <div class="post-author">
                                                    <a href="javascript:;"><img
                                                            src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}"
                                                            alt="Post Author"><span>Admin</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="blog-title">
                                        <a href="{{ url('blog-details') }}">How to Fix a Computer in Just 3 Steps?</a>
                                    </h3>
                                    <p>Sed ut perspiciatis omnis natus error voluptatem architecto beatae vitae dicta sunt
                                        explicabo.</p>
                                    <a href="{{ url('blog-details') }}" class="read-more">Read More <i
                                            class="feather-arrow-right-circle"></i></a>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>

                        <div class="col-md-4 d-flex">

                            <!-- Blog Post -->
                            <div class="blog grid-blog flex-fill">
                                <div class="blog-image">
                                    <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/assets/img/services/service-10.jpg') }}"
                                            alt="Post Image"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-category">
                                        <ul>
                                            <li><span class="cat-blog">Construction</span></li>
                                            <li><i class="feather-calendar me-2"></i>28 Apr 2023</li>
                                            <li>
                                                <div class="post-author">
                                                    <a href="javascript:;"><img
                                                            src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}"
                                                            alt="Post Author"><span>Admin</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="blog-title">
                                        <a href="{{ url('blog-details') }}">Construction Service Scams: How to Avoid
                                            Them</a>
                                    </h3>
                                    <p>Sed ut perspiciatis omnis natus error voluptatem architecto beatae vitae dicta sunt
                                        explicabo.</p>
                                    <a href="{{ url('blog-details') }}" class="read-more">Read More <i
                                            class="feather-arrow-right-circle"></i></a>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>

                        <div class="col-md-4 d-flex">

                            <!-- Blog Post -->
                            <div class="blog grid-blog flex-fill">
                                <div class="blog-image">
                                    <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/assets/img/services/service-08.jpg') }}"
                                            alt="Post Image"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-category">
                                        <ul>
                                            <li><span class="cat-blog">Car Wash</span></li>
                                            <li><i class="feather-calendar me-2"></i>28 Apr 2023</li>
                                            <li>
                                                <div class="post-author">
                                                    <a href="javascript:;"><img
                                                            src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}"
                                                            alt="Post Author"><span>Admin</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="blog-title">
                                        <a href="{{ url('blog-details') }}">Lorem ipsum dolor sit amet, consectetur sed
                                            do</a>
                                    </h3>
                                    <p>Sed ut perspiciatis omnis natus error voluptatem architecto beatae vitae dicta sunt
                                        explicabo.</p>
                                    <a href="{{ url('blog-details') }}" class="read-more">Read More <i
                                            class="feather-arrow-right-circle"></i></a>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>

                        <div class="col-md-4 d-flex">

                            <!-- Blog Post -->
                            <div class="blog grid-blog flex-fill">
                                <div class="blog-image">
                                    <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/assets/img/services/service-19.jpg') }}"
                                            alt="Post Image"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-category">
                                        <ul>
                                            <li><span class="cat-blog">Electrical</span></li>
                                            <li><i class="feather-calendar me-2"></i>28 Apr 2023</li>
                                            <li>
                                                <div class="post-author">
                                                    <a href="javascript:;"><img
                                                            src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}"
                                                            alt="Post Author"><span>Admin</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="blog-title">
                                        <a href="{{ url('blog-details') }}">Lorem ipsum dolor sit amet, consectetur sed
                                            do</a>
                                    </h3>
                                    <p>Sed ut perspiciatis omnis natus error voluptatem architecto beatae vitae dicta sunt
                                        explicabo.</p>
                                    <a href="{{ url('blog-details') }}" class="read-more">Read More <i
                                            class="feather-arrow-right-circle"></i></a>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>

                        <div class="col-md-4 d-flex">

                            <!-- Blog Post -->
                            <div class="blog grid-blog flex-fill">
                                <div class="blog-image">
                                    <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/assets/img/services/service-09.jpg') }}"
                                            alt="Post Image"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-category">
                                        <ul>
                                            <li><span class="cat-blog">Cleaning</span></li>
                                            <li><i class="feather-calendar me-2"></i>28 Apr 2023</li>
                                            <li>
                                                <div class="post-author">
                                                    <a href="javascript:;"><img
                                                            src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}"
                                                            alt="Post Author"><span>Admin</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="blog-title">
                                        <a href="{{ url('blog-details') }}">Lorem ipsum dolor sit amet, consectetur sed
                                            do</a>
                                    </h3>
                                    <p>Sed ut perspiciatis omnis natus error voluptatem architecto beatae vitae dicta sunt
                                        explicabo.</p>
                                    <a href="{{ url('blog-details') }}" class="read-more">Read More <i
                                            class="feather-arrow-right-circle"></i></a>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>

                        <div class="col-md-4 d-flex">

                            <!-- Blog Post -->
                            <div class="blog grid-blog flex-fill">
                                <div class="blog-image">
                                    <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                            src="{{ URL::asset('/assets/img/services/service-07.jpg') }}"
                                            alt="Post Image"></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-category">
                                        <ul>
                                            <li><span class="cat-blog">Interior</span></li>
                                            <li><i class="feather-calendar me-2"></i>28 Apr 2023</li>
                                            <li>
                                                <div class="post-author">
                                                    <a href="javascript:;"><img
                                                            src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}"
                                                            alt="Post Author"><span>Admin</span></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="blog-title">
                                        <a href="{{ url('blog-details') }}">Lorem ipsum dolor sit amet, consectetur sed
                                            do</a>
                                    </h3>
                                    <p>Sed ut perspiciatis omnis natus error voluptatem architecto beatae vitae dicta sunt
                                        explicabo.</p>
                                    <a href="{{ url('blog-details') }}" class="read-more">Read More <i
                                            class="feather-arrow-right-circle"></i></a>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>

                        <div class="col-md-12">

                            <div class="blog-pagination">
                                @component('components.pagination')
                                @endcomponent
                            </div>

                        </div>


                    </div>

                </div>

            </div>
        </div>

        <!-- Cursor -->
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>
        <!-- /Cursor -->

    </div>
@endsection
