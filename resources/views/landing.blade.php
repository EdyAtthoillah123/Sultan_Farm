<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Landing Page | Sultan Farm</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('landing/assets/favicon.ico') }}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('landing/css/styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav style="background-color: #D6E7E9;" class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm"
        id="mainNav">
        <div class="container px-5">
            {{-- <a class="navbar-brand fw-bold" href="#page-top">Sultan Farm</a> --}}
            <a class="navbar-brand fw-bold" href="#page-top">
                <img src="{{ asset('landing/img/logo.png') }}" alt="Logo Sultan Farm"> Sultan Farm
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#tentang">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#domba">Domba</a></li>
                </ul>
                <a href="{{ route('login') }}" style="background-color: #228896; color: white;"
                    class="btn rounded-pill px-3 mb-2 mb-lg-0">
                    <span class="d-flex align-items-center">
                        <i class="bi-lock-fill me-2"></i>
                        <span class="small">Masuk</span>
                    </span>
                </a>
            </div>
        </div>
    </nav>
    <!-- Mashead header-->
    <section id="beranda">
        <header class="masthead">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <p style="font-size: 40px;">CV SULTAN FARM JEMBER</p>
                            <p class="lead fw-normal text-muted mb-5" style="font-size: 17px;">TEMUKAN DOMBA SESUAI
                                KEINGINAN ANDA DI SINI.
                                Dapatkan berbagai macam pilihan domba sesuai dengan kriteria domba yang Anda cari</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Masthead device mockup feature-->
                        <div class="masthead-device-mockup">
                            <img width="400px" height="400px" src="{{ asset('landing/domba.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </section>

    <section id="tentang">
        <div class="container px-5 mt-2"> <!-- Ganti mt-2 menjadi kelas margin atas yang sesuai -->
            <div class="col-lg-12">
                <!-- Tulisan "Tentang Kami" -->
                <p class="text-center tentang-kami">Tentang Kami</p>
                <!-- Gambar-gambar -->
                <div class="gambar-container">
                    <img src="{{ asset('landing/img/image1.png') }}" alt="Gambar 1">
                    <img src="{{ asset('landing/img/image2.png') }}" alt="Gambar 2">
                    <img src="{{ asset('landing/img/image3.png') }}" alt="Gambar 3">
                    <img src="{{ asset('landing/img/image4.png') }}" alt="Gambar 4">
                </div>
                <!-- Isi "Tentang Kami" -->
                <p class="tentang-kami-isi">
                    CV Sultan Farm Jember merupakan PUSAT PETERNAKAN DOMBA yang menyediakan domba dengan berbagai
                    macam jenis domba yang diinginkan. Tak Hanya itu kami juga menjual harga domba tersebut dengan
                    harga yang sangat miring. Jadi pastikan anda mendapatkan domba yang anda inginkan disini.
                </p>
                <p class="tentang-kami-isi" style="color: black; padding-top: 5px; font-weight: 800;">
                    Sosial Media :
                </p>
                <div class="sosial-media">
                    <img src="{{ asset('landing/img/icons8-instagram-logo.png') }}" alt="Gambar 1">
                    <img src="{{ asset('landing/img/icons8-facebook (1).png') }}" alt="Gambar 2">
                    <img src="{{ asset('landing/img/icons8-youtube.png') }}" alt="Gambar 3">
                    <img src="{{ asset('landing/img/icons8-tiktok.png') }}" alt="Gambar 4">
                </div>
            </div>
        </div>
    </section>
    <!-- Basic features section-->
    <section id="domba">
        <div class="container px-5 mt-2">
            <!-- Ganti mt-2 menjadi kelas margin atas yang sesuai -->
            <div class="col-lg-12">
                <!-- Tulisan "Tentang Kami" -->
                <p class="text-center tentang-kami">Jenis Domba</p>
                <div class="product-cards-container">
                    <div class="product-card">
                        <img src="{{ asset('landing/img/image1.png') }}" alt="Nama Produk 1">
                        <p>Jenis Domba</p>
                        <p>Tersedia: 5</p>
                        <button>Lihat Detail</button>
                    </div>
                    <div class="product-card">
                        <img src="{{ asset('landing/img/image2.png') }}" alt="Nama Produk 2">
                        <p>Jenis Domba</p>
                        <p>Tersedia: 3</p>
                        <button>Lihat Detail</button>
                    </div>
                    <div class="product-card">
                        <img src="{{ asset('landing/img/image3.png') }}" alt="Nama Produk 3">
                        <p>Jenis Domba</p>
                        <p>Tersedia: 0</p>
                        <button>Lihat Detail</button>
                    </div>
                    <div class="product-card">
                        <img src="{{ asset('landing/img/image1.png') }}" alt="Nama Produk 1">
                        <p>Jenis Domba</p>
                        <p>Tersedia: 5</p>
                        <button>Lihat Detail</button>
                    </div>
                    <div class="product-card">
                        <img src="{{ asset('landing/img/image2.png') }}" alt="Nama Produk 2">
                        <p>Jenis Domba</p>
                        <p>Tersedia: 3</p>
                        <button>Lihat Detail</button>
                    </div>
                    <div class="product-card">
                        <img src="{{ asset('landing/img/image3.png') }}" alt="Nama Produk 3">
                        <p>Jenis Domba</p>
                        <p>Tersedia: 0</p>
                        <button>Lihat Detail</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- App badge section-->
    <section class="bg-black" id="download">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <p style="color: white; font-size: 20px;">Tentang Sultan farm</p>
                        <p style="color: white; margin-right: 100px;">CV Sultan Farm Jember merupakan PUSAT PETERNAKAN
                            DOMBA
                            TERBAIK dan
                            tempat untuk MEMBELI DOMBA TERPERCAYA</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <p style="color: white;">KONTAK KAMI</p>
                        <p style="color: white;"> <i class="bi-telephone me-2"></i>0852-9047-4758</p>
                        <p style="color: white;"> <i class="bi-envelope me-2"></i> support@sultanfarm.id</p>
                        <!-- Tambahkan 5 ikon di bawah support sultan farm -->
                        <p style="color: white;"> <i class="bi bi-whatsapp me-2"></i> <i
                                class="bi bi-instagram me-2"></i> <i class="bi bi-facebook me-2"></i> <i
                                class="bi bi-youtube me-2"></i><i class="bi bi-music-note me-2"></i></p>
                    </div>
                </div>
            </div>
    </section>
    <!-- Footer-->
    <footer class="bg-black text-center py-4">
        <div class="container px-4">
            <div class="text-white-50 small">
                <div class="mb-2">&copy; 2023 All Rights Reversed By Sultan Farm </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('landing/js/scripts.js') }}"></script>

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
