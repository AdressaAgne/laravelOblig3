@extends('layouts.master')

@section('title', $item->header)


@section('content')

<div class="col-2">
   <h1>Tags</h1>
    <ul>
    @foreach($item->tags as $tag)
        <li><a href="{{ url('category', $tag->slug) }}">{{$tag->name}}</a></li>
    @endforeach
    </ul>
</div>
<article class="paper-card col-10">
    <header class="paper-card__header" style="background-image:url({{asset('assets/img/'.$item->image)}});">

    </header>

    <main class="paper-card__content">
       <h2 class="paper-card--text">{{$item->header}} <small>Posted by: {{$item->user->name}}</small></h2>
        {{ $item->content }}
    </main>

    <footer class="paper-card__footer">
        <div class="row">
            <a href="/message/send/{{$item->user->email}}" class="paper-button">Message Owner</a>
            <a href="/items/{{$item->slug}}/edit">Edit</a>
            <a href="/items/{{$item->slug}}/delete">Delete</a>
        </div>
    </footer>
</article>

@endsection