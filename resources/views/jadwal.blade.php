@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Jadwal Kegiatan</h3>
        </div>
        <div class="card-body">
        @can('isAdmin')
        <a href="{{ route('jadwal.create') }}" class="btn btn-primary mb-3">Tambah Jadwal Kegiatan</a>
        @endcan
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Bulan</th>
                    <th>Tanggal</th>
                    <th>Kegiatan</th>
                    @can('isAdmin')
                    <th>Aksi</th>
                    @endcan
                </tr>
                @foreach($jadwal as $j)
                <tr>
                    <td>{{$j->bulan}}</td>
                    <td>{{$j->tgl}}</td>
                    <td>{{$j->nama}}</td>
                    @can('isAdmin')
                <td>
                <ul class="nav">
                    <a href="{{route ('jadwal.edit', $j->id)}}" class="btn btn-primary mr-2 me-3">Edit</a>
                    <form action="{{route ('jadwal.destroy', $j->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-warning">Delete</button>
                    </form>
                </ul>
                </td>
                @endcan
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection