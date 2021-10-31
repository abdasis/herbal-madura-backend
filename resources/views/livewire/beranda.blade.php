<div>
    <div class="container">
        <div class="blur"></div>
        <div class="row" style="min-height: 90vh">
            <div class="col-md-6 my-auto">
                <div class="content-baner text-center px-4">
                    <img src="{{asset('dist/img/logo.png')}}" class="img-fluid w-50" alt="">
                    <div class="banner-title">
                        <h2 class="text-center">Info Herbal Madura</h2>
                    </div>
                    <div class="content">
                        <p>Selamat datang di <strong>Info Herbal Madura</strong>, adalah situs yang menyediakan berbagai informasi tentang tanaman herbal</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-auto">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="card-text">
                            <p class="title-pencarian">
                                Temukan berbagai informasi tentang tanaman herbal
                            </p>
                            <p class="sub-title">
                                Terdapat 10jt lebih artikel lengkap mengenai tanaman herbal yang ada di seluruh dunia
                            </p>
                        </div>
                        <form wire:submit.prevent="pencarian">
                            <div class="form-group">
                                <input wire:model="keyword" type="text" class="form-control rounded-pill border shadow-sm form-control-lg bg-light" required placeholder="Masukan nama tanaman yang dicari..." name="pencarian" id="">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-warning rounded-pill text-white float-right">Lihat Hasil Pencarian <i class="fas fa-arrow-right"></i> </button>
                            </div>
                        </form>
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
            font-size: 18px;
            font-family: 'Quicksand', sans-serif;
            margin-bottom: 5px;
        }
        .sub-title{
            font-size: 14px;
            font-family: 'Quicksand', sans-serif;
            color: #a3a3a3;
            margin-top: 0;
        }
    </style>
@endpush
