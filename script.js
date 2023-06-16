"use strict";

const enviarCodigos = () => {
  if ($("#areaCodigos").val() != null) {
    $.post(
      "./generador.php",
      {
        cadena: $("#areaCodigos").val(),
      },
      (resp, status) => {
        const data = resp.split("|");
        if (data[0] == "1") {
          window.location.href = './public/'+data[1];
        } else {
          Swal.fire({
            icon: "error",
            title: "Oops...",
            text: data[1] || "Ha ocurrido un error",
          });
        }
      }
    );
  }
};
