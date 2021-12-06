<?php 
session_start();
include("elements/header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="/css/styles.css">
  <title>MzMotorSport</title>
</head>
<body>
    <center><hr style="color: var(--gray); background: var(--gray);" width=40%></center>
    <div id="filtros" style="padding-left: 100px;">
    Filtrar por 
    <form action="Cauto.php" method="post">
        <select name="filtro">
            <option value="">--Seleccione un orden--</option>
            <option value="recientes">Mas recientes</option>
            <option value="antiguos">Mas antiguos</option>
        </select> <button class="btn btn-info" type="submit">Filtrar</button>
    </form>
    </div>
    <section class='cars'>
      <div class='container'>
        <p class='copy_section'>Comprar un Auto</p>
      <article class='container-cards'>
    <?php
    global $miconsulta;
    if(isset($_POST['filtro'])){
    switch($_POST['filtro']){
    case "todos":
    $miconsulta = "select * from autos WHERE vendido = 'Si' and autorizada = 'Si';";
    break;
    case "recientes":
    $miconsulta = "SELECT * from autos WHERE vendido = 'Si' and autorizada = 'Si' order by fecha desc;";
    break;
    case "antiguos":
    $miconsulta = "select * from autos WHERE vendido = 'Si' and autorizada = 'Si' order by fecha asc;";
    break;
    }
    }else{
    $miconsulta = "select * from autos WHERE vendido = 'Si' and autorizada = 'Si';";
    }
    ?>
<?php 
    $miconexion = mysqli_connect("localhost", "id17552518_root", "GBou9x2FtB!!", "id17552518_mz_motorsports");
    if(!$miconexion) {
        echo "La conexion ha fallado: " . mysqli_error();
        exit();
    }
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
    global $miconsulta;
    if(isset($_POST['filtro'])){
    switch($_POST['filtro']){
    case "todos":
    $miconsulta = "select * from autos;";
    break;
    case "antiguos":
    $miconsulta = "SELECT * from autos order by fecha asc;";
    break;
    case "recientes":
    $miconsulta = "select * from autos order by fecha desc;";
    break;
    }
    }else{
    $miconsulta = "select * from autos;";
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