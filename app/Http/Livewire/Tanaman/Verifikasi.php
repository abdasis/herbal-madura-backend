<?php

namespace App\Http\Livewire\Tanaman;

use App\Models\Tanaman;
use App\Traits\Toast;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Verifikasi extends Component
{
    use Toast;
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

        if ($this->tanaman->status == 'Diterbitkan'){
            $this->toast('success', 'Berhasil menerbitkan', route('tanaman.semua'));
        }elseif($this->tanaman->status == 'Ditolak'){
            $this->toast('success', 'Menolak Kiriman', route('tanaman.semua'));
        }else{
            $this->toast('success', 'Menetapkan status direview', route('tanaman.semua'));
        }
    }

    public function render()
    {
        return view('livewire.tanaman.verifikasi');
    }
}
