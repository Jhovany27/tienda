<?php
$productos = [
  ['titulo' => 'BLASPHEMOUS', 'precio' => '$20.00', 'descripcion' => 'Some quick example text to build on the card title and make up the bulk of the cards content.', 'imagen' => 'https://image.api.playstation.com/vulcan/ap/rnd/202210/0610/5MnmcnD6qqpjLbOS84kdIzJo.png'],
  ['titulo' => 'DARK SOULS 3', 'precio' => '$20.00', 'descripcion' => 'Some quick example text to build on the card title and make up the bulk of the cards content.', 'imagen' => 'https://image.api.playstation.com/cdn/UP0700/CUSA03388_00/v8JlD8KcQUtTqaLBmpFnj1ESRR5zMkLk.png'],
  ['titulo' => 'SEKIRO', 'precio' => '$20.00', 'descripcion' => 'Some quick example text to build on the card title and make up the bulk of the cards content.', 'imagen' => 'https://image.api.playstation.com/vulcan/img/rnd/202010/1700/B66T6RbAfvIGjpEQxPq7k0Mu.png'],
  ['titulo' => 'BLOODBORNE', 'precio' => '$20.00', 'descripcion' => 'Some quick example text to build on the card title and make up the bulk of the cards content.', 'imagen' => 'https://bgdigitales.cl/cdn/shop/files/b5uuNMulpxnRpWZDG7lPexwMY7i9Pns7.jpg?v=1721924388'],
];

$noticias = [
  ['titulo' => 'RED DEAD REDEMPTION 2', 'descripcion' => 'Con más de 175 premios al "Juego del año" y más de 250 valoraciones perfectas, Red Dead Redemption 2 es una historia épica sobre el honor y la lealtad en los albores del siglo XX.
Estados Unidos, 1899. Arthur Morgan y la banda de Van der Linde son forajidos buscados. Con agentes federales y los mejores cazarrecompensas pisándoles los talones, la banda deberá abrirse camino por el salvaje territorio del corazón de Estados Unidos a base de robos y peleas para sobrevivir. Mientras las divisiones internas aumentan y amenazan con desmantelar el grupo, Arthur debe elegir entre sus propios ideales y la lealtad a la banda que lo vio crecer..', 'imagen' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/1174180/ss_bac60bacbf5da8945103648c08d27d5e202444ca.1920x1080.jpg?t=1720558643'],

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
      <!-- Carousel -->
      <div class="contenedor-card2 row d-grid gap-1 col-6 mx-auto">
        <br>
        <div class="contenedor-caroucel row d-grid gap-1 col-6 mx-auto">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="border-radius: 10px;">
              <div class="carousel-item active">
                <img src="https://sm.ign.com/t/ign_es/screenshot/default/got-keyart-80677_3tev.1280.jpg" class="d-block img-tamanio img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://image.api.playstation.com/vulcan/ap/rnd/202110/2000/YMUoJUYNX0xWk6eTKuZLr5Iw.jpg" class="d-block img-tamanio img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://assets.nintendo.com/image/upload/q_auto/f_auto/ncom/software/switch/70010000000964/a28a81253e919298beab2295e39a56b7a5140ef15abdb56135655e5c221b2a3a   " class="d-block img-tamanio img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <br>
      </div>
      <br>
      <!-- Tarjetas -->
      <div class="row">
        <div class="container contenedor-card">
          <br>
          <div class="row justify-content-center g-3">
            <h2 class="text-light">LO QUE TE RECOMENDAMOS</h2>

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
          <div class="contenedor-card d-grid gap-2 col-6 mx-auto">
            <a href="juegos.php" class="btn btn-outline-light">VER MAS</a>
            <br>
          </div>
        </div>
      </div>

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
        <div class="d-grid gap-2 col-6 mx-auto">
          <a href="noticias.php" class="btn btn-outline-light">VER MAS NOTICIAS</a>
        </div>
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