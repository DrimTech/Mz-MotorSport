<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   <link rel="stylesheet" href="../css/styles.css">
  <title>MzMotorSport</title>
</head>
<body>
<?php
  session_start();
  if(!isset($_SESSION['usuarios_login']))    
  {
      header("location: ../login.php");  
  } #Comprueba que el admin esté logueado, si no lo está lo manda a iniciar sesión
?>
  <!--Header-->
  <header class="herov2">
    <nav class="nav_hero">
      <div class="container nav_container">
        <div class="logo">
          <img class="logo_name" src="../assets/img/MZMOTORSPORTLOGO.png" alt="">
        </div>
        <ul class="links">
          <li class="link-menu-items"><a href="../index.html" class="link">Inicio</a></li>
          <li class="link-menu-items"><a href="../Cauto.html" class="link">Comprar</a></li>
          <li class="link-menu-items"><a href="../Vauto.html" class="link">Vender</a></li>
          <li class="link-menu-items"><a href="#" class="link">Pendiente</a></li>
          <li class="link-menu-items"><a href="#" class="link--active">Contacto</a></li>
          <li class="link-menu-items"><a href="#"><i class='bx bx-user-circle'></i></a></li>
        </ul>
      </div>
    </nav>
</header>

<section class="container">
  <h1>Vender tu Auto</h1>
  <h3>La forma mas sencilla de vender tu Auto</h3>
  <div class="row">
   <div class="col">
     <div class="p-3 pb-5 bg-light">
       <h4>Cuestionario de venta</h4>
       <p>Iniciar cuestionario de venta para generar una publicacion</p><br>
       <button type="button" id="btn-nueva-cita" class="btn btn-primary d-inline float-end shadow"><a href="FormVenderAuto.html" style="color:rgb(255, 255, 255);"> Vender <i class='bx bxs-plus-square' ></i></a></button>
      </div>
    </div>
  </div>
  <br><br>
  <table class="table">
    <thead class="table-ligth">
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>No.Cita</th>
            <th>Fecha</th>
        </tr>
    </thead>
        <!--
        <tbody id="articulos">
        </tbody>
        -->
  </table>
</section>
<footer class="footer">
  <div class="container footer_caption">
    <div class="footer_copy">
      <p class=".copyright">MzMotorSport &copy; 2021 Todos los derechos reservados</p>
    </div>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>