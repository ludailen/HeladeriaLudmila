<?php
include_once "header.php";

include_once "conexionlog.php";
session_start( );

$email = $_POST['email'];
$contra = $_POST['contra'];

$consulta = "SELECT id_usuario, nombre, apellido, email, nivel FROM usuario WHERE email='$email' AND contra=MD5('$contra') LIMIT 1";

$b = mysqli_query($conectar, $consulta);
$a = mysqli_fetch_assoc($b);

if($a == NULL){
    header("Location: index.php?login=error");
}else{
    $_SESSION = $a;

    header("Location: logueado.php");
}


include_once "footer.php";
?>