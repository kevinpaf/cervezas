class Cervezas_Model {
  constructor(
    id,
    nombre,
    tipo,
    alcohol,
    ibu,
    descripcion,
    Ruta
  ) {
    this.id = id;
    this.nombre = nombre;
    this.tipo = tipo;
    this.alcohol = alcohol;
    this.ibu = ibu;
    this.descripcion = descripcion;
    this.Ruta = Ruta;
  }

  todas() {
    var html = "";
    $.get("../../Controllers/cerveza.controller.php?op=" + this.Ruta, (res) => {
      res = JSON.parse(res);
      $.each(res, (index, valor) => {
        html += `<tr>
          <td>${index + 1}</td>
          <td>${valor.nombre}</td>
          <td>${valor.tipo}</td>
          <td>${valor.alcohol}</td>
          <td>${valor.ibu}</td>
          <td>${valor.descripcion}</td>
          <td>
            <button class='btn btn-success' onclick='editar(${valor.id})'>Editar</button>
            <button class='btn btn-danger' onclick='eliminar(${valor.id})'>Eliminar</button>
            <button class='btn btn-info' onclick='ver(${valor.id})'>Ver</button>
          </td>
        </tr>`;
      });
      $("#tabla_cervezas").html(html);
    });
  }

  insertar() {
    var datos = new FormData();
    datos = this.descripcion;

    $.ajax({
      url: "../../Controllers/cerveza.controller.php?op=insertar",
      type: "POST",
      data: datos,
      contentType: false,
      processData: false,
      success: function (res) {
        res = JSON.parse(res);
        if (res === "ok") {
          Swal.fire("Cerveza", "Registrada", "success");
          todas_cervezas();
        } else {
          Swal.fire("Error", res, "error");
        }
      }
    });

    this.limpia_Cajas();
  }

  limpia_Cajas() {
    document.getElementById("nombre").value = "";
    document.getElementById("tipo").value = "";
    document.getElementById("alcohol").value = "";
    document.getElementById("ibu").value = "";
    document.getElementById("descripcion").value = "";
    $("#Modal_cerveza").modal("hide");
  }
}

// Puedes agregar más funciones según sea necesario

// Funciones adicionales para manipular la interfaz o realizar otras acciones
function editar(id) {
  // Implementa la lógica para editar una cerveza
}

function eliminar(id) {
  // Implementa la lógica para eliminar una cerveza
}

function ver(id) {
  // Implementa la lógica para ver detalles de una cerveza
}
