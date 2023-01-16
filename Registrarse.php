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

<section class="headerReg">
        
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
  
    <form class="form" method="post">
      <h1 class="title">Crear Cuenta</h1>

      <div class="column">

           <div class="left">
            
          <div class="inputContainer">
            <input type="text" class="input" placeholder="a" name="usuario">
            <label for="" class="label">Usuario</label>
          </div>

          <div class="inputContainer">
            <input type="email" class="input" placeholder="a" name="email">
            <label for="" class="label">Email</label>
          </div>

          <div class="inputContainer">
            <input type="password" class="input" placeholder="a" name="pw">
            <label for="" class="label">Contraseña</label>
          </div>

          <div class="inputContainer">
            <input type="password" class="input" placeholder="a" name="pw2">
            <label for="" class="label">Confirmar Contraseña</label>
          </div>

          <div class="inputContainer">
              <input type="number" class="input" placeholder="a"  name="edad">
              <label for="" class="label">Edad</label>
            </div>


      </div>

        <div class="right">
        
            <div class="inputContainer">
              <input type="text" class="input" placeholder="a"  name="nombre">
              <label for="" class="label">Nombre</label>
            </div>

            <div class="inputContainer">
              <input type="text" class="input" placeholder="a"  name="apellido">
              <label for="" class="label">Apellido</label>
            </div>

            <div class="inputContainer">
              <input type="text" class="input" placeholder="a"  name="CI">
              <label for="" class="label">Cedula de Identidad</label>
            </div>

            <div class="inputContainer">
              <input type="text" class="input" placeholder="a"  name="telefono">
              <label for="" class="label">Numero de Telefono</label>
            </div>

            <div class="comboBox">

            <div class="inputContainer2">            
                <?php
                  llenaCiudad(); 
                ?>                
            </div>

            <div class="inputContainer2">
              
              <select name="sexo" class="input2" onchange="changeMe(this)">
                <option value="" selected disabled hidden>Sexo</option>      
                <option value="M" placeholder="a">M</option>
                <option value="F" placeholder="a">F</option>
                <option value="N/A" placeholder="a">N/A</option>
                <script type="text/javascript">
                  function changeMe(sel){
                    sel.style.color = '#000';
                  }
                </script>
                
              </select></p>
            </div>


            </div>

                      
          

           

        </div>

      </div>

  
      <input type="submit" class="submitBtn" value="Registrarse">
    </form>
    </div>
   
   
    <?php
            if (isset($_POST["usuario"],$_POST["email"],$_POST["pw"],$_POST["pw2"],$_POST["nombre"],$_POST["apellido"],$_POST["edad"],$_POST["sexo"],
            $_POST["nb_ciudad"],$_POST["CI"],$_POST["telefono"])
            && !empty($_POST["usuario"]) && !empty($_POST["email"]) && !empty($_POST["pw"]) && !empty($_POST["pw2"]) && !empty($_POST["nombre"] && !empty($_POST["CI"]) && !empty($_POST["telefono"])) 
            && !empty($_POST["apellido"]) && !empty($_POST["edad"]) && !empty($_POST["sexo"]) && !empty($_POST["nb_ciudad"]))
                    if ($_POST['pw'] == $_POST['pw2']){
                        registrarCuenta(generarId("usuario","id_usuario"),$_POST["usuario"],$_POST["email"],$_POST["pw"],$_POST["nombre"],
                        $_POST["apellido"],$_POST["edad"],$_POST["sexo"],buscarIDCiudad($_POST["nb_ciudad"]));
                        registrarPersona(generarId("persona", "idpersona"),$_POST["CI"],$_POST["nombre"],$_POST["telefono"],"Cliente");
                        ?>
                        <script type="text/javascript">
                          window.location = "http://localhost/Proyecto%20BD/IniciarSesion.php";
                        </script> 
                         <?php
                    }
                    else{
                        echo "LAS CONTRASEÑAS NO COINCIDEN, INTENTE DE NUEVO";
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