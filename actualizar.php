<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM usuarios WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="ESTILOS/Style.css" rel="stylesheet">
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <div class="usuarios-form">
            <form action="edit_users.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="nombres" placeholder="Nombres" value="<?= $row['nombres']?>">
                <input type="text" name="apellidos" placeholder="Apellidos" value="<?= $row['apellidos']?>">
                <input type="text" name="usuario" placeholder="Usuario" value="<?= $row['usuario']?>">
                <input type="text" name="password" placeholder="Password" value="<?= $row['password']?>">
                <input type="text" name="email" placeholder="Email" value="<?= $row['email']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>