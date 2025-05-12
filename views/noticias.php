<?php
$noticias = [
    ['titulo' => 'RED DEAD REDEMPTION 2', 'descripcion' => 'Con más de 175 premios al "Juego del año" y más de 250 valoraciones perfectas, Red Dead Redemption 2 es una historia épica sobre el honor y la lealtad en los albores del siglo XX.
Estados Unidos, 1899. Arthur Morgan y la banda de Van der Linde son forajidos buscados. Con agentes federales y los mejores cazarrecompensas pisándoles los talones, la banda deberá abrirse camino por el salvaje territorio del corazón de Estados Unidos a base de robos y peleas para sobrevivir. Mientras las divisiones internas aumentan y amenazan con desmantelar el grupo, Arthur debe elegir entre sus propios ideales y la lealtad a la banda que lo vio crecer..', 'imagen' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1174180/ss_bac60bacbf5da8945103648c08d27d5e202444ca.1920x1080.jpg?t=1720558643'],
    ['titulo' => 'ELDEN RING', 'descripcion' => 'La Tierra Sombría. Un lugar ensombrecido por el Árbol Áureo. Donde se produjo la primera venida de la diosa Márika. Un reino purgado en una batalla olvidada. Y calcinado por la llama de Messmer.
Fue hacia estas tierras donde Miquella se dirigió.
Se despojó de su propia carne, de su fuerza y su legado.
De todo lo que era dorado.
Y ahora Miquella aguarda el retorno de su señor prometido..', 'imagen' => 'https://img.redbull.com/images/c_limit,w_1500,h_1000/f_auto,q_auto/redbullcom/2024/6/4/g3nqorgwndom5g5po5nq/elden-ring-shadow-of-the-erdtree-ilustracion'],
    ['titulo' => 'MARVEL RIVALS', 'descripcion' => 'Marvel Rivals, reconocido por su dinámica intensa y personajes icónicos, explora un concepto innovador con su evento temporal Giant-Size Brain Blast. En un giro humorístico, los desarrolladores han modificado a los héroes del juego, otorgándoles cabezas desproporcionadamente grandes, un cambio que no solo destaca visualmente, sino que también influye en la mecánica de juego.', 'imagen' => 'https://img.asmedia.epimg.net/resizer/v2/SWCR32KB2ZCOJHDI6OHNWXDXVY.jpg?auth=ef53f626c35ae329ed75d6b182c7366556f164ce7541dd7d8df17fe60d03a528&width=1472&height=828&smart=true'],
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Noticias</title>

</head>

<body>
    <div class="d-flex color-fondo">
        <!-- Sidebar -->
        <?php include '../components/sidebar.php'; ?>

        <div class="container-fluid">
            <!-- Navbar -->
            <?php include '../components/navbar.php'; ?>

            <!-- Contenido de descripcion -->
            <div class="container">
                <br>
                <h1 class="text-light text-center">ULTIMAS NOTICIAS</h1>
                <?php foreach ($noticias as $noticia) { ?>
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo $noticia['imagen']; ?>" class="card-img-top" alt="..." style="border-radius: 10px;">
                        </div>
                        <div class="col-sm-8 text-light">
                            <div class="contenedor-card-noticia">
                                <div class="accordion-body">
                                    <strong><?php echo $noticia['descripcion']; ?> </strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                <?php } ?>
                <br>
            </div>

        </div>
    </div>
    <!-- Footer -->
    <footer>
        <div class="footer text-center text-lg-start color-fondo">
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2023 Copyright:
            </div>
        </div>
    </footer>
</body>

</html>