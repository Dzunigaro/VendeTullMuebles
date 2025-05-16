<?php

include "header.php"

?>

<main class="my-5">
    <div class="container">
        <div class="d-flex bd-highlight mb-3">
            <div class="me-auto p-2 bd-highlight">
                <h2>Catálogo de Usuario
            </div>
            <div class="p-2 bd-highlight">
                <a href="administrador.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Regresar</a>
                <a href="nuevoUsuario.php" class="btn btn-secondary"><i class="fas fa-plus"></i> Nuevo</a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table text-center table-hover table-light">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Primer apellido</th>
                        <th scope="col">Segundo apellido</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Correo electronico</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Número de WhatsApp</th>
                        <th scope="col">Nombre de usuario</th>
                        <th scope="col">Tipo de usuario</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody id="datosTablaUsuario">
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php include "footer.php" ?>