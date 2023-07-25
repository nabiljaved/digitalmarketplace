@if (Route::is(['marketing-featured']))
    <!-- Add Featured Services -->
    <div class="modal fade" id="add-features" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Featured Services</h5>
                    <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fe fe-x"></i>
                    </button>
                </div>
                <form action="{{ url('admin/marketing-featured') }}">
                    <div class="modal-body py-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Service</label>
                                    <select class="select">
                                        <option>Select Service</option>
                                        <option>service 2</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-groupheads d-flex d-flex justify-content-between">
                                <h2>Status</h2>
                                <div class="active-switch">
                                    <label class="switch">
                                        <input type="checkbox" checked="">
                                        <span class="sliders round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer pt-0">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Featured Services -->

    <!-- Edit Featured Services -->
    <div class="modal fade" id="edit-features" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Featured Services</h5>
                    <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fe fe-x"></i>
                    </button>
                </div>
                <form action="{{ url('admin/marketing-featured') }}">
                    <div class="modal-body py-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Service</label>
                                    <select class="select">
                                        <option>Select Service</option>
                                        <option selected>service 2</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-groupheads d-flex d-flex justify-content-between">
                                <h2>Status</h2>
                                <div class="active-switch">
                                    <label class="switch">
                                        <input type="checkbox" checked="">
                                        <span class="sliders round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer pt-0">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Featured Services -->
@endif

@if (Route::is(['roles-permissions']))
    <!-- Add Role -->
    <div class="modal fade" id="add-role" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Role</h5>
                    <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fe fe-x"></i>
                    </button>
                </div>
                <form action="{{ url('admin/roles-permissions') }}">
                    <div class="modal-body py-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Role Name <span class="manitory">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Role Name">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer pt-0">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Role -->

    <!-- Edit Role -->
    <div class="modal fade" id="edit-role" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Role</h5>
                    <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fe fe-x"></i>
                    </button>
                </div>
                <form action="{{ url('admin/roles-permissions') }}">
                    <div class="modal-body py-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Role Name <span class="manitory">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter Role Name"
                                        value="Admin">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer pt-0">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Edit Role -->
@endif

@if (Route::is(['faq']))
    <!--change email-modal -->
    <div class="modal fade" id="add-faq" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create FAQ’s</h5>
                    <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fe fe-x"></i>
                    </button>
                </div>
                <div class="modal-body py-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" placeholder="Enter FAQ Title">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="select">
                                    <option>Select Category</option>
                                    <option> Category 1</option>
                                    <option> Category 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Answer</label>
                                <textarea class="form-control" placeholder="Enter Answer"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-groupheads d-flex d-flex justify-content-between">
                                <h2>Status</h2>
                                <div class="active-switch">
                                    <label class="switch">
                                        <input type="checkbox" checked="">
                                        <span class="sliders round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pt-0">
                    <button type="button" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--change email-modal -->
    <div class="modal fade" id="edit-faq" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit FAQ’s</h5>
                    <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fe fe-x"></i>
                    </button>
                </div>
                <div class="modal-body py-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" value="How Can I Book Service? ">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="select">
                                    <option> Services</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Answer</label>
                                <textarea class="form-control" placeholder="Enter Answer"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-groupheads d-flex d-flex justify-content-between">
                                <h2>Status</h2>
                                <div class="active-switch">
                                    <label class="switch">
                                        <input type="checkbox" checked="">
                                        <span class="sliders round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pt-0">
                    <button type="button" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endif

@if (Route::is(['tax-rates']))
    <!--change email-modal -->
    <div class="modal fade" id="add-tax" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Tax Rate</h5>
                    <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fe fe-x"></i>
                    </button>
                </div>
                <div class="modal-body py-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Tax Rate %</label>
                                <input type="text" class="form-control" placeholder="Enter Tax Rate">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pt-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="edit-tax" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Tax Rate</h5>
                    <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fe fe-x"></i>
                    </button>
                </div>
                <div class="modal-body py-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Enter Name" value="VAT">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Tax Rate %</label>
                                <input type="text" class="form-control" placeholder="Enter Tax Rate"
                                    value="10">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pt-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
@endif

@if (Route::is(['marketing-newsletter']))
    <!--change email-no -->
    <div class="modal fade" id="send-email" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Send Newsletter</h5>
                    <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fe fe-x"></i>
                    </button>
                </div>
                <form action="{{ url('admin/marketing-newsletter') }}">
                    <div class="modal-body py-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" placeholder="Enter Email Address">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" class="form-control" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Content</label>
                                    <div id="editor"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer pt-0">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!--change email-no -->
    <div class="modal fade" id="add-subscriber" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Subscriber</h5>
                    <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fe fe-x"></i>
                    </button>
                </div>
                <form action="{{ url('admin/marketing-newsletter') }}">
                    <div class="modal-body py-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" placeholder="Enter Email Address">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer pt-0">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endif

