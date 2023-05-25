<x-auth-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh">
            <div class="col-md-5">
                <div class="card rounded-3 border-0 p-3">
                    <div class="card-body">
                        <div class="head-register my-3">
                            <h2 class="">
                                Login
                            </h2>
                            <p>Silahkan login untuk membuat session baru</p>
                        </div>
                        <div class="px-0">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <small class="text-danger">{{ $error }}</small>
                                    @endforeach
                                </div>
                            @endif
                            <form method="POST" action="{{ route('login') }}" autocomplete="off" autofocus="off">
                                @csrf
                                <div class="form-group mb-3">
                                    <x-form-input label="Email" type="email" placeholder="Email" type="email"
                                        name="email" :value="old('email')" required autofocus />

                                </div>

                                <div class="form-group mb-3">
                                    <x-form-input label="Password" type="password" placeholder="Password"
                                        name="password" required autocomplete="current-password" />

                                </div>
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <div class="icheck-primary">
                                            <input class="form-check-primary" type="checkbox" id="remember">
                                            <label for="remember">
                                                Remember Me
                                            </label>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-4 text-end">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="mdi mdi-login"></i>
                                            Sign In
                                        </button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>
                            <p class="mt-4 text-center" style="font-family: 'Quicksand', sans-serif">
                                Belum punya akun? silahkan daftar <a href="{{ route('auth.register') }}">Disini</a> <br>
                                Atau <a href="{{ route('password.request') }}">Lupa Password</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @push('css')
        <style>
        </style>
    @endpush
</x-auth-layout>
