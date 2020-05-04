<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class PaymentAdd extends Component
{

    public $product;
    public $name;
    public $installment;
    public $itj;
    public $installment_amount;
    public $down_payment;
    public $price;
    public $repayment;

    public function mount(Product $product)
    {
        $this->product = $product;
    }

    public function create()
    {
        $data = $this->validate([
            'name' => '',
            'installment' => '',
            'itj' => '',
            'installment_amount' => '',
            'down_payment' => '',
            'price' => '',
            'repayment' => ''
        ]);
        
        $this->product->addPayment($data);

        return redirect()->to('/admin/products/'.$this->product->id.'/payments');
    }


    public function render()
    {
        return view('livewire.payment-add');
    }
}
