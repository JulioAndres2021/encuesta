<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Encuesta de Candidatos Provinciales">
    <meta name="author" content="Julio Andres 2024">

    <title>Encuesta</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('Front/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('Front/css/bootstrap-icons.css') }}">

    <link rel="stylesheet" href="{{ asset('Front/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('Front/css/owl.theme.default.min.css') }}">

    <link href="{{ asset('Front/css/templatemo-pod-talk.css') }}" rel="stylesheet">

</head>

<body>

    <!--TABLA-->
    <div class="card-body">
        <div id="contenido_tabla"></div>
    </div>
    <!--FIN TABLA-->
    <main>
        <section class="hero-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="text-center mb-2 pb-1">
                            <h4 class="text-white">¿Quién te gustaría como candidato a diputados nacionales 2024?</h4>

                            <p class="text-white">Sé parte de nuestra opinión.</p>
                            <p id="ipdelcliente"></p>
                            <a href="{{ route('votos.index') }}" class="btn custom-btn smoothscroll mt-3">Quiero Votar</a>
                        </div>

                        <!--IMAGENES DE CANDIDATOS-->
                        <div class="owl-carousel owl-theme">
                            <div class="owl-carousel-info-wrap item ">
                                 <img  src="{{ asset('Front/images/profile/Sergio-Zilliotto.png') }}"
                                    class="owl-carousel-image img-fluid" alt="">
                                    <div class="owl-carousel-info ">
                                        Votos: <span class="badge bg-success"> {{ $candidato1 }}</span>
                                    <div class="custom-block-top d-flex mb-1 mt-2">
                                        Sergio Ziliotto
                                    </div>
                                    <span class="badge">Partido Justicialista</span>
                                </div>

                            </div>

                            <div class="owl-carousel-info-wrap item">
                                <img src="{{ asset('Front/images/profile/Claudio-Acosta.png') }}"
                                    class="owl-carousel-image img-fluid" alt="">
                                <div class="owl-carousel-info">
                                    Votos: <span class="badge bg-success"> {{ $candidato2 }}</span>
                                    <div class="custom-block-top d-flex mb-1 mt-2">
                                        Claudio Acosta
                                    </div>
                                    <span class="badge">Partido S/N</span>
                                </div>
                            </div>

                            <div class="owl-carousel-info-wrap item">
                                <img src="{{ asset('Front/images/profile/Hector-Fazzini.png') }}"
                                    class="owl-carousel-image img-fluid" alt="">
                                <div class="owl-carousel-info">
                                    Votos: <span class="badge bg-success"> {{ $candidato3 }}</span>
                                    <div class="custom-block-top d-flex mb-1 mt-2">
                                        Hector Fazzini
                                    </div>
                                    <span class="badge">Partido S/N</span>
                                </div>
                            </div>

                            <div class="owl-carousel-info-wrap item">
                                <img src="{{ asset('Front/images/profile/Juan-Carlos-Tierno.png') }}"
                                    class="owl-carousel-image img-fluid" alt="">
                                <div class="owl-carousel-info">
                                    Votos: <span class="badge bg-success"> {{ $candidato4 }}</span>
                                    <div class="custom-block-top d-flex mb-1 mt-2">
                                        Juan C. Tierno
                                    </div>
                                    <span class="badge">Partido S/N</span>
                                </div>
                            </div>

                            <div class="owl-carousel-info-wrap item">
                                <img src="{{ asset('Front/images/profile/Luciano-Gonzalez-Cabiati.png') }}"
                                    class="owl-carousel-image img-fluid" alt="">
                                <div class="owl-carousel-info">
                                    Votos: <span class="badge bg-success"> {{ $candidato5 }}</span>
                                    <div class="custom-block-top d-flex mb-1 mt-2">
                                        Luciano G. Cabiti
                                    </div>
                                    <span class="badge">Partido S/N</span>
                                </div>
                            </div>

                            <div class="owl-carousel-info-wrap item">
                                <img src="{{ asset('Front/images/profile/Martin-Berhongaray.png') }}"
                                    class="owl-carousel-image img-fluid" alt="">
                                <div class="owl-carousel-info">
                                    Votos: <span class="badge bg-success"> {{ $candidato6 }}</span>
                                    <div class="custom-block-top d-flex mb-1 mt-2">
                                        Martín Berhongaray
                                    </div>
                                    <span class="badge">Partido Radical</span>
                                </div>
                            </div>

                            <div class="owl-carousel-info-wrap item">
                                <img src="{{ asset('Front/images/profile/Martin-Berhongaray.png') }}"
                                    class="owl-carousel-image img-fluid" alt="">
                                <div class="owl-carousel-info">
                                    Votos: <span class="badge bg-success"> {{ $candidato7 }}</span>
                                    <div class="custom-block-top d-flex mb-1 mt-2">
                                        Sin Nombre
                                    </div>
                                    <span class="badge">Partido S/N</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--PORTADA DE CANDIDATOS-->
        <section class="latest-podcast-section section-padding pb-0" id="section_2">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Senadores 2024</h4>
                        </div>
                    </div>

                    <div class="text-center mb-2 pb-1">
                        <a href="#section_2" class="btn custom-btn smoothscroll mt-3">Quiero Votar</a>
                    </div>

                    <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block d-flex">
                            <div class="">
                                <div class="custom-block-icon-wrap">
                                    <div class="section-overlay"></div>
                                    <a href="#" class="custom-block-image-wrap">
                                        <img src="{{ asset('Front/images/podcast/sinrostro.png') }}"
                                            class="custom-block-image img-fluid" alt="">

                                        {{-- <a href="#" class="custom-block-icon">
                                            <i class="bi-play-fill"></i>
                                        </a> --}}
                                    </a>
                                </div>

                                {{-- <div class="mt-2">
                                    <a href="#" class="btn custom-btn">
                                        Subscribe
                                    </a>
                                </div> --}}
                            </div>

                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1">
                                    <small>Votos <span class="badge">15</span></small>
                                </div>

                                <h5 class="mb-2">
                                    <a href="detail-page.html">
                                        Partido PJ
                                    </a>
                                </h5>

                                {{-- <div class="profile-block d-flex">
                                    <img src="images/profile/woman-posing-black-dress-medium-shot.jpg"
                                        class="profile-block-image img-fluid" alt="">

                                    <p>
                                        Elsa
                                        <img src="images/verified.png" class="verified-image img-fluid" alt="">
                                        <strong>Influencer</strong>
                                    </p>
                                </div> --}}

                                <p class="mb-0">Acá va información acerca del partido.</p>

                                {{-- <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                    <a href="#" class="bi-headphones me-1">
                                        <span>120k</span>
                                    </a>

                                    <a href="#" class="bi-heart me-1">
                                        <span>42.5k</span>
                                    </a>

                                    <a href="#" class="bi-chat me-1">
                                        <span>11k</span>
                                    </a>

                                    <a href="#" class="bi-download">
                                        <span>50k</span>
                                    </a>
                                </div> --}}
                            </div>

                            {{-- <div class="d-flex flex-column ms-auto">
                                <a href="#" class="badge ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge ms-auto">
                                    <i class="bi-bookmark"></i>
                                </a>
                            </div> --}}
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="custom-block d-flex">
                            <div class="">
                                <div class="custom-block-icon-wrap">
                                    <div class="section-overlay"></div>
                                    <a href="detail-page.html" class="custom-block-image-wrap">
                                        <img src="{{ asset('Front/images/podcast/sinrostro.png') }}"
                                            class="custom-block-image img-fluid" alt="">

                                        {{-- <a href="#" class="custom-block-icon">
                                            <i class="bi-play-fill"></i>
                                        </a> --}}
                                    </a>
                                </div>
                            </div>

                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1">
                                    <small>Votos <span class="badge">45</span></small>
                                </div>

                                <h5 class="mb-2">
                                    <a href="detail-page.html">
                                        Partido PRO
                                    </a>
                                </h5>

                                {{-- <div class="profile-block d-flex">
                                    <img src="images/profile/handsome-asian-man-listening-music-through-headphones.jpg"
                                        class="profile-block-image img-fluid" alt="">

                                    <p>William
                                        <strong>Vlogger</strong>
                                    </p>
                                </div> --}}

                                <p class="mb-0">Acá va información acerca del partido.</p>

                                {{-- <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                    <a href="#" class="bi-headphones me-1">
                                        <span>140k</span>
                                    </a>

                                    <a href="#" class="bi-heart me-1">
                                        <span>22.4k</span>
                                    </a>

                                    <a href="#" class="bi-chat me-1">
                                        <span>16k</span>
                                    </a>

                                    <a href="#" class="bi-download">
                                        <span>62k</span>
                                    </a>
                                </div> --}}
                            </div>

                            {{-- <div class="d-flex flex-column ms-auto">
                                <a href="#" class="badge ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge ms-auto">
                                    <i class="bi-bookmark"></i>
                                </a>
                            </div> --}}
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mb-4 mb-lg-0 mt-3">
                        <div class="custom-block d-flex">
                            <div class="">
                                <div class="custom-block-icon-wrap">
                                    <div class="section-overlay"></div>
                                    <a href="detail-page.html" class="custom-block-image-wrap">
                                        <img src="{{ asset('Front/images/podcast/sinrostro.png') }}"
                                            class="custom-block-image img-fluid" alt="">

                                        {{-- <a href="#" class="custom-block-icon">
                                            <i class="bi-play-fill"></i>
                                        </a> --}}
                                    </a>
                                </div>

                                {{-- <div class="mt-2">
                                    <a href="#" class="btn custom-btn">
                                        Subscribe
                                    </a>
                                </div> --}}
                            </div>

                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1">
                                    <small>Votos <span class="badge">15</span></small>
                                </div>

                                <h5 class="mb-2">
                                    <a href="detail-page.html">
                                        Partido PJ
                                    </a>
                                </h5>

                                {{-- <div class="profile-block d-flex">
                                    <img src="images/profile/woman-posing-black-dress-medium-shot.jpg"
                                        class="profile-block-image img-fluid" alt="">

                                    <p>
                                        Elsa
                                        <img src="images/verified.png" class="verified-image img-fluid" alt="">
                                        <strong>Influencer</strong>
                                    </p>
                                </div> --}}

                                <p class="mb-0">Acá va información acerca del partido.</p>

                                {{-- <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                    <a href="#" class="bi-headphones me-1">
                                        <span>120k</span>
                                    </a>

                                    <a href="#" class="bi-heart me-1">
                                        <span>42.5k</span>
                                    </a>

                                    <a href="#" class="bi-chat me-1">
                                        <span>11k</span>
                                    </a>

                                    <a href="#" class="bi-download">
                                        <span>50k</span>
                                    </a>
                                </div> --}}
                            </div>

                            {{-- <div class="d-flex flex-column ms-auto">
                                <a href="#" class="badge ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge ms-auto">
                                    <i class="bi-bookmark"></i>
                                </a>
                            </div> --}}
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mb-4 mb-lg-0 mt-3">
                        <div class="custom-block d-flex">
                            <div class="">
                                <div class="custom-block-icon-wrap">
                                    <div class="section-overlay"></div>
                                    <a href="detail-page.html" class="custom-block-image-wrap">
                                        <img src="{{ asset('Front/images/podcast/sinrostro.png') }}"
                                            class="custom-block-image img-fluid" alt="">

                                        {{-- <a href="#" class="custom-block-icon">
                                            <i class="bi-play-fill"></i>
                                        </a> --}}
                                    </a>
                                </div>

                                {{-- <div class="mt-2">
                                    <a href="#" class="btn custom-btn">
                                        Subscribe
                                    </a>
                                </div> --}}
                            </div>

                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1">
                                    <small>Votos <span class="badge">15</span></small>
                                </div>

                                <h5 class="mb-2">
                                    <a href="detail-page.html">
                                        Partido PJ
                                    </a>
                                </h5>

                                {{-- <div class="profile-block d-flex">
                                    <img src="images/profile/woman-posing-black-dress-medium-shot.jpg"
                                        class="profile-block-image img-fluid" alt="">

                                    <p>
                                        Elsa
                                        <img src="images/verified.png" class="verified-image img-fluid" alt="">
                                        <strong>Influencer</strong>
                                    </p>
                                </div> --}}

                                <p class="mb-0">Acá va información acerca del partido.</p>

                                {{-- <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                    <a href="#" class="bi-headphones me-1">
                                        <span>120k</span>
                                    </a>

                                    <a href="#" class="bi-heart me-1">
                                        <span>42.5k</span>
                                    </a>

                                    <a href="#" class="bi-chat me-1">
                                        <span>11k</span>
                                    </a>

                                    <a href="#" class="bi-download">
                                        <span>50k</span>
                                    </a>
                                </div> --}}
                            </div>

                            {{-- <div class="d-flex flex-column ms-auto">
                                <a href="#" class="badge ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge ms-auto">
                                    <i class="bi-bookmark"></i>
                                </a>
                            </div> --}}
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--CANDIDATOS-->
        <section class="latest-podcast-section section-padding pb-0" id="section_2">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Diputados 2024</h4>
                        </div>
                    </div>

                    <div class="text-center mb-2 pb-1">
                        <a href="#section_2" class="btn custom-btn smoothscroll mt-3">Quiero Votar</a>
                    </div>

                    <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block d-flex">
                            <div class="">
                                <div class="custom-block-icon-wrap">
                                    <div class="section-overlay"></div>
                                    <a href="detail-page.html" class="custom-block-image-wrap">
                                        <img src="{{ asset('Front/images/podcast/sinrostro.png') }}"
                                            class="custom-block-image img-fluid" alt="">
                                        {{-- <a href="#" class="custom-block-icon">
                                            <i class="bi-play-fill"></i>
                                        </a> --}}
                                    </a>
                                </div>

                                {{-- <div class="mt-2">
                                    <a href="#" class="btn custom-btn">
                                        Subscribe
                                    </a>
                                </div> --}}
                            </div>

                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1">
                                    <small>Votos <span class="badge">15</span></small>
                                </div>

                                <h5 class="mb-2">
                                    <a href="detail-page.html">
                                        Partido PJ
                                    </a>
                                </h5>

                                {{-- <div class="profile-block d-flex">
                                    <img src="images/profile/woman-posing-black-dress-medium-shot.jpg"
                                        class="profile-block-image img-fluid" alt="">

                                    <p>
                                        Elsa
                                        <img src="images/verified.png" class="verified-image img-fluid" alt="">
                                        <strong>Influencer</strong>
                                    </p>
                                </div> --}}

                                <p class="mb-0">Acá va información acerca del partido.</p>

                                {{-- <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                    <a href="#" class="bi-headphones me-1">
                                        <span>120k</span>
                                    </a>

                                    <a href="#" class="bi-heart me-1">
                                        <span>42.5k</span>
                                    </a>

                                    <a href="#" class="bi-chat me-1">
                                        <span>11k</span>
                                    </a>

                                    <a href="#" class="bi-download">
                                        <span>50k</span>
                                    </a>
                                </div> --}}
                            </div>

                            {{-- <div class="d-flex flex-column ms-auto">
                                <a href="#" class="badge ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge ms-auto">
                                    <i class="bi-bookmark"></i>
                                </a>
                            </div> --}}
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="custom-block d-flex">
                            <div class="">
                                <div class="custom-block-icon-wrap">
                                    <div class="section-overlay"></div>
                                    <a href="detail-page.html" class="custom-block-image-wrap">
                                        <img src="{{ asset('Front/images/podcast/sinrostro.png') }}"
                                            class="custom-block-image img-fluid" alt="">

                                        {{-- <a href="#" class="custom-block-icon">
                                            <i class="bi-play-fill"></i>
                                        </a> --}}
                                    </a>
                                </div>
                            </div>

                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1">
                                    <small>Votos <span class="badge">45</span></small>
                                </div>

                                <h5 class="mb-2">
                                    <a href="detail-page.html">
                                        Partido PRO
                                    </a>
                                </h5>

                                {{-- <div class="profile-block d-flex">
                                    <img src="images/profile/handsome-asian-man-listening-music-through-headphones.jpg"
                                        class="profile-block-image img-fluid" alt="">

                                    <p>William
                                        <strong>Vlogger</strong>
                                    </p>
                                </div> --}}

                                <p class="mb-0">Acá va información acerca del partido.</p>

                                {{-- <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                    <a href="#" class="bi-headphones me-1">
                                        <span>140k</span>
                                    </a>

                                    <a href="#" class="bi-heart me-1">
                                        <span>22.4k</span>
                                    </a>

                                    <a href="#" class="bi-chat me-1">
                                        <span>16k</span>
                                    </a>

                                    <a href="#" class="bi-download">
                                        <span>62k</span>
                                    </a>
                                </div> --}}
                            </div>

                            {{-- <div class="d-flex flex-column ms-auto">
                                <a href="#" class="badge ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge ms-auto">
                                    <i class="bi-bookmark"></i>
                                </a>
                            </div> --}}
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mb-4 mb-lg-0 mt-3">
                        <div class="custom-block d-flex">
                            <div class="">
                                <div class="custom-block-icon-wrap">
                                    <div class="section-overlay"></div>
                                    <a href="detail-page.html" class="custom-block-image-wrap">
                                        <img src="{{ asset('Front/images/podcast/sinrostro.png') }}"
                                            class="custom-block-image img-fluid" alt="">

                                        {{-- <a href="#" class="custom-block-icon">
                                            <i class="bi-play-fill"></i>
                                        </a> --}}
                                    </a>
                                </div>

                                {{-- <div class="mt-2">
                                    <a href="#" class="btn custom-btn">
                                        Subscribe
                                    </a>
                                </div> --}}
                            </div>

                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1">
                                    <small>Votos <span class="badge">15</span></small>
                                </div>

                                <h5 class="mb-2">
                                    <a href="detail-page.html">
                                        Partido PJ
                                    </a>
                                </h5>

                                {{-- <div class="profile-block d-flex">
                                    <img src="images/profile/woman-posing-black-dress-medium-shot.jpg"
                                        class="profile-block-image img-fluid" alt="">

                                    <p>
                                        Elsa
                                        <img src="images/verified.png" class="verified-image img-fluid" alt="">
                                        <strong>Influencer</strong>
                                    </p>
                                </div> --}}

                                <p class="mb-0">Acá va información acerca del partido.</p>

                                {{-- <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                    <a href="#" class="bi-headphones me-1">
                                        <span>120k</span>
                                    </a>

                                    <a href="#" class="bi-heart me-1">
                                        <span>42.5k</span>
                                    </a>

                                    <a href="#" class="bi-chat me-1">
                                        <span>11k</span>
                                    </a>

                                    <a href="#" class="bi-download">
                                        <span>50k</span>
                                    </a>
                                </div> --}}
                            </div>

                            {{-- <div class="d-flex flex-column ms-auto">
                                <a href="#" class="badge ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge ms-auto">
                                    <i class="bi-bookmark"></i>
                                </a>
                            </div> --}}
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mb-4 mb-lg-0 mt-3">
                        <div class="custom-block d-flex">
                            <div class="">
                                <div class="custom-block-icon-wrap">
                                    <div class="section-overlay"></div>
                                    <a href="detail-page.html" class="custom-block-image-wrap">
                                        <img src="{{ asset('Front/images/podcast/sinrostro.png') }}"
                                            class="custom-block-image img-fluid" alt="">

                                        {{-- <a href="#" class="custom-block-icon">
                                            <i class="bi-play-fill"></i>
                                        </a> --}}
                                    </a>
                                </div>

                                {{-- <div class="mt-2">
                                    <a href="#" class="btn custom-btn">
                                        Subscribe
                                    </a>
                                </div> --}}
                            </div>

                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1">
                                    <small>Votos <span class="badge">15</span></small>
                                </div>

                                <h5 class="mb-2">
                                    <a href="detail-page.html">
                                        Partido PJ
                                    </a>
                                </h5>

                                {{-- <div class="profile-block d-flex">
                                    <img src="images/profile/woman-posing-black-dress-medium-shot.jpg"
                                        class="profile-block-image img-fluid" alt="">

                                    <p>
                                        Elsa
                                        <img src="images/verified.png" class="verified-image img-fluid" alt="">
                                        <strong>Influencer</strong>
                                    </p>
                                </div> --}}

                                <p class="mb-0">Acá va información acerca del partido.</p>

                                {{-- <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                    <a href="#" class="bi-headphones me-1">
                                        <span>120k</span>
                                    </a>

                                    <a href="#" class="bi-heart me-1">
                                        <span>42.5k</span>
                                    </a>

                                    <a href="#" class="bi-chat me-1">
                                        <span>11k</span>
                                    </a>

                                    <a href="#" class="bi-download">
                                        <span>50k</span>
                                    </a>
                                </div> --}}
                            </div>

                            {{-- <div class="d-flex flex-column ms-auto">
                                <a href="#" class="badge ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge ms-auto">
                                    <i class="bi-bookmark"></i>
                                </a>
                            </div> --}}
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--ENCUESTAS-->
        <section class="topics-section section-padding pb-0" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Encuestas</h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-overlay">
                            <p>¿Usted cree que la situación cambiaría dentro de 3 meses?</p>

                            <div class="custom-block-info custom-block-overlay-info">
                                <h5 class="mb-1">
                                    <a href="listing-page.html">
                                        SI
                                    </a>
                                    <a href="listing-page.html">
                                        NO
                                    </a>
                                </h5>

                                <p class="badge mb-0">75 % SI</p>
                                <p class="badge mb-0">25 % NO</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-overlay">
                            <p>¿Si su sueldo aumentara más con respecto a la inflación, votaría el mismo?</p>

                            <div class="custom-block-info custom-block-overlay-info">
                                <h5 class="mb-1">
                                    <a href="listing-page.html">
                                        SI
                                    </a>
                                    <a href="listing-page.html">
                                        NO
                                    </a>
                                </h5>

                                <p class="badge mb-0">30 % SI</p>
                                <p class="badge mb-0">70 % NO</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-overlay">
                            <p>¿Qué le parece Milei como Presidente, superó las espectativas?</p>

                            <div class="custom-block-info custom-block-overlay-info">
                                <h5 class="mb-1">
                                    <a href="listing-page.html">
                                        SI
                                    </a>
                                    <a href="listing-page.html">
                                        NO
                                    </a>
                                </h5>

                                <p class="badge mb-0">15 % SI</p>
                                <p class="badge mb-0">85 % NO</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-overlay">
                            <p>¿Votaría a Julio Andres como Senador de La Pampa?</p>

                            <div class="custom-block-info custom-block-overlay-info">
                                <h5 class="mb-1">
                                    <a href="listing-page.html">
                                        SI
                                    </a>
                                    <a href="listing-page.html">
                                        NO
                                    </a>
                                </h5>

                                <p class="badge mb-0">75 % SI</p>
                                <p class="badge mb-0">25 % NO</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--PREGUNTAS-->
        {{-- <section class="trending-podcast-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Preguntas</h4>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-full">
                            <div class="custom-block-image-wrap">
                                <a href="detail-page.html">
                                    <img src="images/podcast/27376480_7326766.jpg" class="custom-block-image img-fluid"
                                        alt="">
                                </a>
                            </div>

                            <div class="custom-block-info">
                                <h5 class="mb-2">
                                    <a href="detail-page.html">
                                        Vintage Show
                                    </a>
                                </h5>

                                <div class="profile-block d-flex">
                                    <img src="images/profile/woman-posing-black-dress-medium-shot.jpg"
                                        class="profile-block-image img-fluid" alt="">

                                    <p>Elsa
                                        <strong>Influencer</strong>
                                    </p>
                                </div>

                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>

                                <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                    <a href="#" class="bi-headphones me-1">
                                        <span>100k</span>
                                    </a>

                                    <a href="#" class="bi-heart me-1">
                                        <span>2.5k</span>
                                    </a>

                                    <a href="#" class="bi-chat me-1">
                                        <span>924k</span>
                                    </a>
                                </div>
                            </div>

                            <div class="social-share d-flex flex-column ms-auto">
                                <a href="#" class="badge ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge ms-auto">
                                    <i class="bi-bookmark"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-full">
                            <div class="custom-block-image-wrap">
                                <a href="detail-page.html">
                                    <img src="images/podcast/27670664_7369753.jpg" class="custom-block-image img-fluid"
                                        alt="">
                                </a>
                            </div>

                            <div class="custom-block-info">
                                <h5 class="mb-2">
                                    <a href="detail-page.html">
                                        Vintage Show
                                    </a>
                                </h5>

                                <div class="profile-block d-flex">
                                    <img src="images/profile/cute-smiling-woman-outdoor-portrait.jpg"
                                        class="profile-block-image img-fluid" alt="">

                                    <p>
                                        Taylor
                                        <img src="images/verified.png" class="verified-image img-fluid" alt="">
                                        <strong>Creator</strong>
                                    </p>
                                </div>

                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>

                                <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                    <a href="#" class="bi-headphones me-1">
                                        <span>100k</span>
                                    </a>

                                    <a href="#" class="bi-heart me-1">
                                        <span>2.5k</span>
                                    </a>

                                    <a href="#" class="bi-chat me-1">
                                        <span>924k</span>
                                    </a>
                                </div>
                            </div>

                            <div class="social-share d-flex flex-column ms-auto">
                                <a href="#" class="badge ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge ms-auto">
                                    <i class="bi-bookmark"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="custom-block custom-block-full">
                            <div class="custom-block-image-wrap">
                                <a href="detail-page.html">
                                    <img src="images/podcast/12577967_02.jpg" class="custom-block-image img-fluid"
                                        alt="">
                                </a>
                            </div>

                            <div class="custom-block-info">
                                <h5 class="mb-2">
                                    <a href="detail-page.html">
                                        Daily Talk
                                    </a>
                                </h5>

                                <div class="profile-block d-flex">
                                    <img src="images/profile/handsome-asian-man-listening-music-through-headphones.jpg"
                                        class="profile-block-image img-fluid" alt="">

                                    <p>
                                        William
                                        <img src="images/verified.png" class="verified-image img-fluid" alt="">
                                        <strong>Vlogger</strong>
                                    </p>
                                </div>

                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>

                                <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                    <a href="#" class="bi-headphones me-1">
                                        <span>100k</span>
                                    </a>

                                    <a href="#" class="bi-heart me-1">
                                        <span>2.5k</span>
                                    </a>

                                    <a href="#" class="bi-chat me-1">
                                        <span>924k</span>
                                    </a>
                                </div>
                            </div>

                            <div class="social-share d-flex flex-column ms-auto">
                                <a href="#" class="badge ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge ms-auto">
                                    <i class="bi-bookmark"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section> --}}
    </main>

    <!--FOOTER-->
    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <div class="subscribe-form-wrap">
                        <h6>Subscribite. Cada Semana.</h6>

                        <form class="custom-form subscribe-form" action="#" method="get" role="form">
                            <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*"
                                class="form-control" placeholder="Dirección de Email" required="">

                            <div class="col-lg-12 col-12">
                                <button type="submit" class="form-control" id="submit" disabled>Subscripción</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-md-0 mb-lg-0">
                    <h6 class="site-footer-title mb-3">Contácto</h6>

                    <p class="mb-2"><strong class="d-inline me-2">Phone:</strong> 0000-000000</p>

                    <p>
                        <strong class="d-inline me-2">Email:</strong>
                        <a href="#">@gmail.com</a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    {{-- <h6 class="site-footer-title mb-3">Download Mobile</h6> --}}

                    {{-- <div class="site-footer-thumb mb-4 pb-2">
                        <div class="d-flex flex-wrap">
                            <a href="#">
                                <img src="images/app-store.png" class="me-3 mb-2 mb-lg-0 img-fluid" alt="">
                            </a>

                            <a href="#">
                                <img src="images/play-store.png" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div> --}}

                    <h6 class="site-footer-title mb-3">Social</h6>

                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-whatsapp"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="container pt-5">
            <div class="row align-items-center">

                <div class="col-lg-2 col-md-3 col-12">
                    <a class="navbar-brand" href="index.html">
                        {{-- <img src="{{asset('/Front/images/PJDigital-La-Pampa.jpg')}}" class="logo-image img-fluid" alt="templatemo pod talk"> --}}
                    </a>
                </div>

                <div class="col-lg-7 col-md-9 col-12">
                    <ul class="site-footer-links">
                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Inicio</a>
                        </li>

                        {{-- <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Browse episodes</a>
                        </li> --}}

                        {{-- <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Help Center</a>
                        </li> --}}

                        <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Contáctanos</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-12">
                    <p class="copyright-text mb-0">Copyright © 2024 Julio Andres
                        <br><br>
                        Diseño: <a rel="nofollow" href="#" target="_parent">J.A</a>
                    </p> Distribución: <a rel="nofollow" href="#" target="_blank">Texto de la página</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <!--Bootstrap 5-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <!--Jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- <script src="{{asset('Front/js/jquery.min.js')}}"></script> --}}
    {{-- <script src="{{asset('Front/js/bootstrap.bundle.min.js')}}"></script> --}}
    <script src="{{ asset('Front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('Front/js/custom.js') }}"></script>
    <!--Sweet alert 2-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <!-- Obtenemos la IP -->
    <script>
        var ipdelCliente = document.getElementById('ipdelcliente')
        $.getJSON('https://api.ipify.org?format=json', function(data) {
            ipdelCliente.innerText = data.ip
            console.log(data.ip);
        });
    </script>
    <script type="text/javascript">
        $(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).ready(function() {
                //cuando se carga el documento
                console.log('Cargando candidato.index');

            });





        });
    </script>
</body>

</html>
