<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>SEKOLAH</title>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

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
                        <img src="images/logo.png" alt="">
                        <span>Sekolah</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            @if (Route::has('login'))
                                @auth
                                    <li class="nav-item">
                                        <a href="{{ url('/home') }}" class="nav-link">Home</a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a href="{{ route('login') }}" class="nav-link">Log in</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                                        </li>
                                    @endif
                                @endauth
                            @endif
                        </ul>
                        <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                            <button class="btn my-2 my-sm-0 nav_search-btn" type="submit"></button>
                        </form>
                    </div>
                </nav>
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
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in
                        some form, by injected humour, or randomised
                    </p>
                    <div class="hero_btn-continer">
                        <a href="" class="call_to-btn btn_white-border">
                            <span>
                                Contact
                            </span>
                            <img src="images/right-arrow.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="hero_img-container">
                    <div>
                        <img src="images/hero.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end header section -->

    <!-- footer section -->

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <!-- google map js -->
    <!-- end google map js -->
</body>

</html>
