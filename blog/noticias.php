<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="../js/jquery-1.12.4-jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/scroll-animation.css">
    <link rel="stylesheet" href=".../css/styles.css">
    <title>MZ-Noticias</title>
</head><!--Título de pestaña, importaciones y conexiones-->
<body style="color: var(--blue);background: var(--gray-dark);">
<br>
    <h1 style="border-right-style: none;text-align: center;color: black;" class="fw-bold">HARDWARE</h1>
    <center><hr style="color: var(--gray); background: var(--gray);" width=40%></center>
    <h4 style="border-right-style: none;text-align: center;color: black;" class="fw-bold">Desliza hacia abajo para ver más</h4>
    <p style="border-right-style: none;text-align: center;color: black;" class="fw-bold">↓ &nbsp;&nbsp;&nbsp; ↓ &nbsp;&nbsp;&nbsp; ↓ &nbsp;&nbsp;&nbsp; ↓</p>
    <div id="filtros">
    Selecciona los filtros deseados para encontrar los productos 
    <form action="noticias.php" method="post">
        <select name="filtro">
            <option value="todos">--Seleccione un orden--</option>
            <option value="recientes">Mas recientes</option>
            <option value="antiguos">Mas antiguos</option>
        </select> <button type="submit">Filtrar</button>
    </form>
    </div>
<br>
<?php
    $miconexion = mysqli_connect("localhost", "root", "", "mz_motorsports");
    if(!$miconexion) {
        echo "La conexion ha fallado: " . mysqli_error();
        exit();
    }
    global $miconsulta;
    if(isset($_POST['filtro'])){
    switch($_POST['filtro']){
    case "todos":
    $miconsulta = "select * from noticias;";
    break;
    case "recientes":
    $miconsulta = "select * from noticias order by Fecha desc;";
    break;
    case "antiguos":
    $miconsulta = "select * from noticias order by Fecha asc;";
    break;
    }
    }else{
    $miconsulta = "select * from noticias;";
    }
    if($resultado = mysqli_query($miconexion, $miconsulta)) {
            while($registro = mysqli_fetch_assoc($resultado)) {
                if($registro['Imagen']!=""){
                        echo "
                    <section class='scroll-element js-scroll fade-in-bottom' align: 'center' style='color: black; background: var(--gray-dark); padding-top: 5px;'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-md-7 bg-secondary text-light'>
                                        <div>
                                            <br>
                                            <h3>" . substr($registro['Titulo'], 0, 100) . "...</h3>
                                            <p style='border-left-color: var(--blue)''>" . $registro['Fecha'] . "</p>
                                            <p style='border-left-color: var(--blue)''>" . substr($registro['Comentario'], 0, 65) . "...</p>
                                            <br>
                                            <a class='btn btn-primary float-end' role='button' href= 'single.php/" .  "?id=". $registro['id'] . "'>Ver más</a>
                                        </div>
                                        <br>
                                    </div>
                                    <div class='col-sm-4'>
                                        <div class='d-none d-md-block item' >
                                        <img class='image-fluid' src='./imagenes/" . $registro['Imagen'] . "'style= 'width: 140%; height: 280px; object-fit: scale-down; background: none; border-style: solid double solid none;'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <br><br>";
                }
                echo "<hr>"; # Termina sección
            }
        }
?> <!-- Este es el formato que se le da al listado de publicaciones -->
</body>
<?php 
include("../footer.php");
?> <!-- Llama al footer -->
</html>