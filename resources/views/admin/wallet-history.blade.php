<?php $page = 'wallet-history'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="main-wrapper">
        <div class="change-activity">
            <div class="change-passwordback">
                <a href="{{ url('admin/wallet') }}"><i class="fe fe-arrow-left me-2"></i>Back to Dashboard </a>
            </div>

            @component('admin.components.addpageheader')
                @slot('addtitle')
                    Wallet History
                @endslot
            @endcomponent
            
            <div class="row">
                <div class="col-12">
                    <div class="table-resposnive table-bottom">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Type</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Payment Type</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Wallet Topup</td>
                                    <td class="text-success">+$80</td>
                                    <td>07 Oct <script>document.write(new Date().getFullYear())</script> 11:22:51 </td>
                                    <td>Paypal</td>
                                    <td>
                                        <h6 class="badge-active">Completed</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Purchase</td>
                                    <td class="text-danger">-$20</td>
                                    <td>06 Oct <script>document.write(new Date().getFullYear())</script> 11:22:51 </td>
                                    <td>Paypal</td>
                                    <td>
                                        <h6 class="badge-active">Completed</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Wallet Topup</td>
                                    <td class="text-success">+$80</td>
                                    <td>07 Oct <script>document.write(new Date().getFullYear())</script> 11:22:51 </td>
                                    <td>Paypal</td>
                                    <td>
                                        <h6 class="badge-active">Completed</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Purchase</td>
                                    <td class="text-danger">-$20</td>
                                    <td>06 Oct <script>document.write(new Date().getFullYear())</script> 11:22:51 </td>
                                    <td>Paypal</td>
                                    <td>
                                        <h6 class="badge-active">Completed</h6>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
