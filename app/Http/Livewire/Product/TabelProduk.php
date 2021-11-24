<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use App\Traits\AlertConfirm;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class TabelProduk extends DataTableComponent
{

    use AlertConfirm;

    protected $listeners = ['dihapus', 'batal'];
    public function dihapus()
    {
        if ($this->model_id){
            Product::find($this->model_id)->delete();
            $this->alert('success', 'Data berhasil dihapus');
        }else{
            $this->alert('success', 'Data tidak ditemukan');
        }
    }
    public function columns(): array
    {
        return [
            Column::make('ID', 'id')->sortable(),
            Column::make('Nama Produk', 'nama_produk')->sortable()->searchable(),
            Column::make('Deskripsi', 'deskripsi')->format(function ($val){
                return strip_tags($val);
            })->sortable()->searchable(),
            Column::make('Produsen', 'produsen')->sortable()->searchable(),
            Column::make('Option', 'id')->format(function ($val){
                return view('partials.tombol-aksi',[
                    'edit' => route('product.sunting', $val),
                    'hapus' => $val,
                ]);
            })->sortable()->searchable(),


        ];
    }

    public function query(): Builder
    {
        return Product::query();
    }
}
