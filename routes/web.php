<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TicketRaiseController;
use App\Http\Controllers\AddSubscriptionController;
use App\Http\Controllers\EventSubscriptionController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StaffLoginController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\api\AuthApiController;
use App\Http\Controllers\EventFormController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\TicketIssueController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\frontend\RegisterFrontController;
use App\Http\Controllers\frontend\SearchFrontController;
use App\Http\Controllers\frontend\ProfileFrontController;
use App\Http\Controllers\frontend\SubscriptionFrontController;
use App\Http\Controllers\frontend\FavoriteFrontController;
use App\Http\Controllers\frontend\OptionsController;
use App\Http\Controllers\frontend\ReportUserFrontController;
use App\Http\Controllers\RazorpayPaymentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('frontend.index');
});

// Route::get('login', function () {
//     return view('frontend.login');
// });
Route::get('loginfront', [RegisterFrontController::class, 'Login'])->name('login');
Route::get('loginuser', [RegisterFrontController::class, 'LoggedIn']);
Route::post('loginuser', [RegisterFrontController::class, 'LoggedIn'])->name('loginuser');
Route::get('logoutuser', [RegisterFrontController::class, 'LogoutUser'])->name('logoutuser');
Route::get('forgot-password', function () {
    return view('frontend.forgot-password');
});

// Route::get('sign-up', function () {
//     return view('frontend.sign-up');
// });

Route::get('sign-up', [RegisterFrontController::class, 'Sign_up'])->name('signupuser');
Route::post('signupuser', [RegisterFrontController::class, 'Register']);

// Route::get('frontprofile', function () {
//     return view('frontend.profile');
// });
Route::get('userprofile', [ProfileFrontController::class, 'Profile'])->name('userprofile');
Route::post('multiimage', [ProfileFrontController::class, 'MultipleImageStore'])->name('multiimage');
Route::post('updateprofile', [ProfileFrontController::class, 'UpdateProfile'])->name('updateprofile');
Route::post('updatebaseinfo', [ProfileFrontController::class, 'Updatebaseinfo'])->name('updatebaseinfo');
Route::post('updatebio', [ProfileFrontController::class, 'Updatebio'])->name('updatebio');
Route::post('Updateaboume', [ProfileFrontController::class, 'Updateaboume'])->name('Updateaboume');
Route::post('update-image',[ProfileFrontController::class,'UpdateImage'])->name('update-image');

Route::post('events', [ProfileFrontController::class, 'EventFormStore'])->name('events');

// Route::get('other-profile', function () {
//     return view('frontend.other-profile');
// });
Route::get('subscription', [SubscriptionFrontController::class, 'ShowSubscription'])->name('subscription');
// Route::get('subscription', function () {
//     return view('frontend.subscription');
// });
Route::get('other-profile/{id}', [ProfileFrontController::class, 'otherProfile'])->name('other-profile');
Route::post('other-profile', [ProfileFrontController::class, 'otherProfile'])->name('other-profile');
// Route::get('interest', function () {
//     return view('frontend.interest');
// });
Route::get('interest', [FavoriteFrontController::class, 'showViewMe'])->name('interest');
// Route::get('interest', [FavoriteFrontController::class, 'favoriteList'])->name('interest');
// Route::post('viewed', [FavoriteFrontController::class, 'ViewMe'])->name('viewed');
Route::get('message', function () {
    return view('frontend.message');
});

// Route::get('search', function () {
//     return view('frontend.search');
// });
Route::get('search/', [SearchFrontController::class, 'Search'])->name('search');
Route::post('searchfav', [SearchFrontController::class, 'addFavorite'])->name('searchfav');

// Route::get('setting', function () {
//     return view('frontend.setting');
// });
Route::get('setting', [RegisterFrontController::class, 'Setting'])->name('setting');
Route::get('changepassword', [RegisterFrontController::class, 'ChangePassword'])->name('changepassword');
Route::post('changepassword', [RegisterFrontController::class, 'ChangePassword'])->name('changepassword');

// Route::get('hidden-member', function () {
//     return view('frontend.hidden-member');
// });

// Route::get('blocked-member', function () {
//     return view('frontend.blocked-member');
// });

