<?php ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>CrossXgames</title>
    <meta charset="UTF-8">
    <meta name="description">
    <meta name="keywords">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="public/crossxgame/img/favicon.ico" rel="shortcut icon" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


    <!-- Stylesheets -->
    <link rel="stylesheet" href="public/crossxgame/css/bootstrap.min.css" />
    <link rel="stylesheet" href="public/crossxgame/css/font-awesome.min.css" />
    <link rel="stylesheet" href="public/crossxgame/css/flaticon.css" />
    <link rel="stylesheet" href="public/crossxgame/css/slicknav.min.css" />
    <link rel="stylesheet" href="public/crossxgame/css/jquery-ui.min.css" />
    <link rel="stylesheet" href="public/crossxgame/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="public/crossxgame/css/animate.css" />
    <link rel="stylesheet" href="public/crossxgame/css/style.css" />

    <!-- JS modal -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Header section -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 text-center text-lg-left">
                        <!-- logo -->
                        <a href="/Crossxgame/public/prueba" class="site-logo">
                            <img src="public/crossxgame/img/logo.png" alt="">
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <form id="formBusqueda" class="header-search-form" method="POST">
                            <input type="text" name="txtBuscador" id="txtBuscador" placeholder="Busca un articulo....">
                            <button type="button" id="btnBuscar" name="btnBuscar"><i class="flaticon-search"></i></button>
                        </form>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="user-panel">
                                <div class="up-item">
                                    <i class="flaticon-profile"></i>
                                    <!--aqui pon el modal mijo!!!!-->
                                    <?php

                                    if (isset($id) && $id != "") {
                                    ?>
                                       <a data-toggle="modal">Saludos </a> <a style="font-weight: bold;"><?php echo session()->get('Nombre');?></a>
                                    <?php
                                    if (session()->get('Email') == "crossxgame@gmail.com") {
                                    ?>
                                       <a type="button" id="btnMiCuenta" name="btnMiCuenta" href="/Crossxgame/public/adminproducto">--Mi cuenta</a>
                                    <?php }else{ ?> 

                                        <a type="button" id="btnMiCuentaCliente" name="btnMiCuentaCliente">--Mi cuenta</a>    
                                    <?php } ?>     
                                       <a type="button" id="btnCerrarSesion" name="btnCerrarSesion">--Cerrar Sesión</a> 
                                    <?php
                                    } else {
                                    ?>
                                        <a data-toggle="modal" data-target="#ModalLogin">Ingresar o Crear cuenta</a>
                                    <?php
                                    }
                                    ?>
                                </div>
                            <form class="contact-form" id="miFormLogin">
                                <!-- Modal -->
                                <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Iniciar sesión</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="inputEmail4">Email</label>
                                                            <input id="txtEmailModal" name="emailLogin" type="email" class="form-control" placeholder="Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputPassword4">Contraseña</label>
                                                            <input id="txtContraseñaModal" name="contraseñaLogin" type="password" class="form-control" placeholder="Contraseña">
                                                        </div>
                                                        <div class="up-item">
                                                            <i class="breadcrumb-item">
                                                                <a href="/Crossxgame/public/registro">Crear cuenta </a></i>
                                                        </div>

                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                    <button type="button" id="btnIngresar" name="btnIngresar" class="btn btn-primary">Ingresar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="main-navbar">
            <div class="container">
                <!-- menu -->
                <ul class="main-menu">
                    <li><a href="/Crossxgame/public/prueba">Inicio</a></li>
                    <li><a href="/Crossxgame/public/Categoria">Consolas</a>
                        <ul class="sub-menu">
                            <li><a href="/Crossxgame/public/producto">Consola PS4</a></li>
                            <li><a href="#">Consola PS3</a></li>
                            <li><a href="#">Consola PSP</a></li>
                            <li><a href="#">Consola Switch</a></li>
                            <li><a href="#">Consola Wii</a></li>
                            <li><a href="#">Consola 3DS</a></li>
                            <li><a href="#">Consola DS</a></li>
                            <li><a href="#">Consola Xbox One</a></li>
                            <li><a href="#">Consola Xbox 360</a></li>
                        </ul>
                    </li>
                    <li><a href="/Crossxgame/public/Categoria">Accesorios</a>
                        <ul class="sub-menu">
                            <li><a href="/Crossxgame/public/producto">Accesorios PS4</a></li>
                            <li><a href="#">Accesorios PS3</a></li>
                            <li><a href="#">Accesorios PSP</a></li>
                            <li><a href="#">Accesorios PS Vita</a></li>
                            <li><a href="#">Accesorios Switch</a></li>
                            <li><a href="#">Accesorios Wii</a></li>
                            <li><a href="#">Accesorios Wii U</a></li>
                            <li><a href="#">Accesorios 3DS</a></li>
                            <li><a href="#">Accesorios DS</a></li>
                            <li><a href="#">Accesorios Xbox One</a></li>
                            <li><a href="#">Accesorios Xbox 360</a></li>
                        </ul>
                    </li>

                    <li><a href="/Crossxgame/public/Categoria">Juegos Nuevos</a>
                        <ul class="sub-menu">
                            <li><a href="/Crossxgame/public/producto">Juegos PS4</a></li>
                            <li><a href="#">Juegos PS3</a></li>
                            <li><a href="#">Juegos PSP</a></li>
                            <li><a href="#">Juegos PS Vita</a></li>
                            <li><a href="#">Juegos Switch</a></li>
                            <li><a href="#">Juegos Wii</a></li>
                            <li><a href="#">Juegos Wii U</a></li>
                            <li><a href="#">Juegos 3DS</a></li>
                            <li><a href="#">Juegos DS</a></li>
                            <li><a href="#">Juegos Xbox One</a></li>
                            <li><a href="#">Juegos Xbox 360</a></li>
                        </ul>
                    </li>
                    <li><a href="/Crossxgame/public/Categoria">Juegos usados</a>
                        <ul class="sub-menu">
                            <li><a href="/Crossxgame/public/producto">Juegos PS4</a></li>
                            <li><a href="#">Juegos PS3</a></li>
                            <li><a href="#">Juegos PSP</a></li>
                            <li><a href="#">Juegos PS Vita</a></li>
                            <li><a href="#">Juegos Switch</a></li>
                            <li><a href="#">Juegos Wii</a></li>
                            <li><a href="#">Juegos Wii U</a></li>
                            <li><a href="#">Juegos 3DS</a></li>
                            <li><a href="#">Juegos DS</a></li>
                            <li><a href="#">Juegos Xbox One</a></li>
                            <li><a href="#">Juegos Xbox 360</a></li>
                        </ul>
                    </li>
                    <li><a href="/Crossxgame/public/Categoria">Figuras y otros
                            <!--    <span class="new">New</span> --></a>
                        <ul class="sub-menu">
                            <li><a href="#">Funko Pop</a></li>
                            <li><a href="#">Mug</a></li>
                            <li><a href="#">Figuras</a></li>
                            <li><a href="#">Poleras</a></li>
                            <li><a href="#">Billeteras</a></li>
                        </ul>
                    </li>
                    <li><a href="/Crossxgame/public/Categoria">Servicios Tecnicos</a>
                        <ul class="sub-menu">
                            <li><a href="#">Servicios PS4</a></li>
                            <li><a href="#">Servicios PS3</a></li>
                            <li><a href="#">Servicios PSP</a></li>
                            <li><a href="#">Servicios PS Vita</a></li>
                            <li><a href="#">Servicios Switch</a></li>
                            <li><a href="#">Servicios Wii</a></li>
                            <li><a href="#">Servicios Wii U</a></li>
                            <li><a href="#">Servicios 3DS</a></li>
                            <li><a href="#">Servicios DS</a></li>
                            <li><a href="#">Servicios Xbox One</a></li>
                            <li><a href="#">Servicios Xbox 360</a></li>
                        </ul>
                    <li><a href="/Crossxgame/public/contacto">Contactanos</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Header section end -->
    <script type="text/javascript">
        function envia_ajax_servidor(url, data) {
            var variable = $.ajax({
                url: url,
                method: 'POST',
                data: data,
                'dataSrc': 'data',
                dataType: 'json'
            })
            return variable;
        }

        function limpiarFormulario() {
            document.getElementById("miFormLogin").reset();
        }
        $("#btnIngresar").on("click", function() {
            var array = {
                emailLogin: $("#txtEmailModal").val(),
                contraseñaLogin: $("#txtContraseñaModal").val()
            };
            var request = envia_ajax_servidor('/Crossxgame/public/Login/LoginSistema', array);
            request.done(function(data) {
                if(data == "1"){
                    location.reload();
                }else if(data == "0"){
                    alert("Su cuenta esta deshabilitada");
                }else{
                    alert("Usuario no encontrado");
                }
                console.log(data);
            });
        });

        $("#btnCerrarSesion").on("click", function() {
            var request = envia_ajax_servidor('/Crossxgame/public/Login/CerrarSistema');
            request.done(function(data) {
                //limpiarFormulario();
                console.log(data);
                //Recargar la pagina cuando hace el login
                location.reload();
            });
        });

         $("#btnBuscar").on("click", function(){
              $("#formBusqueda").attr("action", "resultado" + "?nombre="+$("#txtBuscador").val());
             
               $("#formBusqueda").submit(); 
         });
        

    </script>
