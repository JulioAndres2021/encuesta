<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Encuesta de Candidatos Provinciales">
    <meta name="author" content="Julio Andres 2024">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PSBXQ37N');</script>
    <!-- End Google Tag Manager -->

    <!-- Icono de una casa de Material Icons -->
    <title> Encuesta para la Provincia de La Pampa 2025</title>
    <link rel="shortcut icon" href="{{asset('Front/images/manos.png')}}" type="image/x-icon">
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

    <!--PORTADA DE CANDIDATOS-->
    <section>
        <!--CONTENEDOR DE 2 SECCIONES RESPONSIVE-->
        <div class="container ">
            <div class="row">
                <!--CONTENEDOR 1 RESPONSIVE-->
                <div class="col-sm-7">
                    <!--DIPUTADOS-->
                    <section>
                        <div class="col-lg-12 col-12">
                            <div class="section-title-wrap mb-1">
                                <h4 class="section-title">Diputados 2024</h4>
                            </div>
                        </div>
                        <!--TABLAS-->
                        <table class="table">
                            <tbody>
                                @foreach ($diputados as $row)
                                    <div class="col-lg-6 col-12 mb-4 mb-lg-0 mt-3">
                                        <div class="custom-block d-flex">
                                            <div class="">
                                                <div class="custom-block-icon-wrap ip_del_candidato_tabla">
                                                    <div class="section-overlay"></div>
                                                    <span id="ip_del_candidato_tabla">{{ $row->id }}</span>
                                                </div>
                                                <div class="mt-2 text-center">
                                                </div>
                                            </div>

                                            <div class="custom-block-info">
                                                <h5 class="mb-2" id="nombre_tabla"> {{ $row->nombre }} </h5>
                                                <div class="profile-block d-flex">
                                                    <img src="{{ $row->link }}"
                                                        class="profile-block-image img-fluid" alt="">
                                                    <p id="partido_tabla">{{ $row->partido }}</p>
                                                </div>

                                                <p class="mb-0" id="ciudad_tabla">{{ $row->ciudad }}</p>
                                                <div class="custom-block-bottom d-flex justify-content-between mt-1">
                                                    <span class="bi-heart me-1 text-success">
                                                        <span class="text-primary">
                                                            @if ($row->id == 1)
                                                            {{ $candidatodiputado1 }}
                                                            @endif
                                                            @if ($row->id == 2)
                                                            {{ $candidatodiputado2 }}
                                                            @endif
                                                            @if ($row->id == 3)
                                                            {{ $candidatodiputado3 }}
                                                            @endif
                                                            @if ($row->id == 4)
                                                            {{ $candidatodiputado4 }}
                                                            @endif

                                                        </span>
                                                    </span>
                                                </div>
                                                <p class="mb-2" id="provincia_tabla"><span><strong>{{ $row->provincia }}</strong></span></p>
                                                <p class="mb-2" id="descripcion_tabla"><span><strong>{{ $row->descripcion }}</strong></span></p>

                                            </div>

                                            <div class="d-flex flex-column ms-auto text-center">
                                                <a href="#diputado_modal" class="badge ms-auto valor_id_senador"
                                                    data-bs-toggle="modal" data-bs-target="#diputado_modal" data-id="{{ $row->id }}" data-nombre="{{ $row->nombre }}">
                                                    <i class="bi-heart"></i>
                                                </a>
                                                <span class="text-success"><strong>votar</strong></span>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                        <!--FIN TABLAS-->
                    </section>
                    <!--FIN DIPUTADOS--->
                </div>
                <!--FIN CONTENEDOR 1 RESPONSIVE-->

                <!--***************************-->

                <!--CONTENEDOR 2 RESPONSIVE-->

                <div class="col-sm-5 text-center">
                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-1">
                            <h4 class="section-title">Publicidad</h4>
                        </div>
                    </div>
                    <a class="btn btn-secondary" href="{{ url('/') }}">Volver</a>
                    <hr>
                </div>
                <!--FIN CONTENEDOR 2 RESPONSIVE-->
            </div>
        </div>
        <!--FIN CONTENEDOR DE 2 SECCIONES RESPONSIVE-->
        <div class="card-body contenido_tabla_diputado">
            <div id="ipguardada"></div>
            {{-- <div id="contenido_tabla"></div> --}}
          </div>
    </section>
    <!--FIN PORTADA DE CANDIDATOS-->

    <div class="container">

        {{-- MODALES --}}
        <div class="modal fade" id="diputado_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Voto</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="formulario_voto">
                        @csrf
                        <!--en este input es para saber si el usuario agrega o edita-->
                        <input type="hidden" name="tipo_formulario" id="tipo_formulario" value="">
                        <!--en este input es para saber el ID-->
                        <input type="hidden" name="id_voto_editar" id="id_voto_editar" value="">
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-body">
                                    <h3 id="ip-encontrada">
                                    <div class="mb-3">
                                        {{-- <img src="{{asset('Front/images/podcast/sinrostro.png')}}" class="custom-block-image img-fluid"
                                            alt=""> --}}
                                            <div class="modal-footer mt-2">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-primary" id="btn-registrar">Registrar</button>
                                            </div>

                                        {{-- <label class="mb-3">ID Candidadato</label> --}}
                                        <input type="hidden" class="form-control" name="diputado_id" id="id_del_candidato">
                                        
                                    </div>
                                    <div class="mb-3">
                                        {{-- <label for="ip" class="form-label">IP</label> --}}
                                        <input type="hidden" class="form-control" name="ip" id="ip"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        {{-- <label for="fecha" class="form-label">FECHA</label> --}}
                                        <input type="hidden" class="form-control" name="fecha" id="fecha"
                                            value="" required>
                                    </div>
                                    <div class="mb-3">
                                        {{-- <label for="ciudad" class="form-label">Created_at</label> --}}
                                        <input type="hidden" class="form-control" name="created_at" id="created_at" value="{{$now }}" >
                                    </div>

                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        {{-- FIN MODALES --}}
    </div>

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
                    <a class="navbar-brand" href="index.html">
                        {{-- <img src="{{asset('/Front/images/PJDigital-La-Pampa.jpg')}}" class="logo-image img-fluid" alt="templatemo pod talk"> --}}
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
                    <p class="copyright-text mb-0">Copyright © 2024 J A
                        <br><br>
                        Diseño: <a rel="nofollow" href="#" target="_parent">J.A</a>
                    </p> Distribución: <a rel="nofollow" href="https://www.hostinger.com.ar/" target="_blank">Hostinger</a>
                </div>
            </div>
        </div>
    </footer>



    <!-- JAVASCRIPT FILES -->
    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> --}}
    <script src="{{ asset('Front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('Front/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('Front/js/custom.js') }}"></script>
    <!--Sweet alert 2-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <!--Jquery Validator-->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <!--OBTENEMOS EL IP-->
    {{-- <script type="application/javascript" src="https://api.ipify.org?format=jsonp&callback=getIP"></script> --}}
    <script>
        $.getJSON('https://api.ipify.org?format=json', function(data) {
            //console.log(data.ip);
            $("#ip").val(data.ip);
            //$("#ip").hide();
            window.localStorage.setItem('IP', data.ip);

        });
        // var txt = "";
        // txt += "Navegador: " + navigator.appCodeName + ",";
        // txt += "Nombre: " + navigator.appName + ",";
        // txt += "Versión: " + navigator.appVersion + ",";
        // txt += "Cookies Enabled: " + navigator.cookieEnabled + ",";
        // txt += "Lenguage: " + navigator.language + ",";
        // txt += "Online: " + navigator.onLine + ",";
        // txt += "Plataforma: " + navigator.platform + ",";
        // txt += "User-agent header: " + navigator.userAgent + ",";
        // $("#ver-navegador").html(txt);
    </script>
    <script>
        //csrf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });



        //document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());


        //Inicia el documento/
        $(document).ready(function() {

            var name = localStorage.getItem('IP');
            $("#ip").val(name);
            console.log(name);
            $(".ip_del_candidato_tabla").hide();
            $("#notificacion_100").hide();
            $(".contenido_tabla_diputado").hide();//escondemos la tabla senador

        });
            //console.log('INICIANDO EL DOCUMENTO');
            mostrar_lista_diputados();

            //OBTENEMOS EL IP
            // solicitud por ajax para obtener el json con la ip
            // $.post("http://jsonip.appspot.com/",function(data){
            //     $("#ip").value(data.ip);
            // },"json");


            $(".btn_agregar_voto").click(function() {
                //reseteamos el formulario
                $("#formulario_voto")[0].reset();
                //console.log("AGREGAR VOTOS");

                //agregamos el valor 1 al input para saber que es para AGREGAR
                $('#tipo_formulario').val(1);
                //pasamos el ID vacio al input porque estoy AGREGANDO
                $('#id_voto_editar').val("");
                $('#id_del_candidato').val("ID");

                $('#fecha').val(f.getDate() + "/" + (f.getMonth() + 1) + "/" + f.getFullYear());
            });

            //VALIDACION DEL FORMULARIO
            $("#formulario_voto").validate({
                submitHandler: function(form) {
                    //SI VALIDA TODO BIEN LLAMAMOS A LA FUNCION
                    //verifica si la IP se encuentra en la base
                    ip = document.getElementById("ip").value //obtener valor del input
                   // idcandidato = document.getElementById("id_del_candidato").value //obtener valor del input

                    $.ajax({
                        type: "get",
                        url: '{{ route('diputado.existeip') }}',
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
                                    console.log("YA VOTASTE AL CANDIDATO");
                                    Swal.fire
                                    ({
                                        position: "top-end",
                                        icon: "error",
                                        title: "Ya votaste a Diputados.!",
                                        showConfirmButton: false,
                                        timer: 1500
                                });

                                    //esconemos el modal
                                    $('#diputado_modal').modal('hide');
                                    //$('#search_list').val('');

                                } else {
                                    console.log("los dos datos no coinciden, por lo cual se grabaran en la base ");
                                    //$("#btn-registrar").attr('enable','enabled');
                                    registrar_votos();
                                }

                                //console.log(respuesta)

                                //$("#ip-encontrada").html(respuesta.data[0].ip);
                                //$("#ip-encontrada").html('Ya votaste.!');
                                //
                            }

                            //$('#afis-letra').text(respuesta.data[0].fide);
                        },
                        error: function (error) {
                            console.log(error);
                        }
                    });

                }
            });

            //Obtengo el id cuando selecciono un candidato a VOTAR
                var editButtons = document.querySelectorAll(['a.valor_id_senador']);
                var f = new Date();

                editButtons.forEach(function(item, idx) {
                    item.addEventListener('click', function() {
                        var ipdelcandidato = document.getElementById('ip_del_candidato_tabla');
                        let candidato = $(this).attr('data-nombre');//obtenemos el ID del boton por el atributo
                        /*
                        Usaremos la forma que existe para leer los atributos data
                        que es dataset
                        */
                        //console.log(item.dataset.id);
                        //console.log(item.dataset.cargopolitico);
                        //console.log("AGREGAR VOTOS SENADOR");
                        //agregamos el valor 1 al input para saber que es para AGREGAR
                        $('#tipo_formulario').val(1);
                        //$('#votos').val(1);
                        $('#id_del_candidato').val(item.dataset.id);
                        $('.modal-title').html("Votar por: "+candidato)
                        //obtenemos la IP desde el localstorage para agregarla al modal
                        var name = localStorage.getItem('IP');
                        $("#ip").val(name);
                        //pasamos el ID vacio al input porque estoy AGREGANDO
                        $('#id_voto_editar').val(item.dataset.id);
                        $('#id_del_candidato').val(item.dataset.id);
                        $('#fecha').val(f.getDate() + "/" + (f.getMonth() + 1) + "/" + f.getFullYear());
                    });
                });

        //FUNCIONES


        function mostrar_lista_diputados() {
            //console.log('LISTANDO VOTOS');
            //PETICION AJAX
            $.ajax({
                type: 'POST',
                url: '{{ route('diputado.lista') }}',
                data: "data",
                dataType: "json",
                beforeSend: function() {
                    //colocar spinner
                    $("#contenido_tabla").html(
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
                    $("#contenido_tabla").html(data.html)
                    //funcion editar curso
                    //btn_editar_voto();
                    //funcion eliminar curso
                    //btn_eliminar_curso();
                }
            });
        }

        //FUNCION AGREGAR
        function registrar_votos() {
            //console.log('registrar turno funcion');
            Swal.fire({
                title: "Está seguro ?",
                icon: 'warning',
                text: 'Verifique los datos antes de enviar',
                showCancelButton: true,
                confirmButtonText: "Sí, estoy seguro",
                cancelButtonText: `Cancelar`,
                showLoaderOnConfirm: true,
                preConfirm: () => {
                    let token = $('meta[name="csrf-token"]').attr('content');
                    let formElement = document.getElementById("formulario_voto");
                    let formData = new FormData(formElement);
                    return fetch('{{ route('diputado.registrar') }}', {
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
                    console.log('VOTÓ CON EXITO.!')
                    Swal.fire({
                        title: "MUCHAS GRACIAS POR PARTICIPAR!",
                        icon: 'success',
                        text: 'Voto sumado correctamente.!',
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
                            $("#formulario_voto")[0].reset();
                            //esconemos el modal
                            $('#diputado_modal').modal('hide');
                            //$('#search_list').val('');
                            //llamamos a la funcion para mostrar la tabla
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

        //EDITAR VOTO
        function btn_editar_voto() {
            //console.log('Boton editar voto');
        }

    </script>
</body>

</html>
