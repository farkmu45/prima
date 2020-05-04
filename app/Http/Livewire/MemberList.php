<?php

namespace App\Http\Livewire;

use App\Role;
use App\User;
use Livewire\Component;

class MemberList extends Component
{

    public $userId;


    public function editUser($user)
    {
        $this->userId = $user;
    }

    public function edit()
    {
        User::update([
            'role_id' => $this->userId
        ]);
        
        return redirect()->to('/admin/members');
    }

    public function render()
    {

        return view('livewire.member-list', ['members' => User::where('role_id', 2)->get(), 'roles' => Role::all()]);
    }
}
