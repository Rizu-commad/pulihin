<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>Pulih.in - Platform Donasi dan Penyaluran Bantuan Sosial Terpercaya</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Pulih.in adalah platform donasi dan penyaluran bantuan sosial yang transparan dan terpercaya. Bergabunglah dalam kebaikan dan bantu sesama yang membutuhkan.">
    <meta name="keywords" content="donasi, bantuan sosial, charity, penggalangan dana, korban bencana, volunteer, Indonesia">
    <meta name="author" content="Pulih.in">
    <meta name="robots" content="index, follow">
    <meta name="language" content="id">
    
    <!-- Open Graph Tags -->
    <meta property="og:title" content="Pulih.in - Platform Donasi dan Penyaluran Bantuan Sosial">
    <meta property="og:description" content="Platform donasi dan penyaluran bantuan sosial yang transparan dan terpercaya untuk membantu sesama yang membutuhkan.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:image" content="{{ url('/images/og-image.jpg') }}">
    <meta property="og:site_name" content="Pulih.in">
    <meta property="og:locale" content="id_ID">
    
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Pulih.in - Platform Donasi dan Penyaluran Bantuan Sosial">
    <meta name="twitter:description" content="Platform donasi dan penyaluran bantuan sosial yang transparan dan terpercaya.">
    <meta name="twitter:image" content="{{ url('/images/og-image.jpg') }}">
    
    <!-- Additional Meta Tags -->
    <meta name="theme-color" content="#4f46e5">
    <meta name="msapplication-TileColor" content="#4f46e5">
    <link rel="canonical" href="{{ url('/') }}">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Custom CSS for Gallery -->
    <style>
    /* Custom Carousel Controls */
    #galleryCarousel .carousel-control-prev,
    #galleryCarousel .carousel-control-next {
        width: 50px;
        height: 50px;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        opacity: 0.8;
        transition: all 0.3s ease;
        margin: 0 20px;
    }
    
    #galleryCarousel .carousel-control-prev:hover,
    #galleryCarousel .carousel-control-next:hover {
        background-color: rgba(0, 0, 0, 0.8);
        opacity: 1;
        transform: translateY(-50%) scale(1.1);
    }
    
    #galleryCarousel .carousel-control-prev-icon,
    #galleryCarousel .carousel-control-next-icon {
        width: 20px;
        height: 20px;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        #galleryCarousel .carousel-control-prev,
        #galleryCarousel .carousel-control-next {
            width: 40px;
            height: 40px;
            margin: 0 10px;
        }
        
        #galleryCarousel .carousel-control-prev-icon,
        #galleryCarousel .carousel-control-next-icon {
            width: 15px;
            height: 15px;
        }
    }
    
    /* Carousel indicators styling */
    #galleryCarousel .carousel-indicators {
        bottom: -40px;
    }
    
    #galleryCarousel .carousel-indicators button {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: #6c757d;
        border: none;
        margin: 0 4px;
        transition: all 0.3s ease;
    }
    
    #galleryCarousel .carousel-indicators button.active {
        background-color: #0d6efd;
        transform: scale(1.2);
    }
    
    /* Gallery Image Styling - Same Size */
    #galleryCarousel .carousel-item img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 8px;
        transition: transform 0.3s ease;
    }
    
    #galleryCarousel .carousel-item img:hover {
        transform: scale(1.05);
    }
    
    /* Mobile responsive image height */
    @media (max-width: 768px) {
        #galleryCarousel .carousel-item img {
            height: 200px;
        }
    }
    
    /* Gallery container spacing */
    #galleryCarousel .carousel-item .row {
        align-items: stretch;
    }
    
    #galleryCarousel .carousel-item .col-md-4 {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    </style>
