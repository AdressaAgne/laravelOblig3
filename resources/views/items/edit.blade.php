@extends('layouts.master')


@section('title', 'Edit item')


@section('content')
    <section>
        <div class="paper-card">
            {!! Form::Open(['method' => 'PATCH', 'url' => 'items/'.$item->slug]) !!}

                @include('items.form', ['submitText' => 'Update Item', 'item' => $item])

            {!! Form::Close() !!}
        </div>
    </section>
@endsection