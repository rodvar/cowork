
<?php

if($_POST["submit"]) {
    $recipient="lautaro.u9125@gmail.com";
    $subject="Nuevo contactos";
    $sender=$_POST["Nombre"];
    $senderEmail=$_POST["email"];
    $message=$_POST["Comentarios"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  .h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;

  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;

  }  
 .h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
 

  }  
  h6 {
      font-size: 50px;
      line-height: 1.375em;
      color: #fff;
      font-weight: 600;
      margin-bottom: 30px;

  }  
  .jumbotron {
      background-color: #F8F9FA;
      color: #fff;
      padding: 200px 200px;
      font-family: Montserrat, sans-serif;
      background-image: url(img/bg-masthead.jpg);
      background-position: center center;
      background-attachment: fixed;
      background-size: cover;
      background-repeat: no-repeat;
      font-size: 20px;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .container-link {
      padding: 60px 50px;

  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #007BFF;
      font-size: 50px;
  }
  .logo {
      color: #007BFF;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #007BFF;
  }
  .carousel-indicators li {
      border-color: #007BFF;
  }
  .carousel-indicators li.active {
      background-color: #007BFF;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin-top: -25px;
 
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #007BFF; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #007BFF;
      background-color: #fff !important;
      color: #007BFF;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #007BFF !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #007BFF;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #F8F9FA;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      font-weight: bold;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #000 !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #fff !important;
      background-color: #007BFF !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #007BFF;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }

/**************************
  DEFAULT BOOTSTRAP STYLES
**************************/

.btn {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
  padding: 10px 16px;
}
  
.btn-lg {
  font-size: 18px;
  line-height: 1.33;
  border-radius: 6px;
}

.btn-primary {
  color: #fff;
  background-color: #428bca;
  border-color: #357ebd;
}

.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary.active,
.open .dropdown-toggle.btn-primary {
  color: #fff;
  background-color: #3276b1;
  border-color: #285e8e;
}

/***********************
  RAISED BUTTONS
************************/
.btn-primary.raised {
    box-shadow: 0 3px 0 0 #007299;
}
.btn-primary.raised:active, .btn-primary.raised.active {
    background: #33a6cc;
    box-shadow: none;
    margin-bottom: -3px;
    margin-top: 3px;
}

/***********************
  CUSTON BTN VALUES
************************/

.btn {
    padding: 14px 24px;
    border: 0 none;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
}
.btn:focus, .btn:active:focus, .btn.active:focus {
    outline: 0 none;
}

.btn-primary {
    background: #0099cc;
    color: #ffffff;
}
.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open > .dropdown-toggle.btn-primary {
    background: #33a6cc;
}

.btn-primary:active, .btn-primary.active {
    background: #007299;
    box-shadow: none;
}


  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#pricing">ESPACIOS</a></li>
        <li><a href="#about">NOSOTROS</a></li>
        <li><a href="#services">SERVICIOS</a></li>
        <li><a href="#portfolio">NUESTROS CLIENTES</a></li>
        <li><a href="#contact">CONTACTO</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h6 style="font-size:3vw">¿Necesitas un lugar para trabajar o estudiar? </br>
   Aquí encontrarás todo lo que necesitas</h6> 
  <!-- <p>¿Necesitas un lugar para trabajar o estudiar? Aquí encontrarás todo lo que necesitas</p> -->

  <a href="#contact"><button type="button" class="btn btn-primary btn-lg">CONTACTANOS</button></a>

</div>


<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Espacios</h2>
    <h4>Lorem ipsum dolor sit amet..</h4>
  </div>
  <div class="row slideanim equal">
   

    <div class="col-sm-3 col-xs-12">
          
    </div> 
    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Busco Espacio</h1>
        </div>
        <div class="panel-body" >
         <img src="img/icono1b.png">
        </div>
        <div class="panel-footer">
          <h3>Puedes elegir entre espacios de coworking, </br>oficinas privadas, salas de reuniones y cafés aptos para trabajar!</h3>
          
          <a href="paginas/portfolio2.html"><button class="btn btn-lg">Ver Más</button></a>
        </div>
      </div>      
    </div>   


    <div class="col-sm-3 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Tengo un Espacio</h1>
        </div>
        <div class="panel-body">
<span class=""><img src="img/icono2b.png" "></span>
        </div>
        <div class="panel-footer" >
          <h3>Tenes espacio ocioso? No esperes más y ponelo a trabajar!</h3>
          
          <button class="btn btn-lg">Contactanos</button>
        </div>
      </div>      
    </div>  
    <div class="col-sm-3 col-xs-12">
           
    </div>   
  </div>
</div>




<!-- Container (About Section) -->

<div id="about" class="container-fluid bg-grey" style="padding-top: 20px;">

<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
 <h2>NOSOTROS</h2>
 <h4>Lorem ipsum dolor sit amet..</h4>
    <div class="carousel-inner" role="listbox">
      


      <div class="item active">

        <div class="col-sm-6" style="padding:80px 50px 50px 300px">
      <div class="h2a"><h2>Ahorra tiempo y dinero</h2><br></div>
      <div class="h4a"> <h4>No más contratos a 2 o 3 años, garantía propietaria, altos costos de ingreso. Utiliza tu dinero solo para hacer crecer tu negocio!</h4><br></div>
    </div>
    <div class="col-sm-4" >
      <span class=""><img src="img/bg-showcase-1.jpg" style='height: 75%; margin-right: -160px; object-fit: contain'"></span>
    </div> 
      </div>


      <div class="item">
<div class="col-sm-6" ; "
      <span class="glyphicon glyphicon-globe logo slideanim"><img src="img/bg-showcase-2.jpg" style='height: 75%; padding-left: 50px; object-fit: contain'"></span>
    </div>
    <div class="col-sm-4" style="padding:80px 50px 50px 50px">
     <div class="h2a"> <h2>Ampliá tu red de contactos</h2><br></div>
     <div class="h4a"> <h4>En Co-Work te podrás conectar con gente en tu misma situación, encuentra colaboradores, clientes, amigos!</h4><br></div>
      
    </div>
      </div>
 

      <div class="item">
       
       <div class="col-sm-6" style="padding:80px 50px 50px 300px">
      <div class="h2a"><h2>Espacios flexibles</h2><br></div>
      <div class="h4a"> <h4>Puedes alquilar por mes, por día y hasta por hora!</h4><br></div>
    </div>
    <div class="col-sm-4" >
      <span class=""><img src="img/bg-showcase-3.jpg" style='height: 75%; margin-right: -160px; object-fit: contain'"></span>
    </div> 
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



    
  </div>
</div>



</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>POWER</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOVE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB DONE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Qué dicen nuestros usuarios</h2><br>
<!-- <h4>What we have created</h4>-->
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/testimonials-1.jpg" alt="Paris" width="400" height="300">
        <p><strong>Laura R.</strong></p>
        <p>"Utilicé el servicio en capital y me pareció excelente. Muy recomendable"</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/testimonials-1.jpg" alt="New York" width="400" height="300">
        <p><strong>Martin S.</strong></p>
        <p>"Co-work reúne todos los espacios posibles de trabajo que </br> uno pueda necesitar. Muy bueno!"</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="img/testimonials-1.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>Fernanda L.</strong></p>
        <p>"Lo uso siempre para encontrar cafés donde trabajar y obtener descuentos exclusivos"</p>
      </div>
    </div>
  </div><br>
  
  
</div>


<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey" style="background-color:#FFFFFF;">
  <h2 class="text-center">CONTACTO</h2>
  <div class="row">
    <div class="col-sm-5" style="padding-left: 100px;">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
    </div>
    <div class="col-sm-5 slideanim">
      <div class="row">
        <form method="post" action="indexprueba.php">
        <div class="col-sm-12 form-group">
          <input class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" type="text" required pattern="[A-Za-z]{1,100}" title="Los datos no son válidos, solo se permiten caracteres de la A a la Z">
        </div>
        <div class="col-sm-12 form-group">
          <input class="form-control" id="Apellido" name="Apellido" placeholder="Apellido" type="text" required pattern="[A-Za-z]{1,100}" title="Los datos no son válido,s solo se permiten caracteres de la A a la Z">
        </div>
        <div class="col-sm-12 form-group">
          <input class="form-control" id="Teléfono" name="Telefono" placeholder="Teléfono" type="text" required pattern="[0-9]{1,20}" title="Solo se admiten números">
        </div>

        <div class="col-sm-12 form-group">
          <input class="form-control" id="Teléfono Alternativo" name="Telefono_Alternativo" placeholder="Teléfono Alternativo" type="text" pattern="[0-9]{1,20}" title="Solo se admiten números">
        </div>

        <div class="col-sm-12 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required pattern="/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/" title="Ingrese una dirección de correo válida">
        </div>
      </div>
      <textarea class="form-control" id="Comentarios" name="Comentarios" placeholder="Comentarios" rows="4" ></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
      </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Add Google Maps -->
<div id="googleMap" style="height:400px;width:100%;"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(41.878114, -87.629798);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Footer</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, .jumbotron a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>