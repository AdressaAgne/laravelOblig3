<nav class="paper-navbar active" id="navbar">
    <ul class="col-8 col-m-10 col--center">
        <li class="paper-navbar__item paper-navbar__burger paper-color-1" id="menu-toggle"><a href="#">Menu</a></li>
        <li class="paper-navbar__item"><a href="#">G &amp; G</a></li>
        <li class="paper-navbar__item"><a href="#">Categorys</a>
            <ul>
                @foreach($tags as $tag)
                    <li class="paper-navbar__item"><a href="#{{$tag->name}}">{{$tag->name}}</a></li>
                @endforeach
            </ul>
        </li>
        <li class="paper-navbar__item"><a href="#">Find</a></li>
        <li class="paper-navbar__item"><a href="#">Give</a></li>
        <li class="paper-navbar__item"><a href="#">Search</a></li>
    </ul>
</nav>