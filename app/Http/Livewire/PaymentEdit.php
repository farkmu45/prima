<?php

namespace App\Http\Livewire;

use App\Payment;
use Livewire\Component;

class PaymentEdit extends Component
{

    public $payment_id = null;
    public $product = null;
    public $name = null;
    public $installment = null;
    public $itj = null;
    public $installment_amount = null;
    public $down_payment = null;
    public $price = null;
    public $repayment = null;

    public function mount(Payment $payment)
    {
        $this->payment_id = $payment->id;
        $this->product = $payment->product;
        $this->name = $payment->name;
        $this->installment = $payment->installment;
        $this->itj = $payment->itj;
        $this->installment_amount = $payment->installment_amount;
        $this->down_payment = $payment->down_payment;
        $this->price = $payment->price;
        $this->repayment = $payment->repayment;
    }

    public function edit()
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

        $payment = Payment::where('id', $this->payment_id);
        $payment->update($data);

        return redirect()->to('/admin/payments');
    }



    public function render()
    {
        return view('livewire.payment-edit');
    }
}
