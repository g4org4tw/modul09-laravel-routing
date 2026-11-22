<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - George Thomas Wattimena</title>
    @vite('resources/sass/app.scss')
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="#">George Thomas Wattimena</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#proyek">Proyek</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="bg-light" style="margin-top: 56px;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h1 class="display-4">Halo, saya George Thomas Wattimena</h1>
                    <p class="fs-5 text-muted">Mahasiswa Sistem Informasi yang tertarik pada pengembangan web.</p>
                    <a href="#proyek" class="btn btn-dark btn-lg me-2">Lihat Proyek</a>
                    <a href="#kontak" class="btn btn-outline-dark btn-lg">Hubungi Saya</a>
                </div>
                <div class="col-md-5 text-center mt-4 mt-md-0">
                   <img src="{{ Vite::asset('resources/images/avatar.jpeg') }}" class="img-fluid rounded-circle" style="width: 250px;" alt="Foto saya">
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang -->
    <section id="tentang" class="py-5">
        <div class="container">
            <h2 class="mb-3">Tentang Saya</h2>
            <p>Saat Ini berkuliah di Telkom University Surabaya, jurusan Sistem Informasi</p>
        </div>
    </section>

    <!-- Proyek -->
    <section id="proyek" class="py-5 bg-light">
        <div class="container">
            <h2 class="mb-4">Proyek</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">TryFit</h5>
                            <p class="card-text">Aplikasi untuk mencoba dan memilih pakaian secara praktis sebelum membeli.</p>
                            <a href="#" class="btn btn-primary btn-sm">Lihat</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Web Profil VMware</h5>
                            <p class="card-text">Website profil yang dikonfigurasi dan dijalankan pada web server di mesin virtual VMware.</p>
                            <a href="#" class="btn btn-primary btn-sm">Lihat</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Alur PBM</h5>
                            <p class="card-text">Diagram alur penerimaan mahasiswa baru yang dimodelkan dengan Visual Paradigm.</p>
                            <a href="#" class="btn btn-primary btn-sm">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak -->
    <section id="kontak" class="py-5">
        <div class="container">
            <h2 class="mb-3">Kontak</h2>
            <p><i class="bi bi-envelope me-2"></i>gmail.com/georgewatimena2006@gmail.com</p>
            <p><i class="bi bi-github me-2"></i>github.com/g4org4tw</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <small>&copy; 2026 George Thomas Wattimena</small>
    </footer>

    @vite('resources/js/app.js')
</body>
</html>
