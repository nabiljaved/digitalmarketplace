<?php $page = 'blog-list'; ?>
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
            List
        @endslot
        @slot('li_3')
            Blog
        @endslot
    @endcomponent

    <div class="content">
        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-md-12">

                    <!-- Blog Post -->
                    <div class="blog blog-list">
                        <div class="blog-image">
                            <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                    src="{{ URL::asset('/assets/img/blog/blog-04.jpg') }}" alt="Post Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-category">
                                <ul>
                                    <li><span class="cat-blog">Car Wash</span></li>
                                    <li><i class="feather-calendar me-1"></i>28 Apr 2023</li>
                                </ul>
                            </div>
                            <h3 class="blog-title"><a href="{{ url('blog-details') }}">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua veniam,</a></h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            <div class="blog-info">
                                <ul>
                                    <li>
                                        <div class="post-author">
                                            <a href="javascript:;"><img
                                                    src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}"
                                                    alt="Post Author"><span>Admin</span></a>
                                        </div>
                                    </li>
                                    <li><a href="javascript:;"><i class="feather-thumbs-up me-1"></i>25 Like(s)</a></li>
                                    <li><a href="javascript:;"><i class="feather-message-circle me-1"></i>20 Comment(s)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Blog Post -->

                    <!-- Blog Post -->
                    <div class="blog blog-list">
                        <div class="blog-image">
                            <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                    src="{{ URL::asset('/assets/img/blog/blog-07.jpg') }}" alt="Post Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-category">
                                <ul>
                                    <li><span class="cat-blog">Construction</span></li>
                                    <li><i class="feather-calendar me-1"></i>28 Apr 2023</li>
                                </ul>
                            </div>
                            <h3 class="blog-title"><a href="{{ url('blog-details') }}">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua veniam,</a></h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            <div class="blog-info">
                                <ul>
                                    <li>
                                        <div class="post-author">
                                            <a href="javascript:;"><img
                                                    src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}"
                                                    alt="Post Author"><span>Admin</span></a>
                                        </div>
                                    </li>
                                    <li><a href="javascript:;"><i class="feather-thumbs-up me-1"></i>25 Like(s)</a></li>
                                    <li><a href="javascript:;"><i class="feather-message-circle me-1"></i>20 Comment(s)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Blog Post -->

                    <!-- Blog Post -->
                    <div class="blog blog-list">
                        <div class="blog-image">
                            <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                    src="{{ URL::asset('/assets/img/blog/blog-06.jpg') }}" alt="Post Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-category">
                                <ul>
                                    <li><span class="cat-blog">Cleaning</span></li>
                                    <li><i class="feather-calendar me-1"></i>28 Apr 2023</li>
                                </ul>
                            </div>
                            <h3 class="blog-title"><a href="{{ url('blog-details') }}">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua veniam,</a></h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            <div class="blog-info">
                                <ul>
                                    <li>
                                        <div class="post-author">
                                            <a href="javascript:;"><img
                                                    src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}"
                                                    alt="Post Author"><span>Admin</span></a>
                                        </div>
                                    </li>
                                    <li><a href="javascript:;"><i class="feather-thumbs-up me-1"></i>25 Like(s)</a></li>
                                    <li><a href="javascript:;"><i class="feather-message-circle me-1"></i>20 Comment(s)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Blog Post -->

                    <!-- Blog Post -->
                    <div class="blog blog-list">
                        <div class="blog-image">
                            <a href="{{ url('blog-details') }}"><img class="img-fluid"
                                    src="{{ URL::asset('/assets/img/blog/blog-08.jpg') }}" alt="Post Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-category">
                                <ul>
                                    <li><span class="cat-blog">Carpentry</span></li>
                                    <li><i class="feather-calendar me-1"></i>28 Apr 2023</li>
                                </ul>
                            </div>
                            <h3 class="blog-title"><a href="{{ url('blog-details') }}">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua veniam,</a></h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            <div class="blog-info">
                                <ul>
                                    <li>
                                        <div class="post-author">
                                            <a href="javascript:;"><img
                                                    src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}"
                                                    alt="Post Author"><span>Admin</span></a>
                                        </div>
                                    </li>
                                    <li><a href="javascript:void(0);"><i class="feather-thumbs-up me-1"></i>35 Like(s)</a>
                                    </li>
                                    <li><a href="javascript:;"><i class="feather-message-circle me-1"></i>10 Comment(s)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Blog Post -->

                    <div class="blog-pagination">
                        @component('components.pagination')
                        @endcomponent
                    </div>

                </div>

                <!-- Blog Sidebar -->
                <div class="col-lg-4 col-md-12 blog-sidebar theiaStickySidebar">

                    <!-- Search -->
                    <div class="card search-widget">
                        <div class="card-body">
                            <form class="search-form">
                                <div class="input-group">
                                    <input type="text" placeholder="Search your keyword" class="form-control">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /Search -->

                    <!-- Categories -->
                    <div class="card about-widget">
                        <div class="card-body">
                            <h4 class="side-title">About Me</h4>
                            <img src="{{ URL::asset('/assets/img/profile.jpg') }}" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                            <a href="javascript:;" class="btn btn-primary">About Author</a>
                        </div>
                    </div>
                    <!-- /Categories -->

                    <!-- Categories -->
                    <div class="card category-widget">
                        <div class="card-body">
                            <h4 class="side-title">Categories</h4>
                            <ul class="categories">
                                <li><a href="{{ url('categories') }}">Car Wash</a></li>
                                <li><a href="{{ url('categories') }}">Plumbing</a></li>
                                <li><a href="{{ url('categories') }}">Carpenter</a></li>
                                <li><a href="{{ url('categories') }}">Computer Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Categories -->

                    <!-- Latest Posts -->
                    <div class="card post-widget">
                        <div class="card-body">
                            <h4 class="side-title">Latest News</h4>
                            <ul class="latest-posts">
                                <li>
                                    <div class="post-thumb">
                                        <a href="{{ url('blog-details') }}">
                                            <img class="img-fluid"
                                                src="{{ URL::asset('/assets/img/services/service-01.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <p>06 Nov 2023</p>
                                        <h4>
                                            <a href="{{ url('blog-details') }}">Lorem ipsum dolor amet, consectetur
                                                adipiscing elit. Amet.</a>
                                        </h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <a href="{{ url('blog-details') }}">
                                            <img class="img-fluid"
                                                src="{{ URL::asset('/assets/img/services/service-02.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <p>06 Nov 2023</p>
                                        <h4>
                                            <a href="{{ url('blog-details') }}">Lorem ipsum dolor amet, consectetur
                                                adipiscing elit. Amet.</a>
                                        </h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <a href="{{ url('blog-details') }}">
                                            <img class="img-fluid"
                                                src="{{ URL::asset('/assets/img/services/service-03.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <p>06 Nov 2023</p>
                                        <h4>
                                            <a href="{{ url('blog-details') }}">Lorem ipsum dolor amet, consectetur
                                                adipiscing elit. Amet.</a>
                                        </h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-thumb">
                                        <a href="{{ url('blog-details') }}">
                                            <img class="img-fluid"
                                                src="{{ URL::asset('/assets/img/services/service-04.jpg') }}"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <p>06 Nov 2023</p>
                                        <h4>
                                            <a href="{{ url('blog-details') }}">Lorem ipsum dolor amet, consectetur
                                                adipiscing elit. Amet.</a>
                                        </h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Latest Posts -->

                    <!-- Tags -->
                    <div class="card tags-widget">
                        <div class="card-body">
                            <h4 class="side-title">Tags</h4>
                            <ul class="tags">
                                <li><a href="javascript:;" class="tag">Consulting</a></li>
                                <li><a href="javascript:;" class="tag">Design</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Tags -->

                    <!-- Archives -->
                    <div class="card widget widget-archive mb-0">
                        <div class="card-body">
                            <h4 class="side-title">Archives</h4>
                            <ul>
                                <li><a href="javascript:void(0);">January 2023</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Archives -->

                </div>
                <!-- /Blog Sidebar -->

            </div>
        </div>
    </div>
@endsection
