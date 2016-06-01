@extends('layouts.master')


@section('title', 'Sent Messages')


@section('content')
<h1 class="page-header">Messages from {{ $msg->from->name }}</h1>
<div class="col-12">
    <div class="col-6">
        <div class="paper-card">
            <main class="paper-card__content">
                <p>{{ $msg->content }}</p>
            </main>

        </div>
    </div>
    <div class="col-6">
    @if($msg->item != null)
        @include('layouts.paper-card', ['item' => $msg->item])
    @endif
    </div>
</div>
@endsection