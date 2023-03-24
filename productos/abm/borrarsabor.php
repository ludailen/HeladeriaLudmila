<?php
include_once "../conexion.php";
include_once "header.php";

if(isset($_GET["sabores"])){
    $codigo = $_GET["sabores"];
    $consulta = "DELETE FROM sabor WHERE id_sabor='$codigo'";
    echo "<div class='general cen contene'>";
    if($resultado = mysqli_query($conexion, $consulta)){
        echo "<h1 class='con'>El sabor $codigo fue eliminado</h1>";

    }else{
        echo "<h1>Error</h1>"; 
}

}


echo "<a href='index.php' class='con'>Volver</a>";

echo "</div>";
include_once "footer.php";
?>