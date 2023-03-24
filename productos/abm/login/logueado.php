<?php
include_once "header.php";
session_start( );
echo "<div class='cen general'>";
if(!isset($_SESSION['id_usuario'])){
    header("Location: index.php?forbidden=1");
}


if(!isset($_SESSION['nivel']) || $_SESSION['nivel'] != 'admin') {
    echo"<h1>Inicio de sesión correcto.</h1>";
    echo"<a href='../../../index.php'>Ir a inicio</a><br>";
}else{
    echo "<h2><a href='admin/index.php'> >Administrar usuarios</a></h2>";
    echo "<h2><a href='../index.php'> >Administrar categorías y productos</a></h2>";
}

//var_dump($_SESSION);

echo "<a href='logout.php'>Cerrar sesión</a>";
echo "</div>";
include_once "footer.php";
?>
