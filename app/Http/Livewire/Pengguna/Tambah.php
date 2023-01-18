<?php

namespace App\Http\Livewire\Pengguna;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

use App\Models\User;

class Tambah extends Component
{
    use LivewireAlert;
    public  $name;
    public  $email,
            $pendidikan_terakhir,
            $alamat_website,
            $alamat,
            $password,
            $password_confirmation,
            $profesi,
            $roles;

    public function updated($property)
    {
        return $this->validateOnly($property);
    }

    public function rules()
    {
        return[
            'name' => 'required',
            'email' => 'required',
            'pendidikan_terakhir' => 'required',
            'alamat_website' => 'required',
            'alamat' => 'required',
            'password_confirmation' => 'required',
            'password' => 'required|confirmed',
            'roles' => 'required',
            'profesi' => 'required'
        ];
    }

    public function simpan()
    {
        $this->validate();
        try {
            \DB::beginTransaction();
            $user = new User();
            $user->name = \Str::title($this->name);
            $user->email = $this->email;
            $user->pendidikan_terakhir = $this->pendidikan_terakhir;
            $user->alamat_website = $this->alamat_website;
            $user->alamat  = $this->alamat;
            $user->password = \Hash::make($this->password);
            $user->roles = $this->roles;
            $user->save();

            $user->biodata()->create([
                'pekerjaan' => $this->profesi,
                'telepon' => '-'
            ]);
            \DB::commit();

            $this->alert('success', 'Data berhasil disimpan');
            $this->reset();
        }catch (\Exception $exception){
            $this->alert('warning', 'Terjadi kesalahan');
        }

    }


    public function render()
    {
        return view('livewire.pengguna.tambah');
    }
}
