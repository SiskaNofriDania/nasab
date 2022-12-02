<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Landing Page</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="fontawesome/css/all.css">

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top py-0" id="mainNav">
            <div class="container">
                <img class="img-fluid" src="assets/img/nasab/logonasab.png" width="100" height="100" />
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto" >
                        <li class="nav-item "><a class="nav-link  rounded" href="#beranda">Beranda</a></li>
                        <li class="nav-item "><a class="nav-link  rounded" href="#info1">Info</a></li>
                        <li class="nav-item "><a class="nav-link  rounded" href="#about">Tentang</a></li>
                        <li class="nav-item "><a class="nav-link  rounded" href="#contact">Kontak</a></li>
                        <li class="nav-item "><a class="nav-link  rounded" href="#contact">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="page-section beranda" id="beranda">
             <header class=" bg-success text-white text-center">
                <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($banner as $row)
                            <div class="carousel-item {{ ($loop->first) ? 'active': '' }}" >
                                <img src="/upload/banner/{{$row->banner}}"  style="object-fit:cover; height:calc(768px - 120px); width:100%" alt="..."/>
                            </div>
                        @endforeach
                    </div>
                    <button type="button" class="carousel-control-prev" data-bs-target="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                    </button>
                    <button type="button" class="carousel-control-next" data-bs-target="#carouselExampleIndicators" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                    </button>
                </div>
            </header>
        </section>


     <section class="page-section info" id="info1">
         <div class="container">
            <!-- Info Section Heading-->
            <h2 class="page-section-heading text-left text-uppercase text-secondary mb-4">INFO</h2>
            @if($info)
            @foreach ($info as $key )
                <button type="button" class="info-modal btn btn-success fs-2" data-bs-toggle="modal" data-bs-target="#myModal" data-info-judul="{{$key->judul}}" data-info-isi="{{$key->isi}}">{{$key->judul}}</button>
            @endforeach
            @endif
        </div>
        <div class="info-modal modal fade" id="myModal" tabindex="-1" aria-labelledby="nasab6" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Info Modal - Title-->
                                    <h2 id="info-title"></h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                     <!-- Info Modal - Text-->
                                    <div id="info-desc"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>

        <!-- About Section-->
        <section class="page-section bg-success text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-left text-uppercase text-white">TENTANG</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    {{--  <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>  --}}
                </div>
                <!-- About Section Content-->
                <div class="row">
                    {!! $tentang->isi !!}

                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="footer text-left" id="contact">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <h1 class="text-uppercase mb-4">Kontak</h1>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        {{--  <div class=" ms-auto"><p class="lead" >+6283191277599</p></div>
                        <div class=" ms-auto"><p class="lead" >daniasiskanofri@gmail.com</p></div>  --}}
                        @if($kontak)
                        @foreach ($kontak as $val )
                        <ul>
                             <li
                                {{--  <span> <i class="fa-solid fa-phone" mb-4></i>{{ $val['judul'] }}</span>  --}}
                                <span> {{ $val['judul'] }}</span>
                                <a>{{ $val['isi'] }}</a>
                             </li>
                        </ul>
                        @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Web Nasab 2023</small></div>
        </div>

        <script src="{{ asset('js/jquery-3.6.1.js') }}"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/landingpage.js') }}"></script>
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" >

        <!-- Script -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" ></script>

    <script>
        $(document).ready(function(){
            $('.info-modal').on('click', function(){
                var judul = $(this).attr('data-info-judul'),
                    isi = $(this).attr('data-info-isi');
                $('#info-title').html(judul);
                $('#info-desc').html(isi);
            });
        });
    </script>
    </body>
</html>
