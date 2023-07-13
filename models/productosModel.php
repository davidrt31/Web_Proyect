<?php
    require_once '/xampp/htdocs/Web_Proyect/config/db.php';

    class productosModel{
        private $PDO;
        public function __construct(){
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($nombre,$categoria,$imagen,$descripcion,$proveedor,$precio,$stock){
            $statement = $this->PDO->prepare(
                "INSERT INTO productos VALUES(null,:nombre,:categoria,
                :imagen,:descripcion,:proveedor,:precio,:stock)");

            $statement->bindParam(":nombre",$nombre);
            $statement->bindParam(":categoria",$categoria);
            $statement->bindParam(":imagen",$imagen);
            $statement->bindParam(":descripcion",$descripcion);
            $statement->bindParam(":proveedor",$proveedor);
            $statement->bindParam(":precio",$precio);
            $statement->bindParam(":stock",$stock);
            return ($statement->execute()) ? $this->PDO->lastInsertId() : false;
        }
        public function getAllProducts(){
            $statement = $this->PDO->prepare("SELECT * FROM productos");
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }
        public function getProduct($id){
            $statement = $this->PDO->prepare("SELECT * FROM productos WHERE id = :id LIMIT 1");
            $statement->bindParam(":id",$id);
            return ($statement->execute()) ? $statement->fetch() : false;
        }
        public function getProductsByCategory($categoria){
            $statement = $this->PDO->prepare("SELECT * FROM productos WHERE categoria = :categoria");
            $statement->bindParam(":categoria",$categoria);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }
        public function update($id,$nombre,$categoria,$imagen,$descripcion,$proveedor,$precio,$stock){
            $statement = $this->PDO->prepare(
                "UPDATE productos SET nombre = :nombre, categoria = :categoria,
                imagen = :imagen, descripcion = :descripcion, proveedor = :proveedor,
                precio = :precio, stock = :stock WHERE id = :id");

            $statement->bindParam(":id",$id);
            $statement->bindParam(":nombre",$nombre);
            $statement->bindParam(":categoria",$categoria);
            $statement->bindParam(":imagen",$imagen);
            $statement->bindParam(":descripcion",$descripcion);
            $statement->bindParam(":proveedor",$proveedor);
            $statement->bindParam(":precio",$precio);
            $statement->bindParam(":stock",$stock);
            return ($statement->execute()) ? $id : false;
        }

        //UPDATE productos SET stock = stock - 1 WHERE id = 1;

        public function disminuirStock($id,$cantidad){
            $statement = $this->PDO->prepare("UPDATE productos SET stock = stock - :cantidad WHERE id = :id");
            $statement->bindParam(":id",$id);
            $statement->bindParam(":cantidad",$cantidad);
            return ($statement->execute()) ? true : false;
        }

        public function delete($id){
            $statement = $this->PDO->prepare("DELETE FROM productos WHERE id = :id");
            $statement->bindParam(":id",$id);
            return ($statement->execute()) ? true : false;
        }
    }
?>