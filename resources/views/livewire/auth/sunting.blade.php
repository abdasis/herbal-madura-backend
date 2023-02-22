<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="container content-box">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-white border-0">
                        <h5>Halaman Update Akun</h5>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="simpan">
                            <div class="row justify-content-around  ">
                                <div class="col-md-5 border border-light rounded-sm p-4">
                                    <div class="form-group mb-3">
                                        <x-form-input name="name" wire:model="name" label="Nama Lengkap" placeholder="Masukan Nama Lengkap" />
                                    </div>

                                    <div class="form-group mb-3">
                                        <x-form-input name="profesi" wire:model="profesi" label="Profesi Saat Ini" placeholder="Masukan Profesi" />
                                    </div>

                                    <div class="form-group mb-3">
                                        <x-form-select name="pendidikan_terakhir" wire:model="pendidikan_terakhir" label="Pendidikan Terakhir">
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
                                        <x-form-input  name="alamat_website" label="Blog Pribadi" wire:model="alamat_website" placeholder="Masukan Nama Lengkap" />
                                    </div>

                                    <div class="form-group mb-3">
                                        <x-form-textarea rows="6" wire:model="alamat" name="alamat" label="Alamat"> </x-form-textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-form-input name="avatar" wire:model="avatar" label="Avatar" type="file" placeholder="Masukan Nama Lengkap" />
                                    </div>

                                </div>
                                <div class="col-md-5 border border-light rounded-sm p-4">
                                    <div class="form-group mb-3">
                                        <label for="">Email</label>
                                        <input type="email" name="" wire:model="email" id="" class="form-control" placeholder="Masukan email aktif">
                                        <x-error-message error="email"/>
                                    </div>
                                    <div class="my-4 mb-2 page-title">
                                        <h5 class="mb-0">Ganti Password</h5>
                                        <small class="text-muted">Biarkan kosong jika tidak mau mengubah Password</small>
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-form-input type="password" label="Password" name="password" wire:model="password" placeholder="Masukan password" />
                                    </div>

                                    <div class="form-group mb-3">
                                        <x-form-input type="password" label="Konfirmasi Password" name="password_confirmation" wire:model="password_confirmation" placeholder="Konfirmasi Password"/>
                                    </div>

                                    <div class="form-group mb-3">
                                        <button class="btn btn btn-primary mt-2">
                                            <i class="ri-save-3-line"></i>
                                            Simpan
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
