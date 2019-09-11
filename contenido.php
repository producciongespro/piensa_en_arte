<?php
	header("Content-Type: text/html; charset=utf-8");
	session_start();
	require 'server/funcs/conexion.php';
	include 'server/funcs/funcs.php';

	if(!isset($_SESSION["usuario"])){ //Si no ha iniciado sesi車n redirecciona a index.php
		header("Location: index.php");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129164311-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129164311-1');
</script>



  <!-- Theme Made By www.w3schools.com - No Copyright -->
	<title>Piensa en Arte</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="ico.jpg" type="image/jpg">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	 <script src="js/main.js" charset="utf-8"></script>
	 <link rel="stylesheet" href="/css/custom.css">
	 <link rel="stylesheet" href= "css/style.css">

   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="js/main.js" charset="utf-8"></script>
 </head>



<audio id="audioInicio" autoplay="false" preload="true" src="audio/pista.mp3"> </audio>
<body id="Inicio" data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- **************Barra de menú*************** -->
<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <img id="logo" class="img-responsive" src="img/logo.png">
						 <div id="usuarioActivo"></div>
            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

        <!-- menu -->
          <div class="collapse navbar-collapse" id="myNavbar">


            <ul class="nav navbar-nav navbar-right">

              <li><a href="#Inicio">Inicio</a></li>
              <li><a href="#afiche4">Afiches 4°</a></li>
              <li><a href="#afiche5">Afiches 5°</a></li>
              <li><a href="#afiche6">Afiches 6°</a></li>
              <li><a href="#desarrollo">Desarrollo</a></li>
              <li><a href="#contacto">Contacto</a></li>
              <img  class="img-responsive" id="btnSonido" src="img/consonido.png">
            </ul>
          </div>
        </div>
</nav>


<!--***************Seccion de documentos*****************) -->
<div id="inicio" class="container text-center">

  <h1 id="col-tituespanol">Español</h1>
  <h3 id="col-tituloprinc">Piensa en Arte</h3>

      <p>Piensa en Arte (PeA) tiene como referencia internacional el Programa “Visual Thinking Curriculum” (VTC), creado por el Departamento de Educación del Museo de Arte Moderno de Nueva York (MOMA) y el Programa de Pensamiento Visual (PPV). Se trata de una exitosa experiencia educativa desarrollada en Venezuela y promovida por la Fundación Cisneros.</p><br>

        <p>La metodología ha sido desarrollada y adaptada a las necesidades educativas de Costa Rica por parte de la Asociación AcciónArte. Esto se ha impulsado durante más de una década, en conjunto con el Ministerio de Educación Pública y el Ministerio de Cultura y Juventud.  Asimismo cabe señalar que PeA refleja las recomendaciones y comentarios procedentes de varias evaluaciones como “Project Zero”, de la Universidad de Harvard.</p> <br>

        <p>En Costa Rica, la estrategia metodológica Piensa en Arte forma parte del currículo oficial de Español de educación primaria. Todas las semanas, dos lecciones de esta asignatura se dedican a una mediación que fomenta el diálogo a partir de obras de arte visual.</p> <br><br>


<div class="row">
      <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <img path="data/documents/guia_4.pdf" src="img/iconos/guia4.jpg" class="img-thumbnail person" alt="Random Name" width="500" height="255">
            <div class="card-body">
              <h4  class="card-title">  PDF  </h4>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <img  src="img/iconos/piensa.jpg"  class="img-thumbnail person"  alt="Random Name" width="255" height="255">
              <div class="card-body">
              </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <img  path="data/documents/guia_5.pdf"  src="img/iconos/guia5.jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
              <div class="card-body">
                <h4  class="card-title"> PDF </h4>
              </div>
            </div>
          </div>

    </div>

  <div class="row">

          <div class="col-sm-2">
            <p class="text-center"></p><br>
              <img path="data/documents/propuesta.unidocente.pdf" src="img/iconos/sitio1.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
              <p class="docum-inic">Circular PeA unidocentes</p>
          </div>

          <div class="col-sm-2">
            <p class="text-center"></p><br>
              <img path="data/documents/estrategia.pdf" src="img/iconos/sitio2.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
              <p class="docum-inic">Estrategia PeA unidocentes</p>
          </div>

        <div class="col-sm-2">
            <p class="text-center"></p><br>
            <a target="_blank" href="http://www.ddc.mep.go.cr/sites/all/files/ddc_mep_go_cr/archivos/dvm-ac-0015-01-2017.pdf    " >
            <img src="img/iconos/sitio3.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">    </a>
            <p class="docum-inic">Circular de implementación</p>
          </div>


          <div class="col-sm-2">
            <p class="text-center"></p><br>
              <img path="data/documents/protocolo-pasaporte.pdf" src="img/iconos/sitio4.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
              <p class="docum-inic">Protocolo pasaporte</p>
          </div>


          <div class="col-sm-2">
            <p class="text-center"></p><br>
            <a target="_blank" href="https://drive.google.com/file/d/1X2HbQp5iyQxpSo0cuIdHEEGQ3j7HzYu8/view?usp=sharing" >
            <img src="img/iconos/sitio5.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
            </a>
            <p class="docum-inic">Videoconferencia sobre la estrategia metodológica</p>
          </div>


          <div class="col-sm-2">
            <p class="text-center"></p><br>
            <a target="_blank" href="https://www.mep.go.cr/educatico/piensa-arte" >
            <img src="img/iconos/sitio6.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
            </a>
            <p class="docum-inic"> Videos explicativos</p>
          </div>
  </div>
</div>

