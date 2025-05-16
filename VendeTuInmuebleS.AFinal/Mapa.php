<?php
include "header.php"; ?>

<main  style="background-color:#B0F8F6">
    <div class="container">
        <!--Contenedor principal-->
        <div id="contenedor">
            <!--Cabecera-->
            <br>
            <br>
            <div id="cabecera">
                <center><h1 id="titulo">Nuestras Surcursales</h1></center>
            </div>
            <!--Fin Cabecera-->

            <!--Elemento Principal-->
            <div id="principal">


                <!--Elemento Contenido-->
                <div id="contenido">
                    <br>

                    <fieldset id="contenedorMapa">

                        <div id='mapaProvincia' style='width: 1250px; height: 550px'></div>
                    </fieldset>

                </div>
                <!--Fin elemento Contenido-->

            </div>
            <!--Fin Elemento Principal-->
        </div>
        <!--Fin Contendor principal-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
            </script>

        <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
            integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

        <script src="js/mapa.js"></script>
    </div>
    <br>
    <br>
</main>


<?php include "footer.php" ?>
<!-- Numeros de Telefonos de las diferentes sedes
<p><span>Teléfono de la Sede de San Jose: </span> <a href="tel:+506 26612010">2661-2010</a></p>
<p><span>Teléfono de la Sede de Alajuela: </span> <a href="tel:+506 23846520">2384-6520</a></p>
<p><span>Teléfono de la Sede de Cartago: </span> <a href="tel:+506 22569511"> 2256-9511</a></p>
<p><span>Teléfono de la Sede de Heredia: </span> <a href="tel:+506 24440156 "> 24440156 </a></p>
<p><span>Teléfono de la Sede de Puntarenas: </span> <a href="tel:+506 25412880"> 2541-2880</a></p>
<p><span>Teléfono de la Sede de Guanacaste: </span> <a href="tel:+506 23612412"> 2361-2412 </a></p>
<p><span>Teléfono de la Sede de Limon: </span> <a href="tel:+506 25575482"> 2557-5482 </a></p>
-->