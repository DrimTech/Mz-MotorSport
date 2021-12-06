
<!DOCTYPE html>
<html lang="en">
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
</head>
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
<body style="color: var(--blue);background: var(--gray-dark);">
<?php
 $miconexion = mysqli_connect("localhost", "id17552518_root", "GBou9x2FtB!!", "id17552518_mz_motorsports");
$title = '';
$description= '';


  if(isset($_GET['id']))
  {
    $id = $_GET['id'];
    $query = "SELECT * FROM noticias WHERE id = $id";
    $result = mysqli_query($miconexion,$query);
    if(mysqli_num_rows($result)== 1)
    {
      $row=mysqli_fetch_array($result);
      $title = $row['Titulo'];
      $description = $row['Comentario'];
    }
  }

  if (isset($_POST['update']))
  {
     $id = $_GET['id'];
     $title = $_POST['Titulo'];
     $description = $_POST['Comentario'];
     $query = "UPDATE noticias set Titulo = '$title', Comentario = '$description' WHERE id = $id";
     mysqli_query($miconexion,$query);
     header("refresh:0;gestion_blog.php");
  }
?> <!-- Finaliza función que actualiza la información de una entrada ↑ ↑ ↑ -->
<div class="container">
<form action="editar_entrada.php?id=<?php echo $_GET['id'];?>" method="POST" enctype="multipart/form-data" name="form1">
    <div class="mb-3">
        <input type="text" class="form-control" name="Titulo" id="campo_titulo" value="<?php echo $title; ?>" placeholder="Actualiza el titulo">
    </div>
    <br>
        <textarea class="form-control" name="Comentario" id="area_comentarios" placeholder="Actualiza la descripcion"><?php echo $description; ?></textarea>
    </div>
    <br>
      <div class="d-grid gap-2">
        <input type="submit" class="btn btn-success action-button" name="update" id="btn_enviar" value="Actualizar">
    </div>
</form>
</div>
</form><!-- Este form arroja la información depositada en la database para su edición -->
</body>
<script src="../assets/plugins/SweetAlert/dist/sweetalert2.all.min.js"></script>
</html>