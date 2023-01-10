<?php  
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
        $id = $_POST['id'];
        $nom = $_POST['nombre'];
        $pu = $_POST['pu'];
        $cant=$_POST['cantidad'];
        $in = json_encode(array("id"=>$id,"nombre"=>$nom, "pu"=>$pu,"cantidad"=>$cant));
        $curl = curl_init();

       
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://127.0.0.1/PARCIAL2/api_restful/controllers/productos.php?op=update',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $in,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            )
        ));

        $response = curl_exec($curl);
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
    if ($response){
        ?>
    <script>
        alert('Se ha actualizado con ÉXITO');
        location.href='clienteProductos.php';
  </script>
    <?php
    }else {
        ?>
        <script>
        alert('no se ha actualizado, intenta de nuevo :(');
        location.href='actualizarProducto.php';
  </script>
    <?php
    }   
}
?>
</body>
</html>