<!-- ********************CARRUSEL DE FOTOS  AFICHE 4********************  -->
<div id="afiche4" class="container text-center">
            <h3 id="col-tituloafic4-1">Piensa en Arte: afiche #4</h3>
            </div>

          <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                    <li data-target="#myCarousel" data-slide-to="6"></li>
                    <li data-target="#myCarousel" data-slide-to="7"></li>
                    <li data-target="#myCarousel" data-slide-to="8"></li>
                    <li data-target="#myCarousel" data-slide-to="9"></li>
                    <li data-target="#myCarousel" data-slide-to="10"></li>
                    <li data-target="#myCarousel" data-slide-to="11"></li>
                    <li data-target="#myCarousel" data-slide-to="12"></li>
                    <li data-target="#myCarousel" data-slide-to="13"></li>
                    <li data-target="#myCarousel" data-slide-to="14"></li>
                    <li data-target="#myCarousel" data-slide-to="15"></li>
                    <li data-target="#myCarousel" data-slide-to="16"></li>
                    <li data-target="#myCarousel" data-slide-to="17"></li>
                    <li data-target="#myCarousel" data-slide-to="18"></li>
                    <li data-target="#myCarousel" data-slide-to="19"></li>
                    <li data-target="#myCarousel" data-slide-to="20"></li>
                  </ol>

                  <!-- imagenes iniciales -->
                  <div class="carousel-inner" role="listbox">

                        <div class="item active">
                          <img src="img/img_afiche4/afiche4 (1).jpg"  width="1200" height="700">
                        </div>

                        <div class="item">
                          <img src="img/img_afiche4/afiche4 (2).jpg"  width="1200" height="700">
                        </div>

                        <div class="item">
                          <img src="img/img_afiche4/afiche4 (3).jpg" width="1200" height="700">
                        </div>


                        <div class="item">
                          <img src="img/img_afiche4/afiche4 (5).jpg" width="1200" height="700">
                        </div>

                        <div class="item">
                          <img src="img/img_afiche4/afiche4 (6).jpg" width="1200" height="700">
                        </div>

                        <div class="item">
                          <img src="img/img_afiche4/afiche4 (8).jpg" width="1200" height="700">
                        </div>

                        <div class="item">
                          <img src="img/img_afiche4/afiche4 (9).jpg" width="1200" height="700">
                        </div>

                        <div class="item">
                          <img src="img/img_afiche4/afiche4 (11).jpg" width="1200" height="700">
                        </div>

                        <div class="item">
                          <img src="img/img_afiche4/afiche4 (14).jpg" width="1200" height="700">
                        </div>

                        <div class="item">
                          <img src="img/img_afiche4/afiche4 (15).jpg" width="1200" height="700">
                        </div>

                        <div class="item">
                          <img src="img/img_afiche4/afiche4 (16).jpg" width="1200" height="700">
                        </div>

                        <div class="item">
                          <img src="img/img_afiche4/afiche4 (17).jpg" width="1200" height="700">
                        </div>

                        <div class="item">
                          <img src="img/img_afiche4/afiche4 (18).jpg" width="1200" height="700">
                        </div>

                        <div class="item">
                          <img src="img/img_afiche4/afiche4 (19).jpg" width="1200" height="700">
                        </div>

                        <div class="item">
                          <img src="img/img_afiche4/afiche4 (20).jpg" width="1200" height="700">
                        </div>

                        <div class="item">
                          <img src="img/img_afiche4/afiche4 (22).jpg" width="1200" height="700">
                        </div>

                        <div class="item">
                          <img src="img/img_afiche4/afiche4 (24).jpg" width="1200" height="700">
                        </div>

                        <div class="item">
                          <img src="img/img_afiche4/afiche4 (27).jpg" width="1200" height="700">
                        </div>

                        <div class="item">
                          <img src="img/img_afiche4/afiche4 (28).jpg" width="1200" height="700">
                        </div>

                  </div>

                    <!-- Controles izquierdo y derecho -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
</div>


<!--***************PDF  AFICHE 4********** -->
<!-- ***********Fila #1******* -->
<div class="container text-center">
          <h3 id="col-tituloafic4-2">Lecciones y afiches del primer año de PeA</h3>

<div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
              <div class="card h-100">
                <img path="data/afiche4/lecciones/1_lecc_dominguenado.pdf" src="img/lecciones4/grand/1.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                <div class="card-body">
                  <a href="data/afiche4/imagenes/1domingueando.jpg" target="_blank"> Domingueando</a> <br>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                  <img path="data/afiche4/lecciones/2_lecc_puntarenas.pdf" src="img/lecciones4/grand/2.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                  <div class="card-body">
                    <a href="data/afiche4/imagenes/2puntarenas.jpg" target="_blank"> Puntarenas </a> <br>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
                  <div class="card h-100">
                    <img path="data/afiche4/lecciones/3_lecc__reunion_3.pdf" src="img/lecciones4/grand/3.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                    <div class="card-body">
                      <a href="data/afiche4/imagenes/3reunion_n3.jpg" target="_blank">Reunión 3</a> <br>
                    </div>
                  </div>
                </div>

</div>

<div class="row">

              <div class="col-sm-2">
                <p class="text-center"></p><br>
                  <img path="data/afiche4/lecciones/4_lecci_tugurio_en_puntarenas.pdf" src="img/lecciones4/4.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                <a href="data/afiche4/imagenes/4tugurio_en_puntarenas.jpg" target="_blank">Tugurio en Puntarenas </a> <br>
              </div>

              <div class="col-sm-2">
                <p class="text-center"></p><br>
                  <img path="data/afiche4/lecciones/5_lecc_los_nortes.pdf" src="img/lecciones4/5.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                <a href="data/afiche4/imagenes/5los_nortes.jpg" target="_blank">Los Nortes</a> <br>
              </div>

              <div class="col-sm-2">
                <p class="text-center"></p><br>
                  <img path="data/afiche4/lecciones/6_lecc_pelea_de_gallos.pdf" src="img/lecciones4/6.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                <a href="data/afiche4/imagenes/6pelea_de_gallos.jpg" target="_blank">Pelea de gallos</a> <br>
              </div>


              <div class="col-sm-2">
                <p class="text-center"></p><br>
                <img path="data/afiche4/lecciones/7_lecc_comparar_y_contrastar.pdf" src="img/lecciones4/7.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                  <a href="data/afiche4/imagenes/4tugurio_en_puntarenas.jpg" target="_blank">Tugurio en Puntarenas </a> <br>
                  <a href="data/afiche4/imagenes/2puntarenas.jpg" target="_blank"> Puntarenas </a> <br>
                </div>

              <div class="col-sm-2">
                <p class="text-center"></p><br>
                  <img path="data/afiche4/lecciones/8_lecc_vieja_nino_nagual.pdf" src="img/lecciones4/8.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                <a href="data/afiche4/imagenes/8vieja_nino_y_nagual.jpg" target="_blank">Vieja, niño y nagual</a> <br>
              </div>

              <div class="col-sm-2">
                <p class="text-center"></p><br>
                  <img path="data/afiche4/lecciones/9_lecc_la_foto_de_sus_quince_anos.pdf" src="img/lecciones4/9.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                <a href="data/afiche4/imagenes/9la_foto_de_ sus_ 15_anos.jpg" target="_blank"> La foto de sus quince años</a> <br>
              </div>

