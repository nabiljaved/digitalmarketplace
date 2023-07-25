<?php $page = 'role-permission'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">
        <div class="content">

            @component('admin.components.addpageheader')
                @slot('addtitle')
                    Permission
                @endslot
            @endcomponent

            <div class="role-wrap">
                <div class="row">
                    <div class="col-md-6">
                        <h6>Role Name: <span>Testings</span></h6>
                    </div>
                    <div class="col-md-6">
                        <label class="checkboxs justify-content-md-end">
                            <input type="checkbox">
                            <span><i></i></span>
                            <b class="check-content">Allow All Modules</b>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 ">
                    <div class="table-resposnive role-table">
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Modules</th>
                                    <th>Sub Modules</th>
                                    <th>Create</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>View</th>
                                    <th>Allow all</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="mod-name">Dashboard</td>
                                    <td>Dashboard</td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="mod-name">Appointments</td>
                                    <td>Appointments</td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="mod-name">Specialization</td>
                                    <td>Specialization</td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="mod-name">Sub Categories</td>
                                    <td>Sub Categories</td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="mod-name">Clients</td>
                                    <td>Clients</td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="mod-name">Payment Request</td>
                                    <td>Payment Request</td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="mod-name">Reviews</td>
                                    <td>Reviews</td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="mod-name">Subscription</td>
                                    <td>Subscription</td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="mod-name">Settings</td>
                                    <td>Settings</td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="mod-name">Email Templates</td>
                                    <td>Email Templates</td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="checkboxs mb-0">
                                            <input type="checkbox">
                                            <span><i></i></span>
                                        </label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="btn-path text-center mt-4">
                        <a href="javascript:void(0);" class="btn btn-cancel me-3">Back</a>
                        <button type="submit" class="btn btn-primary ">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
