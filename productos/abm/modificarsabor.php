<?php
include_once "../conexion.php";
include_once "header.php";

if(isset($_GET["sabores"])){
    $codigo = $_GET["sabores"];

    $consulta = "SELECT * FROM sabor WHERE id_sabor = '$codigo'";

    if($resultado = mysqli_query($conexion, $consulta)){
        $fila = mysqli_fetch_array($resultado);
        

        echo "<div class='general cen'>";
        echo "<h1>Modificar sabor: $fila[sabores]</h1>";
        echo "<form action='modificarsabor2.php' method='post'>";
         echo "<input type='hidden' name='id_sabor' value=$fila[id_sabor]>";
         echo "<p class='con'>Nombre sabor:</p> 
              <input type='text' name='sabores' value=$fila[sabores]>";   
         echo "<br>";
         echo "<p class='con'>Descripción:</p>
              <textarea name='descripcion'>$fila[descripcion]</textarea>";
         echo "<br>";

        echo "<input type='submit' value='Modificar'>";
        echo "</form>";
        
    }
}

echo "</div>";




include_once "footer.php";
?>






