@extends('layouts.master')


@section('title', 'Add item')


@section('content')
<section>
    <div class="paper-card">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/items') }}">
            @include('items.form')
        </form>
    </div>
</section>

@endsection