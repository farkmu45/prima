<?php

namespace App\Http\Livewire;

use App\Payment;
use Livewire\Component;

class PaymentList extends Component
{
    public function render()
    {
        $payments = Payment::with('products')->get();
        return view('livewire.payment-list', ['payments'=> $payments]);
    }
}
