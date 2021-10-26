<!DOCTYPE html>
<html lang="es" style="color: var(--blue);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>DrimTech - Blog de Tecnologia</title>

    <link rel="icon" href="../browser.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/Footer-Basic.css">
    <link rel="stylesheet" type="text/css" href="../css/dashboard_users.css">
</head><!--Título de pestaña, importaciones y conexiones-->

<body style="color: var(--blue);background: var(--gray-dark);">

                <?php
                session_start();

                if(!isset($_SESSION['usuarios_login']))    
                {
                    header("location: ../usuarios/usuarios_portada.php");  
                } #Comprueba que el admin esté logueado, si no lo está lo manda a iniciar sesión
                
                ?>

    <div style="margin-top: 0px; background-color: #6c757d; border-bottom-left-radius: 25px; border-bottom-right-radius: 25px; padding-bottom: 10px">

    <h4 style="border-right-style: none;text-align: center;color: var(--light);">Dashboard</h4>

    </div>

    <br>

<!-- Comienza dashboard -->
 <section class="container mt-5 w-75">
    <div class="row">
     <div class="col">
       <div class="p-3 pb-5 bg-secondary text-light" style="border-radius: 15px;">
         <h4>Nueva publicación</h4>
         <small>Hacer nueva publicacion de venta</small><br>
         <a href="FormVenderAuto.html" class="btn btn-primary float-end">Entrar</a>
        </div>
      </div>
      <div class="col">
       <div class="p-3 pb-5 bg-secondary text-light" style="border-radius: 15px;">
         <h4>Ver publicaciones</h4>
         <small>Lista de tus publicaciones</small><br>
         <a href="PagUsers.html" class="btn btn-primary float-end">Entrar</a>
        </div>
      </div>
    </div>
 </section>

 <section class="container mt-5 w-75">
    <div class="row">
     <div class="col">
       <div class="p-3 pb-5 bg-secondary text-light" style="border-radius: 15px;">
         <h4>Comprar un auto</h4>
         <small>Ver la lista de autos disponibles</small><br>
         <a href="../Cauto.html" class="btn btn-primary float-end">Entrar</a>
        </div>
      </div>
      <div class="col">
       <div class="p-3 pb-5 bg-secondary text-light" style="border-radius: 15px;">
         <h4>Ver blog</h4>
         <small>Lista de publicaciones del blog</small><br>
         <a href="#" class="btn btn-primary float-end">Entrar</a>
        </div>
      </div>
    </div>
 </section>
<!-- Termina dashboard -->

 <br><br>

 <div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-primary" type="button"><a href="../cerrar_sesion.php" style="color: black;">Cerrar Sesión</button></a> <!-- Botón para cerrar sesión -->
</div> <!--Cuerpo del blog, publicaciones más recientes, redes sociales, footer, etc.-->

</body><!--Cuerpo de la página-->
</html>