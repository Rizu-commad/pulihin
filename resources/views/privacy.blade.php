@extends('layouts.guest')

@section('title', 'Privacy Policy - Pulih.in')

@section('content')
<div class="auth-page">
    <div class="auth-wrap">
        <div class="auth-card auth-card-lg">
            <!-- Back Button -->
            <div class="auth-card-head">
                <a href="{{ route('home') }}" class="auth-back">
                    <i class="bi bi-arrow-left"></i>
                    Kembali ke Beranda
                </a>
            </div>

            <div class="privacy-content">
                <h1 class="fw-bold mb-4">Privacy Policy</h1>
                <p class="text-muted mb-4">Terakhir diperbarui: {{ date('d F Y') }}</p>

                <div class="content-section">
                    <h4 class="fw-bold mb-3">1. Informasi yang Kami Kumpulkan</h4>
                    <p class="mb-3">Kami mengumpulkan informasi berikut:</p>
                    <ul class="mb-4">
                        <li><strong>Informasi Pribadi:</strong> Nama, email, nomor telepon, alamat</li>
                        <li><strong>Informasi Akun:</strong> Username, password (terenkripsi), role</li>
                        <li><strong>Informasi Transaksi:</strong> Jumlah donasi, metode pembayaran, timestamp</li>
                        <li><strong>Informasi Penggunaan:</strong> IP address, browser, device, waktu akses</li>
                    </ul>
                </div>

                <div class="content-section">
                    <h4 class="fw-bold mb-3">2. Cara Kami Menggunakan Informasi</h4>
                    <p class="mb-3">Informasi Anda digunakan untuk:</p>
                    <ul class="mb-4">
                        <li>Mengelola akun dan transaksi donasi</li>
                        <li>Memproses dan menyalurkan bantuan</li>
                        <li>Mengirim laporan dan notifikasi</li>
                        <li>Memverifikasi identitas dan keabsahan data</li>
                        <li>Meningkatkan layanan dan pengalaman pengguna</li>
                        <li>Memenuhi kewajiban hukum dan regulasi</li>
                    </ul>
                </div>

                <div class="content-section">
                    <h4 class="fw-bold mb-3">3. Perlindungan Data</h4>
                    <p class="mb-3">Kami melindungi data Anda dengan:</p>
                    <ul class="mb-4">
                        <li>Enkripsi data selama transmisi dan penyimpanan</li>
                        <li>Server yang aman dengan firewall dan monitoring</li>
                        <li>Akses terbatas untuk authorized personnel</li>
                        <li>Backup data teratur dan recovery plan</li>
                        <li>Audit keamanan berkala</li>
                    </ul>
                </div>

                <div class="content-section">
                    <h4 class="fw-bold mb-3">4. Berbagi Informasi</h4>
                    <p class="mb-3">Kami tidak membagi informasi Anda ke pihak ketiga kecuali:</p>
                    <ul class="mb-4">
                        <li>Dengan persetujuan Anda yang eksplisit</li>
                        <li>Untuk memproses transaksi (payment gateway)</li>
                        <li>Untuk kepatuhan hukum atau permintaan resmi</li>
                        <li>Untuk melindungi hak, properti, atau keselamatan</li>
                        <li>Dengan mitra terpercaya yang telah ditentukan</li>
                    </ul>
                </div>

                <div class="content-section">
                    <h4 class="fw-bold mb-3">5. Hak Anda Sebagai Pengguna</h4>
                    <p class="mb-3">Anda memiliki hak untuk:</p>
                    <ul class="mb-4">
                        <li>Mengakses dan melihat data pribadi Anda</li>
                        <li>Memperbarui atau mengoreksi data yang tidak akurat</li>
                        <li>Menghapus akun dan data (dengan syarat dan ketentuan)</li>
                        <li>Menolak pemasaran dan komunikasi non-essensial</li>
                        <li>Meminta salinan data pribadi Anda</li>
                    </ul>
                </div>

                <div class="content-section">
                    <h4 class="fw-bold mb-3">6. Cookies dan Tracking</h4>
                    <p class="mb-3">Kami menggunakan cookies untuk:</p>
                    <ul class="mb-4">
                        <li>Mengingat preferensi dan session login</li>
                        <li>Menganalisis traffic dan penggunaan website</li>
                        <li>Mempersonalisasi konten dan iklan</li>
                        <li>Meningkatkan performa dan keamanan</li>
                    </ul>
                </div>

                <div class="content-section">
                    <h4 class="fw-bold mb-3">7. Retensi Data</h4>
                    <p class="mb-3">Kami menyimpan data Anda selama:</p>
                    <ul class="mb-4">
                        <li>Aktif: Selama akun Anda aktif</li>
                        <li>Transaksi: Minimum 10 tahun untuk kepatuhan pajak</li>
                        <li>Log: 1 tahun untuk keamanan dan analisis</li>
                        <li>Data yang dihapus: 30 hari dalam backup system</li>
                    </ul>
                </div>

                <div class="content-section">
                    <h4 class="fw-bold mb-3">8. Perubahan Kebijakan</h4>
                    <p class="mb-4">Kami dapat memperbarui kebijakan privasi ini. Perubahan signifikan akan diberitahukan melalui email atau notifikasi di platform. Penggunaan berkelanjutan berarti Anda menyetujui perubahan tersebut.</p>
                </div>

                <div class="content-section">
                    <h4 class="fw-bold mb-3">9. Kontak Kami</h4>
                    <p class="mb-3">Untuk pertanyaan tentang privasi data, hubungi:</p>
                    <ul class="mb-4">
                        <li>Email: privacy@pulih.in</li>
                        <li>Telepon: (62) 857 2687 0777</li>
                        <li>Alamat: Jl. Karangduren No. 177, Surakarta</li>
                    </ul>
                </div>

                <div class="alert alert-info mt-4">
                    <i class="bi bi-info-circle me-2"></i>
                    <strong>Informasi:</strong> Dengan menggunakan platform Pulih.in, Anda menyatakan telah membaca, memahami, dan menyetujui kebijakan privasi ini.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .privacy-content {
        max-width: 800px;
        margin: 0 auto;
    }
    .content-section {
        margin-bottom: 2rem;
        padding-bottom: 1.5rem;
        border-bottom: 1px solid #e9ecef;
    }
    .content-section:last-child {
        border-bottom: none;
    }
    .content-section h4 {
        color: #4f46e5;
    }
    .content-section ul {
        padding-left: 1.5rem;
    }
    .content-section li {
        margin-bottom: 0.5rem;
    }
</style>
@endpush
