<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
$mail = new PHPMailer(true);

if (isset($_POST['email'])){
    $email = $_POST['email'];
}
if (isset($_POST['message'])){
    $message = $_POST['message'];
}

try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.example.com';                     
    $mail->SMTPAuth   =  true;                                   
    $mail->Username   = '6a13ib@gmail.com';                     
    $mail->Password   = 'Qz&S8R%8LZGQ%FwZN7uK4*CjDJ';                               
    $mail->SMTPSecure =  PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       =  465;                                    
    $mail->setFrom($email, 'Mailer');
    $mail->isHTML(true);                                 
    $mail->Subject = 'Contact from portfoliosite';
    $mail->Body    = $message;
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Thanks for you message! - Niels Baptist</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/waves.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <img src="./img/top3.svg" id="top" alt="top wave">
    <div class="backWhite">
        <div class="parent">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="h2">Thanks for your message! I will get back to you as soon as possible.</p> 
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12 m-auto">
                        <a class="btn btn-info p-2 w-50" href="index.html">
                            <i class="fab fa-home"> Back to the start page.</i>
                        </a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12 m-auto">
                        <a class="btn btn-info p-2 w-50" href="https://www.linkedin.com/in/nielsbaptist/" target="blank">
                            <i class="fab fa-linkedin-in blue bold"> Let's connect!</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="./img/bottom1.svg" class="rotate" alt="Bottom Wave">
</body>
</html>