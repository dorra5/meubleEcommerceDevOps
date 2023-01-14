<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class HomeComponent extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.home-component', ['products'=>$products])->layout('layouts.base');
    }
}
