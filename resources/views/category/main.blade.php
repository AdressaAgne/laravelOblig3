@extends('layouts.master')


@section('title', 'Categories')


@section('content')

    <h1>Categories <small>({{$tags->count()}})</small></h1>
    
    @foreach($tags as $tag)
        <div class="col-6 col-l-4 col-m-6">
            <a href="{{ url('/category', $tag->slug) }}">{{$tag->name}} <small>({{$tag->items->count()}})</small></a>
        </div>
    @endforeach

@endsection