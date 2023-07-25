@if(Route::is(['customer-wallet']))
<!-- Add Wallet -->
<div class="modal fade custom-modal" id="add-wallet">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom-0 justify-content-between">
                <h5 class="modal-title">Add Wallet</h5>
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
            </div>
            <div class="modal-body pt-0">
                <form action="#">
                    <div class="wallet-add">
                        <div class="form-group">
                            <label class="col-form-label">Amount</label>
                            <input type="text" class="form-control" placeholder="Enter Amount">
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="bank-selection">
                                    <input type="radio" value="attach_link" id="rolelink" name="attachment" checked="">
                                    <label for="rolelink">
                                        <img src="{{ URL::asset('/assets/img/paypal.png')}}" alt="">
                                        <span class="role-check"><i class="fa-solid fa-circle-check"></i></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bank-selection">
                                    <input type="radio" value="attach_link" id="rolelink1" name="attachment">
                                    <label for="rolelink1">
                                        <img src="{{ URL::asset('/assets/img/stripe.png')}}" alt="">
                                        <span class="role-check"><i class="fa-solid fa-circle-check"></i></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bank-selection">
                                    <input type="radio" value="attach_link" id="rolelink2" name="attachment">
                                    <label for="rolelink2">
                                        <img src="{{ URL::asset('/assets/img/bank.png')}}" alt="">
                                        <span class="role-check"><i class="fa-solid fa-circle-check"></i></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-submit text-end">
                            <a href="javascript:;" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>								
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add Wallet -->
@endif
@if(Route::is(['customer-booking','provider-booking']))
<!-- Add Review -->
<div class="modal fade custom-modal" id="add-review">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header border-bottom-0 justify-content-between">
                <h5 class="modal-title">Write A Review</h5>
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
            </div>
            <div class="modal-body pt-0">
                <form action="customer-booking">
                    <div class="write-review">
                        <div class="review-add">
                            <div class="rev-img">
                                <img src="{{ URL::asset('/assets/img/services/service-19.jpg')}}" alt="">
                            </div>
                            <div class="rev-info">
                                <h6>Computer Services</h6>
                                <p>Newyork, USA</p>
                            </div>
                        </div>
                        <div class="form-group form-info">
                            <label class="col-form-label">Rate The Service</label>
                            <div class="rating rating-select mb-0">
                                <a href="javascript:void(0);"><i class="fas fa-star filled"></i></a>
                                <a href="javascript:void(0);"><i class="fas fa-star filled"></i></a>
                                <a href="javascript:void(0);"><i class="fas fa-star filled"></i></a>
                                <a href="javascript:void(0);"><i class="fas fa-star filled"></i></a>
                                <a href="javascript:void(0);"><i class="fas fa-star"></i></a>
                            </div>
                        </div>
                        <div class="form-group form-info">
                            <label class="col-form-label">Write your Review</label>
                            <textarea class="form-control" rows="4" placeholder="Please write your review"></textarea>
                        </div>
                        <div class="modal-submit text-end">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>								
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add Review -->
@endif
@if(Route::is(['customer-profile','security-settings','customer-notifications','connected-apps','provider-dashboard','provider-services','provider-payout',
'provider-availability','provider-holiday','provider-coupons','provider-subscription','provider-addons','provider-offers','provider-reviews',
'provider-earnings','provider-chat','provider-appointment-settings','provider-profile-settings','provider-social-profile','provider-security-settings',
'provider-plan','payment-settings','provider-notifcations','provider-connected-apps','add-subscription','provider-book-details','index-9','index-8','index-7','index-6','index-5','index-4','index-3','index-2','index']))
<!-- Delete Account -->
<div class="modal fade custom-modal" id="del-account">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom-0 justify-content-between">
                <h5 class="modal-title">Delete Account</h5>
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
            </div>
            <div class="modal-body pt-0">
                <div class="write-review">
                    <form action="login">
                        <p>Are you sureyou want to delete This Account? To delete your account, Type your password.</p>
                        <div class="form-group">
                            <label class="col-form-label">Password</label>
                            <div class="pass-group">
                                <input type="password" class="form-control pass-input" placeholder="*************">
                                <span class="toggle-password feather-eye"></span>
                            </div>
                        </div>
                        <div class="modal-submit text-end">
                            <a href="javascript:;" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-danger">Delete Account</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Account -->
