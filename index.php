<?php
session_start();

if (isset($_SESSION["user"])) {
   header("Location: usuarios.php");
}
date_default_timezone_get();
?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Hostal - La Salut</title>
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
          
      <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
      <script src="js/ajax.js"></script>
      <link type="text/css" rel="stylesheet" href="css/style.css" />
   </head>
   <body>
      <div class="modal fade" id="popUpWindow">
         <div class="modal-dialog">
            <div class="modal-content">
               <!-- header -->
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h3 class="modal-title">Formulario de login</h3>
               </div>
               <!-- body -->
               <div class="modal-header">
                  <form role="form" method="POST">
                     <div class="form-group">
                        <input type="text" class="form-control" id="user" name="user" placeholder="Usuario"/><br>
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña" />
                     </div>
                  </form>
               </div>
               <!-- footer -->
               <div class="modal-footer">
                  <button name="login" id="login" class="btn btn-primary btn-block">Log In</button>
                  <span id="result"></span>
               </div>
            </div>
         </div>
      </div>
      <div id="booking" class="section">
         <nav class="navbar navbar-inverse">
            <div class="container-fluid">
               <div class="navbar-header">
                  <a class="navbar-brand" href="#">
                     <span style="color: white">Hostal La Salut</span>
                     <!--<img src="img/hostal-inicio.png" id="hostal-inicio" alt="Hostal La Salut">-->
                  </a>
               </div>
               <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Inicio</a></li>
                  <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pisos<span class="caret"></span></a>
                     <ul class="dropdown-menu">
                        <li><a href="#piso1">Piso 1</a></li>
                        <li><a href="#piso2">Piso 2</a></li>
                        <li><a href="#piso3">Piso 3</a></li>
                     </ul>
                  </li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="#" data-toggle="modal2" data-target="#popUpMsg"><span class="glyphicon glyphicon-phone"></span> +34 607 05 18 98</a></li>
                  <li><a href="#" data-toggle="modal" data-target="#popUpWindow"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
               </ul>
            </div>
         </nav>
         <div class="section-center">
            <div class="container">
               <div class="row">
                  <div class="col-md-7 col-md-push-5">
                     <div class="booking-cta">
                        <h1>Haz tu reserva</h1>
                        <p>En Hostal La Salut podrás disfrutar de una estancia tranquila en Badalona</p>
                     </div>
                  </div>
                  <div class="col-md-4 col-md-pull-7">
                     <div class="booking-form">
                        <form>
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <span class="form-label">Fecha de inicio</span>
                                    <input class="form-control" type="date" required>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="form-group">
                                    <span class="form-label">Fecha final</span>
                                    <input class="form-control" type="date" required>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <span class="form-label">Habitaciones</span>
                                    <select class="form-control">
                                       <option>1</option>
                                       <option>2</option>
                                       <option>3</option>
                                       <option>4</option>
                                       <option>5</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <span class="form-label">Adultos</span>
                                    <select class="form-control">
                                       <option>1</option>
                                       <option>2</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                 </div>
                              </div>
                              <div class="col-sm-4">
                                 <div class="form-group">
                                    <span class="form-label">Niños</span>
                                    <select class="form-control">
                                       <option>0</option>
                                       <option>1</option>
                                       <option>2</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                 </div>
                              </div>
                           </div>
                           <div class="form-btn">
                              <button class="submit-btn">Buscar resultados</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="section-center">
         <div class="container">
            <div class="row">
               <div class="pisos">
                  <h1 id="piso1">Piso 1</h1>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2 col-md-offset-1">
                  <div class="price">
                     <p style="text-align: center">20€/noche</p>
                  </div>
                  <img  class="imagenes" src="images/img/img1.png">
                  <div class="text-left">
                     <p class="lilFont">Habitación individual</p>
                     <p class="lilFont">Estado: <span style="color: green">Disponible</span></p>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="price">
                     <p style="text-align: center">20€/noche</p>
                  </div>
                  <img  class="imagenes" src="images/img/img1.png">
                  <div class="text-left">
                     <p class="lilFont">Habitación individual</p>
                     <p class="lilFont">Estado: <span style="color: green">Disponible</span></p>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="price">
                     <p style="text-align: center">20€/noche</p>
                  </div>
                  <img  class="imagenes" src="images/img/img1.png">
                  <div class="text-left">
                     <p class="lilFont">Habitación individual</p>
                     <p class="lilFont">Estado: <span style="color: green">Disponible</span></p>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="price">
                     <p style="text-align: center">20€/noche</p>
                  </div>
                  <img  class="imagenes" src="images/img/img1.png">
                  <div class="text-left">
                     <p class="lilFont">Habitación individual</p>
                     <p class="lilFont">Estado: <span style="color: green">Disponible</span></p>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="price">
                     <p style="text-align: center">20€/noche</p>
                  </div>
                  <img  class="imagenes" src="images/img/img1.png">
                  <div class="text-left">
                     <p class="lilFont">Habitación individual</p>
                     <p class="lilFont">Estado: <span style="color: green">Disponible</span></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <legend></legend>
      </div>
      <div class="section-center">
         <div class="container">
            <div class="row">
               <div class="pisos">
                  <h1 id="piso2">Piso 2</h1>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2 col-md-offset-1">
                  <div class="price">
                     <p style="text-align: center">20€/noche</p>
                  </div>
                  <img  class="imagenes" src="images/img/img1.png">
                  <div class="text-left">
                     <p class="lilFont">Habitación individual</p>
                     <p class="lilFont">Estado: <span style="color: green">Disponible</span></p>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="price">
                     <p style="text-align: center">20€/noche</p>
                  </div>
                  <img  class="imagenes" src="images/img/img1.png">
                  <div class="text-left">
                     <p class="lilFont">Habitación individual</p>
                     <p class="lilFont">Estado: <span style="color: green">Disponible</span></p>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="price">
                     <p style="text-align: center">20€/noche</p>
                  </div>
                  <img  class="imagenes" src="images/img/img1.png">
                  <div class="text-left">
                     <p class="lilFont">Habitación individual</p>
                     <p class="lilFont">Estado: <span style="color: green">Disponible</span></p>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="price">
                     <p style="text-align: center">20€/noche</p>
                  </div>
                  <img  class="imagenes" src="images/img/img1.png">
                  <div class="text-left">
                     <p class="lilFont">Habitación individual</p>
                     <p class="lilFont">Estado: <span style="color: green">Disponible</span></p>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="price">
                     <p style="text-align: center">20€/noche</p>
                  </div>
                  <img  class="imagenes" src="images/img/img1.png">
                  <div class="text-left">
                     <p class="lilFont">Habitación individual</p>
                     <p class="lilFont">Estado: <span style="color: green">Disponible</span></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <legend></legend>
      </div>
      <div class="section-center">
         <div class="container">
            <div class="row">
               <div class="pisos">
                  <h1 id="piso3">Piso 3</h1>
               </div>
            </div>
            <div class="row">
               <div class="col-md-2 col-md-offset-1">
                  <div class="price">
                     <p style="text-align: center">20€/noche</p>
                  </div>
                  <img  class="imagenes" src="images/img/img1.png">
                  <div class="text-left">
                     <p class="lilFont">Habitación individual</p>
                     <p class="lilFont">Estado: <span style="color: green">Disponible</span></p>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="price">
                     <p style="text-align: center">20€/noche</p>
                  </div>
                  <img  class="imagenes" src="images/img/img1.png">
                  <div class="text-left">
                     <p class="lilFont">Habitación individual</p>
                     <p class="lilFont">Estado: <span style="color: green">Disponible</span></p>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="price">
                     <p style="text-align: center">20€/noche</p>
                  </div>
                  <img  class="imagenes" src="images/img/img1.png">
                  <div class="text-left">
                     <p class="lilFont">Habitación individual</p>
                     <p class="lilFont">Estado: <span style="color: green">Disponible</span></p>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="price">
                     <p style="text-align: center">20€/noche</p>
                  </div>
                  <img  class="imagenes" src="images/img/img1.png">
                  <div class="text-left">
                     <p class="lilFont">Habitación individual</p>
                     <p class="lilFont">Estado: <span style="color: green">Disponible</span></p>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="price">
                     <p style="text-align: center">20€/noche</p>
                  </div>
                  <img  class="imagenes" src="images/img/img1.png">
                  <div class="text-left">
                     <p class="lilFont">Habitación individual</p>
                     <p class="lilFont">Estado: <span style="color: green">Disponible</span></p>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <legend></legend>
         </div>
         <div>
            <!-- aki twitter -->
         </div>
         <div class="container">
          <form class="well form-horizontal" action="../actions/contacto.php" method="post" id="contact_form">
               <fieldset>
                  <span style="text-align: center">
                     <div class="section-center">
                       <h3> Envíanos tus dudas</h3>
                     </div>
                  </span>
                  <div class="form-group">
                     <label class="col-md-4 control-label">Nombre</label>  
                     <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                           <input id="name" name="name" placeholder="Nombre" class="form-control"  type="text">
                        </div>
                     </div>
                  </div>
                  <!-- Text input-->
                  <div class="form-group">
                     <label class="col-md-4 control-label">Email</label>  
                     <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                           <input id="email" name="email" placeholder="E-Mail" class="form-control"  type="text">
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-md-4 control-label">Asunto</label>  
                     <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span>
                           <textarea id="textarea" name="textarea" class="form-control" placeholder="Escribe tu duda"></textarea>
                        </div>
                     </div>
                  </div>
                     <div class="alert alert-success" role="alert" id="success_message">Correcto <i class="glyphicon glyphicon-thumbs-up"></i> Se ha enviado sin problemas el mensaje.</div>
                  <div class="form-group">
                     <label class="col-md-4 control-label"></label>
                     <div class="col-md-4">
                        <button id="llamarContacto" class="btn btn-warning">Enviar <span class="glyphicon glyphicon-send"></span></button>
                     </div>
                  </div>
               </fieldset>
            </form>
         </div>
      </div>
      <div class="container">
         <legend></legend>
      </div>
      <div class="section-center">
         <div class="container">
            <div class="pisos">
               <h1 id="piso3">Cómo contactarnos</h1>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="textito">
                     <ul class="list-unstyled">
                        <li>
                           <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Higiénico
                        </li>
                        <li>
                           <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Huespedes amigables
                        </li>
                        <li>
                           <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Económico
                        </li>
                     </ul>
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d747.6764937471128!2d2.22161592921639!3d41.44560109870367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4bc9dc366e11b%3A0xac678b092368ef97!2sCarrer+de+V%C3%ADctor+Balaguer%2C+23%2C+08914+Santa+Coloma+de+Gramenet%2C+Barcelona!5e0!3m2!1ses!2ses!4v1557937144762!5m2!1ses!2ses" width="300" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
               </div>
               <div class="col-md-4 left">
                  <ul class="list-unstyled">
                     <li>
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Cerca del mercado La Salut
                     </li>
                     <li>
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> A 5 minutos del metro
                     </li>
                     <li>
                        <span style="color: black;font-weight: bold; text-align: center;"> Distancia entre la boca de metro</span><br>
                        <img src="images/img/distancia.png" alt="Distancia Hostal y boca de metro" width="300" height="250">
                     </li>
                  </ul>
               </div>
               <div class="col-md-4">
                  <ul class="list-unstyled">
                     <li>
                        <span class="glyphicon glyphicon-phone" aria-hidden="true"></span> +34 607 05 18 98
                     </li>
                     <li>
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> contactolasalut@gmail.com
                     </li>
                     <li>
                        <span style="color: black"> C/ Victor Balaguer, 23 Ático</span>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="footer-copyright text-center py-3">© 2019 Copyright: Joel Suárez</div>
   </body>
</html>