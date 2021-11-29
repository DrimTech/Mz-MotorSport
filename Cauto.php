|<!DOCTYPE html>
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
<?php require_once("./elements/header.php");?>
    <section class='cars'>
      <div class='container'>
        <p class='copy_section'>Comprar un Auto</p>
      <article class='container-cards'>
<?php
  session_start();
  if(isset($_SESSION['usuarios_login']))
  {
    global $correo;
    $correo = $_SESSION['usuarios_login'];
  }
  if(isset($_SESSION['personal_login']))
  {
    global $correo;
    $correo = $_SESSION['personal_login'];
  } 
  if(isset($_SESSION['admin_login']))
  {
    global $correo;
    $correo = $_SESSION['admin_login'];
  } 
    $miconexion = mysqli_connect("localhost", "root", "", "mz_motorsports");

    if(!$miconexion) {

        echo "La conexion ha fallado: " . mysqli_error();
        exit();
    }

    $miconsulta = "SELECT * FROM autos WHERE vendido = 'Si' and autorizada = 'Si'"; # Esta consulta ordena la página para que se muestre por categoría y fecha más reciente de publicación

    if($resultado = mysqli_query($miconexion, $miconsulta)) {
        while($registro = mysqli_fetch_assoc($resultado)) {
            if($registro['imagen']!=""){
                    echo "        

        <div class='cardv2'>
          <a href= 'AutoVentana.php/" .  "?id=". $registro['id'] . "'><img src='./usuarios/imagenes/" . $registro['imagen'] . "' class='card_img' id='img_car'></a>

          <div class='card_text' id='tarjeta_carros'>
            <div class='card_list' id='Car_name'>".$registro['articulo']."</div>

            <p class='descrip_card' id='Car_descrip'>".$registro['modelo']." - ".$registro['color']." - ".$registro['km']."km"."</p>

            <p class='precio_auto' id='Car_precio'>$
            ".$registro['precio']."
            </p>
          </div>
        </div>

        <!--Tarjetas de carros(FIN)-->
";
            }
        }
        }
?>
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