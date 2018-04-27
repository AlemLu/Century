<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Formulario</title> <!-- Aquí va el título de la página -->

</head>

<body>
<?php
$DNI = $_POST['dni'];
$Sexo = $_POST['sexo'];
$Nombres = $_POST['nombres'];
$Apellidop = $_POST['apellidop'];
$Apellidom = $_POST['apellidom'];
$Ano = $_POST['ano'];
$Mes = $_POST['mes_n'];
$Dia = $_POST['dia_n'];
$Email = $_POST['correo'];
$Celular = $_POST['celular'];
$LugarNacimiento = $_POST['peruano'];
$Secundaria = $_POST['secundaria'];
$Experiencia = $_POST['experiencia'];
$sucamec = $_POST['sucamec'];
$Certificado = $_POST['certificados'];
$CV = $_FILES['input-file'];
$IMG = $_FILES['input-img'];


//$archivo = $_FILES['adjunto'];

if ($DNI=='' ||$Sexo=='' ||$Nombres=='' ||$Apellidop=='' ||$Apellidom=='' ||$Ano=='' || $Mes=='' || $Dia==''|| $Email==''|| $Celular==''|| $LugarNacimiento==''|| $Secundaria==''|| $Experiencia==''|| $sucamec==''|| $Certificado==''){

echo "<script>alert('Los campos marcados con * son obligatorios');location.href ='javascript:history.back()';</script>";

}else{


    require("archivosformulario/class.phpmailer.php");
    $mail = new PHPMailer();

    $mail->From     = $Email;
    $mail->FromName = $Nombres; 
    $mail->AddAddress("cesarsolanorobles@gmail.com"); // Dirección a la que llegaran los mensajes.
   
// Aquí van los datos que apareceran en el correo que reciba
    //adjuntamos un archivo 
        //adjuntamos un archivo
            
    $mail->WordWrap = 50; 
    $mail->IsHTML(true);     
    $mail->Subject  =  "Postulante via web";
    $mail->Body     =  "DNI: $DNI \n<br />".    
    "Sexo: $Sexo \n<br />".    
    "Nombres: $Nombres \n<br />".
	"Apellido Materno: $Apellidop \n<br />".
	"Apellido Paterno: $Apellidom \n<br />".
	"Año: $Ano \n<br />".
	"Mes: $Mes \n<br />".
	"Día: $Dia \n<br />".
	"Email: $Email \n<br />".
	"Celular: $Celular \n<br />".
	"¿Es Peruano de Nacimiento?: $LugarNacimiento \n<br />".
	"¿Cuenta con 5° Año de Secundaria Completo?: $Secundaria \n<br />".
	"¿Cuenta con Experencia en Seguridad?: $Experiencia \n<br />".
	"¿Ha recibido cursos ante la SUCAMEC?: $sucamec \n<br />".
	"¿Tiene Certificados de Trabajo?: $Certificado \n<br />";
    $mail->AddAttachment($CV['tmp_name'], $CV['name']);
	$mail->AddAttachment($IMG['tmp_name'], $IMG['name']);
    
    
    

// Datos del servidor SMTP

    $mail->IsSMTP(); 
    $mail->Host = "ssl://smtp.gmail.com:465";  // Servidor de Salida.
    $mail->SMTPAuth = true; 
    $mail->Username = "cesarsolanorobles@gmail.com";  // Correo Electrónico
    $mail->Password = "solano12"; // Contraseña
    
    if ($mail->Send())
    echo "<script>alert('Formulario enviado exitosamente, le responderemos lo más pronto posible.');location.href ='gracias.php';</script>";
    else
    echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";

}

?>

</body>
</html>