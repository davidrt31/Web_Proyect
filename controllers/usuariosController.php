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
    }
?>