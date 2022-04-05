<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href=" <?php echo base_url(); ?>/css/estilos_principal.css">

    <!------------------       ENLACES DEL ICONO DE WHATSAPP      ------------------------->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/whats.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/whats2.css">

    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;700&display=swap" rel="stylesheet">



    <!-----------------------   ENLACE DE ICONOS  ----------------------->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <title>ÑEKOCELL</title>
</head>

<body>

    <!----------------       FUNCION DE WHATSAPP      --------------------->

    
    <div class="nav-bottom">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <div class="popup-whatsapp fadeIn">
            <div class="content-whatsapp -top"><button type="button" class="closePopup">
                    <i class="material-icons icon-font-color">close</i>
                </button>

                <p> <img src="<?php echo base_url(); ?>/img/secretary.png" width="50"> Hola, ¿en que podemos ayudarle? </p>

            </div>
            <div class="content-whatsapp -bottom">
                <input class="whats-input" id="whats-in" type="text" Placeholder="Enviar mensaje..." />

                <button class="send-msPopup" id="send-btn" type="button">
                    <i class="material-icons icon-font-color--black">send</i>
                </button>

            </div>
        </div>
        <button type="button" id="whats-openPopup" class="whatsapp-button">
            <div class="float">
                <i class="fa fa-whatsapp my-float"></i></div>
        </button>
        <div class="circle-anime"></div>
    </div>
    <script src=" <?php echo base_url(); ?>/js/script2.js"></script>
