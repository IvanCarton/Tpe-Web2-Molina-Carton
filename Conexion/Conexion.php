<?php 

    class Conexion{

        const DB_HOST = "localhost";
        const DB_NAME = "db_marca";
        const DB_USER = "root";
        const DB_PASSWORD = "";
        const DB_CHARSET = "charset=utf8";

        private $conect;
        
        public function __construct(){
            $connectionString = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";.DB_CHARSET.";
            try{
                $this->conect = new PDO($connectionString,DB_USER,DB_PASSWORD);
                $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //echo "Conexion Exitosa";
            } catch (Exception $e){
                $this->conect = 'Error de Conexion';
                echo "ERROR:". $e->getMessage();
            }
        }
        public function conect(){
            return $this->conect;
        }
    }

?>