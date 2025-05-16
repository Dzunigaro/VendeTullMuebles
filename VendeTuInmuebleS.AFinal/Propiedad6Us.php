<?php
include "headerUs.php"; ?>
<div class="container">
    <br>
    <center>
        <a href="InmuebleUs.php" class="btn btn-warning">Regresar</a>
    </center>
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
        <div class="carousel-item active">
                <img src="img/Casa6/Casa6.jpg" class="d-block w-100" alt="Sala" width="300" height="800">
            </div>
            <div class="carousel-item active">
                <img src="img/Casa6/Sala6.jpg" class="d-block w-100" alt="Sala" width="300" height="800">
            </div>
            <div class="carousel-item">
                <img src="img/Casa6/Cocina6.jpg" class="d-block w-100" alt="Cocina" width="300" height="800">
            </div>
            <div class="carousel-item">
                <img src="img/Casa6/Cuarto6.jpg" class="d-block w-100" alt="Cuarto" width="300" height="800">
            </div>
            <div class="carousel-item">
                <img src="img/Casa6/Baño6.jpg" class="d-block w-100" alt="Baño" width="300" height="800">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
    <center>
        <h1>Nombre del inmueble</H1>
        <center>
            <h3>Precio del Inmuebles <span class="badge bg-warning"><h2>$90000</h2></span></h3>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"
                            style="background-color:#C1FBDF">
                            <h2>Direccion de la propiedad </h2>
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"> <h3>Esta propiedad se encuentra en San Jose, Escazu</h3>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"
                            style="background-color:#92DEFC">
                            <h2>Informacion de la propiedad</h2>
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"> <h3>Cantidad de Habitaciones: 3<br>
                            Cantidad de baños: 2<br>
                            Contiene Otros espacios: Piscina </h3>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree" style="background-color:#C1FBDF">
                            <h2>Informacion del vendedor</h2>
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><h3> Teléfono:54064840<br>
                            Numero de WhatsApp: 74863927<br>
                            Correo Electronico:</h3>
                            <div class="card" style="width: 18rem;">
                                <img src="img/Casa6/QR6.png" class="card-img-top" alt="QR1">
                                <div class="card-body">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </center>
    </center>
</div>
</div>
<br>
<br>







<?php include "footerUs.php" ?>