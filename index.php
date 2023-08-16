<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM usuarios";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>           
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="ESTILOS/Style.css" rel="stylesheet">
    <title>Users CRUD</title>
    <style>
            body 
            {
                background-image: url('img/cor.jpg');
                background-size: cover;
            }    
    </style>
    
</head>

<body>

    <div class="usuarios-form">
        <h1>Crear usuario</h1>
        <form action="insert-users.php" method="POST">
            <input type="text" name="nombres" placeholder="Nombres">
            <input type="text" name="apellidos" placeholder="Apellidos">
            <input type="text" name="usuario" placeholder="Usuario">
            <input type="password" name="password" placeholder="Password">
            <input type="email" name="email" placeholder="Email">


            <input type="submit" value="Agregar">
        </form>
    </div>

    <div class="usuarios-table">
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <tr>   
                    <th>ID</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Usuario</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>   
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['nombres'] ?></th>
                        <th><?= $row['apellidos'] ?></th>
                        <th><?= $row['usuario'] ?></th>
                        <th><?= $row['password'] ?></th>
                        <th><?= $row['email'] ?></th>
                        <th><a href="update.php?id=<?= $row['id'] ?>" class="usuarios-table--edit">Editar</a></th>
                        <th><a href="delete-users.php?id=<?= $row['id'] ?>" class="usuarios-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>