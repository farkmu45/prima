<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class MemberList extends Component
{
    public function render()
    {

        return view('livewire.member-list', ['members' => User::where('role_id', 2)->get()]);
    }
}
