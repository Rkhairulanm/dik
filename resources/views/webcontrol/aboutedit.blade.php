@extends('layout.app')
@section('title', 'Edit About')
@section('content')
    <h1 class="h3 mb-2 text-gray-800">Data About</h1>

    <div class="row">
        <div class="col-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-success">Form Edit About</h6>
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
                    <form action="{{ route('about.update', $about->id) }}" method="POST">
                        @csrf
                        {{-- <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" id="type" name="type" class="form-control"
                                value="{{ $about->type }}" readonly>
                        </div> --}}

                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea id="content" name="content" class="form-control">{{ $about->content }}</textarea>
                            @error('content')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.tiny.cloud/1/emqu1r62fzq2l5sp3odgn510kmpdbr5v1w3n31h513paublx/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#content',
            height: 300,
            menubar: false,
            plugins: 'advlist autolink lists link image charmap preview anchor textcolor',
            toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
            content_css: 'https://www.tiny.cloud/css/codepen.min.css'
        });
    </script>
@endsection
