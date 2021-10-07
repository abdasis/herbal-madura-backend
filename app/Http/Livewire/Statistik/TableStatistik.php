<?php

namespace App\Http\Livewire\Statistik;

use App\Models\Tanaman;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class TableStatistik extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')->sortable(),
            Column::make('Nama Tanaman', 'nama_tanaman')->sortable()->searchable(),
            Column::make('Nama Latin', 'nama_latin')->sortable()->searchable(),
            Column::make('Dilihat', 'id')->format(function ($val, $column, $row){
                return views($row)->count() . ' kali';
            })->sortable()->searchable(),
        ];
    }

    public function query(): Builder
    {
        return Tanaman::query();

    }
}
