@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Detail Pelanggan
            <a href="{{ route('pelanggan.index') }}" class="btn btn-sm btn-secondary float-end">Kembali</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Nama</th>
                    <td>{{ $pelanggan->nama }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $pelanggan->alamat }}</td>
                </tr>
                <tr>
                    <th>No HP</th>
                    <td>{{ $pelanggan->no_hp }}</td>
                </tr>
                <tr>
                    <th>Dibuat pada</th>
                    <td>{{ $pelanggan->created_at->format('d-m-Y H:i') }}</td>
                </tr>
                <tr>
                    <th>Diubah pada</th>
                    <td>{{ $pelanggan->updated_at->format('d-m-Y H:i') }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
