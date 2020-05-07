<?php

use App\Product;
use App\User;
use App\UserOrder;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;


Route::get('/', function () {
    if (Cookie::get('referral')) {
        return view('index');
    }
    return view('index');
});


Route::get('/product/{product}', function (\App\Product $product) {
    return view('product-details', ['product' => $product]);
});


Route::group(['middleware' => ['verified', 'isNotAdmin']], function () {
    Route::get('/product/{product}/pricing', function (\App\Product $product) {
        return view('pricing', ['product' => $product]);
    });

    Route::get('/invoice/{invoice:code}', function (\App\UserOrder $invoice) {
        return view('invoice', ['invoice' => $invoice]);
    })->middleware('password.confirm');


    Route::get('/member/dashboard', function () {
        return view('member-area');
    })->middleware('password.confirm');

    Route::get('/member/order', function () {
        return view('order');
    })->middleware('password.confirm');

    Route::get('/member/profile', function () {
        return view('profile');
    })->middleware('password.confirm');

    Route::get('/member/referral', function () {
        return view('agent-referral');
    })->middleware('password.confirm');

    Route::put('/member/profile', function () {
        $data = request()->validate([
            'name' => 'string|required|max:60',
            'id_number' => 'numeric|min:16|max:16',
            'place_of_birth' => 'max:60|alpha',
            'date_of_birth' => 'date',
            'phone_number' => 'numeric|required',
            'gender' => 'in:L,P',
            'address' => 'string|max:100',
            'village' => 'string|max:100',
            'sub_district' => 'string|max:100',
            'city' => 'string|max:100',
            'province' => 'string|max:100',
            'bank_name' => 'alpha|max:100',
            'account_number' => 'numeric|max:120',
            'account_name' => 'string',
            'photo' => 'between:0,2048|mimes:jpeg,jpg,png',
            'id_photo' => 'between:0,2048|mimes:jpeg,jpg,png'
        ]);

        $user = User::find(auth()->user()->id);

        $data['photo'] = $user->photo;
        $data['id_photo'] = $user->id_photo;
        if (request()->photo) {
            Storage::delete($user->photo);
            $data['photo'] = request()->file('photo')->store('userImages');
        } else if (request()->id_photo) {
            Storage::delete($user->id_photo);
            $data['id_photo'] = request()->file('id_photo')->store('userImages');
        }
        // $user->update(['id_photo' => $id_photo, 'photo' => $photo]);
        $user->update($data);

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

        Route::get('/products/{product}/edit', function (\App\Product $product) {
            return view('admin.product-edit')->withProduct($product);
        });

        Route::patch('/products/{product}', function (\App\Product $product) {
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
                'photo' => ['file', 'between:0,2048', 'mimes:jpeg,jpg,png'],
                'front_view' => ['file', 'between:0,2048', 'mimes:jpeg,jpg,png'],
                'first_floor' => ['file', 'between:0,2048', 'mimes:jpeg,jpg,png'],
                'second_floor' => ['file', 'between:0,2048', 'mimes:jpeg,jpg,png'],
                'description' => ['string', 'required'],
                'show_status' => ['in:0,1']
            ]);


            Product::where('show_status', '1')->update(['show_status' => '0']);
            if (request()->photo) {
                Storage::delete($product->photo);
                $data['photo'] = request()->file('photo')->store('productImages');
            }

            if (request()->front_view) {
                Storage::delete($product->front_view);
                $data['front_view'] = request()->file('front_view')->store('productImages');
            }

            if (request()->first_floor) {
                Storage::delete($product->first_floor);
                $data['first_floor'] = request()->file('first_floor')->store('productImages');
            }

            if (request()->second_floor) {
                Storage::delete($product->second_floor);
                $data['second_floor'] = request()->file('second_floor')->store('productImages');
            }

            $product->update($data);
            return redirect('/admin/products');
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

        Route::patch('/members/orders/{order}', function (UserOrder $order) {
            $order->update([
                'status' => strval(request()->orderId)
            ]);

            return redirect('/admin/members/orders');
        });

        Route::get('/payments', function () {
            return view('admin.payment-list');
        });

        Route::get('/payments/{payment}/edit', function (\App\Payment $payment) {
            return view('admin.payment-edit', ['payment' => $payment]);
        });


        Route::get('/products/{product}/payments/add', function (\App\Product $product) {
            return view('admin.payment-add', ['product' => $product]);
        });

        Route::get('/referrals', function () {
            return view('admin.referral-list');
        });

        Route::get('/requests', function ()
        {
            return view('admin.agent-request');
        });
    });
});


Route::get('/r/{user:referral_code}', function (\App\User $user) {
    abort_if($user->role_id <= 2, 404);
    Cookie::queue('referral', $user, 1440);
    return redirect('/');
})->middleware('guest');
