@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Ubah Data Users</h3>
        </div>
        <div class="card-body">
            <a href="{{ route('users.index') }}" class="btn btn-primary mb-3">Kembali</a>
            <form action="{{ route('users.update', $users->id) }}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Nama <input type="text" name="name" required value="{{ $users->name }}">
                    ID <input type="text" name="siswa_id" required value="{{ $users->siswa_id }}">
                    Role <input type="text" name="role" required value="{{ $users->role }}">
                    Email <input type="text" name="email" required value="{{ $users->email }}">
                </ul>
                <input type="submit" value="Ubah Data" class="btn btn-success mt-3">
            </form>
        </div>
    </div>
</div>
@endsection