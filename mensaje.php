<?php
    $destino = "lordonezg1@upao.edu.pe";
    $nombres = $_POST['nombres'];
    $correo = $_POST['correo'];
    $celular = "No hay Celular";
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    if(isset($_POST['celular'])){
        $celular = $_POST['celular'];
    }

    $contenido = "Nombres: ".$nombres.
                 "\nCorreo: ".$correo.
                 "\nCelular: ".$celular.
                 "\nMensaje: ".$mensaje;

    mail($destino,$asunto,$contenido);
    
    header("Location:gracias.php");
?>