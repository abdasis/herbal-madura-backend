<div>
    {{-- Stop trying to control. --}}
    <div class="card card-outline card-orange border-light rounded shadow-sm">
        <div class="card-body">
            <h3 class="card-title mb-3">Biodata</h3>
            <form wire:submit.prevent="simpan">
                <div class="form-group mb-3">
                    <x-form-input name="name" wire:model="name" placeholder="Masukan Nama Lengkap"
                        label="Nama Lengkap" />
                </div>

                <div class="form-group mb-3">
                    <x-form-input type="text" name="profesi" wire:model="profesi" label="Profesi"
                        placeholder="Masukan Profesi" />
                </div>

                <div class="form-group mb-3">

                    <x-form-select name="pendidikan_terakhir" wire:model="pendidikan_terakhir"
                        placeholder="Pilih Pendidikan Terakhir" label="Pendidikan Terakhi">
                        <option value="">Pilih Pendidikan Terakhir</option>
                        <option value="SD/Sederajat">SD/Sederajat</option>
                        <option value="SMP/Sederajat">SMP/Sederajat</option>
                        <option value="SMA/Sederajat">SMA/Sederajat</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </x-form-select>
                </div>

                <div class="form-group mb-3">
                    <x-form-input name="alamat_website" wire:model="alamat_website" label="Personal Website"
                        placeholder="Masukan url personal blog" />
                </div>

                <div class="form-group mb-3">
                    <x-form-textarea rows="6" wire:model="alamat" name="alamat" label="Alamat">
                    </x-form-textarea>
                </div>
                <div class="form-group float-end my-3">
                    <button class="btn btn-primary d-flex align-items-center btn-border gap-1">
                        <i class="ri-save-3-fill"></i>
                        Update Biodata
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="card border-light rounded shadow-sm">
        <div class="card-body">
            <h3 class="card-title mb-3">Pengaturan Akun</h3>
            @if (auth()->id() != $user_id)
                <div class="alert alert-danger">
                    Anda tidak memiliki hak untuk memperbarui data akun ini
                </div>
            @endif
            <form wire:submit.prevent="updateBiodata">
                <div class="form-group mb-3">
                    <x-form-input name="email" wire:model="email" label="Email" placeholder="Masukan email aktif" />
                </div>
                <div class="form-group mb-3">
                    <x-form-input type="password" autocomplete="off" name="password" wire:model="password"
                        label="Password" placeholder="Masukan password" />
                </div>

                <div class="form-group mb-3">
                    <x-form-input type="password" autocomplete="off" name="password_confirmation"
                        wire:model="password_confirmation" label="Konfirmasi Password"
                        placeholder="Masukan Password Kembali" />
                </div>

                <div class="form-group mb-3">
                    <x-form-select name="roles" wire:model="roles" label="Roles">
                        <option value="">Pilih Roles</option>
                        <option value="admin">Admin</option>
                        <option value="kontributor">Kontributor</option>
                        <option value="user">User</option>
                    </x-form-select>
                </div>
                <div class="form-group mb-3">
                    <button class="btn btn btn-primary btn-border float-end mt-2">
                        <i class="ri-save-3-fill"></i>
                        Update Akun
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
