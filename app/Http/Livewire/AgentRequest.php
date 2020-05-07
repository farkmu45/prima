<?php

namespace App\Http\Livewire;

use App\AgentRequest as AppAgentRequest;
use Livewire\Component;

class AgentRequest extends Component
{

    public function update($id)
    {
        $agent = AppAgentRequest::where('id', $id);
        $agent->update(['status' => !$agent->status]);
        return redirect('/admin/requests');
    }


    public function render()
    {
        $agentRequests = AppAgentRequest::all();
        return view('livewire.agent-request', ['agentRequests' => $agentRequests]);
    }
}
