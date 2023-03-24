<?php
include_once "../conexion.php";
include_once "header.php";



if(isset($_GET['tipo_helado']) and isset($_GET['nombre'])){
         $codigo = $_GET['tipo_helado'];
         $nom = $_GET['nombre'];
    }
echo "<div class='general'>";
echo "<div class='cen'>";
echo "<h1>$nom: ID $codigo - ABM </h1>";
echo "</div>";
$consulta = "SELECT * FROM sabor WHERE tipo_helado_id_tipo_helado = '$codigo'";

if($resultado = mysqli_query($conexion, $consulta)){
    
    echo "<table border=1>";
    echo "   <tr>
             <th>ID sabor</th>
             <th>Sabor</th>
             <th>Descripción</th>
             <th>Modificar</th>
             <th>Borrar</th>			   
            </tr>";

    while($fila = mysqli_fetch_array($resultado)){
        echo "<tr>";
           echo "<td>$fila[id_sabor]</td>";
           echo "<td>$fila[sabores]</td>";
           echo "<td>$fila[descripcion]</td>";
           echo "<td><a href='modificarsabor.php?sabores=".$fila["id_sabor"]."'>Modificar</a></td>";
           echo "<td><a href='borrarsabor.php?sabores=".$fila["id_sabor"]."'>Borrar</a></td>";
        echo "</tr>";
    }
    echo "</table>";
}

?>
<div class="cen">
<h2>Agregar sabor</h2>
 <form action="altahelados.php" method="post">  
 <input id="categoria" type="hidden" name="categoria"
        <?php
        echo "value='$codigo'";
        ?>>
    <div>
        <input id="id_sabor" type="hidden" name="id_sabor">
    </div>

    <div>
        <label for="sabores">Sabor:</label><br>
        <input id="sabores" type="text" name="sabores">
    </div>

    <div>
        <p class="con">Descripción:</p>
        <textarea name="descripcion"></textarea>
    </div>

    <input type="submit" value="Agregar producto">

</form>

<a href='index.php'>Volver</a>
</div>
</div>
<?php
include_once "footer.php";
?>