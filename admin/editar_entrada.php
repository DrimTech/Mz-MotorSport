<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EDITAR ENTRADA</title>
    <link rel="icon" href="../browser.png">
        <link rel="stylesheet" href="../assets/plugins/SweetAlert/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/Navigation-with-Search.css">
        <link rel="stylesheet" href="../assets/css/Entrada.css">
</head>

<nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background: var(--gray);">
        <div class="container">
            <a class="navbar-brand" href="gestion_blog.php">Volver al panel de publicaciones</a>
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav><!--Barra de navegación sencilla que retorna al panel de publicaciones-->
    
    <br>
    
<h2>Editar entrada</h2><br> 
<body style="color: var(--blue);background: var(--gray-dark);">

<!-- Comienza función que actualiza la edición de un post ↓ ↓ ↓ -->
<?php
$miconexion = mysqli_connect("localhost", "root", "", "mz_motorsports");
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
     echo '
      <div class="alert alert-success" role="alert">
      Se ha actualizado exitosamente. Redirigiendo al la pagina administrativa...
      </div>
     ';
     header("refresh:1;gestion_blog.php");
  }
?> <!-- Finaliza función que actualiza la información de una entrada ↑ ↑ ↑ -->

<form action="editar_entrada.php?id=<?php echo $_GET['id'];?>" method="POST" enctype="multipart/form-data" name="form1">
    <hr color= white width= 50%><br>
        <table>
            <tr>
              <td>Título:
                <label for="campo_titulo"></label></td>
              <td><input type="text" name="Titulo" id="campo_titulo" style="width: 100%; position: relative; right: 20px;" value="<?php echo $title; ?>" placeholder="Actualiza el Titulo"></td> 
            </tr> <!-- Area de texto para el título del post -->

            <tr><td>Cuerpo:
                <label for="area_comentarios"></label></td>
                <td><textarea name="Comentario" id="area_comentarios" rows="10" cols="50" style="width: 100%; position: relative; right: 20px;" placeholder="Actualiza la descripcion"><?php echo $description; ?></textarea></td> <!-- Area de texto para el cuerpo del post -->
            </tr>
            <tr><td colspan="2">  
            <input type="submit" class="btn btn-success  action-button" name="update" id="btn_enviar" value="Actualizar"> <!-- Boton que envía la info -->
        </td></tr>
          
        </table>
</form><!-- Este form arroja la información depositada en la database para su edición -->

</body>
<script src="../assets/plugins/SweetAlert/dist/sweetalert2.all.min.js"></script>
</html>