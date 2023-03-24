<?php
include_once "header.php";
?>

<main class="cont">
    <div class="cen">
        <h1 class="forh">¡PONETE EN CONTACTO CON NOSOTROS!</h1>
        <form action="gracias.php" method="post" enctype="multipart/form-data">

            <div>
                <label for="nom">Nombre (*): </label><br>
                <input type="text" id="nom" name="nombre" placeholder="Pepe" required><br>
            </div>

            <div>
                <label for="ape">Apellido (*):</label><br>
                <input type="text" id="ape" name="apellido" placeholder="Dominguez" required><br>
            </div>

            <div>
                <label for="correo">Email (*):</label><br>
                <input type="email" id="correo" name="email" placeholder="pepedom@gmail.com" required><br>
            </div>

            <div>
                <label for="des">Comentario (*):</label><br>
                <textarea name="descripcion" id="des" cols="30" rows="10" maxlength="300" required></textarea>
            </div>

            <div>
                <label for="archivo">¿Querés trabajar con nosotros? <br> Envianos tu CV:</label> <br>
                <input accept="*" type="file" name="archivo" id="archivo"><br>
            </div>

            <div>
                <p>Todos los campos marcados con (*) son obligatorios</p>
            </div>

            <div>
                <label for="check">Acepto los términos y condiciones:</label>
                <input type="checkbox" name="checkbox" id="checkear"><br>
            </div>

            <div>
                <input type="submit" id="enviar" disabled="disabled">
            </div>

        </form>
    </div>
</main>

<script type="text/javascript">
var checkear = document.getElementById('checkear');
var enviar = document.getElementById('enviar');

checkear.onclick = function() {
    if (checkear.checked) {
        enviar.disabled = false;
    } else {
        enviar.disabled = true;
    }
}
</script>




<?php
include_once "footer.php";
?>