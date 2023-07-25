<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>Digital Market</title>

      <!-- Favicon -->
      @if(!Route::is(['index-2','index-3','index-9']))
      <link rel="shortcut icon" type="image/x-icon" href="{{url('assets/img/stand.png')}}">
      @endif
      @if(Route::is(['index-2','index-3','index-9']))
      <link rel="shortcut icon" href="{{url('assets/img/stand.png')}}">
      @endif
      @include('layout.partials.head')
    </head>
    @if(!Route::is(['error-404','error-500','choose-signup','user-signup','provider-signup','login','reset-password','password-recovery','phone-otp','email-otp','free-trial','booking','booking-payment','booking-done','maintenance','coming-soon','session-expired','service-information',
    'provider-dashboard','provider-services','provider-booking','provider-payout','provider-availability','provider-holiday','provider-coupons','provider-subscription',
    'provider-addons','provider-offers','provider-reviews','provider-earnings','provider-chat','provider-appointment-settings','provider-profile-settings','provider-social-profile',
    'provider-security-settings','provider-plan','payment-settings','provider-notifcations','provider-connected-apps','add-coupon','add-subscription','login-activity','login-email','login-phone',
    'login-phone1','provider-book-details','provider-change-password','provider-device-management','provider-login-activity','success','change-password','device-management','provider-edit-service','provider-services-list','provider-signup-payment',
    'provider-signup-subscription','index-3','index-4','index-5','index-6']))
    <body>
    @endif
    @if(Route::is(['provider-dashboard','provider-services','provider-booking','provider-payout','provider-availability','provider-holiday','provider-coupons','provider-subscription',
    'provider-addons','provider-offers','provider-reviews','provider-earnings','provider-chat','provider-appointment-settings','provider-profile-settings','provider-social-profile',
    'provider-security-settings','provider-plan','payment-settings','provider-notifcations','provider-connected-apps','add-coupon','add-subscription','provider-book-details','provider-services-list']))
    <body class="provider-body">
    @endif
    @if(Route::is(['choose-signup','user-signup','provider-signup','login','reset-password','password-recovery','phone-otp','email-otp','free-trial','login-activity','login-email','login-phone',
    'login-phone1','provider-change-password','success','change-password','provider-signup-payment','provider-signup-subscription']))
    <body class="login-body">
    @endif
    @if(Route::is(['error-404','error-500','booking','booking-payment','booking-done','maintenance','coming-soon','session-expired','service-information','provider-device-management','provider-login-activity','device-management','provider-edit-service']))
    <body class="mt-0">
    @endif
    @if(Route::is(['index-3']))
    <body class="home-page-three">
    @endif
    @if(Route::is(['index-4']))
    <body class="home-page-four">
    @endif
    @if(Route::is(['index-5','index-6']))
    <body class="home-page-five">
    @endif
      @if(!Route::is(['error-404','error-500','session-expired']))
      <div class="main-wrapper">
      @endif
      @if(Route::is(['session-expired']))
      <div class="main-wrapper error-page">
      @endif
        @if(!Route::is(['error-404','error-500','booking','booking-payment','booking-done','maintenance','coming-soon','session-expired','service-information','login-activity','provider-change-password','provider-device-management','provider-login-activity','change-password','device-management','provider-edit-service']))
          @include('layout.partials.header')
        @endif
        @if(Route::is(['provider-dashboard','provider-services','provider-booking','provider-payout','provider-availability','provider-holiday','provider-coupons','provider-subscription',
        'provider-addons','provider-offers','provider-reviews','provider-earnings','provider-chat','provider-appointment-settings','provider-profile-settings','provider-social-profile',
        'provider-security-settings','provider-plan','payment-settings','provider-notifcations','provider-connected-apps','add-coupon','add-subscription','provider-book-details','provider-services-list']))
        @include('layout.partials.nav')
        @endif
          @yield('content')
        @if(!Route::is(['error-404','error-500','choose-signup','user-signup','provider-signup','login','reset-password','password-recovery','phone-otp','email-otp','free-trial','booking','booking-payment','booking-done','maintenance','coming-soon','session-expired','service-information','customer-dashboard','customer-booking','customer-favourite','customer-wallet','customer-reviews','customer-chat',
        'customer-profile','security-settings','customer-notifications','connected-apps','provider-dashboard','provider-services','provider-booking','provider-payout','provider-availability','provider-holiday','provider-coupons','provider-subscription',
        'provider-addons','provider-offers','provider-reviews','provider-earnings','provider-chat','provider-appointment-settings','provider-profile-settings','provider-social-profile',
        'provider-security-settings','provider-plan','payment-settings','provider-notifcations','provider-connected-apps','add-coupon','add-subscription','invoice','login-activity',
        'login-email','login-phone','login-phone1','notification','orders','provider-book-details','provider-change-password','provider-device-management','provider-login-activity','success','change-password','customer-booking-calendar','device-management','provider-edit-service','provider-services-list',
        'provider-signup-payment','provider-signup-subscription']))
          @include('layout.partials.footer')
        @endif
          @include('layout.partials.cursor')
      </div>
        @include('layout.partials.footer-scripts')
    </body>
</html>