</div>


<div class="row">
                <div class="col-sm-2">
                <p class="text-center"></p><br>
                  <img path="data/afiche4/lecciones/10_lecc_tranferencia.pdf" src="img/lecciones4/10.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                <p>Escribir una historia sobre la vida cotidiana</p>
              </div>

              <div class="col-sm-2">
                <p class="text-center"></p><br>
                  <img path="data/afiche4/lecciones/11_lecc_alegoria_al_cafe_y_al_banano.pdf" src="img/lecciones4/11.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                <a href="data/afiche4/imagenes/11alegoria_al_cafe_y_al_ banano.jpg" target="_blank">Alegoria al café y al banano </a> <br>
              </div>

              <div class="col-sm-2">
                <p class="text-center"></p><br>
                  <img path="data/afiche4/lecciones/12_lecc.pdf" src="img/lecciones4/12.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                <p>Clase mediada por el facilitador</p>
              </div>

              <div class="col-sm-2">
                <p class="text-center"></p><br>
                  <img path="data/afiche4/lecciones/13_lecc.pdf" src="img/lecciones4/13.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                  <p>Visita a la institución cultural</p>
              </div>

              <div class="col-sm-2">
                <p class="text-center"></p><br>
                  <img path="data/afiche4/lecciones/14_lecc_negros_de_limon.pdf" src="img/lecciones4/14.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                <a href="data/afiche4/imagenes/14negros_de_limon.jpg" target="_blank">Negros de Limón</a> <br>
              </div>


              <div class="col-sm-2">
                <p class="text-center"></p><br>
                  <img path="data/afiche4/lecciones/15_lecc_mujer_en_la_ventana.pdf" src="img/lecciones4/15.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                <a href="data/afiche4/imagenes/15mujer_en_la_ventana.jpg" target="_blank">Mujer en la ventana</a> <br>
              </div>
  </div>

<div class="row">

          <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
              <div class="card h-100">
                <img path="data/afiche4/lecciones/16_lecc_tres_musicos.pdf" src="img/lecciones4/grand/16.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                <div class="card-body">
                <a href="data/afiche4/imagenes/16tres_musicos.jpg" target="_blank">Tres Músicos</a> <br>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                  <img path="data/afiche4/lecciones/17_lecc_florete_romo_1.pdf" src="img/lecciones4/grand/17.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                  <div class="card-body">
                    <a href="data/afiche4/imagenes/17florete_romo_1.jpg" target="_blank">Florete Romo 1</a> <br>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
                  <div class="card h-100">
                    <img path="data/afiche4/lecciones/18_lecc-metate_colgante.pdf" src="img/lecciones4/grand/18.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                    <div class="card-body">
                      <a href="data/afiche4/imagenes/18lenguaje_preciso.jpg" target="_blank">Metate colgante</a> <br>
                    </div>
                  </div>
                </div>

</div>

<div class="row">
              <div class="col-sm-2">
                <p class="text-center"></p><br>
                  <img path="data/afiche4/lecciones/19_lecc_composicion_constructiva_16.pdf" src="img/lecciones4/19.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                <a href="data/afiche4/imagenes/19observacion detallada.jpg" target="_blank">Composición constructiva</a> <br>
              </div>

              <div class="col-sm-2">
                <p class="text-center"></p><br>
                  <img path="data/afiche4/lecciones/20_lecc_de_piano.pdf" src="img/lecciones4/20.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                <a href="data/afiche4/imagenes/20multiplesinterpretaciones.jpg" target="_blank">La lección de piano</a> <br>
              </div>

              <div class="col-sm-2">
                <p class="text-center"></p><br>
                  <img path="data/afiche4/lecciones/21_lecc_comparar_y_contrastar.pdf" src="img/lecciones4/21.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                <a href="data/afiche4/imagenes/20multiplesinterpretaciones.jpg" target="_blank">La lección de piano</a> <br>
                <a href="data/afiche4/imagenes/15mujer_en_la_ventana.jpg" target="_blank">Mujer en la ventana</a> <br>
              </div>

              <div class="col-sm-2">
                <p class="text-center"></p><br>
                  <img path="data/afiche4/lecciones/22_lecc_cabeza_y_pescador.pdf" src="img/lecciones4/22.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                <a href="data/afiche4/imagenes/22reiterar,repasaryresumir.jpg" target="_blank">Cabeza y pescador</a> <br>
              </div>


              <div class="col-sm-2">
                <p class="text-center"></p><br>
                  <img path="data/afiche4/lecciones/23_lecc_transferencia_literaria.pdf" src="img/lecciones4/23.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                <p>Analizar un texto del currículum</p>
              </div>

              <div class="col-sm-2">
                <p class="text-center"></p><br>
                <img path="data/afiche4/lecciones/24_lecc_cuentos_de_islita.pdf" src="img/lecciones4/24.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                <a href="data/afiche4/imagenes/24informacioncontextual.jpg" target="_blank">Cuentos de Islita</a> <br>
              </div>
  </div>

  <div class="row">
              <div class="col-sm-2">
                <p class="text-center"></p><br>
                  <img path="data/afiche4/lecciones/25_lecc.pdf" src="img/lecciones4/25.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                <p>Patrimonio arquitectónico</p>
              </div>

              <div class="col-sm-2">
                <p class="text-center"></p><br>
                  <img path="data/afiche4/lecciones/26_lecc.pdf" src="img/lecciones4/26.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                <p>Visita a la institución cultural</p>
              </div>

              <div class="col-sm-2">
                <p class="text-center"></p><br>
                  <img path="data/afiche4/lecciones/27_lecc_luz_tras_mi_enramada.pdf" src="img/lecciones4/27.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                <a href="data/afiche4/imagenes/27desarrollodelvocabulario.jpg" target="_blank">Luz tras mi enamorada</a> <br>
              </div>

              <div class="col-sm-2">
                <p class="text-center"></p><br>
                  <img path="data/afiche4/lecciones/28_lec_la_flecha_roja.pdf" src="img/lecciones4/28.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                <a href="data/afiche4/imagenes/28reflexion.jpg" target="_blank">La flecha roja</a> <br>
              </div>

