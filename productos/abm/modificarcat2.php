<?php
include_once "../conexion.php";
include_once "header.php";

if(isset($_POST["nomcat"]) and isset($_POST["codigocat"])){
    $nom = $_POST["nomcat"];
    $codigo = $_POST["codigocat"];

    $consulta = "UPDATE categoria SET categoria = '$nom' WHERE id_categoria = '$codigo'";
    echo "<div class='general cen contene'>";
    if($resultado = mysqli_query($conexion, $consulta)) {
        echo "<h1 class='con'> La categoría $nom fue modificada </h1>";
    }else{
        echo "<h1> Error </h1>";
    }
}

if(isset($_POST["nomtipo"]) and isset($_POST["codigotipo"])){
    $nom = $_POST["nomtipo"];
    $codigo = $_POST["codigotipo"];

    $consultados = "UPDATE tipo_helado SET tipo_helado = '$nom' WHERE id_tipo_helado = '$codigo'";
    echo "<div class='general cen contene'>";
    if($resultado = mysqli_query($conexion, $consultados)) {
        echo "<h1 class='con'> La categoría $nom fue modificada </h1>";
    }else{
        echo "<h1> Error </h1>";
    }
}






echo "<a href='index.php' class='con'>Volver</a>";
echo "</div>";
include_once "footer.php";
?>



