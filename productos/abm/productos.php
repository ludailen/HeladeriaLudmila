<?php
include_once "../conexion.php";
include_once "header.php";

echo "<div class='general cen'>";
if(isset($_GET['categoria']) and isset($_GET['nombre'])){
         $codigo = $_GET['categoria'];
         $nom = $_GET['nombre'];
    }

echo "<h1>$nom - ABM </h1>";
$consulta = "SELECT * FROM producto WHERE categoria_id_categoria = '$codigo'";

if($resultado = mysqli_query($conexion, $consulta)){
    echo "<table border=1>";
    echo "   <tr>
             <th>Producto</th>
             <th>Precio</th>
             <th>Modificar</th>
             <th>Borrar</th>			   
            </tr>";

    while($fila = mysqli_fetch_array($resultado)){
        echo "<tr>";
           echo "<td>$fila[producto]</td>";
           echo "<td>$fila[precio]</td>";
           echo "<td><a href='modificarprod.php?producto=".$fila["id_producto"]."'>Modificar</a></td>";
           echo "<td><a href='borrarprod.php?producto=".$fila["id_producto"]."'>Borrar</a></td>";
        echo "</tr>";
    }
    echo "</table>";
}



?>
 <h2>Agregar producto</h2>
 <form action="altaprod.php" method="post" enctype="multipart/form-data">
    <div>
        <input id="categoria" type="hidden" name="categoria"
        <?php
        echo "value='$codigo'";
        ?>>
    </div>

    <div>
        <input id="id_producto" type="hidden" name="id_producto">
    </div>

    <div>
        <label for="producto">Nombre del producto:</label> <br>
        <input id="producto" type="text" name="producto"><br>
    </div>

    <div>
        <label for="precio">Precio del producto:</label> <br>
        <input id="precio" type="text" name="precio"> <br>
    </div>

    <div>
        <p class="con">Descripción:</p>
        <textarea name="descripcion"></textarea>
    </div>

    <div>
        <p class="sin"><label for="archivo">Foto:</label></p> 
        <input accept=".jpg" type="file" name="foto" id="archivo">
        <br>
    </div>

    <br>
    <input type="submit" value="Agregar producto">

</form>

</div>
<?php
include_once "footer.php";
?>