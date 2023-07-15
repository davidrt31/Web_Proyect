<?php
    require_once '/xampp/htdocs/Web_Proyect/config/db.php';

    class boletasModel{
        private $PDO;
        public function __construct(){
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($fecha,$usuario,$productos,$pagoTotal){
            $query = "SELECT MAX(id_boleta) AS last_id FROM boletas";
            $stmt = $this->PDO->prepare($query);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $lastId = $result['last_id'] + 1;

            $codigo = 'DG' . str_pad($lastId, 4, '0', STR_PAD_LEFT);
            $statement = $this->PDO->prepare(
                "INSERT INTO boletas (codigo_boleta, fecha, usuario, productos, pago_total) VALUES(:codigo,:fecha,:usuario,:productos,:pagoTotal)");
            $statement->bindParam(':codigo', $codigo);
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
        public function getBoletafromEmail($email){
            $statement = $this->PDO->prepare('SELECT * FROM boletas WHERE usuario = :email');
            $statement->bindParam(':email', $email);
            return ($statement->execute())? $statement->fetchAll() : false;
        }
    }
?>