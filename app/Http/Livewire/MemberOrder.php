<?php

namespace App\Http\Livewire;

use App\UserOrder;
use Livewire\Component;

class MemberOrder extends Component
{

    public $orderId;

    public function updateOrder()
    {
        dd(request()->orderId);
    }

    public function render()
    {
        $orders = UserOrder::whereHas('user', function ($query)
        {
            $query->where('role_id',3);
        })->with(['user', 'payment.products'])->get();
        return view('livewire.member-order', ['orders' => $orders]);
    }
}
