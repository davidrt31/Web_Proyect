<?php
    class carritoObjeto{
        private $productos;
        
        public function __construct(){
            $this->productos = array();
        }

        public function agregarProducto($idProducto){
            $this->productos[] = $idProducto;
        }

        public function obtenerProductos(){
            return $this->productos;
        }

        public function obtenerProductosAcumulados(){
            $productosAcumulados = array();
            $productosFULL = $this->productos;
            for($i = 0; $i < count($productosFULL); $i++){
                $contador = 0;
                for($j = 0; $j < count($productosFULL); $j++){
                    if($productosFULL[$i] == $productosFULL[$j]){ $contador++; }
                    if($contador > 10){ $contador = 10; }
                }
                $tempArray = array($productosFULL[$i],$contador);
                array_push($productosAcumulados,$tempArray);
            }

            // Convertir temporalmente los arreglos internos en cadenas
            $arreglo_temporal = array_map('serialize', $productosAcumulados);
            
            // Aplicar array_unique() en las cadenas
            $arreglo_unico_temporal = array_unique($arreglo_temporal);
            
            // Restaurar los arreglos internos desde las cadenas
            $arreglo_unico = array_map('unserialize', $arreglo_unico_temporal);

            return array_values($arreglo_unico);
        }

        public function quitarProducto($id){
            $tempProductos = $this->productos;
            $lastIndex = array_key_last($tempProductos);
            for($i = 0; $i <= $lastIndex; $i++){
                if($tempProductos[$i] == $id){ unset($tempProductos[$i]); }
            }
            $this->productos = array_values($tempProductos);
        }

        public function vaciarCarrito(){
            unset($_SESSION['carrito']);
        }
    }
?>