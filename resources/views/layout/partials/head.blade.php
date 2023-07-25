<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">

<!-- Fontawesome CSS -->
<link rel="stylesheet" href="{{url('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{url('assets/plugins/fontawesome/css/all.min.css')}}">

<!-- Fearther CSS -->
<link rel="stylesheet" href="{{url('assets/css/feather.css')}}">

<!-- select CSS -->
<link rel="stylesheet" href="{{url('assets/plugins/select2/css/select2.min.css')}}">
    
<!-- Owl carousel CSS -->
<link rel="stylesheet" href="{{url('assets/css/owl.carousel.min.css')}}">

@if(Route::is(['user-signup','provider-signup']))
<!-- Mobile CSS-->
<link rel="stylesheet" href="{{url('assets/plugins/intltelinput/css/intlTelInput.css')}}">
<link rel="stylesheet" href="{{url('assets/plugins/intltelinput/css/demo.css')}}">
@endif

@if(Route::is(['booking','service-information','customer-profile','security-settings','customer-notifications','connected-apps',
'provider-services','provider-booking','provider-payout','provider-availability','provider-holiday','provider-coupons','provider-addons','provider-offers',
'provider-reviews','provider-earnings','provider-chat','provider-appointment-settings','provider-profile-settings','provider-social-profile',
'provider-security-settings','payment-settings','provider-notifcations','provider-connected-apps','add-coupon','add-subscription','provider-book-details','customer-booking-calendar','provider-edit-service',
'provider-services-list','index-3','index-6']))
<!-- Datetimepicker CSS -->
<link rel="stylesheet" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endif

@if(Route::is(['service-grid','service-list','search','search-list']))
<!-- Rangeslider CSS -->
<link rel="stylesheet" href="{{url('assets/plugins/ion-rangeslider/css/ion.rangeSlider.min.css')}}">
@endif

@if(Route::is(['service-information','provider-edit-service']))
<!-- Ckeditor CSS -->
<link rel="stylesheet" href="{{url('assets/plugins/ckeditor/ckeditor.css')}}">
@endif

@if(Route::is(['customer-profile','provider-appointment-settings','provider-profile-settings','provider-social-profile','payment-settings']))
<!-- Bootstrap Tagsinput CSS -->
<link rel="stylesheet" href="{{url('assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}">
@endif

@if(Route::is(['security-settings','provider-security-settings','provider-plan','login-phone','login-phone1','provider-signup-payment','provider-signup-subscription']))
<!-- Mobile CSS-->
<link rel="stylesheet" href="{{url('assets/plugins/intltelinput/css/intlTelInput.css')}}">
<link rel="stylesheet" href="{{url('assets/plugins/intltelinput/css/demo.css')}}">
@endif

@if(Route::is(['provider-payout','provider-coupons','provider-offers','provider-earnings','provider-security-settings','provider-plan',
'provider-notifcations','provider-connected-apps','add-coupon','add-subscription','login-activity','provider-device-management','provider-login-activity','device-management']))
<!-- Datatables CSS -->
<link rel="stylesheet" href="{{url('assets/plugins/datatables/datatables.min.css')}}">
@endif

@if(Route::is(['provider-holiday','provider-book-details','customer-booking-calendar']))
<!-- Fullcalendar CSS -->
<link rel="stylesheet" href="{{url('assets/plugins/fullcalendar/main.min.css')}}">
<link rel="stylesheet" href="{{url('assets/plugins/fullcalendar/bootstrap-icons.css')}}">
@endif

@if(Route::is(['service-details']))
<!-- Fancybox CSS -->
<link rel="stylesheet" href="{{url('assets/plugins/fancybox/jquery.fancybox.min.css')}}">
@endif
@if(Route::is(['index','index-2','index-3','index-4','index-5','index-6','index-7','index-8','index-9']))
<!-- Aos CSS -->
<link rel="stylesheet" href="{{url('assets/plugins/aos/aos.css')}}">
@endif

<!-- Main CSS -->
<link rel="stylesheet" href="{{url('assets/css/style.css')}}">