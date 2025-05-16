<?php

include "header.php"

?>

<main class="my-5">
    <div class="container">
        <div class="d-flex bd-highlight mb-3">
            <div class="me-auto p-2 bd-highlight">
                <h2>Catálogo de propiedad
            </div>
            <div class="p-2 bd-highlight">
                <a href="administrador.php" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Regresar</a>
                <a href="nuevaPropiedad.php" class="btn btn-success"><i class="fas fa-plus"></i> Nuevo</a>

            </div>
        </div>

        <div class="table-responsive">
            <table class="table text-center table text-center  table-hover table-light">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Tipo de inmueble</th>
                        <th scope="col">Tipo decontrato</th>
                        <th scope="col">Provincia</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Número de cuartos</th>
                        <th scope="col">Número de baños</th>
                        <th scope="col">Espacio de cochera</th>
                        <th scope="col">Disponibilidad</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody id="datosTablaPropiedad">
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php include "footer.php" ?>