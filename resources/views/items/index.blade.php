@extends('layouts.master')

@section('title', 'index')


@section('content')
    <div class="row">
        <div class="col-4 col--center">
            @include('layouts.logo')
        </div>
    </div>
    <div class="row">
        <h1>Latest items</h1>
        <div class="iron-columns">
            @foreach($items as $item)

                @include('layouts.paper-card', $item)

            @endforeach
        </div>
    </div>
@endsection