<?php

use App\Product;
use App\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
    return view('index');
});

Route::get('/product', function () {
    return view('product-details');
});

Route::get('/pricing', function () {
    return view('pricing');
});


Route::group(['middleware' => ['verified', 'isNotAdmin']], function ()
{
    Route::get('/member/dashboard', function () {
        return view('member-area');
    });
    Route::get('/member/order', function () {
        return view('order');
    });
    Route::get('/member/profile', function () {
        return view('profile');
    });

    Route::put('/member/profile', function ()
    {
        $user = User::find(auth()->user()->id);
        
        $photo = $user->photo;
        $id_photo = $user->id_photo;
        if (request()->photo) {
            Storage::delete($user->photo);
            $photo = request()->file('photo')->store('userImages');
        } else if(request()->id_photo) {
            Storage::delete($user->id_photo);
            $id_photo = request()->file('id_photo')->store('userImages');
        }
        $user->update(request()->all());
        $user->update(['id_photo' => $id_photo, 'photo' => $photo]);

        

        return redirect('/member/profile');
    });
});


Auth::routes(['verify' => true]);


Route::group(['middleware' => ['verified', 'isAdmin']], function () {
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

        Route::post('/products', function () {
            $data = request()->validate([
                'name' => ['string', 'required'],
                'price' => ['numeric', 'required'],
                'type' => ['string', 'required'],
                'address' => ['string', 'required'],
                'ac' => ['string', 'required', 'max:10'],
                'bedroom' => ['string', 'required', 'max:10'],
                'bathroom' => ['string', 'required', 'max:10'],
                'room_video' => ['active_url', 'string', 'required'],
                'survey_video' => ['active_url', 'string', 'required'],
                'survey_video' => ['active_url', 'string', 'required'],
                'photo' => ['file', 'between:0,2048', 'mimes:jpeg,jpg,png', 'required'],
                'front_view' => ['file', 'between:0,2048', 'mimes:jpeg,jpg,png', 'required'],
                'first_floor' => ['file', 'between:0,2048', 'mimes:jpeg,jpg,png', 'required'],
                'second_floor' => ['file', 'between:0,2048', 'mimes:jpeg,jpg,png', 'required'],
                'description' => ['string', 'required'],
            ]);

            $data['photo'] = request()->file('photo')->store('productImages');
            $data['front_view'] = request()->file('front_view')->store('productImages');
            $data['first_floor'] = request()->file('first_floor')->store('productImages');
            $data['second_floor'] = request()->file('second_floor')->store('productImages');

            Product::create($data);

            return redirect('/admin/products');
        });

        Route::get('/members', function () {
            return view('admin.member-list');
        });

        Route::get('/members/orders', function () {
            return view('admin.member-order');
        });
    });
});

Route::get('/r/{user:referral_code}', function (\App\User $user)
{
    return view('auth.register')->withUser($user);
})->middleware('guest');
