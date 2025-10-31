@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{ route('pelanggan.create') }}" class="btn btn-primary mb-3">Tambah Pelanggan</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Aksi</th>
        </tr>
        @foreach($pelanggans as $pelanggan)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $pelanggan->nama }}</td>
            <td>{{ $pelanggan->alamat }}</td>
            <td>{{ $pelanggan->no_hp }}</td>
            <td>
        <a href="{{ route('pelanggan.show', $pelanggan->id) }}" class="btn btn-outline-info btn-sm">Show</a>
        <a href="{{ route('pelanggan.edit', $pelanggan->id) }}" class="btn btn-outline-warning btn-sm">Edit</a>
        <form action="{{ route('pelanggan.destroy', $pelanggan->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button class="btn btn-outline-danger btn-sm" onclick="return confirm('Hapus pelanggan?')">Hapus</button>
        </form>
</td>

        </tr>
        @endforeach
    </table>
</div>
@endsection
