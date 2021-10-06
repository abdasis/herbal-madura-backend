<?php

namespace App\Http\Livewire\Tanaman;

use App\Models\Tanaman;
use Livewire\Component;
use Livewire\WithFileUploads;

class Tambah extends Component
{
    use WithFileUploads;
    public $nama_tanaman, $nama_latin, $bagian_tanaman, $manfaat, $lingkungan_hidup, $cara_pembuatan, $gambar_tanaman, $status;

    public function rules()
    {
        return [
            'nama_tanaman' => 'required',
            'nama_latin' => 'required',
            'bagian_tanaman' => 'required',
            'manfaat' => 'required',
            'lingkungan_hidup' => 'required',
            'cara_pembuatan' => 'required',
            'gambar_tanaman' => 'required|mimes:jpg,png|max:2048',
            'status' => 'required'
        ];
    }

    public function simpan()
    {
        $this->validate();
        try {
            $tanaman = new Tanaman();
            $tanaman->nama_tanaman = $this->nama_tanaman;
            $tanaman->nama_latin = $this->nama_latin;
            $tanaman->bagian_tanaman = $this->bagian_tanaman;
            $tanaman->manfaat = $this->manfaat;
            $tanaman->lingkungan_hidup = $this->lingkungan_hidup;
            $tanaman->cara_pembuatan = $this->cara_pembuatan;
            $tanaman->gambar_tanaman = $this->gambar_tanaman;
            $tanaman->status = $this->status;
            $tanaman->save();
            $this->alert('success', 'Data berhasil disimpan');
        }catch (\Error $error){
            $this->alert('error', 'Terjadi kesalahan');
        }



    }
    public function render()
    {
        return view('livewire.tanaman.tambah');
    }
}
