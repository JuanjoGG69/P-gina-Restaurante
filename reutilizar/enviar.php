<?php

if(isset($_POST['enviar'])){
    if(!empty($_POST['mail']) && !empty($_POST['asunto'] && !empty($_POST['mensaje']))){
        $mail = $_POST['mail'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];
        $para = "asmongamer11@gmail.com";
        $header = "FROM: noreply@example.com" . "\r\n";
        $header .= "Reply-To: noreply@example.com" . "\r\n";
        $header .= "X-Mailer: PHP/" . phpversion(); 

       $envio = mail($para, $asunto, $mensaje, $header);

       if($envio){
        echo "<h4> Mail enivado</h4>";
       }
       else{
        echo "<h4> UPS, hubo un problema</h4>";
       }
    }

}