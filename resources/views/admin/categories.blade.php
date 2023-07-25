<?php $page = 'categories'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    Categories
                @endslot
            @endcomponent

            
            <div class="row">

                <div class="col-12 ">
                    <div class="table-resposnive table-div">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>Category Slug</th>
                                    <th>Date</th>
                                    <th>Featured</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($categories as $index => $category)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>
            <div class="table-imgname">
                <img src="{{ URL::asset('/admin_assets/img/services/service-02.jpg') }}" class="me-2" alt="img">
                <span>{{ $category->category_name }}</span>
            </div>
        </td>
        <td><span>{{ $category->category_slug }}</span></td>
        <td>{{ $category->created_at->format('d M Y') }}</td>
        <td>
            <div class="active-switch">
                <label class="switch">
                    <input type="checkbox" {{ $category->category_isFeatured ? 'checked' : '' }}>
                    <span class="sliders round"></span>
                </label>
            </div>
        </td>
        <td>
            <div class="table-actions d-flex">
            <a class="delete-table me-2" href="{{ url('admin/edit-categories/' . $category->category_slug) }}">
                    <img src="{{ URL::asset('/admin_assets/img/icons/edit.svg') }}" alt="svg">
                </a>
                <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-item-{{ $category->id }}">
                    <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}" alt="svg">
                </a>
            </div>
        </td>
    </tr>
    <div class="modal fade" id="delete-item-{{ $category->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Category ?</h5>
                <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fe fe-x"></i>
                </button>
            </div>
            <form action="{{ route('delete-categories') }}" method="post">
                @csrf
                <input type="hidden" name="category_slug" value="{{ $category->category_slug }}">

                <div class="modal-body py-0">
                    <div class="del-modal">
                        <p>Are you sure you want to delete this item?</p>
                    </div>
                </div>
                <div class="modal-footer pt-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach



                                <!-- <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="table-imgname">
                                            <img src="{{ URL::asset('/admin_assets/img/services/service-03.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Computer Repair</span>
                                        </div>
                                    </td>
                                    <td>Computer</td>
                                    <td>28 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-categories') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <div class="table-imgname">
                                            <img src="{{ URL::asset('/admin_assets/img/services/service-02.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Car Repair Services</span>
                                        </div>
                                    </td>
                                    <td>Automobile</td>
                                    <td>17 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-categories') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <div class="table-imgname">
                                            <img src="{{ URL::asset('/admin_assets/img/services/service-04.jpg') }}"
                                                class="me-2" alt="img">
                                            <span> Car Wash</span>
                                        </div>
                                    </td>
                                    <td>Car Wash</td>
                                    <td>13 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-categories') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <div class="table-imgname">
                                            <img src="{{ URL::asset('/admin_assets/img/services/service-09.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>House Cleaning </span>
                                        </div>
                                    </td>
                                    <td>Cleaning</td>
                                    <td>07 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-categories') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <div class="table-imgname">
                                            <img src="{{ URL::asset('/admin_assets/img/services/service-08.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Building Construction</span>
                                        </div>
                                    </td>
                                    <td>Cleaning</td>
                                    <td>07 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-categories') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>
                                        <div class="table-imgname">
                                            <img src="{{ URL::asset('/admin_assets/img/services/service-07.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Interior Designing</span>
                                        </div>
                                    </td>
                                    <td>Interior</td>
                                    <td>07 Sep <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-categories') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>
                                        <div class="table-imgname">
                                            <img src="{{ URL::asset('/admin_assets/img/services/service-09.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Commercial Painting </span>
                                        </div>
                                    </td>
                                    <td>Painting</td>
                                    <td>22 Aug <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked="">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ url('admin/edit-categories') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>
                                        <div class="table-imgname">
                                            <img src="{{ URL::asset('/admin_assets/img/services/service-12.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>Plumbing Services</span>
                                        </div>
                                    </td>
                                    <td>Plumbing</td>
                                    <td>15 Aug <script>document.write(new Date().getFullYear())</script></td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="{{ 'admin/edit-categories' }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/edit.svg') }}"
                                                    alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete-item">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}"
                                                    alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
