<?php

namespace App\Http\Livewire\Tanaman;

use App\Models\Tanaman;
use Livewire\Component;
use Maize\Markable\Models\Like;
use Maize\Markable\Models\Reaction;

class Baca extends Component
{
    public $tanaman;
    public $is_like;

    public function mount($slug)
    {
        $this->tanaman = Tanaman::where('slug', $slug)->where('status', 'Diterbitkan')->first();
        $this->tanaman->visit()->withIP();
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
