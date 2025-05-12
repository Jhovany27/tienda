<?php
$productos = [
    ['titulo' => 'BLASPHEMOUS', 'precio' => '$20.00', 'descripcion' => 'Some quick example text to build on the card title and make up the bulk of the cards content.', 'imagen' => 'https://image.api.playstation.com/vulcan/ap/rnd/202210/0610/5MnmcnD6qqpjLbOS84kdIzJo.png'],
    ['titulo' => 'DARK SOULS 3', 'precio' => '$20.00', 'descripcion' => 'Some quick example text to build on the card title and make up the bulk of the cards content.', 'imagen' => 'https://image.api.playstation.com/cdn/UP0700/CUSA03388_00/v8JlD8KcQUtTqaLBmpFnj1ESRR5zMkLk.png'],
    ['titulo' => 'SEKIRO', 'precio' => '$20.00', 'descripcion' => 'Some quick example text to build on the card title and make up the bulk of the cards content.', 'imagen' => 'https://image.api.playstation.com/vulcan/img/rnd/202010/1700/B66T6RbAfvIGjpEQxPq7k0Mu.png'],
    ['titulo' => 'BLOODBORNE', 'precio' => '$20.00', 'descripcion' => 'Some quick example text to build on the card title and make up the bulk of the cards content.', 'imagen' => 'https://bgdigitales.cl/cdn/shop/files/b5uuNMulpxnRpWZDG7lPexwMY7i9Pns7.jpg?v=1721924388'],
    ['titulo' => 'CUPHEAD', 'precio' => '$20.00', 'descripcion' => 'Some quick example text to build on the card title and make up the bulk of the cards content.', 'imagen' => 'https://image.api.playstation.com/vulcan/img/cfn/11307fllh6D-IvbpCa18N0vRggVeRYWA06paTNCj3DENJMScAzW2f3ry4IwFcXBAt9kWXdZGpGoOGjxJ_e9MdordMVAosNhZ.png'],
    ['titulo' => 'HOLLOW KNIGHT', 'precio' => '$20.00', 'descripcion' => 'Some quick example text to build on the card title and make up the bulk of the cards content.', 'imagen' => 'https://images.sftcdn.net/images/t_app-icon-m/p/37db93fa-f9a5-4cde-81df-18cc26e3226a/2981914931/hollow-knight-logo.png'],
    ['titulo' => 'TERRARIA', 'precio' => '$20.00', 'descripcion' => 'Some quick example text to build on the card title and make up the bulk of the cards content.', 'imagen' => 'https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2014/09/385190-terraria-actualiza-dispositivos-moviles.jpg?tf=1200x1200'],
    ['titulo' => 'GOD OF WAR', 'precio' => '$20.00', 'descripcion' => 'Some quick example text to build on the card title and make up the bulk of the cards content.', 'imagen' => 'https://m.media-amazon.com/images/I/51Tzia1BxOL._SL500_.jpg'],

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Venta de juegos</title>
</head>

<body>
    <div class="d-flex color-fondo">
        <!-- Sidebar -->
        <?php include '../components/sidebar.php'; ?>

        <div class="container-fluid">
            <!-- Navbar -->
            <?php include '../components/navbar.php'; ?>

            <br>
            <!-- Tarjetas -->
            <div class="row">
                <div class="container contenedor-card">
                    <br>
                    <div class="row justify-content-center g-3">


                        <?php foreach ($productos as $producto) { ?>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                                <div class="card mx-auto w-100">
                                    <img src="<?php echo $producto['imagen']; ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $producto['titulo']; ?></h5>
                                        <h5 class="card-title"><?php echo $producto['precio']; ?></h5>
                                        <p class="card-text texto-truncado"><?php echo $producto['descripcion']; ?></p>
                                        <div class="row d-flex">
                                            <div class="mx-auto col-12">
                                                <a href="#" class="btn btn-success">Comprar</a>
                                                <a href="#" class="btn btn-outline-light">Agregar Carrito</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <br>
                </div>
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