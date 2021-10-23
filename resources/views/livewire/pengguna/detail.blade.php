<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <div class="row">
        <div class="col-md-8">
            <div class="card shadow-sm card-outline card-orange">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="avatar">
                                <img src="{{asset('dist/img/user.png')}}" alt="avatar-pengguna" class="text-center  mx-auto d-block">
                            </div>
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
                       @foreach($semua_tanaman as $key => $tanaman_detail)
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
                                           <div class="badge badge-light p-1">12 Agustus 2021</div>
                                           <div class="badge badge-light p-1">Ditinjau oleh: Abdul Aziz, SpOG</div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       @endforeach
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
