<?php
include_once "header.php";
include_once "../conexionlog.php";

session_start();


if(!isset($_SESSION['nivel']) || $_SESSION['nivel'] != 'admin') {
    die('No tienes permisos para acceder');
}

$consulta = "SELECT id_usuario, nivel, nombre, estado, IFNULL(apellido, '----') AS apellido, email, DATE_FORMAT(fecha_alta, '%d/%m/%y') AS fecha FROM usuario ORDER BY fecha_alta DESC";

$respuesta = mysqli_query($conectar, $consulta);
?>
<div class="general contene">
<h1>Administrador de usuarios</h1>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Mail</th>
        <th>Nivel</th>
        <th>Fecha</th>
        <th>Estado</th>
        <th>Funciones</th>
    </tr>

    <?php
        while($a = mysqli_fetch_assoc($respuesta)){
            echo '<tr>';
            echo '<td>'.$a['nombre'].'</td>';
            echo '<td>'.$a['apellido'].'</td>';
            echo '<td>'.$a['email'].'</td>';
            echo '<td>'.$a['nivel'].'</td>';
            echo '<td>'.$a['fecha'].'</td>';
            echo '<td>'.$a['estado'].'</td>';
            echo '<td>';

            if($a['estado'] == 'activo'){
                echo '<a href="bannear.php?id_usuario='.$a['id_usuario'].'">Bannear</a>';
            }else{
                echo '<a href="nobannear.php?id_usuario='.$a['id_usuario'].'">Activar</a>';
            }
            echo ' | ';
            
            if($a['nivel'] == 'usuario'){
                echo '<a href="haceradmin.php?id_usuario='.$a['id_usuario'].'">Hacer admin</a>';
            }else{
                echo '<a href="nohaceradmin.php?id_usuario='.$a['id_usuario'].'">Hacer usuario</a>';
            }
            echo '</td>';
            echo '</tr>';
            
        }
    ?>
</table>


<a href="../../index.php" class="con">Administrar productos |</a>
<a href="../logout.php" class="con">| Cerrar sesión</a>
</div>


<?php
include_once "footer.php";
?>
