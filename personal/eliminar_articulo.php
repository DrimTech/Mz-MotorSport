<?php

$miconexion = mysqli_connect("localhost", "id17552518_root", "GBou9x2FtB!!", "id17552518_mz_motorsports");

    if(!$miconexion) 
    {

        echo "La conexion ha fallado: " . mysqli_error();
        exit();
    }
# Se conecta a la base de datos donde se encuentran los posts ↑ ↑ ↑


# Comienza función de borrado ↓ ↓ ↓
if(isset($_GET['id']))
{
    $id = $_GET['id']; # Obtiene el ID de la 
    $res = mysqli_query($miconexion, "SELECT * FROM autos WHERE id = $id"); # Se selecciona la info respecto al ID de la publicación

    while($row=mysqli_fetch_array($res))
    {
        $img = "../usuarios/imagenes/" . $row['imagen'];
    } # Aquí se obtiene el nombre de la imagen del directorio donde se almacenan las imágenes

    unlink($img); # Este lo borra

    $query = "DELETE FROM autos WHERE id = $id";
    $result = mysqli_query($miconexion,$query);
    if(!$result)
    {
        die("El borrado ha fallado");
    }
}
# Termina función de borrado ↑ ↑ ↑
?>
<script type="text/javascript">
	alert("Se ha eliminado la publicacion");
	window.location.href='../personal/personal_portada.php';
</script>