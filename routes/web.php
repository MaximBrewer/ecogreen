<?php

use BWF\DocumentTemplates\DocumentTemplates;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::namespace('App\Http\Controllers')->group(function (){

    Route::group(['prefix' => 'admin'], function () {
        Voyager::routes();
        // Product type packings
        Route::get('products/packings/{id}','ProductTypePackingsController@index')->name('packings.index');
        Route::post('products/packings','ProductTypePackingsController@store')->name('packings.store');
        Route::get('products/packings/create/{id}','ProductTypePackingsController@create')->name('packings.create');
        Route::get('products/packings/show/{show_id}','ProductTypePackingsController@show')->name('packings.show');
        Route::get('products/packings/{edit_id}/edit','ProductTypePackingsController@edit')->name('packings.edit');
        Route::post('products/packings/{update_id}','ProductTypePackingsController@update')->name('packings.update');
        Route::delete('products/packings/{destroy_id}','ProductTypePackingsController@destroy')->name('packings.destroy');
        // Product norms
        Route::get('products/norms/{id}','NormsController@index')->name('norms.index');
        Route::post('products/norms','NormsController@store')->name('norms.store');
        Route::get('products/norms/create/{id}','NormsController@create')->name('norms.create');
        Route::get('products/norms/show/{show_id}','NormsController@show')->name('norms.show');
        Route::get('products/norms/{edit_id}/edit','NormsController@edit')->name('norms.edit');
        Route::post('products/norms/{update_id}','NormsController@update')->name('norms.update');
        Route::delete('products/norms/{destroy_id}','NormsController@destroy')->name('norms.destroy');
        // Order documents
        Route::get('orders/documents/{id}','OrderDocumentController@index')->name('order.document.index');
        Route::post('orders/documents','OrderDocumentController@store')->name('order.document.store');
        Route::get('orders/documents/create/{id}','OrderDocumentController@create')->name('order.document.create');
        Route::get('orders/documents/show/{show_id}','OrderDocumentController@show')->name('order.document.show');
        Route::get('orders/documents/{edit_id}/edit','OrderDocumentController@edit')->name('order.document.edit');
        Route::post('orders/documents/{update_id}','OrderDocumentController@update')->name('order.document.update');
        Route::delete('orders/documents/{destroy_id}','OrderDocumentController@destroy')->name('order.document.destroy');
        // Order items for admin
        Route::get('orders/items/{id}','OrderItemsController@index')->name('order.items.index');
        Route::post('orders/items','OrderItemsController@store')->name('order.items.store');
        Route::get('orders/items/create/{id}','OrderItemsController@create')->name('order.items.create');
//        Route::get('orders/items/show/{show_id}','OrderItemsController@show')->name('order.items.show');
        Route::get('orders/items/{edit_id}/edit','OrderItemsController@edit')->name('order.items.edit');
        Route::post('orders/items/{update_id}','OrderItemsController@update')->name('order.items.update');
        Route::delete('orders/items/{destroy_id}','OrderItemsController@destroy')->name('order.items.destroy');
        // Doc generate with button in document-orders
        Route::get('orders/doc_generate/kp/{id}','OrderDocumentController@kp')->name('order.document.kp');
        Route::get('orders/doc_generate/schet/{id}','OrderDocumentController@schet')->name('order.document.schet');
        Route::get('orders/doc_generate/application/{id}','OrderDocumentController@application')->name('order.document.application');
        Route::get('orders/doc_generate/dogovor/{id}','OrderDocumentController@dogovor')->name('order.document.dogovor');

        //Chat room in admin side
        Route::get('chat-room/{id}/messages','ChatRoomController@questions')->name('chat_room.index');
        Route::post('chat-room/messages','ChatRoomController@sendQuestion')->name('chat_room.send');

        //Apply sale for cart in admin side
        Route::get('orders/sale/index/{id}','OrderSaleController@index')->name('order.sale.index');
        Route::get('orders/sale/edit/{id}','OrderSaleController@edit')->name('order.sale.edit');
        Route::post('orders/sale/apply/{id}','OrderSaleController@apply')->name('order.sale.apply');
    });

    /**************************** Auth Routes ***********************/
    Auth::routes();
    //verify_email
    Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
    Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
    //verify_phone
    Route::get('/verify/phone', function (){
        return view('auth.verify_phone');
    })->name('verify');
    Route::post('/verify/phone', 'PhoneVerifyController@verify')->name('verify.post');
    Route::post('/phone/resend', 'PhoneVerifyController@resend')->name('verify.phone.resend');
    /**************************** Verify ************************************/

    //Posts
    Route::get('/crop_guide', 'ContentsController@crop_guide')->name('crop_guide');
    Route::get('/crop_guide/{slug}', 'ContentsController@crop_guide_product')->name('crop_guide.product');
    Route::get('/brands/{slug}', 'ContentsController@crop_guide_brand')->name('crop_guide.brand');
    Route::get('/brands','ContentsController@getbrands')->name('getbrands');
    Route::get('/news', 'ContentsController@news')->name('news');
    Route::get('/news/{slug}', 'ContentsController@newsOne')->name('news.one');
    //Page add for Substances and Chemicals like Brands
    Route::get('/chemicals', 'ContentsController@getChemicals')->name('chemicals');
    Route::get('/substances', 'ContentsController@getSubstances')->name('substances');

    //Content pages
    Route::get('/', 'SiteController@index')->name('main');
    Route::get('/about_us', 'SiteController@about_us')->name('about_us');
    Route::get('/contacts', 'SiteController@contacts')->name('contacts');

    Route::post('/file','SiteController@fileModal')->name('fileModal');

    //Product pages
    Route::group(['prefix' => 'catalog'], function () {
        Route::get('/', 'SiteController@getProducts')->name('catalog');
        Route::get('/search', 'SiteController@search')->name('search');
        Route::get('/product/{id}', 'SiteController@getOneProduct')->name('catalog.product');
        Route::get('/order_product/{id}', 'SiteController@getProductOrder')->name('catalog.order');
        Route::get('/orderalpha', 'SiteController@getOrderAlpha')->name('product.order');
        Route::get('/chemical/{id}','ContentsController@chemical')->name('chemical');
        Route::get('/substance/{id}','ContentsController@substance')->name('substance');
        Route::get('/getProductDocument/{id}','SiteController@getProductDocument')->name('getProductDocument');
        Route::get('/zipfile/{id}','SiteController@getZipFile')->name('getZipFile');

    });

    //User cabinet
    Route::group(['prefix' => 'cabinet', 'middleware' => ['auth','verified']], function () {
        Route::get('/profile', 'CabinetController@profile')->name('cabinet.profile');
        Route::post('/profileUpdate','CabinetController@profile_update')->name('update');
        Route::put('/passwordUpdate','CabinetController@password_update')->name('cabinet.password_update');
        Route::get('/orders', 'CabinetController@orders')->name('orders');
        Route::get('/order/{id}', 'CabinetController@order')->name('order');
        Route::get('/personal_data', 'CabinetController@personal_data')->name('personal_data');
        Route::get('/questions', 'CabinetController@questions')->name('questions');
        Route::post('/profile_image','CabinetController@profile_image')->name('profile_image');
        Route::get('/image_delete','CabinetController@image_delete')->name('image_delete');
        Route::post('/questions', 'CabinetController@sendQuestion')->name('questions.send');
        Route::get('/documents','CabinetController@getUserDocuments')->name('documents');
//        Route::get('/rekvizit','CabinetController@getUserRekvizits')->name('rekvizit');
//        Route::get('/rekvizit/{id}','CabinetController@getOneRekvizit')->name('rekvizit.one');
        Route::get('/settings','CabinetController@settings')->name('settings');
        Route::get('/document/{id}','CabinetController@getOneDocument')->name('document');
        Route::get('/order_document/{id}','CabinetController@getOneOrderDocument')->name('order.documents');
        Route::post('/cabinetModal','CabinetController@cabinetModal')->name('cabinetModal');
        Route::get('/zipFile/{id}','CabinetController@getZipOrderDocument')->name('getZipOrderDocument');

        Route::group(['prefix'=>'basket'], function (){
            //Cart
            Route::get('/', 'CartController@index')->name('cart.index');
            Route::post('/add/{id}', 'CartController@store')->name('cart.store');
            Route::patch('/update/{id}', 'CartController@update')->name('cart.update');
            Route::delete('/delete/{id}', 'CartController@delete')->name('cart.delete');
        });
        //checkout
        Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');
        Route::post('/checkout/validate', 'CheckoutController@validateForm')->name('checkout.validate');
    });

    //Cart for Guests
    Route::group(['prefix'=>'cart'], function (){
        Route::get('/', 'CartController@indexGuest')->name('cart.guest.index');
        Route::post('/add/{id}', 'CartController@storeGuest')->name('cart.guest.store');
        Route::patch('/update/{id}', 'CartController@updateGuest')->name('cart.guest.update');
        Route::delete('/delete/{id}', 'CartController@deleteGuest')->name('cart.guest.delete');
    });

});

//routes for document template generate
DocumentTemplates::routes(\App\Http\Controllers\OrderDocumentTemplatesController::class);

Route::namespace('App\Http\Controllers')->group(function (){
    //content pages
    Route::get('/{slug}', 'ContentsController@content')->name('content');
});




