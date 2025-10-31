@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Daftar Produk</h1>
    <a href="{{ route('produk.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Stok</th>
                <th>Harga Satuan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produks as $produk)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $produk->nama_produk }}</td>
                <td>{{ $produk->stok }}</td>
                <td>Rp {{ number_format($produk->harga_satuan, 0, ',', '.') }}</td>
                <td>
                    <a href="{{ route('produk.show', $produk->id) }}" class="btn btn-outline-info btn-sm">Show</a>
                    <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-outline-warning btn-sm">Edit</a>
                    <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
