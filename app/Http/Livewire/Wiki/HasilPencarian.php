<?php

namespace App\Http\Livewire\Wiki;

use App\Models\Product;
use App\Models\Tanaman;
use Livewire\Component;

class HasilPencarian extends Component
{
    public $tanaman;
    public $keyword;

    public $kategori = 'semua';
    public $queryString = ['keyword'];

    protected $listeners = ['pencarian'];

    public function updatedKeyword()
    {
        $this->getTanaman($this->keyword);
    }

    public function mount()
    {
        $this->keyword = request()->get('keyword');
        $this->getTanaman(request()->get('keyword'));
    }


    public function updatedKategori()
    {
        $this->getTanaman($this->keyword);
    }

    public function getTanaman($keyword)
    {
        if ($this->kategori == 'semua'){
            $this->produk = Product::search($keyword)->get();
            $this->tanaman = Tanaman::search($keyword)->get();
        }elseif($this->kategori == 'jamu'){
            $this->produk = Product::search($keyword)->get();
        }else{
            $this->tanaman = Tanaman::search($keyword)->get();
        }
    }
    public function render()
    {
        return view('livewire.wiki.hasil-pencarian')->layout('layouts.guest');
    }
}
