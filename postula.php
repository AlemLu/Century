<!DOCTYPE html>
<html>
<head lang="en">
    <title>CENTURY | Postula</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

    <link rel="shortcut icon" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 
    <script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<script>
	    function justNumbers(e)
            {
            var keynum = window.event ? window.event.keyCode : e.which;
            if ((keynum == 8) || (keynum == 46))
            return true;
             
            return /\d/.test(String.fromCharCode(keynum));
            }
	</script>
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
                   <li><a href="requerimientos.php" style="color: #000;"><span class="glyphicon glyphicon-screenshot"></span> Trabaja con Nosotros</a></li>
                   <li><a href="servicios.php"><span class="glyphicon glyphicon-briefcase"></span> Servicios</a></li>
                   <li><a href="contactenos.php"><span class="glyphicon glyphicon-envelope"></span> Contáctenos</a></li>
               </ul>
           </nav>
       </div>
   </header>
   <!-- Menu Fin -->
           
    <!-- Cuerpo -->
       <div class="contenedor" style="background: #fff;">
           <h1 class="century-h1">Postula para CENTURY S.A.C. </h1>
           <hr class="hr-postula">
           <center><p class="letra-postula">Forma parte de esta familia.</p></center>
           <div class="formulario">
               <form action="enviar.php" method="POST" enctype="multipart/form-data">
                 <div class="form-group" >
                     <div class="input-group img-prev">
                         <input type="text" class="form-control img-prev-filename" name="file-n" disabled="disabled" placeholder="Insertar Curriculum Vitae" required> <!-- don't give a name === doesn't send on POST/GET -->
                         <span class="input-group-btn">
                             <!-- img-prev-clear button -->
                             <button type="button" class="btn btn-default img-prev-clear" style="display:none;">
                                 <span class="glyphicon glyphicon-remove"></span> Limpiar
                             </button>
                             <!-- img-prev-input -->
                             <div class="btn btn-default img-prev-input">
                                <span class="glyphicon glyphicon-folder-open"></span>
                                 <span class="img-prev-input-title">Examinar</span>
                                 <input type="file" accept="application/msword, application/pdf" name="input-file"/> <!-- rename it -->
                             </div>
                         </span>
                     </div>
                  </div>
                  <div class="form-group" >
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-credit-card"></i></span>
                      <input type="text" class="form-control" name="dni" placeholder="DNI" onkeypress="return justNumbers(event);" required >
                    </div>
                  </div>
                  <div class="form-group" >
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <select class="form-control" name="sexo">
                        <option value="">Seleccionar Sexo</option>
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                      </select>
                    </div>                    
                  </div>
                  <div class="form-group" >
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input type="text" class="form-control" name="nombres" placeholder="Nombres" required >
                    </div>                    
                  </div>                  
                  <div class="form-group">
                      <div class="row">
                        <div class="col-sm-6" style="margin-bottom: 10px;">
                           <div class="input-group">
                             <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                             <input type="text" class="form-control" name="apellidop" placeholder="Apellido Paterno" required>
                           </div>                             
                        </div>
                        <div class="col-sm-6" style="margin-bottom: 10px;">
                            <div class="input-group">
                               <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                               <input type="text" class="form-control" name="apellidom" placeholder="Apellido Materno" required >
                             </div> 
                            
                        </div>
                      </div>
                  </div>
                  <div class="form-group" >
                     <div class="input-group image-preview">
                         <input type="text" class="form-control image-preview-filename" name="imagen-n" disabled="disabled" placeholder="Foto del Postulante" required> <!-- don't give a name === doesn't send on POST/GET -->
                         <span class="input-group-btn">
                             <!-- image-preview-clear button -->
                             <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                 <span class="glyphicon glyphicon-remove"></span> Limpiar
                             </button>
                             <!-- image-preview-input -->
                             <div class="btn btn-default image-preview-input">
                                <span class="glyphicon glyphicon-folder-open"></span>
                                 <span class="image-preview-input-title">Examinar</span>
                                 <input type="file" accept="image/png, image/jpeg, image/gif" name="input-img"/> <!-- rename it -->
                             </div>
                         </span>
                     </div>
                  </div>
                  <div class="form-group" >
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-gift"></i></span>
                      <select class="form-control" name="ano" required>
                        <option value="">Año</option>
                        <option value="1998">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                        <option value="1974">1974</option>
                        <option value="1973">1973</option>
                        <option value="1972">1972</option>
                        <option value="1971">1971</option>
                        <option value="1970">1970</option>
                      </select>
                      <select class="form-control" name="mes_n" required>
                        <option value="">Mes</option>
                        <option value="enero">Enero</option>
                        <option value="febrero">Febrero</option>
                        <option value="marzo">Marzo</option>
                        <option value="abril">Abril</option>
                        <option value="mayo">Mayo</option>
                        <option value="junio">Junio</option>
                        <option value="julio">Julio</option>
                        <option value="agosto">Agosto</option>
                        <option value="setiembre">Setiembre</option>
                        <option value="octubre">Octubre</option>
                        <option value="noviembre">Noviembre</option>
                        <option value="diciembre">Diciembre</option>
                      </select>
                      <select class="form-control" name="dia_n" required>
                        <option value="">Día</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                      </select>
                    </div>                    
                  </div>
                  <div class="form-group" >
                    <div class="input-group">
                      <div class="input-group-addon"><b>@</b></div>
                      <input type="text" class="form-control" name="correo" placeholder="Correo" required>
                    </div>                    
                  </div>
                  <div class="form-group" >
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                      <input type="text" class="form-control" name="celular" placeholder="Celular" onkeypress="return justNumbers(event);" required>
                    </div>                    
                  </div>
                  <div class="form-group">
                      <label for="usr">¿Es Peruano de Nacimiento?</label>
                      <br>
                      <label class="radio-inline"><input type="radio" value="SI" name="peruano">Si</label>
                      <label class="radio-inline"><input type="radio" value="NO" name="peruano">No</label>
                  </div>
                  <div class="form-group">
                      <label for="usr">¿Cuenta con 5° Año de Secundaria Completo?</label>
                      <br>
                      <label class="radio-inline"><input type="radio" value="SI" name="secundaria">Si</label>
                      <label class="radio-inline"><input type="radio" value="NO" name="secundaria">No</label>
                  </div>
                  <div class="form-group">
                      <label for="usr">¿Cuenta con Experencia en Seguridad?</label>
                      <br>
                      <label class="radio-inline"><input type="radio" value="SI" name="experiencia">Si</label>
                      <label class="radio-inline"><input type="radio" value="NO" name="experiencia">No</label>
                  </div>
                  <div class="form-group">
                      <label for="usr">¿Ha recibido cursos ante la SUCAMEC?</label>
                      <br>
                      <label class="radio-inline"><input type="radio" value="SI" name="sucamec">Si</label>
                      <label class="radio-inline"><input type="radio" value="NO" name="sucamec">No</label>
                  </div>
                  <div class="form-group">
                      <label for="usr">¿Tiene Certificados de Trabajo?</label>
                      <br>
                      <label class="radio-inline"><input type="radio" value="SI" name="certificados">Si</label>
                      <label class="radio-inline"><input type="radio" value="NO" name="certificados">No</label>
                  </div>
                  <button type="submit" class="btn btn-default" name="postular"><span class="glyphicon glyphicon-send"> Postular</span></button>
               </form>
           </div>
       </div>
       <?php require 'pie_pagina.php'; ?>   
    <!-- Cuerpo Fin -->
    <script type="text/javascript" src="js/subir-imagen.js"></script>
    <script type="text/javascript" src="js/subir-archivo.js"></script>
</body>
</html>