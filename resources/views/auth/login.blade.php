@extends('layouts.auth')

@section('loginContent')
<div class="header-login">
    <div class="header-bg" style="background-image: url('/assets/img/login_bg.png');"></div>
    <section class="login-page" >
        <div class="form-box">
            <div class="form-value">
                @isset($url)
                <form method="POST" action='{{ url("login/$url") }}' label="{{ __('Login') }}">
                @else
                <form method="POST" action="{{ route('login') }}" label="{{ __('Login') }}">
                @endisset
                    @csrf
                    <div class="logo-title">
                        <img class="logo" src="/assets/img/logo.png">
                        @isset($url)
                            @if ($url == 'admin')
                                <h2>Prestige Co. Admin</h2>
                            @endif
                            @if ($url == 'clerk')
                                <h2>Prestige Co. Clerk</h2>
                            @endif
                        @else
                            <h2>Prestige Co.</h2>
                        @endisset
                    </div>
                    <div class="input-box input-email">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" autocomplete="email" autofocus required>
                    </div>
                    <div class=".error-email-password">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong class="error-message">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-box input-password">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" placeholder="Password" autocomplete="current-password" required >
                    </div>
                    <div class=".error-email-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong class="error-message">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn">
                        {{ __('Login') }}
                    </button>
                </form>
            </div>
        </div>
    </section>
</div>

@endsection