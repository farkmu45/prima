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

Auth::routes(['verify' => true]);




Route::group(['middleware' => 'auth'], function () {
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

        Route::get('/members', function ()
        {
            return view('admin.member-list');
        });
    });
});


Route::get('/users', function () {
    return view('admin.user-list');
});