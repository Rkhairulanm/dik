@extends('page.main')
@section('content')
    <!-- About Start -->
    <div id="profil">
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="section-title position-relative pb-3 mb-5">
                            <h5 class="fw-bold text-primary text-uppercase">Tentang Kami</h5>
                            <h1 class="mb-0">Sekolah PG - TK Nur Islam</h1>
                        </div>
                        <div class="mb-4">
                            {!! $aboutContent ? $aboutContent->content : 'Data tidak tersedia' !!}
                        </div>
                        <div class="row g-0 mb-3">
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                                <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Award Winning</h5>
                                <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
                            </div>
                            <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                                <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                                <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-80 rounded wow zoomIn" data-wow-delay="0.9s"
                                src="{{ asset('template1/images/sekolah.png') }}" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Team Start -->
    <div id="guru">
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h1 class="mb-0">Manajemen</h1>
                </div>
                <div class="row g-5">
                    @if ($management)
                        @foreach ($management as $k)
                            <div class="col-lg-3 wow slideInUp" data-wow-delay="0.6s">
                                <div class="team-item bg-light rounded overflow-hidden">
                                    <div class="team-img position-relative overflow-hidden">
                                        <img class="img-fluid team-image" src="{{ asset('storage/images/' . $k->image) }}"
                                            alt="">
                                        <div class="team-social">
                                            <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                                href="{{ $k->twitter }}"><i class="fab fa-twitter fw-normal"></i></a>
                                            <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                                href="{{ $k->facebook }}"><i class="fab fa-facebook-f fw-normal"></i></a>
                                            <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                                href="{{ $k->instagram }}"><i class="fab fa-instagram fw-normal"></i></a>
                                            <a class="btn btn-lg btn-primary btn-lg-square rounded"
                                                href="{{ $k->linkedin }}"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                        </div>
                                    </div>
                                    <div class="text-center py-4">
                                        <h4 class="text-primary">{{ $k->name }}</h4>
                                        <p class="text-uppercase m-0">{{ $k->position }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="text-center">Data manajemen tidak tersedia.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Features Start -->
    <div id="akademik">
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                    <h1 class="mb-0">Akademik</h1>
                </div>
                <div class="row g-5">
                    <!-- Tampilkan data akademik di sini, jika tersedia -->
                    <!-- Jika tidak ada data, tampilkan pesan -->
                    @if ($kegiatan->isEmpty())
                        <p class="text-center">Data akademik tidak tersedia.</p>
                    @else
                        @foreach ($kegiatan as $item)
                            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                                <div class="blog-item bg-light rounded overflow-hidden">
                                    <div class="blog-img position-relative overflow-hidden">
                                        <img class="img-fluid" src="{{ asset('storage/images/' . $item->image) }}"
                                            alt="">
                                    </div>
                                    <div class="p-4">
                                        <div class="d-flex mb-3">
                                            <small class="me-3"><i
                                                    class="far fa-user text-primary me-2"></i>{{ $item->author }}</small>
                                            <small><i
                                                    class="far fa-calendar-alt text-primary me-2"></i>{{ $item->date }}</small>
                                        </div>
                                        <h4 class="mb-3">{{ $item->title }}</h4>
                                        <p>{{ $item->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Contact Start -->
    <div id="pendaftaran">
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-12">
                        <div class="bg-white rounded p-5 shadow-sm">
                            <!-- Tampilkan Pesan Sukses -->
                            @if (session('success'))
                                <div class="alert alert-success mt-4">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form action="{{ route('ppdb.store') }}" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <!-- Bagian Informasi Anak -->
                                    <div class="col-12">
                                        <h2 class="mb-3">Formulir PPDB TK Nur Islam</h2>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="nama_lengkap_anak"
                                            class="form-control bg-light border-0" placeholder="Nama Lengkap Anak"
                                            style="height: 55px;" value="{{ old('nama_lengkap_anak') }}">
                                        @error('nama_lengkap_anak')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="tempat_lahir_anak"
                                            class="form-control bg-light border-0" placeholder="Tempat Lahir Anak"
                                            style="height: 55px;" value="{{ old('tempat_lahir_anak') }}">
                                        @error('tempat_lahir_anak')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input type="date" name="tanggal_lahir_anak"
                                            class="form-control bg-light border-0" placeholder="Tanggal Lahir Anak"
                                            style="height: 55px;" value="{{ old('tanggal_lahir_anak') }}">
                                        @error('tanggal_lahir_anak')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <select name="jenis_kelamin_anak" class="form-select bg-light border-0"
                                            style="height: 55px;">
                                            <option value="" disabled selected>Jenis Kelamin Anak</option>
                                            <option value="laki-laki"
                                                {{ old('jenis_kelamin_anak') == 'laki-laki' ? 'selected' : '' }}>Laki-laki
                                            </option>
                                            <option value="perempuan"
                                                {{ old('jenis_kelamin_anak') == 'perempuan' ? 'selected' : '' }}>Perempuan
                                            </option>
                                        </select>
                                        @error('jenis_kelamin_anak')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="alamat_lengkap" rows="3" class="form-control bg-light border-0" placeholder="Alamat Lengkap">{{ old('alamat_lengkap') }}</textarea>
                                        @error('alamat_lengkap')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="nomor_telepon" class="form-control bg-light border-0"
                                            placeholder="Nomor Telepon" style="height: 55px;"
                                            value="{{ old('nomor_telepon') }}">
                                        @error('nomor_telepon')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" class="form-control bg-light border-0"
                                            placeholder="Email" style="height: 55px;" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="nik_anak" class="form-control bg-light border-0"
                                            placeholder="NIK Anak" style="height: 55px;" value="{{ old('nik_anak') }}">
                                        @error('nik_anak')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <!-- Bagian Informasi Orang Tua -->
                                    <div class="col-md-6">
                                        <input type="text" name="nama_orang_tua"
                                            class="form-control bg-light border-0" placeholder="Nama Orang Tua"
                                            style="height: 55px;" value="{{ old('nama_orang_tua') }}">
                                        @error('nama_orang_tua')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="nik_orang_tua" class="form-control bg-light border-0"
                                            placeholder="NIK Orang Tua" style="height: 55px;"
                                            value="{{ old('nik_orang_tua') }}">
                                        @error('nik_orang_tua')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="nomor_telepon_orang_tua"
                                            class="form-control bg-light border-0" placeholder="Nomor Telepon Orang Tua"
                                            style="height: 55px;" value="{{ old('nomor_telepon_orang_tua') }}">
                                        @error('nomor_telepon_orang_tua')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email_orang_tua"
                                            class="form-control bg-light border-0" placeholder="Email Orang Tua"
                                            style="height: 55px;" value="{{ old('email_orang_tua') }}">
                                        @error('email_orang_tua')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <hr>
                                    <div class="col-md-12">
                                        <textarea name="keterangan_tambahan" rows="3" class="form-control bg-light border-0"
                                            placeholder="Keterangan Tambahan">{{ old('keterangan_tambahan') }}</textarea>
                                        @error('keterangan_tambahan')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Kirim
                                            Pendaftaran</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
