@extends('layouts.app')

@section('content')

    <div class="jumbotron text-center">
        <h1>Portal Informasi Siswa</h1>
        <p>Selamat Datang Di Portal Informasi Siswa SMK 1!</p>
        <a href="{{ url('jadwal') }}" class="btn btn-dark">Info Kegiatan</a>
        <a href="{{ url('siswa') }}" class="btn btn-primary">Data Siswa</a>
    </div>
</body>
@endsection