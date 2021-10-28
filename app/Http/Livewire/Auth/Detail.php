<?php

namespace App\Http\Livewire\Auth;

use App\Models\Tanaman;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Detail extends Component
{
    use WithFileUploads;


    public $user, $semua_tanaman;

    public $photo;
    public $user_id;


    public function upload()
    {
        $nama_gambar = $this->photo->getClientOriginalName();
        $user = User::find($this->user_id);
        $user->profile_photo_path = $nama_gambar;
        $user->save();
        $this->photo->storeAs('storage', $nama_gambar);
        $this->alert('success', 'Profile berhasil diupload');
        $this->emit('closeModal');
        $this->mount($this->user_id);

    }

    public function uploadPhoto($id)
    {
        $this->user_id = $id;
        $this->emit('modalUpload');


    }

    public function mount($id)
    {
        $this->user = User::find($id);
        $this->semua_tanaman = Tanaman::where('dibuat_oleh', $id)->get();

    }
    public function render()
    {
        return view('livewire.auth.detail')->layout('layouts.guest');
    }
}
