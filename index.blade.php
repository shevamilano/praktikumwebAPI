@extends('layouts.app')

@section('content')
    <h1 class="mb-4 text-center">Daftar Budaya Indonesia</h1>
    <a href="{{ route('budaya.create') }}" class="btn btn-primary mb-3">Tambah Budaya</a>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($budaya as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jenis }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>
                        <a href="{{ route('budaya.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('budaya.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection