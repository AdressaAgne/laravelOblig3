@extends('layouts.master')

@section('title', 'index')


@section('content')

        
        @foreach($items as $item)
        
            @include('layouts.paper-card', $item)
            
        @endforeach
        

@endsection