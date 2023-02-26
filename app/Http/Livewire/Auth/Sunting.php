<?php

namespace App\Http\Livewire\Auth;

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
    public $telepon;
    public $biodata;
    public $avatar;


    public function mount()
    {
        $user = auth()->user();
        $this->name = $user->name;
        $this->email = $user->email;
        $this->pendidikan_terakhir = $user->pendidikan_terakhir;
        $this->alamat_website = $user->alamat_website;
        $this->alamat = $user->alamat;
        $this->roles = $user->roles;
        $this->profesi = $user->biodata->pekerjaan;
        $this->user_id = $user->id;
        $this->avatar = $user->profile_photo_path;
        $this->biodata = $user->biodata->biodata;
        $this->telepon = $user->biodata->telepon;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'pendidikan_terakhir' => 'required',
            'alamat_website' => 'required',
            'alamat' => 'required',
            'biodata' => 'nullable',
            'telepon' => 'required',
        ];
    }

    public function gantiAvatar()
    {
        $this->validate([
            'avatar' => 'mimes:jpg,png|max:2048'
        ]);
        try {
            if ($this->avatar != null) {
                $nama_file = \Str::slug($this->name);
                $uuid = \Str::uuid();
                $extension = $this->avatar->extension();
                $nama_file = $nama_file . $uuid . '.' . $extension;
                $path = $this->avatar->storeAs('avatar', $nama_file);
                auth()->user()->update([
                    'profile_photo_path' => $path
                ]);
            }
            $this->alert('success', 'Avatar berhasil di perbarui');
        } catch (\Exception $exception) {
            $this->alert('warning', 'Terjadi kesalahan');
        }
    }

    public function simpan()
    {
        $this->validate();
        $user = auth()->user();
        $user->name = \Str::title($this->name);
        $user->pendidikan_terakhir = $this->pendidikan_terakhir;
        $user->alamat_website = $this->alamat_website;
        $user->alamat = $this->alamat;
        $user->save();

        $user->biodata()->updateOrCreate(
            ['user_id' => $user->id],
            [
                'pekerjaan' => $this->profesi,
                'biodata' => $this->biodata,
                'telepon' => $this->telepon,
            ]);


        $this->alert('success', 'Data berhasil diperbarui');
    }

    public function updatePassword()
    {
        $this->validate([
            'password' => 'nullable|confirmed',
            'password_confirmation' => 'required_with:password',
            'email' => 'sometimes|nullable|unique:users,email,' . auth()->user()->id,
        ]);

        try {
            auth()->user()->update([
                'password' => bcrypt($this->password),
                'email' => $this->email,
            ]);
            $this->alert('success', 'Password berhasil update');
        } catch (\Exception $exception) {
            $this->alert('warning', 'Terjadi kesalahan');
        }
    }


    public function render()
    {
        return view('livewire.auth.sunting')->layout('layouts.guest');
    }
}
