@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Jadwal Kegiatan</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('jadwal.index') }}" class="btn btn-primary mb-3">Kembali</a>
            <form action="{{ route('jadwal.store') }}" method="POST">
                @csrf
                <ul class="list-group">
                    Bulan <input type="text" name="bulan" required>
                    Kegiatan <input type="text" name="nama" required>
                    Tanggal  <input  type="date" name="tgl" required>
                </ul>
                <input type="submit" value="Simpan Data" class="btn btn-success mt-3">
            </form>
        </div>
    </div>
</div>
@endsection