@extends('layouts.app')

@section('content')
<style>
    .card-title {
        font-weight: bold;
        font-size: 1.5rem;
    }

    .table th,
    .table td {
        vertical-align: middle;
        text-align: center;
    }

    .table img {
        max-width: 100px;
        height: auto;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="float-start">
                        <h4 class="card-title mb-0">{{ __('Dashboard') }}</h4>
                    </div>
                    <div class="float-end">
                        <a href="{{ route('siswa.create') }}" class="btn btn-sm btn-primary">Tambah Data</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @forelse ($siswa as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->nama_siswa }}</td>
                                    <td>
                                        @if ($data->jk === 0)
                                        Laki-laki
                                        @else
                                        Perempuan
                                        @endif
                                    </td>
                                    <td>{{ $data->agama }}</td>
                                    <td>{{ $data->tmpt }}</td>
                                    <td>{{ $data->tgl }}</td>
                                    <td>{{ $data->kelas->nama_kelas }}</td>
                                    <td>{{ $data->jurusan->nama_jurusan }}</td>
                                    <td>
                                        <img src="{{ asset('/storage/siswas/' . $data->image) }}" class="rounded"
                                            style="width: 80px">
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <a href="{{ route('siswa.show', $data->id) }}"
                                                class="btn btn-sm btn-dark me-1">Show</a>
                                            <a href="{{ route('siswa.edit', $data->id) }}"
                                                class="btn btn-sm btn-success me-1">Edit</a>
                                            <form action="{{ route('siswa.destroy', $data->id) }}" method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this item?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are You Sure ?');">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="10" class="text-center">
                                        Data belum tersedia.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
