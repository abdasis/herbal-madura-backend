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
    public $queryString = ['keyword'];
    protected $listeners = ['pencarian'];
    public function mount()
    {
        $this->keyword = request()->get('keyword');
    }

    public function updatedKeyword()
    {
        $this->resetPage();
    }
    public function render()
    {
        if ($this->keyword){
            $tanaman = Tanaman::search($this->keyword)->paginate(10);
        }else{
            $tanaman = Tanaman::latest()->paginate(10);
        }

        return view('livewire.wiki.hasil-pencarian', [
            'tanaman' => $tanaman
        ])->layout('layouts.guest');
    }
}
