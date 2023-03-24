<?php
include_once "header.php";

 session_start( );
 echo "<div class='container-fluid cen log'>";
 echo "<h1 class='forh'>MI CUENTA</h1>";

 if(isset($_GET['alta'])){
    echo "<p>Registro exitoso, ya podes iniciar sesión</p>";
 }
 if(isset($_GET['login'])){
    echo "<p>Error. Tu usuario o contraseña son incorrectos</p>";
 }

?>

 <form method="POST" action="login.php" class="form">
    <h2 class="">Iniciar sesión</h2>
    <div>
        <input type="email" placeholder="Ingresá tu email" name="email">
    </div>
    <div>
        <input type="password" placeholder="Ingresá tu contraseña" name="contra">
    </div>
    <div>
        <input type="submit" value="Entrar">
    </div>
 </form>

 <form method="POST" action="alta.php">
    <h2>Registrarse</h2>
    <div>
        <input type="email" placeholder="Ingresá tu email" name="email">
    </div>
    <div>
        <input type="password" placeholder="Ingresá tu contraseña" name="contra">
    </div>
    <div>
        <input type="text" placeholder="Ingresá tu nombre" name="nombre">
    </div>
    <div>
        <input type="text" placeholder="Ingresá tu apellido" name="apellido">
    </div>
    <div>
        <input type="submit" value="Registrarse">
    </div>
 </form>

</div>


<?php
include_once "footer.php";
?>