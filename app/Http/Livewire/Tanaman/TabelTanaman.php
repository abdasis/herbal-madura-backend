<?php

namespace App\Http\Livewire\Tanaman;

use App\Models\Tanaman;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class TabelTanaman extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')->sortable(),
            Column::make('Nama Tanaman', 'nama_tanaman')->sortable()->searchable(),
            Column::make('Nama Latin', 'nama_latin')->sortable()->searchable(),
            Column::make('Status', 'status')->format(function ($val){
                $status = $val == 'Diterbitkan' ? 'success' : 'warning';
                return '<div class="badge badge-'. $status .'">'. $val .'</div>';
            })->asHtml(),
            Column::make('Dibuat Oleh', 'user.name'),
            Column::make('Dilihat', 'id')->format(function ($val, $column, $row){
                return views($row)->count() .' kali';
            })->sortable(),
            Column::make('Options', 'slug')->format(function ($val){
                return view('partials.tombol-aksi',[
                    'edit' => route('tanaman.sunting', $val),
                    'hapus' => $val,
                    'detail' => route('tanaman.detail', $val),
                ]);
            })
        ];
    }

    public function query(): Builder
    {
        return Tanaman::query();

    }
}
