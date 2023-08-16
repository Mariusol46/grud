<?php
include("connection.php");
$con = connection();

$id = null;
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO usuarios VALUES('$id','$nombres','$apellidos','$usuario','$password','$email')";
$query = mysqli_query($con, $sql);

if($query)
{
    Header("Location: index.php");
}else {

}



?>