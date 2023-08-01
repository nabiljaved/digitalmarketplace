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
                                    <th>name</th>
                                    <th>Address</th>
                                    <th>phone</th>
                                    <th>Date</th>
                                    <th>Total Price</th>
                                    <th>Service Title</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($payments as $index => $payment)

                            @php
                                $user = $users->where('id', $payment->user_id)->first();
                                $email = $user ? $user->email : 'N/A';
                            @endphp


                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td><span>{{ $payment->name }}</span></td>
                                <td><span>{{ $payment->address }}</span></td>
                                <td><span>{{ $payment->phone }}</span></td>
                                <td><span>{{ $payment->date }}</span></td>
                                <td><span>AED {{ $payment->totalPrice }}</span></td>
                                <td><span>AED {{ $payment->servicetitle}}</span></td>
                                <td><span>{{ $email}}</span></td>

                                
                               
                                <td>
                                    <div class="table-actions d-flex">
                                    <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal" >
                                        <img src="{{ URL::asset('/admin_assets/img/icons/delete.svg') }}" alt="svg">
                                    </a>
                                      
                                    </div>
                                </td>
                            </tr>
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
