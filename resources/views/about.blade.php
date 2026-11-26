@extends('layouts.app')

@section('title', 'About - David Mechatronics')

@section('content')
<section class="about-section tech-bg">
    <div class="section-header">
        <span class="section-badge">Profil & Kompetensi</span>
        <h2 class="section-title">About Me</h2>
        <p class="section-subtitle">
            Latar belakang pendidikan, fokus keahlian teknis, dan grafik penguasaan bidang mekatronika.
        </p>
    </div>

    <div class="about-container">
        <div class="about-content">
            <!-- Kolom Kiri: 4 Kartu Biodata -->
            <div class="about-text">
                <div class="about-grid">
                    <div class="about-card">
                        <div class="about-card-icon">🎓</div>
                        <h3>Pendidikan</h3>
                        <p>Politeknik ATMI Surakarta</p>
                        <span>Teknologi Rekayasa Mekatronika</span>
                    </div>

                    <div class="about-card">
                        <div class="about-card-icon">⚡</div>
                        <h3>Keahlian</h3>
                        <p>Elektronika, Robotika, Pemrograman & Kontrol</p>
                    </div>

                    <div class="about-card">
                        <div class="about-card-icon">⚙</div>
                        <h3>Minat</h3>
                        <p>Otomasi industri, kelistrikan dan teknologi cerdas.</p>
                    </div>

                    <div class="about-card">
                        <div class="about-card-icon">🎯</div>
                        <h3>Tujuan</h3>
                        <p>Mengembangkan solusi teknologi yang inovatif, efisien, dan otomatis melalui integrasi elektronika, pemrograman, sistem kontrol, dan robotika.</p>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Grafik Performance -->
            <div class="performance">
                <div class="perf-header">
                    <div>
                        <h2>Performance</h2>
                        <p class="chart-subtitle">Technology Skills Overview</p>
                    </div>
                    <span class="perf-badge">Mechatronics</span>
                </div>

                <div class="line-chart chart-container">
                    <canvas id="skillsChart" aria-label="Grafik tingkat kemampuan teknologi" role="img"></canvas>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('skillsChart').getContext('2d');
    
    // Membuat efek gradasi biru di bawah garis grafik
    const gradient = ctx.createLinearGradient(0, 0, 0, 260);
    gradient.addColorStop(0, 'rgba(37, 99, 235, 0.28)');
    gradient.addColorStop(1, 'rgba(37, 99, 235, 0.01)');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Elektronika', 'Robotika', 'Pemrograman', 'Sistem Kontrol', 'Otomasi Industri'],
            datasets: [{
                label: 'Tingkat Kemampuan (%)',
                data: [85, 80, 90, 85, 78],
                borderColor: '#2563eb',
                backgroundColor: gradient,
                borderWidth: 3,
                pointBackgroundColor: '#ffffff',
                pointBorderColor: '#2563eb',
                pointBorderWidth: 2.5,
                pointRadius: 5,
                pointHoverRadius: 7,
                tension: 0.4,
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: '#1e293b',
                    padding: 12,
                    cornerRadius: 8,
                    callbacks: {
                        label: function(context) {
                            return ' Penguasaan: ' + context.parsed.y + '%';
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100,
                    grid: {
                        color: 'rgba(203, 213, 225, 0.4)'
                    },
                    ticks: {
                        callback: value => value + '%'
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });
</script>
@endpush