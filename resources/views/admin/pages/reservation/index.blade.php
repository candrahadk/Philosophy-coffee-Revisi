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
                <h2 class="section-title">Data Reservasi</h2>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-striped table-md">
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Pelanggan</th>
                                            <th>No.HP</th>
                                            <th>Menu</th>
                                            <th>Jumlah</th>
                                            <th>Waktu</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>

                                        @if ($reservations->count())
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($reservations as $reservation)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $reservation->customer }}</td>
                                                    <td>{{ $reservation->phone }}</td>
                                                    <td>{{ $reservation->menu->name }}</td>
                                                    <td>{{ $reservation->qty }}</td>
                                                    <td>{{ $reservation->created_at }}</td>
                                                    <td>

                                                        <form method="POST"
                                                            action="{{ route('reservation.confirm', $reservation->id) }}">
                                                            @csrf
                                                            @method('patch')
                                                            @if ($reservation->confirmed == 0)
                                                                <button class="btn btn-warning">
                                                                    Konfirmasi
                                                                </button>
                                                            @else
                                                                <button class="btn btn-success">
                                                                    Terkonfirmasi
                                                                </button>
                                                            @endif
                                                        </form>

                                                    </td>
                                                    <td>
                                                        <form method="POST"
                                                            action="{{ route('reservation.destroy', $reservation->id) }}">

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
                                        {{ $reservations->links('pagination::bootstrap-4') }}
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
