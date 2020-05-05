<?php

namespace App\Http\Livewire;

use App\UserOrder;
use Livewire\Component;

class AgentOrder extends Component
{
    public function render()
    {
        $orders = UserOrder::whereHas('user', function ($query) {
            $query->where('role_id','>', 2);
        })->with(['user', 'payment.products'])->get();

        return view('livewire.agent-order', ['orders' => $orders]);
    }
}
