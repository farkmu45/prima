<?php

namespace App\Http\Livewire;

use App\Cashout as AppCashout;
use Livewire\Component;

class Cashout extends Component
{
    public function render()
    {
        $cashout = AppCashout::all();
        return view('livewire.cashout', ['cashout' => $cashout]);
    }
}
