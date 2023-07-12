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
                             <h1>Lihat Menu Kami</h1>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </header>

     <div id="fh5co-featured-menu" class="fh5co-section">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 fh5co-heading animate-box">
                     <h2>Menu Spesial Philosophy Coffee</h2>
                     <div class="row">
                         <div class="col-md-6">
                             <p>
                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque
                                 totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam voluptates
                                 corporis et tempora consequuntur ipsam, itaque, nesciunt similique commodi
                                 omnis. Ad magni perspiciatis, voluptatum repellat.
                             </p>
                         </div>
                     </div>
                 </div>

                 <div class="container mx-auto mt-4">
                     <div class="row">

                         @foreach ($menus as $menu)
                             {{--  <div class="fh5co-item animate-box">
                                 <img src="{{ asset('images/' . $menu->image) }}" class="img-responsive"
                                     alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co" />
                                 <h3>{{ $menu->name }}</h3>
                                 <span class="fh5co-price">{{ 'Rp. ' . number_format($menu->price, 0, ',', '.') }}</span>
                                 <p>
                                     {{ $menu->description }}
                                 </p>
                             </div>  --}}
                             <div class="animate-box"
                                 style="width: 100%;backround: #fff;font-style: 20px;
  color: #fee856;
  margin-bottom: 20px;
  font-size: 30px;
  display: block;">
                                 <div class="col-md-4">
                                     <div class="card">
                                         <img src="{{ asset('images/' . $menu->image) }}" class="img-responsive"
                                             alt="Free" />
                                         <div class="card-body">
                                             <h3 class="card-title"
                                                 style=" margin-bottom: 0px;margin-top:10px;
  color: #fff;">
                                                 {{ $menu->name }}</h3>
                                             <span
                                                 class="fh5co-price">{{ 'Rp. ' . number_format($menu->price, 0, ',', '.') }}</span>
                                             <p>
                                                 {{ $menu->description }}
                                             </p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         @endforeach
                     </div>
                 </div>
                 {{--  <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">

                     @foreach ($menus as $menu)
                         <div class="fh5co-item animate-box">
                             <img src="{{ asset('images/' . $menu->image) }}" class="img-responsive"
                                 alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co" />
                             <h3>{{ $menu->name }}</h3>
                             <span class="fh5co-price">{{ 'Rp. ' . number_format($menu->price, 0, ',', '.') }}</span>
                             <p>
                                 {{ $menu->description }}
                             </p>
                         </div>
                     @endforeach
                 </div>
                 <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
                     <div class="fh5co-item margin_top animate-box">
                         <img src="{{ asset('website/images/gallery_3.jpeg') }}" class="img-responsive"
                             alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co" />
                         <h3>Salted Fried Chicken</h3>
                         <span class="fh5co-price">$19<sup>.00</sup></span>
                         <p>
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias
                             quaerat inventore molestias vel suscipit explicabo.
                         </p>
                     </div>
                     <div class="fh5co-item animate-box">
                         <img src="{{ asset('website/images/gallery_4.jpeg') }}" class="img-responsive"
                             alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co" />
                         <h3>Bake Potato Pizza</h3>
                         <span class="fh5co-price">$20<sup>.50</sup></span>
                         <p>
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias
                             quaerat inventore molestias vel suscipit explicabo.
                         </p>
                     </div>
                 </div>
                 <div class="clearfix visible-sm-block visible-xs-block"></div>
                 <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
                     <div class="fh5co-item animate-box">
                         <img src="{{ asset('website/images/gallery_5.jpeg') }}" class="img-responsive"
                             alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co" />
                         <h3>Italian Sauce Mushroom</h3>
                         <span class="fh5co-price">$17<sup>.99</sup></span>
                         <p>
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias
                             quaerat inventore molestias vel suscipit explicabo.
                         </p>
                     </div>
                     <div class="fh5co-item animate-box">
                         <img src="{{ asset('website/images/gallery_6.jpeg') }}" class="img-responsive"
                             alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co" />
                         <h3>Bake Potato Pizza</h3>
                         <span class="fh5co-price">$20<sup>.50</sup></span>
                         <p>
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias
                             quaerat inventore molestias vel suscipit explicabo.
                         </p>
                     </div>
                 </div>
                 <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap">
                     <div class="fh5co-item margin_top animate-box">
                         <img src="{{ asset('website/images/gallery_7.jpeg') }}" class="img-responsive"
                             alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co" />
                         <h3>Fried Potato w/ Garlic</h3>
                         <span class="fh5co-price">$22<sup>.50</sup></span>
                         <p>
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias
                             quaerat inventore molestias vel suscipit explicabo.
                         </p>
                     </div>
                     <div class="fh5co-item animate-box">
                         <img src="{{ asset('website/images/gallery_8.jpeg') }}" class="img-responsive"
                             alt="Free Restaurant Bootstrap Website Template by FreeHTML5.co" />
                         <h3>Bake Potato Pizza</h3>
                         <span class="fh5co-price">$20<sup>.50</sup></span>
                         <p>
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias
                             quaerat inventore molestias vel suscipit explicabo.
                         </p>
                     </div>
                 </div>  --}}
             </div>
         </div>
     </div>
 @endsection
