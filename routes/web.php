<?php

use Illuminate\Support\Facades\Route;
use App\Models\Backend\User; // Update the namespace here


use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Backend\categoryController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\RegisterController;
use App\Http\Controllers\Backend\AuthController;
use App\Models\Service;
use App\Models\Backend\Category;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('admin/index_admin', [CustomAuthController::class, 'dashboard']); 
Route::get('admin/signin', [CustomAuthController::class, 'index'])->name('admin/signin');
Route::post('admin/custom-login', [CustomAuthController::class, 'customLogin'])->name('signin.custom'); 
Route::get('admin/signup', [CustomAuthController::class, 'registration'])->name('admin/signup');
Route::post('admin/custom-register', [CustomAuthController::class, 'customRegistration'])->name('signup.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('/', function () {
    return view('index');
})->name('index'); 
Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us'); 
Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');
Route::get('/how-it-works', function () {
    return view('how-it-works');
})->name('how-it-works');
Route::get('/error-404', function () {
    return view('error-404');
})->name('error-404');
Route::get('/error-500', function () {
    return view('error-500');
})->name('error-500');


Route::get('/choose-signup', function () {
    return view('choose-signup');
})->name('choose-signup');


Route::get('/user-signup', function () {
    return view('user-signup');
})->name('user-signup');

Route::get('/provider-signup', function () {
    return view('provider-signup');
})->name('provider-signup');

Route::post('/provider-signup', [AuthController::class, 'RegisterProvider'])->name('provider-signup');
Route::get('/logout', [AuthController::class, 'LogoutUser'])->name('log-out');
Route::post('/user-signup', [AuthController::class, 'RegisterUser'])->name('user-signup');


Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/reset-password', function () {
    return view('reset-password');
})->name('reset-password'); 
Route::get('/password-recovery', function () {
    return view('password-recovery');
})->name('password-recovery');
Route::get('/phone-otp', function () {
    return view('phone-otp');
})->name('phone-otp');
Route::get('/email-otp', function () {
    return view('email-otp');
})->name('email-otp');
Route::get('/free-trial', function () {
    return view('free-trial');
})->name('free-trial');
Route::get('/booking', function () {
    return view('booking');
})->name('booking');
Route::get('/booking-payment', function () {
    return view('booking-payment');
})->name('booking-payment');
Route::get('/booking-done', function () {
    return view('booking-done');
})->name('booking-done');


