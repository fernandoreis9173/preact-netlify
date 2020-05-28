<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'class/PHPMailer-master/src/Exception.php';
require 'class/PHPMailer-master/src/PHPMailer.php';
require 'class/PHPMailer-master/src/SMTP.php';



if($_SERVER['HTTP_REFERER']==="http://localhost:8080/contact"){

    $name = isset($_GET['name']) ? $_GET['name'] : null;
    $email = isset($_GET['sendto']) ? $_GET['sendto'] : null;
    $message = isset($_GET['message']) ? $_GET['message'] : null;

    if($name && $email && $message){
        require 'vendor/autoload.php'

        $mail = new PHPMailer (true);

        die("teste");

        Try{
            //Server settings                    // Enable verbose debug output
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp@gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'fernandoreis9173@gmail.com';                     // SMTP username
            $mail->Password   = 'Fr36456009';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                  // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        
            
            //Recipients
            $mail->setFrom('fernandoreis9173@gmail.com');
            $mail->addAddress($emailUser);     // Add a recipient
            
        
        tional name
        
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Contato do blog';
            $mail->Body    = 'Name:' . $name . '<br />
                              Email: ' . $email . '<br />
                              <b>Mensagem:</b> ' . $message;
        
            $mail->send();
            echo 'mensagem enviada com sucesso';
    } catch (Exception $e){
        echo "mensagem não enviada. Mailer Error: {$mail->ErrorInfo}";
        }
    }else{
        echo "all the fields are required!";
    }
}else{
    echo "you can't use this server";
}

?>

    

   