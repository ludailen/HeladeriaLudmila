<?php
include_once "../conexion.php";
include_once "header.php";

    if(isset($_POST["id_producto"]) and isset($_POST["producto"]) and isset ($_POST["descripcion"]) and isset($_POST["precio"]) and isset($_POST ["categoria"])){

     $codigo = $_POST["id_producto"];
     $nombre = $_POST["producto"];
     $descripcion = $_POST["descripcion"];
     $precio = $_POST["precio"];
     $categoria = $_POST["categoria"];

     $hora=time();
     move_uploaded_file($_FILES['foto']['tmp_name'],"../fotos/".$hora.'.jpg');
     $foto= $hora.'.jpg';

     $consulta = "INSERT INTO producto (id_producto, producto, descripcion, precio, foto, categoria_id_categoria) VALUES ('$codigo','$nombre', '$descripcion', '$precio', '$foto', '$categoria')";

     echo "<div class='general cen contene'>";
         if($resultado = mysqli_query($conexion, $consulta)) {
            echo "<h1 class='con'>Producto $nombre fue creado con éxito</h1>"; 
            }else{
            echo "<h1>Error</h1>";
        }
        
    }

 echo "<p class='con'><a href='index.php'>Volver</a></p>";
 echo "</div>";
 include_once "footer.php";

?>

