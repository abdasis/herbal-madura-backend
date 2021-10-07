<?php

namespace App\Http\Livewire\Statistik;

use App\Models\Tanaman;
use CyrildeWit\EloquentViewable\Support\Period;
use Livewire\Component;

class Semua extends Component
{
    public function render()
    {
        $tanaman = Tanaman::latest()->get();
        $statistik = [
            'hari_ini' =>  views(Tanaman::class)->count(),
            'unique' => views(Tanaman::class)->count(),
            'bulan_ini' => views(Tanaman::class)->period(Period::pastMonths(2))->remember()->count(),
            'total' =>  views(Tanaman::class)->count(),
        ];
        return view('livewire.statistik.semua',[
            'statistik' => $statistik,
        ]);
    }
}
