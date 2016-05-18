<div>
    <article class="paper-card">
       
        <header class="paper-card__header" style="background-image:url({{asset('assets/img/'.$item->image)}});">
            
        </header>
        
        <main class="paper-card__content">
           <h2 class="paper-card--text">{{$item->header}}</h2>
            {{ $item->content }}
        </main>
        
        <footer class="paper-card__footer">
            <a href="{{url('/items', $item->slug)}}">view</a>
        </footer>
           
        <footer class="paper-card__footer">

                @foreach($item->tags as $tag)
                    <a href="{{ url('category', $tag->slug) }}">{{$tag->name}}</a>
                @endforeach

        </footer>
    </article>
</div>
