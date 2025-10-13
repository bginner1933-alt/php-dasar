@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Biodata</h1>
    <form action="{{ route('biodata.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ old('nama') }}" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select" required>
                <option value="">Pilih</option>
                <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <input type="text" class="form-control" name="agama" value="{{ old('agama') }}" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" rows="3" required>{{ old('alamat') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" name="foto" accept="image/*">
        </div>

        <div class="mb-3">
            <label for="tinggi_badan" class="form-label">Tinggi Badan (cm)</label>
            <input type="number" step="0.01" class="form-control" name="tinggi_badan" value="{{ old('tinggi_badan') }}">
        </div>

        <div class="mb-3">
            <label for="berat_badan" class="form-label">Berat Badan (kg)</label>
            <input type="number" step="0.01" class="form-control" name="berat_badan" value="{{ old('berat_badan') }}">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('biodata.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
