<!DOCTYPE html>
<html>
<head lang="en">
    <title>CENTURY | Contáctenos</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

    <link rel="shortcut icon" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    
    <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>s
    <script type="text/javascript" src="js/menu.js"></script>
	
</head>
<body>
   
   <!-- Menu -->
   <header>
       <div class="logo">
           <center>
               <img src="images/logoinicio.png" width="50%">
           </center>
       </div>
       <div class="navegacion">
           <div class="boton-menu">
               <a href="#"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
           </div>
           <nav>
               <ul class="menu">
                   <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
                   <li><a href="nosotros.php"><span class="glyphicon glyphicon-user"></span> Nosotros</a></li>
                   <li><a href="requerimientos.php"><span class="glyphicon glyphicon-screenshot"></span> Trabaja con Nosotros</a></li>
                   <li><a href="servicios.php"><span class="glyphicon glyphicon-briefcase"></span> Servicios</a></li>
                   <li><a href="javascript:void(0);" style="color: #000;"><span class="glyphicon glyphicon-envelope"></span> Contáctenos</a></li>
               </ul>
           </nav>
       </div>
   </header>
   <!-- Menu Fin -->
    
    <!-- Cuerpo -->
       <div class="contenedor">
           <h1 class="century-h1">CONTÁCTENOS</h1>
           <hr>
           <center><p class="letra-contactenos">Tienes alguna consulta o quieres mayor información de nuestros servicios, escríbenos.</p></center>
           <div class="formulario">
               <form action="mensaje.php" method="POST" onsubmit="return validarC()">
                 <div class="form-group" >
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input type="text" class="form-control" name="nombres" placeholder="*Nombres" pattern="[a-zA-z0-9 ]{5,100}" oninput="validar_nombres(this);" required>
                          <script type="text/javascript">
                              function validar_nombres(input){
                                if (input.validity.patternMismatch){
                                    input.setCustomValidity("Ejemplo: José Perez");
                                }else {
                                    input.setCustomValidity("");
                                }
                              }
                          </script>
                    </div>            
                  </div>
                     
                  <div class="form-group" >
                    <div class="input-group">
                      <div class="input-group-addon"><b>@</b></div>
                      <input type="text" class="form-control" name="correo" placeholder="*Correo" pattern="[a-zA-Z0-9_-]{5,100}@[a-z]{1,20}.[a-z]{1,5}" oninput="validar_correo(this);" required>
                          <script type="text/javascript">
                              function validar_correo(input){
                                if (input.validity.patternMismatch){
                                    input.setCustomValidity("Ejemplo: ejemplo123@century.com");
                                }else {
                                    input.setCustomValidity("");
                                }
                              }
                          </script>
                    </div>                    
                  </div>
                  <div class="form-group" >
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                      <input type="text" class="form-control" name="celular" pattern="[0-9]{9}" placeholder="Celular" maxlength="9" oninput="validar_celular(this);">
                          <script type="text/javascript">
                              function validar_celular(input){
                                if (input.validity.patternMismatch){
                                    input.setCustomValidity("Ejemplo: 987654321");
                                }else {
                                    input.setCustomValidity("");
                                }
                              }
                          </script>
                    </div>                    
                  </div>
                  <div class="form-group" >
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-star"></i></span>
                      <input type="text" class="form-control" name="asunto" placeholder="*Asunto" pattern="[a-zA-Z0-9 ]{5,30}" maxlength="30" oninput="validar_asunto(this);" required>
                          <script type="text/javascript">
                              function validar_asunto(input){
                                if (input.validity.patternMismatch){
                                    input.setCustomValidity("Ejemplo: Mejorar el Servicio");
                                }else {
                                    input.setCustomValidity("");
                                }
                              }
                          </script>
                    </div>                    
                  </div>
                  <div class="form-group" >
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                      <textarea class="form-control" rows="7" name="mensaje" placeholder="*Escribe aquí tu mensaje" pattern="[a-zA-Z0-9 ]{5,300}" maxlength="300" oninput="validar_mensaje(this);" required></textarea>
                          <script type="text/javascript">
                              function validar_mensaje(input){
                                if (input.validity.patternMismatch){
                                    input.setCustomValidity("Ejemplo: Felicitaciones para los vigilantes por el servicio");
                                }else {
                                    input.setCustomValidity("");
                                }
                              }
                          </script>
                    </div>                    
                  </div>
                  <button type="submit" class="btn btn-default" name="enviar"><span class="glyphicon glyphicon-send"> Enviar</span></button>
               </form>
           </div>
       </div>
		<?php require 'pie_pagina.php'; ?>   
    <!-- Cuerpo Fin -->
	
</body>
</html>