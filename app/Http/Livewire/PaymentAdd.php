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
            'name' => 'string|required',
            'installment' => 'nullable|numeric',
            'itj' => 'nullable|numeric',
            'installment_amount' => 'nullable|numeric',
            'down_payment' => 'nullable|numeric',
            'price' => 'nullable|numeric',
            'repayment' => 'nullable|numeric'
        ]);

        if ($data['installment'] == '') {
            $data['installment'] = null;
        }
        if ($data['itj'] == '') {
            $data['itj'] = null;
        }
        if ($data['installment_amount'] == '') {
            $data['installment_amount'] = null;
        }
        if ($data['down_payment'] == '') {
            $data['down_payment'] = null;
        }
        if ($data['price'] == '') {
            $data['price'] = null;
        }
        if ($data['repayment'] == '') {
            $data['repayment'] = null;
        }
        
        $this->product->addPayment($data);

        return redirect()->to('/admin/products/'.$this->product->id.'/payments');
    }


    public function render()
    {
        return view('livewire.payment-add');
    }
}
