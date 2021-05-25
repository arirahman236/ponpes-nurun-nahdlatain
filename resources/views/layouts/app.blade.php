<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo.png" type="image/x-icon"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Sistem Informasi Pondok Pesantren Nurun Nahdlatain') }}</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
        <div class="container d-flex">
        <div class="contact-info mr-auto">
            <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
            <i class="icofont-phone"></i> +1 5589 55488 55
        </div>
        <div class="social-links">
            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
            <a href="#" class="skype"><i class="icofont-skype"></i></a>
            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
        </div>
        </div>
    </div>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h3 class="logo mr-auto"><a href="index">Pondok Pesantren Nurun Nahdlatain</a></h3>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="index">Beranda</a></li>
                <li class="drop-down"><a href="">Berita</a>
                    <ul>
                    @forelse ($berita as $beritas)
                    <li><a href="{{ url('beritaa/'.$beritas->nama_kategori) }}">{{$beritas->nama_kategori}}</a></li>
                        @empty
                        Tidak ada data...
                    @endforelse
                    </ul>
                </li>
                <li class="drop-down"><a href="">Gallery</a>
                    <ul>
                    @forelse ($gallery as $gallerys)
                    <li><a href="{{$gallerys->nama_kategori}}">{{$gallerys->nama_kategori}}</a></li>
                        @empty
                        Tidak ada data...
                    @endforelse
                    </ul>
                </li>
                <li class="drop-down"><a href="">About</a>
                    <ul>
                    @forelse ($about as $abouts)
                    <li><a href="{{$abouts->nama_kategori}}">{{$abouts->nama_kategori}}</a></li>
                        @empty
                        Tidak ada data...
                    @endforelse
                    </ul>
                </li>
                {{-- <li class="drop-down"><a href="">Yayasan</a>
                    <ul>
                        <li><a href="#foto">Islamiyah Syafi'iyah</a></li>
                        <li><a href="#video">Yayasan 2</a></li>
                    </ul>
                </li> --}}
                <li>
                    <form type="get" action="/search/" class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                        <div class="input-group">
                            <input class="form-control" type="search" id="tbName" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                            <div class="input-group-append">
                                <button class="btn btn-light" type="button" id="search"><a class="fas fa-search">Search</a></button>
                            </div>
                        </div>
                    </form>
                </li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
    </header><!-- End Header -->

    @section('content')
    @show

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
        <h3>Pondok Pesantren Nurun Nahdlatain Raha</h3>
        <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
        <div class="social-links">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
        <div class="copyright">
            &copy; Copyright <strong><span>2021 Pondok Pesantren Nurun Nahdlatain</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <!-- Vendor JS Files -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="/vendor/php-email-form/validate.js"></script>
    <script src="/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/vendor/venobox/venobox.min.js"></script>

    <!-- Template Main JS File -->
    <script src="/js/main.js"></script>
</body>
</html>
