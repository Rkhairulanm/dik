@extends('layout.app')
@section('title', 'Data PPDB')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data PPDB</h1>

    @if (session('message'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama Anak</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>No.Telp</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ppdbs as $index => $ppdb)
                            <tr class="text-center">
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $ppdb->nama_lengkap_anak }}</td>
                                <td>{{ $ppdb->email }}</td>
                                <td>{{ $ppdb->alamat_lengkap }}</td>
                                <td>{{ $ppdb->nomor_telepon }}</td>
                                <td>
                                    <form action="{{ route('ppdb.destroy', $ppdb->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Yakin ingin menghapus?')"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
