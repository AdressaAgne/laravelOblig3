<main class="paper-card__content">
   <h1 class="paper-card__content--text">Item to give away</h1>

    <div class="col-12">
        <div class="paper-form">            
            {!! Form::label('header', 'Title:', ['class' => 'paper-form__label']) !!}
            {!! Form::text('header', $item['header'], ['class' => 'paper-form__input']) !!}
        </div>
    </div>

    <div class="col-12">
        <div class="paper-form">
            {!! Form::label('image', 'Image:', ['class' => 'paper-form__label']) !!}
            {!! Form::text('image', $item['image'], ['class' => 'paper-form__input']) !!}
        </div>
    </div>

    <div class="col-12">
        <div class="paper-form" style="height: 100px">
            {!! Form::label('tag_list', 'Select Tags:', ['class' => 'paper-form__label active']) !!}
            {!! Form::select('tag_list[]', $tagList, $selectedTags, ['id' => 'tag_list', 'class' => 'paper-form__input', 'multiple']) !!}
        </div>
    </div>
   
    <div class="col-12">
        <div class="paper-form">
            {!! Form::label('content', 'Content:', ['class' => 'paper-form__label']) !!}
            {!! Form::textarea('content', $item['content'], ['class' => 'paper-form__input']) !!}
        </div>
    </div>
</main>
<footer class="paper-card__footer row">
    {!! Form::submit($submitText, ['class' => 'paper-button']) !!}
</footer>

@section('footer')
    <script>$('#tag_list').select2();</script>
@endsection