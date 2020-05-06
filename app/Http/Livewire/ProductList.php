<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class ProductList extends Component
{

    public function delete($id)
    {
        $product = Product::where('id', $id);
        $product->delete();
        return redirect('/admin/products');

    }

    public function render()
    {
        return view('livewire.product-list', ['products' => Product::all()]);
    }
}
