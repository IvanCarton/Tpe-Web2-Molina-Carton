<?php

class AutosModel
{
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_marca;charset=utf8', 'root', '');
    }

    //Sentencias SQL tabla Auto.

    function getAllAutos() {
        //Enviam la consulta Sql
        $query = $this->db->prepare('SELECT a.idAuto, a.modelo, a.anio, a.tipo, b.nombre FROM auto a INNER JOIN marca b ON a.id_Marca = b.idMarca');
        $query->execute();

        //Obtengo la respuesta de la DB
        $autos = $query->fetchAll(PDO::FETCH_OBJ); // obtengo un arreglo con TODAS las tareas

        return $autos;
    }

        //Mostrar un Auto (Detalle de Item) (Hay que hacer un INNER JOIN para traer el nombre de la marca en vez del Id_marca)
    public function getAuto($id)
    {
        $query = $this->db->prepare('SELECT a.idAuto, a.modelo, a.anio, a.tipo, b.nombre FROM auto a INNER JOIN marca b ON a.id_Marca = b.idMarca WHERE a.idAuto = ?');
        $query->execute([$id]);
        $autos = $query->fetchAll(PDO::FETCH_OBJ);
        return $autos;
    }

        //Listado de autos de una marca (Listado de Items x Categoria)
    public function getAutos_marca($id_marca)
    {
        $query = $this->db->prepare('SELECT a.idAuto, a.modelo, a.anio, a.tipo, b.nombre FROM auto a INNER JOIN marca b ON a.id_Marca = b.idMarca WHERE b.idMarca = ?');
        $query->execute([$id_marca]);
        $autos = $query->fetchAll(PDO::FETCH_OBJ);
        return $autos;
    }

    //Insert Auto
    public function setAuto(string $modelo, int $anio, string $tipo, int $id_marca)
    {
        $query_insert = "INSERT INTO auto (modelo,anio,tipo,id_marca) VALUES (?,?,?,?)";
        $arrData = array($modelo, $anio, $tipo, $id_marca);
        $request_insert = $this->insert($query_insert,$arrData);
        return $request_insert;
    }

    //Modificar un Auto
    public function updateAuto(int $id, string $modelo, int $anio, string $tipo, int $id_marca)
    {
        $sql = "UPDATE auto SET modelo = ?, anio = ?, tipo = ?, id_marca = ? WHERE idAuto = $id";
        $arrData = array($modelo, $anio, $tipo, $id_marca);
        $request = $this->update($sql,$arrData);
        return $request;
    }

    //Borrar un Auto
    function deleteAuto($id)
    {
        $query = $this->db->prepare('DELETE FROM auto WHERE id = ?');
        $query->execute([$id]);
    }
}

?>