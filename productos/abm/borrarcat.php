<?php
include_once "../conexion.php";
include_once "header.php";

if(isset($_GET["categoria"])){
    $codigo = $_GET["categoria"];
    $consulta = "DELETE FROM categoria WHERE id_categoria='$codigo'";
    echo "<div class='general cen contene'>";
    if($resultado = mysqli_query($conexion, $consulta)) {
        echo "<h1 class='con'>Categoría $codigo fue eliminada</h1>";
    }else{
        echo "<h1>Error</h1>"; 
    }
}

echo "<a href='index.php' class='con'>Volver</a>";
echo "</div>";
include_once "footer.php";
?>




