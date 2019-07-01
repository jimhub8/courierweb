@extends('layouts.app')
@section('content')

<template>
    <v-app id="inspire">
        <v-layout row wrap style="height: 100vh;">
            <v-flex sm7 style="background: url(/storage/img/login.jpg);background-attachment: fixed;">
                    <h2><strong style="color: #fff; margin: auto">Get your products in your customers hands faster</strong></h2>
            </v-flex>
            <v-flex sm4 offset-sm1 style="margin: auto;">
                <h2>Boxleo</h2><hr>
                <strong>Welcome back!</strong>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-12">
                        <label for="email" class="ol-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                        <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                    </div>
                </form>
            </v-flex>
        </v-layout>
    </v-app>
</template>
@endsection

@section('style')
<style>
{{-- .layout .flex img{
    margin-left: 60px !important;
} --}}
@media only screen and (max-width: 768px) {
.layout .flex img{
margin-left: 60px !important;
}
}
</style>
@endsection
