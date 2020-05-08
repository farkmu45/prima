<?php

namespace App\Http\Livewire;

use App\AgentRequest;
use Livewire\Component;

class AgentReferral extends Component
{

    public function send()
    {
        AgentRequest::create([
            'user_id' => auth()->user()->id
        ]);
    }


    public function render()
    {
        $request = AgentRequest::where('user_id', auth()->user()->id)->count();
        $referral = auth()->user()->referral;
        return view('livewire.agent-referral')->withRequest($request)->withReferrals($referral);
    }
}
