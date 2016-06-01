@section('head')
    <link rel="stylesheet" href="{{asset('assets/css/pie-chart.css')}}">
@endsection
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
            {!! Form::text('image', $item['image'], ['id' => 'image', 'class' => 'paper-form__input']) !!}
        </div>
        <div class="paper-from">
            Drag a image into the circle to upload it.
            <div class="drop dropped" id="drop-container">
                <svg height="150" width="150" class="pie-chart">
                    <circle class="behind"cx="50%" cy="50%" r="40%" />
                    <circle class="front" cx="50%" cy="50%" r="40%" data-percent="0" />
                    <text y="80" transform="translate(80)">
                       <tspan x="0" text-anchor="middle">0%</tspan>
                    </text>
                </svg>
            </div>
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

@section('scripts')
    <script>$('#tag_list').select2();</script>
    <script src="{{asset('assets/js/upload.js')}}"></script>
@endsection