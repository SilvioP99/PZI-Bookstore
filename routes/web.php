<?php

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

Route::get('/', function () {return view('home');;});
//Footer
Route::get('/about', function () {return view('about');;});
//Home
Route::get('/', 'HomeController@wow');

Auth::routes();

Route::get('/users', 'UsersController@index')->name('users');
Route::get('/users/get/{id}', 'UsersController@get')->name('users.get');
Route::get('/users/delete/{id}', 'UsersController@delete')->name('users.delete');
Route::post('/users/add', 'UsersController@store')->name('users.store');
Route::post('/users/edit/{id}', 'UsersController@edit')->name('users.edit');
Route::get("/search", 'UsersController@search');

Route::get('/addbooks', 'AddBookController@index')->name('addbooks');
Route::get('/addbooks/get/{id}', 'AddBookController@get')->name('addbooks.get');
Route::get('/addbooks/delete/{id}', 'AddBookController@delete')->name('addbooks.delete');
Route::post('/addbooks/add', 'AddBookController@store')->name('addbooks.store');
Route::post('/addbooks/editbook/{id}', 'AddBookController@editbook')->name('addbooks.editbook');
Route::get("/booksearch", 'AddBookController@booksearch');


//edit
Route::get('edit','EditController@index');
Route::get('edit/{id}','EditController@show');
Route::post('edit/{id}','EditController@edit');

//editbook
Route::get('editbook','EditBookController@index');
Route::get('editbook/{id}','EditBookController@show');
Route::post('editbook/{id}','EditBookController@editbook');

//Knjige
Route::get('/books', 'BookController@list')->name('Books');
Route::get('/book', 'BookController@index')->name('Book');
Route::get('/drama', 'BookController@drama')->name('genre');
Route::get('/fantastika', 'BookController@fantastika')->name('genre');
Route::get('/krimi', 'BookController@krimi')->name('genre');
Route::get('/ljubavni', 'BookController@ljubavni')->name('genre');
Route::get('/povijesni', 'BookController@povijesni')->name('genre');
Route::get('/psihološki', 'BookController@psihološki')->name('genre');
Route::get('/pustolovni', 'BookController@pustolovni')->name('genre');
Route::get('/triler', 'BookController@triler')->name('genre');
Route::get('/vestern', 'BookController@vestern')->name('genre');
Route::get('/znanstvena_fantastika', 'BookController@scifi')->name('genre');
Route::get('/book/{id}', 'BookController@id')->name('Book');
Route::get('/finder', 'BookController@search')->name('finder');

//Cart
Route::resource('/cart', 'CartController');
Route::get('/cart/add-item/{id}', 'CartController@addItem')->name('cart.addItem');
Route::resource('address','AddressController');

//Plaćanje
Route::group(['middleware' => 'auth'], function () {
    Route::get('shipping-info','CheckoutController@shipping')->name('checkout.shipping');
    Route::get('payment','CheckoutController@payment')->name('checkout.payment');
    Route::post('store-payment','CheckoutController@storePayment')->name('payment.store');
});

//Admin
Route::post('toggledeliver/{orderId}', 'OrderController@toggledeliver')->name('toggle.deliver');
Route::get('orders/{type?}', 'OrderController@Orders')->name('orders');

//User interface
Route::get('/{id}', 'AccountController@account')->middleware('auth')->name('account');
Route::patch('/account/{id}', 'AccountController@edit')->middleware('auth')->name('edit');



