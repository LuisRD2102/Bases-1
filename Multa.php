<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UCAB Continental</title>
    <link rel="stylesheet" href="styleDashboard.css">
  
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet">
      <?php
        include('control.php');
  ?>
</head>
<body>
    <div class="containerAcc">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="img/mundo.png">
                    <h2>UCAB <span class = "danger">Continental</span></h2>
                </div>
               
            </div>

            <div class="sidebar">
                <a href="http://127.0.0.1:5500/dashboard.html"  id="btn1" onclick="seleccionar()">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                </a>

                <a href="#" id="btn2" onclick="seleccionar2()" class="polizas-btn " >
                    <span class="material-icons-sharp" id="icono">person_outline</span>
                    <h3>Pólizas</h3>
                    <span class="material-icons-sharp expand">expand_more</span>
                </a>
             
                        <a href="http://localhost/Pruebas/Vida.php" class="sub-menu showSub">
                            <span class="material-icons-sharp">favorite_border</span>
                            <h5>Vida</h5>
                        </a>

                        <a href="http://localhost/Pruebas/Hogar.php" class="sub-menu showSub">
                            <span class="material-icons-sharp">roofing</span> 
                            <h5>Hogar</h5>
                        </a>

                        <a href="http://localhost/Pruebas/Vehiculo.php" class="sub-menu showSub">
                            <span class="material-icons-sharp">directions_car</span> 
                            <h5>Vehiculo</h5>
                        </a>

                
                <a href="#" id="btn3" onclick="seleccionar3()"  class="siniestros-btn active"> 
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3>Siniestros</h3>
                    <span class="material-icons-sharp expand2">expand_more</span>
                </a>

                        <a href="http://localhost/Pruebas/Multa.php" class="sub-menu showSub2">
                            <span class="material-icons-sharp">price_change</span>
                            <h5>Multas</h5>
                        </a>

                        <a href="http://localhost/Pruebas/Accidente.php" class="sub-menu showSub2">
                            <span class="material-icons-sharp">personal_injury</span> 
                            <h5>Accidentes</h5>
                        </a>

                        <a href="http://localhost/Pruebas/AccidenteVehicular.php" class="sub-menu showSub2">
                            <span class="material-icons-sharp">local_fire_department</span> 
                            <h5>Accidente Vehicular</h5>
                        </a>

                       
             
                <a href="#" class="mantenimiento-btn">
                    <span class="material-icons-sharp">settings</span>
                    <h3>Control</h3>
                    <span class="material-icons-sharp expand3">expand_more</span>
                </a>

                        <a href="http://localhost/Pruebas/MantenimientoMultas.php" class="sub-menu showSub3">
                            <span class="material-icons-sharp">price_change</span>
                            <h5>Multas</h5>
                        </a>

                        <a href="http://localhost/Pruebas/MantenimientoAccidentes.php" class="sub-menu showSub3">
                            <span class="material-icons-sharp">personal_injury</span> 
                            <h5>Accidentes</h5>
                        </a>


                <a href="#">
                    <span class="material-icons-sharp">mail_outline</span>
                    <h3>Mensajes</h3>
                    <span class="message-count">26</span>
                </a>

                <a href="#">
                    <span class="material-icons-sharp">inventory</span>
                    <h3>Productos</h3>
                </a>

                <a href="#">
                    <span class="material-icons-sharp">report_gmailerrorred</span>
                    <h3>Reportes</h3>
                </a>

                <a href="#">
                    <span class="material-icons-sharp">settings</span>
                    <h3>Ajustes</h3>
                </a>

                <a href="#">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Cerrar Sesión</h3>
                </a>
            </div>
        </aside>

        <script>
             $('.polizas-btn').click(function(){
             $('aside .sidebar .showSub').toggleClass("show");
             $('aside .sidebar .expand').toggleClass("rotate");
            
           });
           
        </script>

        <script>
             $('.siniestros-btn').click(function(){
             $('aside .sidebar .showSub2').toggleClass("show");
             $('aside .sidebar .expand2').toggleClass("rotate");
            
           });
           
        </script>

        <script>
             $('.mantenimiento-btn').click(function(){
             $('aside .sidebar .showSub3').toggleClass("show");
             $('aside .sidebar .expand3').toggleClass("rotate");
            
           });
           
        </script>

        <!--------------------------------FINAL DEL ASIDE--------------------------->
        
        <main>

        
        <div class="topPolizas">
                <h1>Gestión de Multas</h1>
        </div>

        <div class="formAcc">
                    <h2>Registrar Multa</h2>

                    <div class="wrapperAccPersonas">
                        
                        <form class="formAccPersonas" method="post">
                          <h1 class="titleMul">Datos Multa</h1>


                            <div class="columnasAcc">

                                <div class="left">

                                    <div class="fechas-al-lado">
                                        
                                            <div class="fechaAccidente">
                                                <h3>Fecha de la Multa</h3>
                                                <input type="date" class="date" name="fechaMulta" required>
                                            </div>

                                            <div class="fechaRespuesta">
                                                <h3>Fecha de respuesta</h3>
                                                <input type="date" class="date" name="fechaRespuesta" required>
                                            </div>
                                    </div>

                                        <div class="inputContainer">
                                            <input type="text" class="input" placeholder="a" name="cedulaMulta" maxlength="8" required>
                                            <label for="" class="label">Cedula del Involucrado</label>
                                        </div>
                                        
                                        <div class="inputContainer">
                                            <input type="text" class="input" placeholder="a" name="matricula" maxlength="8" required>
                                            <label for="" class="label">Matricula</label>
                                        </div>     

                                        <div class="inputContainer">
                                            <input type="text" class="input" placeholder="a" name="lugar_multa" required>
                                            <label for="" class="label">Lugar de la Multa</label>
                                        </div>

                                        <div class="inputContainer">
                                            <input type="text" class="input" placeholder="a" name="hora_multa" maxlength="5" required>
                                            <label for="" class="label">Hora de la Multa</label>
                                         </div>

                                   

                                </div>

                                <div class="right">

                                            <div class="inputContainer2">
                                                        
                                                        <select name="id_rechazo" class="input2" onchange="changeMe(this)" required>
                                                            <option value="" selected disabled hidden>Rechazado</option>      
                                                            <option value="Si" placeholder="a">Si</option>
                                                            <option value="No" placeholder="a">No</option>
                                                            <script type="text/javascript">
                                                                function changeMe(sel){
                                                                    sel.style.color = '#000';
                                                                }
                                                            </script>                                                
                                                        </select>
                                             </div>
                                        
                                    
                                            <div class="inputContainer">
                                                <input type="number" class="input" placeholder="a" name="monto_reconocido" required>
                                                <label for="" class="label">Monto Reconocido</label>
                                            </div>

                                            <div class="inputContainer">
                                                <input type="number" class="input" placeholder="a" name="monto_solicitado" required>
                                                <label for="" class="label">Monto Solicitado</label>
                                            </div>

                                            <div class="inputContainer">
                                            <input type="number" class="input" placeholder="a" name="importe" required>
                                            <label for="" class="label">Importe</label>
                                            </div>

                                            <div class="inputContainer2">
                                                        
                                                        <select name="puntaje" class="input2" onchange="changeMe(this)" required>
                                                            <option value="" selected disabled hidden>Puntaje de Gravedad</option>      
                                                            <option value="1" placeholder="a">1</option>
                                                            <option value="2" placeholder="a">2</option>
                                                            <option value="3" placeholder="a">3</option>
                                                            <option value="4" placeholder="a">4</option>
                                                            <option value="5" placeholder="a">5</option>
                                                            <option value="6" placeholder="a">7</option>
                                                            <option value="8" placeholder="a">8</option>
                                                            <option value="9" placeholder="a">9</option>
                                                            <option value="10" placeholder="a">10</option>
                                                            <script type="text/javascript">
                                                                function changeMe(sel){
                                                                    sel.style.color = '#000';
                                                                }
                                                            </script>                                                
                                                        </select>
                                             </div>
                                </div>

                            </div>

                        

                     

                 

                            <input type="hidden" id="cedulasTitulares" name="campoTitulares">
                            <input type="hidden" id="cedulasBeneficiarios" name="campoBeneficiarios">
                            <input type="submit" class="submitBtn" value="Crear Multa" >
                        </form>

                       
                        
                    </div>

                    <?php 
                        
                        if (isset($_POST["cedulaMulta"])){

                            if (verificarVehiculo(buscarPersonaPorCI($_POST["cedulaMulta"]),$_POST["matricula"])){
                                if (conectar()){
                                    registroMulta($_POST["fechaMulta"],$_POST["lugar_multa"],$_POST["hora_multa"],3,$_POST["fechaRespuesta"],$_POST["id_rechazo"],$_POST["monto_reconocido"],$_POST["monto_solicitado"],$_POST["matricula"],$_POST["importe"],$_POST["puntaje"]);
                                }
                            }
                            else{
                                echo '<script>alert("Verifique si la cédula posee el vehículo indicado.")</script>';
                            }
                        }

                        ?>
                    
                     
                   


                </div>

           

            

        </main>

        <!------------------------------FIN DEL MAIN----------------------->
       
        <div class="right">

                    <div class="top">                       
                        <div class="theme-toggler">
                            <span class="material-icons-sharp active">light_mode</span>
                            <span class="material-icons-sharp">dark_mode</span>
                        </div>
        
                        <div class="profile">
                            <div class="info">
                                <p>Hey, <b>Daniel</b></p>
                                <small class = "text-muted">Admin</small>
                            </div>
                            <div class="profile-photo">
                                <img src="img/user2.jpg">
                            </div>
                        </div>
                    </div>

                <!---FINAL DEL TOP-->

                

                   
    </div>
   
    <script src="./dashboard.js"></script>
    <script src="./prueba.js"></script>
</body>
</html>