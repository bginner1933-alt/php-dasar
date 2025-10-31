@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Produk</h1>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Nama Produk</th>
                    <td>{{ $produk->nama_produk }}</td>
                </tr>
                <tr>
                    <th>Stok</th>
                    <td>{{ $produk->stok }}</td>
                </tr>
                <tr>
                    <th>Harga Satuan</th>
                    <td>Rp {{ number_format($produk->harga_satuan, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <th>Dibuat pada</th>
                    <td>{{ $produk->created_at->format('d-m-Y H:i') }}</td>
                </tr>
                <tr>
                    <th>Diubah pada</th>
                    <td>{{ $produk->updated_at->format('d-m-Y H:i') }}</td>
                </tr>
            </table>

            <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
            <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
</div>
@endsection
