@extends('layouts.app')

@section('title', 'Service - David Mechatronics')

@section('content')
<section class="services-section tech-bg">
    <div class="section-header">
        <span class="section-badge">Keahlian & Layanan</span>
        <h2 class="section-title">Solusi Rekayasa Teknologi</h2>
        <p class="section-subtitle">
            Integrasi perangkat keras dan perangkat lunak untuk menciptakan sistem otomasi dan kontrol yang presisi.
        </p>
    </div>

    <div class="services">
        <!-- Kartu 1 -->
        <div class="card">
            <div class="card-top">
                <div class="icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="4" y="4" width="16" height="16" rx="2"/>
                        <path d="M9 9h6v6H9zM9 1v3M15 1v3M9 20v3M15 20v3M20 9h3M20 14h3M1 9h3M1 14h3"/>
                    </svg>
                </div>
                <span class="card-number">01</span>
            </div>
            <h3>Embedded & Elektronika</h3>
            <p>Perancangan skematik rangkaian elektronika, desain PCB, serta pemrograman mikrokontroler untuk kendali perangkat keras.</p>
            <div class="skill-tags">
                <span>ESP32</span>
                <span>Arduino</span>
                <span>STM32</span>
                <span>PCB Design</span>
            </div>
        </div>

        <!-- Kartu 2 -->
        <div class="card">
            <div class="card-top">
                <div class="icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="3"/>
                        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/>
                    </svg>
                </div>
                <span class="card-number">02</span>
            </div>
            <h3>Otomasi Industri & PLC</h3>
            <p>Pemrograman PLC, perancangan antarmuka HMI, integrasi sensor dan aktuator pneumatik/elektrik untuk lini industri.</p>
            <div class="skill-tags">
                <span>Ladder Diagram</span>
                <span>HMI</span>
                <span>Pneumatic</span>
                <span>Sensors</span>
            </div>
        </div>

        <!-- Kartu 3 -->
        <div class="card">
            <div class="card-top">
                <div class="icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="16 18 22 12 16 6"/>
                        <polyline points="8 6 2 12 8 18"/>
                    </svg>
                </div>
                <span class="card-number">03</span>
            </div>
            <h3>Web & IoT Monitoring</h3>
            <p>Pengembangan sistem pemantauan berbasis web untuk visualisasi data sensor dan kendali jarak jauh secara terintegrasi.</p>
            <div class="skill-tags">
                <span>Laravel</span>
                <span>IoT</span>
                <span>Dashboard</span>
                <span>REST API</span>
            </div>
        </div>
    </div>
</section>
@endsection