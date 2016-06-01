@extends('layouts.master')


@section('title', 'Sent Messages')


@section('content')
<h1 class="page-header">{{ $profile->name}}</h1>

<div class="paper-card">
    <div class="paper-card__content">
        <a class="paper-button" href="{{ url('message/send', $profile->email) }}">Send Message</a>
    </div>
    
</div>

@endsection