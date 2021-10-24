<?php

namespace App\Http\Livewire\Wiki;

use App\Models\Tanaman;
use Livewire\Component;
use Livewire\WithFileUploads;

class TambahArtikel extends Component
{
    use WithFileUploads;
    public $nama_tanaman, $nama_latin,$gambar_tanaman, $status = 'Direview', $diskripsi, $pustaka, $referensi,  $jenis_spesies;


    public function rules()
    {
        return [
            'nama_tanaman' => 'required',
            'nama_latin' => 'required',
            'diskripsi' => 'required',
            'gambar_tanaman' => 'required|mimes:jpg,png|max:2048',
            'status' => 'required'
        ];
    }

    public function simpan()
    {
        $this->validate();
        $nama_gambar = \Str::uuid() . '.' . $this->gambar_tanaman->extension();
        try {
            $tanaman = new Tanaman();
            $tanaman->nama_tanaman = $this->nama_tanaman;
            $tanaman->slug = \Str::slug($this->nama_tanaman);
            $tanaman->nama_latin = $this->nama_latin;
            $tanaman->diskripsi_tanaman = $this->diskripsi;
            $tanaman->gambar_tanaman = $nama_gambar;
            $tanaman->status = 'Direview';
            $tanaman->jenis_spesies = $this->jenis_spesies;
            $tanaman->refrensi = $this->referensi;
            $tanaman->pustaka = $this->pustaka;
            $tanaman->dibuat_oleh = \Auth::id();
            $tanaman->diupdate_oleh = \Auth::id();
            $tanaman->save();
            $this->gambar_tanaman->storeAs('gambar-tanaman', $nama_gambar);
            $this->alert('success', 'Data berhasil disimpan');
            $this->redirectRoute('halaman-utama');
        }catch (\Error $error){
            $this->alert('error', 'Terjadi kesalahan');
        }
    }
    public function render()
    {
        return view('livewire.wiki.tambah-artikel')->layout('layouts.guest');
    }
}
