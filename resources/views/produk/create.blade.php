@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Tambah Produk</h1>
    <form action="{{ route('produk.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" name="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror">
            @error('nama_produk')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control @error('stok') is-invalid @enderror">
            @error('stok')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="mb-3">
            <label>Harga Satuan</label>
            <input type="number" name="harga_satuan" step="0.01" class="form-control @error('harga_satuan') is-invalid @enderror">
            @error('harga_satuan')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <button class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
