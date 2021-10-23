<?php

namespace App\Http\Livewire\Wiki;

use App\Models\Tanaman;
use Livewire\Component;

class HasilPencarian extends Component
{
    public $tanaman;
    public $keyword;

    public $queryString = ['keyword'];

    protected $listeners = ['pencarian'];

    public function updatedKeyword()
    {
        $this->getTanaman($this->keyword);
    }

    public function mount()
    {
        # code...
        $this->getTanaman($this->keyword);
    }

    public function getTanaman($keyword)
    {
        $this->tanaman = Tanaman::where('nama_tanaman', 'LIKE', '%' . $keyword . '%')->where('status', 'Diterbitkan')->get();
    }
    public function render()
    {
        return view('livewire.wiki.hasil-pencarian')->layout('layouts.guest');
    }
}
