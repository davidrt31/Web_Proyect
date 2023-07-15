<?php include('/xampp/htdocs/Web_Proyect/views/site/templates/header.php')?>
<?php 


function getBoletaFromEmail($email) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dongilbd";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        die("Error de conexión: " . $e->getMessage());
    }
    // Obtener el último valor de id insertado
    $query = "SELECT MAX(id_boleta) AS last_id FROM boletas";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $lastId = $result['last_id'];

    $codigo = 'DG' . str_pad($lastId, 4, '0', STR_PAD_LEFT);
    date_default_timezone_set('America/Lima');

    $fecha = date("Y-m-d H:i:s");  // Obtener la fecha actual
    $usuario = $email;  // El email asociado a la boleta
    $productos = '';  // Rellenar con los productos correspondientes
    $pagoTotal = 0;  // Rellenar con el total del pago

    $query = "INSERT INTO boletas (codigo_boleta, fecha, usuario, productos, pago_total) VALUES(:codigo, :fecha, :usuario, :productos, :pagoTotal)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':codigo', $codigo);
    $stmt->bindParam(':fecha', $fecha);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':productos', $productos);
    $stmt->bindParam(':pagoTotal', $pagoTotal);

    $stmt->execute();

    return $codigo;
    
    
}
    $email = 'ruiztorres@gmail.com';
    $codigoBoleta = getBoletaFromEmail($email);
    echo "Código de boleta: " . $codigoBoleta;
    ?>
</div>
<div class="container" style="margin-top:6rem; margin-bottom:2rem">

</div>


<?php include('/xampp/htdocs/Web_Proyect/views/site/templates/footer.php')?>