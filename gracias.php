<?php
include_once "header.php";
?>

<main class="cont grax">
    <div class="cen letras">
        <h1 class="forh">¡GRACIAS POR COMUNICARTE CON NOSOTROS!</h1>
        <div>
            <h2>Los datos ingresados fueron:</h2>
            <ul class="listagrax">
                <?php
                if (isset($_POST['nombre'])) {
                    $nombre = $_POST['nombre'];
                    echo "<li>Nombre: $nombre </li>";
                }
                
                if (isset($_POST['apellido'])) {
                    $apellido = $_POST['apellido'];
                    print "<li>Apellido: $apellido </li>";
                }
                
                if (isset($_POST['email'])) {
                    $email = $_POST['email'];
                    print "<li>Email: $email </li>";
                }
                
                if (isset($_POST['descripcion'])) {
                    $descripcion = $_POST['descripcion'];
                    print "<li>Descripción: $descripcion </li>";
                }
                
                move_uploaded_file($_FILES['archivo'] ['tmp_name'], "cv/".$_FILES['archivo'] ['name']);
                ?>
            </ul>
        </div>
        <div>
            <h3>Pronto nos pondremos en contacto con vos :)</h3>
        </div>
    </div>
</main>

<?php
include_once "footer.php";
?>