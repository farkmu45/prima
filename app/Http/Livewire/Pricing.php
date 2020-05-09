<?php

namespace App\Http\Livewire;

use App\Payment;
use App\Product;
use App\UserOrder;
use Livewire\Component;

class Pricing extends Component
{
    public $product;

    public function mount(Product $product)
    {
        $this->product = $product;
    }

    public function order($payment)
    {
        $order = UserOrder::create([
            'code' => 'INV'.substr(uniqid('', true), -7),
            'payment_id' => $payment,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->to('/invoice/'.$order->code);
    }
    

    public function render()
    {
        return view('livewire.pricing', ['product' => $this->product]);
    }
}
