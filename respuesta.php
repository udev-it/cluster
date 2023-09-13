<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = test_input($_POST["nombre"]);
  $email = test_input($_POST["email"]);
  $telefono = test_input($_POST["telefono"]);
 
  $comentario = $_POST["comentario"];
  
   $pase = true;
} else {
    
    header('http://ianrodrigo.com/geotext/');
    exit;
    }
 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = test_input($_POST["nombre"]);
  $email = test_input($_POST["email"]);
  $telefono = test_input($_POST["telefono"]);
  $comentario =test_input($_POST["comentario"]);
  
 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nombre"])) {
    $nameErr = "Name is required";
    return false;
  } else {
    $nombre = test_input($_POST["nombre"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$nombre)) {
      $nameErr = "Only letters and white space allowed"; 
      return false;
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Correo es requido";
  return false;
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Forma de coreeo uinvalida"; 
      return false;
    }
  } 

}



if(empty($_POST["comentario"])) {
  $comentarioErr = "El comentario esta vacio";
  return false;
}else {
    $comentario = test_input($_POST["comentario"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $comentario = "Invalid comentario format"; 
      return false;
    }
  } 





  /* $direccion = 'mapacheworld@gmail.com'; */

 
    
    $BodyMail = "<html>";
    $BodyMail.= "<head><title>Contact</title></head>";
    $BodyMail.= "<body bgcolor='#FFFFFF'>";
  
    $BodyMail.= "Coreo forma de contacto <br/><br/>";                                                                                                                    
    $BodyMail.= "Subject: Web Form  <br/>";

    $BodyMail.= "Name: ".$nombre."<br/>";
    $BodyMail.= "Email: ".$email."<br/>";
    $BodyMail.= "Phone: ".$telefono."<br/>";
  
    $BodyMail.= "Message: ".$comentario."<br/><br/>";

    $BodyMail.= "</body></html>";


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

    $headers .= "From: Solicitud de <".$email."> \n";

    $headers .= "Reply-To: ".$email."\n";

    $headers .= "X-Mailer:PHP/".phpversion()."\n"; 

    $headers .= "Return-path: ".$email." \n";

    $headers .= "\r\n";

    
mail($direccion,'Contacto Pagina ::'.$nombre,$BodyMail,$headers);


?>

  <!DOCTYPE html>
  <html lang="es">
  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="Hydrocarbon well logging, mud logging, mud logs, oil industry, gas industry, Geotex Industries, Surface Logging" />
   
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link rel="stylesheet" href="css/carousel.css">
    <script src="https://kit.fontawesome.com/e99553c5a2.js"></script>
    
     
   <!-- <link href="carousel.css" rel="stylesheet">-->
  <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="icon_geo.png">




    <title>GeoText</title>

  </head>
  <body>
  <nav class="navbar navbar-expand-lg  navbar-dark  fixed-top  navbar-custom fondo_barra ">
    <div class="container">
      <a class="navbar-brand" href="#" >
            <img src="imagenes/Logo-Geotex_Surface_Logging.svg" alt="Geotex" width="170px">
          </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
            <!--<span class="navbar-toggler-icon"></span>-->
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">

    
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link " href="index.html" id="home" >Home
                  <span class="sr-only">(current)</span>
                </a>
          </li>
         
            <!--<a class="nav-link" href="#" id="contact" data-toggle="collapse" data-target="#navbarResponsive">Contact</a>-->
          </li>
        </ul>
        </div>
      </div>
    </div>
  </nav>  
   <a name="about"></a>
  <section id="about_us"> 
  <div class="container" style="margin-top: 120px;">
      <div class="row">
     
      <div class="col-md-12 " id="quest1">

         <h2 class="titular">Thank  <span class="titular_ligth">You!</span></h2>
        <?php 

            $nombre = $_POST["nombre"]; 
            $apellido = $_POST["apellido"];
            $correo =  $_POST["email"];
            $comentario = $_POST["comentario"];

echo "<p class='azul_002E5D_texto'> <span style='font-size:2em;'>$nombre</span>, <br>";

echo "Thank you for sending us the email, we will contact you shortly.  </p>"; 

echo "<p class='azul_002E5D_texto'>The email you provided to contact you: <a  href='mailto:$correo'>$correo</a> </p>";
?>
       
               
                
              

     </div>      
    </div>
  </div>
  </section>
  
  

         

      









   

  <section id="our_clients">
  <section id="Our_contact">
    <a name="contact"/>
  <div class="container-fuid ">
        <div class="row">
          <div class="col-md-12  mt-5 text-center">
           <h3><i class="fas fa-map-marker-alt mr-3 fa-lg"></i> <br>20602 Bouganvilla  Blossom  lane. <br> Cypress  Texas 77433</h3>
       </div>
      </div>

    <div class="row">
     <div class="col-12">
       <div class="rounded rounded-lg shadow">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7258033.9567641225!2d-105.91228152126325!3d27.34565982342519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86412abdf8aa1a49%3A0x24b79ee60af4de8b!2s20602%20Bouganvilla%20Blossom%20Ln%2C%20Cypress%2C%20TX%2077433%2C%20USA!5e0!3m2!1sen!2smx!4v1596604346941!5m2!1sen!2smx" width="100%" height="470" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
       </div>
      </div>
    </div>
  </section>



  <!--- inicia  footer -->
  <footer id="myFooter">
          <div class="container">
              <div class="row ">
                <div class="col-md-4 ">
                  <h5>Contact</h5>
                  <ul>
                    <li><i class="fas fa-phone-alt mr-3 fa-lg"></i> Juan Carrera | 832-965-8454</li>
                    <li> <i class="far fa-envelope mr-3 fa-lg"></i></i> <a href="mailto:operations@geotexind.com"></a>operations@geotexind.com</li>
                    <li><i class="fas fa-map-marker-alt mr-3 fa-lg"></i>20602 Bouganvilla  Blossom  lane. <br> Cypress  Texas 77433</li>
                  </ul>
            
                </div>
                <div class="col-md-4"><h5>Pages</h5>
                  <ul>
                    <li id="home1"><a href="#">About us</a></li>
                    <li id="services2"><a href="#">Services</a></li>
                    <li id="team2"><a href="#">Team</a></li>
                    <li id="clients2"><a href="#">Clients</a></li>
                    <li id="contact2"><a href="#">Contact</a></li>
                  </ul>

                </div>
                <div class="col-md-4"><h5>Social media and related sites</h5>
                  <ul><li><a href=""></a><i class="fab fa-linkedin mr-2" ></i>Geotex Surface Logging</li>
                  </ul>
                  <form action="http://geotexind.com/">
                 <button type="submit" class="btn btn btn-primary btn-lg m-2">www.geotexind.com </button>
                  </form>
                  <form action="www.geofieldsinglewell.com">
                  <button type="submit" class="btn btn btn-primary btn-lg m-2">www.geofieldsinglewell.com </button>
                  </form>
              
                </div>
                  
              </div>
          </div>
          <div class="footer-copyright">
              <p>© Geotex Surface logging, 2020. All rights reserved.</p>
          </div>

  <!--termina footer -->






      



  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>



  
  </script>


  </body>
  </html>
