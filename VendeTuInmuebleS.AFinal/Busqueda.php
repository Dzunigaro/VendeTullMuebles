<!--Codigo del profesor es solo un ejemplo no fujnciona -->

<?php
include "header.php";
include "bd.php";
$txtBuscar = $_GET["p"];
//var_dump($txtBuscar);
$encontrado = false;
foreach ($Inmuebles as $key => $Inmuebles) {
    if (strcasecmp($txtBuscar, $Inmuebles["titulo"]) == 0) {
        $datos = $Inmuebles;
        $encontrado = true;
        break;
    }
}

?>
<main>

    <?php if ($encontrado) { ?>
        <section>
            <h2>Datos</h2>
            <ol class="list-group list-group-numbered">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Resultados</div>
                        <?php echo "<div class='card col-md-6 col-lg-3' style='width: 18rem;'>
                <img src='img/$Inmuebles[imagen]' class='card-img-top' alt='Banner pelicula patito'>
                <div class='card-body'>
                    <a href='cartelera.php?p=$Inmuebles[titulo]' class='btn btn-negro'>Ver Horarios</a>
                </div>
                </div>"; ?>
                    </div>

        </section>
    <?php } else {
        echo "<h2>No hay resulatdos para la busqueda: $txtBuscar</h2>";
    } ?>
    <h2></h2>
</main>
<?php include "footer.php" ?>