@extends('layout.app')
@section('title', 'Edit Management')
@section('content')
    <h1 class="h3 mb-2 text-gray-800">Data Management</h1>

    <div class="row">
        <div class="col-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-success">Form Edit Management</h6>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <form action="{{ route('management.update', $management->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" id="type" name="type" class="form-control"
                                value="{{ $management->type }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="image">Gambar</label>
                            <input type="file" id="image" name="image" class="form-control ">
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" id="name" name="name" class="form-control"
                                value="{{ $management->name }}">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="position">Posisi</label>
                            <input type="text" id="position" name="position" class="form-control"
                                value="{{ $management->position }}">
                            @error('position')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="twitter">Twitter</label>
                            <input type="text" id="twitter" name="twitter" class="form-control"
                                value="{{ $management->twitter }}">
                            @error('twitter')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="facebook">Facebook</label>
                            <input type="text" id="facebook" name="facebook" class="form-control"
                                value="{{ $management->facebook }}">
                            @error('facebook')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="instagram">Instagram</label>
                            <input type="text" id="instagram" name="instagram" class="form-control"
                                value="{{ $management->instagram }}">
                            @error('instagram')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="linkedin">LinkedIn</label>
                            <input type="text" id="linkedin" name="linkedin" class="form-control"
                                value="{{ $management->linkedin }}">
                            @error('linkedin')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
