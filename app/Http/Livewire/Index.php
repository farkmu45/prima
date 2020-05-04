<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {

        // $show = Product::where('show_status', '1')->get();

        return view('livewire.index', ['products' => Product::all()]);
    }
}
