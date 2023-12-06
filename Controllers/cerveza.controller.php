<?php
require_once('../Models/cls_cerveza.model.php');

$cervezas = new Clase_Cervezas;

switch ($_GET["op"]) {
    case 'todas':
        $datos = array();
        $datos = $cervezas->todas();
        while ($fila = mysqli_fetch_assoc($datos)) {
            $todas[] = $fila;
        }
        echo json_encode($todas);
        break;
    case "una":
        $id = $_POST["id"];
        $datos = array();
        $datos = $cervezas->una($id);
        $una = mysqli_fetch_assoc($datos);
        echo json_encode($una);
        break;
    case 'insertar':
            // Asegúrate de recibir los datos correctos del formulario
        $nombre = $_POST["nombre"];
        $tipo = $_POST["tipo"];
        $alcohol = $_POST["alcohol"];
        $ibu = $_POST["ibu"];
        $descripcion = $_POST["descripcion"];
    
        $datos = array();
    
            // Utiliza la función insertar del modelo
        $datos = $cervezas->insertar($nombre, $tipo, $alcohol, $ibu, $descripcion);
            
            // Envía una respuesta JSON al cliente
        echo json_encode($datos);
        break;
    case 'actualizar':
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $tipo = $_POST["tipo"];
        $alcohol = $_POST["alcohol"];
        $ibu = $_POST["ibu"];
        $descripcion = $_POST["descripcion"];
        $datos = array();//defino un arreglo
        $datos = $cervezas->actualizar($id, $nombre, $tipo, $alcohol, $ibu, $descripcion);//llamo al modelo de usuarios e invoco al procedimiento insertar
        echo json_encode($datos);//devuelvo el arreglo en formato json
        break;
    case 'eliminar':
        $id = $_POST["id"];
        $datos = array();
        $datos = $cervezas->eliminar($id);
        echo json_encode($datos);
        break;
}
?>
