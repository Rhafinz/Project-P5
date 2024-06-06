<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sekolah</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/profil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


</head>

<body>
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="images/logo.png" alt="" class="brand-logo">
                    <span class="brand-text text-dark">Sekolah</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link"><b>Beranda</b></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/profil') }}" class="nav-link"><b>Profil</b></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="navbar-bottom">
                <div class="color-box"></div>
                <div class="color-box"></div>
                <div class="color-box"></div>
                <div class="color-box"></div>
                <div class="color-box"></div>
                <div class="color-box"></div>
            </div>
        </div>
    </header>

    <div class="hero-section">
        <img src="images/download (2).jpg" alt="School Activities" class="img-fluid">
    </div>

    <main class="container mt-4 pt-4">
        <section id="school-profile" class="mb-5">
            <h2 class="text-center mb-4">Profil</h2>
            <p>
                Sekolah kami berdiri sejak tahun 2024 dan terus berkembang menjadi salah satu institusi pendidikan
                terkemuka di daerah ini. Dengan fasilitas modern dan tenaga pengajar yang berkompeten, kami
                berkomitmen untuk memberikan pendidikan terbaik bagi siswa-siswi kami.
            </p>
            </div>
        </section>

        <section id="school-vision" class="mb-5">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/download (3).jpg" alt="Vision" class="img-fluid rounded" style="width: 600px">
                </div>
                <div class="col-md-6 order-md-1">
                    <h2 class="text-center mb-4">Visi</h2>
                    <p>
                        Menjadi lembaga pendidikan yang unggul dalam pembentukan karakter, kreativitas, dan prestasi
                        siswa,
                        serta mampu bersaing di tingkat global.
                    </p>
                    <h2 class="text-center mb-4">Misi</h2>
                    <p>
                        - Memberikan pendidikan berkualitas dengan mengutamakan pengembangan karakter dan akademik
                        siswa.
                        <br>
                        - Menyediakan lingkungan belajar yang kondusif dan inovatif.
                        <br>
                        - Mempersiapkan siswa untuk menghadapi tantangan global.
                    </p>
                </div>
            </div>
        </section>

        <section id="school-history" class="mb-5">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center mb-4">Sejarah Pengembangan</h2>
                    <p>
                        Sejak didirikan, sekolah kami telah melalui berbagai tahap pengembangan dan perbaikan. Dimulai
                        dengan hanya beberapa ruang kelas, kini kami memiliki fasilitas lengkap termasuk laboratorium,
                        perpustakaan, dan area olahraga. Berkat dukungan dari masyarakat dan upaya tak henti dari staf
                        pengajar, sekolah kami terus berkembang untuk memenuhi kebutuhan pendidikan masa kini.
                    </p>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Tentang Kami</h4>
                    <ul>
                        <li><a href="#">Profil Sekolah</a></li>
                        <li><a href="#">Visi & Misi</a></li>
                        <li><a href="#">Sejarah</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Unit Pendidikan</h4>
                    <ul>
                        <li><a href="#">SMK</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Hubungi Kami</h4>
                    <ul>
                        <li><a href="#">Kontak</a></li>
                        <li><a href="#">Alamat</a></li>
                        <li><a href="#">Peta Lokasi</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Ikuti Kami</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Sekolah Menengah Kejuruan Harapan Bangsa. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script type="text/javascript" src="js/java.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
