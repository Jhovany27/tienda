<nav class="navbar navbar-expand-lg barra-horizontal row">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link me-md-2 <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'activo' : '' ?>" aria-current="page" href="index.php">INICIO</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle me-md-2 text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    CATEGORIA
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item text-light" href="#">DE ACCIÓN</a></li>
                    <li><a class="dropdown-item text-light" href="#">AVENTURA</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item text-light" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link me-md-2 <?= basename($_SERVER['PHP_SELF']) == 'juegos.php' ? 'activo' : '' ?>" aria-current="page" href="juegos.php">LO NUEVO</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link me-md-2" href="#">EN DESCUENTO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'noticias.php' ? 'activo' : '' ?>" href="noticias.php">NOTICIAS</a>
            </li>
        </ul>
        <form class="d-flex">
            <input class="form-control me-2 busqueda-personalizado" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Buscar</button>
        </form>
    </div>
</nav>