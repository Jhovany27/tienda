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
    <title>Home</title>

</head>

<body>

    <div class="d-flex color-fondo">
        <!-- Sidebar -->
        <?php include '../components/sidebar.php'; ?>

        <div class="container-fluid">
            <!-- Navbar -->
            <?php include '../components/navbar.php'; ?>
            <br>

            <!-- compras -->
            <div class="row">
                <div class="container contenedor-card">
                    <br>
                    <div class="row justify-content-center g-3">
                        <div class="row">
                            <div class="col">
                                <h2>PORTADA</h2>
                            </div>
                            <div class="col">
                                <h2>NOMBRE</h2>
                            </div>
                            <div class="col">
                                <h2>COSTO</h2>
                            </div>
                            <div class="col">
                                <h2>ACCIONES</h2>
                            </div>
                            <hr>
                        </div>

                        <?php foreach ($productos as $producto) { ?>
                            <div class="row borde">
                                <div class="col">
                                    <img src="<?php echo $producto['imagen']; ?>" class="img-tamanio-compra" alt="...">
                                </div>
                                <div class="col">
                                    <h5 class="card-title"><?php echo $producto['titulo']; ?></h5>
                                </div>
                                <div class="col">
                                    <h5 class="card-title"><?php echo $producto['precio']; ?></h5>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-success">FACTURAR</button>
                                    <button type="button" class="btn btn-outline-warning">DEVOLUCIÓN</button>
                                </div>
                            </div>
                            <div>

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