@extends('layout.app')
@section('title', 'Tambah Contact')
@section('content')
    <h1 class="h3 mb-2 text-gray-800">Data Contact</h1>

    <div class="row">
        <div class="col-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-success">Form Edit Contact</h6>
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
                    <form action="{{ route('contact.update', $contact->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" id="type" name="type" class="form-control"
                                value="{{ $contact->type }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="content">content</label>
                            <input type="content" id="content" name="content" class="form-control"
                                value="{{ $contact->content }}">
                            @error('content')
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
