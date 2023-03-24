<?php
include_once "header.php";
include_once "conexionlog.php";

$email = $_POST['email'];
$contra = $_POST['contra'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

$con="
INSERT INTO 
usuario
SET 
nombre='$nombre',
apellido='$apellido',
email='$email', 
contra=MD5('$contra'),
nivel='usuario',
fecha_alta=NOW( )";

$consulta = "INSERT INTO usuario SET nombre='$nombre', apellido='$apellido', email='$email', contra=MD5('$contra'), nivel='usuario', fecha_alta=NOW( )";

mysqli_query($conectar, $con);
header("Location: index.php?alta=ok");

?>