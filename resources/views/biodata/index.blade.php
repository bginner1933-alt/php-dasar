@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Biodata</h1>
    <a href="{{ route('biodata.create') }}" class="btn btn-primary mb-3">Tambah Biodata</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Alamat</th>
                <th>Foto</th>
                <th>Tinggi Badan</th>
                <th>Berat Badan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($biodatas as $biodata)
            <tr>
                <td>{{ $biodata->nama }}</td>
                <td>
  {{ $biodata->tanggal_lahir ? \Carbon\Carbon::parse($biodata->tanggal_lahir)->format('d-m-Y') : '-' }}
</td>

                <td>{{ $biodata->jenis_kelamin }}</td>
                <td>{{ $biodata->agama }}</td>
                <td>{{ $biodata->alamat }}</td>
                <td>
                    @if($biodata->foto)
                        <img src="{{ asset('storage/'.$biodata->foto) }}" alt="Foto" width="50">
                    @else
                        Tidak ada
                    @endif
                </td>
                <td>{{ $biodata->tinggi_badan }}</td>
                <td>{{ $biodata->berat_badan }}</td>
                <td>
                    <a href="{{ route('biodata.edit', $biodata->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('biodata.destroy', $biodata->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin mau hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @if($biodatas->isEmpty())
            <tr>
                <td colspan="9" class="text-center">Data tidak tersedia</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
