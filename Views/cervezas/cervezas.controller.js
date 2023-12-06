// Archivo de controlador de cervezas
function init_cervezas() {
    $("#form_cervezas").on("submit", function (e) {
      guardar_cerveza(e);
    });
  
    // Otras inicializaciones si es necesario
  }
  
  $().ready(() => {
    // Detecta carga de la página
    todas_cervezas();
  });
  
  var todas_cervezas = () => {
    var todasCervezas = new Cervezas_Model("","","","","","","todas");
    todasCervezas.todas();
  }
  
  var guardar_cerveza = (e) => {
    e.preventDefault();
    var formData = new FormData($("#form_cervezas")[0]);
    var cerveza = new Cervezas_Model('', '', '', '','', formData, 'insertar');
    cerveza.insertar();
  }
/*   function insertar_cerveza() {
    var nombre = $("#nombre").val();
    var tipo = $("#tipo").val();
    var alcohol = $("#alcohol").val();
    var ibu = $("#ibu").val();
    var descripcion = $("#descripcion").val();

    var modelo = new Cervezas_Model(null, nombre, tipo, alcohol, ibu, descripcion, "todas");
    modelo.insertar();
} */

  // Otras funciones necesarias para el controlador de cervezas
  
  ;init_cervezas();




