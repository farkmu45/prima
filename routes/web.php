<?php

use App\Product;
use App\User;
use App\UserOrder;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;


Route::get('/', function () {
    return view('index');
});


Route::get('/product/{product}', function (\App\Product $product) {
    return view('product-details', ['product' => $product]);
});


Route::group(['middleware' => ['verified', 'isNotAdmin']], function ()
{
    Route::get('/product/{product}/pricing', function (\App\Product $product) {
        return view('pricing', ['product' => $product]);
    });

    Route::get('/invoice/{invoice:code}', function (\App\UserOrder $invoice) {
        return view('invoice', ['invoice' => $invoice]);
    });


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

        Route::get('/agents/orders', function () {
            return view('admin.agent-order');
        });

        Route::patch('/agents/orders/{order}', function (UserOrder $order) {
            $order->update([
                'status' => strval(request()->orderId)
            ]);

            return redirect('/admin/agents/orders');
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
                'unit' => ['string', 'required'],
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

        Route::patch('/members/{member}', function (User $member) {
            $member->update([
                'role_id' => request()->role_id
            ]);

            return redirect('/admin/members');
        });

        Route::get('/members/orders', function () {
            return view('admin.member-order');
        });

        Route::patch('/members/orders/{order}', function (UserOrder $order)
        {
            $order->update([
                'status' => strval(request()->orderId)
            ]);

            return redirect('/admin/members/orders');
        });

        Route::get('/payments', function () {
            return view('admin.payment-list');
        });
        Route::get('/products/{product}/payments/add', function (\App\Product $product) {
            return view('admin.payment-add', ['product' => $product]);
        });

        Route::get('/referrals', function () {
            return view('admin.referral-list');
        });
    });
});


Route::get('/r/{user:referral_code}', function (\App\User $user)
{
    abort_if($user->role_id <= 2, 404);
    return view('auth.register')->withUser($user);
})->middleware('guest');
