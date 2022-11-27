<div>
    <div class="header-post border-bottom border-light">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-7">
                    <h1 class="post-title">{{$tanaman->nama_tanaman}}</h1>
                    <div class="separator"></div>
                    <ul class="list-unstyled p-0 m-0">
                        <li class="d-flex meta-artikel align-items-center gap-2 m-0 mb-2">
                            <i class="ri-calendar-2-line"></i>
                            Diterbitkan pada {{$tanaman->created_at->format('d F Y')}}
                        </li>
                        <li class="d-flex meta-artikel align-items-center gap-2 m-0 mb-2">
                            <i class="mdi mdi-account"></i>
                            Ditulis Oleh pada {{$tanaman->user->name}}
                        </li>
                        <li class="d-flex meta-artikel align-items-center gap-2 m-0 mb-2">
                            <i class="mdi mdi-tag"></i>
                            Nama Latin {{$tanaman->nama_latin}}
                        </li>
                    </ul>
                </div>
                <div class="col-md-5" data-aos="zoom-in" data-aos-delay="500" data-aos-duration=".4">
                    <img src="https://placeimg.com/640/480/nature"  class="rounded mx-auto img-fluid featured-image" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 p-4">
                <div class="sidebar-widget">
                    <h5 class="text-bold widget-title text-quicksand d-flex align-items-center gap-2">
                        <i class="ri-book-read-line"></i>
                        Daftar Isi
                    </h5>
                    <div class="widget-body">
                        <div id="ToC">

                        </div>
                    </div>
                </div>
                <div class="sidebar-widget mt-3" id="vote">
                    <ul class="list-unstyled d-flex align-items-center justify-content-around mb-0">
                        <li class="aksi-lainnya active">
                            <i class="ri-thumb-up-fill"></i>
                        </li>
                        <li class="aksi-lainnya ">
                            <i class="ri-thumb-down-fill"></i>
                        </li>
                        <li class="aksi-lainnya">
                            <i class="ri-bookmark-fill"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card box-content">
                    <div class="card-body bg-transparent">
                        <div class="card-text deskripsi-tanaman">
                            {!! $tanaman->diskripsi_tanaman !!}
                        </div>
                        @if($tanaman->refrensi !=  null)
                            <div class="box-referensi p-3 my-3">
                                <div class="icon-book ">
                                    <h2 class="d-flex align-items-center gap-1">
                                        <i class="ri-file-list-3-line"></i>
                                        Referensi
                                    </h2>
                                </div>
                                {!! $tanaman->refrensi !!}
                            </div>
                        @endif
                        <div class="biografi-penulis">
                            <div class="card-text">
                                <div class="row justify-content-center">
                                    <div class="col d-grid text-center">
                                        <img
                                            src="{{ file_exists('upload' . '/' . $tanaman->user->profile_photo_path) ? asset('upload' . '/' . $tanaman->user->profile_photo_path) : asset('assets/images/avatar.jpg')}}"
                                            class="rounded-circle img-penulis mx-auto">
                                        <h5 class="title-penulis">Disusun Oleh</h5>
                                        <h5 class="nama-penulis">{{$tanaman->user->name ?? 'None'}} <i
                                                class="fas fa-check-circle text-primary"></i></h5>
                                        <div class="card-text diskripsi-penulis mt-2">
                                            <p>
                                                Artikel ini disusun oleh tim penyunting terlatih dan peneliti yang memastikan keakuratan
                                                dan kelengkapannya.

                                                Tim Manajemen Konten wikiHow memantau hasil penyuntingan staf kami secara saksama untuk
                                                menjamin artikel yang berkualitas tinggi. Artikel ini telah dilihat 141.769 kali.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="sidebar-widget mt-3">
                    <h5 class="text-bold widget-title-dark d-flex align-items-center gap-2">
                        <i class="ri-fire-line"></i>
                        Tanaman Lainnya
                    </h5>
                    <div class="widget-body bg-transparent border-0">
                        <ul class="list-unstyled">
                            <li class="container">
                                <div class="row align-items-center py-1 px-1 box-artikel-terkait">
                                    <div class="col-md-4 p-1">
                                        <img src="https://placeimg.com/640/480/nature"  class="rounded mx-auto img-fluid" alt="">
                                    </div>
                                    <div class="col">
                                        <h5 class="mb-0">Title</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                    </div>
                                </div>
                            </li>
                            <li class="container">
                                <div class="row align-items-center py-1 px-1 box-artikel-terkait">
                                    <div class="col-md-4 p-1">
                                        <img src="https://placeimg.com/640/480/nature"  class="rounded mx-auto img-fluid" alt="">
                                    </div>
                                    <div class="col">
                                        <h5 class="mb-0">Title</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                    </div>
                                </div>
                            </li>
                            <li class="container">
                                <div class="row align-items-center py-1 px-1 box-artikel-terkait">
                                    <div class="col-md-4 p-1">
                                        <img src="https://placeimg.com/640/480/nature"  class="rounded mx-auto img-fluid" alt="">
                                    </div>
                                    <div class="col">
                                        <h5 class="mb-0">Title</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                    </div>
                                </div>
                            </li>
                            <li class="container">
                                <div class="row align-items-center py-1 px-1 box-artikel-terkait">
                                    <div class="col-md-4 p-1">
                                        <img src="https://placeimg.com/640/480/nature"  class="rounded mx-auto img-fluid" alt="">
                                    </div>
                                    <div class="col">
                                        <h5 class="mb-0">Title</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@push('js')
    <script>
        // Get ToC div
        toc = document.getElementById("ToC");

        // Create a list for the ToC entries
        tocList = document.createElement("ul");
        tocList.classList.add('list-unstyled')

        // Get the h3 tags - ToC entries
        headers = document.getElementsByTagName("h2");

        // For each h3
        for (i = 0; i < headers.length; i++){
            // Create an id
            name = "h"+i;
            headers[i].id=name;

            // a list item for the entry
            tocListItem = document.createElement("li");

            // a link for the h3
            tocEntry = document.createElement("a");
            tocEntry.setAttribute("href","#"+name);
            tocEntry.innerText=headers[i].innerText;


            tocListItem.appendChild(tocEntry);
            tocList.appendChild(tocListItem);
        }
        toc.appendChild(tocList);
    </script>
@endpush
