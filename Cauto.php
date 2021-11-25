<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="css/styles.css">
  <title>MzMotorSport</title>
</head>
<body>
  <!--Header-->
  <?php require_once("./header.php"); ?> <!-- Llama al header/barra de nav -->
  <!--Header-->
          <!--Tarjetas de carros-->
    <section class="cars">
      <div class="container">
        <p class="copy_section">Comprar un Auto</p>

      <article class="container-cards">
        <div class="cardv2">
          <a href="AutoVentana.php"><img src="assets/img/AutosP/AtecaCupra.jpg" class="card_img" id="img_car"></a>
          <div class="card_text" id="tarjeta_carros">
            <div class="card_list" id="Car_name">Cupra Ateca</div>
            <p class="descrip_card" id="Car_descrip" >2020 - Blanca - 33,000km</p>
            <p class="precio_auto" id="Car_precio">$$$</p>
          </div>
        </div>
        <!--
        <div class="cardv2">
          <img src="assets/img/AutosP/AudiRS5.jpg" class="card_img">
          <div class="card_text">
            <div class="card_list">Audi RS5</div>
            <p class="descrip_card">2020 - Azul - 21,923km</p>
            <p class="precio_auto">$$$</p>
          </div>
        </div>

        <div class="cardv2">
          <img src="assets/img/AutosP/Camaro2020.jpg"class="card_img">
          <div class="card_text">
            <div class="card_list">Chevrolet Camaro GT</div>
            <p class="descrip_card">2019 - Azul - 10,562km</p>
            <p class="precio_auto">$$$</p>
          </div>
        </div>

        <div class="cardv2">
          <img src="assets/img/AutosP/CivicSI2020.jpg" class="card_img">
          <div class="card_text">
            <div class="card_list">Honda Civic SI</div>
            <p class="descrip_card">2019 - Rojo - 22,321km</p>
            <p class="precio_auto">$$$</p>
          </div>
        </div>

        <div class="cardv2">
          <img src="assets/img/AutosP/KiaForteGT2020.jpg" class="card_img">
          <div class="card_text">
            <div class="card_list">Kia Forte GT</div>
            <p class="descrip_card">2019 - Blanco - 11,539km</p>
            <p class="precio_auto">$$$</p>
          </div>
        </div>

        <div class="cardv2">
          <img src="assets/img/AutosP/mustang 2021.jpg" class="card_img">
          <div class="card_text">
            <div class="card_list">Ford Mustang GT V8</div>
            <p class="descrip_card">2020 - Rojo - 4,221km</p>
            <p class="precio_auto">$$$</p>
          </div>
        </div>
        
        <div class="cardv2">
          <img src="assets/img/AutosP/PorscheCayenne.jpeg" class="card_img">
          <div class="card_text">
            <div class="card_list">Porsche Cayenne</div>
            <p class="descrip_card">2018 - Negro - 44,231km</p>
            <p class="precio_auto">$$$</p>
          </div>
        </div>

        <div class="cardv2">
          <img src="assets/img/AutosP/StingerGT2020.jpg" class="card_img">
          <div class="card_text">
            <div class="card_list">Kia Stringer GT</div>
            <p class="descrip_card">2021 - Naranja - 1,000km</p>
            <p class="precio_auto">$$$</p>
          </div>
        </div> -->
        <!--Tarjetas de carros(FIN)-->
      </article>
      </div>
    
  </section>  
    
    <footer class="footer">
      <div class="container footer_caption">
        <div class="footer_copy">
          <p class=".copyright">MzMotorSport &copy; 2021 Todos los derechos reservados</p>
        </div>
      </div>
    </footer>
</body>
</html>