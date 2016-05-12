@extends('layouts.master')


@section('title', 'Add item')


@section('content')
<section>
    <div class="paper-card">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/items') }}">
            <main class="paper-card__content">
               <h1 class="paper-card__content--text">Item to give away</h1>

           
                {!! csrf_field() !!}

                <div class="col-12">
                    <div class="paper-form">
                        <label for="title" class="paper-form__label{{ old('title') ? ' active' : '' }}">Title:</label>
                        <input id="title" type="text" class="paper-form__input" name="title" value="{{ old('title') }}">
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="paper-form">
                        <label for="image" class="paper-form__label{{ old('image') ? ' active' : '' }}">Image url:</label>
                        <input id="image" type="text" class="paper-form__input" name="image" value="{{ old('title') }}">
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="paper-form" style="height: 100px">
                        <label class="paper-form__label active">Tags:</label>
                        
                        @foreach($tags as $tag)
                           <div class="col-4 col-m-6">
                            <label>
                                <input type="checkbox" value="{{$tag->id}}" name="tags[]"> {{$tag->name}}
                            </label>
                            </div>
                        @endforeach

                    </div>
                </div>
                
                <div class="col-12">
                    <div class="paper-form">
                        <label for="content" class="paper-form__label{{ old('content') ? ' active' : '' }}">Content:</label>
                        <textarea id="content" name="content" class="paper-form__textarea" id="" cols="30" rows="10">{{ old('title') }}</textarea>
                    </div>
                </div>
            </main>
            <footer class="paper-card__footer row">
                <input type="submit" class="paper-button">
            </footer>
        </form>
    </div>
</section>

@endsection