<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class Tambah extends Component
{
    use WithFileUploads;


    public $nama_produk, $deskripsi, $link_produk, $sku, $gambar_produk, $produsen;

    protected $rules = [
        'nama_produk' => 'required',
        'deskripsi' => 'required',
    ];

    public function simpan()
    {
        $this->validate();

        $nama_gambar = \Str::slug($this->nama_produk) . '-' . $this->gambar_produk->getClientOriginalName();

        $produk = new Product();
        $produk->nama_produk = $this->nama_produk;
        $produk->slug = \Str::slug($this->nama_produk);
        $produk->deskripsi = $this->deskripsi;
        $produk->link_produk = $this->link_produk;
        $produk->produsen = $this->produsen;
        $produk->gambar_produk = $nama_gambar;
        $produk->dibuat_oleh = \Auth::id();
        $produk->diupdate_oleh = \Auth::id();
        $produk->save();
        $this->gambar_produk->storeAs('storage', $nama_gambar);
        $this->alert('success', 'Data berhasil disimpan');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.product.tambah');
    }
}
