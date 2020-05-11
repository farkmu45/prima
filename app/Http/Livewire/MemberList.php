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

    public function activate($id)
    {
        $user = User::where('id', $id)->where('role_id', 3);
        $user->restore();
        return redirect('/admin/members');
    }

    public function delete($id)
    {
        $user = User::where('id', $id)->where('role_id',3);
        $user->delete();
        return redirect('/admin/members');
    }

    public function render()
    {

        return view('livewire.member-list', ['members' => User::where('role_id', 3)->withTrashed()->get()]);
    }
}
