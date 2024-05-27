<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Noa – Bootstrap 5 Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/brand/favicon.ico') }}" />

    <!-- TITLE -->
    <title>Noa – Bootstrap 5 Admin & Dashboard Template</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" />
    <style>
        .form-container {
            display: flex;
            flex-wrap: wrap;
        }
        .form-column {
            flex: 1;
            padding: 10px;
        }
    </style>
</head>

<body class="ltr login-img">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ asset('assets/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div>
            <!-- CONTAINER OPEN -->
            <div class="col col-login mx-auto text-center">
                <a href="index.html">
                    <img src="{{ asset('assets/images/brand/logo.png') }}" class="header-brand-img" alt="">
                </a>
            </div>
            <div class="container-login100">
                <div class="wrap-login100 p-0">
                    <div class="card-body">
                        <form action="/insert-pengunjung" method="POST">
                            @csrf
                            <span class="login100-form-title">
                                Registration
                            </span>
                            <div class="form-container">
                                <div class="form-column">
                                    <div class="wrap-input100 validate-input" data-bs-validate="Nama pengunjung is required">
                                        <input class="input100" type="text" name="nama_pengunjung" placeholder="Nama" id="nama_pengunjung" required>
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="mdi mdi-account" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <div class="wrap-input100 validate-input" data-bs-validate="Nomor HP is required">
                                        <input class="input100" type="text" name="nomor_hp_pengunjung" placeholder="Nomor HP" id="nomor_hp_pengunjung" required>
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="mdi mdi-phone" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <div class="wrap-input100 validate-input" data-bs-validate="Tanggal lahir is required">
                                        <input class="input100" type="date" name="tanggal_lahir_pengunjung" placeholder="Tanggal Lahir" id="tanggal_lahir_pengunjung" required>
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="mdi mdi-calendar" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <div class="wrap-input100 validate-input" data-bs-validate="Jenis kelamin is required">
                                        <select class="input100" name="jenis_kelamin" id="jenis_kelamin" required>
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="mdi mdi-gender-male-female" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <div class="wrap-input100 validate-input" data-bs-validate="Email is required">
                                        <input class="input100" type="email" name="email_pengunjung" placeholder="Email" id="email_pengunjung" required>
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="zmdi zmdi-email" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-column">
                                    <div class="wrap-input100 validate-input" data-bs-validate="Password is required">
                                        <input class="input100" type="password" name="password" placeholder="Password" required>
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="zmdi zmdi-lock" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <div class="wrap-input100 validate-input" data-bs-validate="Provinsi is required">
                                        <input class="input100" type="text" name="provinsi" placeholder="Provinsi" id="provinsi" required>
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="mdi mdi-map-marker" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <div class="wrap-input100 validate-input" data-bs-validate="Kabupaten is required">
                                        <input class="input100" type="text" name="kabupaten" placeholder="Kabupaten" id="kabupaten" required>
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="mdi mdi-map-marker" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <div class="wrap-input100 validate-input" data-bs-validate="Kecamatan is required">
                                        <input class="input100" type="text" name="kecamatan" placeholder="Kecamatan" id="kecamatan" required>
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="mdi mdi-map-marker" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <div class="wrap-input100 validate-input" data-bs-validate="Alamat is required">
                                        <input class="input100" type="text" name="alamat" placeholder="Alamat" id="alamat" required>
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="mdi mdi-home" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            {{-- <label class="custom-control custom-checkbox mt-4">
                                <input type="checkbox" class="custom-control-input" required>
                                <span class="custom-control-label">Agree the <a href="terms.html">terms and policy</a></span>
                            </label> --}}
                            <div class="container-login100-form-btn">
                                <button type="submit" class="login100-form-btn btn-primary">
                                    Register
                                </button>
                            </div>
                            <div class="text-center pt-3">
                                <p class="text-dark mb-0">Already have account?<a href="login.blade.php" class="text-primary ms-1">Sign In</a></p>
                            </div>
                        </form> 
                    </div>
                    {{-- <div class="card-footer">
                        <div class="d-flex justify-content-center my-3">
                            <a href="javascript:void(0)" class="social-login  text-center me-4">
                                <i class="fa fa-google"></i>
                            </a>
                            <a href="javascript:void(0)" class="social-login  text-center me-4">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="javascript:void(0)" class="social-login  text-center">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </div>
                    </div> --}}
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
    <!-- END PAGE -->

    <!-- JQUERY JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>

    <!-- STICKY JS -->
    <script src="{{ asset('assets/js/sticky.js') }}"></script>

    <!-- COLOR THEME JS -->
    <script src="{{ asset('assets/js/themeColors.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
