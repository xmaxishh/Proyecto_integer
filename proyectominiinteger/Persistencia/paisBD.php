<?php
include_once 'conexion.php';
// Carga datos a la tabla pais
class paisBD extends conexion {
    public function cargarPaises($bandera, $nombre) {
        $conexion = $this->Conectar();

        $sql = "INSERT INTO pais (bandera, nombre)
                VALUES ('$bandera', '$nombre')";

        if ($conexion->query($sql)) {
            echo "Se ha insertado el nuevo país";
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }

        $this->desconectar();
    }
}

?>