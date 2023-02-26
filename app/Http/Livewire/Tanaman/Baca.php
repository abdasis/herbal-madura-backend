<?php

namespace App\Http\Livewire\Tanaman;

use App\Models\Tanaman;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Maize\Markable\Models\Reaction;

class Baca extends Component
{
    use LivewireAlert;

    public $tanaman;
    public $is_like;

    public function mount($slug)
    {
        try {
            $this->tanaman = Tanaman::where('slug', $slug)->where('status', 'Diterbitkan')->first();
            if ($this->tanaman) {
                $this->tanaman->visit()->withIP();
            } else {
                session()->flash('pesan', 'Tanaman belum diterbitkan anda cuma bisa mengedit dan belum bisa ditampilkan');
                $this->flash('warning', 'Tanaman Belum Diterbitkan', [], route('auth.detail'));
            }
        } catch (\Exception $exception) {
            $this->flash('warning', 'Tanaman tidak ditemukan');
        }
    }

    public function suka()
    {
        Reaction::toggle($this->tanaman, auth()->user(), 'heart');
    }

    public function jempol()
    {
        Reaction::toggle($this->tanaman, auth()->user(), 'person_raising_hand'); // returns the amount of 'person_raising_hand' reactions for the given post
    }

    public function render()
    {
        $share = \Share::currentPage($this->tanaman->nama_tanaman)
            ->facebook()
            ->twitter()
            ->whatsapp()
            ->getRawLinks();

        return view('livewire.tanaman.baca', [
            'tanaman_terkait' => Tanaman::where('kerajaan', $this->tanaman->kerajaan)->limit('5')->get(),
            'share' => $share,
        ])->layout('layouts.guest');
    }
}