Route::get('id-verified', function () {
    return view('frontend.id-verified');
});

// Route::get('event-form', function () {
//     return view('frontend.event-form');
// });
Route::get('event-form', [ProfileFrontController::class, 'EventForm'])->name('event-form');
// Route::get('options', function () {
//     return view('frontend.options');
// });
Route::get('options', [OptionsController::class, 'Option'])->name('options');

Route::get('wallet', function () {
    return view('frontend.wallet');
});

Route::get('razorpay-payment', [RazorpayPaymentController::class, 'index']);
Route::post('razorpay-payment', [RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');

Route::get('reported', [ReportUserFrontController::class, 'ReportUser'])->name('reported');
Route::post('reported', [ReportUserFrontController::class, 'ReportUser'])->name('reported');
Route::get('blocked/{id}', [ReportUserFrontController::class, 'BlockUser'])->name('blocked');
Route::post('blocked', [ReportUserFrontController::class, 'BlockUser'])->name('blocked');
Route::get('unblocked/{id}', [ReportUserFrontController::class, 'Unblock'])->name('unblocked');
Route::post('unblocked', [ReportUserFrontController::class, 'Unblock'])->name('unblocked');
Route::get('blocked-member', [ReportUserFrontController::class, 'ShowBlockUser'])->name('blocked-member');

Route::get('hidden-member', [ReportUserFrontController::class, 'ShowHideUser'])->name('hidden-member');
Route::get('hidemember/{id}', [ReportUserFrontController::class, 'HideUser'])->name('hidemember');
Route::post('hidemember', [ReportUserFrontController::class, 'HideUser'])->name('hidemember');
Route::get('unhide/{id}', [ReportUserFrontController::class, 'Unhide'])->name('unhide');
Route::post('unhide', [ReportUserFrontController::class, 'Unhide'])->name('unhide');

//admin panel routes

Route::get('/login', function () {
    return view('auth.login');
});


Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([ 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
        Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
          Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
        Route::get('profile/{id}',[UserController::class,'profile'])->name('user-admin.profile');
        Route::get('admin/verify-user/status/{status}/{id}',[UserController::class,'status']);
          Route::get('admin/block-user/status/{status}/{id}',[UserController::class,'blockStatus']);
        Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');
Route::get('logout',[LoginController::class,'logout'])->name('logout');

        Route::post('update-profile-info',[AdminController::class,'updateInfo'])->name('adminUpdateInfo');
        Route::post('change-profile-picture',[AdminController::class,'updatePicture'])->name('adminPictureUpdate');
        Route::post('change-password',[AdminController::class,'changePassword'])->name('adminChangePassword');
   
            Route::get('user/status/{status}/{id}',[UserController::class,'status']);
            Route::resource('userdata',UserController::class);
            Route::resource('addsubs',AddSubscriptionController::class);
            Route::resource('eventmember',EventSubscriptionController::class);
            Route::resource('ticketraise',TicketRaiseController::class);
            Route::get('categories/status/{status}/{id}',[TicketRaiseController::class,'status']);
            Route::resource('reportuser',ReportController::class);
            Route::resource('staff',StaffController::class);
            Route::resource('roles',RolesController::class);
            Route::get('admin/status/{status}/{id}',[ReportController::class,'status']);
             Route::resource('eventform',EventFormController::class);
            Route::resource('ticketissue',TicketIssueController::class);
            Route::resource('department',DepartmentController::class);
     Route::get('filtersearch',[FilterController::class,'show'])->name('filtersearch');
    Route::post('searchdata',[FilterController::class,'index']);
    Route::post('citydata',[FilterController::class,'cityFilter']);

    });

Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
    Route::get('profile',[UserController::class,'profile'])->name('user.profile');
    Route::get('settings',[UserController::class,'settings'])->name('user.settings');
    
            // Route::resource('userdata',UserController::class);
            // Route::resource('addsubs',AddSubscriptionController::class);
            // Route::resource('reportuser',ReportController::class);
            // Route::resource('staff',StaffController::class);
            // Route::resource('roles',RolesController::class);
            // Route::get('admin/status/{status}/{id}',[ReportController::class,'status']);

    
});

