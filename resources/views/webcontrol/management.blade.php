@extends('layout.app')
@section('title', 'Management')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Management</h1>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        {{-- <div class="card-header py-3">
            <a href="{{ route('murid.create') }}" class="btn btn-success "><i class="fas fa-plus"></i> Tambah</a>
        </div> --}}
        <div class="card-body">
            <div class="table-responsive">
                @if (session('success'))
                    <div class="alert alert-success mt-4">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Type</th>
                            <th>Nama</th>
                            <th>Posisi</th>
                            {{-- <th>Alamat</th>
                            <th>No.Telp</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($management as $row)
                            <tr class="text-center">
                                <td>{{ $no++ }}</td>
                                <td><img src="{{ asset('storage/images/' . $row->image) }}" alt="{{ $row->type }}"
                                        style="max-width: 150px; max-height: 150px;"></td>
                                <td>{{ $row->type }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->position }}</td>
                                <td>
                                    <a href="{{ route('management.edit', $row->id) }}" class="btn btn-warning">
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
