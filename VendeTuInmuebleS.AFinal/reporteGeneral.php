<?php

include "header.php"

?>

<main class="my-5">
<a href="adminReporte.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Regresar</a>

    <div class="container">
        <div class="d-flex bd-highlight mb-3">
            <div class="me-auto p-2 bd-highlight">
                <h2>Reporte General
            </div>
            <div class="d-grid gap-2 d-md-block">
                <a class="btn btn-info" href="descargaReporteGeneral.php">Descargar reporte general</a>

            </div>
        </div>

        <div class="table-responsive">
            <table class="table text-center  table-hover table-light">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Tipo de inmueble</th>
                        <th scope="col">Tipo de contrato</th>
                        <th scope="col">Provincia</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Número de cuartos</th>
                        <th scope="col">Número de baños</th>
                        <th scope="col">Espacio de cochera</th>
                        <th scope="col">Disponibilidad</th>
                    </tr>
                </thead>
                <tbody id="datosTablaReporte">
                <tr>
                </tbody>
            </table>
        </div>

    </div>
</main>

<?php include "footer.php" ?>