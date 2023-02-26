<?php

namespace App\Http\Livewire\Tanaman;

use App\Models\Tanaman;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Verifikasi extends Component
{
    use LivewireAlert;
    public $tanaman;
    public $status;
    public $catatan;


    public function mount($id)
    {
        $tanaman = Tanaman::find($id);
        $this->tanaman = $tanaman;
        $this->status = $tanaman->status;
        $this->catatan = $tanaman->catatan;
    }

    public function simpan()
    {
        $this->tanaman->update([
            'status' => $this->status,
            'catatan' => $this->catatan,
            'tanggal_verifikasi' => now(),
            'diverifikasi_oleh' => auth()->id(),
        ]);
        $this->flash('success', 'Berhasil melakukan review', [], route('tanaman.semua'));
    }

    public function render()
    {
        return view('livewire.tanaman.verifikasi');
    }
}
