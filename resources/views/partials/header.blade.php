<header>
    <div class="container">
        <div class="row">
            <div class="col-content">
                <div class="image">
                    <img src="../img/dc-logo.png" alt="logo">
                </div>
                <ul class="m-0">
                    <li><a href="/">CHARACTERS</a> </li>
                    <li class="{{ Route::currentRouteName() == 'comic.index' ? 'active' : ''}}"><a href="{{route('comic.index')}}">COMICS</a> </li>
                    <li><a href="/">MOVIES</a> </li>
                    <li><a href="/">TV</a> </li>
                    <li><a href="/">GAMES</a> </li>
                    <li><a href="/">COLLECTIBLES</a> </li>
                    <li><a href="/">VIDEOS</a> </li>
                    <li><a href="/">FANS</a> </li>
                    <li><a href="/">NEWS</a> </li>
                    <li><a href="/">SHOP</a> </li>
                </ul>
            </div>
        </div>
    </div>
</header>