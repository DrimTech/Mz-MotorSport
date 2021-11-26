<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
         <link rel="stylesheet" href="../css/styles.css">
        <title>MzMotorSport</title>
      </head>
<body>
<header class="herov2">
    <nav class="nav_hero">
        <div class="container nav_container">
            <div class="logo">
                <img class="logo_name" src="../assets/img/MZMOTORSPORTLOGO.png" alt="">
            </div>
            <ul class="links">
                <li class="link-menu-items"><a href="Vauto.php" class="btn btn-primary">Regresar al panel de venta</a></li>
            </ul>
            </div>
    </nav>
</header>
    <h2><center>Vender tu Automovil</center></h2>
<div class="container">
    <form action="" id="form-nueva-cita">
        <hr color= white width= 100%><br>
            <div class="mb-3">
                <label for="Marca" class="form-label">Marca</label>
                <input type="text" value="" class="form-control" id="Marca" required placeholder="Ej.: Nissan">
            </div>  
            <div class="mb-3">  
                <label for="Marca" class="form-label">Modelo</label>
                <input type="text" value="" class="form-control" id="Marca" required placeholder="Ej.: Sentra">
            </div>
            <div class="mb-3">
                <label for="Modelo" class="form-label">Año</label>
                <input type="text" value="" class="form-control" id="ano" required placeholder="Ej.: 2018">
            </div>
            <div class="mb-3">
                <label for="Kilometraje" class="form-label">Kilometraje</label>
                <input type="text" value="" class="form-control" id="Kilometraje" required placeholder="Ej.: 50,000">
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Condicion</legend>
                    <div class="col-sm-11">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="rdioNuevo" value="option1" checked>
                        <label class="form-check-label" for="rdioNuevo">Nuevo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="rdioSeminuevo" value="option2">
                        <label class="form-check-label" for="rdioSeminuevo">Seminuevo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="rdioUsado" value="option3">
                        <label class="form-check-label" for="rdioUsado">Usado</label>
                    </div>
                  </div>
            </fieldset>
            <div class="col-auto">
                <label for="Carroceria" class="form-label">Carroceria</label>
                <select class="form-select" id="CarroceriaAutos">
                    <option selected>Seleccionar</option>
                    <option value="1">Sedan</option>
                    <option value="2">SUV</option>
                    <option value="3">Pickup</option>
                    <option value="4">Hatchback</option>
                    <option value="5">Cuope</option>
                    <option value="6">Convertible</option>
                </select>
            </div>
            <br>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Transmision</legend>
                <div class="col-sm-11">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="rdioManual" value="option1" checked>
                    <label class="form-check-label" for="rdioManual">
                        Manual
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="rdioAutomatica" value="option2">
                    <label class="form-check-label" for="rdioAutomatica">
                     Automatica
                    </label>
                </div>
                </div>
            </fieldset>
            <div class="col-auto">
                <label for="Color" class="form-label">Color</label>
                <select class="form-select" id="ColorAutos">
                    <option selected>Seleccionar</option>
                    <option value="1">Plata</option>
                    <option value="2">Blanco</option>
                    <option value="3">Negro</option>
                    <option value="4">Azul</option>
                    <option value="5">Amarillo</option>
                    <option value="6">Beige</option>
                    <option value="7">Rojo</option>
                    <option value="8">Verde</option>
                    <option value="9">Tinto</option>
                    <option value="10">Rosa</option>
                    <option value="11">Gris</option>
                    <option value="12">Arena</option>
                    <option value="13">Morado</option>
                </select>
            </div>
            <br>
            <div class="col-auto">
                <label for="NoPuertas" class="form-label">No.Puertas</label>
                <select class="form-select" id="CarroceriaAutos">
                    <option selected>Seleccionar</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option> 
                </select>
            </div>
            <br>
            <div class="col-auto">
                <label for="Conbustible" class="form-label">Tipo de Conbustible</label>
                <select class="form-select" id="ColorAutos">
                    <option selected>Seleccionar</option>
                    <option value="1">Hibrido</option>
                    <option value="2">Electrico</option>
                    <option value="3">Diesel</option>
                    <option value="4">Gasolina</option>
                </select>
            </div>
            <br>
            <div class="mb-3">
                <label for="Motor" class="form-label">Motor</label>
                <input type="text" value="" class="form-control" id="Motor" required placeholder="Motor Ej.: 2.4L">
            </div>
            <div class="mb-3">
                <label for="No.rin" class="form-label">No.Rin</label>
                <input type="text" value="" class="form-control" id="NoRin" required placeholder="Ej.: Rin 17">
            </div>
            <div class="mb-3">
                <label for="NoAsientos" class="form-label">No.Asientos</label>
                <input type="text" value="" class="form-control" id="NoAsientos" required placeholder="Ej.: 5">
            </div>
            <div class="col-auto">
                <label for="Seguridad" class="form-label">Seguridad</label>
                <select class="form-select" id="ColorAutos">
                    <option selected>Seleccionar</option>
                    <option value="1">Kit completa de Seguridad</option>
                    <option value="2">Solo Bolsas de aire</option>
                    <option value="3">Solo cinturones</option>
                </select>
            </div>
            <br>
            <div class="mb-3">
                <input type="hidden" name="MAX_TAM" value="2097152">
                <input type="file" class="action-button" name="imagen" id="imagen">
                <div class="form-text">Seleccione una imagen con tamaño inferior a 2 MB</div>
              </div> 
            <br>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-danger me-md-2" type="button">Cancelar</button>
                <button class="btn btn-success" type="button">Guardar</button>
              </div>  
    </form>
</div>
</body>
</html>