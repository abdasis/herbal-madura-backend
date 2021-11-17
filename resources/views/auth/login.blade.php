<x-guest-layout>
    <div class="row justify-content-center" style="min-height: 70vh">
        <div class="col-md-4 col-lg-3 my-auto">
            <div class="card shadow-sm p-3 border-0">
                <div class="card-body">
                    <h1 class="title-page-login">Selamat Datang Di Wiki Herbal</h1>
                    <p class="text-muted subtitle-page-login">Login untuk menulis di <strong>WikiHerbal</strong></p>
                    <div class="px-0">
                        @if($errors->any())
                            <div class="alert alert-default-danger">
                                @foreach($errors->all() as $error)
                                    {{$error}}
                                @endforeach
                            </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required autocomplete="current-password" >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="remember">
                                        <label for="remember">
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-4">
                                    <button type="submit" class="btn bg-orange text-white btn-block">Sign In</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                        <p class="text-center mt-4" style="font-family: 'Quicksand', sans-serif">
                            Belum punya akun? silahkan daftar <a href="{{route('auth.register')}}">Disini</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 my-auto">
            <img src="{{asset('dist/img/register-thumbnail.png')}}" class="img-fluid" alt="">
        </div>
    </div>
    @push('css')
        <style>
            .title-page-login{
                font-family: 'Quicksand', sans-serif;
                font-size: 28px;
                font-weight: bold;
                color: #f19066;
            }

            .subtitle-page-login{
                font-family: 'Quicksand', sans-serif;
                font-size: 12px;
            }

        </style>
    @endpush
</x-guest-layout>


