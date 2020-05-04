<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        Product::all()
        return view('livewire.index');
    }
}
