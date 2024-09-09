@php
    // Mengambil data dari model ContactInfo
    $lokasi = \App\Models\ContactInfo::where('type', 'full locations')->first();
    $tlp = \App\Models\ContactInfo::where('type', 'phone')->first();
    $email = \App\Models\ContactInfo::where('type', 'email')->first();
    $twitter = \App\Models\ContactInfo::where('type', 'twitter')->first();
    $facebook = \App\Models\ContactInfo::where('type', 'facebook')->first();
    $youtube = \App\Models\ContactInfo::where('type', 'youtube')->first();
    $instagram = \App\Models\ContactInfo::where('type', 'instagram')->first();
@endphp

<!-- Footer Start -->
<div class="bg-light">
    <div class="container-fluid text-light wow fadeInUp rounded text-dark bg-light"
        style="height: 350px; background-color: #EEF9FF" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <!-- Kolom Get In Touch -->
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="text-dark mb-0">Kontak</h3>
                    </div>
                    <div class="d-flex mb-2">
                        <i class="bi bi-geo-alt text-primary me-2"></i>
                        <p class="mb-0">{{ $lokasi ? $lokasi->content : 'Lokasi tidak tersedia' }}</p>
                    </div>
                    <div class="d-flex mb-2">
                        <i class="bi bi-envelope-open text-primary me-2"></i>
                        <p class="mb-0">{{ $email ? $email->content : 'Email tidak tersedia' }}</p>
                    </div>
                    <div class="d-flex mb-2">
                        <i class="bi bi-telephone text-primary me-2"></i>
                        <p class="mb-0">{{ $tlp ? $tlp->content : 'Telepon tidak tersedia' }}</p>
                    </div>
                    <div class="d-flex mt-4">
                        <a class="btn btn-primary btn-square me-2" href="{{ $twitter ? $twitter->content : '#' }}">
                            <i class="fab fa-twitter fw-normal"></i>
                        </a>
                        <a class="btn btn-primary btn-square me-2" href="{{ $facebook ? $facebook->content : '#' }}">
                            <i class="fab fa-facebook-f fw-normal"></i>
                        </a>
                        <a class="btn btn-primary btn-square me-2" href="{{ $youtube ? $youtube->content : '#' }}">
                            <i class="fab fa-youtube fw-normal"></i>
                        </a>
                        <a class="btn btn-primary btn-square" href="{{ $instagram ? $instagram->content : '#' }}">
                            <i class="fab fa-instagram fw-normal"></i>
                        </a>
                    </div>
                </div>

                <!-- Kolom Quick Links -->
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="text-dark mb-0">Quick Links</h3>
                    </div>
                    <div class="link-animated d-flex flex-column">
                        <a class="text-dark mb-2" href="#"><i
                                class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-dark mb-2" href="#"><i
                                class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-dark mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our
                            Services</a>
                        <a class="text-dark mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Meet
                            The Team</a>
                        <a class="text-dark mb-2" href="#"><i
                                class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                        <a class="text-dark" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact
                            Us</a>
                    </div>
                </div>

                <!-- Kolom Popular Links -->
                <div class="col-lg-4 col-md-6 pt-5">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="text-dark mb-0">Popular Links</h3>
                    </div>
                    <div class="link-animated d-flex flex-column">
                        <a class="text-dark mb-2" href="#"><i
                                class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-dark mb-2" href="#"><i
                                class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-dark mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our
                            Services</a>
                        <a class="text-dark mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Meet
                            The Team</a>
                        <a class="text-dark mb-2" href="#"><i
                                class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                        <a class="text-dark" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact
                            Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
