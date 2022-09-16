// Ejemplo de JavaScript inicial para deshabilitar el envío de formularios si hay campos no válidos
(function () {
  "use strict";

  // Obtener todos los formularios a los que queremos aplicar estilos de validación de Bootstrap personalizados
  var forms = document.querySelectorAll(".needs-validation");

  // Bucle sobre ellos y evitar el envío
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();
/*el boton input type reset,  resetea los campos pero no quita el mensaje de la clase is-valid del campo input file (archivo) cuando seleccionamos
 un archivo correcto y luego elegimos un archivo no valido, del campo input file*/
 const borrar = document.getElementById('borrar');

borrar.addEventListener("click", function () {
 

  var fileInput = document.getElementById("archivo");

 // quitamos la clase isvalid de input file (archivo), cuando resetemos el formulario
  fileInput.classList.remove("is-valid");
});

function fileValidation() {
  var fileInput = document.getElementById("archivo");

  var filePath = fileInput.value;

  // Tipos de archivos permitidos
  var extensionesPermitidas = /(\.jpg|\.jpeg|\.png)$/i;
  //verificamos que el archivo sea valido, que sea de las extensiones permitidas
  if (!extensionesPermitidas.exec(filePath)) {
    // eliminamos la clase is-valid
    fileInput.classList.remove("is-valid");
    // agregamos la clase is-invalid
    fileInput.classList.add("is-invalid");
    fileInput.value = "";
    return false;
  } else {
    // eliminamos la clase is-invalid
    fileInput.classList.remove("is-invalid");
    // agregamos la clase is-valid
    fileInput.classList.add("is-valid");
    /* https://stackoverflow.com/questions/69894643/custom-validation-with-bootstrap-v5
            https://www.geeksforgeeks.org/file-type-validation-while-uploading-it-using-javascript/#:~:text=Using%20JavaScript%2C%20you%20can%20easily,complete%20file%20type%20validation%20code. */
  }
}
