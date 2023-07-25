<?php $page = 'edit-blog-categories'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-7 col-sm-12 m-auto">

                    @component('admin.components.addpageheader')
                        @slot('addtitle')
                            Edit Blog Category
                        @endslot
                    @endcomponent

                    <form action="{{ url('admin/blogs-categories') }}">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Language</label>
                                    <select class="form-control select">
                                        <option>Select Language</option>
                                        <option selected>English</option>
                                        <option>German</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Category Name"
                                        value="Electrical">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Slug <span>(If you leave it empty, it will be generated
                                            automatically.)</span></label>
                                    <input type="text" class="form-control" value="electrical">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Description <span>(Meta Tag)</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Description">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Keywords <span>(Meta Tag)</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Keywords">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="btn-path">
                                    <a href="javascript:void(0);" class="btn btn-cancel me-3">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
