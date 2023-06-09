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
        \Log::debug('Test debug message');
        $tanaman = Tanaman::inRandomOrder()->where('status', 'Diterbitkan')->limit(2)->get();
        return view('livewire.beranda',[
            'semua_tanaman' => $tanaman
        ])->layout('layouts.guest');
    }
}
