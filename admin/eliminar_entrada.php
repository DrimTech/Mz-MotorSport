<?php

$miconexion = mysqli_connect("localhost", "root", "", "mz_motorsports");

    if(!$miconexion) 
    {

        echo "La conexion ha fallado: " . mysqli_error();
        exit();
    }
# Se conecta a la base de datos donde se encuentran los posts ↑ ↑ ↑


# Comienza función de borrado ↓ ↓ ↓
if(isset($_GET['id']))
{
    $id = $_GET['id']; # Obtiene el ID de la publicación
    $res = mysqli_query($miconexion, "SELECT * FROM noticias WHERE id = $id"); # Se selecciona la info respecto al ID de la publicación

    while($row=mysqli_fetch_array($res))
    {
        $img = "../blog/imagenes/" . $row['Imagen'];
    } # Aquí se obtiene el nombre de la imagen del directorio donde se almacenan las imágenes

    unlink($img); # Este lo borra

    $query = "DELETE FROM noticias WHERE id = $id";
    $result = mysqli_query($miconexion,$query);

    $query2 = "ALTER TABLE noticias AUTO_INCREMENT = 1";
    $result2 = mysqli_query($miconexion,$query2);


    if(!$result)
    {
        die("El borrado ha fallado");
    }

    if(!$result2){
        die("El auto_increment ha fallado");
    }
}
# Termina función de borrado ↑ ↑ ↑
?>

<script type="text/javascript">
	alert("Se ha eliminado la publicacion");
	window.location.href='gestion_blog.php';
</script>