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
                <img src="img/Mas casas/1.jpg" class="card-img-top" alt="Casa 21" width="300" height="500">
                <div class="card-body">
                    <h5 class="card-title">Apartamento en Heredia</h5>
                    <h6>Tipo de contrato: Alquiler</h6>
                    <h6>Tipo de Vivienda: Apartamento</h6>
                    <a href="vendidos.php" class="btn btn-primary">Ver más informacion</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <img src="img/Mas casas/2.jpg" class="card-img-top" alt="Casa 22" width="350" height="500">
                <div class="card-body">
                    <h5 class="card-title">Casa en Cartago</h5>
                    <h6>Tipo de contrato: Fijo</h6>
                    <h6>Tipo de Vivienda: Casa</h6>
                    <a href="vendidos.php" class="btn btn-primary">Ver más informacion</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <img src="img/Mas casas/3.jpg" class="card-img-top" alt="Casa 23" width="300" height="500">
                <div class="card-body">
                    <h5 class="card-title">Casa en Heredia</h5>
                    <h6>Tipo de contrato: Fijo</h6>
                    <h6>Tipo de Vivienda: Residencial</h6>
                    <a href="vendidos.php" class="btn btn-primary">Ver más informacion</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <img src="img/Mas casas/4.jpg" class="card-img-top" alt="Casa 24" width="350" height="500">
                <div class="card-body">
                    <h5 class="card-title">Apartamento en San José</h5>
                    <h6>Tipo de contrato: Alquiler</h6>
                    <h6>Tipo de Vivienda: Apartamento</h6>
                    <a href="vendidos.php" class="btn btn-primary">Ver más informacion</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <img src="img/Mas casas/5.jpg" class="card-img-top" alt="Casa 25" width="300" height="500">
                <div class="card-body">
                    <h5 class="card-title">Casa en Cartago</h5>
                    <h6>Tipo de contrato: Fijo</h6>
                    <h6>Tipo de Vivienda: Casa</h6>
                    <a href="vendidos.php" class="btn btn-primary">Ver más informacion</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <img src="img/Mas casas/6.jpg" class="card-img-top" alt="Casa 26" width="350" height="500">
                <div class="card-body">
                    <h5 class="card-title">Casa en San José</h5>
                    <h6>Tipo de contrato: Fijo</h6>
                    <h6>Tipo de Vivienda: Recidencial</h6>
                    <a href="vendidos.php" class="btn btn-primary">Ver más informacion</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <img src="img/Mas casas/7.jpg" class="card-img-top" alt="Casa 27" width="300" height="500">
                <div class="card-body">
                    <h5 class="card-title">Casa en Cartago</h5>
                    <h6>Tipo de contrato: Fijo</h6>
                    <h6>Tipo de Vivienda: Casa</h6>
                    <a href="vendidos.php" class="btn btn-primary">Ver más informacion</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <img src="img/Mas casas/8.jpg" class="card-img-top" alt="Casa 28" width="350" height="500">
                <div class="card-body">
                    <h5 class="card-title">Casa en Guanacaste</h5>
                    <h6>Tipo de contrato: Fijo</h6>
                    <h6>Tipo de Vivienda: Casa</h6>
                    <a href="vendidos.php" class="btn btn-primary">Ver más informacion</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <img src="img/Mas casas/9.jpg" class="card-img-top" alt="Casa 29" width="300" height="500">
                <div class="card-body">
                    <h5 class="card-title">Apartamento en Heredia</h5>
                    <h6>Tipo de contrato: Alquiler</h6>
                    <h6>Tipo de Vivienda: Apartamento</h6>
                    <a href="vendidos.php" class="btn btn-primary">Ver más informacion</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <img src="img/Mas casas/10.jpg" class="card-img-top" alt="Casa 30" width="350" height="500">
                <div class="card-body">
                    <h5 class="card-title">Casa en Limon</h5>
                    <h6>Tipo de contrato: Fijo</h6>
                    <h6>Tipo de Vivienda: Casa</h6>
                    <a href="vendidos.php" class="btn btn-primary">VSer más informacion</a>
                </div>
            </div>
        </div>
    </div>

    <!--Codigo de la paginacion -->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">

            <li class="page-item"><a class="page-link" href="inmueble.php">1</a></li>
            <li class="page-item"><a class="page-link" href="inmueble2.php">2</a></li>
            
        </ul>
    </nav>
</div>
</div>


</div>

<br>
<br>
</main>







<?php include "footer.php" ?>