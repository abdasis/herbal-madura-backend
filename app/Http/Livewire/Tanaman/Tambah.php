<?php

namespace App\Http\Livewire\Tanaman;

use Livewire\Component;

class Tambah extends Component
{
    public $nama_tanaman, $nama_latin, $manfaat, $bagian_tanaman, $cara_pembuatan, $gambar_tanaman, $status;

    public function rules()
    {
        return[
            'nama_tanaman' => 'required',
            'nama_latin' => 'required',
            'manfaat' => 'required',
            'bagian_tanaman' => 'required',
            'cara_pembuatan' => 'required',
            'gambar_tanaman' => 'required',
            'status' => 'required'
        ];
    }

    public function simpan()
    {
        $this->validate();

    }
    public function render()
    {
        return view('livewire.tanaman.tambah');
    }
}
