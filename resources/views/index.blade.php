<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marius | Empresa de Reformas</title>
    <link rel="stylesheet" href="/bluesky/css/bootstrap.min.css">
    <link rel="stylesheet" href="/bluesky/css/style.css">
    <link rel="stylesheet" href="/bluesky/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
</head>

<body>
    <div id="header" class="header">
        <nav class="navbar navbar-expand-lg navbar-light text-capitalize">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="/bluesky/imgs/logo.png" alt="#" />
                    Marius
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="show-menu">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">Sobre Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#service">Nuestros Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#hiw">Como Trabajamos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div id="home" class="slider">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#main_slider" data-slide-to="0" class="active"></li>
                <li data-target="#main_slider" data-slide-to="1"></li>
                {{-- <li data-target="#main_slider" data-slide-to="2"></li> --}}
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/bluesky/imgs/slide1.jpg" alt="slider_img">
                    <div class="ovarlay_slide_cont">
                        <h2>Amamos Trabajar</h2>
                        <h4>Servicio de Reforma</h4>
                        <p></p>
                        <a class="blue_bt" href="#service">Mira Nuestros Servicios</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/bluesky/imgs/slide1.jpg" alt="slider_img">
                    <div class="ovarlay_slide_cont">
                        <h2>Amamos Trabajar</h2>
                        <h4>Servicio de Mantenimiento</h4>
                        <p></p>
                        <a class="blue_bt" href="#service">Mira Nuestros Servicios</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                <img src="/bluesky/imgs/left.png" alt="#" />
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                <img src="/bluesky/imgs/right.png" alt="#" />
            </a>
        </div>
    </div>
    <div id="about" class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h4>SOBRE MARIUS</h4>
                    <h3 style="text-transform: none !important">Nosotros construimos para su comodidad</h3>
                    <p>Nuestra Misión: Acompañarte en el proceso de planificación del servicio requerido.</p>
                    <p>Nuestra Vision: Ofrecerte una experiencia única de servicio.</p>
                </div>
                <div class="col-md-6 offset-md-1">
                    <div class="full text_align_center">
                        <img class="img-responsive" src="/bluesky/imgs/about.png" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="hiw" class="hiw_section layout_padding" style="background: #1a2428;">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h3 class="white_font">Como Trabajamos</h3>
                    <p class="white_font">Con tal de conocer el servicio requerido, realizamos una reunión con el
                        cliente,
                        en la que nos informamos sobre sus necesidades, objetivos, fuentes de inspiración y cualquier
                        detalle que nos ayude a tener una idea precisa de lo que necesita. En esta estapa, si el cliente
                        lo requiere, podemos aportar ideas sobre cómo enfocar las áreas que no tenga claras sobre el
                        desarrollo del servicio. Nos gusta aconsejar y ayudar a nuestros clientes a conseguir el mejor
                        trabajo posible.</p>
                </div>
                <div class="col-md-5">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img class="margin_top_30 img-responsive" src="/bluesky/imgs/blog1.jpg" alt="#" />
                    <h3 class="blog_head">Reserva Online</h3>
                </div>
                <div class="col-md-4">
                    <img class="margin_top_30 img-responsive" src="/bluesky/imgs/blog2.jpg" alt="#" />
                    <h3 class="blog_head">Confirmación</h3>
                </div>
                <div class="col-md-4">
                    <img class="margin_top_30 img-responsive" src="/bluesky/imgs/blog3.jpg" alt="#" />
                    <h3 class="blog_head">Servicio</h3>
                </div>
            </div>
        </div>
    </div>
    <div id="service" class="hiw_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h3>Nuestros Servicios</h3>
                    <p>Diseñamos y ejecutamos su vivienda de forma integral. Consulte presupuesto sin compromiso.
                        Realizamos mobiliario para todo tipo de viviendas, locales comerciales y restaurantes.
                        Proyectos de reforma. Mobiliario a medida. Construcción. Servicios: Consulta presupuesto,
                        Proyectos integrales.</p>
                </div>
                <div class="col-md-5">
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 service_blog">
                    <img class="margin_top_30 img-responsive" src="/bluesky/imgs/s1.jpg" alt="#" />
                    {{-- <h3 class="blog_head">Reserva Online</h3> --}}
                </div>
                <div class="col-md-4 service_blog">
                    <img class="margin_top_30 img-responsive" src="/bluesky/imgs/s2.jpg" alt="#" />
                    {{-- <h3 class="blog_head">Confirmación</h3> --}}
                </div>
                <div class="col-md-4 service_blog">
                    <img class="margin_top_30 img-responsive" src="/bluesky/imgs/s3.jpg" alt="#" />
                    {{-- <h3 class="blog_head">Nuestros Servicios</h3> --}}
                </div>
                <div class="col-md-4 service_blog">
                    <img class="margin_top_30 img-responsive" src="/bluesky/imgs/s4.jpg" alt="#" />
                    {{-- <h3 class="blog_head">Nuestros Servicios</h3> --}}
                </div>
                <div class="col-md-4 service_blog">
                    <img class="margin_top_30 img-responsive" src="/bluesky/imgs/s5.jpg" alt="#" />
                    {{-- <h3 class="blog_head">Nuestros Servicios</h3> --}}
                </div>
            </div>
        </div>
    </div>
    <div id="contact" class="hiw_section layout_padding" style="background: #eeefef;">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h3>Reservas Online</h3>
                </div>
                <div class="col-md-5">
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="contact-form">
                        <form>
                            <input type="text" placeholder="Nombre" />
                            <input type="email" placeholder="Correo Electrónico" />
                            <input type="text" placeholder="Teléfono" />
                            <input type="text" placeholder="Tipo de Servicio">
                            <textarea placeholder="Mensaje"></textarea>
                            <input type="submit" value="Reservar">
                        </form>
                    </div>
                </div>
                <div class="col-md-5 text_align_center">
                    <img class="img-responsive" src="/bluesky/imgs/man_cartoon.png" alt="#" />
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="footer_blog_section">
                        <a class="navbar-brand" href="#">
                            <img src="/bluesky/imgs/logo.png" alt="#" />
                            Marius
                        </a>
                        <p style="margin-top: 5px;"></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="item">
                        <h4 class="text-uppercase">Marius</h4>
                        <ul>
                            <li><a href="#home">Inicio</a></li>
                            <li><a href="#about">Sobre Nosotros</a></li>
                            <li><a href="#service">Nuestros Servicios</a></li>
                            <li><a href="#hiw">Como Trabajamos</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="item">
                        <h4 class="text-uppercase">Información de Contacto</h4>
                        <p><strong>Dirección:</strong></p>
                        <p><img src="/bluesky/imgs/phone_icon.png" alt="#" /> Getafe, Madrid</p>
                        <p><strong>Teléfono:</strong></p>
                        <p><img src="/bluesky/imgs/location.png" alt="#" /> 602 49 15 52</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright text-center">
            <p>Copyright {{ date('Y') }} Desarrollado por: <a href="https://rafaelortegaweb.herokuapp.com/">Rafael
                    A. Ortega</a></p>
        </div>
    </footer>
    <script src="/bluesky/js/jquery-3.3.1.min.js"></script>
    <script src="/bluesky/js/bootstrap.min.js"></script>
    <script>
        $(function() {

            'use strict';

            var winH = $(window).height();

            $('header').height(winH);

            $('header .container > div').css('top', (winH / 2) - ($('header .container > div').height() / 2));

            $('.navbar ul li a.search').on('click', function(e) {
                e.preventDefault();
            });
            $('.navbar a.search').on('click', function() {
                $('.navbar form').fadeToggle();
            });

            $('.navbar ul.navbar-nav li a').on('click', function(e) {

                var getAttr = $(this).attr('href');

                e.preventDefault();
                $('html').animate({
                    scrollTop: $(getAttr).offset().top
                }, 1000);
            });
        })
    </script>
</body>

</html>
