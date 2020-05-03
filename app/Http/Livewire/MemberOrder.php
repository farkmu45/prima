<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class MemberOrder extends Component
{
    public function render()
    {
        return view('livewire.member-order', ['members' => User::where('role_id', 2)->get()]);
    }
}
