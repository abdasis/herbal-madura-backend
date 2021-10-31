<?php

namespace App\Http\Livewire\Pengguna;

use App\Models\User;
use Livewire\Component;

class Sunting extends Component
{

    public  $name;
    public  $email,
        $pendidikan_terakhir,
        $alamat_website,
        $alamat,
        $password,
        $password_confirmation,
        $roles,
        $profesi,
        $user_id;


    public function mount($id)
    {
        $user = User::find($id);

        $this->name = $user->name;
        $this->email = $user->email;
        $this->pendidikan_terakhir = $user->pendidikan_terakhir;
        $this->alamat_website = $user->alamat_website;
        $this->alamat = $user->alamat;
        $this->roles = $user->roles;
        $this->profesi = $user->profesi;
        $this->user_id = $user->id;
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

        ];
    }

    public function simpan()
    {
        $this->validate();
        $user = User::find($this->user_id);
        $user->name = \Str::title($this->name);
        $user->email = $this->email;
        $user->pendidikan_terakhir = $this->pendidikan_terakhir;
        $user->alamat_website = $this->alamat_website;
        $user->alamat  = $this->alamat;
        $user->password = \Hash::make($this->password);
        $user->profesi = $this->profesi;
        $user->roles = $this->roles;
        $user->save();
        $this->alert('success', 'Data berhasil diperbarui');
        $this->redirectRoute('pengguna.semua');

    }
    public function render()
    {
        return view('livewire.pengguna.sunting');
    }
}
