<?php
    include '/xampp/htdocs/Web_Proyect/models/boletasModel.php';

    class boletasController{
        private $model;
        public function __construct(){
            $this->model = new boletasModel();
        }
        public function insertar($fecha,$usuario,$productos,$pagoTotal){
            return ($this->model->insertar($fecha,$usuario,$productos,$pagoTotal)) ?
            header("Location:/Web_Proyect/views/site/productos.php") :
            header("Location:/Web_Proyect/views/site/carrito.php");
        }
        public function getAllBoletas(){
            return ($this->model->getAllBoletas() != false) ? $this->model->getAllBoletas() : false;
        }
    }
?>