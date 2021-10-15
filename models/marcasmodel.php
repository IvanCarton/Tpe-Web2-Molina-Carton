<?php

class MarcasModel
{
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_marca;charset=utf8', 'root', '');
    }

    //Sentencias SQL tabla Auto.

    function getAllMarcas() {

        $query = $this->db->prepare('SELECT * FROM marca');
        $query->execute();
        $marcas = $query->fetchAll(PDO::FETCH_OBJ);

        return $marcas;
    }

    //Insert Marca
    function setMarca(string $nombre)
    {
        $query = $this->db->prepare('INSERT INTO marca (nombre) VALUES (?)');
        $query->execute([$nombre]);

        return $this->db->lastInsertId();
    }

      /**
     * Actualiza una tarea en la DB
     */
    function updateTask($id) {
        $query = $this->db->prepare('UPDATE task SET finalizada=1 WHERE id=?');
        $query->execute([$id]);
    }


    //Modificar una Marca
    function updateMarca(int $id, string $nombre)
    {
        $query = $this->db->prepare('UPDATE marca SET nombre=? WHERE idMarca=?');
        $query->execute([$id]);
        $sql = "UPDATE marca SET nombre = ? WHERE idMarca = $id";
        $arrData = array($nombre);
        $request = $this->update($sql,$arrData);
        return $request;
    }

    //Eliminar una Marca
    public function delMarca($id)
    {
        $sql = "DELETE FROM marca WHERE idMarca = $id";
        $request = $this->delete($sql);
        return $request;
    }

     /**
     * Elimina una tarea en la DB
     */
    function deleteTask($id) {    
        $query = $this->db->prepare('DELETE FROM task WHERE id=?');
        $query->execute([$id]);
    }

  
}

?>