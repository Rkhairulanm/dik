@extends('layout.app')
@section('title', 'Tambah Murid')
@section('content')
    <h1 class="h3 mb-2 text-gray-800">Data Murid</h1>

    <div class="row">
        <div class="col-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-success">Form Tambah Murid</h6>
                </div>
                <div class="card-body">

                    <form action="{{ route('murid.update', $murid->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control"
                                value="{{ $murid->nama }}">
                            @error('nama')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control"
                                value="{{ $murid->email }}">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea id="alamat" name="alamat" class="form-control" value="{{ $murid->alamat }}">{{ 'alamat' }}</textarea>
                            @error('alamat')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="no_telp">No.Telp</label>
                            <input type="number" id="no_telp" name="no_telp" class="form-control"
                                value="{{ $murid->no_telp }}">
                            @error('no_telp')
                                {{ $message }}
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
