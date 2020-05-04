<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class ProductDetails extends Component
{

    public $product;

    public function mount(Product $product)
    {
        $this->product = $product;
    }


    public function render()
    {
        return view('livewire.product-details', ['product' => $this->product]);
    }
}
