<?php $page = 'add-categories'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-7 col-sm-12 m-auto">

                @if ($message = Session::get('success'))
                  <div class="alert alert-success">
                    <p>{{ $message }}</p>
                  </div>
                @endif

                    @component('admin.components.addpageheader')
                        @slot('addtitle')
                            Add Categories
                        @endslot
                    @endcomponent

                    <form action="{{ url('admin/add-categories') }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Category Name <span>(English)</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Category Name" name="category_name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Category Slug <span>(Ex:test-slug)</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Slug" name="category_slug">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-0">
                                    <label>Category Image</label>
                                </div>
                                <div class="form-uploads mb-4">
                                    <div class="form-uploads-path">
                                   
                                        <img id="preview-image" src="{{ URL::asset('admin_assets/img/icons/upload.svg') }}" alt="img">

                                        <div class="file-browse">
                                            <h6>Drag & drop image or </h6>
                                            <div class="file-browse-path">
                                            <input type="file" name="category_image" id="category-image-input">
                                                <a href="javascript:void(0);"> Browse</a>
                                            </div>
                                        </div>
                                        <h5>Supported formates: JPEG, PNG</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Is Featured?</label>
                                    <ul class="custom-radiosbtn">
                                        <li>
                                            <label class="radiossets">Yes
                                            <input type="radio" checked="checked" name="category_isFeatured" value="1">
                                                <span class="checkmark-radio"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radiossets">No
                                            <input type="radio" name="category_isFeatured" value="0">
                                                <span class="checkmark-radio"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="btn-path">
                                    <a href="javascript:void(0);" class="btn btn-cancel me-3">Cancel</a>
                                    <button type="submit" class="btn btn-primary "> Add Category</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script>
    const categoryImageInput = document.getElementById('category-image-input');
        const previewImage = document.getElementById('preview-image');

        categoryImageInput.addEventListener('change', function() {
            const file = categoryImageInput.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                }
                reader.readAsDataURL(file);
            } else {
                previewImage.src = "{{ URL::asset('admin_assets/img/icons/upload.svg') }}";
            }
        });    
</script>

@endsection
