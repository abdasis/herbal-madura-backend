<?php

namespace App\Http\Livewire\Tanaman;

use App\Models\Tanaman;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class Sunting extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $nama_tanaman, $nama_latin,$gambar_tanaman, $status, $diskripsi, $pustaka, $referensi,  $jenis_spesies;
    public $kerajaan, $ordo, $famili, $genus, $spesies;

    public $tanaman_id;

    public function mount($slug)
    {
        $tanaman = Tanaman::where('slug', $slug)->first();
        $this->nama_tanaman = $tanaman->nama_tanaman;
        $this->nama_latin = $tanaman->nama_latin;
        $this->status = $tanaman->status;
        $this->diskripsi = $tanaman->diskripsi_tanaman;
        $this->pustaka = $tanaman->pustaka;
        $this->referensi = $tanaman->refrensi;
        $this->jenis_spesies = $tanaman->jenis_spesies;
        $this->tanaman_id = $tanaman->id;
        $this->gambar_tanaman = $tanaman->gambar_tanaman;
    }
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
//        $this->validate();
        if ( !empty($this->gambar_tanaman) && !is_string($this->gambar_tanaman))
        {
            $nama_gambar = \Str::uuid() . '.' . $this->gambar_tanaman->extension();
            $this->gambar_tanaman->storeAs('gambar-tanaman', $nama_gambar);
        }else{
            $nama_gambar = $this->gambar_tanaman;
        }
        try {
            $tanaman = Tanaman::find($this->tanaman_id);
            $tanaman->nama_tanaman = $this->nama_tanaman;
            $tanaman->slug = \Str::slug($this->nama_tanaman);
            $tanaman->nama_latin = $this->nama_latin;
            $tanaman->diskripsi_tanaman = $this->diskripsi;
            $tanaman->gambar_tanaman = $nama_gambar;
            $tanaman->status = $this->status;
            $tanaman->kerajaan = $this->ordo;
            $tanaman->famili = $this->famili;
            $tanaman->genus = $this->genus;
            $tanaman->kerajaan = $this->kerajaan;
            $tanaman->jenis_spesies = $this->jenis_spesies;
            $tanaman->refrensi = $this->referensi;
            $tanaman->dibuat_oleh = \Auth::id();
            $tanaman->diupdate_oleh = \Auth::id();
            $tanaman->save();
            $this->alert('success', 'Data berhasil diperbarui');
            redirect()->route('tanaman.semua');


        }catch (\Error $error){
            dd($error->getMessage());
            $this->alert('error', 'Terjadi kesalahan');
        }
    }
    public function render()
    {
        return view('livewire.tanaman.sunting');
    }
}
