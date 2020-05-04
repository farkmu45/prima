<?php

namespace App\Http\Livewire;

use App\UserOrder;
use Livewire\Component;

class Invoice extends Component
{
    public $invoice;

    public function mount(UserOrder $invoice)
    {
        $this->invoice = $invoice;
    }

    public function render()
    {
        return view('livewire.invoice', ['invoice' => $this->invoice]);
    }
}