@endif
@if(Route::is(['security-settings','provider-security-settings']))
<!-- Change Email -->
<div class="modal fade custom-modal" id="change-email">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header border-bottom-0 justify-content-between">
                <h5 class="modal-title">Change Email</h5>
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
            </div>
            <div class="modal-body pt-0">
                <form action="provider-security-settings">
                    <div class="wallet-add">
                        <div class="form-group">
                            <label class="col-form-label">Current Email Address</label>
                            <input type="email" class="form-control" placeholder="Enter Email Address">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">New Email Address <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" placeholder="Enter Email Address">
                            <p class="brief-bio mb-0 mt-2"><i class="feather-alert-circle"></i> New Email Address Only Updated Once You Verified</p>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Confirm New Password</label>
                            <div class="pass-group">
                                <input type="password" class="form-control pass-input" placeholder="*************">
                                <span class="toggle-password feather-eye"></span>
                            </div>
                        </div>
                        <div class="modal-submit text-end">
                            <a href="javascript:;" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</a>
                            <button class="btn btn-primary">Change Email</button>
                        </div>								
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Change Email -->

<!-- Change Phone  -->
<div class="modal fade custom-modal" id="change-phone">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header border-bottom-0 justify-content-between">
                <h5 class="modal-title">Change Phone Number</h5>
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
            </div>
            <div class="modal-body pt-0">
                <form action="provider-security-settings">
                    <div class="wallet-add">
                        <div class="form-group">
                            <label class="col-form-label">Current Phone Number</label>
                            <input class="form-control form-control-lg group_formcontrol" id="phone" name="phone" type="text" placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">New Phone Number <span class="text-danger">*</span></label>
                            <input class="form-control form-control-lg group_formcontrol" id="phone1" name="phone" type="text"  placeholder="Enter Phone Number">
                            <p class="brief-bio mb-0 mt-2"><i class="feather-alert-circle"></i> New Phone Number Only Updated Once You Verified</p>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Confirm New Password</label>
                            <div class="pass-group">
                                <input type="password" class="form-control pass-input" placeholder="*************">
                                <span class="toggle-password feather-eye"></span>
                            </div>
                        </div>
                        <div class="modal-submit text-end">
                            <a href="javascript:;" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</a>
                            <button class="btn btn-primary">Change Number</button>
                        </div>								
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Change Phone  -->
@endif
@if(Route::is(['provider-services','provider-services-list']))
<!-- Inactive Service -->
<div class="modal fade custom-modal" id="in-active">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom-0 justify-content-between">
                <h5 class="modal-title">Inactive Service</h5>
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
            </div>
            <div class="modal-body pt-0">
                <div class="write-review">
                    <form action="provider-services">
                        <p>Are you sure want to inactive this service?</p>
                        <div class="modal-submit text-end">
                            <a href="javascript:;" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Inactive Service -->

<!-- Active Service -->
<div class="modal fade custom-modal" id="active">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom-0 justify-content-between">
                <h5 class="modal-title">Active Service</h5>
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
            </div>
            <div class="modal-body pt-0">
                <div class="write-review">
                    <form action="provider-services">
                        <p>Are you sure want to active this service?</p>
                        <div class="modal-submit text-end">
                            <a href="javascript:;" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Inactive Service -->

<!-- Delete Service -->
<div class="modal fade custom-modal" id="del-service">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom-0 justify-content-between">
                <h5 class="modal-title">Delete Service</h5>
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
            </div>
            <div class="modal-body pt-0">
                <div class="write-review">
                    <form action="provider-services">
                        <p>Are you sure want to Delete this service?</p>
                        <div class="modal-submit text-end">
                            <a href="javascript:;" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Service -->
