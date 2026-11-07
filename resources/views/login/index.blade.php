@extends('layouts.account.main')

@section('main')

    <div class="login-form-bg h-100">
        <div class="container h-100">
            
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <h1 class="error-text text-center text-primary py-5">KIAI</h1>
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                </button> {{ session('success') }}
                            </div>
                        @endif

                        @if (session()->has('loginError'))    
                            <div class="alert alert-warning alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                </button> {{ session('loginError') }}
                            </div>
                        @endif

                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <h4 class="text-center">LOGIN</h4>
                                <form class="mt-5 mb-5 login-input" action="/login" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required autofocus value="{{ old('email') }}">
                                        @error('email')
                                           <div class="invalid-feedback">
                                              {{ $message }}
                                           </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                                        @error('password')
                                           <div class="invalid-feedback">
                                              {{ $message }}
                                           </div>
                                        @enderror
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Login</button>
                                </form>
                                <p class="text-center mt-5 login-form__footer">Dont have account? <a href="/register" class="text-primary">Register</a> now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection







