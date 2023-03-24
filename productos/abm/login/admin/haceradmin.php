<?php
include_once "header.php";
include_once "../conexionlog.php";

$id = $_GET['id_usuario'];
$consulta = "UPDATE usuario SET nivel='admin' WHERE id_usuario='$id'";

mysqli_query($conectar, $consulta);
header("Location: index.php");

include_once "footer.php";
?>
