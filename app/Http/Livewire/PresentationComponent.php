<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PresentationComponent extends Component
{
    public function render()
    {
        return view('livewire.presentation-component')->layout('layouts.base');
    }
}
