<?php
//require './vendor/autoload.php';
//use PHPMailer\PHPMailer\PHPMailer;
//Create a new PHPMailer instance
//$mail = new PHPMailer();
//$mail->IsSMTP();
   //reset variable to null.
   $name = $email  = $message = $to = $headers = $msjEmail = NULL;

   if (isset($_POST['submit'])) {
      //get data from form
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];   
      $message = $_POST['message'];
      $to = 'wellin12.jr0497c@gmail.com';

      //headers
      $headers = 'From: Your name <info@address.com>' . "\r\n";
      $headers .= "Content-type: text/html; charset=utf-8";

      //body email.
      $msjEmail = "Nombre: " . $name;
      $msjEmail .= "\r\n";
      $msjEmail .= "Email: " . $email;
      $msjEmail .= "\r\n";
      $msjEmail .= "Telefono: " . $phone;
      $msjEmail .= "\r\n";
      $msjEmail .= "Mensaje: " . $message;
      $msjEmail .= "\r\n";
        //conditon before sent message
    if (mail($to, $message, $msjEmail, $headers)) {
         echo "okkkkk";
    } else {
         echo "error";
    }
  }
?>