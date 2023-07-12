 @extends('website.layouts.main')
 @section('content')
     <header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner"
         style="background-image: url({{ asset('website/images/hero_1.jpeg') }});" data-stellar-background-ratio="0.5">
         <div class="overlay"></div>
         <div class="container">
             <div class="row">
                 <div class="col-md-12 text-center">
                     <div class="display-t js-fullheight">
                         <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                             <h1>Awali Harimu Dengan Secangkir Kopi</h1>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </header>

     <div id="fh5co-about" class="fh5co-section">
         <div class="container">
             <div class="row">
                 <div class="col-md-6 col-md-pull-4 img-wrap animate-box" data-animate-effect="fadeInLeft">
                     <img src="{{ asset('website/images/hero_1.jpeg') }}"
                         alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
                 </div>
                 <div class="col-md-5 col-md-push-1 animate-box">
                     <div class="section-heading">
                         <h2>The Restaurant</h2>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae neque quisquam at
                             deserunt ab praesentium architecto tempore saepe animi voluptatem molestias, eveniet aut
                             laudantium alias, laboriosam excepturi, et numquam? Atque tempore iure tenetur
                             perspiciatis, aliquam, asperiores aut odio accusamus, unde libero dignissimos quod
                             aliquid neque et illo vero nesciunt. Sunt!</p>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam iure reprehenderit nihil
                             nobis laboriosam beatae assumenda tempore, magni ducimus abentey.</p>
                         <p><a href="{{ route('about') }}" class="btn btn-primary btn-outline">Tentang Kami</a></p>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <div id="fh5co-featured-menu" class="fh5co-section">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 fh5co-heading animate-box">
                     <h2>Paling Laris</h2>
                     <div class="row">
                         <div class="col-md-6">
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit
                                 itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam
                                 voluptates corporis et tempora consequuntur ipsam, itaque, nesciunt similique
                                 commodi omnis. Ad magni perspiciatis, voluptatum repellat.</p>
                         </div>
                     </div>
                 </div>
                 @foreach ($menus as $menu)
                     <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
                         <div class="fh5co-item">
                             <img src="{{ asset('images/' . $menu->image) }}" class="img-responsive"
                                 alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co">
                             <h3>{{ $menu->name }}</h3>
                             <span class="fh5co-price">{{ 'Rp. ' . number_format($menu->price, 0, ',', '.') }}</span>
                             <p> {{ $menu->description }}</p>
                         </div>
                     </div>
                 @endforeach


             </div>
         </div>
     </div>

     <div id="fh5co-featured-testimony" class="fh5co-section">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 fh5co-heading animate-box">
                     <h2>Testimony</h2>
                     <div class="row">
                         <div class="col-md-6">
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit
                                 itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam
                                 voluptates corporis et tempora consequuntur ipsam, itaque, nesciunt similique
                                 commodi omnis.</p>
                         </div>
                     </div>
                 </div>

                 <div class="col-md-5 animate-box img-to-responsive animate-box" data-animate-effect="fadeInLeft">
                     <img src="{{ asset('website/images/person_1.jpg') }}" alt="">
                 </div>
                 <div class="col-md-7 animate-box" data-animate-effect="fadeInRight">
                     <blockquote>
                         <p> &ldquo; Quantum ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab
                             debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus
                             aliquam voluptates corporis et tempora consequuntur ipsam. &rdquo;</p>
                         <p class="author"><cite>&mdash; Jane Smith</cite></p>
                     </blockquote>
                 </div>
             </div>
         </div>
     </div>


     <div id="fh5co-started" class="fh5co-section animate-box"
         style="background-image: url({{ asset('website/images/hero_1.jpeg') }});" data-stellar-background-ratio="0.5">
         <div class="overlay"></div>
         <div class="container">
             <div class="row animate-box">
                 <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                     <h2>Pesan Lebih Dulu</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae enim quae vitae
                         cupiditate, sequi quam ea id dolor reiciendis consectetur repudiandae. Rem quam, repellendus
                         veniam ipsa fuga maxime odio? Eaque!</p>
                     <p><a href="{{ route('reservation') }}" class="btn btn-primary btn-outline">Reservasi Sekarang</a></p>
                 </div>
             </div>
         </div>
     </div>
 @endsection
