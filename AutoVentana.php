<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
         <link rel="stylesheet" href="css/styles.css">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <title>MzMotorSport</title>
      </head>
<body>
     <!--Header-->
  <?php require_once("./header.php"); ?> <!-- Llama al header/barra de nav -->
  <!--Header-->
    <section class="services">
    <article class="container-cards">
      <div class="container"> 
        <img src="assets/img/AutosP/AtecaCupra.jpg" class="img-fluid" alt="..." id="img_car">
            <div class="card-preview">
                <div class="card_textv2">
                    <div class="card_listv2" id="Car_name">Cupra Ateca</div>
                    <p class="descrip_card" id="Car_descrip">2020 - Blanca - 33,000km</p>
                    Precio: <h6 class="precio_auto" id="Car_precio">$$$</h6>     
                    <br>
                    <p><i class='bx bx-map'></i>Manzanilllo,Colima</p>
                    <button type="button" id="btn-generar-citacompra" 
                    class="card_button" data-bs-toggle="modal" data-bs-target="#modal-nueva-cita">¡Me Interesa!</button>
                  </div>
            </div>
        </div>
      </div>
    </article>
  </section>
    <section class="email container container--modifier">
        <h2 class="subtitle subtitle--modifier">
        Caracteristicas</h2>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">General</th>
                <th scope="col">Exterior</th>
                <th scope="col">interior</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Motor 2.0L Turbo</th>
                <td>Rin 19" caluminio COPPER</td>
                <td>Sistema de navegacion pantalla 9.2"</td>
                
              </tr>
              <tr>
                <th scope="row">300hp & 400N-p</th>
                <td>Camara 360°</td>
                <td>Sistema de sonido BeatsAudio</td>
                
              </tr>
              <tr>
                <th scope="row">Caja DSG 7vel</th>
                <td>5 puertas</td>
                <td>Asientos de cubo con Tapicería Dinámica en color negro</td>
              </tr>
            </tbody>
          </table>
          <br><br><br>
            <div class="check">
              <div class="check_item">
                <i class='bx bx-check'></i>
                <div class="check_numbers">
                  <p class="check_number">+200</p>
                  <p class="check_copy">Ventas exitosas</p>
                </div>
              </div>
              <div class="check_item">
                <i class='bx bx-check'></i>
                <div class="check_numbers">
                  <p class="check_number">+200</p>
                  <p class="check_copy">Compras exitosas</p>
                </div>
              </div>
              <div class="check_item">
                <i class='bx bx-check'></i>
                <div class="check_numbers">
                  <p class="check_number">+200</p>
                  <p class="check_copy">Clientes Satisfechos</p>
                </div>
              </div>
            </div>
    </section>

    <!-- Modal-->
    <div class="modal" tabindex="-1" id="modal-nueva-cita">
      <div class="modal-dialog">
          <div class="modal-content">
              <form action="" id="form-nueva-cita">
                  <div class="modal-header">
                      <h5 class="modal-title">Agendar cita</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                          <div class="mb-3">
                              <label for="Modelo" class="form-label">Nombre Completo</label>
                              <input type="text" value="" class="form-control" id="Nombre"required placeholder="Nombre Completo">
                          </div> 
                          <div class="mb-3">
                              <label for="descrip" class="form-label">Numero de Telefono</label>
                              <input type="text" value="" class="form-control" id="descrip" required placeholder="Numero de Telefono">
                          </div>
                          <div class="mb-3">
                            <label for="fechacta" class="form-label">Fecha de Cita</label>
                            <input type="date" value="" class="form-control" id="fechacta"  required placeholder="fecha para la cita">
                          </div>  
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-primary">Generar Cita</button>
                  </div>
              </form>
          </div>
      </div>
  </div>

    <footer class="footer">
        <div class="container footer_caption">
          <div class="footer_copy">
            <p class=".copyright">MzMotorSport &copy; 2021 Todos los derechos reservados</p>
          </div>
        </div>
      </footer>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>

