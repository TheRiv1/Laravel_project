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

//Route::get('/', '');
//Route::get('/shop', '');
//Route::get('/about', '');
//Route::get('/contact', '');
Route::resource('posts','PostsController');
Route::resource('product', 'ProductController');

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/home', 'HomeController@index');
Route::get('/cart','CartController@index')->name('cart.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});


//when we get the homepage route, give me the view
//Route::get('/', function () {
//return view('welcome');
//});
//
//Route::get('/contact', function (){
//    return view('contact');
//});
//
//Route::get('/about', function (){
//    return view('about');
//});


//Route::view('/', 'main');
//Route::view('/products', 'products');
//Route::view('/product', 'product');
//Route::view('/cart', 'cart');
//Route::view('/checkout', 'checkout');
//Route::view('/thankyou', 'thankyou');


