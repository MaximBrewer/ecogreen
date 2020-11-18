<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::namespace('App\Http\Controllers')->group(function (){

    Route::get('/modal', 'CabinetController@getModal')->name('modal');
    Route::get('/filter', 'SiteController@getItemsByChars')->name('filter');
    Route::get('/checkbox', 'SiteController@getFilter')->name('getFilter');
    Route::get('/get_products', 'SiteController@getProducts_jquery')->name('getProducts');
    Route::get('/footer_menus', 'ContentsController@footerMenus')->name('footer.menus');
    Route::get('/footer_news', 'ContentsController@footerNews')->name('footer.news');
    Route::get('/getFilter', 'SiteController@getProductOrder')->name('getProductOrder');
    Route::get('/new_messages', 'ChatRoomController@getNewMessages')->name('new_messages');
    Route::patch('/setting_update', 'CabinetController@settingUpdate')->name('setting.update');
    //cart count
    Route::get('/cart_count', 'CartController@countItems')->name('cart.count');
//    Route::get('/shtrix_chiz/{id}', 'CartController@shtrixChiz')->name('shtrix_chiz');

    //Cart for Guests
    Route::group(['prefix'=>'cart'], function (){
        Route::post('/add/{id}', 'CartController@storeGuest')->name('cart.guest.store');
        Route::patch('/update/{id}', 'CartController@updateGuest')->name('cart.guest.update');
        Route::delete('/delete/{id}', 'CartController@deleteGuest')->name('cart.guest.delete');
    });

    // Subscribe
    Route::post('/subscribe', 'SubscriptionController@store')->name('subscribe');
    // Generate order number
    Route::get('/order_nr_generate', 'CheckoutController@orderNrGenerate')->name('order_nr_generate');
    //Upload file rekvizits for entity
    Route::post('/upload_ent_files', 'CheckoutController@UploadEntFiles')->name('upload_ent_files');
});
