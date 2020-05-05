<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class AgentList extends Component
{

    public function delete($id)
    {
        $user = User::where('id', $id);
        $user->delete();
        return redirect('/admin/agents');
    }


    public function render()
    {
        return view('livewire.agent-list', ['agents' => User::where('role_id','>', 2)->get()]);
    }
}
