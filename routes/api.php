<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AuthApiController;
use App\Http\Controllers\api\SearchingApiController;
use App\Http\Controllers\api\FavoriteApiController;
use App\Http\Controllers\api\ReportApiController;
use App\Http\Controllers\api\SubscriptionApiController;
use App\Http\Controllers\api\EventFormApiController;
use App\Http\Controllers\api\MultipleImageApiController;
use App\Http\Controllers\api\TicketRaiseApiController;
use App\Http\Controllers\api\WalletApiController;
use App\Http\Controllers\api\ImageApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('signup', [AuthApiController::class, 'signUp']);
Route::post('login', [AuthApiController::class, 'login']);
Route::post('userprofile', [AuthApiController::class, 'profileDetails']);
Route::post('viewuserprofile', [AuthApiController::class, 'viewProfileDetails']);
Route::post('forget-password', [AuthApiController::class, 'forgetPassword']);

Route::post('updateprofile', [AuthApiController::class, 'updateProfile']);

// Route::post('viewme', [AuthApiController::class, 'viewMe']);
Route::post('showviewme', [AuthApiController::class, 'showViewMe']);
Route::post('newest', [SearchingApiController::class, 'newest']);
Route::post('nearest', [SearchingApiController::class, 'nearest']);
Route::post('practice', [SearchingApiController::class, 'practice']);
Route::post('event-search', [SearchingApiController::class, 'searchByEvent']);

Route::post('search', [SearchingApiController::class, 'search']);
Route::post('recentactive', [SearchingApiController::class, 'recentActive']);
Route::post('addtofav', [FavoriteApiController::class, 'addFavorite']);
Route::post('favlist', [FavoriteApiController::class, 'favoriteList']);
Route::post('checkfavlist', [FavoriteApiController::class, 'checkfavoriteList']);
Route::post('allfavlist', [FavoriteApiController::class, 'allfavoriteList']);
Route::post('favme', [FavoriteApiController::class, 'favoriteMe']);
Route::post('favdelete', [FavoriteApiController::class, 'deleteFavorite']);
Route::post('reportuser', [ReportApiController::class, 'reportUser']);
Route::post('blockuser', [ReportApiController::class, 'blockUser']);
Route::post('hideuser', [ReportApiController::class, 'hideUser']);
Route::post('showhideuser', [ReportApiController::class, 'showHideUser']);
Route::post('showblockuser', [ReportApiController::class, 'showBlockUser']);
Route::post('subscription', [SubscriptionApiController::class, 'showSubscription']);
Route::post('addsubscription', [SubscriptionApiController::class, 'addSubscription']);
Route::post('subscriptionvalidity', [SubscriptionApiController::class, 'subscriptionValidity']);


Route::post('event', [EventFormApiController::class, 'eventFormStore']);
Route::post('multiple-image', [MultipleImageApiController::class, 'multipleImageStore']);
Route::post('ticket-raise', [TicketRaiseApiController::class, 'ticketRaise']);
Route::post('ticket-issue', [TicketRaiseApiController::class, 'getTicketProblem']);
Route::post('walletamount', [WalletApiController::class, 'ShowWalletAmount']);

Route::post('online', [SearchingApiController::class, 'activeUser']);
Route::post('offline', [SearchingApiController::class, 'inActiveUser']);
Route::post('onlineuser', [SearchingApiController::class, 'showOnlineUser']);
Route::post('uploadimage', [ImageApiController::class, 'imageStore']);
Route::post('showimage', [ImageApiController::class, 'showImage']);