@endif
@if(Route::is(['provider-payout']))
<!-- Add Wallet -->
<div class="modal fade custom-modal" id="add-payout">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header border-bottom-0 justify-content-between pb-0">
                <h5 class="modal-title">Set Your Payouts</h5>
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
            </div>
            <div class="modal-body">
                <form action="provider-payout">
                    <div class="wallet-add">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="bank-selection">
                                    <input type="radio" value="attach_link" id="rolelink" name="attachment" checked="">
                                    <label for="rolelink">
                                        <img src="{{ URL::asset('/assets/img/paypal.png')}}" alt="">
                                        <span class="role-check"><i class="fa-solid fa-circle-check"></i></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bank-selection">
                                    <input type="radio" value="attach_link" id="rolelink1" name="attachment">
                                    <label for="rolelink1">
                                        <img src="{{ URL::asset('/assets/img/stripe.png')}}" alt="">
                                        <span class="role-check"><i class="fa-solid fa-circle-check"></i></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bank-selection">
                                    <input type="radio" value="attach_link" id="rolelink2" name="attachment">
                                    <label for="rolelink2">
                                        <img src="{{ URL::asset('/assets/img/bank.png')}}" alt="">
                                        <span class="role-check"><i class="fa-solid fa-circle-check"></i></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Card Number</label>
                            <input type="text" class="form-control" placeholder="Enter Card Number">
                        </div>
                        <div class="modal-submit text-end">
                            <a href="javascript:;" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>								
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add Wallet -->
@endif
@if(Route::is(['provider-holiday']))
<!-- Add Holiday -->
<div class="modal fade custom-modal" id="add-holiday">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header border-bottom-0 justify-content-between">
                <h5 class="modal-title">Add Holiday</h5>
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
            </div>
            <div class="modal-body pt-0">
                <form action="#">
                    <div class="wallet-add">
                        <div class="form-group">
                            <label class="col-form-label">Holiday Name</label>
                            <input type="text" class="form-control" placeholder="Enter Holiday Name">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">From</label>
                            <div class="form-icon">
                                <input type="text" class="form-control datetimepicker" placeholder="Select Date">
                                <span class="cus-icon">
                                    <i class="feather-calendar"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">To</label>
                            <div class="form-icon">
                                <input type="text" class="form-control datetimepicker" placeholder="Select Date">
                                <span class="cus-icon">
                                    <i class="feather-calendar"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Description</label>
                            <textarea class="form-control" rows="4" placeholder="Enter Description"></textarea>
                        </div>
                        <div class="modal-submit text-end">
                            <a href="javascript:;" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>								
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add Holiday -->

<!-- Add Leave -->
<div class="modal fade custom-modal" id="add-leave">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header border-bottom-0 justify-content-between">
                <h5 class="modal-title">Add Leave</h5>
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
            </div>
            <div class="modal-body pt-0">
                <form action="#">
                    <div class="wallet-add">
                        <div class="form-group">
                            <label class="col-form-label">From</label>
                            <div class="form-icon">
                                <input type="text" class="form-control datetimepicker" placeholder="Select Date">
                                <span class="cus-icon">
                                    <i class="feather-calendar"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">To</label>
                            <div class="form-icon">
                                <input type="text" class="form-control datetimepicker" placeholder="Select Date">
                                <span class="cus-icon">
                                    <i class="feather-calendar"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Reason</label>
                            <textarea class="form-control" rows="3" placeholder="Enter Reason"></textarea>
                        </div>
                        <div class="modal-submit text-end">
                            <a href="javascript:;" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>								
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add Leave -->

<!-- Alert Message -->
<div class="modal fade custom-modal" id="alertmsg">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header border-bottom-0 justify-content-between">
                <h5 class="modal-title">Alert Message</h5>
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
            </div>
            <div class="modal-body pt-0">
                <form action="#">
                    <div class="msg-alert">
                        <p>If You Take Your Appointment Automatically Cancelled.</p>
                    </div>
                    <div class="modal-submit text-end">
                        <a href="javascript:;" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Ok</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Alert Message -->
