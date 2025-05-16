<?php
include "header.php"; ?>

<main  style="background-color:#B0F8F6">
<br>
<br>
<menu class="left" style="background-color:#0000">
    <div class="container overflow-hidden text-lefth">
        <div class="card-body">
            <div class="card border-warning mb-3" style="max-width: 25rem;">
                <center>
                    <div class="card-header">Nuestro Catalogo</div>
                </center>
                <div class="card-body" style="background-color:#dbc0b9">
                    <h5 class="card-title"> Provincias</h5>
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">
                                San Jose
                            </label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">
                                Alajuela
                            </label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">
                                Cartago
                            </label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">
                                Heredia
                            </label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">
                                Puntarenas
                            </label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">
                                Guanacaste
                            </label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">
                                Limon
                            </label>
                        </div>
                    </div>
                    <br>
                    <h5 class="card-title"> Tipo de Propiedad</h5>
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">
                                Casa
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">
                                Apartamento
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">
                                Residencia
                            </label>
                        </div>
                    </div>
                    <br>
                    <h5 class="card-title"> Numero de Habitaciones</h5>
                    <div class="col-7">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">
                                De 1 a 2
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">
                                De 2 a 4
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">
                                Más de 4
                            </label>
                        </div>
                    </div>
                    <center>
                        <br>
                        <button type="button" class="btn btn-outline-success">Buscar</button>
                    </center>
                </div>
            </div>
        </div>

    </div>
    </div>
</menu>

<div class="container">
    <!--Codigo de las Propiedades -->
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <img src="img/Casa1/Casa1.png" class="card-img-top" alt="Casa 1" width="500" height="500">
                <div class="card-body">
                    <center>
                        <h5 class="card-title">Residencial San Pablo</h5>
                        <h6>Tipo de contrato: Fijo</h6>
                        <h6>Tipo de Vivienda: Casa en Residencial</h6>
                        <a href="Propiedad1.php" class="btn btn-primary">Ver más informacion</a>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <img src="img/Casa2/Casa2.jpeg" class="card-img-top" alt="Casa 2" width="500" height="500">
                <div class="card-body">
                    <center>
                        <h5 class="card-title">Condominio Alfaro</h5>
                        <h6>Tipo de contrato: Arriendamineto</h6>
                        <h6>Tipo de Vivienda: Alquiler</h6>
                        <a href="Propiedad2.php" class="btn btn-primary">Ver más informacion</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <img src="img/Casa3/3Casa.jpg" class="card-img-top" alt="Casa 3" width="300" height="500">
                <div class="card-body">
                    <center>
                        <h5 class="card-title">Casa en Vista de Mar</h5>
                        <h6>Tipo de contrato: Arriendamineto</h6>
                        <h6>Tipo de Vivienda: Casa</h6>
                        <a href="Propiedad3.php" class="btn btn-primary">Ver más informacion</a>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <img src="img/Casa4/Casa4.jpg" class="card-img-top" alt="Casa 4" width="350" height="500">
                <div class="card-body">
                    <center>
                        <h5 class="card-title">Condominio Labrador</h5>
                        <h6>Tipo de contrato: Fijo</h6>
                        <h6>Tipo de Vivienda: Casa en Residencial</h6>
                        <a href="Propiedad4.php" class="btn btn-primary">Ver más informacion</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <center>
                    <img src="img/Casa5/Casa5.jpg" class="card-img-top" alt="Casa 5" width="300" height="500">
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">Vecindario Cirri Sur</h5>
                            <h6>Tipo de contrato: Arriendamineto</h6>
                            <h6>Tipo de Vivienda: Casa</h6>
                            <a href="Propiedad5.php" class="btn btn-primary">Ver más informacion</a>
                        </center>
                    </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <center>
                    <img src="img/Casa6/Casa6.jpg" class="card-img-top" alt="Casa 6" width="350" height="500">
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">Recidencial Rosa Linda</h5>
                            <h6>Tipo de contrato: Fijo</h6>
                            <h6>Tipo de Vivienda: Casa en Residencial</h6>
                            <a href="Propiedad6.php" class="btn btn-primary">Ver más informacion</a>
                        </center>
                    </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <img src="img/Casa7/Casa7.jpg" class="card-img-top" alt="Casa 7" width="300" height="500">
                <div class="card-body">
                    <center>
                        <h5 class="card-title">Vecindario Aserri</h5>
                        <h6>Tipo de contrato: Fijo</h6>
                        <h6>Tipo de Vivienda: Casa</h6>
                        <a href="Propiedad7.php" class="btn btn-primary">Ver más informacion</a>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <img src="img/Casa8/Casa8.jpg" class="card-img-top" alt="Casa 8" width="350" height="500">
                <div class="card-body">
                    <center>
                        <h5 class="card-title">Vecindario Guacimo</h5>
                        <h6>Tipo de contrato: Arriendamineto</h6>
                        <h6>Tipo de Vivienda: Casa</h6>
                        <a href="Propiedad8.php" class="btn btn-primary">Ver más informacion</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <img src="img/Casa9/Casa9.jpg" class="card-img-top" alt="Casa 9" width="300" height="500">
                <div class="card-body">
                    <center>
                        <h5 class="card-title">Condominio San Rafael</h5>
                        <h6>Tipo de contrato: Fijo</h6>
                        <h6>Tipo de Vivienda: Casaen Residencial</h6>
                        <a href="Propiedad9.php" class="btn btn-primary">Ver más informacion</a>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <img src="img/Casa10/Casa10.jpg" class="card-img-top" alt="Casa 10" width="350" height="500">
                <div class="card-body">
                    <center>
                        <h5 class="card-title">Vecendario Barrantes</h5>
                        <h6>Tipo de contrato: Arriendamineto</h6>
                        <h6>Tipo de Vivienda: Casa</h6>
                        <a href="Propiedad10.php" class="btn btn-primary">Ver más informacion</a>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <!--Codigo de la paginacion -->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">

            
            <li class="page-item"><a class="page-link" href="inmueble2.php">2</a></li>
            <li class="page-item"><a class="page-link" href="inmueble3.php">3</a></li>

        </ul>
    </nav>
</div>
</div>


</div>

<br>
<br>
</main>







<?php include "footer.php" ?>