<header>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-3 py-4">
                <a href="/"><img src="{{ Vite::asset('resources/img/DC_Comics_logo.svg.png') }}" alt="DC logo" width="80px"></a>
            </div>
            <div class="col-9 fw-bold text-end">
                <ul class="m-0">
                    <li><a href="#" class="listLink">CHARACTERS</a></li>
                    <li><a href="{{route('comics.index')}}" class="listLink @yield('active')">COMICS</a></li>
                    <li><a href="#" class="listLink">MOVIES</a></li>
                    <li><a href="#" class="listLink ">TV</a></li>
                    <li><a href="#" class="listLink">GAMES</a></li>
                    <li><a href="#" class="listLink">COLLECTORS</a></li>
                    <li><a href="#" class="listLink">VIDEOS</a></li>
                    <li><a href="#" class="listLink">FANS</a></li>
                    <li><a href="#" class="listLink">NEWS</a></li>
                    <li><a href="#" class="listLink">SHOP</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>