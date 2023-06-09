<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Tanaman;

class TabelBookmark extends DataTableComponent
{
    public function builder(): Builder
    {
        return Tanaman::query()->whereHasReaction(auth()->user(), 'heart');
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setPaginationMethod('simple');
        $this->setTableRowUrl(function ($row){
            return route('tanaman.baca', $row->slug);
        });

    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable()->deselected(),
            Column::make('Artikel', 'diskripsi_tanaman')->deselected(),
            Column::make('Slug', 'slug')->deselected(),
            Column::make('Judul Artikel', 'nama_tanaman')->view('livewire.partials._kolom_judul_bookmark')->searchable(),
            Column::make("Dibuat Pada", "created_at")
                ->sortable()->format(fn($tanggal) => \Carbon::parse($tanggal)->format('d-m-Y'))->deselected(),
            Column::make("Diupdate Pada", "updated_at")
                ->sortable()->deselected(),
        ];
    }
}
