<?php $page = 'services'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    All Services
                @endslot
            @endcomponent

            <!-- @component('admin.components.tabsets')
            @endcomponent -->

            @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif

                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                     @endif


            <div class="row">
                <div class="col-12 ">
                    <div class="table-resposnive table-div">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Service</th>
                                    <th>Category</th>
                                    <th>Service Slug</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Created By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($services as $service)
                                <tr>
                                    <td>{{ $service->id }}</td>
                                    <td>
                                        <div class="table-imgname">
                                            <a href="{{ url('admin/view-service') }}">
                                                <img src="{{ URL::asset('/admin_assets/img/services/service-03.jpg') }}"
                                                    class="me-2" alt="img">
                                                <span>{{ $service->service_title }}</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td>{{ $service->service_category }}</td>
                                    <td>{{ $service->service_slug }}</td>
                                    <td>${{ $service->service_price }}</td>
                                    <td>{{ $service->created_at->format('d M Y') }}</td>
                                    <td>
                                        @if ($service->service_status == 'not active')
                                            <h6 class="badge-inactive">not active</h6>
                                        @elseif ($service->service_status == 'pending')
                                            <h6 class="badge-pending">Pending</h6>
                                        @elseif ($service->service_status == 'active')
                                            <h6 class="badge-active">Active</h6>
                                        @endif
                                    </td>
                                    <td>Provider</td>
                                    <td>
                                        <div class="table-actions d-flex">
                                        <a class="delete-table me-2" href="{{ route('edit-service', ['slug' => $service->service_slug]) }}">
                                                <img src="{{ URL::asset('/admin_assets/img/icons/edit.svg') }}" alt="svg">
                                            </a>
                                            <a class="delete-table" href="#" data-bs-toggle="modal"
                                                data-bs-target="#delete-item" >
                                                <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}" alt="svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <div class="modal fade"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="delete-item">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete Category ?</h5>
                                                <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="fe fe-x"></i>
                                                </button>
                                            </div>
                                            <form action="{{ route('delete-service', ['service_slug' => $service->service_slug]) }}" method="post">
                                                @csrf
                                                <!-- <input type="hidden" name="service_slug" value="{{ $service->service_slug}}"> -->

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

                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
@endsection
