<?php 
    
    require_once('/xampp/htdocs/Web_Proyect/config/db.php');

    class productosModel{
        private $PDO;

        public function __construct()
        {
            $con = new db();
            $this-> PDO = $con -> conexion();
        }

        public function insertProduct($nombre, $txtImgProd, $descripcion, $categoria, $proveedor, $costo, $stock)
        {
            $stament = $this->PDO->prepare('INSERT INTO productos (name_prod, img_prod, cate_prod, desc_prod, prov_prod, cost_prod, stock_prod) VALUES (:name_prod, :img_prod, :cate_prod, :desc_prod, :prov_prod, :cost_prod, :stock_prod)');
            $stament->bindParam(':name_prod', $nombre);

            //TODO: Código para el ingreso de una imagen
            $txtImgProd=(isset($_FILES['txtImgProd']['name']))?$_FILES['txtImgProd']['name']:"";
            $fecha= new DateTime();
            $nombreArchivo=($txtImgProd!="")?$fecha->getTimestamp()."_".$_FILES["txtImgProd"]["name"]:"NOT FOUNDED.png";
            $tmpImagen=$_FILES["txtImgProd"]["tmp_name"];
            
            if($tmpImagen!=""){
                move_uploaded_file($tmpImagen,"/xampp/htdocs/Web_Proyect/assets/images/".$nombreArchivo);
            }

            $stament->bindParam(':img_prod', $nombreArchivo);
            $stament->bindParam(':cate_prod', $categoria);
            $stament->bindParam(':desc_prod', $descripcion);
            $stament->bindParam(':prov_prod', $proveedor);
            $stament->bindParam(':cost_prod', $costo);
            $stament->bindParam(':stock_prod', $stock);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
        }

        public function showProduct($id)
        {
            $stament = $this->PDO->prepare('SELECT * FROM productos where id = :id limit 1');
            $stament->bindParam(':id', $id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }

        public function indexProduct()
        {
            $stament = $this->PDO->prepare('SELECT * FROM productos');
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }

        public function updateProduct($id, $nombre, $txtImgProd, $descripcion, $categoria, $proveedor, $costo, $stock)
        {
            $stament = $this->PDO->prepare('UPDATE productos SET name_prod = :name_prod, cate_prod = :cate_prod, desc_prod = :desc_prod, prov_prod = :prov_prod, cost_prod = :cost_prod, stock_prod = :stock_prod WHERE id = :id');
            $stament->bindParam(':id', $id);
            $stament->bindParam(':name_prod', $nombre);
            $stament->bindParam(':cate_prod', $categoria);
            $stament->bindParam(':desc_prod', $descripcion);
            $stament->bindParam(':prov_prod', $proveedor);
            $stament->bindParam(':cost_prod', $costo);
            $stament->bindParam(':stock_prod', $stock);
            
            
            $txtImgProd=(isset($_FILES['txtImgProd']['name']))?$_FILES['txtImgProd']['name']:"";
            
            if($txtImgProd!=""){

                $fecha = new DateTime();
                $nombreArchivo=($txtImgProd!="")?$fecha->getTimestamp()."_".$_FILES['txtImgProd']['name']:"NOT FOUNDED.png";

                $tmpImagen=$_FILES["txtImgProd"]["tmp_name"];
                move_uploaded_file($tmpImagen,"/xampp/htdocs/Web_Proyect/assets/images/".$nombreArchivo);

                $statement= $this->PDO->prepare("SELECT img_prod FROM productos WHERE id=:id");
                $statement->bindParam(':id',$id);
                $statement->execute();
                $Producto=$statement->fetch(PDO::FETCH_LAZY);

                if(isset($Producto['img_prod']) && ($Producto['img_prod']!='NOT FOUNDED.png')){
                    if(file_exists("/xampp/htdocs/Web_Proyect/assets/images/".$Producto['img_prod'])){
                        unlink("/xampp/htdocs/Web_Proyect/assets/images/".$Producto['img_prod']);
                    }
                }
                $statement=$this->PDO->prepare("UPDATE productos SET img_prod=:img_prod WHERE id=:id");
                $statement->bindParam(':id',$id);
                $statement->bindParam(':img_prod',$nombreArchivo);
                $statement->execute();
            }


            return ($stament->execute()) ? $id : false;
        }

        public function deleteProduct($id)
        {
            $stament=$this->PDO->prepare("SELECT imagen FROM productos WHERE id=:id");
            $stament->bindParam(':id',$id);
            $stament->execute();
            $Producto=$stament->fetch(PDO::FETCH_LAZY);

            if(isset($Producto["img_prod"])&&($Producto["img_prod"]!="NOT FOUNDED.png")){
                if(file_exists("/xampp/htdocs/Web_Proyect/assets/images/".$Producto["img_prod"])){
                    unlink("/xampp/htdocs/Web_Proyect/assets/images/".$Producto["img_prod"]);
                }
            }

            $stament = $this->PDO->prepare('DELETE FROM productos WHERE id = :id');
            $stament->bindParam(':id',$id);
            return ($stament->execute()) ? true : false;
        }

        public function getProductsbyCategory($categoria)
        {
            $statement = $this->PDO->prepare("SELECT * FROM productos WHERE cate_prod = :cate_prod");
            $statement->bindParam(":cate_prod",$categoria);
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }
    }
?>