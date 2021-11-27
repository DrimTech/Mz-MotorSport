<!DOCTYPE html>
<html lang="es">
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
  $correo = $_SESSION['usuarios_login']; 
  if(!isset($_SESSION['usuarios_login']))    
  {
      header("location: ../login.php");  
  }
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
          <li class="link-menu-items"><a href="../Cauto.php" class="link">Comprar</a></li>
          <li class="link-menu-items"><a href=" Vauto.php" class="link">Vender</a></li>
          <li class="link-menu-items"><a href="#" class="link">Noticias</a></li>
          <li class="link-menu-items"><a href="../cerrar_sesion.php" class="btn btn-danger">Cerrar Sesion</a></li>
        </ul>
      </div>
    </nav>
</header>
<section class="container">
  <h2 style = "color:#0d6efd;">
<?php if(isset($_SESSION['usuarios_login']))
				{
						echo "Bienvenido a MZMotorsport";
				}
				?>
				</h2>
  <h3>La forma <strong>más sencilla</strong> de vender tu Auto</h3>

  <div class="row">
   <div class="col">
     <div class="p-3 pb-5 bg-light">
       <h4>Cuestionario de venta</h4>
       <p>Iniciar cuestionario de venta para generar una publicacion</p><br>
          <button type="button" id="btn-nueva-cita" 
          class="btn btn-primary d-inline float-end shadow" data-bs-toggle="modal" data-bs-target="#modal-nueva-cita" style="color:rgb(255, 255, 255);">Vender<i class='bx bxs-plus-square' ></i></button>
      </div>
    </div>
  </div>
  <br><br>
  <table class="table">
    <thead class="table-ligth">
        <tr>
            <th width="15%">Articulo</th>
            <th width="12%">Fecha</th>
            <th width="10%">Autorizada</th>
            <th width="10%">Publicada</th>
            <th width="18%">Marcar como vendido</th>
            <th width="18%">Marcar como disponible</th>
            <th width="8%">Eliminar</th>
        </tr>
    </thead>
<?php
  $miconexion = mysqli_connect("localhost", "root", "", "mz_motorsports");
  $query="SELECT articulo, fecha, estado, vendido FROM autos where email_usuario = $correo";
  $result_contenido = mysqli_query($miconexion,$query);
  while($row=mysqli_fetch_array($result_contenido))
  {

  ?>
  <tr>
    <td><?php echo $row["articulo"]; ?></td>
    <td class="centro"><?php echo $row["fecha"]; ?></td>
    <td class="centro"><?php echo $row["estado"]; ?></td>
    <td class="centro"><?php echo $row["vendido"]; ?></td>
    <td class="centro" width="7%"><a href="eliminar_entrada.php?id=<?php echo $row['id']?>" class = "btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></span></td>
  </tr>
  <?php 
  }
  ?>
  </table>
</section>
<div class="modal" tabindex="-1" id="modal-nueva-cita">
  <div class="modal-dialog">
      <div class="modal-content">
          <form action="insertar_articulo.php" method="post" enctype="multipart/form-data" name="form1">
              <div class="modal-header">
                  <h5 class="modal-title">Realizar publicación</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              &nbsp;
              <center><small>La publicación será sometida a revisión antes de ser publicada</small></center>
              <div class="modal-body">
                      <!---->
                      <div class="mb-3">
                          <label for="automovil" class="form-label">Nombre del auto</label>
                          <input type="text" value="" class="form-control" name="articulo" id="articulo"required placeholder="EJ: Cupra Ateca">
                      </div> 
                      <!---->
                      <div class="mb-3">
                          <label for="anio" class="form-label">Modelo</label>
                          <input type="text" value="" class="form-control" name="modelo" id="modelo" required placeholder="Año del vehículo (ej: 2010)">
                      </div>
                      <!---->
                       <div class="mb-3">
                          <label for="gamma" class="form-label">Color</label>
                          <input type="text" value="" class="form-control" name="color" id="color" required placeholder="Color del auto">
                      </div>
                      <!---->
                       <div class="mb-3">
                          <label for="distancia" class="form-label">KM</label>
                          <input type="text" value="" class="form-control" name="km" id="km" required placeholder="Kilómetros del vehículo">
                      </div>
                      <!---->
                       <div class="mb-3">
                          <label for="costo" class="form-label">Precio de venta</label>
                          <input type="text" value="" class="form-control" name="precio" id="precio" required placeholder="Valor (ej: 50,000)">
                      </div>
                      <!---->
                       <div class="mb-3">
                        <label for="cuerpo" class="form-label">Comentarios</label>
                        <textarea class="form-control" name="comentario" id="comentario" rows="3"  placeholder="Descripción/detalles"></textarea>
                      </div>
                      <!---->
                      <div class="mb-3">
                        <center>
                          <input type="hidden" name="MAX_TAM" value="2097152">
                          <input type="file" class="action-button" name="imagen" id="imagen">
                          <div class="form-text">Seleccione una imagen con tamaño inferior a 2 MB</div>
                        </center>
                      </div> 
                      <!---->
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                  <input type="submit" class="btn btn-primary action-button" name="btn_enviar" id="btn_enviar" value="Guardar"> 
              </div>
          </form>
      </div>
  </div>
</div>

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