<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Referral;
use App\User;
use App\Verify\Service;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    protected $verify;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Service $verify)
    {
        $this->verify = $verify;
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_number' => ['required', 'unique:users', 'numeric'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $email = strstr($data['email'], '@', true);
        $number = substr($data['phone_number'], -3);
        $code = $email.$number;

        // dd($code);

        if (Cookie::get('referral')) {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'phone_number' => $data['phone_number'],
                'role_id' => 3,
                'referral_code' => $code,
                'password' => Hash::make($data['password']),
            ]);

            Referral::create([
                'referrer_id' => json_decode(Cookie::get('referral'))->id,
                'user_id' => $user->id
            ]);

            return $user;
        }

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'role_id' => 3,
            'referral_code' => $code,
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function registered(Request $request, User $user)
    {
        $verification = $this->verify->startVerification($user->phone_number, 'sms');
        if (!$verification->isValid()) {
            $user->delete();

            $errors = new MessageBag();
            foreach ($verification->getErrors() as $error) {
                $errors->add('verification', $error);
            }

            return view('auth.register')->withErrors($errors);
        }

        $messages = new MessageBag();
        $messages->add('verification', "Code sent to {$request->user()->phone_number}");

        return redirect('/verifyphone')->with('messages', $messages);
    }
}
