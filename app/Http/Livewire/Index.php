<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {

        dd(Product::where('show_status', '1'));

        return view('livewire.index', ['products' => Product::all()]);
    }
}
