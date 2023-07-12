<footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
    <div class="container">
        <div class="row row-pb-md">
            <div class="col-md-4 fh5co-widget">
                <h4>Philosophy Coffee</h4>
                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta
                    adipisci architecto culpa amet.</p>
            </div>
            <div class="col-md-2 col-md-push-1 fh5co-widget">
                <h4>Links</h4>
                <ul class="fh5co-footer-links">
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href="{{ route('menu') }}">Menu</a></li>
                    <li><a href="{{ route('reservation') }}">Reservasi</a></li>
                    <li><a href="{{ route('about') }}">Tentang</a></li>
                    <li><a href="{{ route('contact') }}">Kontak</a></li>
                </ul>
            </div>

        </div>

        <div class="row copyright">
            <div class="col-md-12 text-center">
                <p>
                    <small class="block">&copy; {{ date('Y') . '. ' . 'Philosophy Coffee' }}. All Rights
                        Reserved.</small>

                </p>
                {{--  <p>
                <ul class="fh5co-social-icons">
                    <li><a href="#"><i class="icon-twitter2"></i></a></li>
                    <li><a href="#"><i class="icon-facebook2"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                    <li><a href="#"><i class="icon-dribbble2"></i></a></li>
                </ul>  --}}
                </p>
            </div>
        </div>

    </div>
</footer>
