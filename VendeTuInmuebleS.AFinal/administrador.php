<?php

include "headerUs.php"

?>
<center>
    <div class="card mb-2" style="background-color:#f7cbb2">
        <div class="row g-4">
            <center><br>
                <br> <img src="img/administrador.png" class="img-fluid rounded-start" alt="Administrador" width="150" height="150">
            </center>
        </div>
        <center>
            <div class="col-sm-5 mb-5" ;>
                <h1> Bienvenido</h1>
            </div>
        </center>
        <section class="row p-3 mb-2  text-emphasis-info">
            <div>
                <p></p>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card mb-3  card-thumbnail" style="max-width: 500px;">
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img src="img/adminUsuario.png" class="img-fluid rounded-start" alt="Una tuerca con la imagen de una persona en el centro">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Administrar Usuarios</h5>
                                <p class="card-text">En esta sección se administrará la información de todos los usuarios</p>
                                <a href="adminUsuario.php" class="btn btn-outline-secondary"><i></i>Ir</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card mb-3" style="max-width: 500px;">
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img src="img/casa.png" class="img-fluid rounded-start" alt="Una casa de color negro">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Administrar Propiedades</h5>
                                <p class="card-text">En esta sección se administrará la información de todos la propiedades</p>
                                <a href="adminPropiedad.php" class="btn btn-outline-secondary"><i></i>Ir</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-6">
                <div class="card mb-3" style="max-width: 500px;">
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img src="img/reporte.png" class="img-fluid rounded-start" alt="Una hoja con datos y graficos">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Reportes de Votación</h5>
                                <p class="card-text">En esta sección se consultará el reporte general y el reporte por filtro </p>
                                <a href="adminReporte.php" class="btn btn-outline-secondary"><i></i>Ir</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</center>

<?php include "footer.php" ?>