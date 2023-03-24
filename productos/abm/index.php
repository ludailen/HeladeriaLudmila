<?php
include_once "../conexion.php";
include_once "header.php";
    echo "<div class='general cen'>";
    echo "<h1>Categorías - ABM </h1>";

    $consulta = "SELECT id_categoria, categoria FROM categoria WHERE id_categoria <> 1000";
    if($resultado = mysqli_query($conexion, $consulta)) {
        
        echo "<table border=1>";
        echo "<tr>
                 <th>Categorías</th>
                 <th>Modificar</th>
                 <th>Borrar</th>
              </tr>";
        
        while($fila = mysqli_fetch_array($resultado)){
            echo "<tr>";
            echo "<td><a href='productos.php?categoria=".$fila["id_categoria"]."&nombre=$fila[categoria]'>$fila[categoria]</a></td>";
			echo "<td><a href='modificarcat.php?categoria=".$fila["id_categoria"]."'>Modificar</a></td>";
			echo "<td><a href='borrarcat.php?categoria=".$fila["id_categoria"]."'>Borrar</a></td>";
            echo "</tr>";
        }

    }

    $consultados = "SELECT id_tipo_helado, tipo_helado FROM tipo_helado";
    if($resultadodos = mysqli_query($conexion, $consultados)) {
        while($fila = mysqli_fetch_array($resultadodos)){
            echo "<tr>";
            echo "<td><a href='helados.php?tipo_helado=".$fila["id_tipo_helado"]."&nombre=$fila[tipo_helado]'>$fila[tipo_helado]</a></td>";
			echo "<td><a href='modificarcat.php?tipo_helado=".$fila["id_tipo_helado"]."'>Modificar</a></td>";
			echo "<td><a href='borrarcat.php?tipo_helado=".$fila["id_tipo_helado"]."'>Borrar</a></td>";
            echo "</tr>";
        }
        echo "</table>";
        
    }

?>

<h2>Agregar categoría</h2>
<form action="altacategoria.php" method="post">
    <div>
    <label for="categoria">Nombre categoría:</label> <br>
    <input type="text" id="categoria" name="categoria">
    </div>

    <input type="submit" value="Agregar categoría">
</form>

<a href="login/admin/index.php">Administrar usuarios</a>
</div>
<?php
include_once "footer.php";
?>