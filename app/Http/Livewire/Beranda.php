<?php

namespace App\Http\Livewire;

use App\Models\Tanaman;
use Livewire\Component;

class Beranda extends Component
{
    public $keyword;
    public function pencarian()
    {
        redirect()->route('wiki.hasil-pencarian',[
            'keyword' => $this->keyword
        ]);

    }
    public function render()
    {
        $tanaman = Tanaman::where('status', 'Diterbitkan')->latest()->limit(2)->get();
        return view('livewire.beranda',[
            'semua_tanaman' => $tanaman
        ])->layout('layouts.guest');
    }
}
