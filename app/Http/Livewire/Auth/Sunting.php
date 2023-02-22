<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class Sunting extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public $name;
    public $email,
        $pendidikan_terakhir,
        $alamat_website,
        $alamat,
        $password,
        $password_confirmation,
        $roles,
        $profesi,
        $user_id;

    public $avatar;


    public function mount($id)
    {
        if ($id != auth()->id()) {
            $this->flash('error', 'Kesalahan', [
                'text' => 'Terjadi kesalahaan pada halaman yang dituju'
            ], route('auth.detail', auth()->id()));
        } else {
            $user = User::find($id);
            $this->name = $user->name;
            $this->email = $user->email;
            $this->pendidikan_terakhir = $user->pendidikan_terakhir;
            $this->alamat_website = $user->alamat_website;
            $this->alamat = $user->alamat;
            $this->roles = $user->roles;
            $this->profesi = $user->biodata->pekerjaan;
            $this->user_id = $user->id;

        }
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'pendidikan_terakhir' => 'required',
            'alamat_website' => 'required',
            'alamat' => 'required',
            'password' => 'nullable|confirmed',
            'password_confirmation' => 'required_with:password',
            'roles' => 'required',

        ];
    }

    public function simpan()
    {
        $this->validate();

        //jika ada file avatar


        $user = User::find($this->user_id);
        //update password jika password tidak null
        if ($this->password != null) {
            $user->password = \Hash::make($this->password);
        }

        if ($this->avatar != null){
            $nama_file = \Str::slug($this->name);
            $uuid = \Str::uuid();
            $extension = $this->avatar->extension();
            $nama_file = $nama_file . $uuid . '.' . $extension;
            $path =  $this->avatar->storeAs('avatar', $nama_file);
            $user->profile_photo_path = $path;
        }
        $user->name = \Str::title($this->name);
        $user->email = $this->email;
        $user->pendidikan_terakhir = $this->pendidikan_terakhir;
        $user->alamat_website = $this->alamat_website;
        $user->alamat = $this->alamat;
        $user->save();

        $user->biodata()->updateOrCreate(
            ['user_id' => $user->id],
            [
                'pekerjaan' => $this->profesi,
                'telepon' => '-'
            ]);


        $this->alert('success', 'Data berhasil diperbarui');
    }


    public function render()
    {
        return view('livewire.auth.sunting')->layout('layouts.guest');
    }
}
