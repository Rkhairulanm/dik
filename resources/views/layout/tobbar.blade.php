@php
    // Mengambil data dari model ContactIndo
    $lokasi = \App\Models\ContactInfo::where('type', 'locations')->first();
    $tlp = \App\Models\ContactInfo::where('type', 'phone')->first();
    $email = \App\Models\ContactInfo::where('type', 'email')->first();
    $twitter = \App\Models\ContactInfo::where('type', 'twitter')->first();
    $facebook = \App\Models\ContactInfo::where('type', 'facebook')->first();
    $youtube = \App\Models\ContactInfo::where('type', 'youtube')->first();
    $instagram = \App\Models\ContactInfo::where('type', 'instagram')->first();
@endphp

<!-- Topbar Start -->
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-5 mb-lg-2">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light">
                    <i class="fa fa-map-marker-alt me-2"></i>
                    {{ $lokasi ? $lokasi->content : 'Lokasi tidak tersedia' }}
                </small>
                <small class="me-3 text-light">
                    <i class="fa fa-phone-alt me-2"></i>
                    {{ $tlp ? $tlp->content : 'Nomor telepon tidak tersedia' }}
                </small>
                <small class="text-light">
                    <i class="fa fa-envelope-open me-2"></i>
                    {{ $email ? $email->content : 'Email tidak tersedia' }}
                </small>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                    href="{{ $twitter ? $twitter->content : '#' }}">
                    <i class="fab fa-twitter fw-normal"></i>
                </a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                    href="{{ $facebook ? $facebook->content : '#' }}">
                    <i class="fab fa-facebook-f fw-normal"></i>
                </a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                    href="{{ $instagram ? $instagram->content : '#' }}">
                    <i class="fab fa-instagram fw-normal"></i>
                </a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle"
                    href="{{ $youtube ? $youtube->content : '#' }}">
                    <i class="fab fa-youtube fw-normal"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->
