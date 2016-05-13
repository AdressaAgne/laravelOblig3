@extends('layouts.master')

@section('title', $item->header)


@section('content')
<article class="col-12 paper-card">
    <div class="paper-card__content">
        <h1 class="paper-card__content--text">{{$item->header}} <small>Posted by: </small></h1>
        <ul class="paper-chips">
            @foreach($item->tags as $tag)
                <li class="paper-chips__item paper-chips__item--small"><a href="{{ url('/category', $tag->slug) }}">{{$tag->name}}</a></li>
            @endforeach
        </ul>
        <div class="col-4">
            <img src="{{asset('assets/img/'.$item->image)}}" alt="">
        </div>
        
        <div class="col-8">{{ $item->content }}</div>
    </div>
    
    <footer class="paper-card__footer row">
        <a href="">Message Owner</a>
    </footer>
</article>
@endsection