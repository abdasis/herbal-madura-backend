<?php

namespace App\Http\Livewire\Tanaman;

use App\Models\Tanaman;
use Livewire\Component;

class Detail extends Component
{
    public $tanaman;
    public function mount($slug)
    {
        $this->tanaman = Tanaman::where('slug', $slug)->first();

    }
    public function render()
    {
        return view('livewire.tanaman.detail');
    }
}
