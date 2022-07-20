<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Restaurante</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/index.css">
        <script src="https://kit.fontawesome.com/eee8b9a576.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>

            <div class="flex-container">
                <div class="div__img-container">
                    <img src="img/logorestaurante.webp">
                </div>

                <h1>Restaurante</h1>

                <nav class="nav-container">
                    <i class="fa-solid fa-bars" id="btnmenu"></i>
                    <ul class="nav-container__item" id="menu">
                        <li class="item__accion"><a href="#">Entrantes</a></li>
                        <li class="item__accion"><a href="#">Platos de carne</a></li>
                        <li class="item__accion"><a href="#">Platos de pescado</a></li>
                        <li class="item__accion"><a href="#">Platos veganos</a></li>
                        <li class="item__accion"><a href="#">Platos vegetarianos</a></li>
                        <li class="item__accion"><a href="#">Platos varios</a></li>
                        <li class="item__accion"><a href="#">Postres</a></li>
                        <li class="item__accion"><a href="#">Bebidas</a></li>
                    </ul>
                </nav>
              
            </div>
        </header>

        <main>

            <div class="container__slider">

                <ul class="slider">
                    <li id="slide1">
                        <img src="img/restaurante.jpeg">
                    </li>

                    <li id="slide2">
                        <img src="img/bebida.jpg">
                    </li>

                    <li id="slide3">
                        <img src="img/carnes.jpg">
                    </li>

                    <li id="slide4">
                        <img src="img/pesca.jpg">
                    </li>

                    <li id="slide5">
                        <img src="img/veganos.jpg">
                    </li>

                    <li id="slide6">
                        <img src="img/vegetarianos.jpg">
                    </li>

                </ul>

                <ul class="slider__menu">
                    <li><a href="#slide1"></a></li>
                    <li><a href="#slide2"></a></li>
                    <li><a href="#slide3"></a></li>
                    <li><a href="#slide4"></a></li>
                    <li><a href="#slide5"></a></li>
                    <li><a href="#slide6"></a></li>
                </ul>
            </div>

            <section class="descripcion">
                <p>Este restaurante es un bar de tapeo situado en la localidad de Almería y usted podrá disfrutar de numerosas comidas ricas
                    también tenemos platos veganos y vegetarianos para la gente vegana y vegetariana.
                </p>
            </section>

        </main>

        <footer>
            <ul class="contacto">
                <li><a href="https://www.instagram.com/grupocosentino/"><i class="fa-brands fa-instagram"></i>cuentaPrueba</i></a></li>
                <li><a href="https://www.facebook.com/GrupoCosentino/"><i class="fa-brands fa-facebook"></i> cuentaPrueba</a></li>
                <li><a href="php/contacto.php"><i class="fa-solid fa-envelope"></i>Contáctanos</a></li>
            </ul>
        </footer>

        <script src="js/menu.js"></script>
    </body>
</html>