</div>
</div>



<!-- ********************CARRUSEL DE FOTOS  AFICHE 5********************  -->
<div id="afiche5" class="container text-center">
            <h3 id="col-tituloafic5-1">Piensa en Arte: afiche #5</h3>
                  </div>
            <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel2" data-slide-to="1"></li>
                        <li data-target="#myCarousel2" data-slide-to="2"></li>
                        <li data-target="#myCarousel2" data-slide-to="3"></li>
                        <li data-target="#myCarousel2" data-slide-to="4"></li>
                        <li data-target="#myCarousel2" data-slide-to="5"></li>
                        <li data-target="#myCarousel2" data-slide-to="6"></li>
                        <li data-target="#myCarousel2" data-slide-to="7"></li>
                        <li data-target="#myCarousel2" data-slide-to="8"></li>
                        <li data-target="#myCarousel2" data-slide-to="9"></li>
                        <li data-target="#myCarousel2" data-slide-to="10"></li>
                        <li data-target="#myCarousel2" data-slide-to="11"></li>
                        <li data-target="#myCarousel2" data-slide-to="12"></li>
                        <li data-target="#myCarousel2" data-slide-to="13"></li>
                        <li data-target="#myCarousel2" data-slide-to="14"></li>
                        <li data-target="#myCarousel2" data-slide-to="15"></li>
                        <li data-target="#myCarousel2" data-slide-to="16"></li>
                        <li data-target="#myCarousel2" data-slide-to="17"></li>
                        <li data-target="#myCarousel2" data-slide-to="18"></li>
                        <li data-target="#myCarousel2" data-slide-to="19"></li>
                        <li data-target="#myCarousel2" data-slide-to="20"></li>
                      </ol>

            <!-- imagenes iniciales -->
            <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="img/img_afiche5/afiche5 (1).jpg"  width="1200" height="700">
                  </div>

                  <div class="item">
                    <img src="img/img_afiche5/afiche5 (2).jpg"  width="1200" height="700">
                  </div>


                  <div class="item">
                    <img src="img/img_afiche5/afiche5 (3).jpg"  width="1200" height="700">
                  </div>


                  <div class="item">
                    <img src="img/img_afiche5/afiche5 (5).jpg"  width="1200" height="700">
                  </div>

                  <div class="item">
                    <img src="img/img_afiche5/afiche5 (6).jpg"  width="1200" height="700">
                  </div>

                  <div class="item">
                    <img src="img/img_afiche5/afiche5 (8).jpg"  width="1200" height="700">
                  </div>

                  <div class="item">
                    <img src="img/img_afiche5/afiche5 (9).jpg"  width="1200" height="700">
                  </div>


                  <div class="item">
                    <img src="img/img_afiche5/afiche5 (12).jpg"  width="1200" height="700">
                  </div>

                  <div class="item">
                    <img src="img/img_afiche5/afiche5 (13).jpg"  width="1200" height="700">
                  </div>

                  <div class="item">
                    <img src="img/img_afiche5/afiche5 (14).jpg"  width="1200" height="700">
                  </div>

                  <div class="item">
                    <img src="img/img_afiche5/afiche5 (15).jpg"  width="1200" height="700">
                  </div>

                  <div class="item">
                    <img src="img/img_afiche5/afiche5 (16).jpg"  width="1200" height="700">
                  </div>

                  <div class="item">
                    <img src="img/img_afiche5/afiche5 (17).jpg"  width="1200" height="700">
                  </div>

                  <div class="item">
                    <img src="img/img_afiche5/afiche5 (18).jpg"  width="1200" height="700">
                  </div>

                  <div class="item">
                    <img src="img/img_afiche5/afiche5 (20).jpg"  width="1200" height="700">
                  </div>

                  <div class="item">
                    <img src="img/img_afiche5/afiche5 (22).jpg"  width="1200" height="700">
                  </div>

                  <div class="item">
                    <img src="img/img_afiche5/afiche5 (25).jpg"  width="1200" height="700">
                  </div>

                  <div class="item">
                    <img src="img/img_afiche5/afiche5 (26).jpg"  width="1200" height="700">
                  </div>

            </div>

            <!-- Controles izquierdo y derecho -->
            <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
  </div>
<!-- !**************PDF  AFICHE 5********** -->

