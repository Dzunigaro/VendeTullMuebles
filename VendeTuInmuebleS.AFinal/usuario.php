<?php

include "headerUs.php"

?>
<main style="background-color:#B0F8F6">
<br>
<center>
<a href="administrador.php" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Regresar</a>
</center>
<center>
    <div class="card mb-2 " style="background-color:#B0F8F6">
        <div class="row g-4">
            <center><br>
                <br> <img src="img/usuarioEstandar.png" class="img-fluid rounded-start" alt="Administrador" width="150" height="150">
            </center>
        </div>
        <center>
            <div class="col-sm-5 mb-5" ;>
                <h1> Bienvenido</h1>
            </div>
        </center>
        <div class="card-group" style="background-color:#0000">
            <div class="card text-bg-secondary" style="max-width: 100rem;">
                <div class="card-body">
                    <h5 class="card-title">Administración de Propiedades</h5>
                    <p class="card-text"> Se muestran sus todas las propiedades  </p>
                    <a href="adminPropiedad.php" class="btn btn-success"><i></i>Ir</a>
                </div>
            </div>
            <div class="card text-bg-light" style="max-width: 100rem;">
                <div class="card-body">
                    <h5 class="card-title">Actualizar Datos </h5>
                    <p class="card-text">Actualizar datos personales de su cuenta</p>
                    <a href="reporteFiltro.php" class="btn btn-success"><i></i>Ir</a>
                </div>
            </div>
        </div>

    </div>

    </section>
    <div>
</center>
</main>



<?php include "footer.php" ?>