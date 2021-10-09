<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="row justify-content-center" style="min-height: 100vh">
        <div class="col-md-5">
            <div class="card shadow-none border-0">
               <div class="card-body">
                   <h1 class="title-page-login">Selamat Datang Di Wiki Herbal</h1>
                   <p class="text-muted subtitle-page-login">Daftar untuk menjadi seorang kontributor di <strong>WikiHerbal</strong></p>
                   <div class="register-box px-0">
                       <form wire:submit.prevent="simpan">
                           <div class="form-group">
                               <label for="">Nama Lengkap</label>
                               <input type="text" class="form-control" name="" id="" wire:model="name" placeholder="Masukan nama lengkap">
                           </div>
                           <div class="form-group">
                               <label for="">Email</label>
                               <input type="email" class="form-control" name="" wire:model="email" id="" placeholder="Masukan Email">
                           </div>
                           <div class="form-group">
                               <label for="">Pendidikan Terakhir</label>
                               <select name="" class="custom-select" id="" wire:model="pendidikan_terakhir">
                                   <option value="">Pilih Pendidikan</option>
                                   <option value="SD/Sederajat">SD/Sederajat</option>
                                   <option value="SMP/Sederajat">SMP/Sederajat</option>
                                   <option value="SMA/Sederajat">SMA/Sederajat</option>
                                   <option value="S1">S1</option>
                                   <option value="S2">S2</option>
                                   <option value="S3">S3</option>
                                   <option value="Lainnya">Lainnya</option>
                               </select>
                           </div>
                           <div class="form-group">
                               <label for="">Password</label>
                               <input type="password" class="form-control" name="" wire:model="password" id="" placeholder="Masukan nama lengkap">
                           </div>
                           <div class="form-group">
                               <button class="btn btn-light bg-gradient-orange text-white btn-block rounded-pill">Daftar Sekarang</button>
                           </div>
                       </form>
                   </div>
               </div>
            </div>
        </div>
        <div class="col-md-5">
            <img src="{{asset('dist/img/register-thumbnail.png')}}" class="img-fluid" alt="">
        </div>
    </div>
</div>

@push('css')

    <style>
        .title-page-login{
            font-family: 'Quicksand', sans-serif;
            font-size: 28px;
            font-weight: bold;
            color: #f19066;
        }

        .subtitle-page-login{
            font-family: 'Quicksand', sans-serif;
            font-size: 12px;
        }

    </style>
@endpush
