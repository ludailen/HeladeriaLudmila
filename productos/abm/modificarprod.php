<?php
include_once "../conexion.php";
include_once "header.php";


if(isset($_GET["producto"])){
    $codigo = $_GET["producto"];

    $consulta = "SELECT * FROM producto WHERE id_producto = '$codigo'";

    if($resultado = mysqli_query($conexion, $consulta)){
        $fila = mysqli_fetch_array($resultado);

        echo "<div class='general cen'>";
        echo "<h1>Modificar producto - ABM</h1>";

        echo "<form action='modificarprod2.php' method='post'>";

         echo "<h2> >$fila[producto]< </h2>";
         echo "<input type='hidden' name='id_producto' value=$fila[id_producto]>";
         echo "<br>";

         echo "<p id='margen'>Nombre producto:</p> 
              <input type='text' name='producto' value=$fila[producto]>";   
         echo "<br>";

         echo "<p class='con'>Descripción:</p>
              <textarea name='descripcion'>$fila[descripcion]</textarea>";
         echo "<br>";

        echo "<p class='con'>Precio:</p>
              <input type='number' name='precio' value=$fila[precio]>";
        echo "<br>";

        echo "<input type='submit' value='Modificar'>";
        echo "</form>";
        
    }
}

echo "<p><a href='index.php'>Volver</a></p>";

echo "</div>";

include_once "footer.php";
?>