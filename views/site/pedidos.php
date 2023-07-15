<?php session_start() ?>
<?php 
    include('templates/header.php');
    include('/xampp/htdocs/Web_Proyect/controllers/BoletasController.php');
    $obj = new BoletasController();
    $usuario = $_SESSION['usuario'];
    $user = $usuario['correo'];
    $rows = $obj->getBoletaFromEmail($user);
?>
</div>

<div class="container" id="body-page" style="margin-top: 4.44rem">
    <div class="row">
        <div class="container mt-4 mb-5">
            <div class="info-container text-center">
                <h2>Tus Pedidos</h2>
            </div>
            <div class="table-container mt-4">
                <table class="table border container-fluid table-striped">
                    <thead class="table-warning">
                        <tr>
                            <th scope="col">CÓDIGO</th>
                            <th scope="col">FECHA</th>
                            <th scope="col">PRODUCTOS</th>
                            <th scope="col">PAGO TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($rows){ ?>
                        <?php foreach($rows as $dato){ ?>
                        <tr>
                            <td scope="row"><?= $dato['codigo_boleta'] ?></td>
                            <td scope="row"><?= $dato['fecha']?></td>
                            <td scope="row"><?= $dato['productos']?></td>
                            <td scope="row">S/. <?= $dato['pago_total']?></td>
                        </tr>
                        <?php } ?>
                        <?php } else{ ?>
                            <tr>
                                <td colspan="4" class="text-center">
                                    <h3>
                                        NO TIENE PEDIDOS HECHOS
                                    </h3>
                                    <img class="mt-2 mb-2 rounded" src="https://www.icegif.com/wp-content/uploads/2022/01/icegif-962.gif" alt="pooh.gif">    
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include('templates/footer.php')?>