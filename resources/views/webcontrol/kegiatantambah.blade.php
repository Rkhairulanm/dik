@extends('layout.app')
@section('title', 'Tambah Kegiatan')
@section('content')
    <h1 class="h3 mb-2 text-gray-800">Tambah Kegiatan</h1>

    <div class="row">
        <div class="col-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-success">Form Tambah Kegiatan</h6>
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
                    <form action="{{ route('kegiatan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="title">Judul</label>
                            <input type="text" id="title" name="title" class="form-control"
                                value="{{ old('title') }}" required max="255">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea id="description" name="description" class="form-control" rows="4" required max="255">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="organizer">Penyelenggara</label>
                            <input required max="255" type="text" id="organizer" name="organizer"
                                class="form-control" value="{{ old('organizer') }}">
                            @error('organizer')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="published">Published</label> <br>
                            <input type="checkbox" id="published" name="published" value="1"
                                {{ old('published') ? 'checked' : '' }}>
                            @error('published')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">Gambar</label>
                            <input type="file" id="image" name="image" class="form-control">
                            @error('image')
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
