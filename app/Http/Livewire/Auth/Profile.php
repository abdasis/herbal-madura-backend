<?php

namespace App\Http\Livewire\Auth;

use App\Models\Tanaman;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Profile extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $user, $semua_tanaman;
    public $photo;
    public $user_id;
    public $keyword;

    protected $queryString = ['keyword'];


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

        $this->semua_tanaman = Tanaman::where('dibuat_oleh', $this->user->id)->get();

    }
    public function render()
    {
        $data_tanaman   =  Tanaman::where('dibuat_oleh', auth()->id())
            ->when($this->keyword, function (Builder $builder){
                $builder->where('nama_tanaman', 'LIKE', "%$this->keyword");
            })
            ->paginate(5);
        return view('livewire.auth.profile',[
            'total_kontribusi' => auth()->user()->tanaman()->where('status', 'Diterbitkan')->count(),
            'total_direview' => auth()->user()->tanaman()->where('status', 'Direview')->count(),
            'data_tanaman' => $data_tanaman
        ])->layout('layouts.guest');
    }
}
