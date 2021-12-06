<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="../css/styles.css">
    <title>MZ-Noticias</title>
</head><!--Título de pestaña, importaciones y conexiones-->
<body style="color: var(--blue);">
    <!--Header-->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/login_regis_form.css">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
   <link rel="stylesheet" href="./css/styles.css">
<!-- Font Awesome CSS -->
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<!-- jQuery -->
<?php>
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
?>
<br>
    <h1 style="border-right-style: none;text-align: center;color: black;" class="fw-bold">Noticias</h1>
    <center><hr style="color: var(--gray); background: var(--gray);" width=40%></center>
    <div id="filtros" style="padding-left: 100px;">
    Filtrar por 
    <form action="noticias.php" method="post">
        <select name="filtro">
            <option value="todos">--Seleccione un orden--</option>
            <option value="recientes">Mas recientes</option>
            <option value="antiguos">Mas antiguos</option>
        </select> <button class="btn btn-info" type="submit">Filtrar</button>
    </form>
    </div>
<br>
<?php
    $miconexion = mysqli_connect("localhost", "id17552518_root", "GBou9x2FtB!!", "id17552518_mz_motorsports");
    if(!$miconexion) {
        echo "La conexion ha fallado: " . mysqli_error();
        exit();
    }
    global $miconsulta;
    if(isset($_POST['filtro'])){
    switch($_POST['filtro']){
    case "todos":
    $miconsulta = "select * from noticias;";
    break;
    case "recientes":
    $miconsulta = "select * from noticias order by Fecha desc;";
    break;
    case "antiguos":
    $miconsulta = "select * from noticias order by Fecha asc;";
    break;
    }
    }else{
    $miconsulta = "select * from noticias;";
    }
    if($resultado = mysqli_query($miconexion, $miconsulta)) {
            while($registro = mysqli_fetch_assoc($resultado)) {
                if($registro['Imagen']!=""){
                        echo "
                    <section class='scroll-element js-scroll fade-in-bottom' align: 'center' style='color: dark; padding-top: 5px;'>
                            <div class='container'>
                                <div class='row' style='padding-left: 15px;'>
                                    <div class='col-md-7 bg-light text-dark' style='border-radius: 15px 0px 0px 15px;'>
                                        <div>
                                            <br>
                                            <h3>" . substr($registro['Titulo'], 0, 100) . "...</h3>
                                            <p style='border-left-color: var(--blue)''>" . $registro['Fecha'] . "</p>
                                            <p style='border-left-color: var(--blue)''>" . substr($registro['Comentario'], 0, 65) . "...</p>
                                            <br>
                                            <a class='btn btn-primary float-end' role='button' href= 'single.php/" .  "?id=". $registro['id'] . "'>Ver más</a>
                                        </div>
                                        <br>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='d-none d-md-block item' style='padding-right: 15px;'>
                                        <img class='image-fluid' src='./imagenes/" . $registro['Imagen'] . "'style= 'width: 140%; height: 280px; object-fit: scale-down; background: none; '>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <br>";
                }
            }
        }
?> <!-- Este es el formato que se le da al listado de publicaciones -->
</body>
<?php 
include("../footer.php");
?> <!-- Llama al footer -->
</html>