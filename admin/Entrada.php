<!DOCTYPE html>
<html lang="en" style="color: var(--blue);">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="icon" href="../browser.png">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../js/jquery-1.12.4-jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
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
<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="indexadmin.php">Regresar al Dashboard</a>
    </div>
  </div>
</nav> <!-- Navbar sencilla que regresa al Dashboard -->
  <div class="container">
    <div class="col-lg-12">
      <center>
        <h1>Página Administrativa</h1>
      </center>
      <hr><br>
    </div>
<div class="container">
<form action="insertar_contenido.php" method="post" enctype="multipart/form-data" name="form1">
    <div class="mb-3">
        <input type="text" class="form-control" name="campo_titulo" id="campo_titulo" placeholder="Titulo">
    </div>
    <br>
    <div class="mb-3">
        <textarea class="form-control" name="area_publi" id="area_publi" rows="3"  placeholder="Cuerpo Publicacion"></textarea>
    </div>
    <br>
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