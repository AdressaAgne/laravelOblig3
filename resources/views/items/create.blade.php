@extends('layouts.master')


@section('title', 'Add item')


@section('content')
    <section>
        <div class="paper-card">
            {!! Form::Open(['url' => 'items']) !!}

                @include('items.form', ['submitText' => 'Add Item', 'item' => null, 'selectedTags' => null])

            {!! Form::Close() !!}
        </div>
    </section>
@endsection