@endif
@if(Route::is(['provider-offers']))
<!-- Add Coupon -->
<div class="modal fade custom-modal" id="add-coupon">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header border-bottom-0 justify-content-between">
                <h5 class="modal-title">New Offer</h5>
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
            </div>
            <div class="modal-body pt-0">
                <form action="#">
                    <div class="wallet-add">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-form-label">Offer Type</label>
                                    <select class="select">
                                        <option>Select Type</option>
                                        <option>fixed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Start Date</label>
                                    <div class="form-icon">
                                        <input type="text" class="form-control datetimepicker" placeholder="Select Date">
                                        <span class="cus-icon"><i class="feather-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">End Date</label>
                                    <div class="form-icon">
                                        <input type="text" class="form-control datetimepicker" placeholder="Select Date">
                                        <span class="cus-icon"><i class="feather-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-submit text-end">
                            <a href="javascript:;" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>								
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add Coupon -->

<!-- Edit Coupon -->
<div class="modal fade custom-modal" id="edit-coupon">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header border-bottom-0 justify-content-between">
                <h5 class="modal-title">Edit Offer</h5>
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
            </div>
            <div class="modal-body pt-0">
                <form action="#">
                    <div class="wallet-add">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-form-label">Offer Type</label>
                                    <select class="select">
                                        <option>Select Type</option>
                                        <option>fixed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Start Date</label>
                                    <div class="form-icon">
                                        <input type="text" class="form-control datetimepicker" placeholder="Select Date">
                                        <span class="cus-icon"><i class="feather-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">End Date</label>
                                    <div class="form-icon">
                                        <input type="text" class="form-control datetimepicker" placeholder="Select Date">
                                        <span class="cus-icon"><i class="feather-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-submit text-end">
                            <a href="javascript:;" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>								
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Edit Coupon -->
@endif
@if(Route::is(['provider-book-details']))
<!-- Add Leave -->
<div class="modal fade custom-modal" id="add-reschedule">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header border-bottom-0 justify-content-between">
                <h5 class="modal-title">Reschedule Appointment</h5>
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
            </div>
            <div class="modal-body pt-0">
                <form action="#">
                    <div class="wallet-add">
                        <div class="form-group">
                            <label class="col-form-label">Appointment Date</label>
                            <div class="form-icon">
                                <input type="text" class="form-control datetimepicker" placeholder="Select appointment date">
                                <span class="cus-icon"><i class="feather-calendar"></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Appointment Time</label>
                            <div class="form-icon">
                                <input type="text" class="form-control timepicker" placeholder="Select appointment date">
                                <span class="cus-icon"><i class="feather-clock"></i></span>
                            </div>
                        </div>
                        <div class="modal-submit text-end">
                            <a href="javascript:;" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>								
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add Leave -->

<!-- Alert Message -->
<div class="modal fade custom-modal" id="alertmsg">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header border-bottom-0 justify-content-between">
                <h5 class="modal-title">Cancel Appointment</h5>
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
            </div>
            <div class="modal-body pt-0">
                <form action="#">
                    <div class="msg-alert">
                        <p>Are you sure you want to cnacel <span>John Doe</span> appointment on <span>Oct 28, 2023</span> at time <span>10AM - 12PM</span> </p>
                        <p>You wan't be able to revert this action later?</p>
                    </div>
                    <div class="modal-submit text-end">
                        <a href="javascript:;" class="btn btn-secondary me-2" data-bs-dismiss="modal">Dismiss</a>
                        <button type="submit" class="btn btn-primary">Yes, cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Alert Message -->

