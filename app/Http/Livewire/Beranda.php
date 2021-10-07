<?php

namespace App\Http\Livewire;

use App\Models\Tanaman;
use Livewire\Component;

class Beranda extends Component
{
    public function render()
    {
        $tanaman = Tanaman::where('status', 'Diterbitkan')->latest()->get();
        return view('livewire.beranda',[
            'semua_tanaman' => $tanaman
        ])->layout('layouts.guest');
    }
}
