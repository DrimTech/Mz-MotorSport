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
            <div class='container text-light' >
                <h2>". $row['Titulo'] ."</h2>
                <font size = 2><p class='text-right' style=' padding-top: 0px;padding-bottom: 0px; padding-right: 0px; width: 850px; border-top-left-radius: 15px; border-bottom-left-radius: 15px;'>Publicado el " . substr($row['Fecha'], 0, 10) . " a las " . substr($row['Fecha'], 10, 18) . "<p></font>
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