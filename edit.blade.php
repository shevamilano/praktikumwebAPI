@extends('layouts.app')

@section('content')
    <h1 class="mb-4 text-center">Edit Budaya</h1>
    <form action="{{ route('budaya.update', $budaya->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $budaya->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis</label>
            <input type="text" class="form-control" id="jenis" name="jenis" value="{{ $budaya->jenis }}" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ $budaya->deskripsi }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('budaya.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection