<!DOCTYPE html>
<html lang="en">


@section('head')
    @include('admin.layouts.head')
@show

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>


            @section('navbar')
                @include('admin.layouts.navbar')
            @show
            @section('sidebar')
                @include('admin.layouts.sidebar')
            @show

            @yield('content')
            @section('footer')
                @include('admin.layouts.footer')
            @show

        </div>
    </div>


    @section('javascript')
        @include('admin.layouts.javascript')
    @show


</body>

</html>
