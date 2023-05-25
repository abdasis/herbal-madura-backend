<?php

namespace App\Http\Livewire\Tanaman;

use App\Models\Tanaman;
use App\Models\User;
use App\Traits\AlertConfirm;
use App\Traits\Toast;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

class TabelTanaman extends DataTableComponent
{
    use AlertConfirm;
    use Toast;

    protected $listeners = ['dihapus', 'batal', 'diverifikasi'];

    protected $model = Tanaman::class;
    public function configure(): void
    {
        $this->setPrimaryKey('id')
            ->setTableRowUrl(function ($row){
                return route('tanaman.detail', $row->slug);
            });
        $this->setFilterLayoutSlideDown();
    }

    public function dihapus()
    {
        if ($this->model_id){
            Tanaman::find($this->model_id)->delete();
            $this->toast('success', 'Data berhasil dihapus');
        }else{
            $this->toast('error', 'Data tidak ditemukan');
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
            $this->toast('success', 'Data berhasil diverifikasi');

        }
    }

    public function filters(): array
    {
        return [
            SelectFilter::make('Status')->options([
                '' => 'Semua',
                'Direview' => 'Direview',
                'Diterbitkan' => 'Diterbitkan',
                'Ditolak' => 'Ditolak',
            ])->filter(function (Builder $builder, string $status){
                $builder->where('tanamen.status', $status);
            }),
            SelectFilter::make('User')->options(
                User::orderBy('name', 'asc')
                    ->get()
                    ->keyBy('id')
                    ->map(fn($user) => $user->name)
                    ->toArray()
            )->filter(function (Builder $builder, string $name){
                $builder->where('dibuat_oleh', $name);
            })
        ];
    }

    public function columns(): array
    {
        return [
            Column::make('ID', 'id')->sortable(),
            Column::make('Nama Tanaman', 'nama_tanaman')->sortable()->searchable(),
            Column::make('Nama Latin', 'nama_latin')->sortable()->searchable(),
            Column::make('Status', 'status')->format(function ($val){
                if ($val === 'Diterbitkan'){
                    $status = 'success';
                }elseif($val === 'Direview'){
                    $status = 'warning';
                }else{
                    $status = 'danger';
                }
                return "<span class='badge bg-soft-$status text-$status'>$val</span>";
            })->html(),
            Column::make('Dibuat Oleh', 'user.name'),
            Column::make('Slug', 'slug')->deselected(),
            Column::make('Aksi', 'id')->format(function ($id, $model, $row){
                return view('partials.tombol-aksi', [
                    'hapus' => $id,
                    'verifikasi' => $id,
                    'edit' => route('tanaman.sunting', $model->slug)
                ]);
            })->unclickable()
        ];
    }
}
