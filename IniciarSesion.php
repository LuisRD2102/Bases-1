<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>UCAB Continental - Registrarse</title>
  <?php
        include('control.php');
  ?>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Licorice&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/34fd9ed5f9.js" crossorigin="anonymous"></script>
</head>
<body>

<section class="header">
        
        <nav class = "navReg">
            <a href="index.html"><img src="img/logo2.png" ></a>
            <div class="nav-links">
               
            <ul>
                <li><a href="http://127.0.0.1:5500/index.html">INICIO</a></li>
                <li><a href="">SERVICIOS</a></li>
                <li><a href="">NOSOTROS</a></li>
                <li><a href="">CONTACTANOS</a></li>
                <li><a href="http://localhost/Proyecto%20BD/IniciarSesion.php">INICIAR SESION</a></li>
            </ul>
            </div>
            
        </nav>

    <div class="signupFrm">
    <div class="wrapper">
    <form class="form-LogIn" method="post">
      <h1 class="title">Iniciar Sesión</h1>

      <div class="inputContainer">
        <input type="text" class="input" placeholder="a" name="usuario">
        <label for="" class="label">Usuario</label>
      </div>

      <div class="inputContainer">
        <input type="password" class="input" placeholder="a" name="pw">
        <label for="" class="label">Contraseña</label>
      </div>

      <input type="submit" class="submitBtnLI" value="Iniciar sesión" >
    </form>
    
    </div>

    <?php 
        if (conectar()){
            if (isset($_POST["usuario"],$_POST["pw"]) && !empty($_POST["usuario"]) && !empty($_POST["pw"])) {
                buscar($_POST["usuario"],$_POST["pw"]);
                ?>
                <script type="text/javascript">
                  window.location = "http://127.0.0.1:5500/generarPolizas.html";
                </script> 
                 <?php

            }
        }
    ?>

</section>





  </div>
  
  <section class="footer">
    <h4>Acerca de nosotros</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint nisi voluptatum, eveniet a praesentium delectus<br>incidunt illum vero cumque, hic ab error iste earum iusto ea molestiae adipisci totam distinctio?</p>
    <div class="icons">
        <i class="fab fa-facebook"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-linkedin"></i>
    </div>
    
  </section>
 



</body>
</html>