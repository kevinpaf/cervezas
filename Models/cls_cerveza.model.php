<?php
require_once('cls_conexion.model.php');

class Clase_Cervezas
{
    public function todas()
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            $cadena = "SELECT * FROM `cervezas`";
            $result = mysqli_query($con, $cadena);
            return $result;
        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }

    public function una($id)
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            $cadena = "SELECT * FROM `cervezas` WHERE id=$id";
            $result = mysqli_query($con, $cadena);
            return $result;
        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }
    public function insertar($nombre, $tipo, $alcohol, $ibu, $descripcion)
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            $cadena = "INSERT INTO `cervezas`(`nombre`, `tipo`, `alcohol`, `ibu`, `descripcion`) VALUES('$nombre','$tipo','$alcohol','$ibu','$descripcion')";
            $result = mysqli_query($con, $cadena);

            // Aquí puedes realizar más operaciones después de insertar, si es necesario

            return 'ok';
        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }
       
 
    public function actualizar($id, $nombre, $tipo, $alcohol, $ibu, $descripcion)
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            $cadena = "UPDATE `Cervezas` SET `nombre`='$nombre', `tipo`='$tipo', `alcohol`='$alcohol', `ibu`='$ibu', `descripcion`='$descripcion' WHERE `id`= $id";
            $result = mysqli_query($con, $cadena);
            return "ok";
        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }

    public function eliminar($id)
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            $cadena = "DELETE FROM `Cervezas` WHERE id=$id";
            $result = mysqli_query($con, $cadena);
            return "ok";
        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }
}
?>
