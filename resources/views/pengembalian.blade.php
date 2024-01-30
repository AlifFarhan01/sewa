@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Formulir Pencarian</div>

                <div class="card-body">
                    <form action="{{ route('pengembalian.search') }}" method="GET">
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Cari Nomor Plat Mobil yang di sewa" name="noplat" required>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@if(isset($data))
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hasil Pencarian Berdasarkan Nomor Plat Kendaraan</div>

                <div class="card-body">
                    @if(count($data) > 0)
                        @foreach($data as $sewa)
                            <p>Nama Mobil: {{ $sewa->kendaraan->merek }}</p>
                            <p>tanggal Sewa: {{ $sewa->tanggalsewa }}</p>
                            <p>tanggal Kembali: {{ $sewa->tanggalkembali }}</p>
                            <p>Total tarif Sewa: {{ $sewa->total_biaya }}</p>

                        @endforeach
                    @else
                        <p>Tidak ada data ditemukan.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
