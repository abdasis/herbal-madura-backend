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

    public function boot()
    {
        if (!in_array(auth()->user()->roles, ['kontributor', 'admin'])){
            $this->flash('info', 'Informasi', [
                'text' => 'Anda harus menjadi kontributor untuk menulis artikel'
            ], route('beranda'));
        }
    }
    public function rules()
    {
        return [
            'nama_tanaman' => 'required|unique:tanamen',
            'nama_latin' => 'required',
            'diskripsi' => 'required',
            'gambar_tanaman' => 'required|mimes:jpg,png|max:2048',
        ];
    }

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function simpan()
    {
        $this->validate();
        try {
            if ($this->gambar_tanaman){
                $ektensi = $this->gambar_tanaman->extension();
                $nama_file = \Str::slug($this->nama_tanaman);
                $nama_file = now()->format('d-m-Y-H-i-s-') . $nama_file . '.' . $ektensi;
                $path = $this->gambar_tanaman->storeAs('gambar-tanaman', $nama_file);
            }

            $tanaman = new Tanaman();
            $tanaman->nama_tanaman = $this->nama_tanaman;
            $tanaman->slug = \Str::slug($this->nama_tanaman);
            $tanaman->nama_latin = $this->nama_latin;
            $tanaman->diskripsi_tanaman = $this->diskripsi;
            $tanaman->gambar_tanaman = $path;
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
            $this->flash('success', 'Data berhasil disimpan', [], route('auth.detail'));
        }catch (\Error $error){
            report($error->getMessage());
            $this->alert('error', 'Terjadi kesalahan');
        }
    }
    public function render()
    {
        return view('livewire.wiki.tambah-artikel')->layout('layouts.editor');
    }
}