</head>
<body class="landing-body">
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white landing-navbar sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4 d-flex align-items-center gap-2 text-primary" href="#" aria-label="Pulih.in - Beranda">
                <i class="bi bi-heart-fill text-danger" aria-hidden="true"></i> Pulih.in
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2 mt-3 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#how-it-works">Cara Kerja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('contact') }}">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('faq') }}">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-primary ms-lg-2 px-4 py-2 rounded-pill w-100 w-lg-auto" href="{{ route('login') }}">
                            Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary ms-lg-2 px-4 py-2 rounded-pill fw-semibold w-100 w-lg-auto mt-2 mt-lg-0" href="{{ route('register') }}">
                            Daftar
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="main-content" class="hero-section">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Berbagi Kebahagiaan, Wujudkan Harapan</h1>
                    <p class="lead mb-4">
                        Platform donasi dan penyaluran bantuan sosial yang transparan dan terpercaya untuk membantu sesama yang membutuhkan.
                    </p>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="{{ route('register') }}" class="btn btn-light btn-lg px-4 rounded-pill fw-semibold">
                            <i class="bi bi-person-plus"></i> Mulai Donasi
                        </a>
                        <a href="#programs" class="btn btn-outline-light btn-lg px-4 rounded-pill fw-semibold">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center d-none d-lg-block">
                    <i class="bi bi-heart-fill hero-icon" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Dampak Kebaikan Kita</h2>
                <p class="lead">Bersama kita wujudkan perubahan nyata</p>
            </div>
            <div class="row g-4">
                <div class="col-md-3 col-6">
                    <div class="text-center">
                        <div class="stat-number" data-target="1542">0</div>
                        <h5 class="fw-bold mt-2">Donatur Aktif</h5>
                        <p class="mb-0 opacity-75">Orang baik seperti Anda</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="text-center">
                        <div class="stat-number" data-target="87500000">0</div>
                        <h5 class="fw-bold mt-2">Total Donasi</h5>
                        <p class="mb-0 opacity-75">Tersalurkan dengan transparan</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="text-center">
                        <div class="stat-number" data-target="326">0</div>
                        <h5 class="fw-bold mt-2">Program Berjalan</h5>
                        <p class="mb-0 opacity-75">Bantuan tepat sasaran</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="text-center">
                        <div class="stat-number" data-target="12450">0</div>
                        <h5 class="fw-bold mt-2">Penerima Bantuan</h5>
                        <p class="mb-0 opacity-75">Keluarga yang terbantu</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container py-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold mb-4">Tentang Sistem Kami</h2>
                    <p class="lead mb-4">
                        Sistem Informasi Pengelolaan Donasi dan Laporan Penyaluran Bantuan Sosial adalah platform digital yang memfasilitasi proses donasi dan penyaluran bantuan secara efisien dan transparan.
                    </p>

                    <div class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i><strong>Verifikasi Terpercaya</strong> - Setiap korban diverifikasi oleh admin</div>
                    <div class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i><strong>Tracking Real-time</strong> - Pantau donasi Anda dari awal hingga tersalurkan</div>
                    <div class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i><strong>Laporan Lengkap</strong> - Dokumentasi lengkap setiap penyaluran bantuan</div>
                    <div class="mb-3"><i class="bi bi-check-circle-fill text-success me-2"></i><strong>Kebutuhan Spesifik</strong> - Korban dapat mendaftarkan kebutuhan prioritas</div>
                </div>

                <div class="col-lg-6">
                    <div class="card border-0 shadow-lg">
                        <div class="card-body p-5">
                            <h4 class="fw-bold mb-4">Bergabung Sekarang!</h4>
                            <p class="mb-4">Daftarkan diri Anda dan mulai berbagi kebaikan hari ini</p>
                            <div class="d-grid gap-2">
                                <a href="{{ route('register') }}" class="btn btn-primary btn-lg">
                                    <i class="bi bi-person-plus"></i> Daftar sebagai Donatur
                                </a>
                                <a href="{{ route('register') }}" class="btn btn-outline-warning btn-lg">
                                    <i class="bi bi-person-exclamation"></i> Daftar sebagai Korban
                                </a>
                                <a href="{{ route('register') }}" class="btn btn-outline-success btn-lg">
                                    <i class="bi bi-person-badge"></i> Daftar sebagai Volunteer
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Cara Kerja</h2>
                <p class="lead text-muted">Proses donasi yang mudah dan transparan</p>
            </div>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="text-center">
                        <div class="step-icon mb-3">
                            <i class="bi bi-person-plus" aria-hidden="true"></i>
                        </div>
                        <h5 class="fw-bold">1. Daftar</h5>
                        <p class="text-muted">Buat akun sebagai donatur, korban, atau volunteer</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <div class="step-icon mb-3">
                            <i class="bi bi-search" aria-hidden="true"></i>
                        </div>
                        <h5 class="fw-bold">2. Pilih Program</h5>
                        <p class="text-muted">Pilih program donasi yang ingin Anda dukung</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <div class="step-icon mb-3">
                            <i class="bi bi-heart" aria-hidden="true"></i>
                        </div>
                        <h5 class="fw-bold">3. Donasi</h5>
                        <p class="text-muted">Lakukan donasi dengan metode pembayaran yang tersedia</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <div class="step-icon mb-3">
                            <i class="bi bi-graph-up" aria-hidden="true"></i>
                        </div>
                        <h5 class="fw-bold">4. Pantau</h5>
                        <p class="text-muted">Dapatkan laporan lengkap dan pantau dampak donasi Anda</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Active Programs Section -->
    <section id="programs" class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Program Donasi Aktif</h2>
                <p class="lead text-muted">Bergabunglah dalam program yang sedang berlangsung</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="badge bg-danger me-2">URGENT</div>
                                <small class="text-muted">7 hari tersisa</small>
                            </div>
                            <h5 class="fw-bold mb-3">Bantuan Korban Banjir</h5>
                            <p class="text-muted mb-3">Membantu korban banjir di wilayah Jawa Barat dengan kebutuhan pokok dan peralatan.</p>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-semibold">Terkumpul</span>
                                    <span class="fw-bold text-primary">Rp 45.000.000</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-primary" style="width: 75%"></div>
                                </div>
                                <small class="text-muted">Target: Rp 60.000.000</small>
                            </div>
                            <a href="{{ route('register') }}" class="btn btn-primary w-100">Donasi Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="badge bg-warning me-2">EDUCATION</div>
                                <small class="text-muted">14 hari tersisa</small>
                            </div>
                            <h5 class="fw-bold mb-3">Beasiswa Anak Yatim</h5>
                            <p class="text-muted mb-3">Mendukung pendidikan anak yatim piatu dengan beasiswa untuk semester ganjil 2026.</p>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-semibold">Terkumpul</span>
                                    <span class="fw-bold text-warning">Rp 28.500.000</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-warning" style="width: 57%"></div>
                                </div>
                                <small class="text-muted">Target: Rp 50.000.000</small>
                            </div>
                            <a href="{{ route('register') }}" class="btn btn-warning w-100">Donasi Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="badge bg-success me-2">HEALTH</div>
                                <small class="text-muted">21 hari tersisa</small>
                            </div>
                            <h5 class="fw-bold mb-3">Bantuan Medis Daerah Terpencil</h5>
                            <p class="text-muted mb-3">Menyediakan layanan kesehatan dan obat-obatan untuk daerah terpencil di NTT.</p>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-semibold">Terkumpul</span>
                                    <span class="fw-bold text-success">Rp 15.200.000</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-success" style="width: 38%"></div>
                                </div>
                                <small class="text-muted">Target: Rp 40.000.000</small>
                            </div>
                            <a href="{{ route('register') }}" class="btn btn-success w-100">Donasi Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Testimoni</h2>
                <p class="lead text-muted">Cerita kebaikan dari mereka yang terbantu</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://picsum.photos/seed/person1/60/60" alt="Foto Ahmad Wijaya - Donatur" class="rounded-circle me-3" width="60" height="60">
                                <div>
                                    <h6 class="fw-bold mb-0">Ahmad Wijaya</h6>
                                    <small class="text-muted">Donatur</small>
                                </div>
                            </div>
                            <div class="mb-3">
                                <i class="bi bi-star-fill text-warning" aria-hidden="true"></i>
                                <i class="bi bi-star-fill text-warning" aria-hidden="true"></i>
                                <i class="bi bi-star-fill text-warning" aria-hidden="true"></i>
                                <i class="bi bi-star-fill text-warning" aria-hidden="true"></i>
                                <i class="bi bi-star-fill text-warning" aria-hidden="true"></i>
                                <span class="visually-hidden">5 dari 5 bintang</span>
                            </div>
                            <p class="text-muted">"Platform yang sangat transparan! Saya bisa melihat langsung bagaimana donasi saya disalurkan kepada yang membutuhkan. Sangat memuaskan."</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://picsum.photos/seed/person2/60/60" alt="Foto Siti Nurhaliza - Penerima Bantuan" class="rounded-circle me-3" width="60" height="60">
                                <div>
                                    <h6 class="fw-bold mb-0">Siti Nurhaliza</h6>
                                    <small class="text-muted">Penerima Bantuan</small>
                                </div>
                            </div>
                            <div class="mb-3">
                                <i class="bi bi-star-fill text-warning" aria-hidden="true"></i>
                                <i class="bi bi-star-fill text-warning" aria-hidden="true"></i>
                                <i class="bi bi-star-fill text-warning" aria-hidden="true"></i>
                                <i class="bi bi-star-fill text-warning" aria-hidden="true"></i>
                                <i class="bi bi-star-fill text-warning" aria-hidden="true"></i>
                                <span class="visually-hidden">5 dari 5 bintang</span>
                            </div>
                            <p class="text-muted">"Bantuan yang saya terima sangat membantu keluarga kami. Terima kasih untuk semua donatur yang telah membantu kami di saat sulit."</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://picsum.photos/seed/person3/60/60" alt="Foto Budi Santoso - Volunteer" class="rounded-circle me-3" width="60" height="60">
                                <div>
                                    <h6 class="fw-bold mb-0">Budi Santoso</h6>
                                    <small class="text-muted">Volunteer</small>
                                </div>
                            </div>
                            <div class="mb-3">
                                <i class="bi bi-star-fill text-warning" aria-hidden="true"></i>
                                <i class="bi bi-star-fill text-warning" aria-hidden="true"></i>
                                <i class="bi bi-star-fill text-warning" aria-hidden="true"></i>
                                <i class="bi bi-star-fill text-warning" aria-hidden="true"></i>
                                <i class="bi bi-star-fill text-warning" aria-hidden="true"></i>
                                <span class="visually-hidden">5 dari 5 bintang</span>
                            </div>
                            <p class="text-muted">"Sistem yang sangat membantu para volunteer untuk mendokumentasikan penyaluran bantuan. Efisien dan terorganisir dengan baik."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Galeri Penyaluran</h2>
                <p class="lead text-muted">Dokumentasi nyata kebaikan bersama</p>
            </div>
            <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="2"></button>
                    
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <img src="https://bantentv.com/wp-content/uploads/2026/01/WhatsApp-Image-2026-01-16-at-14.34.00.jpeg" alt="Penyaluran bantuan korban banjir - relawan membagikan sembako" class="img-fluid rounded shadow-sm" loading="lazy">
                                <p class="mt-2 text-center small text-muted">Penyaluran bantuan korban banjir</p>
                            </div>
                            <div class="col-md-4">
                                <img src="https://dprk.bandaacehkota.go.id/wp-content/uploads/2023/12/WhatsApp-Image-2023-12-19-at-11.58.27.jpeg" alt="Bantuan pendidikan anak yatim - siswa menerima buku sekolah" class="img-fluid rounded shadow-sm" loading="lazy">
                                <p class="mt-2 text-center small text-muted">Bantuan pendidikan anak yatim</p>
                            </div>
                            <div class="col-md-4">
                                <img src="https://www.tzuchi.or.id/inliners/1758610366-4-5-marcello-ryandi-edt.jpg" alt="Layanan kesehatan gratis - dokter memeriksa pasien" class="img-fluid rounded shadow-sm" loading="lazy">
                                <p class="mt-2 text-center small text-muted">Layanan kesehatan gratis</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <img src="https://www.harianbatakpos.com/wp-content/uploads/2025/12/temp_Screenshot_20251204-180124.png" alt="Distribusi sembako - relawan membagikan paket bantuan" class="img-fluid rounded shadow-sm">
                                <p class="mt-2 text-center small text-muted">Distribusi sembako</p>
                            </div>
                            <div class="col-md-4">
                                <img src="https://xsportsmedal.id/wp-content/uploads/2025/08/IMG_1978-1024x538.jpeg" alt="Tim volunteer di lapangan - koordinasi penyaluran" class="img-fluid rounded shadow-sm">
                                <p class="mt-2 text-center small text-muted">Tim volunteer di lapangan</p>
                            </div>
                            <div class="col-md-4">
                                <img src="https://derapjuang.id/wp-content/uploads/2022/07/WhatsApp-Image-2022-07-09-at-15.24.39-1-696x464.jpeg?v=1657362312" alt="Serah terima bantuan - penyerahan simbolis" class="img-fluid rounded shadow-sm">
                                <p class="mt-2 text-center small text-muted">Serah terima bantuan</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <img src="https://cdn.antaranews.com/cache/1200x800/2022/06/10/IMG-20220610-WA0018.jpg.webp" alt="Bantuan perlengkapan anak - tas sekolah dan alat tulis" class="img-fluid rounded shadow-sm">
                                <p class="mt-2 text-center small text-muted">Bantuan perlengkapan anak</p>
                            </div>
                            <div class="col-md-4">
                                <img src="https://lh7-rt.googleusercontent.com/docsz/AD_4nXc_4qvipFsMF4Z3cgQN7pbbn7kfe05NOPVo9mW77lcHDYF5UOhcpRhJKIbtV7I9BpW8xscTY-yiqQPjnf_UkpZEVAlMZUDopx-sAmHGIRRGK-JtGo_e7FRJ0RyWuWLGekc?key=DlGxz3qshg0UMqm5xtp6kDFE" alt="Renovasi rumah ibadah - pembangunan mushola" class="img-fluid rounded shadow-sm">
                                <p class="mt-2 text-center small text-muted">Renovasi rumah ibadah</p>
                            </div>
                            <div class="col-md-4">
                                <img src="https://tangerangkab.go.id/images/berita-c73ee2e4-4926-4c1b-877a-bc50c6078c69.jpeg" alt="Kunjungan lansia - relawan menemani warga tua" class="img-fluid rounded shadow-sm">
                                <p class="mt-2 text-center small text-muted">Kunjungan lansia</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tombol Navigasi Kiri -->
                <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <!-- Tombol Navigasi Kanan -->
                <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="fw-bold mb-3 text-white">Pulih.in</h5>
                    <p class="text-white-50">Platform donasi dan penyaluran bantuan sosial yang transparan dan terpercaya untuk membantu sesama yang membutuhkan.</p>
                    <div class="d-flex gap-2 mt-3">
                        <a href="#" class="text-white" aria-label="Facebook">
                            <i class="bi bi-facebook fs-5"></i>
                        </a>
                        <a href="#" class="text-white" aria-label="Twitter">
                            <i class="bi bi-twitter fs-5"></i>
                        </a>
                        <a href="#" class="text-white" aria-label="Instagram">
                            <i class="bi bi-instagram fs-5"></i>
                        </a>
                        <a href="#" class="text-white" aria-label="LinkedIn">
                            <i class="bi bi-linkedin fs-5"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 mb-4">
                    <h6 class="fw-bold mb-3 text-white">Tautan Cepat</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ route('home') }}" class="text-white text-decoration-none">Beranda</a></li>
                        <li class="mb-2"><a href="#programs" class="text-white text-decoration-none">Program</a></li>
                        <li class="mb-2"><a href="{{ route('contact') }}" class="text-white text-decoration-none">Kontak</a></li>
                        <li class="mb-2"><a href="{{ route('faq') }}" class="text-white text-decoration-none">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h6 class="fw-bold mb-3 text-white">Layanan</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ route('register') }}" class="text-white text-decoration-none">Donasi</a></li>
                        <li class="mb-2"><a href="{{ route('register') }}" class="text-white text-decoration-none">Daftar Korban</a></li>
                        <li class="mb-2"><a href="{{ route('register') }}" class="text-white text-decoration-none">Jadi Volunteer</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-4">
                    <h6 class="fw-bold mb-3 text-white">Legal</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ route('privacy') }}" class="text-white text-decoration-none">Privacy Policy</a></li>
                        <li class="mb-2"><a href="{{ route('terms') }}" class="text-white text-decoration-none">Terms of Service</a></li>
                        <li class="mb-2"><a href="{{ route('contact') }}" class="text-white text-decoration-none">Hubungi Kami</a></li>
                    </ul>
                </div>
            </div>
            <hr class="border-secondary my-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0 text-white">&copy; 2026 Pulih.in Dibuat dengan <i class="bi bi-heart-fill text-danger"></i> untuk Indonesia</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0 text-white">
                        <i class="bi bi-geo-alt me-1"></i> Surakarta, Indonesia
                        <span class="ms-3"><i class="bi bi-envelope me-1"></i> info@pulih.in</span>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Loading Overlay -->
    <div id="loadingOverlay" class="loading-overlay d-none">
        <div class="loading-spinner">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <p class="mt-2">Memuat...</p>
        </div>
    </div>

    <!-- Error Toast -->
    <div id="errorToast" class="toast-container position-fixed bottom-0 end-0 p-3">
        <div id="errorToastElement" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-danger text-white">
                <i class="bi bi-exclamation-triangle me-2"></i>
                <strong class="me-auto">Error</strong>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" id="errorMessage">
                Terjadi kesalahan. Silakan coba lagi.
            </div>
        </div>
    </div>

    <!-- JavaScript for Counter Animation -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Loading state management
            const loadingOverlay = document.getElementById('loadingOverlay');
            const errorToast = document.getElementById('errorToast');
            const errorToastElement = document.getElementById('errorToastElement');
            const errorMessage = document.getElementById('errorMessage');
            
            // Show loading
            function showLoading() {
                loadingOverlay.classList.remove('d-none');
            }
            
            // Hide loading
            function hideLoading() {
                loadingOverlay.classList.add('d-none');
            }
            
            // Show error
            function showError(message) {
                errorMessage.textContent = message;
                const toast = new bootstrap.Toast(errorToastElement);
                toast.show();
            }
            
            // Handle navigation loading
            document.querySelectorAll('a[href]').forEach(link => {
                link.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    
                    // Skip external links and anchors
                    if (href.startsWith('http') || href.startsWith('#') || href.includes('javascript')) {
                        return;
                    }
                    
                    // Show loading for internal navigation
                    showLoading();
                    
                    // Hide loading after timeout (fallback)
                    setTimeout(() => {
                        hideLoading();
                    }, 3000);
                });
            });
            
            // Handle form submissions
            document.querySelectorAll('form').forEach(form => {
                form.addEventListener('submit', function() {
                    showLoading();
                });
            });
            
            // Counter Animation
            const counters = document.querySelectorAll('.stat-number');
            const speed = 200; // Animation speed
            
            const animateCounters = () => {
                counters.forEach(counter => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;
                    const increment = target / speed;
                    
                    if (count < target) {
                        counter.innerText = Math.ceil(count + increment);
                        setTimeout(() => animateCounters(), 10);
                    } else {
                        // Format the final number
                        if (target >= 1000000) {
                            counter.innerText = (target / 1000000).toFixed(1) + 'M+';
                        } else if (target >= 1000) {
                            counter.innerText = (target / 1000).toFixed(0) + 'K+';
                        } else {
                            counter.innerText = target.toLocaleString('id-ID');
                        }
                    }
                });
            };
            
            // Intersection Observer for triggering animation when visible
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounters();
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });
            
            const statsSection = document.querySelector('.stat-number');
            if (statsSection) {
                observer.observe(statsSection.parentElement);
            }
            
            // Progress Bar Animation
            const progressBars = document.querySelectorAll('.progress-bar');
            const progressObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const progressBar = entry.target;
                        const width = progressBar.style.width;
                        progressBar.style.width = '0%';
                        setTimeout(() => {
                            progressBar.style.width = width;
                        }, 100);
                        progressObserver.unobserve(progressBar);
                    }
                });
            }, { threshold: 0.5 });
            
            progressBars.forEach(bar => {
                progressObserver.observe(bar);
            });
            
            // Error handling for images
            document.querySelectorAll('img').forEach(img => {
                img.addEventListener('error', function() {
                    this.src = 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDQwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSI0MDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjRjVGNUY1Ii8+CjxwYXRoIGQ9Ik0yMDAgMTUwQzE3NSAxNTAgMTUwIDE3NSAxNTAgMjAwQzE1MCAyMjUgMTc1IDI1MCAyMDAgMjUwQzIyNSAyNTAgMjUwIDIyNSAyNTAgMjAwQzI1MCAxNzUgMjI1IDE1MCAyMDAgMTUwWiIgZmlsbD0iI0Q5RDlEOSIvPgo8cGF0aCBkPSJNMjAwIDE4MEMxODUgMTgwIDE3MCAxOTUgMTcwIDIxMEMxNzAgMjI1IDE4NSAyNDAgMjAwIDI0MEMyMTUgMjQwIDIzMCAyMjUgMjMwIDIxMEMyMzAgMTk1IDIxNSAxODAgMjAwIDE4MFoiIGZpbGw9IiNGRkZGRkYiLz4KPHN2Zz4=';
                    this.alt = 'Gambar tidak tersedia';
                });
            });
            
            // Hide loading when page is fully loaded
            window.addEventListener('load', function() {
                hideLoading();
            });
        });
    </script>
</body>
</html>
