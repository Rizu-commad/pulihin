@extends('layouts.guest')

@section('title', 'FAQ - Pulih.in')

@section('content')
<div class="auth-page">
    <div class="auth-wrap">
        <div class="auth-card">
            <!-- Back Button -->
            <div class="auth-card-head">
                <a href="{{ route('home') }}" class="auth-back">
                    <i class="bi bi-arrow-left"></i>
                    Kembali ke Beranda
                </a>
            </div>

            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">Frequently Asked Questions</h2>
                <p class="text-muted">Pertanyaan yang sering diajukan tentang platform Pulih.in</p>
            </div>

            <!-- Search Bar -->
            <div class="mb-4">
                <div class="input-group input-group-lg">
                    <span class="input-group-text bg-white border-end-0">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text" class="form-control border-start-0" id="faqSearch" placeholder="Cari pertanyaan...">
                </div>
            </div>

            <!-- FAQ Categories -->
            <div class="mb-4">
                <div class="d-flex flex-wrap gap-2" role="group">
                    <button type="button" class="btn btn-outline-primary active flex-fill" data-category="all" style="min-width: 100px;">Semua</button>
                    <button type="button" class="btn btn-outline-primary flex-fill" data-category="donasi" style="min-width: 100px;">Donasi</button>
                    <button type="button" class="btn btn-outline-primary flex-fill" data-category="registrasi" style="min-width: 100px;">Registrasi</button>
                    <button type="button" class="btn btn-outline-primary flex-fill" data-category="penyaluran" style="min-width: 100px;">Penyaluran</button>
                    <button type="button" class="btn btn-outline-primary flex-fill" data-category="teknis" style="min-width: 100px;">Teknis</button>
                </div>
            </div>

            <!-- FAQ Items -->
            <div class="accordion" id="faqAccordion">
                <!-- Donasi Category -->
                <div class="accordion-item mb-3" data-category="donasi">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            Bagaimana cara berdonasi di Pulih.in?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Untuk berdonasi di Pulih.in, Anda perlu: 1) Daftar sebagai donatur, 2) Pilih program donasi yang ingin Anda dukung, 3) Pilih jumlah donasi dan metode pembayaran, 4) Selesaikan pembayaran, 5) Dapatkan bukti donasi dan pantau perkembangan program.
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3" data-category="donasi">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            Apa saja metode pembayaran yang tersedia?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Kami menerima berbagai metode pembayaran: Transfer bank (BCA, Mandiri, BNI, BRI), E-wallet (GoPay, OVO, Dana, LinkAja), Kartu kredit/debit, dan QRIS.
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3" data-category="donasi">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            Apakah donasi saya aman?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Ya, donasi Anda sangat aman. Kami menggunakan sistem enkripsi SSL, rekening terpisah untuk dana donasi, dan audit rutin oleh pihak ketiga. Setiap transaksi dapat dilacak dan transparan.
                        </div>
                    </div>
                </div>

                <!-- Registrasi Category -->
                <div class="accordion-item mb-3" data-category="registrasi">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                            Siapa saja yang bisa mendaftar di Pulih.in?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Siapa pun bisa mendaftar: Donatur (individu atau perusahaan), Korban bencana yang membutuhkan bantuan, dan Volunteer yang ingin membantu penyaluran bantuan.
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3" data-category="registrasi">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                            Bagaimana proses verifikasi korban bencana?
                        </button>
                    </h2>
                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Proses verifikasi meliputi: 1) Submit dokumen pendukung (KTP, surat keterangan), 2) Verifikasi oleh tim admin, 3) Survey lapangan jika needed, 4) Persetujuan atau penolakan dengan alasan jelas.
                        </div>
                    </div>
                </div>

                <!-- Penyaluran Category -->
                <div class="accordion-item mb-3" data-category="penyaluran">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                            Bagaimana saya tahu donasi saya tersalurkan?
                        </button>
                    </h2>
                    <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Anda dapat memantau melalui dashboard donatur: Laporan real-time penyaluran, Foto dan video dokumentasi, Laporan bulanan, Notifikasi email setiap penyaluran.
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3" data-category="penyaluran">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                            Berapa lama proses penyaluran bantuan?
                        </button>
                    </h2>
                    <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Waktu penyaluran bervariasi: Bantuan darurat: 1-3 hari, Bantuan rutin: 7-14 hari, Bantuan program: Sesuai timeline program. Semua proses dapat dipantau secara real-time.
                        </div>
                    </div>
                </div>

                <!-- Teknis Category -->
                <div class="accordion-item mb-3" data-category="teknis">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                            Apakah ada biaya administrasi?
                        </button>
                    </h2>
                    <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Kami mengenakan biaya administrasi minimal (5-10%) untuk operasional platform, verifikasi, dan administrasi. Detail biaya ditampilkan sebelum konfirmasi donasi.
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3" data-category="teknis">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq9">
                            Bagaimana jika saya lupa password?
                        </button>
                    </h2>
                    <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Klik "Lupa Password" di halaman login, masukkan email Anda, kami akan kirim link reset password. Link berlaku 24 jam.
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3" data-category="teknis">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq10">
                            Apakah data saya aman?
                        </button>
                    </h2>
                    <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Ya, data Anda sangat aman. Kami menggunakan enkripsi data, kebijakan privasi ketat, dan tidak membagikan data pihak ketiga tanpa persetujuan.
                        </div>
                    </div>
                </div>
            </div>

            <!-- Still Need Help Section -->
            <div class="text-center mt-5 p-4 bg-light rounded">
                <h5 class="fw-bold mb-3">Masih butuh bantuan?</h5>
                <p class="text-muted mb-4">Jika jawaban di atas tidak membantu, jangan ragu menghubungi kami langsung.</p>
                <a href="{{ route('contact') }}" class="btn btn-primary">
                    <i class="bi bi-chat-dots me-2"></i> Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Category filter
    const categoryBtns = document.querySelectorAll('[data-category]');
    const faqItems = document.querySelectorAll('.accordion-item[data-category]');
    
    categoryBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const category = this.dataset.category;
            
            // Update active button
            categoryBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            // Filter items
            faqItems.forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
    
    // Search functionality
    const searchInput = document.getElementById('faqSearch');
    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        
        faqItems.forEach(item => {
            const text = item.textContent.toLowerCase();
            if (text.includes(searchTerm)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });
});
</script>
@endpush
