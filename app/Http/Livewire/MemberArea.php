<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MemberArea extends Component
{

    public $cashoutCount;

    public function mount($cashoutCount)
    {
        $this->cashoutCount = $cashoutCount;
    }


    public function render()
    {
        return view('livewire.member-area');
    }
}
