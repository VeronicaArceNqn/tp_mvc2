<?php

$titulo = "Resultado Tp3 - ej3";
include_once("../control/tp3ejercicio3.php");
include_once("../utiles/funciones.php");
include_once 'estructura/header.php';
$arrayDatos = data_submitted();

$obj_control = new tp3ejercicio3;

$result = $obj_control->verificar_pelicula($arrayDatos);

?>
<div class="container-fluid principal">

    <?php

    if ($result['error'] != false) {
        echo '<div class="container p-6">
            <div class="modal-dialog">
                <div class="modal-content rounded-3" style="background-color: rgba(180, 243, 148, 0.3)">
                    <div class="modal-body pl-2 pr-2">';
        echo '  <form action="tp3ejercicio3.php">
                    <button type="submit" class="btn-close m-1 position-absolute end-0 top-0 p-4" style="background-size: 12px" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h2 class="modal-title text-primary mx-auto mt-3 mb-5 h3" id="exampleModalLabel">La pelicula introducida es</h2>
                <div class="row"> 
                <div class="col-6">';
        foreach ($result as $titulo => $dato) {

            if ($titulo == "url_archivo") {
                $titulo = str_replace("_", " ", $titulo);
                echo "<strong>" . ucfirst($titulo) . "</strong><a href='" . $dato . "' target='_blank'>$dato </a>";
            } else {
                if ($titulo != "error")
                    echo "<strong>" . ucfirst($titulo) . "</strong>" . ": " . $dato . "<br>";
            }
        }


        echo '</div> <div class="col-6"><img class="w-100 float-left" src="' . $result["url_archivo"] . '"></div>';

        echo '</div></form></div></div></div></div>';
    } else {
        echo '<p class="lead"> Error al intentar cargar la pelicula. </p>';
    }
    ?>
</div>
</div>
<div class="mb-1">
    <a href="tp3ejercicio3.php" class="btn btn-primary">Volver</a>
</div>

<?php

include_once 'estructura/footer.php';

?>