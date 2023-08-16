<?php

include("connection.php");
$con = connection();

$id=$_POST["id"];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql="UPDATE usuarios SET nombres='$nombres', apellidos='$apellidos', usuario='$usuario', password='$password', email='$email' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query)
{
    Header("Location: index.php");
}else {

}