<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Actualizar categoria</title>
</head>
<body>
<a class="botones"href="clienteCategoria.php">administrar</a>
    <section class="form-register">
        <center>
    <h4>Actualizar categoria</h4>
</center>
        <form action="actualizar.php" method="post">
<input class="controls"type="text" name ="cat_id" placeholder="id" required>
<input class="controls"type="text" name ="cat_nom" placeholder="Nombre de categoria" required>
<input class= "controls"type="text" name ="cat_obs" placeholder="observaciones de catgoria" required>
<input class="botons"type="submit" name="enviar" value="Enviar"></td>
<input class= "botons"type="reset" name="borrar" value="Borrar"></td>
</form>
</section>
</body>
</html>