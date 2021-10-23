<?php

namespace App\Http\Livewire;

use App\Models\Tanaman;
use Livewire\Component;

class HalamanUtama extends Component
{
    public function render()
    {
        $tanaman = Tanaman::inRandomOrder()->paginate(25);
        return view('livewire.halaman-utama',[
            'semua_tanaman' => $tanaman
        ])->layout('layouts.guest');
    }
}
