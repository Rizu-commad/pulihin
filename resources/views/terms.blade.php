@extends('layouts.guest')

@section('title', 'Terms of Service - Pulih.in')

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

            <div class="terms-content">
                <h1 class="fw-bold mb-4">Terms of Service</h1>
                <p class="text-muted mb-4">Terakhir diperbarui: {{ date('d F Y') }}</p>

                <div class="content-section">
                    <h4 class="fw-bold mb-3">1. Penerimaan Syarat dan Ketentuan</h4>
                    <p class="mb-3">Dengan mengakses dan menggunakan platform Pulih.in, Anda setuju untuk terikat oleh syarat dan ketentuan ini. Jika tidak setuju, jangan gunakan platform ini.</p>
                </div>

                <div class="content-section">
                    <h4 class="fw-bold mb-3">2. Definisi</h4>
                    <ul class="mb-4">
                        <li><strong>Platform:</strong> Situs web dan aplikasi Pulih.in</li>
                        <li><strong>Donatur:</strong> Individu atau organisasi yang memberikan donasi</li>
                        <li><strong>Korban:</strong> Penerima bantuan yang telah diverifikasi</li>
                        <li><strong>Volunteer:</strong> Individu yang membantu penyaluran bantuan</li>
                        <li><strong>Donasi:</strong> Uang atau barang yang disumbangkan</li>
                        <li><strong>Program:</strong> Kegiatan bantuan yang diselenggarakan</li>
                    </ul>
                </div>

                <div class="content-section">
                    <h4 class="fw-bold mb-3">3. Pendaftaran Akun</h4>
                    <p class="mb-3">Untuk mendaftar, Anda harus:</p>
                    <ul class="mb-4">
                        <li>Minimal 18 tahun atau dengan persetujuan orang tua</li>
                        <li>Memberikan informasi yang benar dan lengkap</li>
                        <li>Maintain keamanan akun dan password</li>
                        <li>Tidak menggunakan identitas orang lain</li>
                        <li>Mematuhi semua persyaratan verifikasi</li>
                    </ul>
                </div>

                <div class="content-section">
                    <h4 class="fw-bold mb-3">4. Tanggung Jawab Donatur</h4>
                    <p class="mb-3">Sebagai donatur, Anda bertanggung jawab untuk:</p>
                    <ul class="mb-4">
                        <li>Memastikan dana yang disumbangkan legal</li>
                        <li>Memahami tujuan program yang didukung</li>
                        <li>Tidak menarik kembali donasi yang telah disalurkan</li>
                        <li>Mematuhi batas minimum dan maksimum donasi</li>
                        <li>Melaporkan jika ada masalah dengan transaksi</li>
                    </ul>
                </div>

                <div class="content-section">
                    <h4 class="fw-bold mb-3">5. Tanggung Jawab Korban</h4>
                    <p class="mb-3">Sebagai penerima bantuan, Anda harus:</p>
                    <ul class="mb-4">
                        <li>Memberikan informasi yang jujur dan akurat</li>
                        <li>Melengkapi dokumen verifikasi yang diperlukan</li>
                        <li>Menggunakan bantuan sesuai tujuan</li>
                        <li>Memberikan laporan penggunaan bantuan</li>
                        <li>Tidak menjual atau mengalihkan bantuan</li>
                    </ul>
                </div>

                <div class="content-section">
                    <h4 class="fw-bold mb-3">6. Tanggung Jawab Volunteer</h4>
                    <p class="mb-3">Sebagai volunteer, Anda harus:</p>
                    <ul class="mb-4">
                        <li>Menjalankan tugas dengan integritas</li>
                        <li>Mendokumentasikan penyaluran bantuan</li>
                        <li>Menjaga kerahasiaan data penerima</li>
                        <li>Melaporkan masalah atau penyalahgunaan</li>
                        <li>Mematuhi kode etik organisasi</li>
                    </ul>
                </div>

                <div class="content-section">
                    <h4 class="fw-bold mb-3">7. Proses Donasi dan Penyaluran</h4>
                    <p class="mb-3">Donasi akan diproses dengan:</p>
                    <ul class="mb-4">
                        <li>Verifikasi transaksi pembayaran</li>
                        <li>Konfirmasi donasi ke donatur</li>
                        <li>Penyaluran sesuai program yang dipilih</li>
                        <li>Dokumentasi lengkap proses penyaluran</li>
                        <li>Laporan kepada donatur dan stakeholder</li>
                    </ul>
                </div>

                <div class="content-section">
                    <h4 class="fw-bold mb-3">8. Biaya Administrasi</h4>
                    <p class="mb-3">Platform mengenakan biaya administrasi untuk:</p>
                    <ul class="mb-4">
                        <li>Operasional platform dan server</li>
                        <li>Verifikasi dan validasi data</li>
                        <li>Biaya transaksi payment gateway</li>
                        <li>Administrasi dan pelaporan</li>
                        <li>Biaya transparan dan diinformasikan sebelum donasi</li>
                    </ul>
                </div>

                <div class="content-section">
                    <h4 class="fw-bold mb-3">9. Larangan</h4>
                    <p class="mb-3">DILARANG keras untuk:</p>
                    <ul class="mb-4">
                        <li>Memberikan informasi palsu atau menyesatkan</li>
                        <li>Menggunakan platform untuk kegiatan illegal</li>
                        <li>Mencoba meretas atau merusak sistem</li>
                        <li>Spam, phishing, atau penipuan</li>
                        <li>Ujaran kebencian atau diskriminasi</li>
                        <li>Pelanggaran hak kekayaan intelektual</li>
                    </ul>
                </div>

                <div class="content-section">
                    <h4 class="fw-bold mb-3">10. Kekayaan Intelektual</h4>
                    <p class="mb-3">Semua konten, desain, dan fitur platform adalah milik Pulih.in dan dilindungi oleh hukum hak cipta. Tidak diperbolehkan menyalin, mendistribusikan, atau menggunakan tanpa izin tertulis.</p>
                </div>

                <div class="content-section">
                    <h4 class="fw-bold mb-3">11. Pembatasan Tanggung Jawab</h4>
                    <p class="mb-3">Pulih.in tidak bertanggung jawab atas:</p>
                    <ul class="mb-4">
                        <li>Keterlambatan penyaluran karena force majeure</li>
                        <li>Kerugian akibat kesalahan pengguna</li>
                        <li>Konten dari pihak ketiga</li>
                        <li>Koneksi internet atau masalah teknis eksternal</li>
                        <li>Penyalahgunaan akun oleh pihak tidak berwenang</li>
                    </ul>
                </div>

                <div class="content-section">
                    <h4 class="fw-bold mb-3">12. Privasi Data</h4>
                    <p class="mb-3">Data pribadi Anda dilindungi sesuai Privacy Policy kami. Dengan menggunakan platform, Anda menyetujui pengumpulan, penggunaan, dan perlindungan data sesuai kebijakan yang berlaku.</p>
                </div>

                <div class="content-section">
                    <h4 class="fw-bold mb-3">13. Sengketa</h4>
                    <p class="mb-3">Sengketa akan diselesaikan melalui:</p>
                    <ul class="mb-4">
                        <li>Negosiasi dan mediasi terlebih dahulu</li>
                        <li>Arbitrase yang netral dan independen</li>
                        <li>Pengadilan negeri Jakarta Selatan</li>
                        <li>Hukum Republik Indonesia yang berlaku</li>
                    </ul>
                </div>

                <div class="content-section">
                    <h4 class="fw-bold mb-3">14. Perubahan Syarat dan Ketentuan</h4>
                    <p class="mb-3">Kami dapat mengubah syarat dan ketentuan sewaktu-waktu. Perubahan signifikan akan diberitahukan 30 hari sebelum berlaku. Penggunaan berkelanjutan berarti persetujuan terhadap perubahan.</p>
                </div>

                <div class="content-section">
                    <h4 class="fw-bold mb-3">15. Terminasi</h4>
                    <p class="mb-3">Kami dapat menghentikan akun Anda jika:</p>
                    <ul class="mb-4">
                        <li>Melanggar syarat dan ketentuan</li>
                        <li>Terindikasi aktivitas mencurigakan</li>
                        <li>Merugikan platform atau pengguna lain</li>
                        <li>Tidak aktif lebih dari 12 bulan</li>
                        <li>Atas permintaan Anda sendiri</li>
                    </ul>
                </div>

                <div class="content-section">
                    <h4 class="fw-bold mb-3">16. Kontak</h4>
                    <p class="mb-3">Untuk pertanyaan tentang syarat dan ketentuan:</p>
                    <ul class="mb-4">
                        <li>Email: legal@pulih.in</li>
                        <li>Telepon: (62) 857 2687 0777</li>
                        <li>Alamat: Jl. Karangduren No. 77, Surakarta</li>
                    </ul>
                </div>

                <div class="alert alert-warning mt-4">
                    <i class="bi bi-exclamation-triangle me-2"></i>
                    <strong>Penting:</strong> Syarat dan ketentuan ini adalah perjanjian binding antara Anda dan Pulih.in. Baca dengan seksama sebelum menggunakan platform.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .terms-content {
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