<div  class="container text-center">
            <h3 id="col-tituloafic5-2">Lecciones y afiches del segundo año de PeA</h3>

            <div class="row">

                      <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
                          <div class="card h-100">
                            <img path="data/afiche5/lecciones/1_lecc.pdf" src="img/lecciones5/grand/1.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                            <div class="card-body">
                              <a href="data/afiche5/imagenes/1_bananales.jpg" target="_blank"> Bananales </a> <br>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
                            <div class="card h-100">
                              <img path="data/afiche5/lecciones/2_lecc_heroes_de_la_miseria.pdf" src="img/lecciones5/grand/2.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                              <div class="card-body">
                                <a href="data/afiche5/imagenes/2heroes_de_la_miseria.jpg" target="_blank"> Héroes de la miseria </a> <br>
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
                              <div class="card h-100">
                                <img path="data/afiche5/lecciones/3_lecc_presentes.pdf" src="img/lecciones5/grand/3.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                                <div class="card-body">
                                  <a href="data/afiche5/imagenes/3presentes.jpg" target="_blank">Presentes</a> <br>
                                </div>
                              </div>
                            </div>
            </div>


            <div class="row">
                          <div class="col-sm-2">
                            <p class="text-center"></p><br>
                              <img path="data/afiche5/lecciones/4_lecc_transferencia_literaria.pdf" src="img/lecciones5/4.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                            <p> Transferencia literaria</p>
                          </div>

                          <div class="col-sm-2">
                            <p class="text-center"></p><br>
                              <img path="data/afiche5/lecciones/5_lecc_arquetipo.pdf" src="img/lecciones5/5.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                            <a href="data/afiche5/imagenes/5arquetipo.jpg" target="_blank">Arquetipo</a> <br>
                          </div>

                          <div class="col-sm-2">
                            <p class="text-center"></p><br>
                              <img path="data/afiche5/lecciones/6_lecc_muchacha_frente_al_espejo.pdf" src="img/lecciones5/6.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                            <a href="data/afiche5/imagenes/6mujer_en_el_espejo.jpg" target="_blank">La muchacha frente al espejo</a> <br>
                          </div>

                          <div class="col-sm-2">
                            <p class="text-center"></p><br>
                              <img path="data/afiche5/lecciones/7_lecc_comparar_y_contrastar.pdf" src="img/lecciones5/7.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                            <a href="data/afiche5/imagenes/6mujer_en_el_espejo.jpg" target="_blank">La muchacha frente al espejo</a> <br>
                            <a href="data/afiche5/imagenes/5arquetipo.jpg" target="_blank">Arquetipo</a> <br>
                          </div>

                          <div class="col-sm-2">
                            <p class="text-center"></p><br>
                              <img path="data/afiche5/lecciones/8_lecc_sin_titulo.pdf" src="img/lecciones5/8.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                            <a href="data/afiche5/imagenes/8sin_titulo.jpg" target="_blank"> Sin título </a> <br>
                          </div>

                          <div class="col-sm-2">
                            <p class="text-center"></p><br>
                              <img path="data/afiche5/lecciones/9_lecc_ciudad_en_rojo.pdf" src="img/lecciones5/9.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                            <a href="data/afiche5/imagenes/9ciudad_en_rojo.jpg" target="_blank">Ciudad en rojo</a> <br>
                          </div>

            </div>

              <div class="row">

                              <div class="col-sm-2">
                                <p class="text-center"></p><br>
                                  <img path="data/afiche5/lecciones/10_lecc_visita_a_institucion_cultural.pdf" src="img/lecciones5/10.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                                <p> Visita a la institución cultural</p>
                              </div>

                              <div class="col-sm-2">
                                <p class="text-center"></p><br>
                                  <img path="data/afiche5/lecciones/11_y_24_lecc_visita_a_institucion_cultural.pdf" src="img/lecciones5/11.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                                <p>Visita a la institución cultural</p>
                              </div>

                              <div class="col-sm-2">
                                <p class="text-center"></p><br>
                                  <img path="data/afiche5/lecciones/12_lecc_mujer_con_tupos.pdf" src="img/lecciones5/12.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                                <a href="data/afiche5/imagenes/12mujer_con_tupos.jpg" target="_blank">Mujer con Tupos</a> <br>
                              </div>

                            <div class="col-sm-2">
                              <p class="text-center"></p><br>
                                <img path="data/afiche5/lecciones/13_lecc_bosque_nuboso.pdf" src="img/lecciones5/13.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                              <a href="data/afiche5/imagenes/13bosque_nuboso.jpg" target="_blank"> Bosque Nuboso</a> <br>
                            </div>

                            <div class="col-sm-2">
                              <p class="text-center"></p><br>
                                <img path="data/afiche5/lecciones/14_lecc_vigilantes_del_tiempo.pdf" src="img/lecciones5/14.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                              <a href="data/afiche5/imagenes/14vigilantes_del_tiempo.jpg" target="_blank"> Vigilantes del tiempo </a> <br>
                            </div>

                            <div class="col-sm-2">
                              <p class="text-center"></p><br>
                                <img path="data/afiche5/lecciones/15_lecc_montanas.pdf" src="img/lecciones5/15.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                              <a href="data/afiche5/imagenes/15montanas.jpg" target="_blank">Montañas</a> <br>
                            </div>

          </div>

            <div class="row">

                            <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
                                <div class="card h-100">
                                    <img path="data/afiche5/lecciones/16_lecc_la_aldea_y_yo.pdf" src="img/lecciones5/grand/16.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                                  <div class="card-body">
                                  <a href="data/afiche5/imagenes/16la_aldea_y_yo.jpg" target="_blank">La aldea y yo </a> <br>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
                                  <div class="card h-100">
                                    <img path="data/afiche5/lecciones/17_lecc-los_elotes.pdf" src="img/lecciones5/grand/17.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                                    <div class="card-body">
                                      <a href="data/afiche5/imagenes/17los_elotes.jpg" target="_blank">Los elotes</a> <br>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
                                    <div class="card h-100">
                                      <img path="data/afiche5/lecciones/18_lecc_vasijas.pdf" src="img/lecciones5/grand/18.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                                      <div class="card-body">
                                        <a href="data/afiche5/imagenes/18vasijas.jpg" target="_blank">Vasijas</a> <br>
                                      </div>
                                    </div>
                                  </div>
            </div>


            <div class="row">
                            <div class="col-sm-2">
                              <p class="text-center"></p><br>
                                <img path="data/afiche5/lecciones/19_lecc_transferencia_literaria.pdf" src="img/lecciones5/19.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                              <p>Transferencia literaria II</p>
                            </div>

                            <div class="col-sm-2">
                              <p class="text-center"></p><br>
                                <img path="data/afiche5/lecciones/20_lecc_marco_recortado_2.pdf" src="img/lecciones5/20.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                              <a href="data/afiche5/imagenes/20marco_recortado_2.jpg" target="_blank"> Marco Recortado </a> <br>
                            </div>

                            <div class="col-sm-2">
                              <p class="text-center"></p><br>
                                <img path="data/afiche5/lecciones/21_lecc_comparar_y_contrastar.pdf" src="img/lecciones5/21.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                              <a href="data/afiche5/imagenes/20marco_recortado_2.jpg" target="_blank"> Marco Recortado </a> <br>
                              <a href="data/afiche5/imagenes/13bosque_nuboso.jpg" target="_blank"> Bosque Nuboso</a> <br>
                            </div>


                            <div class="col-sm-2">
                              <p class="text-center"></p><br>
                                <img path="data/afiche5/lecciones/22_lecc_un_paseo_por_renault.pdf" src="img/lecciones5/22.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                              <a href="data/afiche5/imagenes/22un_paseo_en_renault.jpg" target="_blank">Un paseo en Renault </a> <br>
                            </div>

                            <div class="col-sm-2">
                              <p class="text-center"></p><br>
                              <img path="data/afiche5/lecciones/23_y_24_importancia_del_museo.pdf" src="img/lecciones5/23.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                              <p></strong>Visita a la institución cultural</p>
                              </div>

                            <div class="col-sm-2">
                              <p class="text-center"></p><br>
                                <img path="data/afiche5/lecciones/25_lecc_la_familia_cosquillitas.pdf" src="img/lecciones5/25.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                              <a href="data/afiche5/imagenes/25la_familia_cosquillita.jpg" target="_blank">La Familia Cosquillitas</a> <br>
                            </div>
            </div>


            <div class="row">

                    <div class="col-sm-2">
                      <p class="text-center"></p><br>
                        <img path="data/afiche5/lecciones/26-lecc_mona_lisa.pdf" src="img/lecciones5/26.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                        <a href="data/afiche5/imagenes/26mona_lisa.jpg" target="_blank"> Mona Lisa </a> <br>
                      </div>

                    <div class="col-sm-2">
                      <p class="text-center"></p><br>
                        <img path="data/afiche5/lecciones/27_lecc_adios_lela.pdf" src="img/lecciones5/27.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                      <a href="data/afiche5/imagenes/27adios_lela.jpg" target="_blank"> Adiós Lela </a> <br>
                    </div>

                    <div class="col-sm-2">
                      <p class="text-center"></p><br>
                        <img path="data/afiche5/lecciones/28_lecc_bestia_con_acrobata.pdf" src="img/lecciones5/28.png" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                      <a href="data/afiche5/imagenes/28bestia_con_acrobata.jpg" target="_blank">Bestia con acróbata</a> <br>
                    </div>

            </div>

