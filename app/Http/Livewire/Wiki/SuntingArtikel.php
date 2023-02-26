<?php

namespace App\Http\Livewire\Wiki;

use App\Models\Tanaman;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class SuntingArtikel extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    public $nama_tanaman, $nama_latin,$gambar_tanaman, $status = 'Direview', $diskripsi, $pustaka, $referensi,  $jenis_spesies;

    public $kerajaan, $ordo, $famili, $genus, $spesies;
    public $detail_tanaman;

    public function mount($slug)
    {
        $tanaman = Tanaman::where('slug', $slug)->first();
        $this->nama_tanaman = $tanaman->nama_tanaman;
        $this->diskripsi = $tanaman->diskripsi_tanaman;
        $this->detail_tanaman = $tanaman;
        $this->nama_latin = $tanaman->nama_latin;
        $this->pustaka = $tanaman->pustaka;
        $this->referensi = $tanaman->refrensi;
        $this->jenis_spesies = $tanaman->jenis_spesies;
        $this->kerajaan = $tanaman->kerajaan;
        $this->ordo = $tanaman->ordo;
        $this->famili = $tanaman->famili;
        $this->genus = $tanaman->genus;
        $this->spesies = $tanaman->spesies;

    }
    public function rules()
    {
        return [
            'nama_tanaman' => 'required',
            'nama_latin' => 'required',
            'diskripsi' => 'required',
        ];
    }

    public function simpan()
    {
        $this->validate();
        try {
            if (!empty($this->gambar_tanaman)){
                $nama_gambar = \Str::uuid() . '.' . $this->gambar_tanaman->extension();
                $nama_gambar = $nama_gambar;
                $this->gambar_tanaman->storeAs('gambar-tanaman', $nama_gambar);
            }else{
                $nama_gambar = $this->detail_tanaman->gambar_tanaman;
            }
            $tanaman = Tanaman::find($this->detail_tanaman->id);
            $tanaman->nama_tanaman = $this->nama_tanaman;
            $tanaman->slug = \Str::slug($this->nama_tanaman);
            $tanaman->nama_latin = $this->nama_latin;
            $tanaman->diskripsi_tanaman = $this->diskripsi;
            $tanaman->gambar_tanaman = $nama_gambar;
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

        }catch (\Exception $error){
            $this->alert('error', 'Terjadi kesalahan');
        }
    }
    public function render()
    {
        return view('livewire.wiki.sunting-artikel')->layout('layouts.guest');
    }
}
