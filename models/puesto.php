<?php
require_once 'conexion.php';

class Puesto extends Conexion
{
    public $pue_id;
    public $pue_nombre;
    public $pue_sueldo;
    public $pue_situacion;


    public function __construct($args = [])
    {
        $this->pue_id = $args['pue_id'] ?? null;
        $this->pue_nombre = $args['pue_nombre'] ?? '';
        $this->pue_sueldo = $args['pue_sueldo'] ?? 0;
        $this->pue_situacion = $args['pue_situacion'] ?? '';
    }

    public function guardar()
    {
        $sql = "INSERT INTO puestos (pue_nombre, pue_sueldo) values ('$this->pue_nombre','$this->pue_sueldo')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar()
    {
        $sql = "SELECT * from puestos where pue_situacion = 1 ";

        if ($this->pue_nombre != '') {
            $sql .= " and pue_nombre like '%$this->pue_nombre%' ";
        }

        if ($this->pue_sueldo != '') {
            $sql .= " and pue_sueldo = '$this->pue_sueldo' ";
        }

        if ($this->pue_id != null) {
            $sql .= " and pue_id = '$this->pue_id' ";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function modificar()
    {
        $sql = "UPDATE puestos SET pue_nombre = '$this->pue_nombre', pue_sueldo = $this->pue_sueldo where pue_id = $this->pue_id";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
//CUANDO SE USA UN UPDATE SIEMPRE SE DEBE VERIFICAR QUE LLEVE EL "WHERE" EN EL SQL PARA NO MODIFICAR TODOS LOS DARTOS DE NUESTRA TABLA.

    public function eliminar()
    {
        $sql = "UPDATE puestos SET pue_situacion = 0 where pue_id = $this->pue_id";

        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}

