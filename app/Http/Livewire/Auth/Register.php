<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public $name, $email, $pendidikan_terakhir, $password;

    public function mount()
    {
        if (\Auth::check())
        {
            $this->redirectRoute('login');
        }
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|unique:users',
            'pendidikan_terakhir' => 'required',
            'password' => 'required',
        ];

    }
    public function simpan()
    {
        $this->validate();
        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->pendidikan_terakhir = $this->pendidikan_terakhir;
        $user->password = \Hash::make($this->password);
        $user->save();
        $this->alert('success', 'Berhasil',[
            'text' => 'Selamat pendaftaran anda berhasil',
            'toast' => false,
            'position' => 'center'
        ]);
        return redirect('/');

    }
    public function render()
    {
        return view('livewire.auth.register')->layout('layouts.guest');
    }
}
