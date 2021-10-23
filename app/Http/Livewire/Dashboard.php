<?php

namespace App\Http\Livewire;

use App\Models\Tanaman;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $tanaman = Tanaman::latest()->paginate(5);
        $kontributor = User::where('roles', 'kontributor')->paginate(5);
        return view('livewire.dashboard',[
            'semua_tanaman' => $tanaman,
            'semua_kontributor' => $kontributor
        ]);
    }
}
