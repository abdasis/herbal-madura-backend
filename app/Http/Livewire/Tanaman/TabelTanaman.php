<?php

namespace App\Http\Livewire\Tanaman;

use App\Models\Tanaman;
use App\Traits\AlertConfirm;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class TabelTanaman extends DataTableComponent
{
    use AlertConfirm;
    use LivewireAlert;

    protected $listeners = ['dihapus', 'batal', 'diverifikasi'];

    protected $model = Tanaman::class;
    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function ($row){
                return route('tanaman.detail', $row->slug);
            });
    }

    public function dihapus()
    {
        if ($this->model_id){
            Tanaman::find($this->model_id)->delete();
            $this->alert('success', 'Data berhasil dihapus');
        }else{
            $this->alert('error', 'Data tidak ditemukan');
        }

    }

    public function diverifikasi()
    {
        if ($this->model_id)
        {
            $tanaman = Tanaman::find($this->model_id);
            $tanaman->diverifikasi_oleh = \Auth::id();
            $tanaman->tanggal_verifikasi = Carbon::now();
            $tanaman->save();
            $this->alert('success', 'Data berhasil diverifikasi');

        }
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')->sortable(),
            Column::make('Nama Tanaman', 'nama_tanaman')->sortable()->searchable(),
            Column::make('Nama Latin', 'nama_latin')->sortable()->searchable(),
            Column::make('Status', 'status')->format(function ($val){
                $status = $val == 'Diterbitkan' ? 'success' : 'warning';
                return '<div class="badge text-success bg-soft-'. $status .'">'. $val .'</div>';
            })->html(),
            Column::make('Dibuat Oleh', 'user.name'),
            Column::make('Slug', 'slug')->deselected(),
            Column::make('Aksi', 'id')->format(function ($id, $model, $row){
                return view('partials.tombol-aksi', [
                    'hapus' => $id,
                    'edit' => route('tanaman.sunting', $model->slug)
                ]);
            })->unclickable()
        ];
    }
}
