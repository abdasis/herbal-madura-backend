<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class Sunting extends Component
{
    use WithFileUploads;
    use LivewireAlert;


    public $nama_produk, $deskripsi, $link_produk, $sku, $gambar_produk;
    public $produk_id;
    public $produl;
    public $produsen;

    protected $rules = [
        'nama_produk' => 'required',
        'deskripsi' => 'required',
    ];



    public function mount($id)
    {
        $produk = Product::find($id);
        $this->nama_produk = $produk->nama_produk;
        $this->deskripsi = $produk->deskripsi;
        $this->link_produk = $produk->link_produk;
        $this->sku = $produk->produsen;
        $this->produk_id = $id;
        $this->produl = $produk;
        $this->produsen = $produk->produsen;

    }
    public function simpan()
    {
        $this->validate();
        if (!empty($this->gambar_produk)){
            $nama_gambar = \Str::slug($this->nama_produk) . '-' . $this->gambar_produk->getClientOriginalName();
            $this->gambar_produk->storeAs('storage', $nama_gambar);
        }else{
            $nama_gambar = $this->produl->gambar_produk;
        }
        $produk = Product::find($this->produk_id);
        $produk->nama_produk = $this->nama_produk;
        $produk->deskripsi = $this->deskripsi;
        $produk->link_produk = $this->link_produk;
        $produk->sku = $this->sku;
        $produk->gambar_produk = $nama_gambar;
        $produk->dibuat_oleh = \Auth::id();
        $produk->diupdate_oleh = \Auth::id();
        $produk->save();
        $this->alert('success', 'Data berhasil disimpan');
        $this->redirectRoute('product.semua');
    }
    public function render()
    {
        return view('livewire.product.sunting');
    }
}
