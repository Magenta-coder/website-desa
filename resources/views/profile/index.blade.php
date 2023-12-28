<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="{{ asset('img/Logo.jpeg') }}">
        <title>Donomerto</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />

    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/"><img src="{{ asset('img/Logo.jpeg') }}" alt="Logo Kabupaten Kapuas" width="40px" height="auto"> Donomerto</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('news') }}">Informasi</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('profile') }}">Profile</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <h2 class="text-center mt-0">Struktur Organisasi</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    @forelse ($jabatan as $item)
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="mt-5">
                                <div class="mb-2">
                                    <div style="width:300px; height:200px; display: flex; justify-content: center; align-items: center;">
                                        <img src="{{ asset('storage/' . $item->foto) }}" alt="Gambar Profile" class="rounded" width="200px" height="auto" style="max-height: 200px;">
                                    </div>
                                </div>
                                <h1 class="h4 mb-2">{{ $item->nama }}</h1>
                                <h4 class="text-muted mb-0">{{ $item->jabatan }}</h4>        
                            </div>
                        </div>
                    @empty 
                        <div class="alert alert-danger col-lg-12"> Data Profile Belum Tersedia </div> 
                    @endforelse
                </div>
            </div>
            <div class="d-flex">
                <div class="mx-auto">
                    {{$jabatan->links("pagination::bootstrap-4")}}
                </div>
            </div>
        </section>

        <section class="page-section bg-primary" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0 text-white">VISI, MISI dan MOTTO</h2>
                <hr class="divider divider-light" />
                <div class="row justify-content-center gx-4 gx-lg-5">
                    <div class="col-lg-7 col-md-10 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi bi-award-fill fs-1 text-white"></i></div>
                            <h3 class="h4 mb-2 text-white">VISI</h3>
                            <p class="text-white mb-0">Terwujudnya Padukuhan Donomerto yang aman, tertib, mandiri dan sejahtera.</p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-10 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi bi-award fs-1 text-white"></i></div>
                            <h3 class="h4 mb-2 text-white">MISI</h3>
                            <ol class="text-white mb-0 pb-5" style="text-align: left;">
                                <li>Meningkatkan sumberdaya aparatur kelurahan sebagai ujung tombak pelayanan.</li>
                                <li>Memberikan pelayanan yang berkualitas, adil, transparan dan akuntabel sesuai standar pelayanan.</li>
                                <li>Meningkatkan peran serta masyarakat dalam pembangunan.</li>
                                <li>Memperkuat kemitraan dengan pihak swasta.</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-10 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi bi-bank2 fs-1 text-white"></i></div>
                            <h3 class="h4 mb-2 text-white">MOTTO</h3>
                            <p class="text-white mb-0"><em>"Melayani dengan maksimal dan sepenuh hati"</em></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer
        class="text-center text-lg-start text-white"
        style="background-color: #3e4551"
        >
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <div class="row">
            <!--Grid column for Mandomai (left)-->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">DONOMERTO</h5>
                <p>
                    Donomerto adalah salah satu nama padukuhan di Kalurahan Donomulyo, 
                    Wilayah Kapanewon Nanggulan, Kabupaten Kulon Progo, 
                    Provinsi Daerah Istimewa Yogyakarta, Indonesia.
                </p>
            </div>
    
            <!--Grid column for Contact Person (right)-->
            <div class="col-lg-8 col-md-6 mb-4 mb-md-0 text-end">
                <h5 class="text-uppercase">Contact Person</h5>
                <br>
                <ul class="list-unstyled mb-0">
                    <li>
                        <p>Dukuh Donomerto : +62 857-4344-9651</p>
                    </li>
                    <li>
                        <p>Email : x@gmail.com</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Section: Links -->

    <hr class="mb-4" />

    <!-- Section: Social media -->
    <section class="mb-4 text-center">

        <!-- Instagram -->
        <a
        class="btn btn-outline-light btn-floating m-1"
        href="https://www.instagram.com/new_orpendo/"
        role="button"
        target="_blank"
        ><i class="bi bi-instagram"></i
        ></a>

    </section>
    <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3"style="background-color: rgba(0, 0, 0, 0.2)">© 2023 Copyright: Developer Donomerto
    </div>
    <!-- Copyright -->
  </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
