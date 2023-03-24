<?php
include_once "../conexion.php";
include_once "header.php";//and isset($_POST["foto"]      , foto ='$foto' 

if(isset($_POST["id_producto"]) and isset($_POST["producto"]) and isset($_POST["descripcion"]) and isset($_POST["precio"])){

    $codigo = $_POST["id_producto"];
    $nombre = $_POST["producto"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];

    $consulta = "UPDATE producto SET producto = '$nombre', descripcion = '$descripcion', precio ='$precio' WHERE id_producto = '$codigo'";
    
    echo "<div class='general cen contene'>";

    if($resultado = mysqli_query($conexion, $consulta)) {
        echo "<h1>Producto >$nombre< fue modificado con éxito</h1>";
    }else{
        echo "<h1>Error</h1>";
    }

}

echo "<p><a href='index.php'>Volver</a></p>";
echo "</div>";



include_once "footer.php";
?>