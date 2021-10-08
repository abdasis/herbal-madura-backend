<?php

namespace App\Http\Livewire\Wiki;

use Livewire\Component;

class HasilPencarian extends Component
{
    public function render()
    {
        return view('livewire.wiki.hasil-pencarian')->layout('layouts.guest');
    }
}
