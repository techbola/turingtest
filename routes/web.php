<?php

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

Route::get('/', [
	'uses' => 'FrontEndController@index',
	'as' => 'index'
]);

Route::get('/shop', [
    'uses' => 'FrontEndController@shop',
    'as' => 'shop'
]);

Route::get('/product/{id}', [
    'uses' => 'FrontEndController@product',
    'as' => 'product'
]);

Route::get('/category/{id}', [
    'uses' => 'FrontEndController@category',
    'as' => 'category'
]);

Route::resource('cart', 'CartController');

Route::get('/checkout', [
    'uses' => 'FrontEndController@checkout',
    'as' => 'checkout'
]);

Route::post('/make/payment', [
    'uses' => 'CheckOutController@makePayment',
    'as' => 'make.payment'
]);

Route::post('/checkout', [
    'uses' => 'CheckOutController@checkout',
    'as' => 'make.pay'
]);

Route::get('/thankyou', [
    'uses' => 'CheckOutController@thankyou',
    'as' => 'thankyou'
]);

Route::get('/contact', [
    'uses' => 'FrontEndController@contact',
    'as' => 'contact'
]);

Route::post('/mail', [

    'uses' => 'FrontEndController@contactStore',
    'as' => 'contact.store'
]);

Route::get('/search/results', [

    'uses' => 'FrontEndController@search_results',
    'as' => 'search.results'
]);

Auth::routes(['verify' => true]);

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'verified']], function() {

    Route::get('/index', [
        'uses' => 'AdminController@admin',
        'as' => 'admin.index'
    ]);

    Route::resource('products', 'ProductController');

    Route::resource('categories', 'CategoryController');

});

Route::get('/home', 'HomeController@index')
    ->name('home')
    ->middleware('verified');
