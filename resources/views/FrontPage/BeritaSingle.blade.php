<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>Haro Education</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('FP_Assets/images/favicon.ico')}}">
    <link href="css/app.css" rel="stylesheet" />
    <link href="{{asset('FP_Assets/css/style.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{asset('FP_Assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="{{asset('FP_Assets/plugins/themify/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('FP_Assets/plugins/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('FP_Assets/plugins/magnific-popup/dist/magnific-popup.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('FP_Assets/plugins/slick-carousel/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('FP_Assets/plugins/slick-carousel/slick/slick-theme.css')}}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('FP_Assets/css/style.css')}}">

    <script src="{{asset('FP_Assets/js/app.js')}}" defer></script>
</head>

<body>
    <header class="navigation">
        <nav class="navbar navbar-expand-lg  py-2" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="{{asset('FP_Assets/images/LogoHaroE.png')}}" alt="Logo" width="270" height="100">
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
                            <h1 class="text-capitalize mb-4 text-lg">HARO News</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section blog-wrap bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            @foreach ($detailBerita as $brt)
                            <div class="col-lg-12 mb-5">
                                <div class="single-blog-item">
                                    <img src="{{ url('public/DBImages/Berita/'.$brt->gbr) }}" alt="" class="img-fluid rounded">
                                    <div class="blog-item-content bg-white p-5">
                                        <div class="blog-item-meta bg-gray py-1 px-2">
                                            <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i>
                                                {{$brt->created_at}}
                                            </span>
                                        </div>

                                        <h2 class="mt-3 mb-4">
                                            <a href="blog-single.html">
                                                {{$brt->judul}}
                                            </a>
                                        </h2>
                                        <p>
                                            {{$brt->deskripsi}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar-wrap">

                            <div class="sidebar-widget latest-post card border-0 p-4 mb-3">
                                <h5>Latest Posts</h5>
                                @foreach ($ltpst as $ltpst)
                                <div class="media border-bottom py-3">
                                    <a href="#"><img class="mr-4" src="{{ url('public/DBImages/Berita/'.$ltpst->gbr) }}" style="height: 70px; width: 100px;" alt=""></a>
                                    <div class="media-body">
                                        <h6 class="my-2"><a href="#">{{$ltpst->judul}}</a></h6>
                                        <span class="text-sm text-muted">{{$ltpst->created_at}}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- footer Start -->
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

    </div>

    <!--
    Essential Scripts
    =====================================-->


    <!-- Main jQuery -->
    <script src="{{asset('FP_Assets/plugins/slick-carousel/slick/slick.min.js')}}"></script>

    <!-- Main jQuery -->
    <script src="{{asset('FP_Assets/plugins/jquery/jquery.js')}}"></script>
    <script src="{{asset('FP_Assets/js/contact.js')}}"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="{{asset('FP_Assets/plugins/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('FP_Assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--  Magnific Popup-->
    <script src="{{asset('FP_Assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
    <!-- Slick Slider -->
    
    <!-- Counterup -->
    <script src="{{asset('FP_Assets/plugins/counterup/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('FP_Assets/plugins/counterup/jquery.counterup.min.js')}}"></script>
    
    <!-- Google Map -->
    <script src="{{asset('FP_Assets/plugins/google-map/map.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap">
    </script>
    <script src="{{asset('FP_Assets/js/script.js')}}"></script>

</body>

</html>