Route::get('/categories', function () {



    return view('categories');


})->name('categories');



Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');
Route::get('/faq', function () {
    return view('faq');
})->name('faq');
Route::get('/maintenance', function () {
    return view('maintenance');
})->name('maintenance');
Route::get('/coming-soon', function () {
    return view('coming-soon');
})->name('coming-soon');
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');
Route::get('/terms-condition', function () {
    return view('terms-condition');
})->name('terms-condition');
Route::get('/session-expired', function () {
    return view('session-expired');
})->name('session-expired');
Route::get('/blog-grid', function () {
    return view('blog-grid');
})->name('blog-grid');
Route::get('/blog-list', function () {
    return view('blog-list');
})->name('blog-list');
Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');
Route::get('/service-grid', function () {
    return view('service-grid');
})->name('service-grid');
Route::get('/service-list', function () {
    return view('service-list');
})->name('service-list');
Route::get('/search', function () {
    return view('search');
})->name('search');
Route::get('/providers', function () {
    return view('providers');
})->name('providers');
Route::get('/provider-details', function () {
    return view('provider-details');
})->name('provider-details');
Route::get('/service-information', function () {
    return view('service-information');
})->name('service-information');
Route::get('/customer-dashboard', function () {
    return view('customer-dashboard');
})->name('customer-dashboard');
Route::get('/customer-booking', function () {
    return view('customer-booking');
})->name('customer-booking');
Route::get('/customer-favourite', function () {
    return view('customer-favourite');
})->name('customer-favourite');
Route::get('/customer-wallet', function () {
    return view('customer-wallet');
})->name('customer-wallet');
Route::get('/customer-reviews', function () {
    return view('customer-reviews');
})->name('customer-reviews');
Route::get('/customer-chat', function () {
    return view('customer-chat');
})->name('customer-chat');
Route::get('/customer-profile', function () {
    return view('customer-profile');
})->name('customer-profile');
Route::get('/security-settings', function () {
    return view('security-settings');
})->name('security-settings');
Route::get('/customer-notifications', function () {
    return view('customer-notifications');
})->name('customer-notifications');
Route::get('/connected-apps', function () {
    return view('connected-apps');
})->name('connected-apps');
Route::get('/provider-dashboard', function () {
    return view('provider-dashboard');
})->name('provider-dashboard');
Route::get('/provider-services', function () {
    return view('provider-services');
})->name('provider-services');
Route::get('/provider-booking', function () {
    return view('provider-booking');
})->name('provider-booking');
Route::get('/provider-payout', function () {
    return view('provider-payout');
})->name('provider-payout');
Route::get('/provider-availability', function () {
    return view('provider-availability');
})->name('provider-availability');
Route::get('/provider-holiday', function () {
    return view('provider-holiday');
})->name('provider-holiday');
Route::get('/provider-coupons', function () {
    return view('provider-coupons');
})->name('provider-coupons');
Route::get('/provider-subscription', function () {
    return view('provider-subscription');
})->name('provider-subscription');
Route::get('/provider-addons', function () {
    return view('provider-addons');
})->name('provider-addons');
Route::get('/provider-offers', function () {
    return view('provider-offers');
})->name('provider-offers');
Route::get('/provider-reviews', function () {
    return view('provider-reviews');
})->name('provider-reviews');
Route::get('/provider-earnings', function () {
    return view('provider-earnings');
})->name('provider-earnings');
Route::get('/provider-chat', function () {
    return view('provider-chat');
})->name('provider-chat');
Route::get('/provider-appointment-settings', function () {
    return view('provider-appointment-settings');
})->name('provider-appointment-settings');
Route::get('/provider-profile-settings', function () {
    return view('provider-profile-settings');
})->name('provider-profile-settings');
Route::get('/provider-social-profile', function () {
    return view('provider-social-profile');
})->name('provider-social-profile');
Route::get('/provider-security-settings', function () {
    return view('provider-security-settings');
})->name('provider-security-settings');
Route::get('/provider-plan', function () {
    return view('provider-plan');
})->name('provider-plan');
Route::get('/payment-settings', function () {
    return view('payment-settings');
})->name('payment-settings');
Route::get('/provider-notifcations', function () {
    return view('provider-notifcations');
})->name('provider-notifcations');
Route::get('/provider-connected-apps', function () {
    return view('provider-connected-apps');
})->name('provider-connected-apps');
Route::get('/add-coupon', function () {
    return view('add-coupon');
})->name('add-coupon');
Route::get('/add-subscription', function () {
    return view('add-subscription');
})->name('add-subscription');
Route::get('/invoice', function () {
    return view('invoice');
})->name('invoice');
Route::get('/login-activity', function () {
    return view('login-activity');
})->name('login-activity');
Route::get('/login-email', function () {
    return view('login-email');
})->name('login-email');
Route::get('/login-phone', function () {
    return view('login-phone');
})->name('login-phone');
Route::get('/login-phone1', function () {
    return view('login-phone1');
})->name('login-phone1');
Route::get('/notification', function () {
    return view('notification');
})->name('notification');
Route::get('/orders', function () {
    return view('orders');
})->name('orders');
Route::get('/provider-book-details', function () {
    return view('provider-book-details');
})->name('provider-book-details');
Route::get('/provider-change-password', function () {
    return view('provider-change-password');
})->name('provider-change-password');
Route::get('/provider-device-management', function () {
    return view('provider-device-management');
})->name('provider-device-management');
Route::get('/provider-login-activity', function () {
    return view('provider-login-activity');
})->name('provider-login-activity');
Route::get('/search-list', function () {
    return view('search-list');
})->name('search-list');
Route::get('/success', function () {
    return view('success');
})->name('success');
Route::get('/change-password', function () {
    return view('change-password');
})->name('change-password');
Route::get('/customer-booking-calendar', function () {
    return view('customer-booking-calendar');
})->name('customer-booking-calendar');
Route::get('/device-management', function () {
    return view('device-management');
})->name('device-management');
Route::get('/provider-edit-service', function () {
    return view('provider-edit-service');
})->name('provider-edit-service');
Route::get('/provider-services-list', function () {
    return view('provider-services-list');
})->name('provider-services-list');
Route::get('/provider-signup-payment', function () {
    return view('provider-signup-payment');
})->name('provider-signup-payment');
Route::get('/provider-signup-subscription', function () {
    return view('provider-signup-subscription');
})->name('provider-signup-subscription');
Route::get('/service-details', function () {
    return view('service-details');
})->name('service-details');

