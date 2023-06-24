<?php

    require_once('/xampp/htdocs/Web_Proyect/config/db.php');

    class usuariosModel{
        private $PDO;
        public function __construct()
        {        
            $con = new db();
            $this-> PDO = $con-> conexion();
        }

        public function insertar($names, $lastnames, $email, $password)
        {
            $stament = $this->PDO->prepare('INSERT INTO usuarios (names, lastnames, email, pass) VALUES (:names, :lastnames, :email, :pass)');
            $stament->bindParam(':names',$names);
            $stament->bindParam(':lastnames',$lastnames);
            $stament->bindParam(':email',$email);
            $stament->bindParam(':pass',$password);
            return($stament->execute() ? $this->PDO->lastInsertId() : false);
        }

        public function show($id)
        {
            $stament = $this->PDO->prepare('SELECT * FROM usuarios where id = :id limit 1');
            $stament->bindParam(':id', $id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }

        public function index(){
            $stament = $this->PDO->prepare('SELECT * FROM usuarios');
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }

        public function update($id, $names, $lastnames, $email, $password)
        {
            $stament = $this->PDO->prepare('UPDATE usuarios SET names = :names, lastnames = :lastnames, email = :email, pass = :pass WHERE id = :id ');
            $stament->bindParam(':id',$id);
            $stament->bindParam(':names',$names);
            $stament->bindParam(':lastnames',$lastnames);
            $stament->bindParam(':email',$email);
            $stament->bindParam(':pass',$password);
            return ($stament->execute()) ? $id : false;
        }

        public function delete($id)
        {
            $stament = $this->PDO->prepare('DELETE FROM usuarios WHERE id = :id');
            $stament->bindParam(':id',$id);
            return ($stament->execute()) ? true : false;
        }

        public function login($correo,$password){
            $statement = $this->PDO->prepare("SELECT * FROM usuarios WHERE email = :correo AND pass = :password");
            $statement->bindParam(":correo",$correo);
            $statement->bindParam(":password",$password);
            return ($statement->execute() && $statement->rowCount() > 0) ? true : false;
        }

        public function registrar($nombre,$apellidos,$correo,$password){
            $sqlValidation = $this->PDO->prepare("SELECT * FROM usuarios WHERE email = :correo LIMIT 1");
            $sqlValidation->bindParam(":correo",$correo);
            if($sqlValidation->execute() && $sqlValidation->rowCount() > 0){
                return false;
            } else{
                $statement = $this->PDO->prepare( "INSERT INTO usuarios (names, lastnames, email, pass) VALUES
                (:nombre,:apellidos,:correo,:pass)");

                $statement->bindParam(":nombre",$nombre);
                $statement->bindParam(":apellidos",$apellidos);
                $statement->bindParam(":correo",$correo);
                $statement->bindParam(":pass",$password);
                return ($statement->execute()) ? $this->PDO->lastInsertId() : false;
            }
        }
    }
?>