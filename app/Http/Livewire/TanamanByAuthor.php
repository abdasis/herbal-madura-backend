<?php

namespace App\Http\Livewire;

use App\Models\Tanaman;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class TanamanByAuthor extends DataTableComponent
{

    public function builder(): Builder
    {
        return Tanaman::query()->where('dibuat_oleh', auth()->id());
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setPaginationMethod('simple');
        $this->setFilterLayoutSlideDown();
        $this->setQueryStringDisabled();
        $this->setThAttributes(function (Column $column) {
            if ($column->isField('id')) {
                return [
                    'class' => 'text-end'
                ];
            }

            return [];
        });

    }

    public function filters(): array
    {
        return [
            SelectFilter::make('Status')->options(
                [
                    'Semua' => 'Semua',
                    'Direview' => 'Direview',
                    'Ditolak' => 'Ditolak',
                    'Dipublish' => 'Dipublish'
                ]
            )->filter(function (Builder $builder, string $status) {
                return $builder->where('status', $status);
            })
        ];
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable()->deselected(),
            Column::make('Artikel', 'diskripsi_tanaman')->deselected(),
            Column::make('Slug', 'slug')->deselected(),
            Column::make('Judul Artikel', 'nama_tanaman')->view('livewire.tanaman._kolom_judul')->searchable(),
            Column::make("Dibuat Pada", "created_at")
                ->sortable()->format(fn($tanggal) => \Carbon::parse($tanggal)->format('d-m-Y'))->deselected(),
            Column::make("Diupdate Pada", "updated_at")
                ->sortable()->deselected(),
            Column::make('Status', 'status')->deselected(),
            Column::make('Catatan', 'catatan')->deselected(),
            Column::make('Aksi', 'id')->view('livewire.partials.tombol_aksi'),
        ];
    }
}
