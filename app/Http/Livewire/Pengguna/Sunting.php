<?php

namespace App\Http\Livewire\Pengguna;

use App\Models\User;
use App\Traits\Toast;
use Livewire\Component;

class Sunting extends Component
{

    use Toast;

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

    public function simpan()
    {
        $this->validate([
            'name' => 'required',
            'pendidikan_terakhir' => 'required',
            'alamat_website' => 'required',
            'alamat' => 'required',
        ]);
        $user = User::find($this->user_id);
        $user->name = \Str::title($this->name);
        $user->pendidikan_terakhir = $this->pendidikan_terakhir;
        $user->alamat_website = $this->alamat_website ?? 'Belum diisi';
        $user->alamat = $this->alamat;
        $user->save();

        $user->biodata()->updateOrCreate(
            ['user_id' => $user->id],
            [
                'pekerjaan' => $this->profesi,
                'telepon' => '-'
            ]);

        $this->toast('success', 'Biodata Berhasil Diperbarui');
    }

    public function updateBiodata()
    {
        if (auth()->id() == $this->user_id) {
            $this->validate([
                'email' => 'required|email',
                'password' => 'nullable|confirmed|min:8',
                'password_confirmation' => 'required_with:password|min:8',
                'roles' => 'required',
            ]);

            try {
                $user = User::find($this->user_id);
                $user->update([
                    'password' => $this->password,
                    'email' => $this->email,
                ]);
                $this->toast('success', 'Akun Berhasil Diperbarui');
            } catch (\Exception $exception) {
                report($exception);
                $this->toast('error', 'Terjadi kesalahaan');
            }
        } else {
            $this->toast('error', 'Anda tidak memiliki akses');
        }
    }


    public function render()
    {
        return view('livewire.pengguna.sunting');
    }
}
