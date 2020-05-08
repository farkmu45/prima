<?php

namespace App\Http\Livewire;

use App\AgentRequest as AppAgentRequest;
use App\User;
use Livewire\Component;

class AgentRequest extends Component
{

    public function update($id, $accepted)
    {
        $request = AppAgentRequest::find($id);

        $user = User::find($request->user_id);

        if ($accepted) {
            $user->update(['role_id' => 3]);
        }

        $request->delete();

        return redirect('/admin/requests');
    }


    public function render()
    {

        $agentRequests = AppAgentRequest::all();
        // dd($agentRequests);
        return view('livewire.agent-request', ['agentRequests' => $agentRequests]);
    }
}
