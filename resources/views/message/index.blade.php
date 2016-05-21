@extends('layouts.master')


@section('title', 'Inbox');


@section('content')
<h1>Messages <small>Click on a message to view it</small></h1>

<h3>
    <a href="{{url('message')}}">Inbox</a>
    <a href="{{url('message/sent')}}">Sent</a>
</h3>
<div class="table">
    <div class="table__head">
        <div class="table__cell">From</div>
        <div class="table__cell">Item</div>
        <div class="table__cell">Content</div>
        <div class="table__cell">Time</div>
    </div>
    
@foreach(Auth::user()->inbox as $msg)
    <a href="{{ url('/message', $msg->id) }}">
        <div class="table__cell">{{$msg->from->name}}</div>
        <div class="table__cell">{{$msg->item->header}}</div>
        <div class="table__cell">{{$msg->content}}</div>
        <div class="table__cell">{{$msg->created_at}}</div>
    </a>
@endforeach
    
</div>
@endsection