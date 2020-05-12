<?php

use App\Cashout;
use App\Product;
use App\Referral;
use App\User;
use App\UserOrder;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;


Route::get('/', function () {
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
        $cashoutCount = Cashout::where('user_id', auth()->user()->id)->where('paid_off',0)->count();
        return view('member-area', ['cashoutCount' => $cashoutCount]);
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

    Route::post('/member/referral', function ()
    {
        $user = auth()->user();

        $data = request()->validate([
            'alt_referral_code' => 'string|max:15|unique:users'
        ]);

        $user->update($data);

        return redirect()->back();
    });

    Route::put('/member/profile', function () {
        $data = request()->validate([
            'name' => 'string|required|max:60',
            'id_number' => 'nullable|numeric|digits:16',
            'place_of_birth' => 'nullable|max:60|alpha',
            'date_of_birth' => 'nullable|date',
            'phone_number' => 'numeric|required',
            'gender' => 'in:L,P',
            'address' => 'nullable|string|max:100',
            'village' => 'nullable|alpha|max:100',
            'sub_district' => 'nullable|alpha|max:100',
            'city' => 'nullable|alpha|max:100',
            'province' => 'nullable|alpha|max:100',
            'bank_name' => 'nullable|alpha|max:100',
            'account_number' => 'nullable|numeric|digits_between:10,30',
            'account_name' => 'nullable|string',
            'photo' => 'nullable|file|between:0,2048|mimes:jpeg,jpg,png',
            'id_photo' => 'nullable|file|between:0,2048|mimes:jpeg,jpg,png'
        ]);

        $user = User::find(auth()->user()->id);

        $data['photo'] = $user->photo;
        $data['id_photo'] = $user->id_photo;
        if (request()->photo) {
            Storage::delete($user->photo);
            $data['photo'] = request()->file('photo')->store('photoImages');
        }

        if (request()->id_photo) {
            Storage::delete($user->id_photo);
            $data['id_photo'] = request()->file('id_photo')->store('idcardphotoImages');
        }

        $user->update($data);

        return redirect('/member/profile');
    });

    Route::post('/cashout', function () {   
        $user = auth()->user();
        $cashoutCount = Cashout::where('user_id', $user->id)->where('paid_off', 0)->count();

        if ($cashoutCount > 0) {
            return redirect()->back();
        }

        if (!($user->bank || $user->account_number || $user->account_name)) {
            return redirect()->back()->withErrors(['user_error' => 'Isi kembali data bank anda']);
        } 
        
        if (!($user->photo || $user->id_photo)) {
            return redirect()->back()->withErrors(['photo_error' => 'Isi kembali data foto anda']);
        } 
        
        if (!($user->phone_number || $user->email)) {
            return redirect()->back()->withErrors(['contact_error' => 'Isi kembali data kontak anda (Email, Nomor HP)']);
        } 
        
        if (!($user->id_number)) {
            return redirect()->back()->withErrors(['nik_error' => 'Isi kembali data NIK anda ']);
        }


        $data = request()->validate([
            'amount' => 'required|numeric|between:1000,' . $user->wallet
        ]);

        $data['phone_number'] = $user->phone_number;
        $data['bank_account_number'] = $user->account_number;
        $data['bank_name'] = $user->bank_name;
        $data['account_name'] = $user->account_name;


        $data['user_id'] = $user->id;

        $wallet = $user->wallet - $data['amount'];

        $user->update([
            'wallet' => $wallet,
        ]);

        Cashout::create($data);

        return redirect()->back();
    });
});


Auth::routes(['verify' => true]);


Route::group(['middleware' => ['verified', 'isAdmin']], function () {
    Route::group(['prefix' => '/admin'], function () {

        Route::get('/dashboard', function () {
            return view('admin.dashboard');
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
                'commission' => ['required', 'numeric', 'min:0'],
                'pdf' => ['file', 'between:0,5012', 'mimes:pdf'],
                'description' => ['string', 'required'],
                'show_status' => ['in:0,1']
            ]);

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

            if (request()->pdf) {
                Storage::delete($product->pdf);
                $data['pdf'] = request()->file('pdf')->store('productPdf');
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
                'pdf' => ['file', 'between:0,5012', 'mimes:pdf'],
                'commission' => ['numeric', 'required', 'min:0'],
                'description' => ['string', 'required'],
            ]);

            $data['photo'] = request()->file('photo')->store('productImages');
            $data['front_view'] = request()->file('front_view')->store('productImages');
            $data['first_floor'] = request()->file('first_floor')->store('productImages');
            $data['second_floor'] = request()->file('second_floor')->store('productImages');
            $data['pdf'] = request()->file('pdf')->store('productPdf');

            Product::create($data);

            return redirect('/admin/products');
        });

        Route::get('/members', function () {
            return view('admin.member-list');
        });

        Route::get('/members/orders', function () {
            return view('admin.member-order');
        });

        Route::patch('/members/orders/{order}', function (UserOrder $order) {

            if ($order->status == '3') {
                return redirect()->back();
            }

            if (strval(request()->orderId) == '3') {
                $total_commission = $order->payment->products->commission;
                $order->user->refer->referrer->update([
                    'wallet' => $total_commission
                ]);
            }


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
        
        Route::get('/cashout', function () {
            return view('admin.cashout');
        });

        Route::patch('/cashout/{cashout}', function (\App\Cashout $cashout) {
            $cashout->update(['paid_off' => true]);
            $user = User::find($cashout->user_id);

            $user->update([
                'wallet' => 0
            ]);

            return redirect('/admin/cashout');
        });
    });
});


Route::get('/{referral_code}', function ($code) {

    $user = 0;

    if (User::where('referral_code', $code)->first() !== null) {
        $user = User::where('referral_code', $code)->first();
    } else if(User::where('alt_referral_code', $code)->first() !== null) {
        $user = User::where('alt_referral_code', $code)->first();
    } else {
        abort(404);
    }
    
    abort_if($user->role_id <= 2, 404);

    Cookie::queue('referral', $user, 1440);
    return redirect('/')->with('welcome-message', 'SELAMAT DATANG!!');
})->middleware('guest');
