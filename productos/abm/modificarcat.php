<?php
include_once "../conexion.php";
include_once "header.php";

 if(isset($_GET["categoria"])){
    $codigo = $_GET["categoria"];

    $consulta = "SELECT id_categoria, categoria FROM categoria WHERE id_categoria='$codigo'";

    if($resultado = mysqli_query($conexion, $consulta)){
        $fila=mysqli_fetch_array($resultado);
        echo "<div class='general cen'>";
        echo "<h1 class='con'>Modificar categoría</h1>";
        echo "<form action='modificarcat2.php' method='post'>";
             echo "<p class='con'>ID categoría: $fila[id_categoria]</p>";
             echo "<input type='hidden' name='codigocat' value=$fila[id_categoria]>";
             echo "<input type='text' name='nomcat' value=$fila[categoria]> <br>";
             echo "<input type='submit' value='Modificar'>";
        echo "</form>";
        
    }
}

  if(isset($_GET["tipo_helado"])){
    $codigodos = $_GET["tipo_helado"];
  
    $consultados = "SELECT id_tipo_helado, tipo_helado FROM tipo_helado WHERE id_tipo_helado='$codigodos'";

    if($resultado = mysqli_query($conexion, $consultados)){
        $fila=mysqli_fetch_array($resultado);
     echo "<div class='general cen contene'>";
        echo "<h1>Modificar categoría</h1>";
        echo "<form action='modificarcat2.php' method='post'>";
             echo "<p>ID categoría: $fila[id_tipo_helado]</p>";
             echo "<input type='hidden' name='codigotipo' value=$fila[id_tipo_helado]>";
             echo "<input type='text' name='nomtipo' value=$fila[tipo_helado]>";
             echo "<input type='submit' value='Modificar'>";
        echo "</form>";
    }
}

echo "<a href='index.php' class='con'>Volver</a>";
echo "</div>";
include_once "footer.php";
?>



