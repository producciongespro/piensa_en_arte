<?php
session_start();
if(isset($_SESSION["usuario"])){ //Si no ha iniciado sesi車n redirecciona a index.php
  header("Location: contenido.php");
}
 ?>

<!DOCTYPE html>
  <html>
   <head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="icon" href="ico.jpg" type="image/jpg">
     <link rel="stylesheet" href="/css/custom.css">
     <link rel="stylesheet" href= "css/style.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="./vendor/alertify/css/alertify.css">
     <link rel="stylesheet" href="./vendor/alertify/css/themes/bootstrap.min.css">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="vendor/jquery/jquery.min.js" ></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script src="./vendor/alertify/alertify.min.js"></script>
     <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
     <script src="js/model.js"></script>
     <script src="js/login.js"></script>
  <title>Login</title>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
      <div class="navbar-header">
        <img id="logo" class="" src="img/logo.png">

      </div>
      <div id="nombreSitio" class="">
        <span >Piensa en Arte</span>
        <img src="img/icono-informacion.png" class="btn-lg" id="info" data-toggle="modal" data-target="#myModal">
        <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->
      </div>
    </div>
  </nav>
    <div class="container">
      <div class="row">

          <div class="col-sm-6">
                    <div class="row">

                            <div class="col-sm-3 iconos">
                              <p class="text-center"></p><br>
                                <img path="data/documents/propuesta.unidocente.pdf" src="img/iconos/sitio1.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                                <p class="docum-inic">Circular PeA unidocentes</p>
                            </div>

                            <div class="col-sm-3 iconos">
                              <p class="text-center"></p><br>
                                <img path="data/documents/estrategia.pdf" src="img/iconos/sitio2.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                                <p class="docum-inic">Estrategia PeA unidocentes</p>
                            </div>

                          <div class="col-sm-3">
                              <p class="text-center"></p><br>
                              <!-- <a target="_blank" href="http://www.ddc.mep.go.cr/sites/all/files/ddc_mep_go_cr/archivos/dvm-ac-0015-01-2017.pdf    " > -->
                              <img path="data/documents/dvm-ac-0015-01-2017.pdf" src="img/iconos/sitio3.png" class="img-thumbnail person iconos" alt="Random Name" width="255" height="255">    </a>
                              <p class="docum-inic">Circular de implementación</p>
                            </div>


                            <div class="col-sm-3">
                              <p class="text-center"></p><br>
                                <img path="data/documents/protocolo-pasaporte.pdf" src="img/iconos/sitio4.png" class="img-thumbnail person iconos" alt="Random Name" width="255" height="255">
                                <p class="docum-inic">Protocolo pasaporte</p>
                            </div>
                        </div>
                </div>
                <div class="col-sm-1">
                </div>
          <div class="col-sm-4">
              <h2>Iniciar sesión</h2>
              <hr>
              <form action="" id="frmLogin">
                   <div class="form-group">
                      <label for="email">Correo MEP: </label>
                      <input type="email" class="form-control" id="email" name="email" required/>
                  </div>
                   <div class="form-group">
                      <label for="password">Contraseña: </label>
                      <input type="password" class="form-control" id="password" name="password"  id="txtPassword" required/>
                  </div>
                  <br>
                      <input class="btn btn-success" id="ingresar" type="submit" value="Ingresar">
           </form>


            <br>
           <div class="dropdown-divider">

           </div>
              <a class="dropdown-item" href="./server/recupera.php">Olvidé mi contraseña</a>
              <a id="lnkTerminos" class="dropdown-item" href="#">¿No tiene una cuenta? Registrarse</a>


          </div>

            </div>

                <div class="col-sm-1">
                  </div>
          </div>
    </div>




    <div class="modal fade" id="mdlTerminos" tabindex="-1" role="dialog" aria-labelledby="mdlTerminosLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mdlTerminosLabel">Términos y Condiciones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p>  El uso de los afiches, los planes de lecciones y las guías de trabajo elaboradas por la Asociación AcciónArte, se permite solo con fines educativos. Por ende, el material en mención se utilizará únicamente para el planeamiento y la ejecución de las clases de Español de educación primaria, en las cuales es necesario aplicar las estrategia metodológica Piensa en Arte.
        </p>
        <p>
        La utilización de estos recursos no convierte a la persona usuaria en titular de ninguno de los derechos de propiedad intelectual. Asimismo, las presentes condiciones no otorgan el permiso para emplearlos con otros fines o con afán de lucro. 
        </p>
        <hr>
        <div class="row">
        <div class="col-8">
        <div class="form-check">
                <!-- <input  type="checkbox" class="form-check-input" id="chkTerminos"> -->
                <!-- <label class="form-check-label" for="chkTerminos">Acepto los términos y condiciones que he leído para crear la cuenta.</label> -->
              </div>
        </div>
        <div class="col-4 text-right">
            <button id="btnCrearCuenta" type="button"  class="btn btn-primary">De acuerdo</button>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>







<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div id="modalContenedor" class="modal-dialog">

    <!-- Modal content-->
    <div id="informacion" class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <h4 class="modal-title">Piensa en Arte</h4>
      </div>
      <div class="modal-body">
        <p>Piensa en Arte (PeA) tiene como referencia internacional el Programa “Visual Thinking Curriculum” (VTC), creado por el Departamento de Educación del Museo de Arte Moderno de Nueva York (MOMA) y el Programa de Pensamiento Visual (PPV). Se trata de una exitosa experiencia educativa desarrollada en Venezuela y promovida por la Fundación Cisneros.</p>
        <p>La metodología ha sido desarrollada y adaptada a las necesidades educativas de Costa Rica por parte de la Asociación AcciónArte. Esto se ha impulsado durante más de una década, en conjunto con el Ministerio de Educación Pública y el Ministerio de Cultura y Juventud. Asimismo cabe señalar que PeA refleja las recomendaciones y comentarios procedentes de varias evaluaciones como “Project Zero”, de la Universidad de Harvard.</p>
        <p>En Costa Rica, la estrategia metodológica Piensa en Arte forma parte del currículo oficial de Español de educación primaria. Todas las semanas, dos lecciones de esta asignatura se dedican a una mediación que fomenta el diálogo a partir de obras de arte visual.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
    <footer class="text-center">
            <a class="up-arrow" href="#Inicio" data-toggle="tooltip" title="TO TOP">
              <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
                    <a href="http://www.mep.go.cr/educatico" target="_blank"> Ministerio de Educación Pública de Costa Rica / Departamento de GESPRO </a> <br>
    </footer>

    <div id="shadowAjax" class="div-shadow invisible">
                <img class="img-ajax-loading" src="./img/spinner.gif" alt="Loading">
    </div>

    <!-- ***********Modal*********** -->
    <div id="modalPlayer" class="modal fade" role="dialog">
              <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                      <h4 class="modal-title">Visualización</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Visualización</h4>
                  </div> -->
                  <div class="modal-body">
                    <p  id="contenedorPlayer">

            		</p>
                  </div>

                  <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
                </div>
                </div>

              </div>
    </div>
</body>
</html>