@if (Route::is(['contact-messages-view']))
    <div class="modal fade" id="add-reply" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">REPLY CONTACT</h5>
                    <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fe fe-x"></i>
                    </button>
                </div>
                <form action="{{ url('admin/contact-messages-view') }}">
                    <div class="modal-body py-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Content</label>
                                    <div id="editor"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer pt-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif

@if (Route::is(['abuse-reports']))
    <div class="modal fade" id="add-abuse" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Abuse Details</h5>
                    <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fe fe-x"></i>
                    </button>
                </div>
                <form action="{{ url('admin/abuse-reports') }}">
                    <div class="modal-body py-0">
                        <div class="row">
                            <div class="col-12">
                                <ul class="abuse-list">
                                    <li>
                                        <h6>Provider Name</h6>
                                        <div class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-01.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>John Smith</span>
                                        </div>
                                    </li>
                                    <li>
                                        <h6>Username </h6>
                                        <div class="table-profileimage">
                                            <img src="{{ URL::asset('/admin_assets/img/customer/user-02.jpg') }}"
                                                class="me-2" alt="img">
                                            <span>William</span>
                                        </div>
                                    </li>
                                    <li>
                                        <h6>Descriptions</h6>
                                        <p>Lorem ipsum dolor sit</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer pt-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif

@if (Route::is(['payment-settings']))
    <!-- Add Account -->
    <div class="modal fade" id="add-acc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Account</h5>
                    <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fe fe-x"></i>
                    </button>
                </div>
                <form action="{{ url('admin/payment-settings') }}">
                    <div class="modal-body py-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Bank Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Bank Name">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Account Holder Name</label>
                                    <input type="text" class="form-control"
                                        placeholder="Enter Accont Holder Name">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Account Number</label>
                                    <input type="text" class="form-control" placeholder="Enter Account Number">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>IFSC Code</label>
                                    <input type="text" class="form-control" placeholder="Enter IFSC Code">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Branch Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Branch Name">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>UPI Id</label>
                                    <input type="text" class="form-control" placeholder="Enter UPI Id">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-groupheads d-flex justify-content-between">
                                    <h2>Status</h2>
                                    <div class="active-switch">
                                        <label class="switch">
                                            <input type="checkbox" checked="">
                                            <span class="sliders round"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer pt-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Account -->

    <!-- Edit Account -->
    <div class="modal fade" id="edit-acc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Account</h5>
                    <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fe fe-x"></i>
                    </button>
                </div>
                <form action="{{ url('admin/payment-settings') }}">
                    <div class="modal-body py-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Bank Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Bank Name"
                                        value="Karur vysya bank">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Account Holder Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Accont Holder Name"
                                        value="John Smith">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Account Number</label>
                                    <input type="text" class="form-control" placeholder="Enter Account Number"
                                        value="**** **** 1832">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>IFSC Code</label>
                                    <input type="text" class="form-control" placeholder="Enter IFSC Code"
                                        value="KVBL0001626">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Branch Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Branch Name"
                                        value="Jersy">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>UPI Id</label>
                                    <input type="text" class="form-control" placeholder="Enter UPI Id"
                                        value="kjbh12435">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-groupheads d-flex justify-content-between">
                                    <h2>Status</h2>
                                    <div class="active-switch">
                                        <label class="switch">
                                            <input type="checkbox" checked="">
                                            <span class="sliders round"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer pt-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Account -->
@endif

@if (Route::is(['currencies']))
    <!--change email-modal -->
    <div class="modal fade" id="add-currency" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Currency</h5>
                    <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fe fe-x"></i>
                    </button>
                </div>
                <div class="modal-body py-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Currency Name</label>
                                <input type="text" class="form-control" placeholder="Enter Currency Name">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Currency Symbol</label>
                                <input type="text" class="form-control" placeholder="Enter Currency Symbol">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Currency Code</label>
                                <input type="text" class="form-control" placeholder="Enter Currency Code">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Currency Rate</label>
                                <input type="text" class="form-control" placeholder="Enter Currency Rate">
                            </div>
                        </div>
                        <div class="form-groupheads d-flex d-flex justify-content-between">
                            <h2>Status</h2>
                            <div class="active-switch">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="sliders round"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pt-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="edit-currency" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Currency</h5>
                    <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fe fe-x"></i>
                    </button>
                </div>
                <div class="modal-body py-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Currency Name</label>
                                <input type="text" class="form-control" placeholder="Enter Currency Name"
                                    value="England Pound	">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Currency Symbol</label>
                                <input type="text" class="form-control" placeholder="Enter Currency Symbol"
                                    value="£">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Currency Code</label>
                                <input type="text" class="form-control" placeholder="Enter Currency Code"
                                    value="GBP">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Currency Rate</label>
                                <input type="text" class="form-control" placeholder="Enter Currency Rate">
                            </div>
                        </div>
                        <div class="form-groupheads d-flex d-flex justify-content-between">
                            <h2>Status</h2>
                            <div class="active-switch">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="sliders round"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pt-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
