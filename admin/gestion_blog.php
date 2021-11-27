<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>Administrador de publicaciones</title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<link rel="icon" href="../browser.png">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<script src="../js/jquery-1.12.4-jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>

<style type="text/css">

	.login-form {
		width: 340px;
    	margin: 20px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }

    h1, h2, h3, h4 {
    	color: black;
    }

    th, .centro {
    	text-align: center;
    }
    
</style> <!-- Estilos del form que presenta la lista de publicaciones -->
</head>

<body style="background-color: #FFFFF;">

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

<div class="wrapper">

<div class="container">
		
	<div class="col-lg-12"> 

		<center>
			<h1>Página Administrativa</h1>
			<h3>
			<?php
			session_start();

			if(!isset($_SESSION['admin_login']))	
			{
				header("location: ../logadmin.php");  
			} #Comprueba que el admin esté logueado, si no lo está lo manda a iniciar sesión
			?>
            
			</h3>
		</center>

		<!--<a href="../cerrar_sesion.php"><button class="btn btn-danger text-left"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cerrar Sesion</button></a>-->
		<hr><br><br>
	</div>

	<br><br><br>

	<div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading"> Panel de publicaciones</div>
                    <!-- Titulo del table -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                
                                <thead>
                                    <tr>
                                        <th width="3%" style="text-align: center;">ID</th>
                                        <th width="15%">Título</th>
                                        <th width="13%">Fecha de post</th>
                                        <th width="6%">Ver</th>
                                        <th width="6%">Editar</th>
                                        <th width="6%">Eliminar</th>
                                    </tr>
                                </thead> <!-- Columnas de la tabla administrativa -->

                                <tbody>

								<?php
								$miconexion = mysqli_connect("localhost", "root", "", "mz_motorsports");                                ;
								$query="SELECT * FROM noticias";
								$result_contenido = mysqli_query($miconexion,$query);
								
								while($row=mysqli_fetch_array($result_contenido))
								{

								?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $row["id"]; ?></td>
                                        <td><?php echo $row["Titulo"]; ?></td>
                                        <td class="centro"><?php echo $row["Fecha"]; ?></td>
                                        <td class="centro"width="4%"><a class='btn btn-primary float-end' href= "/blog/single.php?id=<?php echo $row['id']?> "><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></a></span></td>
										<td class="centro" width="4%"><a href="editar_entrada.php?id=<?php echo $row['id']?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
										<td class="centro" width="7%"><a href="eliminar_entrada.php?id=<?php echo $row['id']?>" class = "btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></a></span></td>
                                    </tr>
								<?php 
								}
								?><!-- Selecciona y muestra la información de la database por fila en una tabla --> 

                                </tbody>
                                
                            </table> 
                        </div>
                        <!-- tabla responsiva -->
                    </div>
                    <!-- panel del body -->
                </div>
                <!-- panel -->
            </div>
	
</div>
		
</div>
									
</body>
</html>