</div>

<!-- **************************
****************************
***************************
*****************************
********************* -->

<!-- ********************CARRUSEL DE FOTOS  AFICHE 6********************  -->
<div id="afiche6" class="container text-center">
            <h3 id="col-tituloafic6-1">Piensa en Arte: afiche #6</h3>
                  </div>
            <div id="myCarousel3" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel3" data-slide-to="1"></li>
                        <li data-target="#myCarousel3" data-slide-to="2"></li>
                        <li data-target="#myCarousel3" data-slide-to="3"></li>
                        <li data-target="#myCarousel3" data-slide-to="4"></li>
                        <li data-target="#myCarousel3" data-slide-to="5"></li>
                        <li data-target="#myCarousel3" data-slide-to="6"></li>
                        <li data-target="#myCarousel3" data-slide-to="7"></li>
                        <li data-target="#myCarousel3" data-slide-to="8"></li>
                        <li data-target="#myCarousel3" data-slide-to="9"></li>
                        <li data-target="#myCarousel3" data-slide-to="10"></li>
                        <li data-target="#myCarousel3" data-slide-to="11"></li>
                        <li data-target="#myCarousel3" data-slide-to="12"></li>
                        <li data-target="#myCarousel3" data-slide-to="13"></li>
                        <li data-target="#myCarousel3" data-slide-to="14"></li>
                        </ol>

            <!-- imagenes iniciales -->
            <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="img/img_afiche6/afiche6 (1).jpg"  width="1200" height="700">
                  </div>

                  <div class="item">
                    <img src="img/img_afiche6/afiche6 (2).jpg"  width="1200" height="700">
                  </div>


                  <div class="item">
                    <img src="img/img_afiche6/afiche6 (3).jpg"  width="1200" height="700">
                  </div>


                  <div class="item">
                    <img src="img/img_afiche6/afiche6 (5).jpg"  width="1200" height="700">
                  </div>

                  <div class="item">
                    <img src="img/img_afiche6/afiche6 (6).jpg"  width="1200" height="700">
                  </div>

                  <div class="item">
                    <img src="img/img_afiche6/afiche6 (7).jpg"  width="1200" height="700">
                  </div>

                  <div class="item">
                    <img src="img/img_afiche6/afiche6 (11).jpg"  width="1200" height="700">
                  </div>


                  <div class="item">
                    <img src="img/img_afiche6/afiche6 (12).jpg"  width="1200" height="700">
                  </div>

                  <div class="item">
                    <img src="img/img_afiche6/afiche6 (13).jpg"  width="1200" height="700">
                  </div>

                  <div class="item">
                    <img src="img/img_afiche6/afiche6 (14).jpg"  width="1200" height="700">
                  </div>

                  <div class="item">
                    <img src="img/img_afiche6/afiche6 (15).jpg"  width="1200" height="700">
                  </div>

                  <div class="item">
                    <img src="img/img_afiche6/afiche6 (16).jpg"  width="1200" height="700">
                  </div>

                  <div class="item">
                    <img src="img/img_afiche6/afiche6 (18).jpg"  width="1200" height="700">
                  </div>

                  <div class="item">
                    <img src="img/img_afiche6/afiche6 (19).jpg"  width="1200" height="700">
                  </div>

            </div>

            <!-- Controles izquierdo y derecho -->
            <a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
  </div>

