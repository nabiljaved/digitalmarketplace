<?php $page = 'add-home'; ?>
@extends('layout.mainlayout_admin')
@section('content')

<div class="page-wrapper">
    <div class="content">
        <form action="{{url('admin/page-list')}}">
            <div class="row">
                <div class="col-lg-7 col-sm-12 m-auto">
                    <div class="content-page-header">
                        <h5 class="mb-2">Home Page</h5>
                        <div class="form-group mb-0">
                            <p class="contentpage">You are editing "English" version</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-groupheads d-flex d-flex justify-content-between">
                                        <h2>Banner Settings</h2>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Title<span class="text-label"> (English)</span></label>
                                        <input type="text" class="form-control" placeholder="World's Largest Marketplace!!!!">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Content<span class="text-label"> (English)</span></label>
                                        <input type="text" class="form-control" placeholder="Search From 100 Awesome Verified Ads!">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-0">
                                        <label>Image</label>
                                    </div>
                                    <div class="form-uploads mb-4">
                                        <div class="form-uploads-path">
                                            <img src="{{URL::asset('admin_assets/img/icons/upload.svg')}}" alt="img">
                                            <div class="file-browse">
                                                <h6>Drag & drop image or </h6>
                                                <div class="file-browse-path">
                                                    <input type="file">
                                                    <a href="javascript:void(0);"> Browse</a>
                                                </div>
                                            </div>
                                            <h5>Supported formates: JPEG, PNG</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-groupheads d-flex d-flex justify-content-between">
                                        <h2>Main Search</h2>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-groupheads d-flex d-flex justify-content-between">
                                        <h2>Popular Searches</h2>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Popular Searches Label Name<span class="text-label"> (English)</span></label>
                                        <input type="text" class="form-control" placeholder="Popular Searches">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="btn-path path-update">
                                        <button type="submit" class="btn btn-primary me-3"> Update</button>                                    
                                        <a href="javascript:void(0);" class="btn btn-cancel ">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-groupheads d-flex d-flex justify-content-between">
                                        <h2>Featured Categories</h2>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Title<span class="text-label"> (English)</span></label>
                                        <input type="text" class="form-control" placeholder="Featured Categories">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Content<span class="text-label"> (English)</span></label>
                                        <input type="text" class="form-control" placeholder="What Do You Need To Find?">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Categories<span class="text-label"> (English)</span></label>
                                        <select class="select">
                                            <option>Select Categories</option>
                                            <option>ASC</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="btn-path path-update">
                                        <button type="submit" class="btn btn-primary me-3"> Update</button>                                    
                                        <a href="javascript:void(0);" class="btn btn-cancel ">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-groupheads d-flex d-flex justify-content-between">
                                        <h2>Featured Services</h2>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Title<span class="text-label"> (English)</span></label>
                                        <input type="text" class="form-control" placeholder="Featured Services">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Content<span class="text-label"> (English)</span></label>
                                        <input type="text" class="form-control" placeholder="Explore the greates our services. You won’t be disappointed">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Number of service<span class="text-label"> ( Min 6 to Max 20 only )</span></label>
                                        <select class="select">
                                            <option>10</option>
                                            <option>11</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="btn-path path-update">
                                        <button type="submit" class="btn btn-primary me-3"> Update</button>                                    
                                        <a href="javascript:void(0);" class="btn btn-cancel ">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-groupheads d-flex d-flex justify-content-between">
                                        <h2>Top Providers</h2>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Title<span class="text-label"> (English)</span></label>
                                        <input type="text" class="form-control" placeholder="Top Providers">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Content<span class="text-label"> (English)</span></label>
                                        <input type="text" class="form-control" placeholder="Meet Our Experts">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="btn-path path-update">
                                        <button type="submit" class="btn btn-primary me-3"> Update</button>                                    
                                        <a href="javascript:void(0);" class="btn btn-cancel ">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-groupheads d-flex d-flex justify-content-between">
                                        <h2>We Are Offering 14 Days Free Trial</h2>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Title<span class="text-label"> (English)</span></label>
                                        <input type="text" class="form-control" placeholder="We Are Offering 14 Days Free Trial">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Title<span class="text-label"> (English)</span></label>
                                        <textarea class="form-control" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore minim veniam, quis nostrud exercitation ullamco magna aliq."></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Button</label>
                                        <input type="text" class="form-control" placeholder="Try 14 Days Free Trial">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="btn-path path-update">
                                        <button type="submit" class="btn btn-primary me-3"> Update</button>                                    
                                        <a href="javascript:void(0);" class="btn btn-cancel ">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-groupheads d-flex d-flex justify-content-between">
                                        <h2>How It Works</h2>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Title<span class="text-label"> (English)</span></label>
                                        <input type="text" class="form-control" placeholder="How It Works">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Content<span class="text-label"> (English)</span></label>
                                        <input type="text" class="form-control" placeholder="Aliquam lorem ante, dapibus in, viverra quis">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-groupheads mb-3">
                                        <h2>Step 1</h2>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Title<span class="text-label"> (English)</span></label>
                                        <input type="text" class="form-control" placeholder="Amazing Places">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Content<span class="text-label"> (English)</span></label>
                                        <input type="text" class="form-control" placeholder="Aliquam Lorem Ante, Dapibus In, Viverra Quis, Feugiat Phasellus Viverra Nulla Ut Metus Varius Laoree">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-0">
                                        <label>Image</label>
                                    </div>
                                    <div class="form-uploads mb-4">
                                        <div class="form-uploads-path">
                                            <div class="file-browse">
                                                <h6>Drag & drop image or </h6>
                                                <div class="file-browse-path">
                                                    <input type="file">
                                                    <a href="javascript:void(0);"> Browse</a>
                                                </div>
                                            </div>
                                            <h5>Supported formates: JPEG, PNG</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-groupheads mb-3">
                                        <h2>Step 2</h2>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Title<span class="text-label"> (English)</span></label>
                                        <input type="text" class="form-control" placeholder="Find What You Want">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Content<span class="text-label"> (English)</span></label>
                                        <input type="text" class="form-control" placeholder="Aliquam Lorem Ante, Dapibus In, Viverra Quis, Feugiat Phasellus Viverra Nulla Ut Metus Varius Laoree">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-0">
                                        <label>Image</label>
                                    </div>
                                    <div class="form-uploads mb-4">
                                        <div class="form-uploads-path">
                                            <div class="file-browse">
                                                <h6>Drag & drop image or </h6>
                                                <div class="file-browse-path">
                                                    <input type="file">
                                                    <a href="javascript:void(0);"> Browse</a>
                                                </div>
                                            </div>
                                            <h5>Supported formates: JPEG, PNG</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-groupheads mb-3">
                                        <h2>Step 3</h2>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Title<span class="text-label"> (English)</span></label>
                                        <input type="text" class="form-control" placeholder="Choose What To Do">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Content<span class="text-label"> (English)</span></label>
                                        <input type="text" class="form-control" placeholder="Aliquam Lorem Ante, Dapibus In, Viverra Quis, Feugiat Phasellus Viverra Nulla Ut Metus Varius Laoree">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-0">
                                        <label>Image</label>
                                    </div>
                                    <div class="form-uploads mb-4">
                                        <div class="form-uploads-path">
                                            <div class="file-browse">
                                                <h6>Drag & drop image or </h6>
                                                <div class="file-browse-path">
                                                    <input type="file">
                                                    <a href="javascript:void(0);"> Browse</a>
                                                </div>
                                            </div>
                                            <h5>Supported formates: JPEG, PNG</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="btn-path path-update">
                                        <button type="submit" class="btn btn-primary me-3"> Update</button>                                    
                                        <a href="javascript:void(0);" class="btn btn-cancel ">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-groupheads d-flex d-flex justify-content-between">
                                        <h2>Most Popular Services</h2>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Title<span class="text-label"> (English)</span></label>
                                        <input type="text" class="form-control" placeholder="Featured Services">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Content<span class="text-label"> (English)</span></label>
                                        <input type="text" class="form-control" placeholder="Explore the greates our services. You won’t be disappointed">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Number of service<span class="text-label"> ( Min 6 to Max 20 only )</span></label>
                                        <select class="select">
                                            <option>10</option>
                                            <option>11</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="btn-path path-update">
                                        <button type="submit" class="btn btn-primary me-3"> Update</button>                                    
                                        <a href="javascript:void(0);" class="btn btn-cancel ">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div> 

@endsection