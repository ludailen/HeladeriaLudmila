<?php
include_once "conexion.php";
include_once "header.php";

echo "<div class='container-fluid cen sabores'>";
    if(isset($_GET["sabor"])){
        $codigo = $_GET["sabor"];
        echo "<h1 class='hsabor rosa'>SABORES</h1>";
        $consulta = "SELECT id_sabor, sabores, descripcion FROM sabor WHERE tipo_helado_id_tipo_helado='$codigo'";

        if($resultado = mysqli_query($conexion, $consulta)){
            while($fila = mysqli_fetch_array($resultado)){
                echo "<div class='container-fluid cen sabores'>";
                 echo "<h2>$fila[sabores]</h2>";
                 echo "<p class='des'>$fila[descripcion]</p>";
                echo "</div>";
            }
        }
    }
echo "</div>";
include_once "footer.php";
?>