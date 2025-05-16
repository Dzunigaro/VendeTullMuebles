<?php

include "header.php"

?>


<center>
    <div class="card mb-2">
        <div class="row g-4">
            <center><br>
                <br> <img src="img/vendercasa2.jpg" class="img-fluid rounded-start" alt="Administrador" width="150" height="150">
            </center>
        </div>
        <center>
            <div class="col-sm-5 mb-5" ;>
                <h1 style="color:#333;font-size:32px;font-weight:600;letter-spacing:-1.2px;
                        -moz-osx-font-smoothing:grayscale;padding-left:16px;padding-right:16px;
                        -webkit-font-smoothing:antialiased;word-break:keep-all"> Ingresar una nueva propiedad </h1>
                <h4>Información de la propiedad</h4>
            </div>
        </center>
        <div class="p-2 bd-highlight">
            <a href="adminPropiedad.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Regresar</a>
        </div>
</center>

<div class="cargando">

</div>
<!--Contenido principal-->
<main class="container mt-5 mb-5">
    <!-- Para enviar archivos es obligatorio el method="POST" y el enctype="multipart/form-data"-->
    <form id="frmPropiedad" class="w-40 m-auto" action="" method="POST" enctype="multipart/form-data">
        <div class="d-flex justify-content-center bd-highlight mb-3">


        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Placa">
            <label for="nombre">Tipo de inmueble</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="contrato" id="contrato" placeholder="contrato">
            <label for="contrato">Tipo de contrato (fijo, anual, mensual ...)</label>
        </div>

        <label class="form-label">Provincias</label>
        <select class="form-select" required>
            <option selected disabled value="">1. San José</option>
            <option>2. Heredia</option>
            <option>3. Cartago</option>
            <option>4. Alajuela</option>
            <option>5. Guanacaste</option>
            <option>6. Limón</option>
            <option>7. Puntarenas</option>
        </select>






        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="provincia" id="provincia" placeholder="provincia">
            <label for="provincia">Digite el número de provincia</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="direccion" id="direccion" placeholder="direccion">
            <label for="direccion">Dirección</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="precio" id="precio" placeholder="precio">
            <label for="precio">Precio</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="numcuartos" id="numcuartos" placeholder="numcuartos">
            <label for="numcuartos">Número de cuartos</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="numbano" id="numbano" placeholder="numbano">
            <label for="numbano">Número de baños</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="cochera" id="cochera" placeholder="cochera">
            <label for="cochera">Espacio de cochera</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="disponible" id="disponible" placeholder="disponible">
            <label for="disponible">Está disponible (si/no)</label>
        </div>

        <div class="form-floating mb-3">
            <input type="file" class="form-control" name="imagen" id="imagen" placeholder="imagen">
            <label for="imagen">Imagen</label>
        </div>

        <div class="mb-3">
            <button id="guardarPropiedad" type="button" class="btn btn-outline-dark">Guardar</button>
            <button id="cancelarPropiedad" type="reset" class="btn btn-outline-dark">Cancelar</button>
        </div>
    </form>

</main>

<?php include "footer.php" ?>