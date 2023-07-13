<?php
    include '/xampp/htdocs/Web_Proyect/controllers/productosController.php';

    //GESTIÓN DE ARCHIVO IMAGEN SUBIDO
    if(isset($_FILES['txtImgProd']) && $_FILES['txtImgProd']['error'] === UPLOAD_ERR_OK){

        $nombre_archivo = (new DateTime())->getTimestamp() . "_" . $_FILES['txtImgProd']['name'];
        $rutaTemp_archivo = $_FILES['txtImgProd']['tmp_name'];
        $tamaño_archivo = $_FILES['txtImgProd']['size'];
        $carpetaDestino = '/xampp/htdocs/Web_Proyect/assets/images/';

        if($tamaño_archivo < 5 * 1024 * 1024){
            if(move_uploaded_file($rutaTemp_archivo,$carpetaDestino.$nombre_archivo)){
                
                //BORRADO DE ARCHIVO DE IMAGEN ANTIGUO
                $ruta_archivo_antiguo = '/xampp/htdocs/Web_Proyect/assets/images/'.$_POST['imagenRuta'];
                if(file_exists($ruta_archivo_antiguo)){
                    unlink($ruta_archivo_antiguo);
                }

            } else{
                echo "Error al guardar la imagen";
            }
        } else{
            echo "El tamaño del archivo excede el límite permitido de 5 MB";
        }
    } else{
        $nombre_archivo = $_POST['imagenRuta'];
    }


    $obj = new productosController();
    $obj->update(
        $_POST['txtId'],
        $_POST['txtNameProd'],
        $_POST['txtCateProd'],
        $nombre_archivo,
        $_POST['txtDescProd'],
        $_POST['txtProvProd'],
        $_POST['txtCostProd'],
        $_POST['txtCantProd']
    );
?>