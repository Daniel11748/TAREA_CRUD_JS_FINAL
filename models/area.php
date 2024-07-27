<?php
require_once 'conexion.php';

class Area extends Conexion
{
    public $are_id;
    public $are_nombre;
    public $are_situacion;


    public function __construct($args = [])
    {
        $this->are_id = $args['are_id'] ?? null;
        $this->are_nombre = $args['are_nombre'] ?? '';
        $this->are_situacion = $args['are_situacion'] ?? '';
    }

    public function guardar()
    {
        $sql = "INSERT INTO areas (are_nombre) values ('$this->are_nombre')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar()
    {
        $sql = "SELECT * from areas where are_situacion = 1 ";

        if ($this->are_nombre != '') {
            $sql .= " and are_nombre like '%$this->are_nombre%' ";
        }

        if ($this->are_id != null) {
            $sql .= " and are_id = '$this->are_id' ";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function modificar()
    {
        $sql = "UPDATE areas SET are_nombre = $this->are_nombre where are_id = $this->are_id";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
//CUANDO SE USA UN UPDATE SIEMPRE SE DEBE VERIFICAR QUE LLEVE EL "WHERE" EN EL SQL PARA NO MODIFICAR TODOS LOS DARTOS DE NUESTRA TABLA.

    public function eliminar()
    {
        $sql = "UPDATE areas SET are_situacion = 0 where are_id = $this->are_id";

        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}

