@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Ubah Jadwal Kegiatan</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('jadwal.index') }}" class="btn btn-primary mb-3">Kembali</a>
            <form action="{{ route('jadwal.update', $jadwal->id) }}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Bulan <input type="text" name="bulan" required value="{{ $jadwal->bulan }}">
                    Kegiatan <input type="text" name="nama" required value="{{ $jadwal->nama }}">
                    Tanggal <input type="date" name="tgl" required value="{{ $jadwal->tgl }}">
                </ul>
                <input type="submit" value="Ubah Data" class="btn btn-success mt-3">
            </form>
        </div>
    </div>
</div>
@endsection