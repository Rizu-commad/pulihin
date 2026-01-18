@extends('layouts.guest')

@section('title', 'Kontak - Pulih.in')

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

            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="pe-lg-4">
                        <h2 class="fw-bold mb-4">Hubungi Kami</h2>
                        <p class="text-muted mb-4">Ada pertanyaan atau butuh bantuan? Tim kami siap membantu Anda.</p>

                        <form id="contactForm" class="needs-validation" novalidate>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Nama Lengkap *</label>
                                    <input type="text" class="form-control form-control-lg" id="name" name="name" required>
                                    <div class="invalid-feedback">Nama lengkap harus diisi</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email *</label>
                                    <input type="email" class="form-control form-control-lg" id="email" name="email" required>
                                    <div class="invalid-feedback">Email valid harus diisi</div>
                                </div>
                                <div class="col-12">
                                    <label for="subject" class="form-label">Subjek *</label>
                                    <select class="form-select form-select-lg" id="subject" name="subject" required>
                                        <option value="">Pilih subjek</option>
                                        <option value="pertanyaan">Pertanyaan Umum</option>
                                        <option value="donasi">Informasi Donasi</option>
                                        <option value="teknis">Bantuan Teknis</option>
                                        <option value="kerjasama">Kerjasama</option>
                                        <option value="pengaduan">Pengaduan</option>
                                    </select>
                                    <div class="invalid-feedback">Subjek harus dipilih</div>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Pesan *</label>
                                    <textarea class="form-control form-control-lg" id="message" name="message" rows="5" required placeholder="Tuliskan pesan Anda di sini..."></textarea>
                                    <div class="invalid-feedback">Pesan harus diisi</div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="copy" name="copy">
                                        <label class="form-check-label" for="copy">
                                            Kirim salinan pesan ke email saya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg auth-submit w-100">
                                        <i class="bi bi-send me-2"></i> Kirim Pesan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ps-lg-4">
                        <h5 class="fw-bold mb-4">Informasi Kontak</h5>
                        
                        <div class="mb-4">
                            <div class="d-flex align-items-start mb-3">
                                <div class="flex-shrink-0">
                                    <div class="bg-primary text-white rounded-circle p-2" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="fw-semibold">Alamat</h6>
                                    <p class="text-muted small mb-0">Jl. Karangduren No. 77, Surakarta, Jawa Tengah 65789</p>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-start mb-3">
                                <div class="flex-shrink-0">
                                    <div class="bg-primary text-white rounded-circle p-2" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                        <i class="bi bi-telephone"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="fw-semibold">Telepon</h6>
                                    <p class="text-muted small mb-0">(62) 857 2687 0777</p>
                                    <p class="text-muted small mb-0">WhatsApp: +62 857-2687-0777</p>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-start mb-3">
                                <div class="flex-shrink-0">
                                    <div class="bg-primary text-white rounded-circle p-2" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="fw-semibold">Email</h6>
                                    <p class="text-muted small mb-0">info@pulih.in</p>
                                    <p class="text-muted small mb-0">support@pulih.in</p>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0">
                                    <div class="bg-primary text-white rounded-circle p-2" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                        <i class="bi bi-clock"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="fw-semibold">Jam Operasional</h6>
                                    <p class="text-muted small mb-0">Senin - Jumat: 08:00 - 17:00</p>
                                    <p class="text-muted small mb-0">Sabtu: 09:00 - 13:00</p>
                                    <p class="text-muted small mb-0">Minggu & Libur: Tutup</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h6 class="fw-semibold mb-3">Ikuti Kami</h6>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-outline-primary btn-sm" aria-label="Facebook">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-outline-primary btn-sm" aria-label="Twitter">
                                    <i class="bi bi-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-outline-primary btn-sm" aria-label="Instagram">
                                    <i class="bi bi-instagram"></i>
                                </a>
                                <a href="#" class="btn btn-outline-primary btn-sm" aria-label="LinkedIn">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                                <a href="#" class="btn btn-outline-primary btn-sm" aria-label="YouTube">
                                    <i class="bi bi-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center py-4">
                <div class="text-success mb-3">
                    <i class="bi bi-check-circle" style="font-size: 3rem;"></i>
                </div>
                <h5 class="fw-bold mb-2">Pesan Terkirim!</h5>
                <p class="text-muted mb-3">Terima kasih telah menghubungi kami. Kami akan segera merespons pesan Anda.</p>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .contact-info-item {
        transition: transform 0.2s;
    }
    .contact-info-item:hover {
        transform: translateX(5px);
    }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const successModal = new bootstrap.Modal(document.getElementById('successModal'));
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        if (!form.checkValidity()) {
            e.stopPropagation();
            form.classList.add('was-validated');
            return;
        }
        
        // Show loading state
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span> Mengirim...';
        submitBtn.disabled = true;
        
        // Simulate API call
        setTimeout(() => {
            // Reset form
            form.reset();
            form.classList.remove('was-validated');
            
            // Reset button
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
            
            // Show success modal
            successModal.show();
        }, 2000);
    });
});
</script>
@endpush
