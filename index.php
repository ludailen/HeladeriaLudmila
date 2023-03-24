<?php
include_once "header.php";
?>

<main>
    <div class="container-fluid inicio">
        <h1 class="hinicio" id="h1inicio">Ludmila</h1>
        <h2 class="hinicio">HELADOS</h2>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="d-none d-sm-none d-md-block">
                    <button class="botoninicio primerboton">
                        <a href="productos/portada.php?categoria=1000">NUESTROS SABORES</a>
                    </button>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="d-none d-sm-none d-md-block">
                    <button class="botoninicio">
                        <a href="sobrenos.php">NUESTRA HISTORIA</a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="cen fondoindex">
        <a class="cen producto" href="productos/index.php">NUESTROS PRODUCTOS</a>    
    </div>

    <div class="container productos">
        <div class="row galeria prod">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <img src="img/batido.jpg" alt="Batidos" width="400" height="500" class="img-fluid">
            </div>
            <div class="col-lg-7 col-md-6 col-sm-6 cen">
                <h4 class="inicioh4 izq">Batidos</h4>
                <p class="iniciop izq">A base de leche o agua, mucho helado y crema, son ideales para los días de
                    muuucho
                    calor. Y lo mejor:
                    podés pedirlos del sabor que más te guste, desde tu casa o en el local. ¡Riquísimos!</p>
            </div>
        </div>
        <div class="row galeria prod">
            <div class="col-lg-7 col-md-6 col-sm-6 cen">
                <h4 class="inicioh4 der">Tortas heladas</h4>
                <p class="iniciop der">Una opción perfecta para el postre, podés elegir entre tortas tricolor,
                    almendrado u
                    oreo. Si preferís, podés pedir una personalizada con anticipación. ¡No te las pierdas!</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <img src="img/tortaa.jpg" alt="Batidos" width="400" height="500" class="img-fluid">
            </div>
        </div>
        <div class="row galeria prod">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <img src="img/frappe.jpg" alt="Frappé" width="400" height="500" class="img-fluid">
            </div>
            <div class="col-lg-7 col-md-6 col-sm-6 cen">
                <h4 class="inicioh4 izq">Frappés</h4>
                <p class="iniciop izq">Para los fanáticos del café: leche, helado y un espresso hacen una combinación
                    perfecta. Decorado con crema y chocolate, una verdadera delicia.</p>
            </div>
        </div>
    </div>

    <div class="cen fondoindex">
        <h4 class="inicioh4">Gracias por visitar Ludmila helados</h4>
    </div>
</main>


<?php
include_once "footer.php";
?>