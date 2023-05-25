<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="content-box container">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-header border-0 bg-white">
                        <h5>
                            <a href="{{ route('auth.detail') }}">
                                <i class="ri-arrow-go-back-fill"></i>
                            </a>
                            Perbarui Profile Anda
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-around">
                            <div class="col-md-5 border-light rounded-sm border p-4">
                                <form wire:submit.prevent="simpan">
                                    <div class="form-group mb-3">
                                        <x-form-input name="name" wire:model="name" label="Nama Lengkap"
                                            placeholder="Masukan Nama Lengkap" />
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-form-input name="profesi" wire:model="profesi" label="Profesi Saat Ini"
                                            placeholder="Masukan Profesi" />
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-form-input name="telepon" wire:model="telepon" label="Telp"
                                            placeholder="6281xxxx" />
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-form-select name="pendidikan_terakhir" wire:model="pendidikan_terakhir"
                                            label="Pendidikan Terakhir">
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
                                        <x-form-input name="alamat_website" label="Blog Pribadi"
                                            wire:model="alamat_website" placeholder="Masukan Nama Lengkap" />
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-form-textarea rows="3" wire:model="alamat" name="alamat"
                                            label="Alamat"></x-form-textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-form-textarea rows="6" wire:model="biodata" name="biodata"
                                            label="Biodata Singkat"></x-form-textarea>
                                        <div class="small text-muted">Keterangan ini akan di tampilkan dibawah biodata
                                            setiap artikel yang ditulis
                                        </div>
                                    </div>
                                    <button class="btn btn-primary">
                                        Update Biodata
                                    </button>
                                </form>
                            </div>

                            <div class="col-md-5 border-light rounded-sm border p-4">
                                <form wire:submit.prevent="updatePassword">
                                    <div class="form-group mb-3">
                                        <label for="">Email</label>
                                        <input type="email" name="" wire:model="email" id=""
                                            class="form-control" placeholder="Masukan email aktif">
                                        <x-error-message error="email" />
                                    </div>
                                    <div class="page-title my-4 mb-2">
                                        <h5 class="mb-0">Ganti Password</h5>
                                        <small class="text-muted">Biarkan kosong jika tidak mau mengubah
                                            Password</small>
                                    </div>
                                    <div class="form-group mb-3">
                                        <x-form-input type="password" label="Password" name="password"
                                            wire:model="password" placeholder="Masukan password" />
                                    </div>

                                    <div class="form-group mb-3">
                                        <x-form-input type="password" label="Konfirmasi Password"
                                            name="password_confirmation" wire:model="password_confirmation"
                                            placeholder="Konfirmasi Password" />
                                        <small class="text-muted">Jenis file png, jpg dan ukuran max 2Mb</small>
                                    </div>

                                    <div class="form-group mb-3">
                                        <button class="btn btn btn-primary mt-2">
                                            <i class="ri-save-3-line"></i>
                                            Simpan
                                        </button>
                                    </div>
                                </form>
                                <div class="my-4">
                                    <h5>Ganti Avatar</h5>
                                    <form wire:submit.prevent="gantiAvatar">
                                        <div class="form-group mb-3">
                                            <x-form-input name="avatar" wire:model="avatar" label="Avatar"
                                                type="file" placeholder="Masukan Nama Lengkap" />
                                        </div>
                                        <button class="btn btn-secondary d-flex align-items-center gap-2">
                                            <i class="ri-upload-cloud-line"></i>
                                            Simpan Avatar
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
