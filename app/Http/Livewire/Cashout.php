<?php

namespace App\Http\Livewire;

use App\Cashout as AppCashout;
use Livewire\Component;

class Cashout extends Component
{
    public function update($cashoutId, $isPaidOff)
    {
        if ($isPaidOff) {
            return redirect()->to('/admin/cashout');
        }

        $cashout = AppCashout::find($cashoutId);
        $cashout->update([
            'paid_off' => true
        ]);

        return redirect()->to('/admin/cashout');
    }


    public function render()
    {
        $cashout = AppCashout::all();
        return view('livewire.cashout', ['cashout' => $cashout]);
    }
}
