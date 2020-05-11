<?php

namespace App\Http\Livewire;

use App\AgentRequest;
use Livewire\Component;

class AgentReferral extends Component
{

    public function render()
    {
        $referral = auth()->user()->referral;
        return view('livewire.agent-referral')->withReferrals($referral);
    }
}
