<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use App\Models\Tanaman;
use Livewire\Component;

class Baca extends Component
{
    public $produk;
    public function mount($slug)
    {
        $this->produk = Product::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.product.baca')->layout('layouts.guest');
    }
}
