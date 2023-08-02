    // Capturar el evento "DOMContentLoaded" para ejecutar el código después de que se haya cargado el DOM
    document.addEventListener("DOMContentLoaded", function() {
      // Obtener la referencia al campo "fecha" del formulario
      var fechaInput = document.getElementById("fecha");

      // Obtener la fecha actual
      var fechaActual = new Date();

      // Formatear la fecha en el formato "YYYY-MM-DD" (puedes ajustar el formato según tus necesidades)
      var fechaFormateada = fechaActual.toISOString().split("T")[0];

      // Asignar la fecha formateada al campo "fecha" del formulario
      fechaInput.value = fechaFormateada;
  });