<footer class="row">
    <div class="col-lg-3 col-md-12">
        <img src="icono.png" alt="Logo de Vende Tu Inmueble S.A" width="100">
    </div>
    <div class="col-lg-3 col-md-4">
        <h4>Nuetros inmuebles</h4>
        <a href="InmuebleUs.php">Inmuebles</a>
        <br>
        <a href="InmuebleUs.php"> Propiedades a la venta</a>
    </div>
    <div class="col-lg-3 col-md-4">
        <h4> Mapa</h4>
        <a href="MapaUs.php">Nuestras sucursales</a>
        <br>
        <a href="MapaUs.php">Teléfonos de las sucursales</a>


    </div>
    <div class="col-lg-3 col-md-4">
        <h4>Contacta con Nosotros</h4>
        <a href="ContactenosUs.php">Contáctenos</a>
        <br>
        <a href="MyV.php"> Mision y Vision</a>
    </div>
</footer>



<!-- Add your site or application content here -->





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<script>
    function openModal() {
        document.getElementById('myModal').style.display = "block";
    }

    function closeModal() {
        document.getElementById('myModal').style.display = "none";
    } 
</script>
<script src="js/vendor/modernizr-3.11.2.min.js"></script>
<script src="js/plugins.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="js/main.js"></script>
<script src="https://kit.fontawesome.com/97cef9f55a.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php 
    if(strcmp($url[0],"nuevaPropiedad")==0){
        echo '<script src="js/nuevaPropiedad.js"></script>';
    }else if(strcmp($url[0],"adminPropiedad")==0){
        echo '<script src="js/adminPropiedad.js"></script>';
    }else if(strcmp($url[0],"nuevoUsuario")==0){
        echo '<script src="js/nuevoUsuario.js"></script>';
    }else if(strcmp($url[0],"adminUsuario" )==0){
        echo '<script src="js/adminUsuario.js"></script>';
    }else if(strcmp($url[0],"reporteGeneral")==0){
        echo '<script src="js/reporteGeneral.js"></script>';
    }else if(strcmp($url[0],"nuevoUsuarioAdmin")==0){
        echo '<script src="js/nuevoUsuarioAdmin.js"></script>';
    }else if(strcmp($url[0],"adminUsuarioEA" )==0){
        echo '<script src="js/adminUsuarioEA.js"></script>';
    }else if(strcmp($url[0],"reporteFiltro")==0){
        echo '<script src="js/reporteFiltro.js"></script>';
    }else if(strcmp($url[0],"InicioSesion")==0){
        echo '<script src="js/InicioSesion.js"></script>';
    }
?>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function () {
        ga.q.push(arguments);
    };
    ga.q = [];
    ga.l = +new Date();
    ga("create", "UA-XXXXX-Y", "auto");
    ga("set", "anonymizeIp", true);
    ga("set", "transport", "beacon");
    ga("send", "pageview");
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>