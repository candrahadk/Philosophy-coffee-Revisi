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
                            <h1>Reservasi Sekarang!</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div id="fh5co-reservation-form" class="fh5co-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 fh5co-heading animate-box">
                    <h2>Form Reservasi</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <p>Mohon untuk memasukkan data anda pada form di bawah.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-md-push-6 col-sm-6 col-sm-push-6">
                    <form action="{{ route('reservation.store') }}" method="POST">
                        @csrf
                        @method('post')
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" name="customer"">
                                @error('customer')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="name">No. HP</label>
                                <input type="number" class="form-control" name="phone">
                                @error('phone')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="many">Pilih Menu</label>
                                <select name="menu_id" class="form-control custom_select"
                                    style="background: rgba(100, 100, 100, 0.3);">
                                    @foreach ($menus as $menu)
                                        <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                                    @endforeach
                                </select>
                                @error('menu_id')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="name">Jumlah</label>
                                <input type="number" class="form-control" name="qty">
                                @error('qty')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label for="taskdatetime">Tanggal Kunjung</label>
                                <select name="date" class="form-control custom_select"
                                    style="background: rgba(100, 100, 100, 0.3);">

                                    @php
                                        
                                        $date = date('Y-m-d');
                                        $weekOfdays = [];
                                        for ($i = 1; $i <= 7; $i++) {
                                            $date = date('Y-m-d', strtotime('+1 day', strtotime($date)));
                                            $weekOfdays[] = date('Y-m-d', strtotime($date));
                                        }
                                    @endphp
                                    <option value="{{ date('Y-m-d') }}">{{ date('Y-m-d') }}</option>
                                    @foreach ($weekOfdays as $days)
                                        <option value="{{ $days }}">{{ $days }}</option>
                                    @endforeach
                                </select>
                                @error('date')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="taskdatetime">Jam</label>
                                <select name="time" class="form-control custom_select"
                                    style="background: rgba(100, 100, 100, 0.3);">

                                    @php
                                        $start = strtotime('00:00');
                                        $end = strtotime('23:30');
                                        
                                    @endphp
                                    @for ($i = $start; $i <= $end; $i = $i + 10 * 60)
                                        <option {{ date('H:i', $i) < date('H:i') ? 'disabled' : '' }}
                                            value="{{ date('H:i:s', $i) }}">{{ date('H:i', $i) }}
                                        </option>
                                    @endfor
                                </select>
                                @error('time')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                @if (session('status'))
                                    <div class="alert alert-info">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <input type="submit" class="btn btn-primary btn-outline btn-lg" value="Kirim">
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

    <script>
        (function($) {
            window.onbeforeunload = function(e) {
                window.name += ' [' + $(window).scrollTop().toString() + '[' + $(window).scrollLeft().toString();
            };
            $.maintainscroll = function() {
                if (window.name.indexOf('[') > 0) {
                    var parts = window.name.split('[');
                    window.name = $.trim(parts[0]);
                    window.scrollTo(parseInt(parts[parts.length - 1]), parseInt(parts[parts.length - 2]));
                }
            };
            $.maintainscroll();
        })(jQuery);
    </script>
@endsection
