@extends('layouts.app')

<style>
    .card-title {
        font-weight: bold;
        font-size: 1.5rem;
    }
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="float-start">
                        <h4 class="card-title mb-0">{{ __('Dashboard') }}</h4>
                    </div>
                    <div class="float-end">
                        <a href="{{ route('jurusan.index') }}" class="btn btn-sm btn-primary">Kembali</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('jurusan.update', $jurusan->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nama_jurusan" class="form-label">Nama Jurusan</label>
                            <input type="text" class="form-control @error('nama_jurusan') is-invalid @enderror"
                                name="nama_jurusan" value="{{ $jurusan->nama_jurusan }}" placeholder="Nama Jurusan" required>
                            @error('nama_jurusan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">{{ __('Image') }}</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror"
                                name="image">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-sm btn-warning">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