<!----------------------------FIN DE ENLACE DE WASAPP---------------->


    <!--   ---------------------BARRA DE NAVEGACION  --------------------- -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">ÑEKOCELL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="icon ion-md-menu"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="#" id="home">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" id="portafolio">Celulares</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" id="Accesorios">Accesorios</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" id="electronicos">Accesorios electronicos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" id="contacto">Contactos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>/usuarios/login " id="ingreso">Ingresar</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-------------------------     CARRUSEL DE IMAGENES           ------------------>
    <div id="carousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/ima1.jpg" alt="">
                <div class="carousel-caption  d-md-block">
                    <h1>Los precios en SmartPhone</h1>
                    <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic atque eius sapiente e.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./img/ima2.jpg" alt="">
                <div class="carousel-caption  d-md-block">
                    <h1>Los precios Computadores</h1>
                    <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic atque eius sapiente e.</p>
                </div>
            </div>
            <div class="carousel-item">

                <div class="carousel-caption  d-md-block">
                    <h1>Los precios en SmartPhone</h1>
                    <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic atque eius sapiente e.</p>
                </div>
                <img src="./img/telefono3.jpg" alt="">
            </div>
        </div>
        <!--Controles NEXT y PREV-->

        <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

        <!-- Controles de indicadores-->

        <ol class="carousel-indicators">
            <li data-target="#carousel1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel1" data-slide-to="1"></li>
            <li data-target="#carousel1" data-slide-to="2"></li>
        </ol>
    </div>

    <!---------------        SECCION DE PORTAFOLIO              ----------------->
    <section id="portafolio">
        <div class="container-fluid">
            <div class="content-center">
                <h2>Ofrecemos productos de muy alta calidad tecnologica con los<b> mejores precios</b></h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum nihil dignissimos distinctiocommodi
                    hic eaque. Minus incidunt hic ad in earum exercitationem, labore sunt quis veniam tenetur voluptatem
                    qui non!</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="portafolio_container">
                        <div class="portafolio-details">
                            <a href="#">
                                <h2>Telefono Huawei P30</h2>
                            </a>
                            <a href="#">
                                <p>Lorem ipsum, orum totam um?</p>
                            </a>
                        </div>
                        <img src="img/funda5.jpg" class="img-fluid" alt="portafolio1">
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <div class="portafolio_container">
                        <div class="portafolio-details">

                            <a href="#">
                                <h2>Telefono Huawei P30</h2>
                            </a>
                            <a href="#">
                                <p>Lorem ipsum, orum totam um?</p>
                            </a>
                        </div>
                        <img src="img/funda5.jpg" class="img-fluid" alt="portafolio1">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portafolio_container">
                        <div class="portafolio-details">

                            <a href="#">
                                <h2>Telefono Huawei P30</h2>
                            </a>
                            <a href="#">
                                <p>Lorem ipsum, orum totam um?</p>
                            </a>
                        </div>
                        <img src="img/funda5.jpg" class="img-fluid" alt="portafolio1">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="portafolio_container">
                        <div class="portafolio-details">

                            <a href="#">
                                <h2>Telefono Huawei P30</h2>
                            </a>
                            <a href="#">
                                <p>Lorem ipsum, orum totam um?</p>
                            </a>
                        </div>
                        <img src="img/funda5.jpg" class="img-fluid" alt="portafolio1">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portafolio_container">
                        <div class="portafolio-details">

                            <a href="#">
                                <h2>Telefono Huawei P30</h2>
                            </a>
                            <a href="#">
                                <p>Lorem ipsum, orum totam um?</p>
                            </a>
                        </div>
                        <img src="img/funda5.jpg" class="img-fluid" alt="portafolio1">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portafolio_container">
                        <div class="portafolio-details">

                            <a href="#">
                                <h2>Telefono Huawei P30</h2>
                            </a>
                            <a href="#">
                                <p>Lorem ipsum, orum totam um?</p>
                            </a>
                        </div>
                        <img src="img/funda3.jpg" class="img-fluid" alt="portafolio1">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portafolio">
        <div class="container-fluid">
            <div class="content-center">
                <h2>En <b> ÑEKOCELL </b> su compra es 100% segura y productos 100% reales</h2>

            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="img/pago-seguro.png" class="img-fluid" alt="pago">
                </div>
                <div class="col-md-3">
                    <img src="img/equipos-libres.png" class="img-fluid" alt="equiposLibre">
                </div>
                <div class="col-md-3">
                    <img src="img/envios.png" class="img-fluid" alt="seguridad">
                </div>
                <div class="col-md-3">
                    <img src="img/garantia.jpg" class="img-fluid" alt="garantia">
                </div>
            </div>
        </div>
    </section>
    <!------------------       SECCION FORMULARIO DE CONTACTO        ----------------------->
    <section id="contacto">
        <div class="container">
            <div class="row">
                <div class="col-md-6 topmargin-sm">
                    <h3>Tienes alguna duda o pregunta?<b>Envianos un Correo</b></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel nesciunt magnam eveniet
                        reprehenderit ab recusandae, quos explicabo doloremque corrupti sed in accusantium accusamus
                        delectus quae debitis non nihil nam dolores.</p>
                </div>
                <div class="col-md-6 topmargin-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="" placeholder="Apellidos">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <form class="form-group" action="">
                                <input type="email" class="form-control" id="" placeholder="Email">
                            </form>
                        </div>
                        <div class="col-md-12">
                            <form class="form-group" action="">
                                <input type="text" class="form-control" id="" placeholder="Escriba su solicitud">
                            </form>
                        </div>
                        <div class="col-md-12">
                            <form class="form-group" action="">
                                <input type="number" class="form-control" id=""
                                    placeholder="Digite su numero de contacto(opcional)">
                            </form>
                        </div>
                        <div class="col-md-12">
                            <a href="#" class="btn btn-dark full-width">Enviar contacto </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="footer" class="bg-primary">
        <div class="container">
            <a class="logo-brand" href="#">ÑEKOCELL</a>
            <ul>
                <li class="list-inline-item footer-menu"><a href="#">Inicio</a></li>
                <li class="list-inline-item footer-menu"><a href="#">Celulares</a></li>
                <li class="list-inline-item footer-menu"><a href="#">Accesorios</a></li>
                <li class="list-inline-item footer-menu"><a href="#">Accesorios electronicos</a></li>
                <li class="list-inline-item footer-menu"><a href="login.php">Ingresar</a></li>
            </ul>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="icon ion-logo-whatsapp"></i></a></li>
            </ul>
            <small>2020 creadores BraidSoft</small>
        </div>

    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>