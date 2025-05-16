<?php

include "header.php"

    ?>
<main style="background-color:#B0F8F6">
    <center>
        <div class="card mb-2" style="background-color:#B0F8F6">
            <div class="row g-4">
                <center><br>
                    <br> <img src="img/administrador.png" class="img-fluid rounded-start" alt="Administrador"
                        width="150" height="150">
                </center>
            </div>
            <center>
                <div class="col-sm-5 mb-5" ;>
                    <h1 style="color:#333;font-size:32px;font-weight:600;letter-spacing:-1.2px;
                        -moz-osx-font-smoothing:grayscale;padding-left:16px;padding-right:16px;
                        -webkit-font-smoothing:antialiased;word-break:keep-all"> Crear una nueva cuenta personal </h1>
                    <h4>Información del usuario</h4>
                </div>
            </center>
            <div class="p-2 bd-highlight">
                <a href="adminUsuario.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Regresar</a>
            </div>
    </center>


    <div class="cargando">
        <!--<img src="img/cargando.gif" alt="">-->
    </div>
    <!--Contenido principal-->
    <main class="container mt-5 mb-5">
        <!-- Para enviar archivos es obligatorio el method="POST" y el enctype="multipart/form-data"-->
        <form id="frmUsuario" class="w-40 m-auto" action="" method="POST" enctype="multipart/form-data">
            <div class="d-flex justify-content-center bd-highlight mb-3">
            </div>
            <h4>Información del usuario</h4>
            <label class="form-label">Tipo de identificación</label>
            <select class="form-select" required>
                <option selected disabled value="">Cédula Nacional</option>
                <option>Pasaporte</option>
                <option>Cédula de residencia</option>
            </select>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="id" id="id" placeholder="Placa">
                <label for="id"></label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Placa">
                <label for="nombre">Nombre</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="apellido1" id="apellido1" placeholder="apellido1">
                <label for="apellido1"> Primer apellido</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="apellido2" id="apellido2" placeholder="apellido2">
                <label for="apellido2">Segundo apellido</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="fechanacimiento" id="fechanacimiento"
                    placeholder="fechanacimiento">
                <label for="fechanacimiento">Fecha de nacimiento(yy/mm/dd)</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="tipousuario" id="tipousuario" placeholder="tipousuario">
                <label for="tipousuario">Tipo de usuario</label>
            </div>

            <br>
            <h4>Información de contacto </h4>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="email" id="email" placeholder="email">
                <label for="email">Correo electronico</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="telefono" id="telefono" placeholder="telefono">
                <label for="telefono">Teléfono</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="numwhatsapp" id="numwhatsapp" placeholder="numwhatsapp">
                <label for="numwhatsapp">Número de WhatsApp</label>
            </div>
            <br>
            <h4>Información sobre perfil </h4>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="usuario">
                <label for="usuario">Nombre de usuario</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="password" id="password" placeholder="password">
                <label for="password">Contraseña</label>
            </div>

            <div class="form-floating mb-3">
                <input type="file" class="form-control" name="imageUsuario" id="imageUsuario"
                    placeholder="imageUsuario">
                <label for="imageUsuario">Subir tu imagen</label>
            </div>
            <br>
            <center>
                <div class="col-6">
                    <center>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="invalidCheck2" required>
                            <label class="form-check-label" for="invalidCheck2">Estoy de acuerdo con los términos y
                                Condiciones</label>
                        </div>
                    </center>
                </div>
                <br>
                <div class="mb-3">
                    <center>
                        <button id="guardarUsuario" type="button" class="btn btn-success">Guardar</button>
                        <button id="cancelarUsuario" type="reset" class="btn btn-danger">Cancelar</button>
                </div>
<br>
        </form>
        </center>
    </main>
</main>

<?php include "footer.php" ?>