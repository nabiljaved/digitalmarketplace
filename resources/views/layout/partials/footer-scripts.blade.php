<!-- jQuery -->
<script src="{{ URL::asset('/assets/js/jquery-3.6.1.min.js')}}"></script>
<!-- Bootstrap Core JS -->
<script src="{{ URL::asset('/assets/js/bootstrap.bundle.min.js')}}"></script>

<!-- Fearther JS -->
<script src="{{ URL::asset('/assets/js/feather.min.js')}}"></script>
		
<!-- Owl Carousel JS -->
<script src="{{ URL::asset('/assets/js/owl.carousel.min.js')}}"></script>

<!-- select JS -->
<script src="{{ URL::asset('/assets/plugins/select2/js/select2.min.js')}}"></script>

@if(Route::is(['user-signup','provider-signup']))
<!-- Mobile CSS-->
<script src="{{ URL::asset('/assets/plugins/intltelinput/js/intlTelInput.js')}}"></script>	
@endif

@if(Route::is(['reset-password','provider-change-password','change-password']))
<!-- Validation-->
<script src="{{ URL::asset('/assets/js/validation.js')}}"></script>	
@endif

@if(Route::is(['booking','service-information','customer-profile','security-settings','customer-notifications','connected-apps',
'provider-services','provider-booking','provider-payout','provider-availability','provider-holiday','provider-coupons','provider-subscription',
'provider-addons','provider-offers','provider-reviews','provider-earnings','provider-chat','provider-appointment-settings','provider-profile-settings',
'provider-social-profile','payment-settings','provider-notifcations','provider-connected-apps','add-coupon','add-subscription','provider-book-details','customer-booking-calendar','provider-edit-service',
'provider-services-list','index-3','index-6']))
<!-- Datetimepicker JS -->
<script src="{{ URL::asset('/assets/js/moment.min.js')}}"></script>
<script src="{{ URL::asset('/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
@endif

@if(Route::is(['blog-details','service-grid','service-list','search','customer-dashboard','customer-booking','customer-favourite','customer-wallet','customer-reviews','customer-profile',
'security-settings','customer-notifications','connected-apps','provider-appointment-settings','provider-profile-settings','provider-social-profile',
'payment-settings','search-list','customer-booking-calendar','service-details','blog-list']))
<!-- Sticky Sidebar JS -->
<script src="{{ URL::asset('/assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
<script src="{{ URL::asset('/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>
@endif

@if(Route::is(['service-grid','service-list','search','search-list']))
<!-- Rangeslider JS -->
<script src="{{ URL::asset('/assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
<script src="{{ URL::asset('/assets/plugins/ion-rangeslider/js/custom-rangeslider.js')}}"></script>
@endif

@if(Route::is(['security-settings','provider-security-settings','provider-plan','login-phone','login-phone1','provider-signup-payment','provider-signup-subscription']))
<!-- Mobile Input -->
<script src="{{ URL::asset('/assets/plugins/intltelinput/js/intlTelInput.js')}}"></script>	
@endif

@if(Route::is(['service-information','provider-edit-service']))
<!-- Slimscroll JS -->
<script src="{{ URL::asset('/assets/plugins/ckeditor/ckeditor.js')}}"></script>
@endif

@if(Route::is(['customer-profile','provider-appointment-settings','provider-profile-settings','provider-social-profile','payment-settings']))
<!-- Bootstrap Tagsinput JS -->
<script src="{{ URL::asset('/assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js')}}"></script>
@endif

@if(Route::is(['provider-dashboard','provider-services','provider-booking','provider-payout','provider-availability','provider-holiday','provider-coupons',
'provider-subscription','provider-addons','provider-offers','provider-reviews','provider-earnings','provider-chat','provider-appointment-settings',
'provider-profile-settings','provider-social-profile','provider-security-settings','provider-plan','payment-settings','provider-notifcations',
'provider-connected-apps','add-coupon','add-subscription','provider-book-details','provider-services-list']))
<!-- Slimscroll JS -->
<script src="{{ URL::asset('/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
@endif

@if(Route::is(['provider-payout','provider-coupons','provider-subscription','provider-offers','provider-earnings','provider-security-settings','provider-plan',
'provider-notifcations','provider-connected-apps','add-coupon','add-subscription','login-activity','provider-device-management','provider-login-activity','device-management']))
<!-- Datatables JS -->
<script src="{{ URL::asset('/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('/assets/plugins/datatables/datatables.min.js')}}"></script>	
@endif

@if(Route::is(['provider-holiday','provider-book-details','customer-booking-calendar']))
<!-- Fullcalendar JS -->
<script src="{{ URL::asset('/assets/plugins/fullcalendar/main.min.js')}}"></script>	
@endif

@if(Route::is(['provider-coupons','provider-offers','provider-earnings']))
<!-- Sweetalert 2 -->
<script src="{{ URL::asset('/assets/plugins/sweetalert/sweetalert2.all.min.js')}}"></script>
<script src="{{ URL::asset('/assets/plugins/sweetalert/sweetalerts.min.js')}}"></script>
@endif

@if(Route::is(['service-details']))
<!-- Fancybox JS -->
<script src="{{ URL::asset('/assets/plugins/fancybox/jquery.fancybox.min.js')}}"></script>
@endif

@if(Route::is(['index-2','index-3']))
<!-- Slick JS -->
<script src="{{ URL::asset('/assets/js/slick.js')}}"></script>
@endif

@if(Route::is(['index','index-2','index-3','index-4','index-5','index-6','index-7','index-8','index-9']))
<!-- Aos -->
<script src="{{ URL::asset('/assets/plugins/aos/aos.js')}}"></script>
<!-- Top JS -->
<script src="{{ URL::asset('/assets/js/backToTop.js')}}"></script>
@endif

@if(Route::is(['index-8','index-9']))
<!-- counterup JS -->
<script src="{{ URL::asset('/assets/js/jquery.waypoints.js')}}"></script>
<script src="{{ URL::asset('/assets/js/jquery.counterup.min.js')}}"></script>
@endif

<script src="{{ URL::asset('/assets/js/script.js')}}"></script>
