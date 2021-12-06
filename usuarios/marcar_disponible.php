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

    $query = "UPDATE autos SET vendido = 'Si' WHERE id = $id ";
    $result = mysqli_query($miconexion,$query);
    if(!$result)
    {
        die("No actualizado.");
    }
}
# Termina función de borrado ↑ ↑ ↑
?>
<script type="text/javascript">
	window.location.href='Vauto.php';
</script>