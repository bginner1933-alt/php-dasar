@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Edit Pelanggan</div>
        <div class="card-body">
            <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $pelanggan->nama) }}">
                    @error('nama')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="mb-3">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat', $pelanggan->alamat) }}">
                    @error('alamat')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="mb-3">
    <label for="">No HP</label>
    <input type="text" name="no_hp" value="{{ old('no_hp', $pelanggan->no_hp ?? '') }}"
        class="form-control @error('no_hp') is-invalid @enderror">
    @error('no_hp')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
