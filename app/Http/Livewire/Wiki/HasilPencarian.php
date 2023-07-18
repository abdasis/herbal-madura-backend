<?php

namespace App\Http\Livewire\Wiki;

use App\Models\Product;
use App\Models\Tanaman;
use Livewire\Component;
use Livewire\WithPagination;

class HasilPencarian extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $keyword;
    public $kategori = 'semua';

    protected $queryString = ['keyword'];

    protected $listeners = ['pencarian'];

    public function updatedKeyword()
    {
        $this->resetPage();
    }
    public function render()
    {
        if ($this->keyword){
            $tanaman = Tanaman::search($this->keyword)->paginate(10);
            $spotlight = Tanaman::search($this->keyword)->first();
        }else{
            $tanaman = Tanaman::latest()->with('user')->where('status', 'Diterbitkan')->paginate(10);
        }
        return view('livewire.wiki.hasil-pencarian', [
            'tanaman' => $tanaman,
            'spotligth_pencarian' => $spotlight ?? null
        ])->layout('layouts.guest');
    }
}
