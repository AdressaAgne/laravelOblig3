@extends('layouts.master')


@section('title', 'Send Message')


@section('content')


<div class="paper-card">
    <div class="paper-card__header" style="background-image: url({{asset('assets/img/'.$itemData->image)}});">

        <h2 class="paper-card__header--text">Send message to owner <small>{{ $itemData->header }}</small></h2>
    </div>
    {!! Form::open(['method' => 'POST', 'url' => 'message/send']) !!}
    <main class="paper-card__content">
    
    
        <div class="paper-form">
            {!! Form::label('to_user', 'To:', ['class' => 'paper-form__label active']) !!}
            {!! Form::select('to_user', $user, $users, ['id' => 'to_user' ,'class' => 'paper-form__input']) !!}
        </div>
        
        <div class="paper-form">
            {!! Form::label('item_id', 'Item:', ['class' => 'paper-form__label active']) !!}
            {!! Form::select('item_id', $item, $items, ['id' => 'item_id', 'class' => 'paper-form__input']) !!}
        </div>
        
        <div class="paper-form">
            {!! Form::label('content', 'Content:', ['class' => 'paper-form__label']) !!}
            {!! Form::textarea('content', null, ['class' => 'paper-form__input']) !!}
        </div>
        .
        
    
    
    </main>
    <footer class="paper-card__footer">
        {!! Form::submit('send', ['class' => 'paper-button']) !!}
    </footer>
    {!! Form::close() !!}
    
</div>
@endsection


@section('scripts')
<script>
    $(function(){
       $('#to_user').select2(); 
       $('#item_id').select2(); 
    });
</script>

@endsection