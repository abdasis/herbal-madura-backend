<?php

namespace App\Http\Livewire\Pengguna;

use App\Models\User;
use Livewire\Component;

class DaftarPengguna extends Component
{
    public function render()
    {
        $pengguna = User::latest()->where('roles', '!=', 'admin')->paginate(16);
        return view('livewire.pengguna.daftar-pengguna',[
            'semua_pengguna' => $pengguna
        ])->layout('layouts.guest');
    }
}
