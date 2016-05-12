@extends('layouts.master')


@section('title', $tag->name)



@section('content')
    <h1>Category: {{$tag->name}}</h1>
    <div class="iron-columns">
        @foreach($tag->items as $item)
            @include('layouts.paper-card', $item)
        @endforeach
    </div>
@endsection