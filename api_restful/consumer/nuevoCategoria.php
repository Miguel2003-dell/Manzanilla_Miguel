
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>nueva categoria</title>
</head>
<body>
    <center>
    <a class="botones"href="clienteCategoria.php">administrar</a>
    </center>
    <section class="form-register">
<h4>Nueva categoria</h4>
<form action="insertar.php" method="post">
<input class = "controls" type="text" name ="cat_nom" placeholder="Nombre de categoria" required>
<input class = "controls" type="text" name ="cat_obs" placeholder="Observaciones" required>
<input class = "botons" type="submit" name="enviar" value="Enviar">
<input class = "botons" type="reset" name="borrar" value="Borrar">
</form>
</section>
</body>
</html>