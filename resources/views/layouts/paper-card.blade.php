<div class="col-l-3 col-4 col-m-6 col-s-6">
    <article class="paper-card">
       
        <header class="paper-card__header" style="background-image:url({{asset('assets/img/'.$item->image)}});">
            <h2 class="paper-card__header--text">{{$item->header}}</h2>
        </header>
        
        <main class="paper-card__content">
            {{ $item->content }}
        </main>
        

        <footer class="paper-card__footer">
            <a href="">view</a>
        </footer>
    </article>
</div>