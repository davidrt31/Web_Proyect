<?php
    include '/xampp/htdocs/Web_Proyect/models/usuariosModel.php';

    class usuariosController{
        private $model;
        
        public function __construct()
        {
            $this->model =  new usuariosModel();
        }
        public function login($correo,$password){
            $loginUsuario = $this->model->login($correo,$password);
            if($loginUsuario != false){
                session_start();
                $_SESSION['usuario'] = $loginUsuario;
                return header("Location:/Web_Proyect/views/site/productos.php");
            } else{
                return header("Location:/Web_Proyect/views/site/login.php?id=Invalid");
            }
        }
        public function registrar($nombre,$apellido_paterno,$apellido_materno,$correo,$password){
            return ($this->model->registrar($nombre,$apellido_paterno,$apellido_materno,$correo,$password)) ?
            header("Location:/Web_Proyect/views/site/productos.php") :
            header("Location:/Web_Proyect/views/site/login.php?email=Invalid");
        }
        public function insertar($nombre,$apellido_paterno,$apellido_materno,$correo,$password){
            return ($this->model->registrar($nombre,$apellido_paterno,$apellido_materno,$correo,$password)) ?
            header("Location:/Web_Proyect/views/admin/usuarios/index.php") :
            header("Location:/Web_Proyect/views/admin/usuarios/create.php?email=Invalid");
        }
        public function getUser($id){
            return ($this->model->getUser($id) != false) ? $this->model->getUser($id) : false;
        }
        public function getAllUsers(){
            return ($this->model->getAllUsers() != false) ? $this->model->getAllUsers() : false;
        }
        public function update($id,$nombre,$apelliP,$apelliM,$correo,$password){
            return ($this->model->update($id,$nombre,$apelliP,$apelliM,$correo,$password)) ?
            header("Location:/Web_Proyect/views/admin/usuarios/index.php") :
            header("Location:/Web_Proyect/views/admin/usuarios/edit.php?id=".$id);
        }
        public function delete($id){
            return ($this->model->delete($id)) ?
            header("Location:/Web_Proyect/views/admin/usuarios/index.php") :
            header("Location:/Web_Proyect/views/admin/usuarios/show.php?id=".$id);
        }
    }
?>