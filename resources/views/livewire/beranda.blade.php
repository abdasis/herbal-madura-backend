<div>
    <div class="row py-5" style="min-height: 100vh">
        <div class="col-md-6">
            <div class="content-baner text-center px-4">
                <img src="{{asset('dist/img/logo-herbal.png')}}" class="img-fluid w-50" alt="">
                <div class="banner-title">
                    <h2 class="text-center">Wiki Herbal</h2>
                </div>
                <div class="content">
                    <p>Selamat datang di Wiki Herbal, adalah situs yang menyediakan berbagai informasi tentang tanaman herbal</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 my-5">
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
                            <input wire:model="keyword" type="text" class="form-control form-control-lg bg-light border-0" required placeholder="Masukan nama tanaman yang dicari..." name="pencarian" id="">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-light float-right">Lihat Hasil Pencarian <i class="fas fa-arrow-right"></i> </button>
                        </div>
                    </form>
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
