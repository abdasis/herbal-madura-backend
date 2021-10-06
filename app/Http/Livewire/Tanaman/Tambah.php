<?php

namespace App\Http\Livewire\Tanaman;

use App\Models\Tanaman;
use Livewire\Component;
use Livewire\WithFileUploads;

class Tambah extends Component
{
<<<<<<< HEAD
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
=======
    use WithFileUploads;
    public $nama_tanaman, $nama_latin,$gambar_tanaman, $status, $diskripsi, $pustaka, $referensi,  $jenis_spesies;

    public function rules()
    {
        return [
            'nama_tanaman' => 'required',
            'nama_latin' => 'required',
            'diskripsi' => 'required',
            'gambar_tanaman' => 'required|mimes:jpg,png|max:2048',
>>>>>>> 9d964d8f81d778301beb71cd9440071b223fc5d2
            'status' => 'required'
        ];
    }

    public function simpan()
    {
        $this->validate();
<<<<<<< HEAD

=======
        $nama_gambar = \Str::uuid() . '.' . $this->gambar_tanaman->extension();
        try {
            $tanaman = new Tanaman();
            $tanaman->nama_tanaman = $this->nama_tanaman;
            $tanaman->nama_latin = $this->nama_latin;
            $tanaman->diskripsi_tanaman = $this->diskripsi;
            $tanaman->gambar_tanaman = $nama_gambar;
            $tanaman->status = $this->status;
            $tanaman->jenis_spesies = $this->jenis_spesies;
            $tanaman->refrensi = $this->referensi;
            $tanaman->pustaka = $this->pustaka;
            $tanaman->save();
            $this->gambar_tanaman->storeAs('gambar-tanaman', $nama_gambar);
            $this->alert('success', 'Data berhasil disimpan');
            sleep(2);
            $this->redirectRoute('tanaman.semua');
        }catch (\Error $error){
            $this->alert('error', 'Terjadi kesalahan');
        }
>>>>>>> 9d964d8f81d778301beb71cd9440071b223fc5d2
    }
    public function render()
    {
        return view('livewire.tanaman.tambah');
    }
}
