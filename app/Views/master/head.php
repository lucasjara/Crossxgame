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
                                $rol = session()->get('Rol');
                                if (isset($id) && $id != "") {
                                    ?>
                                    <a data-toggle="modal">Saludos </a> <a style="font-weight: bold;"><?php echo session()->get('Nombre');?></a>
                                    <?php
                                    if ($rol == "admin") {
                                        ?>
                                        <a type="button" id="btnAdmin" href="/Crossxgame/public/adminindex" name="btnAdmin">| Modo Admin</a> 
                                        <?php
                                    }
                                    ?>
                                    <a type="button" id="btnMiCuentaCliente" name="btnMiCuentaCliente" href="/Crossxgame/public/clientecuenta" >| Mi cuenta</a>        
                                    <a type="button" id="btnCerrarSesion" href="" name="btnCerrarSesion">| Cerrar Sesión</a> 
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
                        <li><a href="">Consolas</a>
                            <ul class="sub-menu">
                                <li><a href="/Crossxgame/public/categoria?id_depto=35">Consola PS4</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=36">Consola PS3</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=37">Consola Switch</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=41">Consola Xbox One</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=39">Consola Xbox 360</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=0">Consola PSP</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=0">Consola Wii</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=40">Consola 3DS</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=0">Consola DS</a></li>
                                
                            </ul>
                        </li>
                        <li><a href="">Accesorios</a>
                            <ul class="sub-menu">
                                <li><a href="/Crossxgame/public/categoria?id_depto=28">Accesorios PS4</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=29">Accesorios PS3</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=32">Accesorios Switch</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=30">Accesorios Xbox One</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=0">Accesorios Xbox 360</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=0">Accesorios PSP</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=0">Accesorios PS Vita</a></li>
                                
                                <li><a href="/Crossxgame/public/categoria?id_depto=33">Accesorios Wii</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=0">Accesorios Wii U</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=0">Accesorios 3DS</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=0">Accesorios DS</a></li>
                                
                            </ul>
                        </li>

                        <li><a href="">Juegos Nuevos</a>
                            <ul class="sub-menu">
                                <li><a href="/Crossxgame/public/categoria?id_depto=1">Juegos PS4</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=3">Juegos PS3</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=5">Juegos Switch</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=7">Juegos Xbox One</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=9">Juegos Xbox 360</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=44">Juegos PS Vita</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=46">Juegos psp</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=48">Juegos Wii</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=50">Juegos Wii U</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=52">Juegos 3DS</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=54">Juegos DS</a></li>
                                
                            </ul>
                        </li>
                        <li><a href="">Juegos usados</a>
                            <ul class="sub-menu">
                                <li><a href="/Crossxgame/public/categoria?id_depto=2">Juegos PS4</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=4">Juegos PS3</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=6">Juegos Switch</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=8">Juegos Xbox One</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=10">Juegos Xbox 360</a></li> 
                                <li><a href="/Crossxgame/public/categoria?id_depto=0">Juegos PSP</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=0">Juegos PS Vita</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=0">Juegos Wii</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=0">Juegos Wii U</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=0">Juegos 3DS</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=0">Juegos DS</a></li>
                                
                            </ul>
                        </li>
                        <li><a href="">Figuras y otros</a>
                            <ul class="sub-menu">
                                <li><a href="/Crossxgame/public/categoria?id_depto=21">Funko Pop</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=0">Mug</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=34">Figuras</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=0">Poleras</a></li>
                                <li><a href="/Crossxgame/public/categoria?id_depto=0">llaveros y otros</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Servicios Tecnicos</a>
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
                     console.log(data.Estado);
                     if(data.Estado == "1"){

                        if(data.Rol =="admin"){

                            window.location = "/Crossxgame/public/adminindex";
                        }else{
                            location.reload();
                        }
                    }else if(data.Estado == "0"){
                        alert("Su cuenta esta deshabilitada");
                         var request = envia_ajax_servidor('/Crossxgame/public/Login/CerrarSistema');
                        request.done(function (data){
            
                         });
                 

                    }else{
                        alert("Usuario no encontrado");

                    }
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
