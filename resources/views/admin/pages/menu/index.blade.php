@extends('admin.layouts.main')
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ $title }}</h1>
            </div>
            <div class="section-body">
                @if (session('status'))
                    <div class="alert alert-info">
                        {{ session('status') }}
                    </div>
                @endif
                <h2 class="section-title">Data Menu</h2>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('menu.create') }}" class="btn btn-primary">Tambah Menu</a>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped table-md">
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Gambar</th>
                                            <th>Harga</th>
                                            <th>Deskripsi</th>
                                            <th>Aksi</th>
                                        </tr>

                                        @if ($menus->count())
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($menus as $menu)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $menu->name }}</td>
                                                    {{--  <td>{{ $menu->image }}</td>  --}}
                                                    <td>

                                                        <img width="150" src="{{ asset('images/' . $menu->image) }}"
                                                            alt="Generic placeholder image">

                                                    </td>
                                                    <td>{{ $menu->price }}</td>
                                                    <td>{{ $menu->description }}</td>


                                                    <td>
                                                        <form method="POST"
                                                            action="{{ route('menu.destroy', $menu->id) }}">
                                                            <a href="{{ route('menu.edit', $menu->id) }}"
                                                                class="btn btn-success">Edit</a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">
                                                                Hapus</button>
                                                        </form>
                                                    </td>


                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="6">
                                                    Tidak ada data!
                                                </td>
                                            </tr>
                                        @endif
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <nav class="d-inline-block">
                                    <ul class="pagination mb-0">
                                        {{ $menus->links('pagination::bootstrap-4') }}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
