<?php

namespace App\Http\Livewire\Tanaman;

use App\Models\Tanaman;
use App\Traits\Toast;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class Tambah extends Component
{
    use LivewireAlert;
    use WithFileUploads;
    use Toast;

    public $nama_tanaman,
        $nama_latin,
        $gambar_tanaman,
        $status = 'Diterbitkan',
        $diskripsi,
        $pustaka,
        $referensi,
        $jenis_spesies;

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

    public function resetImage()
    {
        $this->reset('gambar_tanaman');
    }

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function simpan()
    {
        $this->validate();
        try {

            $tgl_upload = now()->format('d-m-Y-H-i-s');
            $ektension = $this->gambar_tanaman->extension();
            $nama_file = "{$this->nama_tanaman}-{$tgl_upload}.{$ektension}";
            $path = $this->gambar_tanaman->storeAs('gambar-tanaman', $nama_file);

            Tanaman::create([
                'nama_tanaman' => $this->nama_tanaman,
                'slug' => Str::slug($this->nama_tanaman),
                'nama_latin' => $this->nama_latin,
                'diskripsi_tanaman' => $this->diskripsi,
                'status' => $this->status,
                'ordo' => $this->ordo,
                'famili' => $this->famili,
                'genus' => $this->genus,
                'kerajaan' => $this->kerajaan,
                'jenis_spesies' => $this->jenis_spesies,
                'refrensi' => $this->referensi,
                'dibuat_oleh' => auth()->id(),
                'diupdate_oleh' => auth()->id(),
                'gambar_tanaman' => $path
            ]);

            $this->toast('success', 'Data berhasil ditambahkan', route('tanaman.semua'));

        } catch (\Error $error) {
            report($error);
            $this->toast('error', 'Terjadi kesalahan');
        }
    }

    public function render()
    {
        return view('livewire.tanaman.tambah');
    }
}
