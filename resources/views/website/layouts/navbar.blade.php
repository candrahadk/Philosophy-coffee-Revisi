<nav class="fh5co-nav" role="navigation">
    <!-- <div class="top-menu"> -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center logo-wrap">
                <div id="fh5co-logo"><a href="index.html">Philosophy Coffee<span>.</span></a></div>
            </div>
            <div class="col-xs-12 text-center menu-1 menu-wrap">
                <ul>
                    <li class="{{ \Route::is('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="{{ \Route::is('menu') ? 'active' : '' }}"><a href="{{ route('menu') }}">Menu</a></li>
                    <li class="{{ \Route::is('reservation') ? 'active' : '' }}"><a
                            href="{{ route('reservation') }}">Reservasi</a></li>
                    <li class="{{ \Route::is('about') ? 'active' : '' }}"><a href="{{ route('about') }}">Tentang</a>
                    </li>
                    <li class="{{ \Route::is('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <!-- </div> -->
</nav>
