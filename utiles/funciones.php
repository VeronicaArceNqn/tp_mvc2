<?php 
function data_submitted()
{   //creamos un array vacio
    $_AAux = array();
    //verificamos que $_POST no este vacio
    if (!empty($_POST))
    {
        //les asignamos a _AAux los valores de $_POST
        $_AAux = $_POST;
    }
    else{
    //Sino verificamos que $_GET no este vacio
       if (!empty($_GET))
      {
        //les asignamos a _AAux los valores de $_GET
        $_AAux = $_GET;
      }
    }
    //comprobamos si el array $_AAux no este vacio
    if (count($_AAux)>0) {
        foreach ($_AAux as $indice => $valor) {
            //si el valor del campo esta vacio
            if ($valor == "")
            { //al campo le asignamos null
                 $_AAux[$indice] = 'null';
            }
        }
    }
    return $_AAux;
}
