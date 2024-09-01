<!doctype html>
<html lang="es">

<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Encuesta Online">
        <meta name="author" content="J.A 2024">
        <link rel="shortcut icon" href="{{ asset('Front/images/manos.png') }}" type="image/x-icon">
        <!-- Google Tag Manager -->
        {{-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PSBXQ37N');</script> --}}
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
        {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-LFMB3P3V9K"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-LFMB3P3V9K');
        </script> --}}
    </head>
</head>

<body>

    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand me-lg-5 me-0" href="index.html">
                    <img src="{{asset('/Front/images/Consultoraelcentro.png')}}" class="logo-image img-fluid" alt="Consultora del Centro">
                    <span id="ipdelclientedebate"></span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tapa') }}">Volver</a>
                        </li>
                    </ul>

                    {{-- <div class="ms-4">
                        <a href="{{ route('tapa') }}" class="btn custom-btn custom-border-btn smoothscroll">Volver al Inicio</a>
                    </div> --}}
                </div>
            </div>
        </nav>


        <header class="site-header d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center">

                        <h2 class="mb-0">Tema de Debate</h2>
                    </div>

                </div>
            </div>
        </header>


        <section class="latest-podcast-section section-padding pb-0" id="section_2">
            <div class="container">
                <div class="row justify-content-center">
                    {{-- <textarea id="text" style="width:100%;height:120px;"></textarea> --}}
                    <div class="col-lg-10 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Tema de debate</h4>
                        </div>
                        <div class="row text-center "> <h5 class="text-primary">El debate expira en:</h5>
                            <h3 class="text-danger text-center" id="countdown-timer"></h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="custom-block-info">
                                    <div class="custom-block-top d-flex mb-1">

                                    </div>

                                    <h2 class="mb-2">Respuestas</h2>
                                     <!--COMENTAR-->
                                    <div class="col-12 text-center">

                                        <button  class="btn custom-btn" data-bs-toggle="modal" data-bs-target="#Comentario_Debate"  id="boton_agregar_comentario">
                                            Dejar un comentario
                                        </button>
                                    </div>
                                    <div class="container">
                                        <div class="card mt-3">
                                            <div
                                                class="table-responsive mt-3 p-3"
                                            >
                                                <table
                                                    class="table table-primary "
                                                >
                                                @if (count($debates) > 0)
                                                @foreach ($debates as $row)
                                                    <tbody>
                                                        <tr class="">
                                                            <td scope="row" id="tabla_id_debate" hidden>{{ $row->id }}</td>
                                                            <td scope="row" id="tabla_texto_debate"><h4>{{ $row->texto }}</h4></td>
                                                        </tr>
                                                    </tbody>
                                                @endforeach
                                                @else
                                                <span class="text-danger"><h1>Aún no se generó la pregunta.!</h1></span>
                                                @endif
                                                </table>
                                            </div>

                                        </div>
                                    </div>

                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">Comentarios</th>
                                            <th scope="col">Fecha</th>
                                          </tr>
                                        </thead>
                                        @if (count($respuestadebates) > 0)
                                        @foreach ($respuestadebates as $row)
                                            <tbody class="table-group-divider">
                                                <tr>
                                                    <td >{{ $row->texto }}</td>
                                                    <td>{{ $row->fecha }}</td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                        @else
                                        <span class="text-danger"><h1>Aún no hay comentarios.!</h1></span>
                                        @endif
                                    </table>
                                    {{  $respuestadebates->links()  }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!--modal agregar comentario-->
    <div class="modal" id="Comentario_Debate">
        <div class="modal-dialog modal-fullscreen-sm-down">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title" id="modal_titulo">Agregar una respuesta</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <form id="formulario_debate">
                    <div class="modal-body">
                        <div class="col-md-12">
                            <textarea name="texto" id="modal_agregar_debate_texto" cols="40" rows="5" maxlength="120" ></textarea>
                        </div>
                        <span class="help-block">
                            <p id="mensaje_ayuda_debate" class="help-block">Texto del mensaje</p>
                          </span>
                        <input type="hidden" name="ip" id="modal_agregar_debate_ip" >
                        <input type="hidden" name="navegador" id="modal_agregar_navegador" >
                        <input type="hidden" name="ciudad" id="modal_agregar_ciudad" >
                        <input type="hidden" name="region" id="modal_agregar_region" >
                        <input type="hidden" name="debate_id" id="modal_agregar_debate_id" >
                        <input type="hidden" name="pregunta" id="modal_agregar_debate_pregunta">
                        <input type="hidden" name="origen" value="DEBATE">
                        <br>
                        <input type="hidden" name="fecha" value="{{ $now }}" >
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="btn_modal_debate_comentar" >Responder</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!--FIN modal agregar comentario-->

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
         const ipdelClientedebate = document.getElementById('ipdelclientedebate')
       $.getJSON('http://ip-api.com/json', function(data)
       {
        // console.log(JSON.stringify(data, null, 2));
         ipdelClientedebate.innerText = data.query;
         $("#modal_agregar_debate_ip").val(data.query);
         //console.log(data.query);

            var es_chrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
            var es_firefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;
            var es_opera = navigator.userAgent.toLowerCase().indexOf('opera');
            var es_edge = navigator.userAgent.toLowerCase().indexOf('edge');
            if(es_firefox)
            {
                $("#modal_agregar_navegador").val("Firefox") ;
			    //console.log("Firefox");
            }
            if(es_chrome)
            {
                $("#modal_agregar_navegador").val("Chrome") ;
			    //console.log("Chrome");
            }

            if(es_opera)
            {
			    $("#modal_agregar_navegador").val("Opera") ;
            }
            if (es_edge)
            {
            //console.log("Edge")
            $("#modal_agregar_navegador").val("Edge") ;
            }
            $("#modal_agregar_ciudad").val(data.city);
            //console.log(data.city);
            $("#modal_agregar_region").val(data.country);
            //console.log(data.country);
       });

       $('#ipdelclientedebate').hide();//ocultamos la IP
        //  $.getJSON('https://api.ipify.org?format=json', function(data)
        //  {
        //          ipdelClientedebate.innerText = data.ip;

        //     $("#modal_agregar_debate_ip").val(data.ip) ;
        //     //$('#ipdelclientedebate').hide();//ocultamos la IP
        //      //console.log(data.ip);
        //  });

        //csrf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        //-------------------------------------------------------------------------
        // Contador del tiempo de expiracion
        const targetDate = new Date("2024-08-29 20:44").getTime();
        const countdown = setInterval(function() {
        const now = new Date().getTime();
        const distance = targetDate - now;
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the countdown on the webpage
        $("#countdown-timer").text(`${days}d ${hours}h ${minutes}m ${seconds}s`);

        if (distance < 0) {
            clearInterval(countdown);
            $("#countdown-timer").text("Expiró el tiempo, se agregará un nuevo debate proximamente.!");
            $("#boton_agregar_comentario").text("Deshabilitado");
            $("#boton_agregar_comentario").attr('disabled', true);
        }
        }, 1000);
        //-------------------------------------------------------------------------
        //deshabilitamos el boton comentar debate
        document.getElementById('btn_modal_debate_comentar').disabled = true;

        //CUANDO HACEMOS CLICK PARA REGISTRAR COMENTARIO DEL DEBATE
        $("#btn_modal_debate_comentar").on('click', function()
             {
                //console.log("CLICK EN COMENTAR EN DEBATE");
                //registrar_debate()
                ip = ipdelClientedebate.innerText //obtener valor del input
                    $.ajax({
                        type: "get",
                        url: '{{ route('debate.existeip') }}',
                        data: {
                            ip: ip
                        },
                        dataType: 'json',
                        success: function(respuesta) {
                            //console.log(respuesta);

                            if (respuesta.data.length == '')
                            {
                                console.log('se registro porque viene vacio');
                                registrar_debate();

                            } else
                            {
                                if (respuesta.data[0].ip == ip ) {
                                    //console.log("Se detecto una misma IP: "+respuesta.data[0].ip);
                                     Swal.fire
                                     ({
                                         position: "top-end",
                                         icon: "error",
                                         title: "Detectamos que yá hiciste un comentario.!",
                                         showConfirmButton: false,
                                         timer: 1500
                                     });
                                    //esconemos el modal
                                    $('#RespueComentario_Debate').modal('hide');

                                } else {
                                    console.log("respuesta tambien para registrar: "+respuesta.data[0].ip);
                                    //registrar_debate();
                                }
                            }

                        },
                        error: function (error) {
                            console.log(error);
                        }
                    });
        });

        //CUANDO HACEMOS CLICK EN COMENTAR TOMA EL ID Y EL TEXTO
        $("#boton_agregar_comentario").on('click', function()
             {
                var valor_id_preguntadebate = $("#tabla_id_debate").html();//toma el ID de la pregunta por SI/NO
                var valor_textopregunta_preguntadebate = $("#tabla_texto_debate").html();
                $("#modal_agregar_debate_id").val(valor_id_preguntadebate);
                $("#modal_agregar_debate_pregunta").val(valor_textopregunta_preguntadebate);
                $("#modal_agregar_debate_texto").val("");
                //console.log("toma el id y texto del debate");

                //console.log(valor_id_preguntadebate + "-" + valor_textopregunta_preguntadebate);
                //registrar_comentarios()
        });

        //HABILITAMOS O NO EL BOTON PARA COMENTAR EL DEBATE
        $('#modal_agregar_debate_texto').change(function (e)
        {
            var valor_id_preguntadebate = $("#modal_mostrar_pregunta_id_si_no").val();//toma el ID de la pregunta por SI/NO
            var valor_textopregunta_preguntadebate = $("#texto_preguntados_si_no").val();
            $("#modal_agregar_texto_si_no").val($(this).val());
            $("#modal_agregar_pregunta_id_si_no").val(valor_id_preguntadebate);
            $("#modal_agregar_pregunta_si_no").val(valor_textopregunta_preguntadebate);
            console.log($(this).val()) ;
                if ($(this).val() === "0"){
                    $("#btn_modal_debate_comentar").attr('disabled', true);
                }else{
                    $("#btn_modal_debate_comentar").attr('disabled', false);
                }
        });

        //--------------LIMITA LOS CARACTERES PARA EL COMENTARIO----------------
        $("#mensaje_ayuda_debate").text('120 carácteres restantes');
        $("#modal_agregar_debate_texto").on("keyup", function()
             {
                if(!this.value){
                    document.getElementById('btn_modal_debate_comentar').disabled = true;

                }
        });
        $("#modal_agregar_debate_texto").keydown(function () {

            var max = 120;
            var min = 0
            var len = $(this).val().length;
            var cero = max ;

            if (len >= max) {
                $("#mensaje_ayuda_debate").text('Has llegado al límite');// Aquí enviamos el mensaje a mostrar
                $("#mensaje_ayuda_debate").addClass("text-danger");
                $("#btn_modal_debate_comentar").addClass("is-invalid");
                $("#btn_modal_debate_comentar").addClass("disabled");
                document.getElementById("btn_modal_debate_comentar").disabled = true;
            }
            else {
                var ch = max - len;
                $('#mensaje_ayuda_debate').text(ch + ' carácteres restantes');
                $('#mensaje_ayuda_debate').removeClass('text-danger');
                $('#btn_modal_debate_comentar').removeClass('is-invalid');
                $('#btn_modal_debate_comentar').removeClass('disabled');
                document.getElementById('btn_modal_debate_comentar').disabled = false;
            }
        });
        //---------------------------------------------------------------------------------

         //FUNCION AGREGAR RESPUESTAS PREGUNTA GENERAL
         function registrar_debate()
            {
            //console.log('registrar turno funcion');
                Swal.fire({
                    title: "Haz click en comentar",
                    icon: 'success',
                    text: 'Se enviará la información a la base de datos',
                    //showCancelButton: true,
                    confirmButtonText: "Comentar",
                    // cancelButtonText: `Cancelar`,
                    showLoaderOnConfirm: true,
                    preConfirm: () => {
                        let token = $('meta[name="csrf-token"]').attr('content');
                        let formElement = document.getElementById("formulario_debate");
                        let formData = new FormData(formElement);
                        return fetch('{{ route('debate.registrar') }}', {
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
                                $("#formulario_debate")[0].reset();
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
                        Swal.fire("Error de registro en Debate", "", "info");
                    }
                });
            }


    </script>
    <script type="application/javascript" src="http://ipinfo.io/?format=jsonp&callback=getIP"></script>
</body>

</html>
