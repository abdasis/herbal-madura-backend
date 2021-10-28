<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-sm card-outline card-orange">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="avatar">
                                <img src="{{asset('upload' . '/' . $user->profile_photo_path) ?? asset('dist/img/user.png')}}" alt="avatar-pengguna" class="text-center w-75 img-rounded img-thumbnail mx-auto d-block">
                            </div>
                            <p class="text-center" wire:click.prevent="uploadPhoto({{$user->id}})">
                                <a href="#" class="text-center">
                                    <i class="fas fa-upload"></i>
                                    Update Avatar
                                </a>
                            </p>
                        </div>
                        <div class="col-md-8">
                            <div class="biodata">
                                <h5 class="text-bold">{{$user->name}}</h5>
                                <ul class="list-unstyled">
                                    <li>
                                        <span>
                                            <i class="fas fa-envelope mr-1"></i>{{$user->email}}
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fas fa-link mr-1"></i><a href="{{$user->alamat_website}}">{{$user->alamat_website}}</a>
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fas fa-user-lock mr-1"></i>{{$user->roles}}
                                        </span>
                                    </li>
                                    <li>
                                        <span>
                                            <i class="fas fa-map-marker mr-1"></i>{{$user->alamat}}
                                        </span>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm card-outline card-success">
                <div class="card-body">
                    <div class="card-title mb-2">
                        <h5 class="text-bold">Tulisan Terbaru</h5>
                    </div>
                   <div class="card-text">
                       @forelse($semua_tanaman as $key => $tanaman_detail)
                           <div class="card shadow-none border-light border mb-2">
                               <div class="card-body">
                                   <div class="card-title">
                                       <a href="{{route('tanaman.baca', $tanaman_detail->slug)}}">
                                           <h5 class="title-tanaman">{{$tanaman_detail->nama_tanaman}} (Latin: {{$tanaman_detail->nama_latin}})</h5>
                                       </a>
                                   </div>
                                   <div class="card-text diskripsi-singkat-tanaman">
                                       <p>
                                           {!! Str::limit($tanaman_detail->diskripsi_tanaman, 250) !!}
                                       </p>
                                   </div>
                                   <div class="card-text">
                                       <div class="meta-artikel">
                                           <div class="badge badge-light p-1">{{\Carbon\Carbon::parse($tanaman_detail->created_at)->format('d F Y')}}</div>
                                           <div class="badge badge-light p-1">Ditinjau oleh: {{$tanaman_detail->diverifikasi->name ?? 'Belum diverifikasi'}}</div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       @empty
                           <div class="alert alert-default-info">Belum ada tulisan yang dipublikasi</div>
                       @endforelse
                   </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" wire:ignore id="modalUploadAvatar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">Upload Avatar</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="upload">
                        <div class="form-group">
                            <input type="file" wire:model="photo" class="form-control" name="" id="">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@push('js')

    <script>
        Livewire.on('modalUpload', params => {
            $('#modalUploadAvatar').modal('show')
        })

        Livewire.on('closeModal', params => {
            $('#modalUploadAvatar').modal('hide')

        })
    </script>
@endpush
