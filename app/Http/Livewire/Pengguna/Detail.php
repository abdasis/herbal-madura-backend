<?php

namespace App\Http\Livewire\Pengguna;

use App\Models\Tanaman;
use App\Models\User;
use Livewire\Component;

class Detail extends Component
{
    public $user, $semua_tanaman;

    public function mount($id)
    {
        $this->user = User::find($id);
        $this->semua_tanaman = Tanaman::where('dibuat_oleh', $id)->get();
    }
    public function render()
    {
        return view('livewire.pengguna.detail');
    }
}
