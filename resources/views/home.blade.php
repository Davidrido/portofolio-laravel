@extends('layouts.app')

@section('title', 'Home - Portofolio David')

@section('content')
<section class="home">
    <div class="home-inner">
        <div class="home-content">
            <div class="hero-badge">
                <span class="pulse-dot"></span> Politeknik ATMI Surakarta
            </div>

            <h1>Halo, Saya David Rido<br><span>Mechatronics Engineer</span></h1>

            <p>
                Mahasiswa Teknologi Rekayasa Mekatronika yang berfokus pada perancangan sistem otomasi industri, elektronika, pemrograman mikrokontroler, dan robotika terintegrasi.
            </p>

            <div class="hero-buttons">
                <a href="{{ route('service') }}" class="btn-primary">Eksplorasi Layanan &rarr;</a>
                <a href="{{ route('about') }}" class="btn-outline">Tentang Saya</a>
            </div>

            <!-- Tambahan Highlight Singkat agar Komposisi Layar Seimbang -->
            <div class="hero-highlights">
                <div class="highlight-item">
                    <strong>PLC & Otomasi</strong>
                    <span>Sistem Kontrol Industri</span>
                </div>
                <div class="highlight-divider"></div>
                <div class="highlight-item">
                    <strong>Embedded & IoT</strong>
                    <span>Mikrokontroler & Sensor</span>
                </div>
                <div class="highlight-divider"></div>
                <div class="highlight-item">
                    <strong>Robotika</strong>
                    <span>Integrasi Mekanik & Kode</span>
                </div>
            </div>
        </div>

        <div class="hero-image-wrapper">
            <div class="foto-frame">
                <img src="{{ asset('images/profil.png') }}" alt="Foto Profil David" class="foto">
                <div class="floating-card">
                    <span class="fc-icon">⚙</span>
                    <div>
                        <strong>Mekatronika</strong>
                        <small>Hardware & Software</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection