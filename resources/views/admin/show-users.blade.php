<?php $page = 'categories'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
                    User Detail
                @endslot
            @endcomponent

            @if(session('success'))
                    <div id="flash-message" class="alert alert-success">
                        {{ session('success') }}
                    </div>
             @endif

             @if(session('error'))
                    <div id="flash-message" class="alert alert-warning">
                        {{ session('error') }}
                    </div>
             @endif

            
            <div class="row">


                <div class="col-12 ">
                    <div class="table-resposnive table-div">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>name</th>
                                    <th>Email</th>
                                    <th>phone</th>
                                    <th>type</th>
                                    <th>Date Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($users as $index => $user)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td><span>{{ $user->name }}</span></td>
                <td><span>{{ $user->email }}</span></td>
                <td><span>{{ $user->phone }}</span></td>
                <td>
                <form action="{{ route('update-user-type', ['id' => $user->id]) }}" method="post">
                    @csrf
                    <div class="input-group">
                        <select class="form-select" name="user_type">
                            <option value="admin" {{ $user->type === 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="provider" {{ $user->type === 'provider' ? 'selected' : '' }}>Provider</option>
                            <option value="user" {{ $user->type === 'user' ? 'selected' : '' }}>User</option>
                        </select>
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
                </td>
                <td><span>{{ \Carbon\Carbon::parse($user->created_at)->format('F j, Y') }}</span></td>
                <td>
                    <div class="table-actions d-flex">
                        <div class="table-actions d-flex">
                        <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-item-{{ $user->id }}">
                                <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}" alt="svg">
                        </a>                  
                        </div>
                    </div>
                </td>
            </tr>
            <div class="modal fade" id="delete-item-{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Category ?</h5>
                                            <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
                                                <i class="fe fe-x"></i>
                                            </button>
                                        </div>
                                        <form action="{{ route('delete-user') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ $user->id }}">

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
    <script>
        setTimeout(function () {
            var flashMessage = document.getElementById('flash-message');
            if (flashMessage) {
                flashMessage.style.display = 'none';
            }
        }, 3000); // Change '5000' to the duration you want (in milliseconds)

    </script>

@endsection
