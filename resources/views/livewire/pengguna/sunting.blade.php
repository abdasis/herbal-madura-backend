<div>
    {{-- Stop trying to control. --}}
    <div class="row">
        <div class="col-md-5">
            <div class="card card-outline card-orange shadow-sm">
                <div class="card-header bg-white border-bottom border-lighter">
                    Form Tambah Pengguna
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="simpan">
                        <div class="form-group">
                            <label for="">Nama Pengguna</label>
                            <input type="text" name="" wire:model="name" id="" class="form-control" placeholder="Masukan Nama Lengkap">
                            <x-error-message error="name"/>
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="" wire:model="email" id="" class="form-control" placeholder="Masukan email aktif">
                            <x-error-message error="email"/>
                        </div>

                        <div class="form-group">
                            <label for="">Pendidikan Terakhir</label>
                            <select name="" wire:model="pendidikan_terakhir" class="custom-select shadow-none" id="">
                                <option value="">Pilih Pendidikan Terakhir</option>
                                <option value="SD/Sederajat">SD/Sederajat</option>
                                <option value="SMP/Sederajat">SMP/Sederajat</option>
                                <option value="SMA/Sederajat">SMA/Sederajat</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                            <x-error-message error="pendidikan_terakhir"/>
                        </div>

                        <div class="form-group">
                            <label for="">Blog Pribadi</label>
                            <input type="text" name="" wire:model="alamat_website" id="" class="form-control" placeholder="Masukan Nama Lengkap">
                            <x-error-message error="alamat_website"/>
                        </div>

                        <div class="form-group">
                            <label for="">Alamat Tinggal</label>
                            <textarea type="text" class="form-control" rows="6" wire:model="alamat" name="" id=""></textarea>
                            <x-error-message error="alamat"/>
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="" wire:model="password" id="" class="form-control" placeholder="Masukan password">
                            <x-error-message error="password"/>
                        </div>

                        <div class="form-group">
                            <label for="">Konfirmasi Password</label>
                            <input type="password" name="" wire:model="password_confirmation" id="" class="form-control" placeholder="Konfirmasi Password">
                            <x-error-message error="password_confirmation"/>
                        </div>

                        <div class="form-group">
                            <label for="">Roles</label>
                            <select name="" wire:model="roles" class="custom-select shadow-none" id="">
                                <option value="">Pilih Roles</option>
                                <option value="admin">Admin</option>
                                <option value="kontributor">Kontributor</option>
                                <option value="user">User</option>
                            </select>
                            <x-error-message error="roles"/>
                        </div>

                        <div class="form-group">
                            <button class="btn btn btn-warning">Tambah Pengguna</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
