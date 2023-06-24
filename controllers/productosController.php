<?php
    require_once('/xampp/htdocs/Web_Proyect/models/productosModel.php');

    class productosController{
        private $model;

        public function __construct()
        {
            $this->model = new productosModel();
        }

        public function guardarProductos($nombre, $txtImgProd, $descripcion, $categoria, $proveedor, $costo, $stock)
        {   
            $id = $this->model->insertProduct($nombre, $txtImgProd, $descripcion, $categoria, $proveedor, $costo, $stock);
            return ($id!=false)? header('Location:show.php?id='.$id): header('Location: create.php');
        }

        public function showProduct($id)
        {
            return ($this->model->showProduct($id))!=false ?  $this->model->showProduct($id) : header(Location: index.php);
        }

        public function indexProduct()
        {
            return ($this->model->indexProduct())? $this->model->indexProduct() : false;
        }

        public function updateProduct($id,$nombre, $txtImgProd, $descripcion, $categoria, $proveedor, $costo, $stock)
        {
            return ($this->model->updateProduct($id, $nombre, $txtImgProd, $descripcion, $categoria, $proveedor, $costo, $stock)!= false ? header('Location:show.php?id='.$id): header('Location: index.php'));
        }

        public function deleteProduct($id)
        {
            return ($this->model->deleteProduct($id)!= false ? header('Location:index.php'): header('Location: show.php?id='.$id));
        }

        public function getProductsByCategory($categoria)
        {
            return ($this->model->getProductsByCategory($categoria) != false) ? $this->model->getProductsByCategory($categoria) : false;
        }
    }
?>