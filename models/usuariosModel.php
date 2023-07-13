<?php

    require_once('/xampp/htdocs/Web_Proyect/config/db.php');

    class usuariosModel{
        private $PDO;
        public function __construct()
        {        
            $con = new db();
            $this-> PDO = $con-> conexion();
        }
        public function login($correo,$password){
            $statement = $this->PDO->prepare("SELECT * FROM usuarios WHERE correo = :correo AND password = :password");
            $statement->bindParam(":correo",$correo);
            $statement->bindParam(":password",$password);
            return ($statement->execute() && $statement->rowCount() > 0) ? $statement->fetch() : false;
        }
        public function registrar($nombre,$apellido_paterno,$apellido_materno,$correo,$password){
            $sqlValidation = $this->PDO->prepare("SELECT * FROM usuarios WHERE correo = :correo LIMIT 1");
            $sqlValidation->bindParam(":correo",$correo);
            if($sqlValidation->execute() && $sqlValidation->rowCount() > 0){
                return false;
            } else{
                $statement = $this->PDO->prepare( "INSERT INTO usuarios VALUES
                (null,:nombre,:apellidoP,:apellidoM,:correo,:password)");

                $statement->bindParam(":nombre",$nombre);
                $statement->bindParam(":apellidoP",$apellido_paterno);
                $statement->bindParam(":apellidoM",$apellido_materno);
                $statement->bindParam(":correo",$correo);
                $statement->bindParam(":password",$password);
                return ($statement->execute()) ? $this->PDO->lastInsertId() : false;
            }
        }
        public function getUser($id){
            $statement = $this->PDO->prepare("SELECT * FROM usuarios WHERE id = :id LIMIT 1");
            $statement->bindParam(":id",$id);
            return ($statement->execute()) ? $statement->fetch() : false;
        }
        public function getAllUsers(){
            $statement = $this->PDO->prepare("SELECT * FROM usuarios");
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }
        public function update($id,$nombre,$apelliP,$apelliM,$correo,$password){
            $statement = $this->PDO->prepare(
                "UPDATE usuarios SET nombre = :nombre, apellido_paterno = :apelliP,
                apellido_materno = :apelliM, correo = :correo, password = :password
                WHERE id = :id");

            $statement->bindParam(":id",$id);
            $statement->bindParam(":nombre",$nombre);
            $statement->bindParam(":apelliP",$apelliP);
            $statement->bindParam(":apelliM",$apelliM);
            $statement->bindParam(":correo",$correo);
            $statement->bindParam(":password",$password);
            return ($statement->execute()) ? $id : false;
        }
        public function delete($id){
            $statement = $this->PDO->prepare("DELETE FROM usuarios WHERE id = :id");
            $statement->bindParam(":id",$id);
            return ($statement->execute()) ? true : false;
        }
    }
?>