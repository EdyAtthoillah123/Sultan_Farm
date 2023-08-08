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
    <nav style="background-color: #C2DCE0;"class="navbar navbar-expand-lg navbar-light fixed-top " id="mainNav">
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
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#beranda">Detail Domba</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="masthead">
        <div class="container px-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="content">
                        <img src="{{ asset('landing/img/detaildomba.png') }}" alt="Image 1" width="500px"
                            style="border-radius: 10px;">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content">
                        <div class="detail">
                            <h2>Jenis Domba</h2>
                            <p>Jenis Kelamin: Neutral</p>
                            <p>Jenis Kelamin: Neutral</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
