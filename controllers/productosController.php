<?php
    include '/xampp/htdocs/Web_Proyect/models/productosModel.php';

    class productosController{
        private $model;
        public function __construct(){
            $this->model = new productosModel();
        }
        public function insertar($nombre,$categoria,$imagen,$descripcion,$proveedor,$precio,$stock){
            return ($this->model->insertar(
                $nombre,$categoria,$imagen,$descripcion,$proveedor,$precio,$stock))
                ? header("Location:/Web_Proyect/views/admin/productos/index.php") : header("Location:/Web_Proyect/views/admin/productos/create.php");
        }
        public function getAllProducts(){
            return ($this->model->getAllProducts() != false) ? $this->model->getAllProducts() : false;
        }
        public function getProduct($id){
            return ($this->model->getProduct($id) != false) ? $this->model->getProduct($id) : false;
        }
        public function getProductsByCategory($categoria){
            return ($this->model->getProductsByCategory($categoria) != false) ? $this->model->getProductsByCategory($categoria) : false;
        }
        public function update($id,$nombre,$categoria,$imagen,$descripcion,$proveedor,$precio,$stock){
            return ($this->model->update(
                $id,$nombre,$categoria,$imagen,$descripcion,$proveedor,$precio,$stock))
                ? header("Location:/Web_Proyect/views/admin/productos/index.php") : header("Location:/Web_Proyect/views/admin/productos/edit.php?id=".$id);
        }

        public function disminuirStock($id,$cantidad){
            return ($this->model->disminuirStock($id,$cantidad)) ? true : false;
        }

        public function delete($id,$pathFile){
            if($this->model->delete($id)){
                $ruta_archivo_antiguo = '/xampp/htdocs/Web_Proyect/assets/images/'.$pathFile;
                file_exists($ruta_archivo_antiguo) ? unlink($ruta_archivo_antiguo) : '';
                header("Location:/Web_Proyect/views/admin/productos/index.php");
            }else{
                header("Location:/Web_Proyect/views/admin/productos/edit.php?id=".$id);
            }
        }
    }
?>