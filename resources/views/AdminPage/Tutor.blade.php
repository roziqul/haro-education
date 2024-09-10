<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="{{asset('Adm_Assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('Adm_Assets/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="{{asset('Adm_Assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="{{asset('Adm_Assets/logo/12.png')}}" alt="" style="width: 4rem;">
                </div>
                <div class="sidebar-brand-text text-left mx-2">HARO Education</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="/Adm/User">
                    <i class="fas fa-fw fa-user-alt"></i>
                    <span>Auth</span>
                </a>
            </li>
            <hr class="sidebar-divider">

            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="/Adm/Customer">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Customer</span>
                </a>
            </li>
            <hr class="sidebar-divider">

            <hr class="sidebar-divider my-0">
                <li class="nav-item">
                    <a class="nav-link" href="/Adm/Program">
                        <i class="fas fa-fw fa-book"></i>
                        <span>Program</span>
                    </a>
                </li>
            <hr class="sidebar-divider">
            <hr class="sidebar-divider my-0">
                <li class="nav-item">
                    <a class="nav-link" href="/Adm/Mentor">
                        <i class="fas fa-fw fa-user-graduate"></i>
                        <span>Mentor</span>
                    </a>
                </li>
            <hr class="sidebar-divider">
            <hr class="sidebar-divider my-0">
                <li class="nav-item">
                    <a class="nav-link" href="/Adm/Testimoni">
                        <i class="fas fa-fw fa-award"></i>
                        <span>Testimoni</span>
                    </a>
                </li>
            <hr class="sidebar-divider">
            <hr class="sidebar-divider my-0">
                <li class="nav-item">
                    <a class="nav-link" href="/Adm/Berita">
                        <i class="fas fa-fw fa-bars"></i>
                        <span>Berita</span>
                    </a>
                </li>
            <hr class="sidebar-divider">
            <hr class="sidebar-divider my-0">
                <li class="nav-item active">
                    <a class="nav-link" href="/Adm/Tutor">
                        <i class="fas fa-fw fa-layer-group"></i>
                        <span>Tutor</span>
                    </a>
                </li>
            <hr class="sidebar-divider">
            <hr class="sidebar-divider my-0">
                <li class="nav-item">
                    <a class="nav-link" href="/Adm/Broadcast">
                        <i class="fas fa-fw fa-satellite"></i>
                        <span>Broadcast</span>
                    </a>
                </li>
            <hr class="sidebar-divider">
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    Douglas McGee
                                </span>
                                <img class="img-profile rounded-circle" src="{{asset('Adm_Assets/img/undraw_profile.svg')}}">
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Mata Pelajaran</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="/Adm/Tutor/Create" class="btn btn-primary mt-2">
                                <span class="text">Tambah Mapel</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Mapel</th>
                                            <th style="text-align: center;">Menu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allTtr as $ttr)
                                        <tr>
                                            <td>{{$ttr->id}}</td>
                                            <td>{{$ttr->name}}</td>
                                            <td style="text-align: center;">
                                                <a href="/Adm/Tutor/{{$ttr['id']}}/Edit" class="btn btn-warning">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-exclamation-triangle"></i>
                                                    </span>
                                                    <span class="text">Edit</span>
                                                </a>
                                                <a href="/Adm/Tutor/{{$ttr['id']}}/Delete" class="btn btn-danger">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-trash"></i>
                                                    </span>
                                                    <span class="text">Hapus</span>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('Adm_Assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('Adm_Assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('Adm_Assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('Adm_Assets/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('Adm_Assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('Adm_Assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('Adm_Assets/js/demo/datatables-demo.js')}}"></script>

</body>

</html>