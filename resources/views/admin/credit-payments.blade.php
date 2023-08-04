<?php $page = 'categories'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.pageheader')
                @slot('title')
              Cheque Payment Details
                @endslot
            @endcomponent

            @if(session('success'))
                    <div id="flash-message" class="alert alert-success">
                        {{ session('success') }}
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
                                    <th>Address</th>
                                    <th>phone</th>
                                    <th>Total Price</th>
                                    <th>Service Title</th>
                                    <th>Email</th>
                                    <th>Coupon Charge</th>
                                    <th>service Charge</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($payments as $index => $payment)

                            @php
                                $user = $users->where('id', $payment->user_id)->first();
                                $email = $user ? $user->email : 'N/A';
                            @endphp

                            @php
                                $service = $services->where('id', $payment->service_id)->first();
                                $title = $service ? $service->service_title  : 'N/A';
                            @endphp


                    

                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td><span>{{ $payment->name }}</span></td>
                                <td><span>{{ $payment->address }}</span></td>
                                <td><span>{{ $payment->phone }}</span></td>
                                <td><span>AED {{ $payment->totalPrice }}</span></td>
                                <td><span>{{ $title}}</span></td>
                                <td><span>{{ $email}}</span></td>
                                <td><span>{{ $payment->coupon_charge}}</span></td>
                                <td><span>{{ $payment->service_charge}}</span></td>
                                <td><span>{{ \Carbon\Carbon::parse($payment->created_at)->format('F j, Y') }}</span></td>

                                
                               
                                <td>
                                    <div class="table-actions d-flex">
                                    <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-item-{{ $payment->id }}">
                                        <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}" alt="svg">
                                    </a>
                                      
                                    </div>
                                </td>
                            </tr>
                            <div class="modal fade" id="delete-item-{{ $payment->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Category ?</h5>
                                            <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
                                                <i class="fe fe-x"></i>
                                            </button>
                                        </div>
                                        <form action="{{ route('delete-credit-payment') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="payment_id" value="{{ $payment->id }}">

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
