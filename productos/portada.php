<?php
include_once "header.php";
include_once "conexion.php"; 

echo "<div class='container-fluid cen tipo'>";
echo"<h1 class='hportada'>SABORES Y OTROS</h1>";

if(isset($_GET["categoria"])){
        $codigo = $_GET["categoria"];
        $consulta = "SELECT id_producto, producto, descripcion, precio, foto FROM producto WHERE categoria_id_categoria='$codigo'";
        
        if($resultado = mysqli_query($conexion, $consulta)){
            
            while($fila = mysqli_fetch_array($resultado)){
                echo "<div class='sabores'>";
                echo "<ul>";
                echo "<li>";
                echo "<h2 class='marron'>$fila[producto]</h2>";
                echo "<p class='detalles'>Precio: $fila[precio]</p>";
                echo "<p class='detalles'>Descripción: $fila[descripcion]</p>";
                echo "<img src=fotos/$fila[foto] />";
                echo "</li>";
                echo "</div>";

            } 
        }  

       $con = "SELECT id_tipo_helado, tipo_helado FROM tipo_helado WHERE categoria_id_categoria='$codigo'";
       if($res = mysqli_query($conexion, $con)){
             while($fila = mysqli_fetch_array($res)){
                
                echo "<div class='tiposabor'>";
                 echo "<ul>";
                 echo "<li>";
                 echo "<h2 class='tiposabor'><a href='ficha.php?sabor=".$fila["id_tipo_helado"]."'>".$fila["tipo_helado"]."</a></h2>";
                 echo "</li>";
                 echo "</ul>";
                 echo "</div>";
            }
        }
    }
echo "</div>";

include_once "footer.php";
?>