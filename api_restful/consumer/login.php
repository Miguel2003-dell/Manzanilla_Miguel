<?php

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    $user=$_POST['user'];
    $pass = $_POST['pwd'];
   

    $ins = json_encode(array("user" => $user, "pwd" => $pass));

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://127.0.0.1/PARCIAL2.5/api_restful/controllers/Usuario.php?op=selectall',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_POSTFIELDS =>$ins,
      CURLOPT_HTTPHEADER => array(
        'Content-Type: text/plain'
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    
    $data = json_decode($response, true);

    if ($data[0]["user"] == $user && $data[0]["pwd"] == $pass)
    {
        $entrar='bien';
        echo "<script>
             alert('Error');
            location.href = 'index.php';
    </script>";
    }else
    {
        $entrar='mal';
        echo "<script>
              alert('Bienvenido');
               //location.href = 'index.php';
     </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Login</title>
</head>
<body>

    <div class="form-register">
        <h1>Iniciar Sesión</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form">
                <input type="text" name="user" id="usuariolbl" class="form">
                <label for="usuario">Usuario</label>
            </div>
            <div class="form">
                <input type="password" name="pwd" id="passwordlbl" class="form">
                <label for="passwordlbl">Contraseña</label>
            </div>

            <input type="submit" name="enviar" value="Enviar" class="btn btn-success">
        </form>
      
    </div>
</body>
</html>