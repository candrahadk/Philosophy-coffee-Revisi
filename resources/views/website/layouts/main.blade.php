<!DOCTYPE HTML>
<html>

@section('head')
    @include('website.layouts.head')
@show

<body>

    <div class="fh5co-loader"></div>

    <div id="page">


        @section('navbar')
            @include('website.layouts.navbar')
        @show

        @yield('content')

        @section('footer')
            @include('website.layouts.footer')
        @show
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
    </div>

    @section('javascript')
        @include('website.layouts.javascript')
    @show

</body>

</html>
