<?php

namespace App\Http\Livewire\Wiki;

use App\Models\Tanaman;
use Livewire\Component;

class HasilPencarian extends Component
{
    public $tanaman, $keyword;

    public $queryString = ['keyword'];

    protected $listeners = ['pencarian'];

    public function updatingKeyword()
    {
        $this->tanaman = Tanaman::where('nama_tanaman', 'LIKE', '%'.$this->keyword.'%')->get();

    }

    public function render()
    {
        return view('livewire.wiki.hasil-pencarian')->layout('layouts.guest');
    }
}