Route::get('/index-2', function () {
    return view('index-2');
})->name('index-2');
Route::get('/index-3', function () {
    return view('index-3');
})->name('index-3');
Route::get('/index-4', function () {
    return view('index-4');
})->name('index-4');
Route::get('/index-5', function () {
    return view('index-5');
})->name('index-5');
Route::get('/index-6', function () {
    return view('index-6');
})->name('index-6');
Route::get('/index-7', function () {
    return view('index-7');
})->name('index-7');
Route::get('/index-8', function () {
    return view('index-8');
})->name('index-8');
Route::get('/index-9', function () {
    return view('index-9');
})->name('index-9');

Route::Group(['prefix' => 'admin'], function () { 

   

    Route::get('/index_admin', function () {
    return view('admin.index_admin');
    })->name('index_admin');

    
    //get services 
    Route::get('/services', function () {

    $services = Service::all();

    // return response()->json(['data'=>$services]);

    return view('admin.services', ['services' => $services]);

    })->name('services');



    Route::get('/pending-services', function () {
    return view('admin.pending-services');
    })->name('pending-services');

    Route::get('/deleted-services', function () {
    return view('admin.deleted-services');
    })->name('deleted-services');

    Route::get('/inactive-services', function () {
    return view('admin.inactive-services');
    })->name('inactive-services');

########## add servive GET

    Route::get('/add-service', function () {
        $categories = Category::all();
        // return response()->json($categories);

        return view('admin.add-service', ['categories' => $categories]);
    })->name('add-service');

########## add servive POST

    Route::post('/add-service', [ServiceController::class, 'store'])->name('add-service');

########## add servive DELETE


Route::post('delete-service/{service_slug}', [ServiceController::class, 'destroy'])->name('delete-service');

########## add servive EDIT

Route::get('/edit-service/{slug}', [ServiceController::class, 'edit'])->name('edit-service');


########## add servive UPDATE

Route::post('/edit-service/{slug}', [ServiceController::class, 'update'])->name('update-service');



    Route::get('/sub-categories', function () {
    return view('admin.sub-categories');
    })->name('sub-categories');

    Route::get('/add-subcategories', function () {
    return view('admin.add-subcategories');
    })->name('add-subcategories');

    Route::get('/edit-subcategories', function () {
    return view('admin.edit-subcategories');
    })->name('edit-subcategories');

    Route::get('/add-categories', function () {
    return view('admin.add-categories');
    })->name('add-categories');

    //post requests categories 
    Route::post('/add-categories', [categoryController::class, 'create'])->name('add-categories'); 

    //get categories
        Route::get('/categories', function () {
    
            $categories = Category::all();
        
            // return response()->json($categories);
        
            return view('admin.categories', ['categories'=>$categories]);
        
            })->name('categories');

    //add categories   
    Route::post('/add-categories', [categoryController::class, 'create'])->name('add-categories'); 

    //delete categories 
    Route::post('/delete-categories', [categoryController::class, 'delete'])->name('delete-categories'); 

    //edit categories 
    Route::get('/edit-categories/{slug}', function ($slug) {
        $category = Category::where('category_slug', $slug)->first();
        // return response()->json($category);
        return view('admin.edit-categories', compact('category'));
    })->name('edit-categories');

    //edit categories post
    Route::put('/edit-categories', [categoryController::class, 'update'])->name('edit-categories'); 


    Route::get('/review-type', function () {
    return view('admin.review-type');
    })->name('review-type');

    Route::get('/add-reviewtype', function () {
    return view('admin.add-reviewtype');
    })->name('add-reviewtype');

    Route::get('/review', function () {
    return view('admin.review');
    })->name('review');

    Route::get('/edit-reviewtype', function () {
    return view('admin.edit-reviewtype');
    })->name('edit-reviewtype');

    Route::get('/booking', function () {
    return view('admin.booking');
    })->name('booking');

    Route::get('/pending-booking', function () {
    return view('admin.pending-booking');
    })->name('pending-booking');

    Route::get('/inprogress-booking', function () {
    return view('admin.inprogress-booking');
    })->name('inprogress-booking');
    
    Route::get('/completed-booking', function () {
    return view('admin.completed-booking');
    })->name('completed-booking');
    
    Route::get('/cancelled-booking', function () {
    return view('admin.cancelled-booking');
    })->name('cancelled-booking');

    Route::get('/banktransferlist', function () {
    return view('admin.banktransferlist');
    })->name('banktransferlist');

    Route::get('/approved-transferlist', function () {
    return view('admin.approved-transferlist');
    })->name('approved-transferlist');

    Route::get('/pending-transferlist', function () {
    return view('admin.pending-transferlist');
    })->name('pending-transferlist');

    Route::get('/successful-transferlist', function () {
    return view('admin.successful-transferlist');
    })->name('successful-transferlist');

    Route::get('/rejected-transferlist', function () {
    return view('admin.rejected-transferlist');
    })->name('rejected-transferlist');

    Route::get('/wallet', function () {
    return view('admin.wallet');
    })->name('wallet');

    Route::get('/refund-request', function () {
    return view('admin.refund-request');
    })->name('refund-request');

    Route::get('/wallet-history', function () {
    return view('admin.wallet-history');
    })->name('wallet-history');

    Route::get('/cash-on-delivery', function () {
    return view('admin.cash-on-delivery');
    })->name('cash-on-delivery');

    Route::get('/payout-request', function () {
    return view('admin.payout-request');
    })->name('payout-request');

    Route::get('/add-payout', function () {
    return view('admin.add-payout');
    })->name('add-payout');

    Route::get('/payout-settings', function () {
    return view('admin.payout-settings');
    })->name('payout-settings');

    Route::get('/sales-transactions', function () {
    return view('admin.sales-transactions');
    })->name('sales-transactions');

    Route::get('/tax-rates', function () {
    return view('admin.tax-rates');
    })->name('tax-rates');

    Route::get('/chat', function () {
    return view('admin.chat');
    })->name('chat');

    Route::get('/add-page', function () {
    return view('admin.add-page');
    })->name('add-page');

    Route::get('/pages-list', function () {
    return view('admin.pages-list');
    })->name('pages-list');

    Route::get('/page-list', function () {
    return view('admin.page-list');
    })->name('page-list');
    
    Route::get('/edit-page', function () {
    return view('admin.edit-page');
    })->name('edit-page');

    Route::get('/all-blog', function () {
    return view('admin.all-blog');
    })->name('all-blog');
    
    Route::get('/pending-blog', function () {
    return view('admin.pending-blog');
    })->name('pending-blog');

    Route::get('/inactive-blog', function () {
    return view('admin.inactive-blog');
    })->name('inactive-blog');
    
    Route::get('/add-blog', function () {
    return view('admin.add-blog');
    })->name('add-blog');

    Route::get('/blogs-categories', function () {
    return view('admin.blogs-categories');
    })->name('blogs-categories');

    Route::get('/add-blog-categories', function () {
    return view('admin.add-blog-categories');
    })->name('add-blogs-categories');

    Route::get('/edit-blog-categories', function () {
    return view('admin.edit-blog-categories');
    })->name('edit-blog-categories');

    Route::get('/blogs-comments', function () {
    return view('admin.blogs-comments');
    })->name('blogs-comments');

    Route::get('/countries', function () {
    return view('admin.countries');
    })->name('countries');

    Route::get('/add-countries', function () {
    return view('admin.add-countries');
    })->name('add-countries');

    Route::get('/edit-countries', function () {
    return view('admin.edit-countries');
    })->name('edit-countries');

    Route::get('/states', function () {
    return view('admin.states');
    })->name('states');

    Route::get('/add-states', function () {
    return view('admin.add-states');
    })->name('add-states');

    Route::get('/edit-state', function () {
    return view('admin.edit-state');
    })->name('edit-state');

    Route::get('/cities', function () {
    return view('admin.cities');
    })->name('cities');

    Route::get('/add-city', function () {
    return view('admin.add-city');
    })->name('add-city');

    Route::get('/edit-city', function () {
    return view('admin.edit-city');
    })->name('edit-city');

    Route::get('/testimonials', function () {
    return view('admin.testimonials');
    })->name('testimonials');

    Route::get('/add-testimonials', function () {
    return view('admin.add-testimonials');
    })->name('add-testimonials');

    Route::get('/edit-testimonials', function () {
    return view('admin.edit-testimonials');
    })->name('edit-testimonials');

    Route::get('/faq', function () {
    return view('admin.faq');
    })->name('faq');

    Route::get('/membership', function () {
    return view('admin.membership');
    })->name('membership');

    Route::get('/membership-addons', function () {
    return view('admin.membership-addons');
    })->name('membership-addons');

    Route::get('/add-membership', function () {
    return view('admin.add-membership');
    })->name('add-membership');

    Route::get('/admin-earnings', function () {
    return view('admin.admin-earnings');
    })->name('admin-earnings');

    Route::get('/provider-earnings', function () {
    return view('admin.provider-earnings');
    })->name('provider-earnings');

    Route::get('/membership-transaction', function () {
    return view('admin.membership-transaction');
    })->name('membership-transaction');

    Route::get('/user-list', function () {
    return view('admin.user-list');
    })->name('user-list');

    Route::get('/add-user', function () {
    return view('admin.add-user');
    })->name('add-user');

    Route::get('/edit-user', function () {
    return view('admin.edit-user');
    })->name('edit-user');

    Route::get('/user-customers', function () {
    return view('admin.user-customers');
    })->name('user-customers');

    Route::get('/add-customer', function () {
    return view('admin.add-customer');
    })->name('add-customer');

    Route::get('/edit-customer', function () {
    return view('admin.edit-customer');
    })->name('edit-customer');

    Route::get('/user-providers', function () {
    return view('admin.user-providers');
    })->name('user-providers');

    Route::get('/edit-provider', function () {
    return view('admin.edit-provider');
    })->name('edit-provider');

    Route::get('/add-provider', function () {
    return view('admin.add-provider');
    })->name('add-provider');

    Route::get('/roles-permissions', function () {
    return view('admin.roles-permissions');
    })->name('roles-permissions');

    Route::get('/role-permission', function () {
    return view('admin.role-permission');
    })->name('role-permission');

    Route::get('/delete-account-requests', function () {
    return view('admin.delete-account-requests');
    })->name('delete-account-requests');

    Route::get('/marketing-coupons', function () {
    return view('admin.marketing-coupons');
    })->name('marketing-coupons');

    Route::get('/edit-coupon', function () {
    return view('admin.edit-coupon');
    })->name('edit-coupon');

    Route::get('/marketing-service', function () {
    return view('admin.marketing-service');
    })->name('marketing-service');

    Route::get('/edit-offer', function () {
    return view('admin.edit-offer');
    })->name('edit-offer');

    Route::get('/marketing-featured', function () {
    return view('admin.marketing-featured');
    })->name('marketing-featured');

    Route::get('/view-service', function () {
    return view('admin.view-service');
    })->name('view-service');

    Route::get('/marketing-newsletter', function () {
    return view('admin.marketing-newsletter');
    })->name('marketing-newsletter');

    Route::get('/cachesystem', function () {
    return view('admin.cachesystem');
    })->name('cachesystem');

    Route::get('/email-templates', function () {
    return view('admin.email-templates');
    })->name('email-templates');

    Route::get('/edit-email-template', function () {
    return view('admin.edit-email-template');
    })->name('edit-email-template');

    Route::get('/sms-templates', function () {
    return view('admin.sms-templates');
    })->name('sms-templates');

    Route::get('/edit-sms-template', function () {
    return view('admin.edit-sms-template');
    })->name('edit-sms-template');

    Route::get('/menu-management', function () {
    return view('admin.menu-management');
    })->name('menu-management');

    Route::get('/edit-managemenet', function () {
    return view('admin.edit-managemenet');
    })->name('edit-managemenet');

    Route::get('/create-menu', function () {
    return view('admin.create-menu');
    })->name('create-menu');

    Route::get('/plugins-manager', function () {
    return view('admin.plugins-manager');
    })->name('plugins-manager');

    Route::get('/available-plugins', function () {
    return view('admin.available-plugins');
    })->name('available-plugins');

    Route::get('/website-settings', function () {
    return view('admin.website-settings');
    })->name('website-settings');

    Route::get('/contact-messages', function () {
    return view('admin.contact-messages');
    })->name('contact-messages');

    Route::get('/contact-messages-view', function () {
    return view('admin.contact-messages-view');
    })->name('contact-messages-view');

    Route::get('/abuse-reports', function () {
    return view('admin.abuse-reports');
    })->name('abuse-reports');

    Route::get('/announcements', function () {
    return view('admin.announcements');
    })->name('announcements');

    Route::get('/add-announcement', function () {
    return view('admin.add-announcement');
    })->name('add-announcement');

    Route::get('/edit-announcement', function () {
    return view('admin.edit-announcement');
    })->name('edit-announcement');

    Route::get('/localization', function () {
    return view('admin.localization');
    })->name('localization');

    Route::get('/account-settings', function () {
    return view('admin.account-settings');
    })->name('account-settings');

    Route::get('/security', function () {
    return view('admin.security');
    })->name('security');

    Route::get('/change-password', function () {
    return view('admin.change-password');
    })->name('change-password');

    Route::get('/device-management', function () {
    return view('admin.device-management');
    })->name('device-management');

    Route::get('/login-activity', function () {
    return view('admin.login-activity');
    })->name('login-activity');

    Route::get('/social-profiles', function () {
    return view('admin.social-profiles');
    })->name('social-profiles');

    Route::get('/notifications', function () {
    return view('admin.notifications');
    })->name('notifications');

    Route::get('/connected-apps', function () {
    return view('admin.connected-apps');
    })->name('connected-apps');

    Route::get('/site-information', function () {
    return view('admin.site-information');
    })->name('site-information');

    Route::get('/seo-settings', function () {
    return view('admin.seo-settings');
    })->name('seo-settings');

    Route::get('/preference-settings', function () {
    return view('admin.preference-settings');
    })->name('preference-settings');

    Route::get('/appearance', function () {
    return view('admin.appearance');
    })->name('appearance');

    Route::get('/header-settings', function () {
    return view('admin.header-settings');
    })->name('header-settings');

    Route::get('/footer-settings', function () {
    return view('admin.footer-settings');
    })->name('footer-settings');

    Route::get('/authentication-settings', function () {
    return view('admin.authentication-settings');
    })->name('authentication-settings');

    Route::get('/social-authentication', function () {
    return view('admin.social-authentication');
    })->name('social-authentication');

    Route::get('/language', function () {
    return view('admin.language');
    })->name('language');

    Route::get('/facebook-api', function () {
    return view('admin.facebook-api');
    })->name('facebook-api');

    Route::get('/google-api', function () {
    return view('admin.google-api');
    })->name('google-api');

    Route::get('/email-settings', function () {
    return view('admin.email-settings');
    })->name('email-settings');

    Route::get('/php-mail', function () {
    return view('admin.php-mail');
    })->name('php-mail');

    Route::get('/smtp', function () {
    return view('admin.smtp');
    })->name('smtp');

    Route::get('/sms-settings', function () {
    return view('admin.sms-settings');
    })->name('sms-settings');

    Route::get('/nexmo', function () {
    return view('admin.nexmo');
    })->name('nexmo');

    Route::get('/gdpr-settings', function () {
    return view('admin.gdpr-settings');
    })->name('gdpr-settings');

    Route::get('/payment-gateways', function () {
    return view('admin.payment-gateways');
    })->name('payment-gateways');

    Route::get('/paypal', function () {
    return view('admin.paypal');
    })->name('paypal');

    Route::get('/payment-settings', function () {
    return view('admin.payment-settings');
    })->name('payment-settings');

    Route::get('/currencies', function () {
    return view('admin.currencies');
    })->name('currencies');

    Route::get('/currency-settings', function () {
    return view('admin.currency-settings');
    })->name('currency-settings');

    Route::get('/service-settings', function () {
    return view('admin.service-settings');
    })->name('service-settings');

    Route::get('/email-storage-settings', function () {
    return view('admin.email-storage-settings');
    })->name('email-storage-settings');

    Route::get('/provider-settings', function () {
    return view('admin.provider-settings');
    })->name('provider-settings');

    Route::get('/storage-settings', function () {
    return view('admin.storage-settings');
    })->name('storage-settings');

    Route::get('/aws-storage', function () {
    return view('admin.aws-storage');
    })->name('aws-storage');

    Route::get('/ban-ip-address', function () {
    return view('admin.ban-ip-address');
    })->name('ban-ip-address');

    Route::get('/cronjob', function () {
    return view('admin.cronjob');
    })->name('cronjob');

    Route::get('/system-backup', function () {
    return view('admin.system-backup');
    })->name('system-backup');

    Route::get('/database-backup', function () {
    return view('admin.database-backup');
    })->name('database-backup');

    Route::get('/system-information', function () {
    return view('admin.system-information');
    })->name('system-information');

    Route::get('/signin', function () {
    return view('admin.signin');
    })->name('signin');

    Route::get('/forget-password', function () {
    return view('admin.forget-password');
    })->name('forget-password');

    Route::get('/signup', function () {
    return view('admin.signup');
    })->name('signup');

    Route::get('/edit-blog', function () {
    return view('admin.edit-blog');
    })->name('edit-blog');

});