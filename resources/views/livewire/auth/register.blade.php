<div>
    <div class="container">
        <div class="row justify-content-center" style="min-height: 100vh">
            <div class="col-md-5 my-auto">
                <div class="card rounded-3 p-3 box-register border-0">
                    <div class="card-body ">
                        <div class="head-register my-3">
                            <h2 class="">
                                Register
                            </h2>
                            <p>Buat akun dan mulailah berkontribusi</p>
                        </div>
                        <form wire:submit.prevent="simpan">
                            <div class="form-group mb-3">
                                <x-form-input type="text" name="name" wire:model.defer="name" label="Nama Lengkap" placeholder="Masukan nama lengkap"/>
                            </div>
                            <div class="form-group mb-3">
                                <x-form-input type="email" name="email" wire:model.defer="email" placeholder="Masukan Email" label="Email" />
                            </div>
                            <div class="form-group mb-3">
                                <x-form-select name="pendidikan_terakhir" label="Pendidikan Terakhir" wire:model.defer="pendidikan_terakhir">
                                    <option value="">Pilih Pendidikan</option>
                                    <option value="SD/Sederajat">SD/Sederajat</option>
                                    <option value="SMP/Sederajat">SMP/Sederajat</option>
                                    <option value="SMA/Sederajat">SMA/Sederajat</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                    <option value="Lainnya">Lainnya</option>
                                </x-form-select>
                            </div>
                            <div class="form-group mb-3">
                                <x-form-input type="password" name="password" wire:model.defer="password" label="Password"/>
                            </div>
                            <div class="form-group mb-3">
                                <x-form-input type="password" name="password_confirmation" wire:model.defer="password_confirmation" label="Konfirmasi Password"/>
                            </div>
                            <div class="form-group d-grid">
                                <button class="btn btn-success btn-success justify-content-center btn-border d-flex gap-1 align-items-center float-end">
                                    <i class="mdi mdi-account-plus"></i>
                                    Daftar Sekarang
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="my-3">
                    <div class="text-center">
                        <a href="{{route('login')}}">Sudah memiliki akun?</a>
                    </div>
                </div>
            </div>
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