<!-- !**************PDF  AFICHE 6********** -->

<div  class="container text-center">
            <h3 id="col-tituloafic6-2">Lecciones y afiches del tercer año de PeA</h3>

            <div class="row">

                      <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
                          <div class="card h-100">
                            <img path="data/afiche6/lecciones/1_rey_de_talamanca.pdf" src="img/lecciones6/grand/afiche6 (1).jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                            <div class="card-body">
                              <a href="data/afiche6/imagenes/1.rey_talamanca.jpg" target="_blank"> Rey de Talamanca </a> <br>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
                            <div class="card h-100">
                              <img path="data/afiche6/lecciones/2_levitacion.pdf" src="img/lecciones6/grand/afiche6 (2).jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                              <div class="card-body">
                                <a href="data/afiche6/imagenes/2.levitacion.jpg" target="_blank"> Levitación</a> <br>
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
                              <div class="card h-100">
                                <img path="data/afiche6/lecciones/3_paisaje_urbano.pdf" src="img/lecciones6/grand/afiche6 (3).jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                                <div class="card-body">
                                  <a href="data/afiche6/imagenes/3.paisaje_urbano.jpg" target="_blank">Paisaje Urbano</a> <br>
                                </div>
                              </div>
                            </div>
            </div>


            <div class="row">
                          <div class="col-sm-2">
                            <p class="text-center"></p><br>
                            <img path="data/afiche6/lecciones/4_comparar_ y_contrastar.pdf" src="img/lecciones6/afiche6 (4).jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                            <p> Comparar y Contrastar</p>
                          </div>

                          <div class="col-sm-2">
                            <p class="text-center"></p><br>
                            <img path="data/afiche6/lecciones/5_tres_mujeres_caminando.pdf" src="img/lecciones6/afiche6 (5).jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                            <a href="data/afiche6/imagenes/5.tres_mujeres_caminando.jpg" target="_blank">Tres mujeres caminando</a> <br>
                          </div>

                          <div class="col-sm-2">
                            <p class="text-center"></p><br>
                            <img path="data/afiche6/lecciones/6_pantalones_crian_fama.pdf" src="img/lecciones6/afiche6 (6).jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                            <a href="data/afiche6/imagenes/6.pantalones_crian_fama.jpg" target="_blank">Pantalones crían fama</a> <br>
                          </div>

                          <div class="col-sm-2">
                            <p class="text-center"></p><br>
                            <img path="data/afiche6/lecciones/7_genesis_de_costa_rica.pdf" src="img/lecciones6/afiche6 (7).jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                            <a href="data/afiche6/imagenes/7.genesis_de_costa_rica.jpg" target="_blank">Génesis de Costa Rica</a> <br>
                          </div>

                          <div class="col-sm-2">
                            <p class="text-center"></p><br>
                            <img path="data/afiche6/lecciones/8_transferencia_literaria.pdf" src="img/lecciones6/afiche6 (8).jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                            <p>Transferencia Literaria</p>
                          </div>

                          <div class="col-sm-2">
                            <p class="text-center"></p><br>
                            <img path="data/afiche6/lecciones/9_20_patrimonio_arquitectonico.pdf" src="img/lecciones6/afiche6 (9).jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                            <p>Patrimonio Arquitectónico</p>
                          </div>

            </div>

              <div class="row">

                              <div class="col-sm-2">
                                <p class="text-center"></p><br>
                                <img path="data/afiche6/lecciones/10_21_visita_a_una_institucion_cultural.pdf" src="img/lecciones6/afiche6 (10).jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                                <p> Visita a la institución cultural</p>
                              </div>

                              <div class="col-sm-2">
                                <p class="text-center"></p><br>
                                <img path="data/afiche6/lecciones/11_carreta_tipica_costarricense.pdf" src="img/lecciones6/afiche6 (11).jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                                <a href="data/afiche6/imagenes/11.carreta_tipica_costarricense.jpg" target="_blank">Carreta Típica Costarricense</a> <br>
                              </div>

                              <div class="col-sm-2">
                                <p class="text-center"></p><br>
                                <img path="data/afiche6/lecciones/12_yo_soy_tu.pdf" src="img/lecciones6/afiche6 (12).jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                                <a href="data/afiche6/imagenes/12.yo_soy_tu.jpg" target="_blank">Yo soy tú</a> <br>
                              </div>

                            <div class="col-sm-2">
                              <p class="text-center"></p><br>
                              <img path="data/afiche6/lecciones/13_mistico del disparate.pdf" src="img/lecciones6/afiche6 (13).jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                              <a href="data/afiche6/imagenes/13.un_mistico_del_disparate.jpg" target="_blank"> Un místico del disparate </a> <br>
                            </div>

                            <div class="col-sm-2">
                              <p class="text-center"></p><br>
                              <img path="data/afiche6/lecciones/14_leon_al_acecho.pdf" src="img/lecciones6/afiche6 (14).jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                              <a href="data/afiche6/imagenes/14.leon_al_acecho.jpg" target="_blank"> León al acecho </a> <br>
                            </div>

                            <div class="col-sm-2">
                              <p class="text-center"></p><br>
                              <img path="data/afiche6/lecciones/15_yolanda.pdf" src="img/lecciones6/afiche6 (15).jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                              <a href="data/afiche6/imagenes/15.yolanda.jpg" target="_blank">Yolanda</a> <br>
                            </div>

          </div>

            <div class="row">

                            <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
                                <div class="card h-100">
                                  <img path="data/afiche6/lecciones/16_servicios sanitarios.pdf" src="img/lecciones6/afiche6 (16).jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                                  <div class="card-body">
                                  <a href="data/afiche6/imagenes/16.servicios_sanitarios.jpg" target="_blank">Servicios sanitarios</a> <br>
                                  </div>
                                </div>
                              </div>

                              <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
                                  <div class="card h-100">
                                    <img path="data/afiche6/lecciones/17_pantalones_crian_fama.pdf" src="img/lecciones6/afiche6 (17).jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                                    <div class="card-body">
                                      <a href="data/afiche6/imagenes/6.pantalones_crian_fama.jpg" target="_blank">Pantalones crían fama</a> <br>
                                      <a href="data/afiche6/imagenes/15.yolanda.jpg" target="_blank">Yolanda</a> <br>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
                                    <div class="card h-100">
                                      <img path="data/afiche6/lecciones/18_homenaje_a_monsenor_romero.pdf" src="img/lecciones6/afiche6 (18).jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                                      <div class="card-body">
                                        <a href="data/afiche6/imagenes/18.homenaje_monsenor_romero.jpg" target="_blank">Homenaje a Monseñor Romero</a> <br>
                                      </div>
                                    </div>
                                  </div>
            </div>


            <div class="row">
                            <div class="col-sm-2">
                              <p class="text-center"></p><br>
                              <img path="data/afiche6/lecciones/19_mural_del_salon_dorado.pdf" src="img/lecciones6/afiche6 (19).jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                              <a href="data/afiche6/imagenes/19.mural_salon_dorado.jpg" target="_blank"> Mural del Salón Dorado</a> <br>
                            </div>

                            <div class="col-sm-2">
                              <p class="text-center"></p><br>
                              <img path="data/afiche6/lecciones/9_20_patrimonio_arquitectonico.pdf" src="img/lecciones6/afiche6 (20).jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                              <p> Patrimonio Arquitectónico</p>
                            </div>

                            <div class="col-sm-2">
                              <p class="text-center"></p><br>
                              <img path="data/afiche6/lecciones/10_21_visita_a_una_institucion_cultural.pdf" src="img/lecciones6/afiche6 (21).jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                              <p>Visita a una institución cultural</p>
                            </div>

                            <div class="col-sm-2">
                              <p class="text-center"></p><br>
                              <img path="data/afiche6/lecciones/22_reflexion_final.pdf" src="img/lecciones6/afiche6 (22).jpg" class="img-thumbnail person" alt="Random Name" width="255" height="255">
                              <p>Reflexión final </p>
                            </div>
            </div>

