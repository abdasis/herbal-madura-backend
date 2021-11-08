<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="blur"></div>
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="row p-2">
                    <div class="col-md-6">
                        <img src="{{asset('upload/' . '/' . $produk->gambar_produk)}}" class="img-fluid rounded" alt="">
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@push('css')
    <style>
        .riwayat-revisi h5{
            font-weight: bold;
            font-family: 'Quicksand', sans-serif;
            font-size: 18px;
        }
        #blogContents{
            background: #f6f6f6;
            padding: 20px;
            border: 1px solid #f5f5f5;
            border-radius: 10px;
        }
        #blogContents a, ol, li{
            color: #cd6133;
            font-family: 'Quicksand', sans-serif;
            font-size: 18px;
            font-weight: 600;
            margin-left: 10px;
        }
        .profile-pakar p{
            font-family: 'Quicksand', sans-serif;
            font-size: 12px;
        }
        .diskripsi-tanaman{
            font-family: 'Quicksand', sans-serif;
        }
        .title-tanaman, .title-tanaman p{
            font-family: 'Quicksand', sans-serif;
            font-weight: 700;
        }
        .meta-artikel{
            font-family: 'Quicksand', sans-serif;
        }

        .img-penulis{
            height: 70px;
            object-fit: scale-down;
        }
        .title-penulis{
            font-size: 12px;
            font-family: 'Quicksand', sans-serif;
            margin: 0;
        }
        .nama-penulis{
            font-size: 18px;
            font-family: 'Quicksand', sans-serif;
            font-weight: 700;
        }
        .diskripsi-penulis{
            font-family: 'Quicksand', sans-serif;
        }

        ol a{
            color: #cd6133;
        }
    </style>
@endpush

@push('js')
    <script src="{{asset('dist/js/jquery.toc.min.js')}}"></script>
@endpush
