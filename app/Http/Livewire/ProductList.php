<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class ProductList extends Component
{
    public function render()
    {
        return view('livewire.product-list', ['products' => Product::all()]);
    }
}
