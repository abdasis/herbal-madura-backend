<div>
    <div class="bg-tanaman"></div>
    <div class="container relative">
        <div class="row justify-content-center align-items-center" style="min-height: 80vh">
            <div class="col-md-6">
                <div class="salam text-center">
                    <h2>Planty</h2>
                    <p>Arsip Tentang Tanaman Herbal Terlengkap di Indonesia</p>
                </div>
                <div class="form-pencarian">
                    <div class="form-group">
                        <div class="input-group bg-plant border border-secondary icon-search p-2 rounded-pill">
                            <div class="input-group-text me-2 rounded-circle  border-light bg-white">
                                <i class="ri-search-2-line fs-16"></i>
                            </div>
                            <input type="text" class="form-control border-0 bg-transparent" id="autoSizingInputGroup" placeholder="Pencarian...">
                        </div>
                    </div>
                </div>
               <div class="spotlight mt-4" >
                   <h5 class="mb-3">Spotlight</h5>
                   <div class="row">
                      @foreach($semua_tanaman as $tanaman)
                           <div class="col-md-6">
                               <a href="{{route('tanaman.baca', $tanaman->slug)}}">
                                   <div class="card card-animate">
                                       <div class="card-body">
                                           <h4 class="post-title">{{$tanaman->nama_tanaman}}</h4>
                                           <p>{!! \Illuminate\Support\Str::limit(strip_tags($tanaman->diskripsi_tanaman),45,'') !!}</p>
                                       </div>
                                   </div>
                               </a>
                           </div>
                      @endforeach
                   </div>
               </div>
            </div>
        </div>
    </div>
</div>

@push('css')
    <style>
        .banner-title{
            font-size: 28px;
            font-weight: 700;
            font-family: 'Quicksand', sans-serif;
            margin-top: 10px;
        }
        .title-pencarian{
            font-size: 20px;
            font-family: 'Quicksand', sans-serif;
            margin-bottom: 5px;
            line-height: 22px;
        }
        .sub-title{
            font-size: 14px;
            font-family: 'Quicksand', sans-serif;
            color: #a3a3a3;
            margin-top: 0;
        }

        .blur-bg{
            position: absolute;
            min-width: 100vw;
            min-height: 100vh;
            /* From https://css.glass */
            background: rgba(53, 195, 255, 0.29);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(6.4px);
            -webkit-backdrop-filter: blur(6.4px);
            border: 1px solid rgba(53, 195, 255, 0.3);
        }
        .bg-tanaman{
            position: absolute;
            min-width: 100%;
            min-height: 80vh;
            background: url({{asset('assets/images/bg-tanaman.png')}}) repeat-x;
            background-position: bottom;
            max-width: 100% !important;
        }

        .bg-plant{
            background: url({{asset('assets/images/bg-search.png')}}) no-repeat;
            background-position: right center;
            background-size: contain;
        }

        .post-title{
            font-family: 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
            font-size: 18px;
            font-weight: 500;
        }

    </style>
@endpush
