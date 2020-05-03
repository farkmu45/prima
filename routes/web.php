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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index');

// Route::prefix('/admin', function () {
//     Route::livewire('/users');
//     Route::livewire('/users/{user}');
//     Route::livewire('/users/{user}/edit');

//     Route::livewire('/products');
//     Route::livewire('/products/{product}');
//     Route::livewire('/products/{product}/edit');


//     Route::livewire('/products/{product}/payments');
//     Route::livewire('/products/{product}/payments/{payment}');
//     Route::livewire('/products/{product}/payments/{payment}/edit');
// })->middleware('verified');

Route::get('/dashboard', function ()
{
    return  view('admin.dashboard');
});

Route::get('/users', function()
{
    return view('admin.user-list');
});

// Route::livewire('/r/{referral_id}');
