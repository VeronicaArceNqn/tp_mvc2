<?php
$titulo = "Cinem@as";
include_once 'estructura/header.php';
?>
<div class="container-fluid principal">
<div class="container p-0 my-5 shadow border rounded">
    <div id="header" class="navbar navbar-expand-sm border shadow-pop">
        <div class="container">
            <h4 class="text-primary"><i class="bi bi-clipboard-check"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                    </svg></i> <strong>Cinem@as</strong></h4>
        </div>
    </div>
    <div class="p-4 col-md col-lg">
        <form class="needs-validation" novalidate action="tp3ejercicio3result.php" method="POST" enctype="multipart/form-data">
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="titulo" class="form-label"><strong>Titulo</strong></label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo" value="" required>
                    <div class="invalid-feedback">
                        Ingrese un titulo
                    </div>
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="actores" class="form-label"><strong>Actores</strong></label>
                    <input type="text" class="form-control" id="actores" name="actores" placeholder="Actores" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{4,48}" value="" required/>
                    <div class="invalid-feedback">
                        Ingrese actores (min. 4 caracteres)
                    </div>
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="director" class="form-label"><strong>Director</strong></label>
                    <input type="text" class="form-control" id="director" name="director" placeholder="Directores" 
                    pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{4,48}" value="" required/>
             
                    <div class="invalid-feedback">
                        Ingrese director (min. 4 caracteres) 
                    </div>
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="guion" class="form-label"><strong>Guion</strong></label>
                    <input type="text" class="form-control" id="guion" name="guion" placeholder="Guion" value="" required>
                    <div class="invalid-feedback">
                        Ingrese gui&oacute;n 
                    </div>
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="produccion" class="form-label"><strong>Produccion</strong></label>
                    <input type="text" class="form-control" id="produccion" name="produccion" placeholder="" required>
                    <div class="invalid-feedback">
                        Ingrese producci&oacute;n 
                    </div>
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                
                </div>
                <div class="col-sm-2">
                    <label for="anio" class="form-label"><strong>Año</strong></label>
                    <input type="number" class="form-control" id="anio" name="anio" placeholder="" min="1896" max="2050" required>
                    <div class="invalid-feedback">
                        A&nacute;o mayor a 1896 y menor a 2050.
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="nacionalidad" class="form-label"><strong>Nacionalidad</strong></label>
                    <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" placeholder="" pattern="^[a-zA-Z]*$" required>
                    <div class="invalid-feedback">
                        Ingrese Nacionalidad (solo se aceptan letras) 
                    </div>
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                </div>
                <div class="col-sm-4">
                    <label for="genero" class="form-label"><strong>Genero</strong></label>
                    <select class="form-select" aria-label="genero" id="genero" name="genero" required>
                        <option selected disabled value="">...</option>
                        <option value="comedia">Comedia</option>
                        <option value="drama">Drama</option>
                        <option value="terror">Terror</option>
                        <option value="romanticas">Romanticas</option>
                        <option value="suspenso">Suspenso</option>
                        <option value="otro">Otros</option>
                    </select>
                    <div class="invalid-feedback">
                        Seleccion un g&eacute;nero 
                    </div>
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                </div>
                <div class="col-sm-4">
                    <label for="duracion" class="form-label"><strong>Duraci&oacute;n</strong></label>
                    <input type="number" class="form-control" id="duracion" name="duracion" placeholder="" min="40" max="999" required>
                  
                    <div class="invalid-feedback position-absolute pt-3">
                        Tiene que ser un m&iacute;nimo 40 minutos y m&aacute;ximo 999 minutos.
                    </div>
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                    <small>(Minutos)</small>
                </div>
                <div class="col-sm-6 ps-4">
                    <div class="row">
                        <label for="restriccion" class="form-label mb-3"><strong>Restricciones de edad</strong></label>
                    </div>
                    <div class="row ps-4">
                        <div class="form-check col-sm-3">
                            <input id="Restriccion1" name="restriccion" type="radio" class="form-check-input" value="Todo Publico" required>
                            <label class="form-check-label"> Todo P&uacute;blico</label>
                        </div>
                        <div class="form-check  col-sm-4">
                            <input id="Restriccion2" name="restriccion" type="radio" class="form-check-input" value="Mayores de 7 años" required>
                            <label class="form-check-label"> Mayores de 7 años</label>
                        </div>
                        <div class="form-check  col-sm-4">
                            <input id="Restriccion3" name="restriccion" type="radio" class="form-check-input" value="Mayores de 10 años" required>
                            <label class="form-check-label"> Mayores de 10 años</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label"><strong>Im&aacute;gen</strong></label>
                    <input class="form-control" type="file" id="archivo" name="archivo" onchange="return fileValidation()" placeholder="" accept="image/png, .jpeg, .jpg" required>
                    <div class="invalid-feedback">
                        Seleccione una imagen (.png .jpg .jpeg) 
                    </div>
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                </div>
            </div>
            <div class="row g-3 pt-4 mt-3">
                <div class="col-sm">
                    <div class="mb-3">
                        <label for="sinopsis" class="form-label"><strong>Sinopsis</strong></label>
                        <textarea id="sinopsis" name="sinopsis" class="form-control" rows="3" required></textarea>
                        <div class="invalid-feedback">
                        Ingrese Sinopsis 
                    </div>
                    <div class="valid-feedback">
                        Correcto!
                    </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end mb-3">
                <button class="btn btn-primary me-2" type="submit">Enviar</button>
                <button id="borrar" name="borrar" class="btn btn-light btn-outline-dark" type="reset">Borrar</button>
            </div>
        </form>


    </div>
</div>
</div>
<script src="js/tp3ejercicio3.js"></script>
<?php
include_once 'estructura/footer.php';
?>