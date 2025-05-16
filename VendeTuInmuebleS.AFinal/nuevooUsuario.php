<?php include "header.php"; ?>

<main  style="background-color:#B0F8F6">
    <div class="appContent" role="main">

        <div class="zI7 iyn Hsu" style="padding-top:5px">
            <div class="mainContainer"  style="background-color:#B0F8F6">
                <div data-test-id="add-secondary-personal-account-page" class="zI7 iyn Hsu">
                    <div class="Jea KS5 jzS mQ8 qDf zI7 iyn Hsu">
                        <div data-test-id="signup-default-modal" class="zI7 iyn Hsu"
                            style="width:800px;background-color:#fff;border-radius:32px;position:relative;text-align:center;margin:auto;min-height:initial;box-shadow:0 2px 10px rgba(0,0,0,0.45)">
                            <br>
                            <br>
                            <img src="img/administrador.png" alt="logo" width="80" height="80">
                            <br>
                            <br>
                            <div class="zI7 iyn Hsu" style="margin:0 auto 22px;width:400px">
                                <h1 style="color:#333;font-size:32px;font-weight:600;letter-spacing:-1.2px;
                        -moz-osx-font-smoothing:grayscale;padding-left:16px;padding-right:16px;
                        -webkit-font-smoothing:antialiased;word-break:keep-all">
                                    Crear una cuenta personal nueva</h1>
                            </div>
                            <br>
                            <div class="container" id="frmUsuario" >
                                <center>
                                    <div class="card-body">
                                        <form class="row g-12" >
                                            <h4>Información del usuario</h4>

                                            <br>
                                            <br>
                                            <div class="col-md-4">
                                                <br>
                                                <label class="form-label">Nombre</label>
                                                <input type="text" class="form-control" id="nombre" required>
                                            </div>
                                            <div class="col-md-4">
                                                <br>
                                                <label class="form-label">Primer Apellido</label>
                                                <input type="text" class="form-control" id="apellido1" required>
                                            </div>
                                            <div class="col-md-4">
                                                <BR>
                                                <label class="form-label">Segundo apellido</label>
                                                <input type="text" class="form-control"  id="apellido2" required>
                                            </div>
                                            </from>
                                            <form>
                                                <br>
                                                <br>
                                                <div class="col-md-4">
                                                    <br>
                                                    <label class="form-label">Tipo de indentidicación</label>
                                                    <select class="form-select" required>
                                                        <option selected disabled value="">Cédula Nacional</option>
                                                        <option>Pasaporte</option>
                                                        <option>Cédula de residencia</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <br>
                                                    <label class="form-label">Número de identificacion</label>
                                                    <input type="text" class="form-control" id="id" min="9" max="12"
                                                        required>
                                                </div>
                                                <div class="col-md-4">
                                                    <br>
                                                    <label class="form-label">Fecha de nacimiento</label>
                                                    <input type="text" class="form-control" id="fechanacimiento" required>
                                                </div>
                                                </from>
                                                <form>
                                                    <center>
                                                        <label class="form-label">Tipo de usuario </label>
                                                        <select class="form-select"  id="tipousuario" required>
                                                            <option selected disabled value="">Estandar</option>
                                                        </select>
                                                    </center>
                                                    </div>
                                                </form>
                                                <br>
                                                <br>
                                                <h3>Información de contacto</h3>
                                                <form>
                                                    <div class="col-md-4">
                                                        <br>
                                                        <label class="form-label">Correo Electrónico</label>
                                                        <input type="email" class="form-control" id="email" size="50"
                                                            placeholder="name@example.com" required>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <br>
                                                        <label for="validationDefault05"
                                                            class="form-label">Teléfono</label>
                                                        <input type="tel" class="form-control" id="telefono" min="1" max="8" required>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <br>
                                                        <label for="validationDefault05" class="form-label">Número de WhatsApp</label>
                                                        <input type="tel" class="form-control" id="numwhatsapp" min="1" max="8" required>
                                                    </div>
                                                    <!-- Codigo para subir una imagen-->
                                                    <center>
                                                    <div class="col-md-4">
                                                            <br>
                                                            <label for="validationDefault05" class="form-label">Subir tu imagen</label>
                                                            <input type="file" name="imageUsuario"  id="imageUsuario"class="form-control"
                                                                accept="imageUsuario/*" required>
                                                        </center>
                                                    </div>
                                                    <br>
                                                    <!-- Fin Codigo para subir una imagen-->
                                                </form>
                                                <h3>Información sobre perfil</h3>
                                                <form>
                                                    <div class="col-md-4">
                                                        <label for="validationDefaultUsername" class="form-label">Escriba un nuevo Username</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text"
                                                                id="inputGroupPrepend2">@</span>
                                                            <input type="text" class="form-control"
                                                                id="usuario"
                                                                aria-describedby="inputGroupPrepend2" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="validationDefault03"
                                                            class="form-label">Contraseña</label>
                                                        <input type="password" class="form-control" id="password" required>
                                                    </div>
                                                </form>
                                </center>
                                <br>
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="invalidCheck2" required>
                                        <label class="form-check-label" for="invalidCheck2">Estoy de acuerdo con los términos y Condiciones</label>
                                    </div>
                                </div>
                                <center>
                                    <div class="col-12">
                                        <br>
                                        <button class="btn btn-primary" type="submit" id="guardarUsuario"> Subir mi información</button>
                                    </div>
                                </center>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <!--$-->
        <!--/$-->
    </div>

</main>
<br>
<?php include "footer.php" ?>