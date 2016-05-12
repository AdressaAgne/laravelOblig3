@extends('layouts.master')

@section('title', 'index')


@section('content')

    <h1>Latest items</h1>
    <div class="iron-columns">
        @foreach($items as $item)

            @include('layouts.paper-card', $item)

        @endforeach
    </div>

@endsection