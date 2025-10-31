@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Produk</h1>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('produk.update', $produk->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" name="nama_produk" id="nama_produk"
                           value="{{ old('nama_produk', $produk->nama_produk) }}"
                           class="form-control @error('nama_produk') is-invalid @enderror">
                    @error('nama_produk')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="stok">Stok</label>
                    <input type="number" name="stok" id="stok"
                           value="{{ old('stok', $produk->stok) }}"
                           class="form-control @error('stok') is-invalid @enderror">
                    @error('stok')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="harga_satuan">Harga Satuan</label>
                    <input type="number" name="harga_satuan" id="harga_satuan"
                           value="{{ old('harga_satuan', $produk->harga_satuan) }}"
                           class="form-control @error('harga_satuan') is-invalid @enderror">
                    @error('harga_satuan')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('produk.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
