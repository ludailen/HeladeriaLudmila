<main>
<?php
include_once "conexion.php";
include_once "header.php";

    echo "<div class='sab'>";
    echo "<div class='container-fluid cen'>";
    echo "<h1 class='forh rosa'>NUESTROS PRODUCTOS</h1>";
    echo "</div>";
    $consulta = "SELECT id_categoria, categoria FROM categoria";

    if($resultado = mysqli_query($conexion, $consulta)){
        
        echo"<div class='cen'>";
        echo "<ul class='cat hela'>";
        while($fila = mysqli_fetch_array($resultado)) {
            echo "<li class='cat'>";
            echo "<a href='portada.php?categoria=".$fila["id_categoria"]."'>".$fila["categoria"]."</a";
            echo "</li>";
        }
        echo "</ul>";

    }
    echo "</div>";
?>
</div>
</main>

<?php
include_once "footer.php";
?>