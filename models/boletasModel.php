<?php
    require_once '/xampp/htdocs/Web_Proyect/config/db.php';

    class boletasModel{
        private $PDO;
        public function __construct(){
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($fecha,$usuario,$productos,$pagoTotal){
            $statement = $this->PDO->prepare(
                "INSERT INTO boletas VALUES(null,:fecha,:usuario,:productos,:pagoTotal)");

            $statement->bindParam(":fecha",$fecha);
            $statement->bindParam(":usuario",$usuario);
            $statement->bindParam(":productos",$productos);
            $statement->bindParam(":pagoTotal",$pagoTotal);
            return ($statement->execute()) ? $this->PDO->lastInsertId() : false;
        }
        public function getAllBoletas(){
            $statement = $this->PDO->prepare("SELECT * FROM boletas");
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }
    }
?>