<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="content-box container">
        <div class="card card-body">
            <div class="row justify-content-around">
                <div class="col-md-12 rounded-sm p-4">
                    <div class="row">
                        <div class="col-md-4">
                            <h3 class="card-title">Biodata</h3>
                            <p>
                                Biodata data sangat penting untuk diisi apabila Anda menjadi seorang kontributor,
                                Jika biodata anda kurang lengkap tulisan yang Anda publikasikan tidak akan diterima
                            </p>

                            <p>Contoh Pengisian Bidata:</p>
                            <ul class="list-group contoh-biodata ps-2">
                                <li>
                                    <p><strong>Nama Lengkap</strong>: Ibnu Sina</p>
                                </li>
                                <li>
                                    <p><strong>Profesi Saat Ini</strong>: Guru</p>
                                </li>
                                <li>
                                    <p><strong>Telp</strong>: 081944999xxxxx</p>
                                </li>
                                <li>
                                    <p><strong>Pendidikan Terakhir</strong>: SMA</p>
                                </li>
                                <li>
                                    <p><strong>Blog Pribadi</strong>: https://ibnusina.com</p>
                                </li>
                                <li>
                                    <p><strong>Alamat</strong>: Tanah Merah, Bangkalan, Madura</p>
                                </li>
                                <li>
                                    <p><strong>Biodata</strong>: Saya seorang bapak dokter kalau senggang suka nulis
                                        artikel</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-8">
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
                                    <x-form-input name="alamat_website" label="Blog Pribadi" wire:model="alamat_website"
                                        placeholder="Masukan Nama Lengkap" />
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
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-body">
            <div class="row p-4">
                <div class="col-md-4">
                    <h3 class="card-title">Akun</h3>
                    <p>
                        Data akun digunakan untuk Anda yang ingin login ke Aplikasi, maka dari itu sangat
                        penting anda mengingat dan menyimpan data aku ini. Jika anda ingin memperbarui
                        silahkan perbarui pada form yang disediakan
                    </p>

                    <p>Contoh Pengisian Akun:</p>
                    <ul class="list-group contoh-biodata ps-2">
                        <li>
                            <p><strong>Email</strong>: id.ibnusina@gmail.com</p>
                        </li>
                        <li>
                            <p><strong>Password</strong>: passwordrahasia</p>
                        </li>
                        <li>
                            <p><strong>Password Konfirmasi</strong>: Password ditulis ulang</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <form wire:submit.prevent="updatePassword">
                        <div class="form-group mb-3">
                            <label for="">Email</label>
                            <input type="email" name="" wire:model="email" id="" class="form-control"
                                placeholder="Masukan email aktif">
                            <x-error-message error="email" />
                        </div>
                        <div class="page-title my-4 mb-2">
                            <h5 class="mb-0">Ganti Password</h5>
                            <small class="text-muted">Biarkan kosong jika tidak mau mengubah
                                Password</small>
                        </div>
                        <div class="form-group mb-3">
                            <x-form-input type="password" label="Password" name="password" wire:model="password"
                                placeholder="Masukan password" />
                        </div>

                        <div class="form-group mb-3">
                            <x-form-input type="password" label="Konfirmasi Password" name="password_confirmation"
                                wire:model="password_confirmation" placeholder="Konfirmasi Password" />
                            <small class="text-muted">Jenis file png, jpg dan ukuran max 2Mb</small>
                        </div>

                        <div class="form-group mb-3">
                            <button class="btn btn btn-primary mt-2">
                                <i class="ri-save-3-line"></i>
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="card card-body">
            <div class="my-12 p-4">
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="card-title">Avatar</h3>
                        <p>
                            Avatar akan ditampilkan ketika Anda menerbitkan sebuah artikel, avatar ini akan
                            kami tampilkan diakhir artikel yang Anda buat
                        </p>
                    </div>
                    <div class="col-md-8">
                        <form wire:submit.prevent="gantiAvatar">
                            @if ($avatar)
                                <img src="{{ asset($avatar->temporaryUrl()) }}"
                                    class="avatar-md rounded-circle mx-auto my-3 border" alt="">
                            @else
                                @if ($avatar_sekarang)
                                    <img src="{{ asset($avatar_sekarang) }}"
                                        class="avatar-md rounded-circle mx-auto my-3 border" alt="">
                                @else
                                    <img src="{{ asset('assets/images/avatar.jpg') }}"
                                        class="avatar-md rounded-circle mx-auto my-3 border" alt="">
                                @endif
                            @endif
                            <div class="form-group mb-3">
                                <x-form-input name="avatar" wire:model="avatar" label="Avatar" type="file"
                                    placeholder="Masukan Nama Lengkap" />
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

@push('css')
    <style>
        p {
            font-family: 'Inter', sans-serif !important;
        }

        .contoh-biodata p {
            font-size: 14px;
            font-weight: 400;
            line-height: 20px;
            margin-bottom: 5px;
        }
    </style>
@endpush
