<?php 

$titulo="Resultado ej3";
include_once("../control/tp3ejercicio3.php");
include_once("../utiles/funciones.php");
include_once 'estructura/header.php';
$datos = data_submitted();

$obj_controlador = new tp3ejercicio3;

$result = $obj_controlador->verificar_pelicula($datos);
//echo "El resultado es: ".$result['error'];
?>
<div  class="container principal">

        <?php 
        
        if ($result['error'] != false) {
           echo '<div class="container p-5">
            <div class="modal-dialog">
                <div class="modal-content rounded-3" style="background-color: rgba(180, 243, 148, 0.3)">
                    <div class="modal-body p-3">';
                    echo '  <form action="index.php">
                    <button type="submit" class="btn-close m-1 position-absolute end-0 top-0 p-4" style="background-size: 12px" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h2 class="modal-title text-primary mx-auto mt-3 mb-5 " id="exampleModalLabel">La pelicula introducida es</h2>
                <div class="row"> 
                <div class="col-6">';
                    foreach($result as $titulo => $dato){
                   //     
                            if($titulo=="url_archivo")
                            {
                                $titulo = str_replace("_", " ",$titulo);
                                echo "<strong>".ucfirst($titulo)."</strong><a href='" . $dato . "' target='_blank'>$dato </a>";
                            }
                            else{
                                if($titulo!="error")
                                echo "<strong>".ucfirst($titulo)."</strong>" . ": " . $dato . "<br>";
                        
                            }
                        }
                    
                        
                        echo '</div> <div class="col-6"><img class="w-100" src="' . $result["url_archivo"] . '"></div>';
                    
                        echo '</div></form></div></div></div></div>';
                    /*
            echo '<h1 class="display-6"><b>La pelicula ingresada es:</b></h1>';
            echo '<h1 class="display-6"><b>Titulo:</b>'.$result['titulo'].'</h1>';
            echo '<h1 class="display-6"><b>Actores:</b>'.$result['actores'].'</h1>';
            echo '<h1 class="display-6"><b>Director:</b>'.$result['director'].'</h1>';
            echo '<h1 class="display-6"><b>Guion:</b>'.$result['guion'].'</h1>';
            echo '<h1 class="display-6"><b>Produccion:</b>'.$result['produccion'].'</h1>';
            echo '<h1 class="display-6"><b>Año:</b>'.$result['anio'].'</h1>';
            echo '<h1 class="display-6"><b>Nacionalidad:</b>'.$result['nacionalidad'].'</h1>';
            echo '<h1 class="display-6"><b>Genero:</b>'.$result['genero'].'</h1>';
            echo '<h1 class="display-6"><b>Duracion:</b>'.$result['duracion'].'</h1>';
            echo '<h1 class="display-6"><b>Restricciones de edad:</b>'.$result['restricciones'].'</h1>';
            echo '<img style="width:500px;height: 400px;" src="'.$result['url_archivo'].'" alt="">';
   */
       }else{
            echo '<p class="lead"> Error al intentar cargar la pelicula. </p>';
        }
       ?>
    </div>
    </div>
    <div class="mb-1">
       <a href= "tp3ejercicio3.php" class="btn btn-primary">Volver</a>
    </div>

    <?php

include_once 'estructura/footer.php';

?>