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
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Informasi</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    @forelse ($berita as $item)
                        <div class="col-lg-3 col-md-6 text-center">
                            <div class="mt-5">
                                <div class="mb-2" style="display: flex; justify-content: center; align-items: center;">
                                    <div style="width:300px; height:200px;">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="Gambar Berita" class="rounded" width="200px" height="auto" style="max-height: 200px;">
                                    </div>
                                </div>
                                <h3 class="h4 mb-2"><a href="{{ route('news.edit', $item->id) }}">{{ $item->judul }}</a></h3>
                                <p class="text-muted mb-0">{{ \Illuminate\Support\Str::words($item->deskripsi, $words = 20, $end = '...') }}</p>        
                            </div>
                        </div>
                    @empty 
                        <div class="alert alert-danger col-lg-12"> Data Berita Belum Tersedia </div> 
                    @endforelse
                </div>
            </div>
            <div class="d-flex">
                <div class="mx-auto">
                    {{$berita->links("pagination::bootstrap-4")}}
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
                        <p>Lurah Donomerto : +62 8</p>
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
        href="https://instagram.com/info.mandomai?igshid=MzRlODBiNWFlZA=="
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
