<?php

namespace App\Http\Livewire\Wiki;

use App\Models\Tanaman;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class TambahArtikel extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $nama_tanaman, $nama_latin,$gambar_tanaman, $status = 'Direview', $diskripsi, $pustaka, $referensi,  $jenis_spesies;

    public $kerajaan, $ordo, $famili, $genus, $spesies;

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
        try {
            $nama_file = now()->format('ymd-hi'). '-' .\Str::slug($this->nama_tanaman) . '.' . $this->gambar_tanaman->extension();
            $this->gambar_tanaman->storeAs('gambar-tanaman', $nama_file);

            $tanaman = new Tanaman();
            $tanaman->nama_tanaman = $this->nama_tanaman;
            $tanaman->slug = \Str::slug($this->nama_tanaman);
            $tanaman->nama_latin = $this->nama_latin;
            $tanaman->diskripsi_tanaman = $this->diskripsi;
            $tanaman->gambar_tanaman = $this->nama_tanaman;
            $tanaman->status = 'Direview';
            $tanaman->kerajaan = $this->ordo;
            $tanaman->famili = $this->famili;
            $tanaman->genus = $this->genus;
            $tanaman->kerajaan = $this->kerajaan;
            $tanaman->jenis_spesies = $this->jenis_spesies;
            $tanaman->refrensi = $this->referensi;
            $tanaman->dibuat_oleh = \Auth::id();
            $tanaman->diupdate_oleh = \Auth::id();
            $tanaman->save();
            $this->flash('success', 'Data berhasil disimpan', [], url('/'));
        }catch (\Error $error){
            report($error->getMessage());
            $this->alert('error', 'Terjadi kesalahan');
        }
    }
    public function render()
    {
        return view('livewire.wiki.tambah-artikel')->layout('layouts.guest');
    }
}
