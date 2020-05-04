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

Route::get('/', function ()
{
    return view('index');
});

Route::get('/product', function()
{
    return view('product-details');
});

Route::get('/pricing', function()
{
    return view('pricing');
});


Auth::routes(['verify' => true]);


// Route::group(['middleware' => [''], function () {
    Route::group(['prefix' => '/admin'], function () {

        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        });

        Route::get('/agents', function () {
            return view('admin.agent-list');
        });

        Route::get('/products', function () {
            return view('admin.product-list');
        });
        Route::get('/products/add', function () {
            return view('admin.add-product');
        });

        Route::get('/members', function ()
        {
            return view('admin.member-list');
        });
        Route::get('/members/orders', function ()
        {
            return view('admin.member-order');
        });
    });
// });
