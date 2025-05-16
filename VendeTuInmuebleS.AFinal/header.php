<?php
//inspeccionar variables
//var_dump($_SERVER["PHP_SELF"])
$url = basename($_SERVER["PHP_SELF"]);
//var_dump($url);
$url = explode(".", $url);
//var_dump($url[0]);
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <title>Bienvenidos</title>
    <meta name="description" content="Página Principal de Vende Tu Inmueble S.A" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta property="og:title" content="Vende Tu Inmueble S.A," />
    <meta property="og:type" content="Pagina Principal Vende Tu Inmueble S.A," />
    <meta property="og:url" content="Vende Tu Inmueble S.A" />
    <meta property="og:image" content="https://www.crhoy.com/wp-content/uploads/2023/01/IMG_5920.jpg" />

    <link rel="manifest" href="site.webmanifest" />
    <link rel="apple-touch-icon" href="icono.png" />

    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/index.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />    <!-- para el mapa -->


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>

    <header style="background-color: #f7cbb2">


        <nav class="navbar navbar-expand-lg bg-secundario">
            <div class="container-fluid bg-secundario">
                <a class="navbar-brand" href="index.php">
                    <div style="text-align: right;">
                        <img src="icono.png" alt="Logo de Vende Tu Inmueble S.A" width="60">
                    </div>
                    <h1>Vende Tu Inmueble S.A</h1>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="icono.png" alt="Logo de Vende Tu Inmueble S.A" width="40">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="Inmueble.php">Inmueble</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Mapa.php">Mapa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Contactenos.php">Contactenos</a>
                        </li>
                    </ul>
                    <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="btn btn-outline-primary" aria-current="page" href="InicioSesion.php">Inicio de
                            Sesión</a>
                    </li>
                </ul>
                
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="btn btn-outline-danger" aria-current="page" href="nuevoUsuario.php">Registrate
                            aqui</a>
                    </li>
                </ul>
                </div>
                
            </div>
        </nav>

    </header>