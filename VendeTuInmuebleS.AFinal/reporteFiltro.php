<?php

include "header.php"

?>

<main class="my-5">
    <a href="adminReporte.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Regresar</a>

    <div class="container">
        <div class="d-flex bd-highlight mb-3">
            <div class="me-auto p-2 bd-highlight">
                <h2>Reporte por fitlro
            </div>
            <div class="d-grid gap-2 d-md-block">
                <button type="button" class="btn btn-info">Descargar reporte</button>

            </div>
        </div>

        <menu class="left" style="background-color:#0000">
            <div class="container overflow-hidden text-lefth">
                <div class="card-body">
                    <div class="card border-warning mb-3" style="max-width: 25rem;">
                        <center>
                            <div class="card-header">Nuestro Catalogo</div>
                        </center>
                        <div class="card-body" style="background-color:#dbc0b9">
                            <h5 class="card-title">Provincia</h5>
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
                            <h5 class="card-title"> Disponibilidad</h5>
                            <div class="col-7">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">
                                        Si
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">
                                        No
                                    </label>
                                </div>
                            </div>
                            <center>
                                <br>
                                <button type="button" class="btn btn-outline-success" id="buscarFiltroPropiedad">Buscar</button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </menu>

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
            <tbody id="datosTablaReporteFiltro">
                <tr>
            </tbody>
        </table>
    </div>

    </div>
</main>

