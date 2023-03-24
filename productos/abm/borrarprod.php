<?php
include_once "../conexion.php";
include_once "header.php";

if(isset($_GET["producto"])){
    $codigo = $_GET["producto"];
    $consulta = "DELETE FROM producto WHERE id_producto='$codigo'";
    echo "<div class='general cen contene bien '>";
    if($resultado = mysqli_query($conexion, $consulta)){
        echo "<h1 class='con'>Producto $codigo fue eliminado</h1>";

    }else{
        echo "<h1>Error</h1>"; 
}
}
echo "<a href='index.php' class='con'>Volver</a>";
echo "</div>";
include_once "footer.php";
?>