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
        $nama_file = 'upload/' . \Str::slug($this->name) . '.png';
        try {
            $user = new User();
            $user->name = $this->name;
            $user->email = $this->email;
            $user->pendidikan_terakhir = $this->pendidikan_terakhir;
            $user->password = \Hash::make($this->password);
            $user->roles = 'user';
            $user->profile_photo_path = \Str::slug($this->name) . '.png';
            $user->save();
            $this->flash('success', 'Berhasil',[
                'text' => 'Selamat pendaftaran anda berhasil silahkan login',
                'toast' => false,
                'position' => 'center'
            ]);
            if ($user){
                if (!file_exists('upload'))
                {
                    mkdir(public_path('upload'), 0777);
                }else{
                    $gambar = Avatar::create($this->name)->save($nama_file, 100);
                }
            }else{
                return false;
            }
            return redirect('/login');
        }catch(QueryException $exception) {
            return $this->flash('success', 'Terdapat kesalahan sistem');
        }

    }
    public function render()
    {
        return view('livewire.auth.register')->layout('layouts.guest');
    }
}
