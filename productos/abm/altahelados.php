<?php
include_once "../conexion.php";
include_once "header.php";

    if(isset($_POST["id_sabor"]) and isset($_POST["sabores"]) and isset ($_POST["descripcion"]) and isset($_POST["categoria"])){

     $codigo = $_POST["id_sabor"];
     $nombre = $_POST["sabores"];
     $descripcion = $_POST["descripcion"];
     $categoria = $_POST["categoria"];

     $consulta = "INSERT INTO sabor (id_sabor, sabores, descripcion, tipo_helado_id_tipo_helado) VALUES ('$codigo','$nombre','$descripcion', '$categoria')";

     echo "<div class='general cen contene'>";
         if($resultado = mysqli_query($conexion, $consulta)) {
            echo "<h1>Sabor $nombre fue creado con éxito</h1>"; 
            }else{
            echo "<h1>Error</h1>";
        }
        
    }

 echo "<p><a href='index.php'>Volver</a></p>";
 echo "</div>";
 include_once "footer.php";

?>

