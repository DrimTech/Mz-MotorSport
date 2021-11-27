<?php
$miconexion = mysqli_connect("localhost", "root", "", "mz_motorsports");
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
if($result = mysqli_query($miconexion, "SELECT * FROM noticias WHERE id = $id")){
    while($row = mysqli_fetch_assoc($result)){
        if($row['Imagen']!=""){
                echo "
              <meta charset='UTF-8'>
              <meta http-equiv='X-UA-Compatible' content='IE=edge'>
              <meta name='viewport' content='width=device-width, initial-scale=1.0'>
              <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
              <link rel='stylesheet' href='./css/styles.css'>
              <link rel='stylesheet' type='text/css' href='../css/login_regis_form.css'>
              <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
            <!-- Font Awesome CSS -->
              <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
            <!-- jQuery -->
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
                    
                    <div style='padding-top: 0px;padding-bottom: 20px; padding-right: 0px; padding-left: 40px; width: 1100px;'> 
                    <font size = 3><p class ='text-justify'  style='background: var(--gray); padding-top: 15px; padding-bottom: 15px; padding-right: 10px; padding-left: 10px; '>". $row['Comentario'] ."</p></font>
                    </div>
            </div>
            <br>
                    "; # Contenedor para proyectar imagen
        }
    }
}
?>