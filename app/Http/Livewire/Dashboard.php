<?php

namespace App\Http\Livewire;

use App\Models\Tanaman;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public function mount()
    {
        if (in_array(\Auth::user()->roles, ['kontributor', 'user']))
        {
            $this->redirectRoute('auth.detail', \Auth::id());
        }
    }
    public function render()
    {
        $tanaman = Tanaman::latest()->paginate(5);
        $kontributor = User::where('roles', 'kontributor')->paginate(5);
        $total_tanaman = Tanaman::count();
        return view('livewire.dashboard',[
            'semua_tanaman' => $tanaman,
            'semua_kontributor' => $kontributor,
            'total_tanama' => $total_tanaman,
            'total_pengguna' => User::count(),
            'total_pengunjung' => \DB::table('laravisits')->count()
        ]);
    }
}
