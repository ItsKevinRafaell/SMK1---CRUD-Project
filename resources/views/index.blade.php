@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Siswa</h3>
        </div>
        <div class="card-body">
        @can('isAdmin')
            <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">Tambah Data Siswa</a>
            @endcan
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Tanggal Lahir</th>
                    <th>Aksi</th>
                </tr>
                @foreach($siswa as $s)
                <tr>
                    <td>{{$s->nama}}</td>
                    <td>{{$s->nis}}</td>
                    <td>{{$s->tgl_lahir}}</td>
               
                <td>
                <ul class="nav">
                    <a href="{{route ('siswa.show', $s->id)}}" class="btn btn-success mr-2 ">Show</a>
                    @can('isAdmin')
                    <a href="{{route ('siswa.edit', $s->id)}}" class="btn btn-primary mr-2 ms-3 me-3">Edit</a>
                    <form action="{{route ('siswa.destroy', $s->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-warning">Delete</button>
                    </form>
                    @endcan
                </ul>
                </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection