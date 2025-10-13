@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Biodata</h1>

    <table class="table">
        <tr>
            <th>Nama</th>
            <td>{{ $biodata->nama }}</td>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <td>{{ $biodata->tanggal_lahir->format('d-m-Y') }}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{ $biodata->jenis_kelamin }}</td>
        </tr>
        <tr>
            <th>Agama</th>
            <td>{{ $biodata->agama }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{ $biodata->alamat }}</td>
        </tr>
        <tr>
            <th>Foto</th>
            <td>
                @if($biodata->foto)
                    <img src="{{ asset('storage/' . $biodata->foto) }}" alt="Foto" width="150">
                @else
                    Tidak ada foto
                @endif
            </td>
        </tr>
        <tr>
            <th>Tinggi Badan</th>
            <td>{{ $biodata->tinggi_badan ?? '-' }} cm</td>
        </tr>
        <tr>
            <th>Berat Badan</th>
            <td>{{ $biodata->berat_badan ?? '-' }} kg</td>
        </tr>
    </table>

    <a href="{{ route('biodata.index') }}" class="btn btn-secondary">Kembali</a>
    <a href="{{ route('biodata.edit', $biodata->id) }}" class="btn btn-primary">Edit</a>
</div>
@endsection
