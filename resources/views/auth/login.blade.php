@extends('layouts.master')

@section('title', 'login')

@section('content')
<section class="col-l-4 col-6 col-m-8 col-s-12 col--center">
    <div class="paper-card">
        <form class="col-12" role="form" method="POST" action="{{ url('/login') }}" autocomplete="off">
            <main class="paper-card__content">
                <h1 class="paper-card__content--text">Login</h1>

                {!! csrf_field() !!}

                <div class="row{{ $errors->has('email') ? ' has-error' : '' }}">
                    @if ($errors->has('email'))
                        <strong>{{ $errors->first('email') }}</strong>
                    @endif
                    <div class="paper-form">
                        <label for="mail" class="paper-form__label">Mail:</label>
                        <input id="mail" type="email" class="paper-form__input" name="email" value="{{ old('email') }}">
                    </div>
                </div>

                <div class="row{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="paper-form">
                        <label for="password" class="paper-form__label">Password</label>
                        <input id="password" type="password" class="paper-form__input" name="password">
                    </div>
                    @if ($errors->has('password'))
                        <strong>{{ $errors->first('password') }}</strong>
                    @endif
                </div>

                <div class="row">
                    <div class="paper-form">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>
            </main>
            <footer class="paper-card__footer">
                <div class="row">
                    <button type="submit" class="paper-button">Login</button>
                    <a href="{{ url('/password/reset') }}">Forgot Your Password?</a>            
                </div>
            </footer>
        </form>
    </div>
</section>
@endsection