</div>




<!-- **************Comission************ -->
<div id="desarrollo" class="container">
        <h3 id="color-desarr" class="text-center">Desarrollo</h3>

        <div class="row">
          <div class="col-md-12">
            <p><span class="glyphicon glyphicon-user"> </span> <strong  class="color-contac"> Evelyn Araya Fonseca: </strong> Asesora nacional, Departamento de Primero y Segundo Ciclos</p>
            <p><span class="glyphicon glyphicon-user"> </span> <strong class="color-contac"> Richard Navarro Garro:</strong> Asesor nacional, Departamento de Primero y Segundo Ciclos</p>
            <p><span class="glyphicon glyphicon-user"> </span> <strong class="color-contac"> Mariana Molina Rojas:</strong> Diseño Gráfico <br></p>
            <p><span class="glyphicon glyphicon-user"> </span> <strong class="color-contac"> Patricia Hernández Conejo:</strong> Producción y publicación<br></p> 
            <p><span class="glyphicon glyphicon-user"> </span> <strong class="color-contac"> Luis Chacón Campos:</strong> Producción y publicación<br></p> 
            <p><span class="glyphicon glyphicon-user"> </span> <strong class="color-contac"> Oscar Pérez Ramírez:</strong> Producción y publicación<br></p> <br>
            <h4 class="color-contac" >Especial agradecimiento</h4>
            <p> Dirección de Desarrollo Curricular, Dirección de Recursos Tecnológicos en Educación, Ministerio de Educación Pública </p>
          </div>
        </div>
</div>

<!-- ***************Contacto y desarrollo************* -->
<div id="contacto" class="container">
        <h3 class="color-contac" class="text-center">Contacto</h3>
            <div class="row">
            <ul class="nav nav-tabs">
            <li ><a data-toggle="tab" href="#home">Asesores MEP</a></li>
            <li class="active"><a data-toggle="tab" href="#menu1">Recursos Tecnológicos Mep</a></li>
          </ul>

          <div class="tab-content">
            <div id="home" class="tab-pane fade" >
              <h2 class="color-contac">Asesores</h2>
              <p><span class="glyphicon glyphicon-user"> </span> Correo: evelyn.araya.fonseca@mep.go.cr </p>
                <p><span class="glyphicon glyphicon-user"> </span> Correo: richard.navarro.garro@mep.go.cr </p>
              <p><span class="glyphicon glyphicon-map-marker"> </span>Edificio Raventós</p>
              <p><span class="glyphicon glyphicon-phone"> </span> Teléfonos: 2221-7685, ext:2562</p>
            </div>

            <div id="menu1" class="tab-pane fade in active">
              <h2 class="color-contac">GESPRO: Gestión y Producción de Recursos Tecnológicos</h2>
              <p  >Patricia Hernández Conejo, <br> Óscar Pérez Ramírez,<br> Luis Chacón Campos.</p> <br>
              <p><span class="glyphicon glyphicon-phone"> </span> Teléfonos: 2258-9655 ext: 4622</p>
              <p><span class="glyphicon glyphicon-envelope"> </span> Correo: gespro@mep.go.cr </p>
            </div>
          </div>
        </div>
</div>

<!-- ************Footer************** -->
<footer class="text-center">
        <a class="up-arrow" href="#Inicio" data-toggle="tooltip" title="TO TOP">
          <span class="glyphicon glyphicon-chevron-up"></span>
        </a><br><br>
        <!-- REvisar enlaces - se pueden quitar -->


        <a href="http://www.mep.go.cr/educatico" target="_blank"> Ministerio de Educación Pública de Costa Rica / Departamento de GESPRO </a> <br>
        <a  href="https://www.w3schools.com/" target="_blank"> Bootstrap Theme Made By </a> <br>
        </footer>

<!-- ***********Modal*********** -->
<div id="modalPlayer" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Visualización</h4>
              </div>
              <div class="modal-body">
                <p  id="contenedorPlayer">

        		</p>
              </div>
            </div>

          </div>
</div>


</body>
</html>
