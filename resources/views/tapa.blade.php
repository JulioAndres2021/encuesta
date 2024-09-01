<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Encuesta Online">
    <meta name="author" content="J.A 2024">
    <link rel="shortcut icon" href="{{ asset('Front/images/manos.png') }}" type="image/x-icon">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PSBXQ37N');</script>
    <!-- End Google Tag Manager -->

    <!-- Icono de una casa de Material Icons -->
    <title> Encuestas LA PAMPA</title>


    <!-- Enlaza Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Enlaza Material Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- CSS FILES
    <link rel="preconnect" href="https://fonts.googleapis.com">-->

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset('Front/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('Front/css/bootstrap-icons.css')}}">

    <link rel="stylesheet" href="{{asset('Front/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('Front/css/owl.theme.default.min.css')}}">

    <link href="{{asset('Front/css/templatemo-pod-talk.css')}}" rel="stylesheet">
     <!--chart para graficos-->
     <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>


   <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LFMB3P3V9K"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-LFMB3P3V9K');
    </script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PSBXQ37N"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


<main>
      <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:700);


            /* .texto-borde
            {
                font-family: 'Open Sans', sans-serif;
                font-size: 5vw;
                -webkit-text-stroke: 2px rgb(11, 52, 139);
                color: transparent;
            } */
            img
            {
                width: 30%;
            }
            .aviso-cookies {
            display: none;
            background: #fff;
            padding: 20px;
            width: calc(100% - 40px);
            max-width: 300px;
            line-height: 150%;
            border-radius: 10px;
            position: fixed;
            bottom: 20px;
            left: 20px;
            z-index: 100;
            padding-top: 60px;
            box-shadow: 0px 2px 20px 10px rgba(222,222,222,.25);
            text-align: center;
        }

        .aviso-cookies.activo {
            display: block;
        }

        .aviso-cookies .galleta {
            max-width: 100px;
            position: absolute;
            top: -50px;
            left: calc(50% - 50px);
        }

        .aviso-cookies .titulo,
        .aviso-cookies .parrafo {
            margin-bottom: 15px;
        }

        .aviso-cookies .boton {
            width: 100%;
            background: #595959;
            border: none;
            color: #fff;
            font-family: 'Roboto', sans-serif;
            text-align: center;
            padding: 15px 20px;
            font-weight: 700;
            cursor: pointer;
            transition: .3s ease all;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .aviso-cookies .boton:hover {
            background: #000;
        }

        .aviso-cookies .enlace {
            color: #4DBFFF;
            text-decoration: none;
            font-size: 14px;
        }

        .aviso-cookies .enlace:hover {
            text-decoration: underline;
        }

        .fondo-aviso-cookies {
            display: none;
            background: rgba(0,0,0,.20);
            position: fixed;
            z-index: 99;
            width: 100vw;
            height: 100vh;
            top: 0;
            left: 0;
        }

        .fondo-aviso-cookies.activo {
            display: block;
        }
      </style>
      {{-- <img src="//source.unsplash.com/500x500?1" alt="">
      <img src="//source.unsplash.com/500x500?2" alt="">
      <img src="//source.unsplash.com/500x500?3" alt=""> --}}
</main>


<main>
        {{-- <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand me-lg-5 me-0" href="#">
                    <img src="{{asset('/Front/images/Consultoraelcentro.png')}}" class="logo-image img-fluid" alt="Consultora del Centro" >
                </a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link active" ></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" ></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Temas
                            </a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="listing-page.html">Fútbol</a></li>

                                <li><a class="dropdown-item" href="detail-page.html">Tema de Semana</a></li>

                                <li><a class="dropdown-item" href="detail-page.html">General Pico</a></li>

                                <li><a class="dropdown-item" href="detail-page.html">Santa Rosa</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>

                    <div class="ms-4">
                        <a href="#section_3" class="btn custom-btn custom-border-btn smoothscroll">Encuesta</a>
                    </div>
                </div>
            </div>
        </nav> --}}

        <div class="aviso-cookies" id="aviso-cookies">
            <img class="galleta" src="{{ asset('Front/images/cookie.svg') }}" alt="Galleta">
            <h3 class="titulo">Cookies</h3>
            <p class="parrafo">Utilizamos cookies propias y de terceros para mejorar nuestros servicios.</p>
            <button class="boton" id="btn-aceptar-cookies">Estoy de acuerdo</button>
            <a class="enlace" href="{{ route('cookies') }}">Aviso de Cookies</a>
        </div>
        <div class="fondo-aviso-cookies" id="fondo-aviso-cookies"></div>
        <section class="hero-section" id="paginadeinicio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="text-center mb-2 ">
                            <span class=""><h3>Encuestas Online</h3> <span ><h2 class=" text-white">La Pampa</h2></span></span>

                            <p class="text-danger"><strong>de forma anónima, sé parte de nuestra opinión.</strong></p>
                            {{-- <h4 class="text-white">LA PAMPA</h4> --}}
                            <span id="ipdelcliente"></span>
                            {{-- <a href="#section_2" class="btn custom-btn smoothscroll mt-3">Quiero Votar</a> --}}
                        </div>
                        <section class="topics-section section-padding pb-0" id="section_3">
                            <div class="container">
                                <div class="row">

                                    <div class="col-lg-12 col-12">
                                        <div class="section-title-wrap mb-5">
                                            <h4 class="section-title">Varios Temas</h4>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block custom-block-overlay">
                                            <a href="{{ route('debate.index') }}" class="custom-block-image-wrap" id="btn_debate">
                                                <img src="{{asset('Front/images/debate/debate.png')}}"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>

                                            <div class="custom-block-info custom-block-overlay-info">
                                                <h5 class="mb-1">

                                                        Debate

                                                </h5>

                                                <p class="badge mb-0">Temas para debatir</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block custom-block-overlay">
                                            <a href="#" class="custom-block-image-wrap" id="btn_futbol">
                                                <img src="{{asset('Front/images/futbol/logofutbol.png')}}"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>

                                            <div class="custom-block-info custom-block-overlay-info">
                                                <h5 class="mb-1">

                                                        Fútbol

                                                </h5>

                                                <p class="badge mb-0">Preguntas de Fútbol</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block custom-block-overlay">
                                            <a href="#" class="custom-block-image-wrap" id="btn_semanal">
                                                <img src="{{asset('Front/images/temasemana/temasemana.png')}}"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>

                                            <div class="custom-block-info custom-block-overlay-info">
                                                <h5 class="mb-1">

                                                        Tema Semanal

                                                </h5>

                                                <p class="badge mb-0">Tema más importante</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block custom-block-overlay">
                                            <a href="#" class="custom-block-image-wrap" id="btn_localidades">
                                                <img src="{{asset('Front/images/localidades/localidades.png')}}"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>

                                            <div class="custom-block-info custom-block-overlay-info">
                                                <h5 class="mb-1">

                                                        Localidades

                                                </h5>

                                                <p class="badge mb-0">Preguntas de Localidades</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block custom-block-overlay">
                                            <a href="#" class="custom-block-image-wrap" id="btn_localidades">
                                                <img src="{{asset('Front/images/denuncias/denuncia.png')}}"
                                                    class="custom-block-image img-fluid" alt="">
                                            </a>

                                            <div class="custom-block-info custom-block-overlay-info">
                                                <h5 class="mb-1">

                                                        Denuncias

                                                </h5>

                                                <p class="badge mb-0">Exprese su inquietud</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>
                        <!--IMAGENES DE CANDIDATOS-->

                        <div class="owl-carousel owl-theme">
                            {{-- <div class="owl-carousel-info-wrap item">
                                <img src="{{asset('Front/images/futbol/logofutbol.png')}}"
                                    class="owl-carousel-image img-fluid" alt="">

                                <div class="owl-carousel-info">
                                    <h4 class="mb-2">
                                        Fútbol
                                        <img src="{{asset('Front/images/verified.png')}}" class="owl-carousel-verified-image img-fluid"
                                            alt="">
                                    </h4>

                                    <div class="mt-2 text-center">
                                        <a href="#" class="btn custom-btn" id="btn_futbol">
                                            Votar
                                        </a>
                                    </div>

                                </div>

                            </div> --}}

                            {{-- <div class="owl-carousel-info-wrap item">
                                <img src="{{asset('Front/images/temasemana/temasemana.png')}}"
                                    class="owl-carousel-image img-fluid" alt="">

                                <div class="owl-carousel-info">
                                    <h4 class="mb-2">
                                        Tema Semanal
                                        <img src="{{asset('Front/images/verified.png')}}" class="owl-carousel-verified-image img-fluid"
                                            alt="">
                                    </h4>

                                    <div class="mt-2 text-center">
                                        <a href="#" class="btn custom-btn" id="btn_temasemanal">
                                            Votar
                                        </a>
                                    </div>

                                </div>

                            </div> --}}

                             {{-- <div class="owl-carousel-info-wrap item">
                                <img src="{{asset('Front/images/gralpico/gralpico.png')}}"
                                    class="owl-carousel-image img-fluid" alt="">

                                <div class="owl-carousel-info">
                                    <h4 class="mb-2">
                                       General Pico
                                        <img src="{{asset('Front/images/verified.png')}}" class="owl-carousel-verified-image img-fluid"
                                            alt="">
                                    </h4>

                                    <div class="mt-2 text-center">
                                        <a href="#" class="btn custom-btn" id="btn_generalpico">
                                            Votar
                                        </a>
                                    </div>

                                </div>

                            </div> --}}

                             {{-- <div class="owl-carousel-info-wrap item">
                                <img src="{{asset('Front/images/santarosa/santarosa.png')}}"
                                    class="owl-carousel-image img-fluid" alt="">

                                <div class="owl-carousel-info">
                                    <h4 class="mb-2">
                                        Santa Rosa
                                        <img src="{{asset('Front/images/verified.png')}}" class="owl-carousel-verified-image img-fluid"
                                            alt="">
                                    </h4>

                                    <div class="mt-2 text-center">
                                        <a href="#" class="btn custom-btn">
                                            Votar
                                        </a>
                                    </div>

                                </div>

                            </div> --}}

                            {{-- <div class="owl-carousel-info-wrap item">
                                <img src="{{asset('Front/images/debate/debate.png')}}"
                                    class="owl-carousel-image img-fluid" alt="">

                                <div class="owl-carousel-info">
                                    <h4 class="mb-2">
                                        Debate
                                        <img src="{{asset('Front/images/verified.png')}}" class="owl-carousel-verified-image img-fluid"
                                            alt="">
                                    </h4>

                                    <div class="mt-2 text-center">
                                        <a href="#" class="btn custom-btn">
                                            Votar
                                        </a>
                                    </div>

                                </div>

                            </div> --}}



                            {{-- <div class="owl-carousel-info-wrap item">
                                <img src="{{asset('Front/images/profile/Juan-Carlos-Tierno.png')}}" class="owl-carousel-image img-fluid" alt="">

                                <div class="owl-carousel-info">
                                    <h4 class="mb-2">
                                        Juan C. Tierno
                                        <img src="{{asset('Front/images/verified.png')}}" class="owl-carousel-verified-image img-fluid"
                                            alt="">
                                    </h4>

                                    <span class="badge">Partido S/N</span>
                                </div>

                            </div> --}}

                            {{-- <div class="owl-carousel-info-wrap item">
                                <img src="{{asset('Front/images/profile/Luciano-Gonzalez-Cabiati.png')}}"
                                    class="owl-carousel-image img-fluid" alt="">

                                <div class="owl-carousel-info">
                                    <h4 class="mb-2">
                                        Luciano G. Cabiti
                                        <img src="{{asset('Front/images/verified.png')}}" class="owl-carousel-verified-image img-fluid"
                                            alt="">
                                    </h4>

                                    <span class="badge">Partido OBRERO</span>
                                </div>

                            </div> --}}

                            {{-- <div class="owl-carousel-info-wrap item">
                                <img src="{{asset('Front/images/profile/Martin-Berhongaray.png')}}"
                                    class="owl-carousel-image img-fluid" alt="">

                                <div class="owl-carousel-info">
                                    <h4 class="mb-2">
                                        Martín Berhongaray
                                        <img src="{{asset('Front/images/verified.png')}}" class="owl-carousel-verified-image img-fluid"
                                            alt="">
                                    </h4>

                                    <span class="badge">Partido Radical</span>
                                </div>

                            </div> --}}
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
        <!-- Columns are always 50% wide, on mobile and desktop -->
        <div class="container text-center mt-1">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="section-title-wrap mb-5">
                        <h4 class="section-title">Comparte tu opinión y participá</h4>
                    </div>
                </div>
                <!------------------------------------------------------------------------->
                <div class="container-fluid">
                    <div class="row">
                      <div class="col-xl-6 ">
                        <section class="trending-podcast-section ">
                            <div class="container">
                                <div class="row">

                                    {{-- <div class="col-lg-12 col-12">
                                        <div class="section-title-wrap mb-5">
                                            <h4 class="section-title">Preguntas</h4>
                                        </div>
                                    </div> --}}

                                    <div id="contenido_tabla_preguntas"> </div>

                                    <form id="formulario_respuesta_pregunta">
                                    <!--PREGUNTA 1 CON RESPUESTA MUY BUENA BUENA ETC...-->
                                    @foreach ($preguntas as $row)
                                        <input type="hidden" name="pregunta" id="texto_preguntauno" value="{{ $row->texto }}">
                                        <input type="hidden" name="pregunta_id" id="modal_agregar_pregunta_id" value="{{ $row->id }}">
                                    @endforeach
                                    <div class="container">
                                        <span id="preguntaladoizquierdo" class="badge bg-info text-wrap fs-3"></span>
                                    </div>

                                    <input type="hidden" name="ip" id="modal_agregar_respuesta_ip" >
                                    <input type="hidden" name="fecha" value="{{ $date }}" >
                                    <input type="hidden" name="origen" value="RESPUESTA" > <!--para la tabla respuestatodas-->
                                    <input type="hidden" name="created_at" value="{{ $date }}" >

                                    <select class="form-select form-select-lg mt-3" aria-label="Large select example" id="modal_agregar_respuestas" name="texto">
                                        <option value="0" selected>Seleccione...</option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                        {{--<option value="MALA">MALA</option>
                                        <option value="MUY MALA">MUY MALA</option>
                                        <option value="NS/NC">NS/NC</option>
                                         <option value="SI">SI</option>
                                        <option value="NO">NO</option> --}}
                                    </select>
                                    <button type="button" class="btn btn-success mt-4" data-bs-dismiss="modal" id="btn_modal_responder" >Votar</button>
                                    </form>
                                      <!--PREGUNTA 1-->
                                      <section >
                                        <div id="estadisticas_preguntauna" class="mt-3 text-center shadow p-1 mb-2 bg-white">
                                            <div class="container">
                                                <div class="container text-center">
                                                    <h1 class="text-center">Gráfico</h1>
                                                     <!--CHART GRAFICOS-->
                                                    <div class="row justify-content-md-center">
                                                      <div class="col col-lg-2">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <span title="SI">
                                                                    SI
                                                                    <p>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                                                                            <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                                                                        </svg>
                                                                    </p>

                                                                </span>
                                                                 <h4 class="text-success">{{ $contarpreguntaunoSI }}</h4>
                                                            </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-auto">
                                                        <canvas class="text-center" id="Chartpreguntauno" ></canvas>
                                                      </div>
                                                      <div class="col col-lg-2">
                                                        <div class="col-sm-4">
                                                            <span title="NO">
                                                                NO
                                                                <p>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-emoji-frown" viewBox="0 0 16 16">
                                                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                                                        <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.5 3.5 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.5 4.5 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5m4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5"/>
                                                                      </svg>
                                                                </p>

                                                            </span>
                                                              <h4 class="text-warning">{{ $contarpreguntaunoNO }}</h4>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <!--FIN CHART GRAFICOS-->
                                                </div>

                                            </div>
                                        </div>
                                    </section>

                                    <!--FIN PREGUNTA 1 CON RESPUESTA MUY BUENA BUENA ETC...-->

                                    {{-- <div class="input-group mb-3">
                                        <select class="form-select" style="font-size: 13px;" aria-label="Preguntas" id="seleccionar_preguntas" name="lineas" >
                                            <option selected value="0">Ver Preguntas</option>
                                                @foreach ($preguntas as $row)
                                                    <option  value="{{ $row->id }}" data-id-respuesta="{{ $row->id }}" data-id-texto="{{ $row->texto }}">{{ $row->texto }}</option>
                                                @endforeach
                                        </select>
                                        <button class="btn btn-outline-primary m-2" style="font-size: 13px;" type="button" id="btn_agregar_respuestas" data-bs-toggle="modal" data-bs-target="#Respuesta_Modal" >Agregar Respuesta</button>
                                    </div> --}}

                                    <div class="card-body">
                                        <div class="mb-5 p-2" id="cuerpo-tabla_preguntas"></div>
                                    </div>



                                    <!--PREGUNTA 2-->
                                    <section>
                                        <div id="estadisticas_preguntados">
                                            <div class="container-fluid mb-2">
                                                <p class="d-grid col-3 mx-auto mt-2">
                                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                    Ver Estadísticas
                                                    </button>
                                                </p>
                                                <div class="collapse" id="collapseExample">
                                                    <div class="card card-body p-1">
                                                        <div class="collapse" id="collapseExample">
                                                            <div class="card card-body p-2">
                                                                <div class="container text-center">
                                                                    <div class="row justify-content-md-center">
                                                                        <div class="col col-lg-2">
                                                                        <span><h1 title="Buena/Muy Buena"><i class="bi bi-hand-thumbs-up"></i></h1> </span> <h4 class="text-success">{{ $sumamuybuenaybuenarespuestaspregunta2 }}</h4>
                                                                        </div>
                                                                        <div class="col-md-auto">
                                                                            <span ><h1 title="No Sabe/No Contesta"><i class="bi bi-emoji-frown"></i></h1> </span> <h4 class="text-success">{{ $contarvotonsncpregunta2 }}</h4>
                                                                        </div>
                                                                        <div class="col col-lg-2">
                                                                        <span><h1><i class="bi bi-hand-thumbs-down"></i></h1> </span> <h4 class="text-danger">{{ $sumamalaymymalaurespuestaspregunta2 }}</h4>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!--PREGUNTA 3-->
                                    {{-- <section>
                                        <div id="estadisticas_preguntatres">
                                            <div class="container-fluid mb-2">
                                                <p class="d-grid col-3 mx-auto mt-2">
                                                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                    Ver Estadísticas
                                                    </button>
                                                </p>
                                                <div class="collapse" id="collapseExample">
                                                    <div class="card card-body p-1">
                                                        <div class="card card-body p-2">
                                                            <div class="container text-center">
                                                                <div class="row justify-content-md-center">
                                                                    <div class="col col-lg-2">
                                                                    <span><h1><i class="bi bi-hand-thumbs-up"></i></h1> </span> <h4 class="text-success">{{ $sumamuybuenaybuenarespuestaspregunta3 }}</h4>
                                                                    </div>
                                                                    <div class="col-md-auto">
                                                                        <span ><h1 title="No Sabe/No Contesta"><i class="bi bi-emoji-frown"></i></h1> </span> <h4 class="text-success">{{ $contarvotonsncpregunta3 }}</h4>
                                                                    </div>
                                                                    <div class="col col-lg-2">
                                                                    <span><h1><i class="bi bi-hand-thumbs-down"></i></h1> </span> <h4 class="text-danger">{{ $sumamalaymymalaurespuestaspregunta3 }}</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section> --}}
                                </div>
                            </div>
                        </section>
                      </div>

                      <div class="col-xl-6 ">
                        <!--PREGUNTAS POR SI/NO-->
                        <section class="trending-podcast-section ">
                            <div class="container ">
                                <div class="row ">

                                    {{-- <div class="col-lg-12 col-12">
                                        <div class="section-title-wrap mb-5">
                                            <h4 class="section-title">Preguntas con respuesta SI/NO</h4>
                                        </div>
                                    </div> --}}

                                    <div id="contenido_tabla_preguntas_si_no"> </div>

                                    @foreach ($preguntados as $row)
                                        <input type="hidden" name="pregunta" id="texto_preguntados_si_no" value="{{ $row->texto }}">
                                        <input type="hidden" name="pregunta_id" id="modal_mostrar_pregunta_id_si_no" value="{{ $row->id }}">
                                    @endforeach

                                    <form id="formulario_respuesta_pregunta_si_no">
                                        {{-- <div class="container">
                                            <div class="card mt-2">
                                                <div class="mt-2 text-primary p-2" >
                                                    <textarea class="" name="pregunta" id="modal_respuesta_titulopregunta_si_no" cols="48" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="container">
                                            <span id="preguntaladoderecha" class="badge bg-info text-wrap fs-3"></span>
                                        </div>


                                        <div class="modal-body">
                                            <select class="form-select form-select-lg mt-3" aria-label="Large select example" id="modal_agregar_respuestas_si_no" name="texto">
                                                <option value="0" selected>Seleccione...</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                                <option value="OTRO">OTRO</option>
                                            </select>
                                            {{--<textarea name="texto" id="modal_agregar_respuestas" cols="50" rows="5" maxlength="80"></textarea>
                                             <span class="help-block">
                                                <p id="mensaje_ayuda_respuestas" class="help-block">Cuerpo del mensaje</p>
                                              </span> --}}

                                            <input type="hidden" name="texto" id="modal_agregar_texto_si_no" placeholder="texto">
                                            <input type="hidden" name="ip" id="modal_agregar_respuesta_ip_si_no" placeholder="ip">
                                            <input type="hidden" name="preguntados_id" id="modal_agregar_pregunta_id_si_no" placeholder="preguntados_id">
                                            <input type="hidden" name="fecha" value="{{ $date }}" placeholder="fecha">
                                            <input type="hidden" name="pregunta" id="modal_agregar_pregunta_si_no" placeholder="pregunta">
                                            <input type="hidden" name="origen" value="RESPUESTASINO" >
                                            <input type="hidden" name="created_at" value="{{ $date }}" >
                                        </div>
                                         <div class="text-center">
                                            <button type="button" class="btn btn-success mt-4 " data-bs-dismiss="modal" id="btn_modal_responder_si_no" >Votar</button>
                                        </div>
                                    </form>

                                    {{--<div class="input-group mb-3">
                                         <select class="form-select " style="font-size: 13px;" aria-label="Preguntas" id="seleccionar_preguntas_si_no" name="lineasdos" >
                                            <option selected value="0">Ver Preguntas</option>
                                                @foreach ($preguntados as $row)
                                                    <option  value="{{ $row->id }}" data-id-respuesta="{{ $row->id }}" data-id-texto="{{ $row->texto }}">{{ $row->texto }}</option>
                                                @endforeach
                                        </select>
                                        <button class="btn btn-outline-primary m-2" style="font-size: 13px;" type="button" id="btn_agregar_respuestas_si_no" data-bs-toggle="modal" data-bs-target="#Respuesta_si_no_Modal" >Agregar Respuesta</button>
                                    </div>--}}

                                    <!--PREGUNTA 1 SI/NO-->
                                    <section >

                                        <div id="estadisticas_preguntauna_si_no" class="text-center shadow p-1 mb-2 bg-white mt-3">
                                            <div class="container">
                                                <div class="container text-center">
                                                    <h1 class="text-center">Gráfico</h1>
                                                     <!--CHART GRAFICOS-->
                                                    <div class="row justify-content-md-center">
                                                      <div class="col col-lg-2">
                                                        <div class="col-sm-4 ">
                                                            <span title="Votos por SI">
                                                                SI
                                                                <p>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                                                                        <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2 2 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a10 10 0 0 0-.443.05 9.4 9.4 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a9 9 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.2 2.2 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.9.9 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                                                                    </svg>
                                                                </p>

                                                            </span>
                                                            <h4 class="text-success">{{ $contarvotoSIpreguntasino }}</h4>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-auto">
                                                        <canvas class="text-center" id="ChartpreguntaSiNo" ></canvas>
                                                      </div>
                                                      <div class="col col-lg-2">
                                                        <div class="col-sm-4 ">
                                                            <span title="Votos por NO">
                                                                NO
                                                                <p>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-hand-thumbs-down" viewBox="0 0 16 16">
                                                                        <path d="M8.864 15.674c-.956.24-1.843-.484-1.908-1.42-.072-1.05-.23-2.015-.428-2.59-.125-.36-.479-1.012-1.04-1.638-.557-.624-1.282-1.179-2.131-1.41C2.685 8.432 2 7.85 2 7V3c0-.845.682-1.464 1.448-1.546 1.07-.113 1.564-.415 2.068-.723l.048-.029c.272-.166.578-.349.97-.484C6.931.08 7.395 0 8 0h3.5c.937 0 1.599.478 1.934 1.064.164.287.254.607.254.913 0 .152-.023.312-.077.464.201.262.38.577.488.9.11.33.172.762.004 1.15.069.13.12.268.159.403.077.27.113.567.113.856s-.036.586-.113.856c-.035.12-.08.244-.138.363.394.571.418 1.2.234 1.733-.206.592-.682 1.1-1.2 1.272-.847.283-1.803.276-2.516.211a10 10 0 0 1-.443-.05 9.36 9.36 0 0 1-.062 4.51c-.138.508-.55.848-1.012.964zM11.5 1H8c-.51 0-.863.068-1.14.163-.281.097-.506.229-.776.393l-.04.025c-.555.338-1.198.73-2.49.868-.333.035-.554.29-.554.55V7c0 .255.226.543.62.65 1.095.3 1.977.997 2.614 1.709.635.71 1.064 1.475 1.238 1.977.243.7.407 1.768.482 2.85.025.362.36.595.667.518l.262-.065c.16-.04.258-.144.288-.255a8.34 8.34 0 0 0-.145-4.726.5.5 0 0 1 .595-.643h.003l.014.004.058.013a9 9 0 0 0 1.036.157c.663.06 1.457.054 2.11-.163.175-.059.45-.301.57-.651.107-.308.087-.67-.266-1.021L12.793 7l.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581s-.027-.414-.075-.581c-.05-.174-.111-.273-.154-.315l-.353-.354.353-.354c.047-.047.109-.176.005-.488a2.2 2.2 0 0 0-.505-.804l-.353-.354.353-.354c.006-.005.041-.05.041-.17a.9.9 0 0 0-.121-.415C12.4 1.272 12.063 1 11.5 1"/>
                                                                    </svg>
                                                                </p>

                                                                <h4 class="text-danger">{{ $contarvotoNOpreguntasino }}</h4>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <!--FIN CHART GRAFICOS-->
                                                </div>

                                                <div class="row">


                                                    {{-- <div class="col-sm-4 ">
                                                        <span title="Votos por OTRO">
                                                            Otro
                                                            <p>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chat-quote" viewBox="0 0 16 16">
                                                                    <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105"/>
                                                                    <path d="M7.066 6.76A1.665 1.665 0 0 0 4 7.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 0 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 7.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 0 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z"/>
                                                                </svg>
                                                            </p>

                                                            <h4 class="text-primary">{{ $contarvotoOTROpreguntasino }}</h4>
                                                  </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!--FIN PREGUNTA 1 CON RESPUESTA MUY BUENA BUENA ETC...-->

                                    <!--PREGUNTA 2-->

                                    <!--PREGUNTA 3-->

                                </div>
                            </div>
                        </section>
                      </div>
                    </div>
                  </div>
                <!------------------------------------------------------------------------->
            </div>
        </div>
        <div class="card-body">
            <div class="mb-5 p-2" id="cuerpo-tabla_preguntas_si_no"></div>
        </div>
    <!----------------------------------------------PREGUNTA TRES---------------------------------------------->
        <div class="col-xl-12 ">
            <section class="trending-podcast-section ">
                <div class="container ">
                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Preguntas generales</h4>
                        </div>
                    </div>
                    <div class="row ">
                        <div id="contenido_tabla_preguntatres"> </div>

                        @foreach ($preguntatres as $row)
                            <textarea class="bg-primary text-white" name="pregunta" id="texto_preguntatres" cols="5" rows="2" disabled>{{ $row->texto }}</textarea>
                            <input type="hidden" name="preguntatres_id" id="modal_mostrar_preguntatres_id" value="{{ $row->id }}">
                        @endforeach

                        <form id="formulario_respuesta_preguntatres">

                            <div class="container">
                                <span id="mostrar_preguntatres" class="badge bg-info text-wrap fs-3"></span>
                            </div>

                            <div class="modal-body">
                                <select class="form-select form-select-lg mt-3" aria-label="Large select example" id="modal_agregar_respuestatres" name="texto">
                                    <option value="0" selected>Seleccione...</option>
                                    <option value="SI">SI</option>
                                    <option value="NO">NO</option>
                                    {{-- <option value="EL PUEBLO">EL PUEBLO</option>
                                    <option value="LOS POLITICOS">LOS POLÍTICOS</option>
                                    <option value="EMPRESARIOS">EMPRESARIOS</option>
                                    <option value="OTROS">OTROS</option> --}}
                                </select>
                                <!--inputs escondidos-->
                                <input type="hidden" name="texto" id="modal_agregar_texto_preguntatres" placeholder="texto">
                                <input type="hidden" name="ip" id="modal_agregar_respuestatres_ip" placeholder="ip">
                                <input type="hidden" name="preguntatres_id" id="modal_agregar_preguntatres_id" placeholder="preguntatres_id">
                                <input type="hidden" name="fecha" value="{{ $date }}" placeholder="fecha">
                                <input type="hidden" name="pregunta" id="modal_agregar_preguntatres" placeholder="pregunta">
                                <input type="hidden" name="origen" value="RESPUESTATRES" >
                                <input type="hidden" name="created_at" value="{{ $date }}" >
                            </div>
                             <div class="text-center">
                                <button type="button" class="btn btn-success mt-4 " data-bs-dismiss="modal" id="btn_modal_respondertres" >Votar</button>
                            </div>
                        </form>

                        {{--<div class="input-group mb-3">
                             <select class="form-select " style="font-size: 13px;" aria-label="Preguntas" id="seleccionar_preguntas_si_no" name="lineasdos" >
                                <option selected value="0">Ver Preguntas</option>
                                    @foreach ($preguntados as $row)
                                        <option  value="{{ $row->id }}" data-id-respuesta="{{ $row->id }}" data-id-texto="{{ $row->texto }}">{{ $row->texto }}</option>
                                    @endforeach
                            </select>
                            <button class="btn btn-outline-primary m-2" style="font-size: 13px;" type="button" id="btn_agregar_respuestas_si_no" data-bs-toggle="modal" data-bs-target="#Respuesta_si_no_Modal" >Agregar Respuesta</button>
                        </div>--}}

                        <!--PREGUNTA GENERAL-->
                        <section >
                            <div id="estadisticas_preguntauna_si_no" class="text-center shadow p-1 mb-2 bg-white mt-3">
                                <div class="container text-center">
                                    <h1 class="text-center">Gráfico</h1>
                                     <!--CHART GRAFICOS-->
                                    <div class="row justify-content-md-center">
                                      <div class="col col-lg-2">
                                        <div class="row">
                                            <div class="col-sm-3 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                                    <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5m4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5"/>
                                                  </svg>
                                                SI
                                                <h4 class="text-success">{{ $contarvotopreguntatresSI }}</h4>
                                            </div>

                                        </div>
                                      </div>
                                      <div class="col-md-auto">
                                        <canvas class="text-center" id="ChartpreguntaGeneral" ></canvas>
                                      </div>
                                      <div class="col col-lg-2">
                                        <div class="col-sm-3 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-emoji-angry" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                                <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.5 3.5 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.5 4.5 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683m6.991-8.38a.5.5 0 1 1 .448.894l-1.009.504c.176.27.285.64.285 1.049 0 .828-.448 1.5-1 1.5s-1-.672-1-1.5c0-.247.04-.48.11-.686a.502.502 0 0 1 .166-.761zm-6.552 0a.5.5 0 0 0-.448.894l1.009.504A1.94 1.94 0 0 0 5 6.5C5 7.328 5.448 8 6 8s1-.672 1-1.5c0-.247-.04-.48-.11-.686a.502.502 0 0 0-.166-.761z"/>
                                              </svg>
                                            NO
                                            <h4 class="text-danger">{{ $contarvotopreguntatresNO }}</h4>
                                        </div>
                                      </div>
                                    </div>
                                    <!--FIN CHART GRAFICOS-->
                                </div>

                                <div class="container">

                                </div>
                            </div>
                        </section>
                        <!--FIN PREGUNTA GENERAL -->

                    </div>
                </div>
            </section>
        </div>
 <!----------------------------------------------FIN  PREGUNTA TRES---------------------------------------------->
        <!--PORTADA DE CANDIDATOS-->
        {{-- <section class="latest-podcast-section section-padding pb-0" id="section_2">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Senadores 2025</h4>
                        </div>
                    </div>

                     <div class="container">
                        <div class="card">
                            <p class="mb-0">Pocentaje: %</p>
                        </div>
                    </div>

                    <div class="text-center mb-2 pb-1">
                        <a href="{{ route('senador.index') }}" class="btn custom-btn smoothscroll mt-3">Quiero Votar</a>
                    </div>
                    @if (count($senadores) > 0)
                    @foreach ($senadores as $row)
                    <div class="col-lg-6 col-12">
                        <div class="custom-block d-flex">
                            <div class="">
                                <div class="custom-block-icon-wrap">
                                    <div class="section-overlay"></div>
                                     <a href="#link" onclick="removeEvent(event);" class="custom-block-image-wrap">
                                        <img src="{{ $row->link }}" class="custom-block-image img-fluid"
                                            alt="">

                                         <a href="#" class="custom-block-icon">
                                            <i class="bi-play-fill"></i>
                                        </a>
                                    </a>
                                </div>
                            </div>

                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1">
                                    <small class="bi-heart me-1"> Votos <span class="badge" id="calcularvotosenador">
                                        @if ($row->id == 1)
                                        {{ $contarvotosenador1 }}
                                        @endif
                                        @if ($row->id == 2)
                                        {{ $contarvotosenador2 }}
                                        @endif

                                    </span></small>
                                </div>
                                <h5 class="mb-2">
                                    <span>{{ $row->nombre }}</span>
                                </h5>
                                <p class="mb-0">{{ $row->partido }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                        <span class="text-danger"><h1>En breve estará disponible.!</h1></span>
                    @endif

                </div>
            </div>
        </section> --}}

        <!--CANDIDATOS-->
        {{-- <section class="latest-podcast-section section-padding pb-0" id="section_2">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Diputados 2025</h4>
                        </div>
                    </div>

                    <div class="text-center mb-2 pb-1">
                        <a href="{{ route('diputado.index') }}" class="btn custom-btn smoothscroll mt-3">Quiero Votar</a>
                    </div>
                    @if (count($diputados) > 0)
                    @foreach ($diputados as $row)
                    <div class="col-lg-6 col-12">
                        <div class="custom-block d-flex">
                            <div class="">
                                <div class="custom-block-icon-wrap">
                                    <div class="section-overlay"></div>
                                     <a href="#link" onclick="removeEvent(event);" class="custom-block-image-wrap">
                                        <img src="{{ $row->link }}" class="custom-block-image img-fluid"
                                            alt="">

                                        <a href="#" class="custom-block-icon">
                                            <i class="bi-play-fill"></i>
                                        </a>
                                    </a>
                                </div>
                            </div>

                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1">
                                    <small class="bi-heart me-1"> Votos <span class="badge ">
                                        @if ($row->id == 1)
                                        {{ $contarvotodiputado1 }}
                                        @endif
                                        @if ($row->id == 2)
                                        {{ $contarvotodiputado2 }}
                                        @endif

                                    </span></small>
                                </div>
                                <h5 class="mb-2">
                                    <span>{{ $row->nombre }}</span>
                                </h5>
                                <p class="mb-0">{{ $row->partido }}</p>

                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <span class="text-danger"><h1>En breve estará disponible.!</h1></span>
                    @endif



                </div>
            </div>
        </section> --}}

        <!--section en blanco Publicidad-->
        <section>
            <div class="col-lg-12 col-12 mt-5">
                <div class="section-title-wrap mb-5">
                    <h4 class="section-title">Publicidad</h4>
                </div>
                <h3 class="text-primary">Contáctese con nosotros.</h3>

            </div>
        </section>

        <!--ENCUESTAS-->
         <section class="topics-section section-padding pb-0" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Encuestas por Imágen</h4>
                        </div>
                        {{-- <h5 class="text-info">Cantidad de Votos: {{ $encuestaporimagenes }}</h5> --}}
                    </div>

                    <!--GRID PARA MOSTRAR LAS ENCUESTAS-->

                    <!--Pregunta con votacion y porcentaje-->
                    @if (count($candidatos) > 0)
                    @foreach ($candidatos as $row)
                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-overlay">
                            <a href="#" class="custom-block-image-wrap">
                                <img src="{{ $row->link }}"
                                    class="custom-block-image img-fluid" alt="">
                            </a>

                            <div class="custom-block-info custom-block-overlay-info">
                                <h5 class="mb-1">
                                    <span id="encuesta_nombre">
                                        {{ $row->nombre }}
                                    </span>
                                </h5>
                                <div class="container text-center">
                                    <span>Cantidad:  <i class="bi bi-heart text-warning" aria-hidden="true"></i>
                                        <h5>
                                            @if ($row->id == "1")
                                                {{ $contarvotoimagencandidato1 }}
                                            @endif
                                            @if ($row->id == "2")
                                                {{ $contarvotoimagencandidato2 }}
                                            @endif
                                        </h5>
                                    </span>
                                </div>
                                <hr>
                                <div class="custom-block-bottom d-flex justify-content-between mt-3">

                                    <button type="button" class="btn btn-ligth mb-2">
                                        Votos
                                        <i class="bi bi-hand-thumbs-up" aria-hidden="true"></i>

                                        <span class="badge text-bg-success">
                                            @if ($row->id == "1")
                                            {{ $candidatounocuentaunaydos }}
                                            @endif
                                            @if ($row->id == "2")
                                            {{ $candidatodoscuentaunaydos }}
                                            @endif
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-ligth mb-2">
                                        Votos
                                        <i class="bi bi-hand-thumbs-down" aria-hidden="true"></i>
                                        <span class="badge text-bg-danger">
                                            @if ($row->id == "1")
                                                {{ $candidatounocuentatresycuatro }}
                                            @endif
                                            @if ($row->id == "2")
                                                {{ $candidatodoscuentatresycuatro }}
                                            @endif
                                        </span>
                                    </button>
                                </div>
                                <div class="container text-center">
                                    <button  class="btn custom-btn btn_agregar_encuesta " data-bs-toggle="modal" data-bs-target="#Encuesta_Modal" data-id="{{ $row->id }}" data-nombre="{{ $row->nombre }}" id="boton_agregar_encuesta">
                                        Votar
                                    </button>
                                </div>
                                <!--Grafico encuesta por imagen-->
                                {{-- <div class="col-md-auto">
                                    <canvas class="text-center" id="ChartpreguntaGeneral" ></canvas>
                                </div> --}}

                            </div>
                        </div>
                        {{-- <div class="custom-block-bottom mt-1">
                            @if ($row->candidato_id = "1")
                            <a href="#link" onclick="removeEvent(event);" >
                                <span class="bi bi-emoji-heart-eyes  badge text-bg-success"> Muy Buena <span class="badge text-bg-light">{{ $contarvotoimagencandidato1muybuena }}</span></span>
                            </a>

                            <a href="#link" onclick="removeEvent(event);" >
                                <span class="bi bi-emoji-smile  badge text-bg-primary"> Buena <span class="badge text-bg-light">{{ $contarvotoimagencandidato1buena }}</span></span>
                            </a>

                            <a href="#link" onclick="removeEvent(event);" >
                                <span class="bi bi-emoji-frown  badge text-bg-warning"> Mala <span class="badge text-bg-light">{{ $contarvotoimagencandidato1mala }}</span></span>
                            </a>
                            <a href="#link" onclick="removeEvent(event);" >
                                <span class="bi bi-emoji-angry  badge text-bg-danger"> Muy Mala <span class="badge text-bg-light">{{ $contarvotoimagencandidato1muymala }}</span></span>
                            </a>
                            <a href="#link" onclick="removeEvent(event);" >
                                <span class="bi bi-emoji-sunglasses  badge text-bg-secondary"> NS/NC <span class="badge text-bg-light">{{ $contarvotoimagencandidato1nsnc }}</span></span>
                            </a>

                            @elseif ($row->candidato_id = "2")
                            <a href="#link" onclick="removeEvent(event);" >
                                <span class="bi bi-emoji-heart-eyes  badge text-bg-success"> Muy Buena <span class="badge text-bg-light">{{ $contarvotoimagencandidato2muybuena }}</span></span>
                            </a>

                            <a href="#link" onclick="removeEvent(event);" >
                                <span class="bi bi-emoji-smile  badge text-bg-primary"> Buena <span class="badge text-bg-light">{{ $contarvotoimagencandidato2buena }}</span></span>
                            </a>

                            <a href="#link" onclick="removeEvent(event);" >
                                <span class="bi bi-emoji-frown  badge text-bg-warning"> Mala <span class="badge text-bg-light">{{ $contarvotoimagencandidato2mala }}</span></span>
                            </a>
                            <a href="#link" onclick="removeEvent(event);" >
                                <span class="bi bi-emoji-angry  badge text-bg-danger"> Muy Mala <span class="badge text-bg-light">{{ $contarvotoimagencandidato2muymala }}</span></span>
                            </a>
                            <a href="#link" onclick="removeEvent(event);" >
                                <span class="bi bi-emoji-sunglasses  badge text-bg-secondary"> NS/NC <span class="badge text-bg-light">{{ $contarvotoimagencandidato2nsnc }}</span></span>
                            </a>
                            @endif

                        </div> --}}
                    </div>

                    @endforeach
                    @else
                        <span class="text-danger"><h1>En breve estará disponible.!</h1></span>
                    @endif
                    <!--FIN--Pregunta con votacion y porcentaje-->

                    <!--FIN GRID PARA MOSTRAR LAS ENCUESTAS-->
                </div>
            </div>
        </section>

        <!--SECCION COMENTARIOS-->
        <section class="trending-podcast-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Comentarios o Sugerencias para mejorar nuestro sitio web</h4>
                        </div>
                    </div>
                    <p>Puede ayudarnos a mejorar con sus sugerencias para éste sitio web.  </p>
                    <p>En ésta sección puede escribir un comentario de índole anónimo. <em>Su comentario será revisado por el administrador para evaluar su aprobación.</em> </p>
                    <p>Respete las normas y <strong class="text-danger">NÓ INCLUYA INSULTOS O ACUSACIONES SIN FUNDAMENTOS</strong></p>

                    <!--PANTALLA DIVIDIDA EN COMENTARIOS Y COMENTAR-->
                    <div class="row">
                        <!--COMENTARIOS-->
                        <div class="col-8">

                            <div id="contenido_tabla_comentarios"></div>
                        </div>
                        <!--COMENTAR-->
                        <div class="col-4 text-center">
                            <form id="formulario_comentario_voto">
                                <div class="modal-body">
                                    <textarea name="texto" id="modal_agregar_comentario" cols="50" rows="5" maxlength="120"></textarea>
                                    <span class="help-block">
                                        <p id="mensaje_ayuda" class="help-block">Cuerpo del mensaje de alerta</p>
                                      </span>
                                    <input type="hidden" name="ip" id="modal_agregar_comentario_ip" >
                                    <input type="hidden" name="estado" id="modal_agregar_comentario_estado" value="DISABLED">
                                    <input type="hidden" name="fecha" value="{{ $date }}" >
                                    <input type="hidden" name="created_at" value="{{ $date }}" >
                                </div>
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn custom-btn" data-bs-dismiss="modal" id="btn_modal_comentar" >Comentar</button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <!--FIN PANTALLA DIVIDIDA EN COMENTARIOS Y COMENTAR-->

                </div>
            </div>
        </section>


     <!--modal agregar encuesta-->
      <div class="modal" id="Encuesta_Modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title" id="modal_titulo">-Título-</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <form id="formulario_encuesta_voto">
                    <div class="modal-body">
                        <select class="form-select form-select-lg mt-3" aria-label="Large select example" id="modal_agregar_seleccion" name="opcion">
                            <option value="0" selected>Seleccione...</option>
                            <option value="1">MUY BUENA</option>
                            <option value="2">BUENA</option>
                            <option value="3">MALA</option>
                            <option value="4">MUY MALA</option>
                            <option value="5">NS/NC</option>
                        </select>
                        <input type="hidden" name="votos" id="modal_agregar_candidato_votos" value="1">
                        <input type="hidden" name="ip" id="modal_agregar_candidato_ip" >
                        <input type="hidden" name="estado" id="modal_agregar_estado" value="SI">
                        <input type="hidden" name="nombre" id="modal_agregar_nombre" >
                        <input type="hidden" name="candidato_id" id="modal_agregar_candidato_id" >
                        <input type="hidden" name="fecha" value="{{ $date }}" >
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="btn_modal_votar" >Votar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!--FIN modal agregar encuesta-->

     <!--modal agregar comentario-->
      {{-- <div class="modal" id="Comentario_Modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title" id="modal_titulo">Agregar Comentario</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <form id="formulario_comentario_voto">
                    <div class="modal-body">
                        <textarea name="texto" id="modal_agregar_comentario" cols="50" rows="5" maxlength="120"></textarea>
                        <span class="help-block">
                            <p id="mensaje_ayuda" class="help-block">Cuerpo del mensaje de alerta</p>
                          </span>
                        <input type="text" name="ip" id="modal_agregar_comentario_ip" >
                        <input type="hidden" name="estado" id="modal_agregar_comentario_estado" value="DISABLED">
                        <input type="hidden" name="fecha" value="{{ $date }}" >
                        <input type="hidden" name="created_at" value="{{ $date }}" >
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="btn_modal_comentar" >Comentar</button>
                    </div>
                </form>

            </div>
        </div>
      </div> --}}
    <!--FIN modal agregar comentario-->

    <!--modal agregar respuesta de la pregunta 1-->
    {{-- <div class="modal" id="Respuesta_Modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title" id="modal_titulo">Seleccione una Respuesta</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                 <form id="formulario_respuesta_pregunta">
                    <div class="container">
                        <div class="card mt-2">
                            <div class="mt-2 text-primary p-2">
                                <textarea class="" name="pregunta" id="modal_respuesta_titulopregunta" cols="48" rows="3"></textarea>
                            </div>
                        </div>
                    </div>


                    <!-- Modal body -->

                    <div class="modal-body">
                        {{-- <select class="form-select form-select-lg mt-3" aria-label="Large select example" id="modal_agregar_respuestas" name="texto">
                            <option value="0" selected>Seleccione...</option>
                            <option value="MUY BUENA">MUY BUENA</option>
                            <option value="BUENA">BUENA</option>
                            <option value="MALA">MALA</option>
                            <option value="MUY MALA">MUY MALA</option>
                            <option value="NS/NC">NS/NC</option>
                        </select>
                        <textarea name="texto" id="modal_agregar_respuestas" cols="50" rows="5" maxlength="80"></textarea>
                         <span class="help-block">
                            <p id="mensaje_ayuda_respuestas" class="help-block">Cuerpo del mensaje</p>
                          </span>
                         <input type="hidden" name="pregunta_id" id="modal_agregar_pregunta_id">
                        <input type="hidden" name="ip" id="modal_agregar_respuesta_ip" >
                        <input type="hidden" name="fecha" value="{{ $date }}" >
                        <input type="hidden" name="origen" value="RESPUESTA" >
                        <input type="hidden" name="created_at" value="{{ $date }}" >
                     </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="btn_modal_responder" >Responder</button>
                    </div>
                </form>

            </div>
        </div>
    </div> --}}
    <!--FIN modal agregar respuesta de la pregunta 1-->

    <!--modal agregar pregunta SI/NO-->
    {{-- <div class="modal" id="Respuesta_si_no_Modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title" id="modal_titulo">Seleccione una Respuesta</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                 <form id="formulario_respuesta_pregunta_si_no">
                    <div class="container">
                        <div class="card mt-2">
                            <div class="mt-2 text-primary p-2" >
                                <textarea class="" name="pregunta" id="modal_respuesta_titulopregunta_si_no" cols="48" rows="3"></textarea>
                            </div>
                        </div>
                    </div>


                    <!-- Modal body -->

                    <div class="modal-body">
                        <select class="form-select form-select-lg mt-3" aria-label="Large select example" id="modal_agregar_respuestas_si_no" name="texto">
                            <option value="0" selected>Seleccione...</option>
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                            <option value="OTRO">OTRO</option>
                        </select>
                        <textarea name="texto" id="modal_agregar_respuestas" cols="50" rows="5" maxlength="80"></textarea>
                         <span class="help-block">
                            <p id="mensaje_ayuda_respuestas" class="help-block">Cuerpo del mensaje</p>
                          </span>
                        <input type="hidden" name="preguntados_id" id="modal_agregar_pregunta_id_si_no">
                        <input type="hidden" name="ip" id="modal_agregar_respuesta_ip_si_no" >
                        <input type="hidden" name="fecha" value="{{ $date }}" >
                        <input type="hidden" name="origen" value="RESPUESTASINO" >
                        <input type="hidden" name="created_at" value="{{ $date }}" >
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="btn_modal_responder_si_no" >Responder</button>
                    </div>
                </form>




            </div>
        </div>
    </div> --}}
    <!--FIN modal agregar pregunta SI/NO-->
</main>
{{-- <div id="IP_Address"></div>
<div id="Country"></div>
<div id="City"></div> --}}
    <footer class="site-footer">
        <div class="container">
            <div class="row">

                {{-- <div class="col-lg-6 col-12 mb-5 mb-lg-0">
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
                </div> --}}

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-md-0 mb-lg-0">
                    <h6 class="site-footer-title mb-3">Contácto</h6>

                    {{-- <p class="mb-2"><strong class="d-inline me-2">Phone:</strong> en proceso</p> --}}

                    <p>
                        <strong class="d-inline me-2">Email:</strong>
                        <a href="#">contacto@encuestasonline.online</a>
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
                            <a href="https://instagram.com/encuestaonline2025" target="_blank" class="social-icon-link bi-instagram"></a>
                        </li>

                        {{-- <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-whatsapp"></a>
                        </li> --}}
                    </ul>
                </div>

            </div>
        </div>

        <div class="container pt-5">
            <div class="row align-items-center">

                <div class="col-lg-2 col-md-3 col-12">
                     <a class="navbar-brand" href="#">
                        <img src="{{asset('/Front/images/Consultoraelcentro.png')}}" class="logo-image img-fluid" alt="Consultora del Centro" >
                    </a>
                </div>

                <div class="col-lg-7 col-md-9 col-12">
                    <ul class="site-footer-links">
                        <li class="site-footer-link-item">
                            <a href="#paginadeinicio" class="site-footer-link">Inicio</a>
                        </li>

                        {{-- <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Browse episodes</a>
                        </li> --}}

                        {{-- <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Help Center</a>
                        </li> --}}

                        {{-- <li class="site-footer-link-item">
                            <a href="#" class="site-footer-link">Contáctanos</a>
                        </li> --}}
                    </ul>
                </div>

                <div class="col-lg-3 col-12">

                    {{-- <p class="copyright-text mb-0">Copyright © <?php echo date("Y") ?> J A
                        <br><br> --}}
                        <p class="copyright-text mb-0">Diseño: J.A</p>
                    {{-- </p> Distribución: <a rel="nofollow" href="https://www.hostinger.com.ar/" target="_blank">Hostinger</a> --}}
                </div>
            </div>
        </div>
    </footer>


    <!-- JAVASCRIPT FILES -->
    <script src="{{asset('Front/js/jquery.min.js')}}"></script>
    <script src="{{asset('Front/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('Front/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('Front/js/custom.js')}}"></script>

    <!--Sweet alert 2-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>

    <script>
        // Obtenemos la IP //
        const ipdelCliente = document.getElementById('ipdelcliente');
        const modalagregarrespuesta = document.getElementById('modal_agregar_respuesta_ip');
        const modalagregarrespuestasino = document.getElementById('modal_agregar_respuesta_ip_si_no');
        // $.getJSON("http://ip-api.com/json/?callback=?", function (data)
        // {
        //         console.log(data);
        //         ipdelCliente.innerText = data.query;
        //         $("#modal_agregar_respuestatres_ip").val(data.query) ;
        //         $('#modal_agregar_comentario_ip').val(data.query);
        //         //$('#IP_Address').append("Your IP: " + data.query);
        //         //$('#Country').append("Your Country: " + data.country);
        //         //$('#City').append("Your City: " + data.city);
        // });


          $.getJSON('https://api.ipify.org?format=json', function(data)
          {
             ipdelCliente.innerText = data.ip;

             $("#modal_agregar_respuestatres_ip").val(data.ip) ;
             $('#modal_agregar_comentario_ip').val(data.ip);
             $('#ipdelcliente').hide();//ocultamos la IP
             // console.log(data.ip);
          });
          detectarNavegador();
          //DETECTAR EL NAVEGADOR
          function detectarNavegador(){
            var es_chrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
            var es_firefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;
            if(es_firefox)
            {
			    console.log("El navegador que se está utilizando es Firefox");
            }
            if(es_chrome)
            {
			    console.log("El navegador que se está utilizando es Chrome");
            }
          };



        //csrf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $(document).ready(function ()
        {//inicio
            setTimeout(function() {
                $("#spinner_deinicio").fadeOut(1500);
             },4000);
             //setTimeout(refrescar, 10000);
             function refrescar()
             {
                //Actualiza la página
                location.reload();
             }

            //TRATAMIENTO DE LAS COOKIES
            const botonAceptarCookies = document.getElementById('btn-aceptar-cookies');
            const avisoCookies = document.getElementById('aviso-cookies');
            const fondoAvisoCookies = document.getElementById('fondo-aviso-cookies');

            dataLayer = [];

            if(!localStorage.getItem('cookies-aceptadas')){
                avisoCookies.classList.add('activo');
                fondoAvisoCookies.classList.add('activo');
            } else {
                dataLayer.push({'event': 'cookies-aceptadas'});
            }

            botonAceptarCookies.addEventListener('click', () => {
                avisoCookies.classList.remove('activo');
                fondoAvisoCookies.classList.remove('activo');

                localStorage.setItem('cookies-aceptadas', true);

                dataLayer.push({'event': 'cookies-aceptadas'});
            });
            //FIN TRATAMIENTO DE COOKIES
              //-----------CUANDO SE CARGA PREGUNTA UNO MOSTRAMOS LA PREGUNTA
            var preguntauno = $('#texto_preguntauno').val();
            var preguntados = $('#texto_preguntados_si_no').val();
            $('#preguntaladoizquierdo').html(preguntauno)
            $('#preguntaladoderecha').html(preguntados)
            console.log('el texto de la pregunta es: '+preguntauno);
            console.log('el texto de la pregunta es: '+preguntados);

            //------------------------FIN MOSTRAR LA PREGUNTA--------------

            //console.log('INICIO DEL DOCUMENTO');
            document.getElementById('btn_modal_comentar').disabled = true;
           // $('#estadisticas_preguntauna').hide();//ocultamos las estadisticas de la pregunta 1
            $('#estadisticas_preguntados').hide();//ocultamos las estadisticas de la pregunta 2
            $('#estadisticas_preguntatres').hide();//ocultamos las estadisticas de la pregunta 3
            //$('#estadisticas_preguntauna_si_no').hide();//ocultamos las estadisticas de la pregunta por SI/NO

            $("#btn_agregar_respuestas").attr('disabled', true);//deshabilitamos el boton del modal para responder
            $("#btn_agregar_respuestas").html('Deshabilitado');//deshabilitamos el boton del modal para responder
            $("#btn_agregar_respuestas_si_no").attr('disabled', true);//deshabilitamos el boton del modal para responder SI/NO
            $("#btn_agregar_respuestas_si_no").html('Deshabilitado');//deshabilitamos el boton del modal para responder SI/NO
             mostrar_lista_comentarios();//muestra comentarios y los muestra en tabla
             //mostrar_lista_preguntas() //muestra todas las preguntas

             //$("#contenido_tabla_preguntas").hide();//escondemos la tabla de preguntas
             $("#btn_modal_votar").attr('disabled', true);//deshabilitamos el boton del modal para votar
             $("#btn_modal_comentar").attr('disabled', true);//deshabilitamos el boton del modal COMENTAR para COMENTAR
             $("#btn_modal_responder").attr('disabled', true);//deshabilitamos el boton del RESPUESTA para RESPONDER
             $("#btn_modal_responder_si_no").attr('disabled', true);//deshabilitamos el boton del RESPUESTA para RESPONDER SI/NO
             $("#btn_modal_respondertres").attr('disabled', true);//deshabilitamos el boton del RESPUESTA para RESPONDER LA CASTA

             //AGREGAR COMENTARIO
             $("#btn_modal_comentar").on('click', function()
             {
                //console.log("CLICK EN COMENTAR PARA GRABAR");
                registrar_comentarios()
             });

             //BOTON FUTBOL
             $("#btn_futbol").on('click', function()
             {
                console.log("CLICK EN FUTBOL");
                Swal.fire({
                    title: "Falta muy poco",
                    text: "En breve estaremos implementando el tema",
                    icon: "info"
                });
             });
             //BOTON TEMA SEMANAL
             $("#btn_semanal").on('click', function()
             {
                console.log("CLICK EN TEMA SEMANAL");
                Swal.fire({
                    title: "Falta muy poco",
                    text: "En breve estaremos implementando el tema",
                    icon: "info"
                });
             });
             //BOTON TEMA LOCALIDADES
             $("#btn_localidades").on('click', function()
             {
                console.log("CLICK EN TEMA LOCALIDADES");
                Swal.fire({
                    title: "Falta muy poco",
                    text: "En breve estaremos implementando el tema",
                    icon: "info"
                });
             });



             //CLICK EN SELECT PREGUNTAS
             $("#seleccionar_preguntas").on('change', function(){
                $("#cuerpo-tabla_preguntas").html("");
                let id_respuesta = $(this).val();
                var textoIzquierdo = $(this).find('option:selected').text(); // Capturamos el texto del option seleccionado
                //console.log("click en "+id_respuesta);
                ///calcular desde donde se leerá la base de datos
                if (id_respuesta == '0') {
                    $("#btn_agregar_respuestas").attr('disabled', true);//deshabilitamos el boton del modal para responder
                    $("#btn_agregar_respuestas").html('Deshabilitado');//deshabilitamos el boton del modal para responder
                    //$('#estadisticas_preguntauna').hide();//ocultamos las estadisticas de la pregunta 1
                    $('#estadisticas_preguntados').hide();//ocultamos las estadisticas de la pregunta 2
                    //$("#preguntaladoizquierdo").hide() ;//ocultamos pregunta del lado IZQUIERDO
                } else {
                    var obtenemoselidparamostrar=$('#seleccionar_preguntas').val();
                    let ponelapreguntaizquierda = $(this).text();
                    $("#preguntaladoizquierdo").html(textoIzquierdo) ; //ponemos la pregunta cuando seleccionamos
                    //console.log(x);
                    //let ponerenmodalelid = $(this).val();
                    $("#modal_agregar_pregunta_id").val(obtenemoselidparamostrar) ;
                    $("#btn_agregar_respuestas").attr('disabled', false);//habilitamos el boton del modal para responder
                    $("#btn_agregar_respuestas").html('Agregar Respuesta');//deshabilitamos el boton del modal para responder
                    if (id_respuesta == '1') {
                        $("#preguntaladoizquierdo").show(); //Mostramos pregunta lado IZQUIERDO
                        $('#estadisticas_preguntauna').show();//mostramos las estadisticas de la pregunta 1
                        $('#estadisticas_preguntados').hide();//ocultamos las estadisticas de la pregunta 2
                        $('#estadisticas_preguntatres').hide();//ocultamos las estadisticas de la pregunta 3
                    }
                    if (id_respuesta == '2') {
                        $("#preguntaladoizquierdo").show(); //Mostramos pregunta lado IZQUIERDO
                        $('#estadisticas_preguntados').show();//mostramos las estadisticas de la pregunta 1
                        $('#estadisticas_preguntauna').hide();//ocultamos las estadisticas de la pregunta 2
                        $('#estadisticas_preguntatres').hide();//ocultamos las estadisticas de la pregunta 3
                    }
                    if (id_respuesta == '3') {
                        $("#preguntaladoizquierdo").show(); //Mostramos pregunta lado IZQUIERDO
                        $('#estadisticas_preguntatres').show();//mostramos las estadisticas de la pregunta 1
                        $('#estadisticas_preguntauna').hide();//ocultamos las estadisticas de la pregunta 2
                        $('#estadisticas_preguntados').hide();//ocultamos las estadisticas de la pregunta 2
                    }


                }
                $.ajax({
                        type: "get",
                        url: '{{ route('pregunta.buscarrespuestas') }}',
                        data: {
                            id_respuesta: id_respuesta
                        },
                        dataType: 'json',
                        success: function(respuesta) {
                            //console.log(respuesta);
                            var arreglo = respuesta;

                            $("#cuerpo-tabla_preguntas").html("");
                             for(i=0;i<arreglo.length;i++)
                             {
                                var todo = arreglo[i];

                                $("#cuerpo-tabla_preguntas").append( `
                                <div class="overflow-auto">
                                    <div class="d-flex" >
                                        <div class="vr"></div>
                                        <div class="col-lg-10 col-md-6 col-12 mb-4 mb-lg-0 ">
                                            <div class="custom-block custom-block-overlay">
                                                <div class="position-absolute top-0 end-0">
                                                    <div class="position-relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots text-success" viewBox="0 0 16 16">
                                                            <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                                                            <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <span class="text-primary opacity-50 ">-Respuesta- </span><span><strong>${todo.texto}</strong>  <span>(${todo.fecha})</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                  `
                                );


                            }

                        },
                        error: function (error) {
                            console.log("Error");
                            //console.log(respuesta);
                        }
                });
            });

            //CLICK EN SELECT PREGUNTAS POR SI/NO
            $("#seleccionar_preguntas_si_no").on('change', function(){
                $("#cuerpo-tabla_preguntas_si_no").html("");
                let id_respuesta = $(this).val();
                var textoderecha = $(this).find('option:selected').text(); // Capturamos el texto del option seleccionado
                //console.log("click en "+id_respuesta);
                ///calcular desde donde se leerá la base de datos
                if (id_respuesta == '0') {
                    $("#btn_agregar_respuestas_si_no").attr('disabled', true);//deshabilitamos el boton del modal para responder
                    $("#btn_agregar_respuestas_si_no").html('Deshabilitado');//deshabilitamos el boton del modal para responder
                    //$('#estadisticas_preguntauna_si_no').hide();//ocultamos las estadisticas de la pregunta 1
                    $('#estadisticas_preguntados_si_no').hide();//ocultamos las estadisticas de la pregunta 2
                    //$("#preguntaladoderecha").hide() ;//ocultamos pregunta del lado DERECHO
                } else {
                    var obtenemoselidparamostrar=$('#seleccionar_preguntas_si_no').val();
                    //console.log(x);
                    //let ponerenmodalelid = $(this).val();
                    $("#preguntaladoderecha").html(textoderecha) ;
                    $("#modal_agregar_pregunta_id_si_no").val(obtenemoselidparamostrar) ;
                    $("#btn_agregar_respuestas_si_no").attr('disabled', false);//habilitamos el boton del modal para responder
                    $("#btn_agregar_respuestas_si_no").html('Agregar Respuesta');//deshabilitamos el boton del modal para responder
                    if (id_respuesta == '1') {
                        $("#preguntaladoderecha").show() ;//Mostramos pregunta del lado DERECHO
                        $('#estadisticas_preguntauna_si_no').show();//mostramos las estadisticas de la pregunta 1
                        $('#estadisticas_preguntados_si_no').hide();//ocultamos las estadisticas de la pregunta 2
                        $('#estadisticas_preguntatres_si_no').hide();//ocultamos las estadisticas de la pregunta 3
                    }
                    if (id_respuesta == '2') {
                        $("#preguntaladoderecha").show() ;//Mostramos pregunta del lado DERECHO
                        $('#estadisticas_preguntados_si_no').show();//mostramos las estadisticas de la pregunta 1
                        $('#estadisticas_preguntauna_si_no').hide();//ocultamos las estadisticas de la pregunta 2
                        $('#estadisticas_preguntatres_si_no').hide();//ocultamos las estadisticas de la pregunta 3
                    }
                    if (id_respuesta == '3') {
                        $("#preguntaladoderecha").show() ;//Mostramos pregunta del lado DERECHO
                        $('#estadisticas_preguntatres_si_no').show();//mostramos las estadisticas de la pregunta 1
                        $('#estadisticas_preguntauna_si_no').hide();//ocultamos las estadisticas de la pregunta 2
                        $('#estadisticas_preguntados_si_no').hide();//ocultamos las estadisticas de la pregunta 2
                    }


                }
                $.ajax({
                        type: "get",
                        url: '{{ route('pregunta.buscarrespuestassino') }}',
                        data: {
                            id_respuesta: id_respuesta
                        },
                        dataType: 'json',
                        success: function(respuesta) {
                            //console.log(respuesta);
                            var arreglo = respuesta;

                            $("#cuerpo-tabla_preguntas_si_no").html("");
                             for(i=0;i<arreglo.length;i++)
                             {
                                var todo = arreglo[i];

                                $("#cuerpo-tabla_preguntas_si_no").append( `
                                <div class="overflow-auto">
                                    <div class="d-flex" >
                                        <div class="vr"></div>
                                        <div class="col-lg-10 col-md-6 col-12 mb-4 mb-lg-0 ">
                                            <div class="custom-block custom-block-overlay">
                                                <div class="position-absolute top-0 end-0">
                                                    <div class="position-relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots text-success" viewBox="0 0 16 16">
                                                            <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                                                            <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <span class="text-primary opacity-50 ">-Respuesta- </span><span><strong>${todo.texto}</strong>  <span>(${todo.fecha})</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                  `
                                );


                            }

                        },
                        error: function (error) {
                            console.log("Error");
                            //console.log(respuesta);
                        }
                });
            });


                //verifica si hay internet antes de guardar

                //recargar pagina

                //AGREGAR AL MODAL RESPUESTA LOS DATOS
                $("#btn_agregar_respuestas").on('click', function(){
                    var IP = document.getElementById('ipdelcliente')
                    if(IP.innerText == "")
                    {
                        Swal.fire({
                        position: "top-end",
                        icon: "error",
                        title: "Verifique su conexión a internet o recargue la página.!",
                        showConfirmButton: false,
                        timer: 1500
                        });
                        $('#Respuesta_Modal').modal('hide')
                        location.reload();

                    } else
                    {
                        let mostrarpregunta = $('select[name="lineas"] option:selected').text();//obtenemos el TEXTO de la pregunta


                        $("#modal_agregar_respuesta_ip").val(ipdelCliente.innerText) ;

                        $("#modal_respuesta_titulopregunta").val(mostrarpregunta) ;
                        //console.log(mostrarpregunta);
                        //console.log(ipdelCliente.innerText);
                    }

                });

                 //AGREGAR AL MODAL RESPUESTA SI/NO LOS DATOS
                 $("#btn_agregar_respuestas_si_no").on('click', function(){
                    var IP = document.getElementById('ipdelcliente')
                    if(IP.innerText == "")
                    {
                        Swal.fire({
                        position: "top-end",
                        icon: "error",
                        title: "Verifique su conexión a internet o recargue la página.!",
                        showConfirmButton: false,
                        timer: 1500
                        });
                        $('#Respuesta_si_no_Modal').modal('hide')
                        location.reload();

                    } else
                    {
                        let mostrarpregunta = $('select[name="lineasdos"] option:selected').text();//obtenemos el TEXTO de la pregunta


                        $("#modal_agregar_respuesta_ip_si_no").val(ipdelCliente.innerText) ;

                        $("#modal_respuesta_titulopregunta_si_no").val(mostrarpregunta) ;
                        //console.log(mostrarpregunta);
                        //console.log(ipdelCliente.innerText);
                    }

                });


            //GUARDA LOS DATOS DEL MODAL RESPUESTA EN LA BASE
            $("#btn_modal_responder").on('click', function()
            {
                //console.log('CLICK EN GUARDAR RESPUESTAS DESDE EL MODAL');
                console.log("Click en boton votar desde el modal agregar voto")
                ip = document.getElementById("ipdelcliente").innerText //obtener valor del input
                    $.ajax({
                        type: "get",
                        url: '{{ route('respuesta.existeip') }}',
                        data: {
                            ip: ip
                        },
                        dataType: 'json',
                        success: function(respuesta) {
                            //console.log(respuesta);

                            if (respuesta.data.length == '')
                            {
                                console.log('DATOS VACIOS');
                                registrar_respuestas();

                            } else
                            {
                                if (respuesta.data[0].ip == ip ) {
                                    //console.log("YA AGREGASTE UNA RESPUESTA");
                                    Swal.fire
                                    ({
                                        position: "top-end",
                                        icon: "error",
                                        title: "Detectamos que yá respondiste.!",
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                    //esconemos el modal
                                    $('#Respuesta_Modal').modal('hide');

                                } else {
                                    console.log("los dos datos no coinciden, por lo cual se grabaran en la base ");
                                    //registrar_votos();
                                }
                            }

                        },
                        error: function (error) {
                            console.log(error);
                        }
                    });

            });

             //GUARDA LOS DATOS DEL MODAL RESPUESTA SI/NO EN LA BASE
             $("#btn_modal_responder_si_no").on('click', function()
            {
                //console.log('CLICK EN GUARDAR RESPUESTAS DESDE EL MODAL');
                console.log("Click en boton votar desde el modal agregar RESPUESTA POR SI O NO")
                ip = document.getElementById("ipdelcliente").innerText //obtener valor del input
                    $.ajax({
                        type: "get",
                        url: '{{ route('respuesta.existeipsino') }}',
                        data: {
                            ip: ip
                        },
                        dataType: 'json',
                        success: function(respuesta) {
                            //console.log(respuesta);

                            if (respuesta.data.length == '')
                            {
                                console.log('DATOS VACIOS');
                                registrar_respuestas_si_no();

                            } else
                            {
                                if (respuesta.data[0].ip == ip ) {
                                    //console.log("YA AGREGASTE UNA RESPUESTA");
                                    Swal.fire
                                    ({
                                        position: "top-end",
                                        icon: "error",
                                        title: "Detectamos que yá respondiste.!",
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                    //esconemos el modal
                                    $('#Respuesta_si_no_Modal').modal('hide');

                                } else {
                                    console.log("los dos datos no coinciden, por lo cual se grabaran en la base ");
                                    //registrar_votos();
                                }
                            }

                        },
                        error: function (error) {
                            console.log(error);
                        }
                    });

            });



             //EDITAR VOTO
            $(".btn_agregar_encuesta").on('click', function()
            {
                $("#formulario_encuesta_voto")[0].reset();
                $("#btn_modal_votar").attr('disabled', true);//deshabilitamos el boton del modal para votar
                let id_candidato = $(this).attr('data-id');//obtenemos el ID del boton por el atributo
                let nombrecandidato = $(this).attr('data-nombre')

                $('#modal_titulo').html(nombrecandidato);
                $('#modal_agregar_candidato_ip').val(ipdelCliente.innerText);
                $('#modal_agregar_nombre').val(nombrecandidato);
                $('#modal_agregar_candidato_id').val(id_candidato);

                //console.log("candidato a votar " + id_candidato);
            });


            //cuando seleccionamos las opciones del select del modal votar
            $('#modal_agregar_seleccion').change(function (e)
            {
            //console.log($(this).val()) ;
                if ($(this).val() === "0"){
                    $("#btn_modal_votar").attr('disabled', true);
                }else{
                    $("#btn_modal_votar").attr('disabled', false);
                }
            });

            //cuando seleccionamos las opciones del select del modal preguntas
            $('#modal_agregar_respuestas').change(function (e)
            {

            //console.log($(this).val()) ;
                if ($(this).val() === "0"){
                    $("#btn_modal_responder").attr('disabled', true);
                    modalagregarrespuesta.value = "";
                }else{
                    $("#btn_modal_responder").attr('disabled', false);
                    modalagregarrespuesta.value = ipdelCliente.innerText;
                }
            });

             //cuando seleccionamos las opciones del select del modal preguntas SI/NO
             $('#modal_agregar_respuestas_si_no').change(function (e)
            {
                var valor_id_preguntasino = $("#modal_mostrar_pregunta_id_si_no").val();//toma el ID de la pregunta por SI/NO
                var valor_textopregunta_preguntasino = $("#texto_preguntados_si_no").val();
                $("#modal_agregar_texto_si_no").val($(this).val());
                $("#modal_agregar_pregunta_id_si_no").val(valor_id_preguntasino);
                $("#modal_agregar_pregunta_si_no").val(valor_textopregunta_preguntasino);
            //console.log($(this).val()) ;
                if ($(this).val() === "0"){
                    $("#btn_modal_responder_si_no").attr('disabled', true);
                    modalagregarrespuestasino.value = "";
                }else{
                    $("#btn_modal_responder_si_no").attr('disabled', false);
                    modalagregarrespuestasino.value = ipdelCliente.innerText;
                }
            });
            //cuando seleccionamos las opciones del select preguntas generales
            $('#modal_agregar_respuestatres').change(function (e)
            {
                var valor_id_preguntatres = $("#modal_mostrar_preguntatres_id").val();//toma el ID de la pregunta General
                var valor_textopregunta_preguntatres = $("#texto_preguntatres").val();//tomamos el texto de la pregunta
                $("#modal_agregar_preguntatres_id").val(valor_id_preguntatres);
                $("#modal_agregar_preguntatres").val(valor_textopregunta_preguntatres);
                $("#modal_agregar_texto_preguntatres").val($(this).val());//agregamos el texto seleccionado
            //console.log($(this).val()) ;
                if ($(this).val() === "0"){
                    $("#btn_modal_respondertres").attr('disabled', true);
                }else{
                    $("#btn_modal_respondertres").attr('disabled', false);
                }
            });

            //BOTON VOTAR DE ENCUESTAS IMAGENES
            $("#btn_modal_votar").on('click', function()
            {
                //console.log("Click en boton votar desde el modal agregar voto")
                ip = document.getElementById("ipdelcliente").innerText //obtener valor del input
                    $.ajax({
                        type: "get",
                        url: '{{ route('encuesta.existeip') }}',
                        data: {
                            ip: ip
                        },
                        dataType: 'json',
                        success: function(respuesta) {
                            //console.log(respuesta);

                            if (respuesta.data.length == '')
                            {
                                //console.log('DATOS VACIOS');
                                registrar_votos();

                            } else
                            {
                                if (respuesta.data[0].ip == ip ) {
                                    //console.log("YA VOTASTE AL CANDIDATO");
                                    Swal.fire
                                    ({
                                        position: "top-end",
                                        icon: "error",
                                        title: "Detectamos que yá votaste.!",
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                    //esconemos el modal
                                    $('#diputado_modal').modal('hide');

                                } else {
                                    console.log("los dos datos no coinciden, por lo cual se grabaran en la base ");
                                    //registrar_votos();
                                }
                            }

                        },
                        error: function (error) {
                            console.log(error);
                        }
                    });
            });

             //BOTON VOTAR DE PREGUNTA GENERAL
             $("#btn_modal_respondertres").on('click', function()
            {
                //console.log("Click en boton votar desde el modal agregar voto")
                ip = document.getElementById("ipdelcliente").innerText //obtener valor del input
                    $.ajax({
                        type: "get",
                        url: '{{ route('respuesta.existeipgeneral') }}',
                        data: {
                            ip: ip
                        },
                        dataType: 'json',
                        success: function(respuesta) {
                            //console.log(respuesta);

                            if (respuesta.data.length == '')
                            {
                                //console.log('DATOS VACIOS');
                                registrar_respuestatresgeneral();

                            } else
                            {
                                if (respuesta.data[0].ip == ip ) {
                                    //console.log("YA VOTASTE AL CANDIDATO");
                                    Swal.fire
                                    ({
                                        position: "top-end",
                                        icon: "error",
                                        title: "Detectamos que yá votaste.!",
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                    //esconemos el modal


                                } else {
                                    console.log("los dos datos no coinciden, por lo cual se grabaran en la base ");
                                    //registrar_votos();
                                }
                            }

                        },
                        error: function (error) {
                            console.log(error);
                        }
                    });
            });

            //FUNCION AGREGAR VOTOS
        function registrar_votos() {
            //console.log('registrar turno funcion');
            Swal.fire({
                title: "Haz click en votar",
                    icon: 'success',
                    text: 'Se enviará la información a la base de datos',
                    //showCancelButton: true,
                    confirmButtonText: "Votar",
                    // cancelButtonText: `Cancelar`,
                    showLoaderOnConfirm: true,
                preConfirm: () => {
                    let token = $('meta[name="csrf-token"]').attr('content');
                    let formElement = document.getElementById("formulario_encuesta_voto");
                    let formData = new FormData(formElement);
                    return fetch('{{ route('encuesta.registrar') }}', {
                        method: "POST",
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': token
                        }
                    }).then(response => {
                        if (!response.ok) {
                            return response.text().then(text => {
                                throw new Error(text)
                            })
                        } else {
                            return response.json()
                        }
                    }).catch(response => {
                        let texto = JSON.parse(response.toString().substring(7));
                        let mensaje = texto.message;
                        Swal.showValidationMessage(
                            `Error: ${mensaje}`
                        )
                    });
                },
                allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    //console.log('SU VOTO SE REGISTRÓ.!')
                    Swal.fire({
                        title: "MUCHAS GRACIAS POR PARTICIPAR!",
                        icon: 'success',
                        text: 'Voto agregado correctamente.!',
                        confirmButtonText: "Ok",
                        timer: 1500,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading();
                            const timer = Swal.getPopup().querySelector("b");
                            timerInterval = setInterval(() => {
                                timer.textContent = `${Swal.getTimerLeft()}`;
                            }, 100);
                        },
                        willClose: () => {
                            clearInterval(timerInterval);
                        }
                    }).then((confirmar) => {
                        if (confirmar.isConfirmed || confirmar.dismiss === Swal.DismissReason.timer) {
                            //reseteamos el formulario
                            $("#formulario_encuesta_voto")[0].reset();
                            //esconemos el modal
                            $('#Encuesta_Modal').modal('hide');
                            //$('#search_list').val('');
                            //llamamos a la funcion para mostrar la tabla
                            //mostrar_lista_diputados();
                            // funciones para recargar la pagina luego de success
                            var reloadInterval = 1000; //page reload delay duration
                            //CARGAR PINNER
                            //LOADER SPINNER
                            const fgp_loader = document.createElement("fgp-loader");
                                    fgp_loader.innerHTML = /* html */ `
                                    <style>
                                        fgp-loader {
                                            font: calc((100vh + 100vw)/ 100) verdana;
                                            color: #777;
                                            background: #fffd;
                                            position: fixed;
                                            width: 100%;
                                            height: 100%;
                                            top: 0;
                                            left: 0;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                            flex-direction: column;
                                            z-index: 9;
                                        }
                                        fgp-loader .spinner {
                                            font-size: calc(1vw / 2);
                                            border: 1em solid;
                                            border-top: 1em solid transparent;
                                            width: 30em;
                                            max-width: 5rem;
                                            height: 30em;
                                            max-height: 5rem;
                                            border-radius: 50%;
                                            animation: rotate 1s ease infinite;
                                        }
                                        @keyframes rotate {
                                            100% {
                                                transform: rotate(360deg);
                                            }
                                        }
                                        fgp-loader .title {
                                            animation: opacity 2s infinite;
                                        }
                                        @keyframes opacity {
                                            50% {
                                                opacity: 0.2;
                                            }
                                        }
                                    </style>
                                    <div class="spinner"></div>
                                    <h2 class="title">Cargando página...</h2>
                                    `;
                                    document.body.appendChild(fgp_loader);

                                    window.addEventListener("load", () => {
                                    fgp_loader.remove();
                            });
                            //FIN CARGAR SPINNER
                            location.reload();
                        }
                    });
                } else if (result.isDenied) {
                    Swal.fire("Error de registro", "", "info");
                }
            });

        }

        //REGISTRAR COMENTARIOS
        function registrar_comentarios()
        {
            //console.log('registrar turno funcion');
            Swal.fire({
                title: "Haz click en Comentar",
                    icon: 'success',
                    text: 'Se enviará la información a la base de datos',
                    //showCancelButton: true,
                    confirmButtonText: "Comentar",
                    // cancelButtonText: `Cancelar`,
                    showLoaderOnConfirm: true,
                preConfirm: () => {
                    let token = $('meta[name="csrf-token"]').attr('content');
                    let formElement = document.getElementById("formulario_comentario_voto");
                    let formData = new FormData(formElement);
                    return fetch('{{ route('comentarios.registrar') }}', {
                        method: "POST",
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': token
                        }
                    }).then(response => {
                        if (!response.ok) {
                            return response.text().then(text => {
                                throw new Error(text)
                            })
                        } else {
                            return response.json()
                        }
                    }).catch(response => {
                        let texto = JSON.parse(response.toString().substring(7));
                        let mensaje = texto.message;
                        Swal.showValidationMessage(
                            `Error: ${mensaje}`
                        )
                    });
                },
                allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    //console.log('SU COMENTARIO SE REGISTRÓ.!')
                    Swal.fire({
                        title: "MUCHAS GRACIAS POR SU COMENTARIO!",
                        icon: 'success',
                        text: 'Comentario agregado...esperando autorización.!',
                        confirmButtonText: "Ok",
                        timer: 1500,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading();
                            const timer = Swal.getPopup().querySelector("b");
                            timerInterval = setInterval(() => {
                                timer.textContent = `${Swal.getTimerLeft()}`;
                            }, 100);
                        },
                        willClose: () => {
                            clearInterval(timerInterval);
                        }
                    }).then((confirmar) => {
                        if (confirmar.isConfirmed || confirmar.dismiss === Swal.DismissReason.timer) {
                            //reseteamos el formulario
                            $("#formulario_comentario_voto")[0].reset();
                            //esconemos el modal
                            //$('#Comentario_Modal').modal('hide');
                            //$('#search_list').val('');
                            //llamamos a la funcion para mostrar la tabla
                            //mostrar_lista_diputados();
                            // funciones para recargar la pagina luego de success
                            var reloadInterval = 1000; //page reload delay duration
                            //CARGAR PINNER
                            //LOADER SPINNER
                            const fgp_loader = document.createElement("fgp-loader");
                                    fgp_loader.innerHTML = /* html */ `
                                    <style>
                                        fgp-loader {
                                            font: calc((100vh + 100vw)/ 100) verdana;
                                            color: #777;
                                            background: #fffd;
                                            position: fixed;
                                            width: 100%;
                                            height: 100%;
                                            top: 0;
                                            left: 0;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                            flex-direction: column;
                                            z-index: 9;
                                        }
                                        fgp-loader .spinner {
                                            font-size: calc(1vw / 2);
                                            border: 1em solid;
                                            border-top: 1em solid transparent;
                                            width: 30em;
                                            max-width: 5rem;
                                            height: 30em;
                                            max-height: 5rem;
                                            border-radius: 50%;
                                            animation: rotate 1s ease infinite;
                                        }
                                        @keyframes rotate {
                                            100% {
                                                transform: rotate(360deg);
                                            }
                                        }
                                        fgp-loader .title {
                                            animation: opacity 2s infinite;
                                        }
                                        @keyframes opacity {
                                            50% {
                                                opacity: 0.2;
                                            }
                                        }
                                    </style>
                                    <div class="spinner"></div>
                                    <h2 class="title">Cargando página...</h2>
                                    `;
                                    document.body.appendChild(fgp_loader);

                                    window.addEventListener("load", () => {
                                    fgp_loader.remove();
                            });
                            //FIN CARGAR SPINNER
                            location.reload();
                        }
                    });
                } else if (result.isDenied) {
                    Swal.fire("Error de registro", "", "info");
                }
            });

        }

            //FUNCION AGREGAR RESPUESTAS
            function registrar_respuestas()
            {
            //console.log('registrar turno funcion');
                Swal.fire({
                    title: "Haz click en votar",
                    icon: 'success',
                    text: 'Se enviará la información a la base de datos',
                    //showCancelButton: true,
                    confirmButtonText: "Quiero votar",
                    // cancelButtonText: `Cancelar`,
                    showLoaderOnConfirm: true,
                    preConfirm: () => {
                        let token = $('meta[name="csrf-token"]').attr('content');
                        let formElement = document.getElementById("formulario_respuesta_pregunta");
                        let formData = new FormData(formElement);
                        return fetch('{{ route('pregunta.registrar') }}', {
                            method: "POST",
                            body: formData,
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': token
                            }
                        }).then(response => {
                            if (!response.ok) {
                                return response.text().then(text => {
                                    throw new Error(text)
                                })
                            } else {
                                return response.json()
                            }
                        }).catch(response => {
                            let texto = JSON.parse(response.toString().substring(7));
                            let mensaje = texto.message;
                            Swal.showValidationMessage(
                                `Error: ${mensaje}`
                            )
                        });
                    },
                    allowOutsideClick: () => !Swal.isLoading()
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        //console.log('SU RESPUESTA SE REGISTRÓ.!')
                        Swal.fire({
                            title: "MUCHAS GRACIAS POR PARTICIPAR!",
                            icon: 'success',
                            text: 'Respuesta agregada correctamente.!',
                            confirmButtonText: "Ok",
                            timer: 1500,
                            timerProgressBar: true,
                            didOpen: () => {
                                Swal.showLoading();
                                const timer = Swal.getPopup().querySelector("b");
                                timerInterval = setInterval(() => {
                                    timer.textContent = `${Swal.getTimerLeft()}`;
                                }, 100);
                            },
                            willClose: () => {
                                clearInterval(timerInterval);
                            }
                        }).then((confirmar) => {
                            if (confirmar.isConfirmed || confirmar.dismiss === Swal.DismissReason.timer) {
                                //reseteamos el formulario
                                $("#formulario_respuesta_pregunta")[0].reset();
                                //esconemos el modal
                                $('#Respuesta_Modal').modal('hide');
                                //$('#search_list').val('');
                                //llamamos a la funcion para mostrar la tabla
                                //mostrar_lista_diputados();
                                // funciones para recargar la pagina luego de success
                                var reloadInterval = 1000; //page reload delay duration
                                //CARGAR PINNER
                                //LOADER SPINNER
                                const fgp_loader = document.createElement("fgp-loader");
                                        fgp_loader.innerHTML = /* html */ `
                                        <style>
                                            fgp-loader {
                                                font: calc((100vh + 100vw)/ 100) verdana;
                                                color: #777;
                                                background: #fffd;
                                                position: fixed;
                                                width: 100%;
                                                height: 100%;
                                                top: 0;
                                                left: 0;
                                                display: flex;
                                                justify-content: center;
                                                align-items: center;
                                                flex-direction: column;
                                                z-index: 9;
                                            }
                                            fgp-loader .spinner {
                                                font-size: calc(1vw / 2);
                                                border: 1em solid;
                                                border-top: 1em solid transparent;
                                                width: 30em;
                                                max-width: 5rem;
                                                height: 30em;
                                                max-height: 5rem;
                                                border-radius: 50%;
                                                animation: rotate 1s ease infinite;
                                            }
                                            @keyframes rotate {
                                                100% {
                                                    transform: rotate(360deg);
                                                }
                                            }
                                            fgp-loader .title {
                                                animation: opacity 2s infinite;
                                            }
                                            @keyframes opacity {
                                                50% {
                                                    opacity: 0.2;
                                                }
                                            }
                                        </style>
                                        <div class="spinner"></div>
                                        <h2 class="title">Cargando página...</h2>
                                        `;
                                        document.body.appendChild(fgp_loader);

                                        window.addEventListener("load", () => {
                                        fgp_loader.remove();
                                });
                                //FIN CARGAR SPINNER
                                location.reload();
                            }
                        });
                    } else if (result.isDenied) {
                        Swal.fire("Error de registro", "", "info");
                    }
                });
            }

             //FUNCION AGREGAR RESPUESTAS
             function registrar_respuestas_si_no()
            {
            //console.log('registrar turno funcion');
                Swal.fire({
                    title: "Haz click en votar",
                    icon: 'success',
                    text: 'Se enviará la información a la base de datos',
                    //showCancelButton: true,
                    confirmButtonText: "Quiero votar",
                    // cancelButtonText: `Cancelar`,
                    showLoaderOnConfirm: true,
                    preConfirm: () => {
                        let token = $('meta[name="csrf-token"]').attr('content');
                        let formElement = document.getElementById("formulario_respuesta_pregunta_si_no");
                        let formData = new FormData(formElement);
                        return fetch('{{ route('pregunta.registrarsino') }}', {
                            method: "POST",
                            body: formData,
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': token
                            }
                        }).then(response => {
                            if (!response.ok) {
                                return response.text().then(text => {
                                    throw new Error(text)
                                })
                            } else {
                                return response.json()
                            }
                        }).catch(response => {
                            let texto = JSON.parse(response.toString().substring(7));
                            let mensaje = texto.message;
                            Swal.showValidationMessage(
                                `Error: ${mensaje}`
                            )
                        });
                    },
                    allowOutsideClick: () => !Swal.isLoading()
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        //console.log('SU RESPUESTA SE REGISTRÓ.!')
                        Swal.fire({
                            title: "MUCHAS GRACIAS POR PARTICIPAR!",
                            icon: 'success',
                            text: 'Respuesta agregada correctamente.!',
                            confirmButtonText: "Ok",
                            timer: 1500,
                            timerProgressBar: true,
                            didOpen: () => {
                                Swal.showLoading();
                                const timer = Swal.getPopup().querySelector("b");
                                timerInterval = setInterval(() => {
                                    timer.textContent = `${Swal.getTimerLeft()}`;
                                }, 100);
                            },
                            willClose: () => {
                                clearInterval(timerInterval);
                            }
                        }).then((confirmar) => {
                            if (confirmar.isConfirmed || confirmar.dismiss === Swal.DismissReason.timer) {
                                //reseteamos el formulario
                                $("#formulario_respuesta_pregunta_si_no")[0].reset();
                                //esconemos el modal
                                $('#Respuesta_si_no_Modal').modal('hide');
                                //$('#search_list').val('');
                                //llamamos a la funcion para mostrar la tabla
                                //mostrar_lista_diputados();
                                // funciones para recargar la pagina luego de success
                                var reloadInterval = 1000; //page reload delay duration
                                //CARGAR PINNER
                                //LOADER SPINNER
                                const fgp_loader = document.createElement("fgp-loader");
                                        fgp_loader.innerHTML = /* html */ `
                                        <style>
                                            fgp-loader {
                                                font: calc((100vh + 100vw)/ 100) verdana;
                                                color: #777;
                                                background: #fffd;
                                                position: fixed;
                                                width: 100%;
                                                height: 100%;
                                                top: 0;
                                                left: 0;
                                                display: flex;
                                                justify-content: center;
                                                align-items: center;
                                                flex-direction: column;
                                                z-index: 9;
                                            }
                                            fgp-loader .spinner {
                                                font-size: calc(1vw / 2);
                                                border: 1em solid;
                                                border-top: 1em solid transparent;
                                                width: 30em;
                                                max-width: 5rem;
                                                height: 30em;
                                                max-height: 5rem;
                                                border-radius: 50%;
                                                animation: rotate 1s ease infinite;
                                            }
                                            @keyframes rotate {
                                                100% {
                                                    transform: rotate(360deg);
                                                }
                                            }
                                            fgp-loader .title {
                                                animation: opacity 2s infinite;
                                            }
                                            @keyframes opacity {
                                                50% {
                                                    opacity: 0.2;
                                                }
                                            }
                                        </style>
                                        <div class="spinner"></div>
                                        <h2 class="title">Cargando página...</h2>
                                        `;
                                        document.body.appendChild(fgp_loader);

                                        window.addEventListener("load", () => {
                                        fgp_loader.remove();
                                });
                                //FIN CARGAR SPINNER
                                location.reload();
                            }
                        });
                    } else if (result.isDenied) {
                        Swal.fire("Error de registro SI/NO", "", "info");
                    }
                });
            }

             //FUNCION AGREGAR RESPUESTAS PREGUNTA GENERAL
             function registrar_respuestatresgeneral()
            {
            //console.log('registrar turno funcion');
                Swal.fire({
                    title: "Haz click en votar",
                    icon: 'success',
                    text: 'Se enviará la información a la base de datos',
                    //showCancelButton: true,
                    confirmButtonText: "Quiero votar",
                    // cancelButtonText: `Cancelar`,
                    showLoaderOnConfirm: true,
                    preConfirm: () => {
                        let token = $('meta[name="csrf-token"]').attr('content');
                        let formElement = document.getElementById("formulario_respuesta_preguntatres");
                        let formData = new FormData(formElement);
                        return fetch('{{ route('pregunta.registrargeneral') }}', {
                            method: "POST",
                            body: formData,
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': token
                            }
                        }).then(response => {
                            if (!response.ok) {
                                return response.text().then(text => {
                                    throw new Error(text)
                                })
                            } else {
                                return response.json()
                            }
                        }).catch(response => {
                            let texto = JSON.parse(response.toString().substring(7));
                            let mensaje = texto.message;
                            Swal.showValidationMessage(
                                `Error: ${mensaje}`
                            )
                        });
                    },
                    allowOutsideClick: () => !Swal.isLoading()
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        //console.log('SU RESPUESTA SE REGISTRÓ.!')
                        Swal.fire({
                            title: "MUCHAS GRACIAS POR PARTICIPAR!",
                            icon: 'success',
                            text: 'Respuesta agregada correctamente.!',
                            confirmButtonText: "Ok",
                            timer: 1500,
                            timerProgressBar: true,
                            didOpen: () => {
                                Swal.showLoading();
                                const timer = Swal.getPopup().querySelector("b");
                                timerInterval = setInterval(() => {
                                    timer.textContent = `${Swal.getTimerLeft()}`;
                                }, 100);
                            },
                            willClose: () => {
                                clearInterval(timerInterval);
                            }
                        }).then((confirmar) => {
                            if (confirmar.isConfirmed || confirmar.dismiss === Swal.DismissReason.timer) {
                                //reseteamos el formulario
                                $("#formulario_respuesta_preguntatres")[0].reset();
                                //esconemos el modal

                                //$('#search_list').val('');
                                //llamamos a la funcion para mostrar la tabla
                                //mostrar_lista_diputados();
                                // funciones para recargar la pagina luego de success
                                var reloadInterval = 1000; //page reload delay duration
                                //CARGAR PINNER
                                //LOADER SPINNER
                                const fgp_loader = document.createElement("fgp-loader");
                                        fgp_loader.innerHTML = /* html */ `
                                        <style>
                                            fgp-loader {
                                                font: calc((100vh + 100vw)/ 100) verdana;
                                                color: #777;
                                                background: #fffd;
                                                position: fixed;
                                                width: 100%;
                                                height: 100%;
                                                top: 0;
                                                left: 0;
                                                display: flex;
                                                justify-content: center;
                                                align-items: center;
                                                flex-direction: column;
                                                z-index: 9;
                                            }
                                            fgp-loader .spinner {
                                                font-size: calc(1vw / 2);
                                                border: 1em solid;
                                                border-top: 1em solid transparent;
                                                width: 30em;
                                                max-width: 5rem;
                                                height: 30em;
                                                max-height: 5rem;
                                                border-radius: 50%;
                                                animation: rotate 1s ease infinite;
                                            }
                                            @keyframes rotate {
                                                100% {
                                                    transform: rotate(360deg);
                                                }
                                            }
                                            fgp-loader .title {
                                                animation: opacity 2s infinite;
                                            }
                                            @keyframes opacity {
                                                50% {
                                                    opacity: 0.2;
                                                }
                                            }
                                        </style>
                                        <div class="spinner"></div>
                                        <h2 class="title">Cargando página...</h2>
                                        `;
                                        document.body.appendChild(fgp_loader);

                                        window.addEventListener("load", () => {
                                        fgp_loader.remove();
                                });
                                //FIN CARGAR SPINNER
                                location.reload();
                            }
                        });
                    } else if (result.isDenied) {
                        Swal.fire("Error de registro Pregunta General", "", "info");
                    }
                });
            }

        //MOSTRAR COMENTARIOS
        function mostrar_lista_comentarios() {
            //console.log('LISTANDO VOTOS');
            //PETICION AJAX
            $.ajax({
                type: 'POST',
                url: '{{ route('comentarios.lista') }}',
                data: "data",
                dataType: "json",
                beforeSend: function() {
                    //colocar spinner
                    $("#contenido_tabla_comentarios").html(
                        '<div class="cargando text-center"><i class="fa-solid fa-spinner fa-5x"></i></div>'
                    )
                },
                error: function(data) {
                    //mensaje de error
                    let errorJson = JSON.parse(data.responseText);
                    Swal.fire({
                        icon: "error",
                        title: errorJson.message,
                        text: "Ocurrió un error inesperado.!",
                        confirmButtonText: "Actualizar",
                        footer: '<a href="{{route('tapa') }}">Vuelva a intentarlo?</a>'
                    }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            Swal.fire("Actualizado!", "", "success");
                            location.reload();
                        } else if (result.isDenied) {
                            location.reload();
                        }
                    });
                },
                success: function(data) {
                    //mostrar datos
                    $("#contenido_tabla_comentarios").html(data.html)
                    //funcion editar curso
                    //btn_editar_voto();
                    //funcion eliminar curso
                    //btn_eliminar_curso();
                }
            });
        }

        //MOSTRAR PREGUNTAS
        function mostrar_lista_preguntas() {
            //console.log('LISTANDO VOTOS');
            //PETICION AJAX
            $.ajax({
                type: 'POST',
                url: '{{ route('preguntas.lista') }}',
                data: "data",
                dataType: "json",
                beforeSend: function() {
                    //colocar spinner
                    $("#contenido_tabla_preguntas").html(
                        '<div class="cargando text-center"><i class="fa-solid fa-spinner fa-5x"></i></div>'
                    )
                },
                error: function(data) {
                    //mensaje de error
                    let errorJson = JSON.parse(data.responseText);
                    Swal.fire({
                        icon: "error",
                        title: errorJson.message,
                        text: "Ocurrió un error inesperado.!",
                        confirmButtonText: "Actualizar",
                        footer: '<a href={{route('tapa') }}">Vuelva a intentarlo?</a>'
                    }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            Swal.fire("Actualizado!", "", "success");
                            location.reload();
                        } else if (result.isDenied) {
                            location.reload();
                        }
                    });
                },
                success: function(data) {
                    //mostrar datos
                    $("#contenido_tabla_preguntas").html(data.html)
                    //funcion editar pregunta
                    btn_editar_pregunta();
                    //funcion eliminar pregunta
                    btn_eliminar_pregunta();
                }
            });
        }
        //EDITAR PREGUNTA
        function btn_editar_pregunta()
        {
            $("#tabla_preguntas tbody").on('click', '.btn_editar_pregunta', function()
            {
                let id_pregunta = $(this).attr('data-id-pregunta');
                console.log(id_pregunta);
                //PETICION AJAX
                $.ajax({
                    method: "POST",
                    url: "{{ route('preguntas.obtener_pregunta') }}",
                    data: { id_pregunta: id_pregunta },
                    dataType: "json",

                    beforeSend: function() {
                    //colocar spinner

                },
                error: function(data) {
                    //mensaje de error
                    let errorJson = JSON.parse(data.responseText);
                    Swal.fire({
                        icon: "error",
                        title: errorJson.message,
                        text: "Ocurrió un error inesperado.!",
                        confirmButtonText: "Actualizar",
                        footer: '<a href="{{route('tapa') }}">Vuelva a intentarlo?</a>'
                    }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            Swal.fire("Actualizado!", "", "success");
                            location.reload();
                        } else if (result.isDenied) {
                            location.reload();
                        }
                    });

                },
                success: function(data) {
                    console.log(data);
                }

                });

            })
        }

        //ELIMINAR PREGUNTA
        function btn_eliminar_pregunta()
        {
            $("#tabla_preguntas tbody").on('click', '.boton_eliminar_pregunta', function(){
                let id_pregunta = $(this).attr('data-id-pregunta');
                console.log(id_pregunta);
            })
        }
        //previene el click en un link a
        function removeEvent(evt)
        {
            evt.preventDefault();
        }
        //--------------LIMITA LOS CARACTERES PARA EL COMENTARIO----------------
        $('#mensaje_ayuda').text('120 carácteres restantes');
             $("#modal_agregar_comentario").on("keyup", function()
             {
                if(!this.value){
                    document.getElementById('btn_modal_comentar').disabled = true;

                }
             });

                $('#modal_agregar_comentario').keydown(function () {

                    var max = 120;
                    var min = 0
                    var len = $(this).val().length;
                    var cero = max ;

                    if (len >= max) {
                        $('#mensaje_ayuda').text('Has llegado al límite');// Aquí enviamos el mensaje a mostrar
                        $('#mensaje_ayuda').addClass('text-danger');
                        $('#modal_agregar_comentario').addClass('is-invalid');
                        $('#btn_modal_comentar').addClass('disabled');
                        document.getElementById('btn_modal_comentar').disabled = true;
                    }
                    else {
                        var ch = max - len;
                        $('#mensaje_ayuda').text(ch + ' carácteres restantes');
                        $('#mensaje_ayuda').removeClass('text-danger');
                        $('#modal_agregar_comentario').removeClass('is-invalid');
                        $('#btn_modal_comentar').removeClass('disabled');
                        document.getElementById('btn_modal_comentar').disabled = false;
                    }
                });
             //--------------------------------------------------------------------------

             //--------------LIMITA LOS CARACTERES PARA LA RESPUESTA----------------
        // $('#mensaje_ayuda_respuestas').text('120 carácteres restantes');
        //      $("#modal_agregar_respuestas").on("keyup", function()
        //      {
        //         if(!this.value){
        //             document.getElementById('btn_modal_responder').disabled = true;
        //         }
        // });

                // $('#modal_agregar_respuestas').keydown(function () {

                //     var maxx = 120;
                //     var minn = 0
                //     var lenn = $(this).val().length;
                //     var cero = maxx ;

                //     if (lenn >= maxx) {
                //         $('#mensaje_ayuda_respuestas').text('Has llegado al límite');// Aquí enviamos el mensaje a mostrar
                //         $('#mensaje_ayuda_respuestas').addClass('text-danger');
                //         $('#modal_agregar_respuestas').addClass('is-invalid');
                //         $('#btn_modal_responder').addClass('disabled');
                //         document.getElementById('btn_modal_responder').disabled = true;
                //     }
                //     else {
                //         var chh = maxx - lenn;
                //         $('#mensaje_ayuda_respuestas').text(chh + ' carácteres restantes');
                //         $('#mensaje_ayuda_respuestas').removeClass('text-danger');
                //         $('#modal_agregar_respuestas').removeClass('is-invalid');
                //         $('#btn_modal_responder').removeClass('disabled');
                //         document.getElementById('btn_modal_responder').disabled = false;
                //     }
                // });
             //-----------------------------PREGUNTA GENERAL---------------------------------------------
             var ctxtres = document.getElementById('ChartpreguntaGeneral');
                var myCharttressino = new Chart(ctxtres, {
                type:"doughnut",
                data:{
                labels:['SI','NO'],
                datasets:[{
                        label:'Votos',
                        anchor: "center",
                        data:[
                        {{$contarvotopreguntatresSI}},
                        {{$contarvotopreguntatresNO}}

                        ],
                        backgroundColor:[
                            'rgb(51, 105, 30,0.7)',
                            'rgb(245, 0, 87,0.5)',


                        ],
                }]

                },
                options:
                {
                    y:
                    {
                    beginAtZero: true
                    }
                }

            });

            //--------------------------------------------------------------------------
            //-------------------------------PREGUNTA SI NO ----------------------------
             var ctxsino = document.getElementById('ChartpreguntaSiNo');
                var myChartsino = new Chart(ctxsino, {
                type:"pie",
                data:{
                labels:['SI','NO','Otros'],
                datasets:[{
                        label:'Votos',
                        anchor: "center",
                        data:[
                        {{$contarvotoSIpreguntasino}},
                        {{$contarvotoNOpreguntasino}},
                        {{$contarvotoOTROpreguntasino}}
                        ],
                        backgroundColor:[
                            'rgb(100, 221, 23,0.5)',
                            'rgb(255, 87, 51,0.5)',
                            'rgb(0, 184, 212,0.5)',

                        ],
                }]

                },
                options:
                {
                    y:
                    {
                    beginAtZero: true
                    }
                }

            });
            //--------------------------------------------------------------------------

             //-------------------------------PREGUNTA 1 ----------------------------
              var ctxuno = document.getElementById('Chartpreguntauno').getContext('2d');

                var myChartuno = new Chart(ctxuno, {
                type:"pie",
                data:{
                labels:['SI','NO'],
                datasets:[{
                        label:'Votos',
                        anchor: "center",
                        data:[
                        {{$contarpreguntaunoSI}},
                        {{$contarpreguntaunoNO}}

                        ],
                        backgroundColor:[
                            'rgb(27, 94, 32,0.5)',
                            'rgb(255, 193, 7,0.5)',

                        ],
                }]

                },
                options:
                {
                    y:
                    {
                    beginAtZero: true
                    }
                }

            });
            //--------------------------------------------------------------------------



        });//termina aqui



    </script>


</body>

</html>
