<?php
include_once "../conexion.php";
include_once "header.php";

if(isset($_POST["id_sabor"]) and isset($_POST["sabores"]) and isset($_POST["descripcion"])){
    
    $codigo = $_POST["id_sabor"];
    $nombre = $_POST["sabores"];
    $descripcion = $_POST["descripcion"];

    $consulta = "UPDATE sabor SET sabores = '$nombre', descripcion = '$descripcion' WHERE id_sabor = '$codigo'";

    echo "<div class='general cen contene'>";
    if($resultado = mysqli_query($conexion, $consulta)) {
        echo "<h1>Sabor $nombre fue modificado</h1>";
    }
}

echo "<p><a href='index.php'>Volver</a></p>";
echo "</div>";

include_once "footer.php";
?>