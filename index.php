<?php 
session_start();
include "elements/header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/login_regis_form.css">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
  
<!-- Font Awesome CSS -->
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<!-- jQuery -->
  <title>MzMotorSport</title>
    <link rel="shortcut icon" type="image/jpg" href="/favicon.png"/>
</head>
<body>
  <!--HEADER MAIN-->
    <section class="container hero_main">
      <div class="hero_textos">
        <h1 class="title">El mejor lugar<span class="title--active"> Para comprar un Deportivo</span></h1>
        <p class="copy">Nos encargamos de llevar tu experiencia de compra al<span class="copy_active"> siguiente nivel</span></p>
        <a href="Cauto.php" class="cta">Comprar un carro</a>
      </div>
      <img src="assets/img/mockup.png" class="mockup">
    </section>
  </header>
   <!--HEADER MAIN-->
<!--Seccion Main de la Pagina-->
  <main>
    <section class="services">
      <div class="container">
        <h2 class="subtitles">Nuestros servicios </h2>
        <p class="copy_section">Los mejores Deportivos a los Mejores precios</p>
        <!--Tarjetas de servicios-->
        <article class="container-cards">
        <div class="card">
          <img src="assets/img/ComprarD.jpg" class="card_img">
          <div class="card_text">
            <div class="card_list">Comprar un Auto</div>
            <h3 class="card_title">Venta de Deportivos</h3>
            <p class="card_copy"> Somos la pagina No.1 de venta de autos deportivos en el estado ¡Tu futuro auto esta a unos clicks! </p>
            <a href="Cauto.php" class="card_button">Comprar</a>
          </div>
        </div>
        <div class="card">
          <img src="assets/img/VenderD.jpg" class="card_img">
          <div class="card_text">
            <div class="card_list">Vender un Auto</div>
            <h3 class="card_title">Compramos su Deportivo</h3>
            <p class="card_copy">Nuestra venta de automoviles es la mas eficaz y segurad de todo el pais ¡Vender tu auto nunca fue tan facil!</p>
            <a href="usuarios/Vauto.php" class="card_button">Vender</a>
          </div>
        </div>
        <div class="card">
          <img src="assets/img/MzMockupBlog.png" class="card_img">
          <div class="card_text">
            <div class="card_list">Seccion de Noticias</div>
            <h3 class="card_title">Noticias</h3>
            <p class="card_copy">Visita nuestro blog personal donde te puedes enterar de todas las noticias del mundo automotriz y nuestros avisos importantes</p>
            <a href="blog/noticias.php" class="card_button">Ver</a>
          </div>
        </div>
        <!--Tarjetas de servicios(FIN)-->
        </article>
        </section>
        <section class="email container container--modifier">
        <h2 class="subtitle subtitle--modifier">
        Somos tu mejor opcion para adquirir un deportivo en todo Colima</h2>
        <p class="copy_section copy_section--modifier">En MzMotorSport lo mas importante es la comodidad de compra y venta de nuestros clientes, Su experiencia de compra y de navegacion es lo mas importante para nosotros</p>
        <div class="check">
          <div class="check_item">
            <i class='bx bx-check'></i>
            <div class="check_numbers">
              <p class="check_number">+200</p>
              <p class="check_copy">Ventas exitosas</p>
            </div>
          </div>
          <div class="check_item">
            <i class='bx bx-check'></i>
            <div class="check_numbers">
              <p class="check_number">+200</p>
              <p class="check_copy">Compras exitosas</p>
            </div>
          </div>
          <div class="check_item">
            <i class='bx bx-check'></i>
            <div class="check_numbers">
              <p class="check_number">+200</p>
              <p class="check_copy">Clientes Satisfechos</p>
            </div>
          </div>
        </div>
    </section>
  </div>
  </main>
  <!--Seccion Main de la Pagina(FIN)-->
  <footer class="footer">
    <div class="container footer_caption">
      <div class="footer_copy">
        <p class=".copyright">MzMotorSport &copy; 2021 Todos los derechos reservados</p>
      </div>
    </div>
<script src="../assets/js/scroll.js"></script>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
</footer>
</body>
</html>