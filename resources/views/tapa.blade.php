<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Encuesta de Candidatos Provinciales">
    <meta name="author" content="Julio Andres 2024">

    <title>Encuesta</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset('Front/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('Front/css/bootstrap-icons.css')}}">

    <link rel="stylesheet" href="{{asset('Front/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('Front/css/owl.theme.default.min.css')}}">

    <link href="{{asset('Front/css/templatemo-pod-talk.css')}}" rel="stylesheet">

    <!--

TemplateMo 584 Pod Talk

https://templatemo.com/tm-584-pod-talk

-->
</head>

<body>


    <main>
      <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:700);


.texto-borde {
    font-family: 'Open Sans', sans-serif;
        font-size: 5vw;
  -webkit-text-stroke: 2px rgb(11, 52, 139);
  color: transparent;
}
        img {
          width: 30%;
        }
      </style>
      <img src="//source.unsplash.com/500x500?1" alt="">
      <img src="//source.unsplash.com/500x500?2" alt="">
      <img src="//source.unsplash.com/500x500?3" alt="">
    </main>

    <main>
        <section class="hero-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="text-center mb-2 pb-1">
                            <span class="texto-borde">Encuestas legislativas nacionales 2025</span>
                            <p class="text-danger"><strong>de forma anónima, sé parte de nuestra opinión.</strong></p>
                            <h4 class="text-white">LA PAMPA</h4>
                            <span id="ipdelcliente" style="display: none;"></span>
                            <a href="#section_2" class="btn custom-btn smoothscroll mt-3">Quiero Votar</a>
                        </div>

                        <!--IMAGENES DE CANDIDATOS-->
                        <div class="owl-carousel owl-theme">
                            <div class="owl-carousel-info-wrap item">
                                <img src="{{asset('Front/images/profile/Sergio-Zilliotto.png')}}"
                                    class="owl-carousel-image img-fluid" alt="">

                                <div class="owl-carousel-info">
                                    <h4 class="mb-2">
                                        Sergio Ziliotto
                                        <img src="{{asset('Front/images/verified.png')}}" class="owl-carousel-verified-image img-fluid"
                                            alt="">
                                    </h4>

                                    <span class="badge">Partido PJ</span>

                                </div>

                            </div>

                            <div class="owl-carousel-info-wrap item">
                                <img src="{{asset('Front/images/profile/Claudio-Acosta.png')}}"
                                    class="owl-carousel-image img-fluid" alt="">

                                <div class="owl-carousel-info">
                                    <h4 class="mb-2">
                                        Claudio Acosta
                                        <img src="{{asset('Front/images/verified.png')}}" class="owl-carousel-verified-image img-fluid"
                                            alt="">
                                    </h4>

                                    <span class="badge">Partido S/N</span>

                                </div>

                            </div>

                            <div class="owl-carousel-info-wrap item">
                                <img src="{{asset('Front/images/profile/Hector-Fazzini.png')}}"
                                    class="owl-carousel-image img-fluid" alt="">

                                <div class="owl-carousel-info">
                                    <h4 class="mb-2">
                                        Hector Fazzini
                                        <img src="{{asset('Front/images/verified.png')}}" class="owl-carousel-verified-image img-fluid"
                                            alt="">
                                    </h4>

                                    <span class="badge">Partido S/N</span>

                                </div>

                            </div>

                            <div class="owl-carousel-info-wrap item">
                                <img src="{{asset('Front/images/profile/Juan-Carlos-Tierno.png')}}" class="owl-carousel-image img-fluid" alt="">

                                <div class="owl-carousel-info">
                                    <h4 class="mb-2">
                                        Juan C. Tierno
                                        <img src="{{asset('Front/images/verified.png')}}" class="owl-carousel-verified-image img-fluid"
                                            alt="">
                                    </h4>

                                    <span class="badge">Partido S/N</span>
                                </div>

                            </div>

                            <div class="owl-carousel-info-wrap item">
                                <img src="{{asset('Front/images/profile/Luciano-Gonzalez-Cabiati.png')}}"
                                    class="owl-carousel-image img-fluid" alt="">

                                <div class="owl-carousel-info">
                                    <h4 class="mb-2">
                                        Luciano G. Cabiti
                                        <img src="{{asset('Front/images/verified.png')}}" class="owl-carousel-verified-image img-fluid"
                                            alt="">
                                    </h4>

                                    <span class="badge">Partido S/N</span>
                                </div>

                            </div>

                            <div class="owl-carousel-info-wrap item">
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

                    {{-- <div class="container">
                        <div class="card">
                            <p class="mb-0">Pocentaje: %</p>
                        </div>
                    </div> --}}

                    <div class="text-center mb-2 pb-1">
                        <a href="{{ route('senador.index') }}" class="btn custom-btn smoothscroll mt-3">Quiero Votar</a>
                    </div>

                    @foreach ($senadores as $row)
                    <div class="col-lg-6 col-12">
                        <div class="custom-block d-flex">
                            <div class="">
                                <div class="custom-block-icon-wrap">
                                    <div class="section-overlay"></div>
                                     <a href="#link" onclick="removeEvent(event);" class="custom-block-image-wrap">
                                        <img src="{{ $row->link }}" class="custom-block-image img-fluid"
                                            alt="">

                                        {{-- <a href="#" class="custom-block-icon">
                                            <i class="bi-play-fill"></i>
                                        </a>--}}
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
                        <a href="{{ route('diputado.index') }}" class="btn custom-btn smoothscroll mt-3">Quiero Votar</a>
                    </div>

                    @foreach ($diputados as $row)
                    <div class="col-lg-6 col-12">
                        <div class="custom-block d-flex">
                            <div class="">
                                <div class="custom-block-icon-wrap">
                                    <div class="section-overlay"></div>
                                     <a href="#link" onclick="removeEvent(event);" class="custom-block-image-wrap">
                                        <img src="{{ $row->link }}" class="custom-block-image img-fluid"
                                            alt="">

                                        {{-- <a href="#" class="custom-block-icon">
                                            <i class="bi-play-fill"></i>
                                        </a>--}}
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


                </div>
            </div>
        </section>

        <!--section en blanco-->
        <section>
            <div class="col-lg-12 col-12 mt-5">
                <div class="section-title-wrap mb-5">
                    <h4 class="section-title">Publicidad</h4>
                </div>
                <h3 class="text-primary">Publicite aquí, contáctese con nosotros.</h3>

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
                                <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                    <h2><span  class="bi-heart me-1 text-success" >
                                        @if ($row->id == "1")
                                        {{ $contarvotoimagencandidato1 }}
                                        @endif
                                        @if ($row->id == "2")
                                        {{ $contarvotoimagencandidato2 }}
                                        @endif

                                    </span></h2>
                                </div>

                                <button  class="btn custom-btn btn_agregar_encuesta" data-bs-toggle="modal" data-bs-target="#Encuesta_Modal" data-id="{{ $row->id }}" data-nombre="{{ $row->nombre }}" id="boton_agregar_encuesta">
                                    Votar
                                </button>
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
                        <sapn class="text-danger"><h1>En breve estará disponible.!</h1></spand>
                    @endif
                    <!--FIN--Pregunta con votacion y porcentaje-->

                    <!--FIN GRID PARA MOSTRAR LAS ENCUESTAS-->
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
        <section class="trending-podcast-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Preguntas</h4>
                        </div>
                    </div>
                    <div id="contenido_tabla_preguntas"> </div>

                    <div class="input-group mb-3">
                        <select class="form-select " aria-label="Preguntas" id="seleccionar_preguntas" >
                            <option selected value="0">Ver Preguntas</option>
                            @foreach ($preguntas as $row)
                                <option  value="{{ $row->id }}" data-id-respuesta="{{ $row->id }}">{{ $row->texto }}</option>
                            @endforeach
                        </select>
                        <button class="btn btn-outline-primary m-2"  type="button" id="btn_agregar_respuestas" data-bs-toggle="modal" data-bs-target="#Respuesta_Modal" >Agregar Respuesta</button>

                      </div>

                      <div class="card-body">
                        <div class="" id="cuerpo-tabla_preguntas"></div>
                      </div>




                </div>
            </div>
        </section>

        <!--SECCION COMENTARIOS-->
        <section class="trending-podcast-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Comentarios</h4>
                        </div>
                    </div>
                    <p>En ésta sección puede escribir un comentario de índole anónimo. Su comentario será revisado por el administrador para evaluar su aprobación.</p>
                    <p>Respete las normas y <strong class="text-danger">NÓ INCLUYA INSULTOS O ACUSACIONES SIN FUNDAMNETOS</strong></p>

                    <!--PANTALLA DIVIDIDA EN COMENTARIOS Y COMENTAR-->
                    <div class="row">
                        <!--COMENTARIOS-->
                        <div class="col-8">
                            <H1>COMENTARIOS</H1>
                            <div id="contenido_tabla_comentarios"></div>
                        </div>
                        <!--COMENTAR-->
                        <div class="col-4 text-center">
                            <H1>COMENTAR</H1>
                            <button  class="btn custom-btn" data-bs-toggle="modal" data-bs-target="#Comentario_Modal"  id="boton_agregar_comentario">
                                Comentar
                            </button>
                        </div>
                    </div>
                    <!--FIN PANTALLA DIVIDIDA EN COMENTARIOS Y COMENTAR-->

                </div>
            </div>
        </section>
    </main>

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
     <div class="modal" id="Comentario_Modal">
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
                        <textarea name="texto" id="modal_agregar_comentario" cols="50" rows="5" maxlength="80"></textarea>
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
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="btn_modal_comentar" >Comentar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!--FIN modal agregar comentario-->

    <!--modal agregar respuesta-->
    <div class="modal" id="Respuesta_Modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title" id="modal_titulo">Agregar Respuesta</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <form id="formulario_respuesta_pregunta">
                    <div class="modal-body">
                        <textarea name="texto" id="modal_agregar_respuestas" cols="50" rows="5" maxlength="80"></textarea>
                        <span class="help-block">
                            <p id="mensaje_ayuda_respuestas" class="help-block">Cuerpo del mensaje</p>
                          </span>
                        <input type="hidden" name="pregunta_id" id="modal_agregar_pregunta_id">
                        <input type="hidden" name="ip" id="modal_agregar_respuesta_ip" >
                        <input type="hidden" name="fecha" value="{{ $date }}" >
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
    </div>
    <!--FIN modal agregar comentario-->

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
    <script src="{{asset('Front/js/jquery.min.js')}}"></script>
    <script src="{{asset('Front/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('Front/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('Front/js/custom.js')}}"></script>

    <!--Sweet alert 2-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <!-- Obtenemos la IP -->
    <script>
        var ipdelCliente = document.getElementById('ipdelcliente')
        $.getJSON('https://api.ipify.org?format=json', function(data){
            ipdelCliente.innerText = data.ip
            //console.log(data.ip);
             });
        //csrf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


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

        $(document).ready(function ()
        {//inicio
            setTimeout(function() {
                $("#spinner_deinicio").fadeOut(1500);
             },4000);
            //console.log('INICIO DEL DOCUMENTO');
            document.getElementById('btn_modal_comentar').disabled = true;
            $("#btn_agregar_respuestas").attr('disabled', true);//deshabilitamos el boton del modal para responder
            $("#btn_agregar_respuestas").html('Deshabilitado');//deshabilitamos el boton del modal para responder
             mostrar_lista_comentarios();//muestra comentarios y los muestra en tabla
             //mostrar_lista_preguntas() //muestra todas las preguntas

             //$("#contenido_tabla_preguntas").hide();//escondemos la tabla de preguntas
             $("#btn_modal_votar").attr('disabled', true);//deshabilitamos el boton del modal para votar
             $("#btn_modal_comentar").attr('disabled', true);//deshabilitamos el boton del modal COMENTAR para COMENTAR
             $("#btn_modal_responder").attr('disabled', true);//deshabilitamos el boton del RESPUESTA para RESPONDER

             //AGREGAR COMENTARIO
             $("#btn_modal_comentar").on('click', function()
             {
                //console.log("CLICK EN COMENTAR PARA GRABAR");
                registrar_comentarios()
             });

             //CLICK EN SELECT PREGUNTAS
             $("#seleccionar_preguntas").on('change', function()
             {
                $("#cuerpo-tabla_preguntas").html("");
                let id_respuesta = $(this).val();
                //console.log("click en "+id_respuesta);
                ///calcular desde donde se leerá la base de datos
                if (id_respuesta == '0') {
                    $("#btn_agregar_respuestas").attr('disabled', true);//deshabilitamos el boton del modal para responder
                    $("#btn_agregar_respuestas").html('Deshabilitado');//deshabilitamos el boton del modal para responder
                } else {
                    var obtenemoselidparamostrar=$('#seleccionar_preguntas').val();
                    //console.log(x);
                    //let ponerenmodalelid = $(this).val();
                    $("#modal_agregar_pregunta_id").val(obtenemoselidparamostrar) ;
                    $("#btn_agregar_respuestas").attr('disabled', false);//habilitamos el boton del modal para responder
                    $("#btn_agregar_respuestas").html('Agregar Respuesta');//deshabilitamos el boton del modal para responder
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
                                                <span class="text-secondary opacity-25 ">-Respuesta- </span><span><strong>${todo.texto}</strong>  <span>(${todo.fecha})</span></span>
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

             //AGREGAR AL MODAL RESPUESTA LOS DATOS
             $("#btn_agregar_respuestas").on('click', function()
            {
                var ipdelCliente = document.getElementById('ipdelcliente').innerText
                $("#modal_agregar_respuesta_ip").val(ipdelCliente) ;
                //console.log('CLICK EN AGREGAR RESPUESTAS');
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

                console.log("candidato a votar " + id_candidato);
            });

            //cuando apretamos el boton en comentar
            $("#boton_agregar_comentario").on('click', function()
            {
                //console.log("CLICK EN COMENTAR...!")
                $('#modal_agregar_comentario_ip').val(ipdelCliente.innerText);
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
                                console.log('DATOS VACIOS');
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

            //FUNCION AGREGAR VOTOS
        function registrar_votos() {
            //console.log('registrar turno funcion');
            Swal.fire({
                title: "Está seguro ?",
                icon: 'warning',
                text: 'Se enviará la información a la base de datos',
                showCancelButton: true,
                confirmButtonText: "Sí, estoy seguro",
                cancelButtonText: `Cancelar`,
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
                            function reloadPage()
                            {
                                location.reload(true);
                            }
                            var intervalId = setInterval(reloadPage, reloadInterval);
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
                title: "Está seguro ?",
                icon: 'warning',
                text: 'Se enviará la información a la base de datos',
                showCancelButton: true,
                confirmButtonText: "Sí, estoy seguro",
                cancelButtonText: `Cancelar`,
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
                            $('#Comentario_Modal').modal('hide');
                            //$('#search_list').val('');
                            //llamamos a la funcion para mostrar la tabla
                            //mostrar_lista_diputados();
                            // funciones para recargar la pagina luego de success
                            var reloadInterval = 1000; //page reload delay duration
                            function reloadPage()
                            {
                                location.reload(true);
                            }
                            var intervalId = setInterval(reloadPage, reloadInterval);
                        }
                    });
                } else if (result.isDenied) {
                    Swal.fire("Error de registro", "", "info");
                }
            });

        }

            //FUNCION AGREGAR RESPUESTAS
            function registrar_respuestas() {
            //console.log('registrar turno funcion');
            Swal.fire({
                title: "Está seguro ?",
                icon: 'warning',
                text: 'Se enviará la información a la base de datos',
                showCancelButton: true,
                confirmButtonText: "Sí, estoy seguro",
                cancelButtonText: `Cancelar`,
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
                            function reloadPage()
                            {
                                location.reload(true);
                            }
                            var intervalId = setInterval(reloadPage, reloadInterval);
                        }
                    });
                } else if (result.isDenied) {
                    Swal.fire("Error de registro", "", "info");
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
                        footer: '<a href="#">Vuelva a intentarlo?</a>'
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
                        footer: '<a href="#">Vuelva a intentarlo?</a>'
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
                        footer: '<a href="#">Vuelva a intentarlo?</a>'
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
        $('#mensaje_ayuda_respuestas').text('120 carácteres restantes');
             $("#modal_agregar_respuestas").on("keyup", function()
             {
                if(!this.value){
                    document.getElementById('btn_modal_responder').disabled = true;
                }
             });

                $('#modal_agregar_respuestas').keydown(function () {

                    var maxx = 120;
                    var minn = 0
                    var lenn = $(this).val().length;
                    var cero = maxx ;

                    if (lenn >= maxx) {
                        $('#mensaje_ayuda_respuestas').text('Has llegado al límite');// Aquí enviamos el mensaje a mostrar
                        $('#mensaje_ayuda_respuestas').addClass('text-danger');
                        $('#modal_agregar_respuestas').addClass('is-invalid');
                        $('#btn_modal_responder').addClass('disabled');
                        document.getElementById('btn_modal_responder').disabled = true;
                    }
                    else {
                        var chh = maxx - lenn;
                        $('#mensaje_ayuda_respuestas').text(chh + ' carácteres restantes');
                        $('#mensaje_ayuda_respuestas').removeClass('text-danger');
                        $('#modal_agregar_respuestas').removeClass('is-invalid');
                        $('#btn_modal_responder').removeClass('disabled');
                        document.getElementById('btn_modal_responder').disabled = false;
                    }
                });
             //--------------------------------------------------------------------------

        });//termina aqui


    </script>


</body>

</html>
