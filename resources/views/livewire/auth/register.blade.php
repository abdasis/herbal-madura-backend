<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="row justify-content-center" style="min-height: 100vh">
        <div class="col-md-4 col-lg-3 my-auto">
            <div class="card shadow-sm p-3 border-0">
               <div class="card-body">
                   <h1 class="title-page-login">Selamat Datang Di <br> Info Herbal Madura</h1>
                   <p class="text-muted subtitle-page-login">Daftar untuk menjadi seorang kontributor di <strong>Info Herbal Madura</strong></p>
                   <form wire:submit.prevent="simpan">
                       <div class="form-group">
                           <label for="">Nama Lengkap</label>
                           <input type="text" class="form-control" name="" id="" wire:model="name" placeholder="Masukan nama lengkap">
                           <x-error-message error="name"/>
                       </div>
                       <div class="form-group">
                           <label for="">Email</label>
                           <input type="email" class="form-control" name="" wire:model="email" id="" placeholder="Masukan Email">
                           <x-error-message error="email"/>

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
                           <x-error-message error="pendidikan_terakhir"/>

                       </div>
                       <div class="form-group">
                           <label for="">Password</label>
                           <input type="password" class="form-control" name="" wire:model="password" id="" placeholder="Masukan Password">
                           <x-error-message error="password"/>

                       </div>
                       <div class="form-group">
                           <button class="btn btn-light bg-gradient-orange text-white btn-block">Daftar Sekarang</button>
                       </div>
                   </form>

               </div>
            </div>
        </div>
        <div class="col-md-4 my-auto">
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
