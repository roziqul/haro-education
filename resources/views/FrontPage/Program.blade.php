<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>Haro Education</title>
    <link rel="shortcut icon" type="image/x-icon" href="FP_Assets/images/favicon.ico">
    <link href="css/app.css" rel="stylesheet" />
    <link href="FP_Assets/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="FP_Assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="FP_Assets/plugins/themify/css/themify-icons.css">
    <link rel="stylesheet" href="FP_Assets/plugins/fontawesome/css/all.css">
    <link rel="stylesheet" href="FP_Assets/plugins/magnific-popup/dist/magnific-popup.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="FP_Assets/plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="FP_Assets/plugins/slick-carousel/slick/slick-theme.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="FP_Assets/css/style.css">

    <script src="FP_Assets/js/app.js" defer></script>
</head>

<body>
    <header class="navigation">
        <nav class="navbar navbar-expand-lg  py-2" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="FP_Assets/images/LogoHaroE.png" alt="Logo" width="270" height="100">
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <div class="collapse navbar-collapse text-center" id="navbarsExample09">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/dashboard">Dashboard<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="/program">Program</a></li>
                        <li class="nav-item"><a class="nav-link" href="/testimoni">Testimoni</a></li>
                        <li class="nav-item"><a class="nav-link" href="/tentangHARO">Tentang HARO</a></li>
                        <li class="nav-item"><a class="nav-link" href="/berita">Berita</a></li>
                    </ul>

                    <form class="form-lg-inline my-2 my-md-0 ml-lg-4 text-center">
                        <a href="contact.html" class="btn btn-solid-border btn-round-full">Daftar</a>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <div class="main-wrapper ">
        <section class="page-title bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block text-center">
                            <h1 class="text-capitalize mb-4 text-lg">Promo Kami</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section Pricing Start -->

        <section class="section pricing bg-gray position-relative">
            <div class="hero-img bg-overlay h70"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <div class="section-title">
                            <h2 class="mt-3 mb-4 content-title text-white">Cukup sekali bayar. Tidak ada tambahan biaya dibelakang</h2>
                        </div>
                    </div>
                </div>
                
                <div class="row justify-content-center mt-2">
                    @foreach ($allPrg as $prg)
                    <div class="col-md-4">
                        <div class="card text-center mb-4 rounded">
                            <div class="card-body py-5">
                                <div class="pricing-header mb-5">
                                    <h5 class="font-weight-normal mb-3">{{$prg['nama']}}</h5>
                                    <h1>Rp.{{$prg['harga']}}k</h1>
                                    <p class="text-muted">1 Siswa - 1 Pengajar</p>
                                </div>
                                <strong>Termasuk:</strong>
                                <ul class="list-unstyled lh-45 mt-3 text-black">
                                    <li>90 menit sesi online</li>
                                    <li>Setiap mata pelajaran</li>
                                </ul>
                                <a href="#" class="btn btn-small btn-main mt-3 btn-round-full">Hubungi Kami</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                


            </div>

            <section class="mt-70 position-relative">
            <div class="container">
                <div class="cta-block-2 bg-gray p-5 rounded border-1">
                    <div class="row justify-content-center align-items-center ">
                        <div class="col-lg-7">
                            <h2 class="mt-2 mb-4 mb-lg-0">Percayakan masa depan anda kepada kami</h2>
                        </div>
                        <div class="col-lg-4">
                            <a href="contact.html" class="btn btn-main btn-round-full float-lg-right ">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        </section>

    </div>

    <footer class="footer section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget">
                        <h2 class="text-capitalize mb-4">Hubungi Kami</h2>
                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="#">support@haroeducation.com</a></li>
                            <li><a href="#">+62 8203 1409 111</a></li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/themefisher">
                                    <i class="ti-instagram mr-2"></i>
                                    haro_1902
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
<script src="FP_Assets/plugins/slick-carousel/slick/slick.min.js"></script>

<!-- Main jQuery -->
<script src="FP_Assets/plugins/jquery/jquery.js"></script>
<script src="FP_Assets/js/contact.js"></script>
<!-- Bootstrap 4.3.1 -->
<script src="FP_Assets/plugins/bootstrap/js/popper.js"></script>
<script src="FP_Assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!--  Magnific Popup-->
<script src="FP_Assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<!-- Slick Slider -->

<!-- Counterup -->
<script src="FP_Assets/plugins/counterup/jquery.waypoints.min.js"></script>
<script src="FP_Assets/plugins/counterup/jquery.counterup.min.js"></script>

<!-- Google Map -->
<script src="FP_Assets/plugins/google-map/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap">
</script>
<script src="FP_Assets/js/script.js"></script>
