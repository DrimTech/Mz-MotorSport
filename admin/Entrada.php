<!DOCTYPE html>
<html lang="en" style="color: var(--blue);">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/styles.css">
    <title>MzMotorSport/Admin Page</title>
</head><!--Título de pestaña, importaciones y conexiones-->
<body>
<?php
  session_start();
  if(!isset($_SESSION['admin_login']))    
  {
      header("location: ../login.php");  
  } #Comprueba que el admin esté logueado, si no lo está lo manda a iniciar sesión
?>
<br>
<div class="position-relative">
    <div class="position-absolute top-50 start-50 translate-middle"><a href="indexadmin.html"><img src="../assets/img/MZMOTORSPORTLOGO.png" alt=""></a></div>  
</div>
<br><br>
<h2><center>Pagina administrativa</center></h2>
<br>
<h2><center>Crear Publicacion</center></h2>
<div class="container">
<form action="insertar_contenido.php" method="post" enctype="multipart/form-data" name="form1">
    <hr color= white width= 100%><br>
    <div class="mb-3">
        <input type="text" class="form-control" name="campo_titulo" id="campo_titulo" placeholder="Titulo">
    </div>
    <div class="mb-3">
        <textarea class="form-control" name="area_publi" id="area_publi" rows="3"  placeholder="Cuerpo Publicacion"></textarea>
    </div>
    <div class="mb-3">
        <input type="hidden" name="MAX_TAM" value="2097152">
        <input type="file" class="action-button" name="imagen" id="imagen">
    <div class="form-text">Seleccione una imagen con tamaño inferior a 2 MB</div>
    </div>
      <div class="d-grid gap-2">
        <input type="submit" class="btn btn-primary action-button" name="btn_enviar" id="btn_enviar" value="Guardar"> 
    </div>
</form>
</div>
</body>
</html>