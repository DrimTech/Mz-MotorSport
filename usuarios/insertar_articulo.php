<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<?php
session_start();
	$miconexion = mysqli_connect("localhost", "root", "", "mz_motorsports");
	if(!$miconexion) {
		echo "La conexion ha fallado: " . mysqli_error();
		exit();
	}
	if(isset($_SESSION['usuarios_login']))
	{
		$email = $_SESSION['usuarios_login'];
	}
	if($_FILES['imagen']['error']){
		switch ($_FILES['imagen']['error']) {
			case 1:
				echo "El tamaño del archivo excede lo permitido por el servidor";
				break;
			case 2:
				echo "El tamaño del archivo excede 2 MB";
				break;
			case 3:
				echo "El envío de archivo se interrumpió";
				break;
			case 4:
				echo "No se ha enviado ningún archivo de imagen";
				break;
		} # Corrobora que se suba una imagen correctamente
	} else {
		echo "Entrada subida con éxito <br>";
		if((isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error']==UPLOAD_ERR_OK))) {
			$destino_de_ruta ="./imagenes/";
			move_uploaded_file($_FILES['imagen']['tmp_name'], $destino_de_ruta . $_FILES['imagen']['name']);
			echo "El archivo " . $_FILES['imagen']['name'] . " se ha copiado en el directorio de imágenes <br>";
		} else {
			echo "El archivo no se ha podido copiar al directorio de imágenes";
		}
	} # Comprueba que si no hay errores, se subió el post con éxito
	$correo 		= $_SESSION['usuarios_login'];
	$articulo 		= $_POST['articulo'];
	$modelo 		= $_POST['modelo'];
	$color 			= $_POST['color'];
	$km 			= $_POST['km'];
	$precio			= $_POST['precio'];
	$contacto 		= mysqli_query($miconexion,"SELECT contacto from usuarios where email = $correo");
	$comentario 	= $_POST['comentario'];
	$laimagen	 	= $_FILES['imagen']['name'];
	$fecha 			= date("Y-m-d H:i:s");
	$vendido 		= 0;
	$estado 		= 0;
	$miconsulta = "INSERT INTO autos (email_usuario, articulo, modelo, color, km, precio, celular, comentario, imagen, fecha, vendido, estado) VALUES ('" . $correo ."', '" . $articulo ."', '" . $modelo ."', '" . $color ."', '" . $km ."', '" . $precio ."', '" . $contacto ."', '" . $comentario ."', '". $laimagen ."', '". $fecha ."', '". $vendido ."', '". $estado ."')"; # Inserta la entrada en la database
	$resultado=mysqli_query($miconexion, $miconsulta);
	mysqli_close($miconexion); 	/*Cierra conexión*/

	echo "Correo es: ",$correo;
	echo "<br>";
	echo "Articulo es: ",$articulo;
	echo "<br>";
	echo "Modelo es: ",$modelo;
	echo "<br>";
	echo "Color es: ",$color;
	echo "<br>";
	echo "KM SON: ",$km;
	echo "<br>";
	echo "Precio es: ",$precio;
	echo "<br>";
	echo "Celu es: ",$contacto;
	echo "<br>";
	echo "DESC ES: ",$comentario;
	echo "<br>"; 
	echo $laimagen;
	echo "<br>"; 
	echo "FECHA: ",$fecha;
	echo "<br>";
	echo "VENDIDO: ",$vendido;
	echo "<br>";
	echo "ESTADO; ",$estado;
	echo "<br>";
?>
<script type="text/javascript">
	/*alert("Se ha agregado la publicacion exitosamente");
	window.location.href='Vauto.php';*/
</script>
</body>
</html>