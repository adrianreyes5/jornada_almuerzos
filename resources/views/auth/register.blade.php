@extends('layouts.app_auth')

@section('content')
<div class="container">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-md-7 col-lg-5 mx-auto">
            <div class="middle-box my-4">
                <div class="card">        
                    <div class="card-body p-4">
                        <div class="card-body-login mb-30">
                            <img src="{{ asset('img/logo.png')}}" alt="">
                        </div>
                        <div>
                            <h4 class="font-18 mb-1">Crear una cuenta nueva</h4>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
    
                            <div class="form-group">
                                <label for="name" class="">{{ __('Nombre') }}</label>
    
                                <div class="">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Ingresa tu nombre">
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group">
                                <label for="email" class="">{{ __('Correo Electronico') }}</label>
    
                                <div class="">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Ingresa tu correo">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group">
                                <label for="password" class="">{{ __('Contraseña') }}</label>
    
                                <div class="">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Ingresa tu contraseña">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group">
                                <label for="password-confirm" class="">{{ __('Confirmar Contraseña') }}</label>
    
                                <div class="">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="confirma tu contraseña">
                                </div>
                            </div>
    
                            <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-info btn-block">
                                        {{ __('Register') }}
                                    </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
