<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Beranda Sekolah</title>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <!-- bootstrap core css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- progress barstle -->
    <link rel="stylesheet" href="css/css-circular-prog-bar.css">
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- font wesome stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>
    <div class="top_container">
        <!-- header section strats -->

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

        <section class="hero_section ">
            <div class="hero-container container">
                <div class="hero_detail-box">
                    <h3>
                        Selamat Datang Di <br>
                        Website Sekolah Kami
                    </h3>
                    <h1>
                        Sekolah
                    </h1>
                    <p>
                        Disekolah ini kami menyediakan berbagai fasilitas <br>layak pakai, ekskul yang berbagai macam rupa,<br>
                        jurusannya juga lumayan seperti TKRO, TBSM,<br> RPL, TKJ, Multimedia, TITL, dll
                    </p>
                    <div class="hero_btn-continer">
                        <a href=" https://wa.me/6283115073850" class="call_to-btn btn_white-border">
                            <span>
                                Hubungi
                            </span>
                            <img src="images/right-arrow.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="hero_img-container">
                    <div>
                        <img src="images/hero.png" alt="" class="img-fluid" style="margin-top: -10%">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <br>
    <!-- end header section -->

    <!-- teacher section -->

    <section class="teacher_section layout_padding-bottom">
        <div class="container">
            <h2 class="main-heading">Guru</h2> <br>
            <div class="row">
                @forelse ($guru as $data)
                    <div class="col-md-3 mb-4">
                        <div class="card border-0 shadow-sm h-100">
                            <img src="{{ asset('storage/gurus/' . $data->image) }}" class="card-img-top"
                                alt="Foto guru">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $data->nama_guru }}</h5>
                            </div>
                        </div>
                    </div>
                @empty
                    <tr>
                        <center>
                            <td colspan="9">Tidak ada guru yang tersedia.</td>
                        </center>
                    </tr>
                @endforelse
            </div>
        </div>
    </section>



    <!-- teacher section -->

    <section class="vehicle_section layout_padding">
        <div class="container">
            <h2 class="main-heading ">
                Jurusan
            </h2> <br>
            <div class="teacher_container layout_padding2">
                <div class="row">
                    @forelse ($jurusan as $data)
                    <div class="col-md-3 mb-4">
                        <div class="card border-0 shadow-sm h-100">
                            <img src="{{ asset('storage/jurusans/' . $data->image) }}" class="card-img-top" alt="Foto jurusan">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $data->nama_jurusan }}</h5>
                            </div>
                        </div>
                    </div>
                    @empty
                        <tr>
                            <center><td colspan="9">Tidak ada jurusan yang tersedia.</td></center>
                        </tr>
                    @endforelse
                </div>
            </div>
    </section>

    <!-- footer section -->
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


    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/java.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
