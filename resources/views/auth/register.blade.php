@extends('layouts.master')

@section('content')
<section class="col-l-4 col-6 col-m-8 col-s-12 col--center">
    <div class="paper-card">
        <form class="col-12" role="form" method="POST" action="{{ url('/register') }}">
            <main class="paper-card__content">
                <h1 class="paper-card__content--text">Register</h1>
               
                {!! csrf_field() !!}

                <div class="row{{ $errors->has('name') ? ' has-error' : '' }}">
                    <div class="paper-form">
                        <label for="name" class="paper-form__label">Name:</label>
                        <input id="name" type="text"  class="paper-form__input" name="name" value="{{ old('name') }}">

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="row{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="paper-form">
                        <label for="email" class="paper-form__label">Mail:</label>
                        <input type="email"  class="paper-form__input" name="email" value="{{ old('email') }}">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="row{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="paper-form">
                        <label for="password" class="paper-form__label">Password:</label>
                        <input id="password" type="password"  class="paper-form__input" name="password">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="row{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <div class="paper-form">
                        <label for="password_confirmation" class="paper-form__label">Password Again:</label>
                        <input id="password_confirmation" type="password"  class="paper-form__input" name="password_confirmation">

                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </main>
            <div class="paper-card__footer">
                <div class="row">
                    <button type="submit" class="paper-button">Register</button>
                </div>
            </div>
        </form>
    </div>
</section>                
@endsection
