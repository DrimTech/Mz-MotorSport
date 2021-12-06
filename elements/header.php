<?php
if(isset($_SESSION['usuarios_login']) == 1)
  {
    global $correo;
    $correo = $_SESSION['usuarios_login'];
    echo "
    <header class='herov2'>
        <nav class='nav_hero'>
          <div class='container nav_container'>
            <div class='logo'>
              <img class='logo_name' src='../assets/img/MZMOTORSPORTLOGO.png' alt=''>
            </div>
            <ul class='links'>
              <li class='link-menu-items'><a href='../index.php' class='link'>Inicio</a></li>
              <li class='link-menu-items'><a href='../Cauto.php' class='link'>Comprar</a></li>
              <li class='link-menu-items'><a href=' /usuarios/Vauto.php' class='link'>Vender</a></li>
              <li class='link-menu-items'><a href='/blog/noticias.php' class='link'>Noticias</a></li>
              <li class='link-menu-items'>".$correo."</li>
              <li class='link-menu-items'><a href='../cerrar_sesion.php' class='btn btn-danger'>Cerrar Sesion</a></li>
            </ul>
          </div>
        </nav>
    </header>";
}elseif(isset($_SESSION['admin_login']) == 1)
  {
    global $correo;
    $correo = $_SESSION['admin_login'];
    echo "
    <header class='herov2'>
        <nav class='nav_hero'>
          <div class='container nav_container'>
            <div class='logo'>
              <img class='logo_name' src='../assets/img/MZMOTORSPORTLOGO.png' alt=''>
            </div>
            <ul class='links'>
              <li class='link-menu-items'><a href='../index.php' class='link'>Inicio</a></li>
              <li class='link-menu-items'><a href='../Cauto.php' class='link'>Comprar</a></li>
              <li class='link-menu-items'><a href='/blog/noticias.php' class='link'>Noticias</a></li>
              <li class='link-menu-items'>".$correo."</li>
              <li class='link-menu-items'><a href='../cerrar_sesion.php' class='btn btn-danger'>Cerrar Sesion</a></li>
            </ul>
          </div>
        </nav>
    </header>";
}
elseif(isset($_SESSION['personal_login']) == 1)
  {
    global $correo;
    $correo = $_SESSION['personal_login'];
    echo "
    <header class='herov2'>
        <nav class='nav_hero'>
          <div class='container nav_container'>
            <div class='logo'>
              <img class='logo_name' src='../assets/img/MZMOTORSPORTLOGO.png' alt=''>
            </div>
            <ul class='links'>
              <li class='link-menu-items'><a href='../index.php' class='link'>Inicio</a></li>
              <li class='link-menu-items'><a href='../Cauto.php' class='link'>Comprar</a></li>
              <li class='link-menu-items'><a href='/blog/noticias.php' class='link'>Noticias</a></li>
              <li class='link-menu-items'>".$correo."</li>
              <li class='link-menu-items'><a href='../cerrar_sesion.php' class='btn btn-danger'>Cerrar Sesion</a></li>
            </ul>
          </div>
        </nav>
    </header>";
}else{
  echo"
  <header class='hero'>
    <nav class='nav_hero'>
      <div class='container nav_container'>
        <div class='logo'>
          <img class='logo_name' src='../assets/img/MZMOTORSPORTLOGO.png' alt=''>
        </div>
        <ul class='links'>
          <li class='link-menu-items'><a href='index.php' class='link'>Inicio</a></li>
          <li class='link-menu-items'><a href='Cauto.php' class='link'>Comprar</a></li>
          <li class='link-menu-items'><a href=' /usuarios/Vauto.php' class='link'>Vender</a></li>
          <li class='link-menu-items'><a href='blog/noticias.php' class='link'>Noticias</a></li>
          <li class='link-menu-items'><a href='login.php'>Iniciar Sesión</a></li>
          <li class='link-menu-items'>|</li>
          <li class='link-menu-items'><a href='registro.php'>Registrarse</a></li>
        </ul>
      </div>
    </nav>
";}
?>