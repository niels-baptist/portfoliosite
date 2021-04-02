<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Niels Baptist">
    <meta name="description" content="Hi! I'm Niels Baptist, an AI student at the Thomas More IT Factory, check out more about me on my website.">
    <title>Portfolio - Niels Baptist</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>
<body>

  <!-- banner -->
    <div class="container banner">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <img id="profilepic" class="m-auto d-block w-100 rounded-circle p-lg-5 p-md-1 p-sm-5 mt-md-5 mt-lg-0" src="./img/profilepic.jpg" alt="Picture of Niels">
        </div>
        <div class="col-sm-12 col-md-8">
          <h1 class="p-5 p-sm-2">Hi! I'm <span class="text-info">Niels Baptist</span>
            <h2 class="text-secondary pl-2"> This is my portfolio</h2>
            <br>
            <div class="d-block m-auto" id="google_translate_element"></div>
          </h1>
        </div>
      </div>
    </div>

    <!-- nav pills -->
    <div class="container mt-2 mb-2">
        <div class="row navigation text-center rounded">
          <div class="col-sm-12 col-md-6 col-lg-3">
            <a href="index.html" class="btn"><i class="fas fa-backward"></i> Back to start</i></a>
         </div>
        </div>
    </div>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require './vendor/autoload.php';
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = 0;                      
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   =  true;                                 
        $mail->Username   = '6a13ib@gmail.com';                    
        $mail->Password   = '$3fhz@tVcH2J##oV!R8wxU%ZHigL';                           
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
        $mail->Port       = 587;                                  

        //Recipients
        $mail->setFrom('6a13ib@gmail.com', 'Portfolio contact');
        $mail->addAddress('nielsbaptist01@gmail.com', 'sinners portfolio contact'); 

        //Content
        $mail->isHTML(true);
        $firstname = $_GET['firstname'];
        $surname = $_GET['surname'];
        $email = $_GET['mail'];
        $message = $_GET['message'];
        if(!is_null($firstname && !is_null($surname) && !is_null($firstname) && !is_null($message))){
          $mail->Subject = 'Contact from ' . $firstname . ' ' . $surname;
          $mail->Body    = 'Naam: ' . $firstname . ' ' . $surname . '</br>' . 'Boodschap: ' .  $message;
          $mail->send();
          echo '<div class="container">';
              echo '<div class="row">';
                  echo '<div class="col-12">';
                      echo '<p class="alert alert-info">Thanks for your message! I will get back to you as soon as possible.</p>';
                  echo '</div>';
              echo '</div>';
          echo '</div>';
         } 
         else{
          echo '<p class="alert alert-danger">Whoops! Seems like something went wrong, your message did not come thru. I will try my best to fix this as soon as possible!</p>';

         }
        }
        catch (Exception $e){
            echo '<p class="alert alert-danger">Whoops! Seems like something went wrong, your message did not come thru. I will try my best to fix this as soon as possible!</p>';
        }
    ?>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- footer -->
    <footer class="footer" width="100%">
      <svg class="w-100" viewBox="0 -20 700 100" width="100%" height="110" preserveAspectRatio="none">
        <path transform="translate(0, -20)" d="M0,10 c80,-22 240,0 350,18 c90,17 260,7.5 350,-20 v50 h-700" fill="#e6bc53" />
        <path d="M0,10 c80,-18 230,-12 350,7 c80,13 260,17 350,-5 v100 h-700z" fill="#17a2b8" />
      </svg>
    </footer>

    <script type="text/javascript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
      }
    </script>  
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <script src="./app.js"></script>
  </body>
</html>