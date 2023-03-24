<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---Estilo---->
    <link rel="stylesheet" href="css/categorias.css">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <!---Fuentes---->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <title>Ludmila Helados</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="../index.php"><img src="img/logo.png" alt="Logo de Ludmila" title="Ludmila" width="250" height="100" class="img-fluid"></a>
            <!--menú hamburguesa-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <!--lista del nav-->
                <ul class="navbar-nav">
                    <?php
                    $menu=array();
                    $menu['INICIO']="../index.php";
                    $menu['SABORES']="portada.php?categoria=1000";
                    $menu['SOBRE NOSOTROS']="../sobrenos.php";
                    $menu['CONTACTO']='../contacto.php';
                    $menu['INICIAR SESIÓN']='abm/login/index.php';
                    foreach ($menu as $paginas=> $link)
                    echo"<li class='nav-item linksnav'><a href='$link'>$paginas</a></li>";
                    ?>
                </ul>
            </div>
        </nav>
    </header>