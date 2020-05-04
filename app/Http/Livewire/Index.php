<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {

        return view('livewire.index', ['products' => Product::all(), 'singleProduct' => Product::where('show_status', 1)]);
    }
}