<!-- Booking Details -->
<div class="toggle-sidebar">
    <div class="sidebar-layout">
        <div class="sidebar-header">
            <h5>Booking Details</h5>
            <a href="javascript:;" class="sidebar-close"><i class="feather-x"></i></a>
        </div>
        <div class="sidebar-body">
            <div class="book-confirm bk-wrap">
                <div class="d-flex justify-content-between">
                    <h6>Services<span class="badge-success">Confirmed</span></h6>
                    <a href="javascript:;" class="edit-book"><i class="feather-edit"></i></a>
                </div>
                <ul>
                    <li><span class="bk-date"><i class="feather-calendar"></i> Date & Time  </span> : Oct 28, 2023 - 10AM to 12 AM</li>
                    <li><span class="bk-date"><i class="feather-map-pin"></i> Location  </span> : New York</li>
                    <li><span class="bk-date"><i class="feather-user"></i> User Name  </span> : John Smith</li>
                </ul>
                <div class="bk-action">
                    <a href="javascript:;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-reschedule"><i class="feather-user"></i> Reschedule</a>
                    <a href="javascript:;" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#alertmsg"><i class="feather-x-circle"></i> Cancel</a>
                </div>
            </div>
            <div class="book-customer bk-wrap">
                <h5>Customer Details</h5>
                <div class="d-flex flex-wrap">
                    <div class="book-email">
                        <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="">
                        <div>
                        <p>John Doe</p>
                        <p>john@gmail.com</p>
                        </div>
                    </div>
                    <div class="book-email-info">
                        <div>
                            <p>+1 888 888 8888</p>
                            <p>Montana, USA</p>
                        </div>
                        <a href="javascript:void(0)" class="btn btn-primary btn-mail"><img src="{{ URL::asset('/assets/img/icons/message.svg')}}" alt=""> Chat</a>
                    </div>
                </div>
            </div>
            <div class="bk-wrap">
                <h5>Appointment Message</h5>
                <p>Thanks for your interest in our services</p>
            </div>
            <div class="bk-wrap bk-service">
                <div>
                    <h5>House Cleaning Services</h5>
                    <p>quick and quality service</p>
                </div>
                <p class="bk-price">$100.00</p>
            </div>
            <div class="bk-wrap bk-history">
                <h4>Booking History</h4>
                <ul>
                    <li>
                        <span>
                            <i class="feather-calendar"></i>
                        </span>
                        <div class="book-crete">
                            <h6>Booking created</h6>
                            <p>Oct 28 2023 1:28 PM</p>
                        </div>
                    </li>
                    <li>
                        <span>
                            <i class="feather-user"></i>
                        </span>
                        <div class="book-crete">
                            <h6>Assigned to John Smith</h6>
                            <p>Oct 28 2023 1:28 PM</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /Booking Details -->
@endif
@if(Route::is(['security-settings','provider-security-settings']))
 <!-- Delete Service -->
 <div class="modal fade custom-modal" id="del-phone">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom-0 justify-content-between">
                <h5 class="modal-title">Phone Number Verification</h5>
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
            </div>
            <div class="modal-body pt-0">
                <div class="write-review">
                    @if(!Route::is(['provider-security-settings']))
                    <form action="security-settings">
                    @endif
                    @if(Route::is(['provider-security-settings']))
                    <form action="provider-security-settings">
                    @endif
                        <p>Are you sure want to delete?</p>
                        <div class="modal-submit text-end">
                            <button type="submit" class="btn btn-primary">Yes</button>
                            <a href="javascript:;" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

 <div class="modal fade custom-modal" id="del-email">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom-0 justify-content-between">
                <h5 class="modal-title">Email Verification</h5>
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
            </div>
            <div class="modal-body pt-0">
                <div class="write-review">
                    @if(!Route::is(['provider-security-settings']))
                    <form action="security-settings">
                    @endif
                    @if(Route::is(['provider-security-settings']))
                    <form action="provider-security-settings">
                    @endif
                        <p>Are you sure want to delete?</p>
                        <div class="modal-submit text-end">
                            <button type="submit" class="btn btn-primary">Yes</button>
                            <a href="javascript:;" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Service -->
@endif