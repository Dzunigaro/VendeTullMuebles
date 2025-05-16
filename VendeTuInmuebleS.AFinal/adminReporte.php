<?php

include "header.php"

?>
<a href="administrador.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Regresar</a>
<center>
    <div class="card mb-2 " >
        <div class="row g-4">
            <center><br>
                <br> <img src="img/reporte.png" class="img-fluid rounded-start" alt="Administrador" width="150" height="150">
            </center>
        </div>
        <center>
            <div class="col-sm-5 mb-5" ;>
                <h1> Reportes</h1>
            </div>
        </center>
        <div class="card-group">
            <div class="card text-bg-info " style="max-width: 100rem;">
                <div class="card-body">
                    <h5 class="card-title">Reporte general</h5>
                    <p class="card-text"> Se muestra todas las propiedades almacenadas en la base de datos </p>
                    <a href="reporteGeneral.php" class="btn btn-outline-secondary"><i></i>Ir</a>
                </div>
            </div>
            <div class="card text-bg-light" style="max-width: 100rem;">
                <div class="card-body">
                    <h5 class="card-title">Reporte por filtro</h5>
                    <p class="card-text">Muestra un reporte con las siguientes opciones: disponibilidad, provincia y tipo</p>
                    <a href="reporteFiltro.php" class="btn btn-outline-secondary"><i></i>Ir</a>
                </div>
            </div>
        </div>

    </div>

    </section>
    <div>
</center>


<?php include "footer.php" ?>