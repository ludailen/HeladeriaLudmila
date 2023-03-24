<?php
include_once "../conexion.php";
include_once "header.php";

    if(isset($_POST["categoria"])){
        $nom = $_POST["categoria"];
        
        $consulta = "INSERT INTO categoria (categoria) VALUE ('$nom')";
        echo "<div class='general cen contene'>";
        if($resultado =mysqli_query($conexion, $consulta)) {
            echo "<h1 class='con'>Categoria $nom agregada</h1>";
        }else{
            echo "<h1>La consulta tiene errores</h1>";
        }
    }



echo "<a href='index.php' class='con'>Volver</a>";
echo "</div>";
include_once "footer.php";
?>
