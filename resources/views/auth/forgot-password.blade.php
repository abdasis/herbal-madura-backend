<x-guest-layout>

    <div class="container">
        <div class="row justify-content-center" style="min-height: 80vh">
            <div class="col-md-5 my-auto">
                <div class="alert alert-info">
                    Untuk request password, pastikan email anda sudah terdaftar di website kami
                </div>
                <div class="card border-bottom border-light shadow-sm">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success mb-4">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <small class="text-danger">{{ $error }}</small> <br>
                                @endforeach
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group">
                                <x-jet-label class="form-label" for="email" value="{{ __('Email') }}" />
                                <x-jet-input id="email" class="form-control bg-light shadow-none" type="email"
                                    placeholder="Masukan email" name="email" :value="old('email')" required autofocus />
                            </div>

                            <button class="btn btn-warning btn-flat my-2 text-white">
                                {{ __('Email Password Reset Link') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
