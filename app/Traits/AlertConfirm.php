<?php

namespace App\Traits;

trait AlertConfirm
{
    public $model_id;


    public function hapus($id)
    {
        $this->confirm('Yakin hapus data ini?', [
            'text' => 'Data yang dihapus tidak dapat dikembalikan',
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => 'Batal',
            'confirmButtonText' => 'Yakin',
            'onConfirmed' => 'dihapus',
            'onCancelled' => 'batal'
        ]);

        $this->model_id = $id;
    }

    public function verifikasi($id)
    {
        $this->confirm('Yakin verifikasi data ini?', [
            'text' => 'Jika setuju maka anda akan jadi pemverifikasi data!',
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => 'Batal',
            'confirmButtonText' => 'Yakin',
            'onConfirmed' => 'diverifikasi',
            'onCancelled' => 'batalVerifikasi'
        ]);

        $this->model_id = $id;
    }

    public function batal()
    {
        return $this->alert('info', 'Penghapusan dibatalkan');
    }


}
