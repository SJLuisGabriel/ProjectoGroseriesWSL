<?php
   include("recursos/class.phpmailer.php");
   include("recursos/class.smtp.php");

   $mail = new PHPMailer();

   $mail -> IsSMTP();

   $mail -> Host = "smtp.gmail.com";
   $mail -> SMTPSecure = 'ssl';
   $mail -> Port = 465;     
   $mail -> SMTPDebug  = 0; 
   $mail -> SMTPAuth = true; 

   $mail -> Username = "19031333@itcelaya.edu.mx"; 
   $mail -> Password = "swobwxshfyekdosa";  
      
   $mail -> From = "";
   $mail -> FromName = "";
   $mail -> Subject = "Mensaje Recibido";
   $mail -> MsgHTML("Mensaje Nuevo");
   $mail -> AddAddress("19031333@itcelaya.edu.mx");
   //$mail->AddAddress("admin@admin.com");

   if ( !$mail -> Send()) 
         echo  "Error: ".$mail->ErrorInfo;

?>