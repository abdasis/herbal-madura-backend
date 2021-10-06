<?php

namespace App\Http\Livewire\Pengguna;

use Livewire\Component;

class Tambah extends Component
{
    public $alamat_website, $password, $password_confirmation;
    public function render()
    {
        return view('livewire.pengguna.tambah');
    }
}
