<?php 
session_start();
$miconexion = mysqli_connect("localhost", "id17552518_root", "GBou9x2FtB!!", "id17552518_mz_motorsports");
$imagen     = '';
$titulo     = '';
$fecha      = '';
$comentario = '';
$id         = '';
  if(isset($_GET['id']))
  {
    $id = $_GET['id'];
    $result = mysqli_query($miconexion,"SELECT * FROM noticias WHERE id = $id");
    if(mysqli_num_rows($result)== 1)
    {
      $row=mysqli_fetch_array($result);
      $imagen       = $row['Imagen'];
      $titulo       = $row['Titulo'];
      $fecha        = $row['Fecha'];
      $comentario   = $row['Comentario'];
    }
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <title>MZ-Noticias</title>
</head><!--Título de pestaña, importaciones y conexiones-->
<body>
<?php

if($result = mysqli_query($miconexion, "SELECT * FROM noticias WHERE id = $id")){
    while($row = mysqli_fetch_assoc($result)){
        if($row['Imagen']!=""){
                echo "
                <nav class='navbar navbar-light bg-light'>
                        <div class='container-fluid'>
                            <a class='navbar-brand' href='../noticias.php'>Regresas a Noticias</a>
                        </div>
                </nav>
                <br>
                    <div class='container' >
                    	<div class='container'>
                    		<center>
                    			<h2 style='text-align:left;'>". $row['Titulo'] ."</h2>
                    			<font size = 2><p class='text-right' style=' padding-top: 0px;padding-bottom: 0px; padding-right: 0px; width: 850px; border-top-left-radius: 15px; border-bottom-left-radius: 15px;'>Publicado el " . substr($row['Fecha'], 0, 10) . " a las " . substr($row['Fecha'], 10, 18) . "<p></font>
                    		</center>
                    	</div>
                    	<div class='row'>
                    	    <img src='/blog/imagenes/".$row['Imagen']."'class='img-responsive center-block d-block mx-auto' style='width: 100%; height: 400px; object-fit: scale-down;'/>
                    	</div>
                    	<br>
                    	<div style='padding-top: 0px;padding-bottom: 20px; padding-right: 0px; padding-left: 20px; widt:1000px;'> 
                    		<font size = 3><p class ='text-justify'  style='text-align: center; padding-top: 15px; padding-bottom: 15px; padding-right: 30px; padding-left: 30px; '>". $row['Comentario'] ."</p></font>
                    	</div>
                    	</div>
                            <br>"; # Contenedor para proyectar imagen
        }
    }
}
?>
</body>
</html>