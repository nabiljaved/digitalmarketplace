<?php $page = 'edit-email-template'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <form action="{{ url('admin/email-templates') }}">
                <div class="row">
                    <div class="col-lg-7 col-sm-12 m-auto">

                        @component('admin.components.addpageheader')
                            @slot('addtitle')
                                Edit Email Template
                            @endslot
                        @endcomponent

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sms-group">
                                    <ul>
                                        <li>Email Title <span>E-Mail Registration Confirmation</span></li>
                                        <li>Reference ID <span>1</span></li>
                                        <li>Sent To <span><img
                                                    src="{{ URL::asset('/admin_assets/img/customer/user-01.jpg') }}"
                                                    class="avatar-sm me-2" alt="img">William</span></li>
                                        <li>Date <span>27 Sep <script>document.write(new Date().getFullYear())</script> 10:43:20</span></li>
                                    </ul>
                                </div>
                                <div class="form-group">
                                    <label> Template Content</label>
                                    <div id="editor">Hi {user_name},
                                        Welcome to Truelysell.com, Thanks for signing up.
                                        Click the button below to to view site:
                                        View
                                        Cheers,
                                        {sitetitle} Team</div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="btn-path">
                                    <button type="submit" class="btn btn-primary me-3">Save Changes</button>
                                    <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
