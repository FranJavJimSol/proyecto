<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inicio</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
        <script src="https://kit.fontawesome.com/18aac5a306.js" crossorigin="anonymous"></script>
        <link href="./Public/Css/custom.css" rel="stylesheet"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
    </head>
    <body>
        <div class="contenedor">

            <div class="pb-2 pb-lg-0">

                <!-- Navigation -->
                <div class="marginTop d-md-none"></div>
                <div class="d-flex justify-content-center">
                    <a href="#" class="d-none d-md-block">
                        <img class="logoG" src="https://res.cloudinary.com/dycv4oxif/image/upload/v1698918445/Captura_de_pantalla_373_e4jjcb.png" alt="cajas" />
                    </a>
                </div>
                <nav class="sticky-top pb-4 ">
                    <nav class="navbar nav navbar-expand-md rounded-3">
                        <div class="container-fluid ">
                            <a class="navbar-brand " href="../index.php">
                                <img class="logoP" src="https://res.cloudinary.com/dycv4oxif/image/upload/v1698918465/Captura_de_pantalla_375_p2365e.png" alt="cajas" />
                            </a>
                            <a href="#" class="d-block d-md-none">
                                <img class="logoG" src="https://res.cloudinary.com/dycv4oxif/image/upload/v1698918445/Captura_de_pantalla_373_e4jjcb.png" alt="cajas" />
                            </a>                
                            <?php
                            if (isset($_SESSION)) {
                                echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-house-flood-water-circle-arrow-right"></i>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav col-sm-9 zoom">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./Public/almacenamiento.php">Almacenamiento</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ayuda
                        </a>
                        <ul class="dropdown-menu zoom" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="./Public/guia.php">Guía</a></li>
                        <li><a class="dropdown-item" href="./Public/suministros.php">Suministros</a></li>
                        <li><a class="dropdown-item" href="./Public/blog.php">Blog</a></li>
                        <li><a class="dropdown-item" href="./Public/preguntas.php">Preguntas frecuentes</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Acerca de
                        </a>
                        <ul class="dropdown-menu zoom" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item zoom" href="#">Contáctenos</a></li>
                        <li><a class="dropdown-item" href="#">Privacidad</a></li>
                        <li><a class="dropdown-item" href="#">Trabaja con nosotros</a></li>
                        <li><a class="dropdown-item" href="#">Accesibilidad</a></li>
                        <li><a class="dropdown-item" href="./Public/terminos.php">Terminos y condiciones</a></li>
                        </ul>
                        </li>
                        </ul>
                        <ul class="navbar-nav zoom">
                        <li class="nav-item">';
                                echo '<i class="fa fa-user"></i>  ' . $_SESSION['administrador']->getId() . ' </li>
                        </ul>
                        </div>';
                            } else {
                                echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-house-flood-water-circle-arrow-right"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav col-sm-9 zoom">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./Public/almacenamiento.php">Almacenamiento</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ayuda
                        </a>
                        <ul class="dropdown-menu zoom" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="./Public/guia.php">Guía</a></li>
                        <li><a class="dropdown-item" href="./Public/suministros.php">Suministros</a></li>
                        <li><a class="dropdown-item" href="./Public/blog.php">Blog</a></li>
                        <li><a class="dropdown-item" href="./Public/preguntas.php">Preguntas frecuentes</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Acerca de
                        </a>
                        <ul class="dropdown-menu zoom" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item zoom" href="#">Contáctenos</a></li>
                        <li><a class="dropdown-item" href="#">Privacidad</a></li>
                        <li><a class="dropdown-item" href="#">Trabaja con nosotros</a></li>
                        <li><a class="dropdown-item" href="#">Accesibilidad</a></li>
                        <li><a class="dropdown-item" href="./Public/terminos.php">Terminos y condiciones</a></li>
                        </ul>
                        </li>
                        </ul>
                        <ul class="navbar-nav zoom">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Registrate</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./Vista/vistaFormularioLogin.php">Login</a>
                        </li>
                        </ul>
                        </div>';
                            }
                            ?>
                        </div>
                    </nav>
                </nav> 
                <!--Body-->
                <div>
                    <p>
                        <span>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </span>
                        <span>
                            Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
                        </span>
                    </p>
                </div>
                <?php
                require './Public/footer.php';
                ?>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>