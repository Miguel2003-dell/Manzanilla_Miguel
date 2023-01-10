<?php
include_once("clienteProductos.php");
        $id=$_REQUEST['id'];
        $payform = json_encode(array("id"=> $id));
        $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://127.0.0.1/PARCIAL2/api_restful/controllers/productos.php?op=delete',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true, 
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'DELETE',
        CURLOPT_POSTFIELDS => $payform,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
    ));
$restfull = curl_exec($curl);

curl_close($curl);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if ($restfull){
        ?>
    <script>
        alert('Se ha borrado con ÉXITO');
        location.href='clienteProductos.php';
  </script>
    <?php
    }else {
        ?>
        <script>
        alert('no se ha podido eliminar, intenta de nuevo :(');
        location.href='clienteProductos.php';
  </script>
    <?php
    
}
    ?>
</body>
</html>