<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
         <link rel="stylesheet" href="/css/styles.css">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>MzMotorSport</title>
      </head>
<body>
<?php 
$miconexion = mysqli_connect("localhost", "id17552518_root", "GBou9x2FtB!!", "id17552518_mz_motorsports");
$imagen     = '';
$articulo   = '';
$modelo     = '';
$color      = '';
$km         = '';
$precio     = '';
$comentario = '';
$fecha      = '';
$nombre     = '';
$apellidos  = '';
$email      = '';
$contacto   = '';
if(isset($_GET['id']))
  {
    $id = $_GET['id'];
    $query = "SELECT * FROM autos WHERE id = $id";
    $result = mysqli_query($miconexion,$query);
    if(mysqli_num_rows($result)== 1)
    {
      $row=mysqli_fetch_array($result);
      $imagen     = $row['imagen'];
      $articulo   = $row['articulo'];
      $modelo     = $row['modelo'];
      $color      = $row['color'];
      $km         = $row['km'];
      $precio     = $row['precio'];
      $comentario = $row['comentario'];
      $fecha      = $row['fecha'];
    }

    $query2 = "SELECT nombre,apellidos,email,contacto
                FROM usuarios
                LEFT JOIN autos
                ON usuarios.email=autos.email_usuario
                WHERE autos.id= $id;";
    $result2 = mysqli_query($miconexion,$query2);
    if(mysqli_num_rows($result2)== 1)
    {
      $row2=mysqli_fetch_array($result2);
      $nombre     = $row2['nombre'];
      $apellidos  = $row2['apellidos'];
      $email      = $row2['email'];
      $contacto   = $row2['contacto'];
    }
  }
if($result = mysqli_query($miconexion, $query)){
    while($row = mysqli_fetch_assoc($result)){
        if($row['imagen']!=""){
                echo "
                <nav class='navbar navbar-light bg-light'>
                        <div class='container-fluid'>
                            <a class='navbar-brand' href='/Cauto.php'>Regresas a Comprar</a>
                        </div>
                </nav>
    <section class='services'>
    <article class='container-cards'>
      <div class='container'> 
        <img src='/usuarios/imagenes/" .$imagen. "' class='img-fluid' alt='...' id='img_car'>
            <div class='card-preview'>
                <div class='card_textv2'>
                    <div class='card_listv2' id='Car_name'>".$articulo."</div>
                    <p class='descrip_card' id='Car_descrip'>".$modelo." - ".$color." - ".$km." km"."</p>
                    Precio: <h6 class='precio_auto' id='Car_precio'>$".$precio."</h6>     
                    <p><i class='bx bx-map'></i>Manzanilllo,Colima</p>
                    <h4>Descripción</h4>
                    <p>".$comentario."</p>
                    <button type='button' id='btn-generar-citacompra' 
                    class='card_button' data-bs-toggle='modal'data-bs-target='#modal-nueva-cita'>¡Me Interesa!</button>
                  </div>
            </div>
        </div>
      </div>
    </article>
  </section>
"; # Contenedor para proyectar imagen
        }
    }
}
?>
<section class='email container container--modifier'>
<br><br><br>
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

<!-- Modal-->
<div class="modal" tabindex="-1" id="modal-nueva-cita">
<div class="modal-dialog">
<div class="modal-content">
    <form action="" id="form-nueva-cita">
        <div class="modal-header">
            <h5 class="modal-title">Datos del vendedor</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                <div class="mb-3">
                    <h4 for="Modelo" class="form-label">Nombre</h4>
                    <label for="Modelo" class="form-label"><?php echo $nombre." ".$apellidos; ?></label>
                </div> 
                <div class="mb-3">
                    <h4 for="Modelo" class="form-label">Correo electronico</h4>
                    <label for="Modelo" class="form-label"><?php echo $email; ?></label>
                </div>
                <div class="mb-3">
                    <h4 for="Modelo" class="form-label">Número telefónico</h4>
                    <label for="Modelo" class="form-label"><?php echo $contacto; ?></label>
                </div>  
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar ventana</button>
            <!--<button type="submit" class="btn btn-primary">Generar Cita</button>-->
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>