@endif


@if (Route::is(['security']))
    <!--change email-modal -->
    <div class="modal fade" id="change-email" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Change Email</h5>
                    <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fe fe-x"></i>
                    </button>
                </div>
                <div class="modal-body py-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Current Email Address</label>
                                <input type="text" class="form-control" placeholder="Enter Email Address">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>New Email Address<span class="manitory">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Email Address">
                                <p><i class="fa fa-info-circle me-2 ms-1"></i>New Email Address Only Updated Once You
                                    Verified </p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Current Password</label>
                                <div class="pass-group">
                                    <input type="password" class="form-control pass-input"
                                        placeholder="*************">
                                    <span class="fas toggle-password fa-eye-slash"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pt-0">
                    <button type="button" class="btn btn-primary">Change Email</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--change email-no -->
    <div class="modal fade" id="change-no" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Change Phone Number</h5>
                    <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fe fe-x"></i>
                    </button>
                </div>
                <div class="modal-body py-0">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="col-form-label">Phone Number</label>
                        </div>
                        <div class="col-md-2 pe-0">
                            <div class="form-group">
                                <input class="form-control form-control-lg group_formcontrol" id="phone"
                                    name="phone" type="text">
                            </div>
                        </div>
                        <div class="col-md-10 ps-0">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="(256) 789-6253">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="col-form-label">New Phone Number</label>
                        </div>
                        <div class="col-md-2 pe-0">
                            <div class="form-group mb-0">
                                <input class="form-control form-control-lg group_formcontrol" id="phone1"
                                    name="phone" type="text">
                            </div>
                        </div>
                        <div class="col-md-10 ps-0">
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" placeholder="(256) 789-6253">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <p><i class="fa fa-info-circle me-2 ms-1"></i>New Phone Number Only Updated Once You
                                    Verified </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Current Password</label>
                                <div class="pass-group">
                                    <input type="password" class="form-control pass-inputs"
                                        placeholder="*************">
                                    <span class="fas toggle-passwords fa-eye-slash"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pt-0">
                    <button type="button" class="btn btn-primary">Change Number</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endif

@if (Route::is(['ban-ip-address']))
    <!-- Add Ban IP Address -->
    <div class="modal fade" id="add-tax" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Ban IP Address</h5>
                    <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fe fe-x"></i>
                    </button>
                </div>
                <form action="{{ url('admin/ban-ip-address') }}">
                    <div class="modal-body py-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>IP Address</label>
                                    <input type="text" class="form-control" placeholder="Enter IP Address">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Reason for Ban</label>
                                    <input type="text" class="form-control" placeholder="Enter Reason">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer pt-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /Add Ban IP Address -->

    <!-- Edit Ban IP Address -->
    <div class="modal fade" id="edit-tax" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Ban IP Address</h5>
                    <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fe fe-x"></i>
                    </button>
                </div>
                <form action="{{ url('admin/ban-ip-address') }}">
                    <div class="modal-body py-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>IP Address</label>
                                    <input type="text" class="form-control" placeholder="Enter IP Address"
                                        value="210.10.444">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Reason for Ban</label>
                                    <input type="text" class="form-control" placeholder="Enter Reason"
                                        value="Lorem ipsum dolor sit amet">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer pt-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif

@if (Route::is(['system-backup']))
    <!--change email-modal -->
    <div class="modal fade" id="add-tax" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">System Backup</h5>
                    <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fe fe-x"></i>
                    </button>
                </div>
                <div class="modal-body py-0">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>File name</label>
                                <input type="text" class="form-control" placeholder="Enter file name">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Date</label>
                                <input type="text" class="form-control" placeholder="Enter Date">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pt-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
@endif

@if (Route::is(['database-backup']))
    <!--change email-modal -->
    <div class="modal fade" id="add-tax" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Database Backup</h5>
                    <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fe fe-x"></i>
                    </button>
                </div>
                <form action="{{ url('admin/database-backup') }}">
                    <div class="modal-body py-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>File name</label>
                                    <input type="text" class="form-control" placeholder="Enter file name">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="text" class="form-control" placeholder="Enter Date">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer pt-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif
