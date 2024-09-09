@extends('layout.app')
@section('title', 'Management')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kegiatan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        @if ($jumlahKegiatan >= 6)
        @else
            <div class="card-header py-3">
                <a href="{{ route('kegiatan.create') }}" class="btn btn-success">
                    <i class="fas fa-plus"></i> Tambah
                </a>
            </div>
        @endif

        <div class="card-body">
            <div class="table-responsive">
                @if (session('success'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Penyelenggara</th>
                            <th>Published</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($kegiatan as $row)
                            <tr class="text-center">
                                <td>{{ $no++ }}</td>
                                <td><img src="{{ asset('storage/images/' . $row->image) }}" alt="{{ $row->type }}"
                                        style="max-width: 150px; max-height: 150px;"></td>
                                <td>{{ $row->title }}</td>
                                <td>{{ $row->description }}</td>
                                <td>{{ $row->author }}</td>
                                <td>
                                    <span class="badge {{ $row->published ? 'badge-success' : 'badge-danger' }}">
                                        {{ $row->published ? 'Published' : 'Not Published' }}
                                    </span>

                                </td>
                                <td>
                                    <a href="{{ route('kegiatan.edit', $row->id) }}" class="btn btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
