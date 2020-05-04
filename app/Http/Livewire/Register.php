<?php

namespace App\Http\Livewire;

use App\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $phone_number;
    public $password;
    public $password_confirmation;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_number' => ['required'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }


    public function render()
    {
        return view('livewire.register');
    }
}
