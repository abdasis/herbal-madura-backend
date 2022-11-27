<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Database\QueryException;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Laravolt\Avatar\Facade as Avatar;

class Register extends Component
{
    use LivewireAlert;

    public $name;
    public $email;
    public $pendidikan_terakhir;
    public $password;
    public $password_confirmation;


    public function mount()
    {
        if (\Auth::check()) {
            $this->redirectRoute('login');
        }
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'pendidikan_terakhir' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ];

    }

    public function simpan()
    {
        $this->validate();
        $nama_file = 'upload/' . \Str::slug($this->name) . '.png';
        if (!file_exists('upload')) {
            mkdir(public_path('upload'), 0777);
            Avatar::create($this->name)->save($nama_file, 100);
        }

        //membuat profile berdasarkan nama
        try {
            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'pendidikan_terakhir' => $this->pendidikan_terakhir,
                'password' => bcrypt($this->password),
                'profile_photo_path' => \Str::slug($nama_file) . '.png',
                'roles' => 'user'
            ]);

            auth()->login($user);

            $this->flash('success', 'Berhasil', [
                'text' => 'Selamat pendaftaran anda berhasil silahkan login',
                'toast' => false,
                'position' => 'center'
            ], route('login'));

        } catch (QueryException $exception) {
            return $this->flash('success', 'Terdapat kesalahan sistem');
        }

    }

    public function render()
    {
        return view('livewire.auth.register')->layout('layouts.auth');
    }
}
