@extends('layouts.app')

@section('title', 'Contact - David Mechatronics')

@section('content')
<section class="contact-section tech-bg">
    <div class="section-header">
        <span class="section-badge">Kontak & Kolaborasi</span>
        <h2 class="section-title">Mari Terhubung</h2>
        <p class="section-subtitle">
            Mari berdiskusi mengenai teknologi, proyek rekayasa mekatronika, dan peluang kolaborasi.
        </p>
    </div>

    <div class="contact-content">
        <!-- Kartu Informasi Kontak -->
        <div class="contact-info">
            <h3>Informasi Kontak</h3>
            <p>
                Tertarik berdiskusi atau bekerja sama? Silakan hubungi saya melalui saluran komunikasi berikut.
            </p>

            <div class="contact-item">
                <div class="contact-icon">✉</div>
                <div>
                    <h4>Email Akademik</h4>
                    <p>david.20246019@student.atmi.ac.id</p>
                </div>
            </div>

            <div class="contact-item">
                <div class="contact-icon">☎</div>
                <div>
                    <h4>Telepon / WhatsApp</h4>
                    <p>+62 88215747663</p>
                </div>
            </div>

            <div class="contact-item">
                <div class="contact-icon">⌖</div>
                <div>
                    <h4>Lokasi</h4>
                    <p>Surakarta, Jawa Tengah, Indonesia</p>
                </div>
            </div>

            <div class="availability-box">
                <span class="status-dot"></span>
                <span>Tersedia untuk diskusi proyek & kolaborasi teknis</span>
            </div>
        </div>

        <!-- Kartu Form Pesan -->
        <div class="contact-form">
            <h3>Kirim Pesan Langsung</h3>

            <div id="form-alert" style="display: none; padding: 12px 16px; background: #dcfce7; color: #166534; border-radius: 10px; font-size: 14px; font-weight: 600; margin-bottom: 16px;">
                ✓ Terima kasih! Pesan Anda telah berhasil dikirim.
            </div>

            <form onsubmit="event.preventDefault(); document.getElementById('form-alert').style.display='block'; this.reset();">
                <div class="form-row">
                    <div class="form-group">
                        <label for="contact-name">Nama Lengkap</label>
                        <input type="text" id="contact-name" name="name" placeholder="Masukkan nama kamu" required>
                    </div>

                    <div class="form-group">
                        <label for="contact-email">Alamat Email</label>
                        <input type="email" id="contact-email" name="email" placeholder="Nama@email.com" required>
                    </div>
                </div>

                <label for="contact-subject">Subjek</label>
                <input type="text" id="contact-subject" name="subject" placeholder="Topik diskusi atau kolaborasi" required>

                <label for="contact-message">Pesan</label>
                <textarea id="contact-message" name="message" rows="4" placeholder="Tuliskan detail pesan kamu di sini..." required></textarea>

                <button type="submit">Kirim Pesan &rarr;</button>
            </form>
        </div>
    </div>
</section>
@endsection