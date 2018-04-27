<!DOCTYPE html>
<html>
<head lang="en">
    <title>CENTURY | Requerimientos</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

    <link rel="shortcut icon" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    
    <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
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
                   <li><a href="javascript:void(0);" style="color: #000;"><span class="glyphicon glyphicon-screenshot"></span> Trabaja con Nosotros</a></li>
                   <li><a href="servicios.php"><span class="glyphicon glyphicon-briefcase"></span> Servicios</a></li>
                   <li><a href="contactenos.php"><span class="glyphicon glyphicon-envelope"></span> Contáctenos</a></li>
               </ul>
           </nav>
       </div>
   </header>
   <!-- Menu Fin -->
    
    <!-- Cuerpo --> 
       <div class="contenedor" style="background: #fff;">
          <h1 class="century-h1">Requisitos para postular a CENTURY S.A.C. </h1>
          <hr class="hr-requerimiento">
          <center>
              <form action="postula.php" method="POST">
                  <button type="submit" class="btn btn-default" name="postula" style="margin: auto;"><span class="glyphicon glyphicon-screenshot"> Postula Aquí</span></button>
              </form>
          </center>
          <div class="requerimiento">
              <span class="glyphicon glyphicon-ok"> Ser peruano de nacimiento.</span><br>
              <span class="glyphicon glyphicon-ok"> Haber cursado el quinto año de instrucción secundaria.</span><br>
              <span class="glyphicon glyphicon-ok"> Ser licenciado de las FF.AA. y/o Civiles, tener experiencia en seguridad.</span><br>
              <span class="glyphicon glyphicon-ok"> Talla mínima 1.70 cm.</span><br>
              <span class="glyphicon glyphicon-ok"> Haber recibido Cursos de Vigilante ante la SUCAMEC.</span><br>
              <span class="glyphicon glyphicon-ok"> Fotos tamaño carnet</span><br>
              <span class="glyphicon glyphicon-ok"> Copias de los documentos personales</span><br>
              <span class="glyphicon glyphicon-ok"> Carta de Honorabilidad (recomendación de por lo menos tres personas de reconocida solvencia moral).</span><br>
              <span class="glyphicon glyphicon-ok"> Certificados de Trabajo.</span>
              <br><br>
              Somos conscientes que uno de los principales activos de nuestra empresa, son las personas. Es por ello que nuestra empresa te brinda una especial atención al proceso de selección y a los programas de formación, orientados a fomentar el desarrollo de las habilidades personales para así desarrollar una carrera profesional dentro de la Empresa a nivel nacional.
			  <br><br>
			  Contamos con un equipo capacitado y especializado con una amplia experiencia en temas de seguridad, los cuales te ayudarán y te acompañaran en el proceso de formación y en cada etapa de crecimiento de tu carrera con nosotros.
          </div>
	      <br><br>
          <center>
            <img class="img-requerimiento" src="images/capacitacion/cap1.PNG"><br>
            <img class="img-requerimiento" src="images/capacitacion/cap2.PNG"><br>
            <img class="img-requerimiento" src="images/capacitacion/cap3.PNG">
          </center>
          <br><br>
          <center>
              <form action="postula.php" method="POST">
                  <button type="submit" class="btn btn-default" name="postula" style="margin: auto;"><span class="glyphicon glyphicon-screenshot"> Postula Aquí</span></button>
              </form>
          </center>
          <br><br>
       </div>
       
       <?php require 'pie_pagina.php'; ?>   
    <!-- Cuerpo Fin -->
	
</body>
</html>