<div class="barra-lateral">
  <div class="contenido-barra-lateral">
    <h4 class="nav-link text-center">MENU</h4>
    <br>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'compras.php' ? 'activo' : '' ?>" href="compras.php">MIS COMPRAS</a>
      </li>
      <br>
      <li class="nav-item">
        <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'biblioteca.php' ? 'activo' : '' ?>" href="biblioteca.php">BIBLIOTECA</a>
      </li>
      <br>
      <li class="nav-item">
        <a class="nav-link" href="#">CONFIGURACION</a>
      </li>
      <br>
      <li class="nav-item">
        <a class="nav-link" href="#">CERRAR SESION</a>
      </li>
    </ul>
  </div>
</div>