<?php
    include '/xampp/htdocs/Web_Proyect/models/usuariosModel.php';

    class usuariosController{
        private $model;
        
        public function __construct()
        {
            $this->model =  new usuariosModel();
        }
        
        public function guardar($nombre, $lastnames, $email, $password)
        {
            $id = $this->model->insertar($nombre, $lastnames, $email, $password);
            return ($id!=false)?header('Location:show.php?id='.$id):header('Location:create.php');
        }

        public function show($id)
        {
            return ($this->model->show($id))!=false ?  $this->model->show($id) : header(Location: index.php);
        }

        public function index()
        {
            return ($this->model->index())? $this->model->index() : false;
        }

        public function update($id, $names, $lastnames, $email, $password)
        {
            return ($this->model->update($id, $names, $lastnames, $email, $password)!= false ? header('Location:show.php?id='.$id): header('Location: index.php'));
        }

        public function delete($id)
        {
            return ($this->model->delete($id)!= false ? header('Location:index.php'): header('Location: show.php?id='.$id));
        }

        public function login($correo,$password){
            return ($this->model->login($correo,$password) != false) ?
            header("Location:/Web_Proyect/views/site/productos.php") :
            header("Location:/Web_Proyect/views/site/login.php?id=Invalid");
        }

        public function registrar($nombres,$apellidos,$correo,$password){
            return ($this->model->registrar($nombres,$apellidos,$correo,$password)) ?
            header("Location:/Web_Proyect/views/site/productos.php") :
            header("Location:/Web_Proyect/views/site/login.php?id=Invalid");
        }
    }
?>